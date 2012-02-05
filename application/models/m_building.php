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
    
    function listType(){
        
        $this->db->select('*');
        $this->db->from('building_type');
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
    
    function listUserTechnology($id,$type_id){
        
        $this->db->select('*');
        $this->db->from('user_technology');
        $this->db->join('technology_list', 'user_technology.id_technology = technology_list.id');
        $this->db->where('id_user', $id);
        $this->db->where('type', $type_id);
        $this->db->order_by("id", "asc"); 
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }
    
    function checkUnderConstruction($id){
        
        $this->db->select('*');
        $this->db->from('user_building');
        $this->db->join('building_list', 'user_building.id_building = building_list.id_building');
        $this->db->where('id_user', $id);
        $this->db->where('status_building', 1);
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }
    
    function listBuilding($type_id){
        $this->db->select('*');
        $this->db->from('building_list');
        $this->db->where('id_type_building', $type_id);
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }
    
    function addBuilding($user_id, $building_id, $buildTime){
        
        $this->db->insert('user_building', array('id_user' => $user_id, 'id_building' => $building_id, 'level_building' => 1, 'status_building' => 1, 'date_start_building' => now(), 'date_end_building' => (now()+$buildTime)));
    }
    
    function updateBuilding($user_id, $building_id, $level, $buildTime){
        
        $array = array('level_building'=>$level, 'status_building' => 1, 'date_start_building' => now(), 'date_end_building' => (now()+$buildTime));

        $this->db->where('id_user', $user_id);
        $this->db->where('id_building', $building_id);
        $this->db->update('user_building', $array);
    }
    
    function changeStatus($id, $building_id){
        $array = array('status_building'=>0, 'date_start_building'=>0, 'date_end_building'=>0);
        $this->db->update('user_building', $array);
    }
}

?>
