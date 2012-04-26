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
        $list['users_buildings'] = $this->m_building->listUserBuilding($user_id, $type_id);
        $list['users_technologys'] = $this->m_building->listUserTechnology($user_id, $type_id);
        $list['list_building'] = array();
        $list['list_technology'] = array();
        
        foreach ($list['users_buildings'] as $building){
            if($building->level_building == 1){
                $list['list_building'][] = $building->id_building;
            }
        }
        
        foreach ($list['users_technologys'] as $technology){
            if($technology->level_technology == 1){
                $list['list_technology'][] = $technology->id_technology;
            }
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
            $status = 'success';
        }
        else{
            $status = 'error';
        }
        
        $data = array('status'=>$status, 'time'=>$buildTime);
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
        }
        else{
            echo('Pas assez de ressources');
        }
    }
}
