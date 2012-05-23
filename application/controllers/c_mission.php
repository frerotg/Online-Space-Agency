<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_mission
 *
 * @author greenpix
 */
class c_mission extends CI_Controller {
    
       public function __construct(){
       parent::__construct();
            if($this->session->userdata('is_connect')){
                
                $this->load->model('m_user');
                $this->load->helper('date');
                
                $user_id = $this->session->userdata('id');
                $resources['resource'] = $this->m_user->getResources($user_id);
                $this->load->model('m_message');
                $resources['message'] = count($this->m_message->getMessageNoRead($user_id));
                $data['topbar'] = $this->load->view('template/topbar/user_interface_topbar', $resources, TRUE);
                
                $this->load->model('m_mission');
                $this->load->model('m_building');
                $missions = $this->m_mission->listUserMission($user_id);
                
                foreach ($missions as $mission) {
                    if( (($mission->date_start_start) <= now()) AND (($mission->date_test) >= now()) ){
                        $this->m_mission->changeStatus($user_id, $mission->id_mission, 2);
                    }
                    elseif( (($mission->date_test) <= now()) AND (($mission->date_start_end) >= now()) ){
                        $this->m_mission->changeStatus($user_id, $mission->id_mission, 3);
                    }
                    elseif( (($mission->date_start_end) <= now()) AND (($mission->date_end_start) == 0) ){
                    	if($mission->id_space_action == NULL){
                        	$this->m_mission->changeStatus($user_id, $mission->id_mission, 4);
                        }
                        else{
                        	if($mission->date_start_space_action != 0 AND $mission->date_end_space_action > now()){
                        		$this->m_mission->changeStatus($user_id, $mission->id_mission, 5);
                        	}
                        	else if($mission->date_start_space_action != 0 AND $mission->date_end_space_action <= now()){
                        		$this->m_mission->changeStatus($user_id, $mission->id_mission, 6);
                        	}
                        }
                    }
                    elseif( (($mission->date_end_start) <= now()) AND (($mission->date_end_end) >= now()) ){
                        $this->m_mission->changeStatus($user_id, $mission->id_mission, 7);
                    }
                    elseif( (($mission->date_end_end) <= now()) AND (($mission->date_end_end) != 0) ){
                        $this->m_mission->changeStatus($user_id, $mission->id_mission, 8);
                    }
                }
                
                $userSpaceObjects = $this->m_mission->listUserSpaceObject($user_id);
                
                foreach($userSpaceObjects AS $userSpaceObject){
                	if($userSpaceObject->xp_space_object_status == 0){
                		$this->m_mission->setSpaceObjectStatus($user_id, $userSpaceObject->id_space_object, 1);
                	}
                	elseif(($userSpaceObject->xp_space_object_status >= 1) AND ($userSpaceObject->xp_space_object_status < 100)){
                		$this->m_mission->setSpaceObjectStatus($user_id, $userSpaceObject->id_space_object, 2);
                	}
                	elseif(($userSpaceObject->xp_space_object_status >= 100) AND ($userSpaceObject->xp_space_object_status < 1000)){
                		$this->m_mission->setSpaceObjectStatus($user_id, $userSpaceObject->id_space_object, 3);
                	}
                	elseif(($userSpaceObject->xp_space_object_status >= 1000) AND ($userSpaceObject->xp_space_object_status < 10000)){
                		$this->m_mission->setSpaceObjectStatus($user_id, $userSpaceObject->id_space_object, 4);
                	}
                	elseif(($userSpaceObject->xp_space_object_status >= 10000) AND ($userSpaceObject->xp_space_object_status < 100000)){
                		$this->m_mission->setSpaceObjectStatus($user_id, $userSpaceObject->id_space_object, 5);
                	}
                	elseif($userSpaceObject->xp_space_object_status >= 100000){
                		$this->m_mission->setSpaceObjectStatus($user_id, $userSpaceObject->id_space_object, 6);
                	}
                }
            }
            else{
                redirect('c_main/index');
            }

    }
    
    function index(){

        $data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
        $data['content'] = $this->load->view('template/content/mission_index_content','', TRUE);
        $data['footer'] = $this->load->view('template/footer/user_interface_footer', '', TRUE);
        $data['script'] = $this->load->view('template/script/mission_script', '', TRUE);

        $this->load->view('layout',$data);
    }
    
    function listMission(){
        $user_id = $this->session->userdata('id');
        
        $this->load->model('m_mission');
        $foo['missions'] = $this->m_mission->listUserMission($user_id);
        
        $data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
        $data['content'] = $this->load->view('template/content/mission_list_content',$foo,TRUE);
        $data['footer'] = $this->load->view('template/footer/main_footer', '', TRUE);
        $data['script'] = $this->load->view('template/script/mission_script', '', TRUE);
        
        $this->load->view('layout',$data);
    }
    
