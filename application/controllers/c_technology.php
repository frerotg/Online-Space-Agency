<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_technology
 *
 * @author greenpix
 */
class c_technology extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('is_connect')){
            
            $this->load->model('m_user');
            $user_id = $this->session->userdata('id');
            $resources['resource'] = $this->m_user->getResources($user_id);
            $this->load->model('m_message');
                $resources['message'] = count($this->m_message->getMessageNoRead($user_id));
            $data['topbar'] = $this->load->view('template/topbar/user_interface_topbar', $resources, TRUE);
        
            $this->load->model('m_technology');
            $technologys = $this->m_technology->checkUnderDevelop($user_id);

            foreach ($technologys as $technology) {
                if(now() >= $technology->date_end_technology){
                    $this->m_technology->changeStatus($user_id, $technology->id_technology);
                }
            }
        }
        else{
            redirect('c_main/index');
        }
    }
    
    function index(){
        
        $this->load->model('m_technology');
         $this->load->model('m_building');
         $user_id = $this->session->userdata('id');
         
        $list['types'] = $this->m_technology->listType();
        
        $list['recherche'] = $this->m_building->haveBuilding($user_id, 17);
        
        $data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
        $data['content'] = $this->load->view('template/content/technology_index_content', $list, TRUE);
        $data['footer'] = $this->load->view('template/footer/user_interface_footer', '', TRUE);

        $this->load->view('layout',$data);
    }
    
    function typeList(){
        
        $user_id = $this->session->userdata('id');
        $type_id = $this->uri->segment(3);
        
        $this->load->model('m_technology');
        $list['users_technologys'] = $this->m_technology->listUserTechnology($user_id, $type_id);
        $list['technologys'] = $this->m_technology->listTechnology($type_id);
        $list['type'] = $this->m_technology->getType($type_id);
        
        $underConstruction = $this->m_technology->checkUnderDevelop($user_id);
        
        
        if(!empty($underConstruction)){
        	$list['underConstruction'] = 1;
        }
        else{
        	$list['underConstruction'] = 0;
        }
        
        $data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
        $data['content'] = $this->load->view('template/content/technology_typeList_content', $list, TRUE);
        $data['footer'] = $this->load->view('template/footer/user_interface_footer', '', TRUE);
        $data['script'] = $this->load->view('template/script/technology_script', '', TRUE);
        
        $this->load->view('layout',$data);
        
        
    }
    
    function serial(){
        $tableau = array('color' => 'red', 'shape' => 'round', 'size' => '');
        
        $serial = serialize($tableau);
        
        echo($serial);
    }
    
    function develop(){
        
        $this->load->model('m_technology');
        $user_id = $this->session->userdata('id');
        $technology_id = $this->uri->segment(3);
        
        $xml = simplexml_load_file('xml/technology.xml');
        $technologys =  new SimpleXMLElement('xml/technology.xml', NULL, TRUE);
        $cout = $technologys->xpath('/technologys/technology[@id='.$technology_id.']/cout[@niveau="1"]');
        
        $ResearchTime = $cout[0]->time;
        
        $status = 'success';

        $this->m_technology->updateTechnology($user_id, $technology_id, 1, $ResearchTime);
        
        $data = array('status'=>$status, 'time'=>$ResearchTime, 'message'=>'Le developpement de la technologie commence');
        
        echo json_encode($data);
    }
    
    function improve(){
        $this->load->model('m_technology');
        
        $user_id = $this->session->userdata('id');
        $technology_id = $this->uri->segment(3);
        $level = $this->uri->segment(4);
        
        $xml = simplexml_load_file('xml/technology.xml');
        $technologys =  new SimpleXMLElement('xml/technology.xml', NULL, TRUE);
        $cout = $technologys->xpath('/technologys/technology[@id='.$technology_id.']/cout[@niveau='.$level.']');
        
        $ResearchTime = $cout[0]->time;
        
        $status = 'success';

        $this->m_technology->updateTechnology($user_id, $technology_id, $level, $ResearchTime);
        
        $data = array('status'=>$status, 'time'=>$ResearchTime, 'message'=>'Le developpement de la technologie commence');
        
        echo json_encode($data);
    }
}

?>
