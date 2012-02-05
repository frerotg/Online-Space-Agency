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
                $user_id = $this->session->userdata('id');
                $resources['resource'] = $this->m_user->getResources($user_id);
                $data['topbar'] = $this->load->view('template/topbar/user_interface_topbar', $resources, TRUE);
                
                $user_id = $this->session->userdata('id');
                $this->load->model('m_mission');
                $missions = $this->m_mission->listUserMission($user_id);
                
                foreach ($missions as $mission) {
                    if( (($mission->date_start_start) <= now()) AND (($mission->date_test) >= now()) ){
                        $this->m_mission->changeStatus($user_id, $mission->id_mission, 2);
                    }
                    elseif( (($mission->date_test) <= now()) AND (($mission->date_start_end) >= now()) ){
                        $this->m_mission->changeStatus($user_id, $mission->id_mission, 3);
                    }
                    elseif( (($mission->date_start_end) <= now()) AND (($mission->date_end_start) == 0) ){
                        $this->m_mission->changeStatus($user_id, $mission->id_mission, 4);
                    }
                    elseif( (($mission->date_end_start) <= now()) AND (($mission->date_end_end) >= now()) ){
                        $this->m_mission->changeStatus($user_id, $mission->id_mission, 6);
                    }
                    elseif( (($mission->date_end_end) <= now()) AND (($mission->date_end_end) != 0) ){
                        $this->m_mission->changeStatus($user_id, $mission->id_mission, 7);
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
        $data['footer'] = $this->load->view('template/footer/main_footer', '', TRUE);
        $data['script'] = $this->load->view('template/script/mission_script', '', TRUE);
        
        $this->load->view('layout',$data);
    }
    function create(){
        
        $this->load->model('m_mission');
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
        $this->form_validation->set_rules('date_start', 'Prénom du directeur', 'required');
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
            $date_start = $this->input->post('date_start');
            $phase_test = $this->input->post('phase_test');

            $data = array(
                'id_user' => $user_id,
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
                'date_start_start' => $date_start
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
        $user_id = $this->session->userdata('id');
        $id = $this->uri->segment(3);
        
        $info = $this->m_mission->infoMission($user_id, $id);
        
        switch ($info[0]->id_status) {
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

            $mission['space_object'] = $this->m_mission->getUserSpaceObject($user_id, $info[0]->id_space_object);
            $mission['coque'] = $this->m_mission->getEquipment($info[0]->coque);
            $mission['lance'] = $this->m_mission->getEquipment($info[0]->lance);
            $mission['module'] = $this->m_mission->getEquipment($info[0]->module);
            $mission['combinaison'] = $this->m_mission->getEquipment($info[0]->combinaison);
            $mission['pilote'] = $this->m_mission->getPersonnel($info[0]->pilote);
            $mission['spationaute'] = $this->m_mission->getPersonnel($info[0]->spationaute);
            $mission['spationaute2'] = $this->m_mission->getPersonnel($info[0]->spationaute2);
            
            $mission['actions'] = $this->m_mission->getAction($info[0]->spationaute2);
            
            $data['content'] = $this->load->view('template/content/mission_viewStatus4_content',$mission ,TRUE);
            break;
        case 5:
            $data['content'] = $this->load->view('template/content/mission_viewStatus5_content','',TRUE);
            break;
        case 6:
            $data['content'] = $this->load->view('template/content/mission_viewStatus6_content','',TRUE);
            break;
        case 7:
            $data['content'] = $this->load->view('template/content/mission_viewStatus7_content','',TRUE);
            break;
        }     
        
        $data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE); 
        $data['script'] = $this->load->view('template/script/mission_script', '', TRUE);
        $data['footer'] = $this->load->view('template/footer/main_footer', '', TRUE);
        $data['script'] = $this->load->view('template/script/register_script', '', TRUE);
        
        $this->load->view('layout',$data);
    }
}

?>
