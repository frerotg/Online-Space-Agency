<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_technology
 *
 * @author greenpix
 */
class m_technology extends CI_Model {
       
    function listType(){
        
        $this->db->select('*');
        $this->db->from('technology_type');
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }
    
    function listUserTechnology($id,$type_id){
        
        $this->db->select('*');
        $this->db->from('user_technology');
        $this->db->join('technology_list', 'user_technology.id_technology = technology_list.id_technology');
        $this->db->where('id_user', $id);
        $this->db->where('id_type_technology', $type_id);
        $this->db->order_by("level_type_technology", "asc"); 
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }
    
        function listUserBuilding($id,$type_id){
        
        $this->db->select('*');
        $this->db->from('user_building');
        $this->db->join('building_list', 'user_building.id_building = building_list.id_building');
        $this->db->where('id_user', $id);
        $this->db->where('id_type_building', $type_id);
        $this->db->order_by("user_building.id_building", "asc"); 
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }
    
    function checkUnderDevelop($id){
        
        $this->db->select('*');
        $this->db->from('user_technology');
        $this->db->join('technology_list', 'user_technology.id_technology = technology_list.id_technology');
        $this->db->where('id_user', $id);
        $this->db->where('status_technology', 1);
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }
    
    function listTechnology($type_id){
        $this->db->select('*');
        $this->db->from('technology_list');
        $this->db->where('id_type_technology', $type_id);
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }
    
    function addTechnology($user_id, $technology_id, $researchTime){
        
        $this->db->insert('user_technology', array('id_user' => $user_id, 'id_technology' => $technology_id, 'level_technology' => 1, 'status_technology' => 1, 'date_start_technology' => now(), 'date_end_technology' => (now()+$researchTime)));
    }
    
    function updateTechnology($user_id, $technology_id, $level, $researchTime){
        
        $array = array('level_technology'=>$level, 'status_technology' => 1, 'date_start_technology' => now(), 'date_end_technology' => (now()+$researchTime));

        $this->db->where('id_user', $user_id);
        $this->db->where('id_technology', $technology_id);
        $this->db->update('user_technology', $array);
    }
    
    function changeStatus($id, $technology_id){
        $array = array('status_technology'=>0, 'date_start_technology'=>0, 'date_end_technology'=>0);
        $this->db->update('user_technology', $array);
    }
    
    function haveTechnology($id_user, $id_technology){
        $this->db->select('*');
        $this->db->from('user_technology');
        $this->db->where('id_user', $id_user);
        $this->db->where('id_technology', $id_technology);
        $query = $this->db->get();
        
        $result = $query->row();
        return $result;
    }
}

?>