    function createMission(){
        
        $user_id = $this->session->userdata('id');
        
        $this->load->model('m_mission');
        
        $foo['zones'] = $this->m_mission->listZone('all');
        $foo['objects'] = $this->m_mission->listObject($user_id);
        $foo['coques'] = $this->m_mission->listEquipment(2, $user_id);
        $foo['lances'] = $this->m_mission->listEquipment(1, $user_id);
        $foo['modules'] = $this->m_mission->listEquipment(3, $user_id);
        $foo['combinaisons'] = $this->m_mission->listEquipment(4, $user_id);
        $foo['pilotes'] = $this->m_mission->listPersonnel(2, $user_id);
        $foo['spationautes'] = $this->m_mission->listPersonnel(1, $user_id);
        
        $data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
        $data['content'] = $this->load->view('template/content/mission_create_content',$foo,TRUE);
        $data['footer'] = $this->load->view('template/footer/main_footer', '', TRUE);
        $data['script'] = $this->load->view('template/script/mission_script', '', TRUE);
        
        $this->load->view('layout',$data);
    }
    function create(){
        
        $this->load->model('m_mission');
        $this->load->model('m_building');
        $this->load->library('form_validation');
        
        $user_id = $this->session->userdata('id');

        $this->form_validation->set_rules('zone', 'Nom de l\'agence', 'required');
        $this->form_validation->set_rules('object', 'Initiale de l\'agence', 'required');
        $this->form_validation->set_rules('coque', 'Nom du directeur', 'required');
        $this->form_validation->set_rules('lance', 'Prénom du directeur', 'required');
        $this->form_validation->set_rules('module', 'Prénom du directeur', 'required');
        $this->form_validation->set_rules('combinaison', 'Prénom du directeur', 'required');
        $this->form_validation->set_rules('pilote', 'Prénom du directeur', 'required');
        $this->form_validation->set_rules('spationaute', 'Prénom du directeur', 'required');
        $this->form_validation->set_rules('spationaute2', 'Prénom du directeur', 'required');
        $this->form_validation->set_rules('phase_test', 'Prénom du directeur', 'required|numeric');

        if ($this->form_validation->run() == FALSE){

            $foo['zones'] = $this->m_mission->listZone();
            $foo['objects'] = $this->m_mission->listObject($user_id);
            $foo['coques'] = $this->m_mission->listEquipment(2, $user_id);
            $foo['lances'] = $this->m_mission->listEquipment(1, $user_id);
            $foo['modules'] = $this->m_mission->listEquipment(3, $user_id);
            $foo['combinaisons'] = $this->m_mission->listEquipment(4, $user_id);
            $foo['pilotes'] = $this->m_mission->listPersonnel(2, $user_id);
            $foo['spationautes'] = $this->m_mission->listPersonnel(1, $user_id);

            $data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
            $data['content'] = $this->load->view('template/content/mission_create_content',$foo,TRUE);
            $data['script'] = $this->load->view('template/script/mission_script', '', TRUE);
        }
        else{

            $zone = $this->input->post('zone');
            $object = $this->input->post('object');
            $coque = $this->input->post('coque');
            $lance = $this->input->post('lance');
            $module = $this->input->post('module');
            $combinaison = $this->input->post('combinaison');
            $pilote = $this->input->post('pilote');
            $spationaute = $this->input->post('spationaute');
            $spationaute2 = $this->input->post('spationaute2');
            $date_start_start = now();
            $phase_test = $this->input->post('phase_test');
            $QG = $this->m_building->haveBuilding($user_id, 15);
            $timeBytest = 150-(($QG->level_building-1)*5);
            $date_test = now()+($phase_test*$timeBytest);         

            $data = array(
                'id_user' => $user_id, 
                'id_status' => 1,
                'id_zone_space' => $zone,
                'id_space_object' => $object,
                'coque' => $coque,
                'lance' => $lance,
                'module' => $module,
                'combinaison' => $combinaison,
                'pilote' => $pilote,
                'spationaute' => $spationaute,
                'spationaute2' => $spationaute2,
                'phase_test' => $phase_test,
                'id_space_action' => NULL,
                'date_start_start' => $date_start_start,
                'date_test' => $date_test,
				'date_start_end' => $date_test+300
            );

            $this->m_mission->addMission($data);


            $data['header'] = $this->load->view('template/header/register_success_header', '', TRUE);
            $data['content'] = $this->load->view('template/element/form/register/success_mission', TRUE);
        }
        
        $data['footer'] = $this->load->view('template/footer/main_footer', '', TRUE);
        $data['script'] = $this->load->view('template/script/register_script', '', TRUE);
        
        $this->load->view('layout',$data);
    }
    
