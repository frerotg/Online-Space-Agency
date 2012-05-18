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
class c_message extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
         if($this->session->userdata('is_connect')){
            
            $this->load->model('m_user');
            $user_id = $this->session->userdata('id');
            $resources['resource'] = $this->m_user->getResources($user_id);
            $this->load->model('m_message');
            $resources['message'] = count($this->m_message->getMessageNoRead($user_id));
            $data['topbar'] = $this->load->view('template/topbar/user_interface_topbar', $resources, TRUE);

        }
        else{
            redirect('c_main/index');
        }

    }
    
    function index(){
   	 	$this->load->model('m_message');
   	 	
    	$user_id = $this->session->userdata('id');
    	
        $list['messages'] = $this->m_message->listMessage($user_id);
        
        $data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
        $data['content'] = $this->load->view('template/content/message_index_content', $list, TRUE);
        $data['footer'] = $this->load->view('template/footer/user_interface_footer', '', TRUE);

        $this->load->view('layout',$data);
    }
    
    function listUsername(){
    	$this->load->model('m_message');

		$data['response'] = 'false'; //Set default response
		
		$list = $this->m_message->listUser();
		
		if(!empty($list)){
		   $data['response'] = 'true'; //Set response
		   $data['message'] = array(); //Create array
		   foreach($list as $row){
		      $data['message'][] = array('label'=> $row->username, 'value'=> $row->username); //Add a row to array
		   }
		}
		echo json_encode($data);
    		
    }
    
    function readOne(){
    	$this->load->model('m_message');
    
    	$user_id = $this->session->userdata('id');
    	$id_message = $this->uri->segment(3);
    	
    	$foo['message'] = $this->m_message->getMessage($user_id, $id_message);
    	$this->m_message->readOne($id_message);
    	
    	$data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
        $data['content'] = $this->load->view('template/content/message_readone_content', $foo, TRUE);
        $data['footer'] = $this->load->view('template/footer/user_interface_footer', '', TRUE);

        $this->load->view('layout',$data);
    }
    
    function newMessage(){
    	$data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
        $data['content'] = $this->load->view('template/content/message_sendone_content','',TRUE);
        $data['script'] = $this->load->view('template/script/message_script', '', TRUE);
            
        $this->load->view('layout',$data);
    }
    
    function sendOne(){
    	$this->load->model('m_message');
    	$this->load->library('form_validation');
    	$this->load->helper('date');
    	
    	$user_id = $this->session->userdata('id');

        $this->form_validation->set_rules('username_receive', 'Destinataire du message', 'required|callback_checkUsername');
        $this->form_validation->set_rules('title_message', 'Titre du message', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() == FALSE){

            $data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
            $data['content'] = $this->load->view('template/content/message_sendone_content','',TRUE);
            
            $this->load->view('layout',$data);
        }
        else{

            $username_receive = $this->input->post('username_receive');
            $title_message = $this->input->post('title_message');
            $message = $this->input->post('message');
			
			$id_user_receive = $this->m_message->getID($username_receive);
			
            $data = array(
                'id_user_receive' => $id_user_receive->id,
                'id_user_send' => $user_id,
                'title_message' => $title_message,
                'content_message' => $message,
                'date_message' => now()
            );

            $this->m_message->sendMessage($data);
			
			redirect('c_message/index');
        }
    }
    
    function removeOne(){
    	$this->load->model('m_message');
    	
    	$user_id = $this->session->userdata('id');
    	$id_message = $this->uri->segment(3);
    	
    	$this->m_message->removeMessage($user_id, $id_message);
    	
    	redirect('c_message/index');
    }
    
    function checkUsername($username){
        $this->load->model('m_user');
        
        if ($this->m_user->checkRegisterUsername($username))
        {
        	return TRUE;
        }
        else
        {
        	$this->form_validation->set_message('checkUsername', 'Il n\'existe pas de joueur avec ce nom');
         	return FALSE;
        }
    }
    
    
}
