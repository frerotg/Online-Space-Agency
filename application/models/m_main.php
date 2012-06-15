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
class m_main extends CI_Model {
    
    function countNumberAgency(){
        
        $this->db->select('*');
        $this->db->from('users');
        
        $result =  $this->db->count_all_results();

        return $result;
    }
    
    function countNumberMission(){
        
        $this->db->select('*');
        $this->db->from('user_mission');
        
        $result =  $this->db->count_all_results();

        return $result;
    }
    
    function countMaxArgent(){
        
        $this->db->select_max('argent');
        $query = $this->db->get('users');
        
        $result = $query->row();
        return $result;
    }
    
}

?>
