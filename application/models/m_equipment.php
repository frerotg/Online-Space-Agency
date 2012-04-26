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
class m_equipment extends CI_Model {
        
    function listType(){
        
        $this->db->select('*');
        $this->db->from('equipment_type');
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }
    
    function listUserEquipment($id,$type_id){
        
        $this->db->select('*');
        $this->db->from('user_equipment');
        $this->db->join('equipment_list', 'user_equipment.id_equipment = equipment_list.id_equipment');
        $this->db->where('id_user', $id);
        $this->db->where('id_type_equipment', $type_id);
        $this->db->order_by("user_equipment.id_equipment", "asc"); 
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
        $this->db->join('technology_list', 'user_technology.id_technology = technology_list.id_technology');
        $this->db->where('id_user', $id);
        $this->db->where('id_type_technology', $type_id);
        $this->db->order_by("technology_list.id_technology", "asc"); 
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }
    
    function coutEquipment($equipment_id){
        
        $this->db->select('*');
        $this->db->from('equipment_list');
        $this->db->where('id_equipment', $equipment_id);
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }
    
    function buildEquipment($user_id, $equipment_id, $buildTime){
        
        $this->db->select('*');
        $this->db->from('user_equipment');
        $this->db->where('id_user', $user_id);
        $this->db->where('id_equipment', $equipment_id);
        $query = $this->db->get();
        $result = $query->result();
        
        $array = array('status_equipment' => 1, 'date_start_equipment' => now(), 'date_end_equipment' => (now()+$buildTime), 'amount_equipment' => (($result[0]->amount_equipment)+1));
        $this->db->where('id_user', $user_id);
        $this->db->where('id_equipment', $equipment_id);
        $this->db->update('user_equipment', $array);  
    }
    
    function changeStatus($id, $equipment_id){
        $array = array('status_equipment'=>0, 'date_start_equipment'=>0, 'date_end_equipment'=>0);
        $this->db->where('id_user', $id);
        $this->db->where('id_equipment', $equipment_id);
        $this->db->update('user_equipment', $array);
    }
    
    function checkUnderConstruction($id){
        
        $this->db->select('*');
        $this->db->from('user_equipment');
        $this->db->join('equipment_list', 'user_equipment.id_equipment = equipment_list.id_equipment');
        $this->db->where('id_user', $id);
        $this->db->where('status_equipment', 1);
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }
    
}

?>
