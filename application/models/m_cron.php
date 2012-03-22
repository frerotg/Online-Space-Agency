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
class m_building extends CI_Model {
    
    function listUsers(){
        
        $this->db->select('*');
        $this->db->from('users');
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }
    
    function userBuilding($id_user){
    
    	$this->db->select('*');
        $this->db->from('user_building');
        $this->db->where('id_user', $id_user);
        
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }

}

?>