    function viewMission(){
        $this->load->model('m_mission');
        $this->load->helper('date');
        
        $user_id = $this->session->userdata('id');
        $id = $this->uri->segment(3);
        
        $info = $this->m_mission->infoMission($user_id, $id);
        
        switch ($info->id_status) {
        case 1:
            $data['content'] = $this->load->view('template/content/mission_viewStatus1_content','',TRUE);
            break;
        case 2:
            $data['content'] = $this->load->view('template/content/mission_viewStatus2_content','',TRUE);
            break;
        case 3:
            $data['content'] = $this->load->view('template/content/mission_viewStatus3_content','',TRUE);
            break;
        case 4:
        	$mission['info'] = $info;
            $mission['space_object'] = $this->m_mission->getUserSpaceObject($user_id, $info->id_space_object);
            $mission['next_status'] = $this->m_mission->getNextSpaceObjectStatus($mission['space_object']->id_space_object_status);     
            $mission['coque'] = $this->m_mission->getEquipment($info->coque);
            $mission['lance'] = $this->m_mission->getEquipment($info->lance);
            $mission['module'] = $this->m_mission->getEquipment($info->module);
            $mission['combinaison'] = $this->m_mission->getEquipment($info->combinaison);
            $mission['pilote'] = $this->m_mission->getPersonnel($info->pilote);
            $mission['spationaute'] = $this->m_mission->getPersonnel($info->spationaute);
            $mission['spationaute2'] = $this->m_mission->getPersonnel($info->spationaute2);
            $mission['actions'] = $this->m_mission->getAction('all');
            $mission['events'] = $this->m_mission->getEvents($user_id);
            $afteraction = $this->session->flashdata('afterAction');    
            $lastEvent = $this->uri->segment(4);
            if($lastEvent != NULL){
            	if($lastEvent == 0){
            		$mission['statusLastEvent'] = 'fail';
            		$mission['event'] = 'Vous avez déjà découvert toute les informations avec cette action';
            	}
            	else{
            		$mission['statusLastEvent'] = 'success';
            		$mission['event'] = $this->m_mission->getSingleEvents($user_id, $lastEvent);
            	}
            }
            
            
            $data['content'] = $this->load->view('template/content/mission_viewStatus4_content',$mission ,TRUE);
            break;
        case 5:
        	$mission['info'] = $info;
        	$mission['space_object'] = $this->m_mission->getUserSpaceObject($user_id, $info->id_space_object);            
            $mission['coque'] = $this->m_mission->getEquipment($info->coque);
            $mission['lance'] = $this->m_mission->getEquipment($info->lance);
            $mission['module'] = $this->m_mission->getEquipment($info->module);
            $mission['combinaison'] = $this->m_mission->getEquipment($info->combinaison);
            $mission['pilote'] = $this->m_mission->getPersonnel($info->pilote);
            $mission['spationaute'] = $this->m_mission->getPersonnel($info->spationaute);
            $mission['spationaute2'] = $this->m_mission->getPersonnel($info->spationaute2);
            $mission['actions'] = $this->m_mission->getAction($info->id_space_action);
            $mission['events'] = $this->m_mission->getEvents($user_id);
            $mission['now'] = now();

        	
            $data['content'] = $this->load->view('template/content/mission_viewStatus5_content',$mission,TRUE);
            break;
        case 6:
        	$mission['info'] = $info;
        	$mission['space_object'] = $this->m_mission->getUserSpaceObject($user_id, $info->id_space_object);            
            $mission['coque'] = $this->m_mission->getEquipment($info->coque);
            $mission['lance'] = $this->m_mission->getEquipment($info->lance);
            $mission['module'] = $this->m_mission->getEquipment($info->module);
            $mission['combinaison'] = $this->m_mission->getEquipment($info->combinaison);
            $mission['pilote'] = $this->m_mission->getPersonnel($info->pilote);
            $mission['spationaute'] = $this->m_mission->getPersonnel($info->spationaute);
            $mission['spationaute2'] = $this->m_mission->getPersonnel($info->spationaute2);
            $mission['actions'] = $this->m_mission->getAction($info->id_space_action);
            $mission['events'] = $this->m_mission->getEvents($user_id);
            $mission['now'] = now();
        
            $data['content'] = $this->load->view('template/content/mission_viewStatus6_content',$mission,TRUE);
            break;
        case 7:
        	print_r(now());
            $data['content'] = $this->load->view('template/content/mission_viewStatus7_content','',TRUE);
            break;
        case 8:
            $data['content'] = $this->load->view('template/content/mission_viewStatus8_content','',TRUE);
            break;
        }     
        
        $data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE); 
        $data['script'] = $this->load->view('template/script/mission_script', '', TRUE);
        $data['footer'] = $this->load->view('template/footer/main_footer', '', TRUE);
        $data['script'] = $this->load->view('template/script/register_script', '', TRUE);
        
