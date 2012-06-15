<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_building
 *
 * @author greenpix
 */
class m_message extends CI_Model {
    
    function listMessage($user_id){
    	$this->db->select('*');
        $this->db->from('user_message');
        $this->db->where('id_user_receive', $user_id);
        $this->db->order_by("date_message", "asc");
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;

    }
    
    function listUser(){
    	$this->db->select('id,username');
        $this->db->from('users');
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }
    
    function getMessage($user_id, $id_message){
    	$this->db->select('*');
        $this->db->from('user_message');
        $this->db->where('id_user_receive', $user_id);
        $this->db->where('id_message', $id_message);
        $query = $this->db->get();
        
        $result = $query->row();
        return $result;

    }
    
    function removeMessage($user_id, $id_message){
    	$this->db->where('id_message', $id_message);
    	$this->db->where('id_user_receive', $user_id);
		$this->db->delete('user_message'); 
    
    }
    
    function sendMessage($data){
    	$this->db->insert('user_message', $data);
    }
    
    function getID($username){
    	$this->db->select('id');
        $this->db->from('users');
        $this->db->where('username', $username);
        $query = $this->db->get();
        
        $result = $query->row();
        return $result;
    }
    
    function getMessageNoRead($id_user){
        $this->db->from('user_message');
        $this->db->where('id_user_receive', $id_user);
        $this->db->where('read_message', 0);
		$query = $this->db->get();
        
        $result = $query->result();
    	return $result;
    }
    
    function addAlert($id_user_receive, $title_message, $message){
    	$data = array(
        	'id_user_receive' => $id_user_receive,
            'id_user_send' => 1,
            'title_message' => $title_message,
            'content_message' => $message,
            'date_message' => now()
            );
    	$this->db->insert('user_message', $data);
    }
    
    function readOne($id_message){
    	$data = array(
               'read_message' => 1,
            );

	$this->db->where('id_message', $id_message);
	$this->db->update('user_message', $data); 

    }
    
}

?>
