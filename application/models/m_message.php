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
        $this->db->where('id_user', $user_id);
        $this->db->order_by("date_message", "asc");
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;

    }
    
    function getMessage($user_id, $id_message){
    	$this->db->select('*');
        $this->db->from('user_message');
        $this->db->where('id_user', $user_id);
        $this->db->where('id_message', $id_message);
        $query = $this->db->get();
        
        $result = $query->row();
        return $result;

    }
    
    function removeMessage($user_id, $id_message){
    	$this->db->where('id_message', $id_message);
    	$this->db->where('id_user', $user_id);
		$this->db->delete('user_message'); 
    
    }
    
    function sendMessage($data){
    	$this->db->insert('user_message', $data);
    }
    
}

?>