        $this->load->view('layout',$data);
    }
    
    function doAction(){
    	$this->load->model('m_mission');
    	$this->load->helper('date');
    	
        $user_id = $this->session->userdata('id');
        $id_mission = $this->uri->segment(3);
        $id_action = $this->uri->segment(4);
        
        $action = $this->m_mission->getAction($id_action);
        $info = $this->m_mission->infoMission($user_id, $id_mission);
        
        if(($info->point_action - $action->cout_space_action) >= 0){
	        $data = array(
	                'id_space_action' => $id_action,
	                'date_start_space_action' => now(),
	                'date_end_space_action' => (now() + $action->time_space_action),
	                'id_status' => 5,
	        );
	        
			$this->m_mission->addAction($data, $user_id, $id_mission);
			$this->m_mission->updateActionPoint($action->cout_space_action, $user_id, $id_mission);
			
			redirect('c_mission/listMission');
		}
		else{
			echo 'Vous n\'avez pas assez de point d\'action';
		}   

    }
    
    function analyseAction() {
    	$this->load->model('m_mission');
    	$this->load->helper('date');
    	$this->load->library('probabilityRandom');
    	
    	$user_id = $this->session->userdata('id');
    	$id_mission = $this->uri->segment(3);
        $id_action = $this->uri->segment(4);
        
        $info = $this->m_mission->infoMission($user_id, $id_mission);
        $eventsNotAlreadys = $this->m_mission->getSpaceObjectEvent($info->id_space_object,$id_action);
        $eventsAlreadys = $this->m_mission->getEvents($user_id);
        
        $events = array();
        
        foreach($eventsNotAlreadys as $eventsNotAlready){
        	$event = $this->m_mission->getSingleEvents($user_id, $eventsNotAlready->id_space_object_event);
        	if(empty($event)){
        		$events[] = $eventsNotAlready;
        	}
        }
        
        $total = 0;
        
        if(empty($events)){
        	
        	$data2 = array(
	                'id_space_action' => NULL,
	                'date_start_space_action' => 0,
	                'date_end_space_action' => 0,
	                'id_status' => 4,
	        );
	        
			$this->m_mission->addAction($data2, $user_id, $id_mission);
			
        	
        	redirect('c_mission/viewMission/'.$id_mission.'/0'); 
        }
        else{       
        	foreach($events AS $event){
        		$total = $total + $event->probabilite_space_object_event;
        	}
        	        	
        	$multiplicateur = ($total*100)/$total;
	        
	        $eventsProba = new probabilityRandom;
	        
	        foreach($events AS $event){
	        	$eventsProba->add( $event, (($event->probabilite_space_object_event)*$multiplicateur));
	        }
	        
	  
	        $event = $eventsProba->get();
	        
	        
			$this->m_mission->updateUserSpaceObject($user_id, $info->id_space_object, $event->point_space_object_event);

			$data = array(
	                'id_user' => $user_id,
	                'id_space_object_event' => $event->id_space_object_event,
	                'id_mission' => $id_mission,
	                'date_discover_space_object_event' => now(),
	        );
	        
	        
	        
			$this->m_mission->addUserSpaceObjectEvent($data);
			
			$data2 = array(
	                'id_space_action' => NULL,
	                'date_start_space_action' => 0,
	                'date_end_space_action' => 0,
	                'id_status' => 4,
	        );
	        
			$this->m_mission->addAction($data2, $user_id, $id_mission);
			
			
			redirect('c_mission/viewMission/'.$id_mission.'/'.$event->id_space_object_event);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      

        }
    }
    function comeBack(){
    	$this->load->model('m_mission');
    	$this->load->helper('date');
    	
        $user_id = $this->session->userdata('id');
        $id_mission = $this->uri->segment(3);

        $info = $this->m_mission->infoMission($user_id, $id_mission);
        
		$data = array(
	                'date_end_start' => now(),
	                'date_end_end' => (now() + 300),
	                'id_status' => 7
	        );
	        
		$this->m_mission->comeBack($data, $user_id, $id_mission);
		redirect('c_mission/index');

    }
    
}
?>
