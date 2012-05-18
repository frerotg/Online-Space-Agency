<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_building
 *
 * @author greenpix
 */
class c_building extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('is_connect')){
            
            $this->load->model('m_user');
            $user_id = $this->session->userdata('id');
            $resources['resource'] = $this->m_user->getResources($user_id);
            $this->load->model('m_message');
            $resources['message'] = count($this->m_message->getMessageNoRead($user_id));
            $data['topbar'] = $this->load->view('template/topbar/user_interface_topbar', $resources, TRUE);
            
            $this->load->model('m_building');
            $buildings = $this->m_building->checkUnderConstruction($user_id);

            foreach ($buildings as $building) {
                if(now() >= $building->date_end_building){
                	$this->load->model('m_message');
                	
                	$this->m_message->addAlert($user_id, 'Bâtiment construit', 'Votre bâtiment "'.$building->name_building.'" à été construit avec succès !');
                    $this->m_building->changeStatus($user_id, $building->id_building);
                }
            }
        }
        else{
            redirect('c_main/index');
        }
    }
    
    function index(){
        
        $this->load->model('m_building');
        $list['types'] = $this->m_building->listType();
        
        $data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
        $data['content'] = $this->load->view('template/content/building_index_content', $list, TRUE);
        $data['footer'] = $this->load->view('template/footer/user_interface_footer', '', TRUE);

        $this->load->view('layout',$data);
    }
    
    function typeList(){
        
		$user_id = $this->session->userdata('id');
        $type_id = $this->uri->segment(3);
        
        $this->load->model('m_building');
        $list['buildings'] = $this->m_building->listUserBuilding($user_id, $type_id);
        $user_buildings = $this->m_building->listUserBuildingAll($user_id);
        $user_technologys = $this->m_building->listUserTechnologyAll($user_id);
        
        foreach($user_buildings AS $user_building){
        	$list['user_buildings'][$user_building->id_building] = $user_building->level_building;
        }
        foreach($user_technologys AS $user_technology){
        	$list['user_technologys'][$user_technology->id_technology] = $user_technology->level_technology;
        }
        
        $underConstruction = $this->m_building->checkUnderConstruction($user_id);
        
        if(!empty($underConstruction)){
        	$list['underConstruction'] = 1;
        }
        else{
        	$list['underConstruction'] = 0;
        }
        
        $data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
        $data['content'] = $this->load->view('template/content/building_typeList_content', $list, TRUE);
        $data['footer'] = $this->load->view('template/footer/user_interface_footer', '', TRUE);
        $data['script'] = $this->load->view('template/script/building_script', '', TRUE);
        
        $this->load->view('layout',$data);
        
        
    }
    
    function serial(){
        $tableau = array(1 => '1');
        
        $serial = serialize($tableau);
        
        echo($serial);
    }
    
    function build(){
        
        $this->load->model('m_building');
        $user_id = $this->session->userdata('id');
        $building_id = $this->uri->segment(3);
        
        $xml = simplexml_load_file('xml/building.xml');
        $buildings =  new SimpleXMLElement('xml/building.xml', NULL, TRUE);
        $cout = $buildings->xpath('/buildings/building[@id='.$building_id.']/cout[@niveau="1"]');
        
        $buildTime = $cout[0]->time;
        $reqPierre = $cout[0]->pierre;
        $reqMetal = $cout[0]->metal;
        $reqOxygene = $cout[0]->oxygene;
        $reqCarburant = $cout[0]->carburant;
        $reqArgent = $cout[0]->argent;
        
        $this->load->model('m_user');
        $resources = $this->m_user->getResources($user_id);

        if($reqPierre<=$resources->pierre AND $reqMetal<=$resources->metal AND $reqOxygene<=$resources->oxygene AND $reqCarburant<=$resources->carburant AND $reqArgent<=$resources->argent){
            
            $this->m_building->updateBuilding($user_id, $building_id, 1, $buildTime);
            
            $endPierre = ($resources->pierre) - $reqPierre;
            $this->m_user->updateResource($user_id, 'pierre', $endPierre);
            
            $endMetal = ($resources->metal) - $reqMetal;
            $this->m_user->updateResource($user_id, 'metal', $endMetal);
            
            $endArgent = ($resources->argent) - $reqArgent;
            $this->m_user->updateResource($user_id, 'argent', $endArgent);
            
            $status = 'success';
            $message = 'La construction du bâtiment à débuté';
        }
        else{
            $status = 'error';
            $message = 'Vous n\'avez pas assez de ressources pour construire ce bâtiment';
        }
        
        $data = array('status'=>$status, 'time'=>$buildTime, 'message'=>$message);
        echo json_encode($data);
    }
    
    function evolve(){
        $this->load->model('m_building');
        
        $user_id = $this->session->userdata('id');
        $building_id = $this->uri->segment(3);
        $level = $this->uri->segment(4);
        
        $xml = simplexml_load_file('xml/building.xml');
        $buildings =  new SimpleXMLElement('xml/building.xml', NULL, TRUE);
        $cout = $buildings->xpath('/buildings/building[@id='.$building_id.']/cout[@niveau='.$level.']');
        
        $buildTime = $cout[0]->time;
        $reqPierre = $cout[0]->pierre;
        $reqMetal = $cout[0]->metal;
        $reqOxygene = $cout[0]->oxygene;
        $reqCarburant = $cout[0]->carburant;
        $reqArgent = $cout[0]->argent;
        
        $this->load->model('m_user');
        $resources = $this->m_user->getResources($user_id);
        
        if($reqPierre<=$resources->pierre AND $reqMetal<=$resources->metal AND $reqOxygene<=$resources->oxygene AND $reqCarburant<=$resources->carburant AND $reqArgent<=$resources->argent){
            $this->m_building->updateBuilding($user_id, $building_id, $level, $buildTime);
            
            $endPierre = ($resources->pierre) - $reqPierre;
            $this->m_user->updateResource($user_id, 'pierre', $endPierre);
            
            $endMetal = ($resources->metal) - $reqMetal;
            $this->m_user->updateResource($user_id, 'metal', $endMetal);
            
            $endArgent = ($resources->argent) - $reqArgent;
            $this->m_user->updateResource($user_id, 'argent', $endArgent);
            
            $status = 'success';
        }
        else{
            $status = 'error';
        }
        $data = array('status'=>$status, 'time'=>$buildTime);
        echo json_encode($data);
    }
}
