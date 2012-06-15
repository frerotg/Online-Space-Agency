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
class m_know extends CI_Model {
    
    function listType(){
        
        $this->db->select('*');
        $this->db->from('know_type');
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }
    
    function listUserKnow($id_user,$id_type_know){
        
        $this->db->select('*');
        $this->db->from('user_know');
        $this->db->join('know_list', 'user_know.id_know = know_list.id_know');
        $this->db->where('id_user', $id);
        $this->db->where('id_know_type', $id_type_know);
        $this->db->order_by("user_know.date_discover_know", "desc"); 
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }
    
    function test(){
    	$this->db->insert('know_type', array('name_know_type' => 'Salut', 'description_know_type' => 'lol'));
    }
    
    function historicDate($date){    
    	$this->db->select('*');
    	$this->db->from('know_date');
    	$this->db->where('date_know_date', $date);
    	$query = $this->db->get();
        
        $result = $query->result_array();
        return $result;
    }
}

?>
