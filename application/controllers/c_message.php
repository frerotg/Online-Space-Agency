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
   	 	$this->load->model('m_user');
   	 	
    	$user_id = $this->session->userdata('id');
    	
        $messages = $this->m_message->listMessage($user_id);
        
        foreach($messages AS $message){
	        $id_sender = $message->id_user_send;
	        $username = $this->m_user->getOneUser($id_sender);
	        $usernameSender = $username->username;
	        $title_message = $message->title_message;
	        $content_message = $message->content_message;
	        $date = date("d-m-Y H:i:s", $message->date_message);
	        $read = $message->read_message;
	        
	        $list['messages'][] =  array('sender' => $usernameSender, 'title_message' => $title_message, 'content_message' => $content_message, 'date' => $date, 'read' => $read);
        }
        
        $data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
        $data['content'] = $this->load->view('template/content/message_index_content', $list, TRUE);
        $data['footer'] = $this->load->view('template/footer/user_interface_footer', '', TRUE);
        $data['script'] = $this->load->view('template/script/message_script', '', TRUE);

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
        $data['footer'] = $this->load->view('template/footer/user_interface_footer', '', TRUE);
            
        $this->load->view('layout',$data);
    }
    
    function sendOne(){
    
    	$this->load->model('m_message');
    	$this->load->helper('date');
    	
    	$user_id = $this->session->userdata('id');

        $username_receive = $_GET['Iusername_receive'];
        $title_message = $_GET['Ititle_message'];
        $message = $_GET['Icontent_message'];
        
        
        if(!empty($username_receive)){
	        $username_receiveStatus = 'ok';
	    }
	    else{
		    $username_receiveStatus = 'empty';
	    }
	    
	    if(!empty($title_message)){
	        $title_messageStatus = 'ok';
	    }
	    else{
		    $title_messageStatus = 'empty';
	    }
	    
	    if(!empty($message)){
	        $messageStatus = 'ok';
	    }
	    else{
		    $messageStatus = 'empty';
	    }
	    
	    
	    
	    
	    if( ($username_receiveStatus == "ok") AND ($title_messageStatus == "ok") AND ($messageStatus == "ok") ){
			$status = 'ok';
	    }
	    else{
		    $status = 'fail';
	    }
	    
	    
	    
	    
		if($status =='ok'){
		
			$id_user_receive = $this->m_message->getID($username_receive);
			
			
	        $datas = array(
	            'id_user_receive' => $id_user_receive->id,
	            'id_user_send' => $user_id,
	            'title_message' => $title_message,
	            'content_message' => $message,
	            'date_message' => now()
	        );
	
	        $this->m_message->sendMessage($datas);
        }
		
		$data = array('status'=>$status, 'username_receive'=>$username_receiveStatus, 'title_message'=>$title_messageStatus, 'content_message'=>$messageStatus);
		
		echo json_encode($data);
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
