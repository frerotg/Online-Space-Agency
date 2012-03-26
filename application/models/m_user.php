<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_users
 *
 * @author greenpix
 */
class m_user extends CI_Model {
    function checkUser($username, $password){
        
        $this->db->select('username, password');
        $this->db->from('users');
        $this->db->where(array('username' => $username,
                               'password' => $password));
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    
    function checkFirst($id_user){
        
        $this->db->select('first_time');
        $this->db->from('users');
        $this->db->where(array('id' => $id_user));
        $query = $this->db->get();
        
        $result = $query->row();
        return $result;
    }
    
    function getOnce($username){
        
        $this->db->select('id, username');
        $this->db->from('users');
        $this->db->where(array('username' => $username));
        $query = $this->db->get();
        
        $result = $query->row_array();
        return $result;
    }
    
    function checkRegisterUsername($data){
        $this->db->select('username');
        $this->db->from('users');
        $this->db->where(array('username' => $data));
        $query = $this->db->get();
        $result = $query->num_rows();
        return $result;
    }
    function checkRegisterEmail($data){
        $this->db->select('email');
        $this->db->from('users');
        $this->db->where(array('email' => $data));
        $query = $this->db->get();
        $result = $query->num_rows();
        return $result;
    }
    function checkRegisterCountry_name($data){
        $this->db->select('country_name');
        $this->db->from('users');
        $this->db->where(array('country_name' => $data));
        $query = $this->db->get();
        $result = $query->num_rows();
        return $result;
    }
    function checkRegisterCountry_capital($data){
        $this->db->select('country_capital');
        $this->db->from('users');
        $this->db->where(array('country_capital' => $data));
        $query = $this->db->get();
        $result = $query->num_rows();
        return $result;
    }
    function checkRegisterAgency_name($data){
        $this->db->select('agency_name');
        $this->db->from('users');
        $this->db->where(array('agency_name' => $data));
        $query = $this->db->get();
        $result = $query->num_rows();
        return $result;
    }
    function checkRegisterAgency_initial($data){
        $this->db->select('agency_initial');
        $this->db->from('users');
        $this->db->where(array('agency_initial' => $data));
        $query = $this->db->get();
        $result = $query->num_rows();
        return $result;
    }
    function checkRegisterDirector_first_name($data){
        $this->db->select('director_first_name');
        $this->db->from('users');
        $this->db->where(array('director_first_name' => $data));
        $query = $this->db->get();
        $result = $query->num_rows();
        return $result;
    }
    function checkRegisterDirector_last_name($data){
        $this->db->select('director_last_name');
        $this->db->from('users');
        $this->db->where(array('director_last_name' => $data));
        $query = $this->db->get();
        $result = $query->num_rows();
        return $result;
    }
    
    function addOnce($data){
        
        $this->db->insert('users', $data);
    }
    
    function getResources($user_id){
        $this->db->select('pierre, metal, oxygene, carburant, argent');
        $this->db->from('users');
        $this->db->where(array('id' => $user_id));
        $query = $this->db->get();
        
        $result = $query->row();
        return $result;
    }
    
    function updateResource($user_id, $resource, $amount){
        
        $this->db->where('id', $user_id);
        $this->db->update('users', array($resource => $amount)); 
    }
    
    function listBuilding(){
        
        $this->db->select('id_building');
        $this->db->from('building_list');
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }
    function listEquipment(){
        
        $this->db->select('id_equipment');
        $this->db->from('equipment_list');
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }
    function listSpaceObject(){
        
        $this->db->select('id_space_object');
        $this->db->from('space_object');
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }
    function listTechnology(){
        
        $this->db->select('id_technology');
        $this->db->from('technology_list');
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }
    
    function setBuilding($id_user, $id){
        $data = array(
           'id_user' => $id_user ,
           'id_building' => $id,
           'level_building' => '0'
        );
        $this->db->insert('user_building', $data);
    }
    
    function setEquipment($id_user, $id){
        $data = array(
           'id_user' => $id_user ,
           'id_equipment' => $id,
           'amount_equipment' => '0'
        );
        $this->db->insert('user_equipment', $data);
    }
    
    function setSpaceObject($id_user, $id){
        $data = array(
           'id_user' => $id_user ,
           'id_space_object' => $id,
           'id_space_object_status' => 1,
           'xp_space_object_status' => 0
        );
        $this->db->insert('user_space_object', $data);
    }
    
    function setTechnology($id_user, $id){
        $data = array(
           'id_user' => $id_user ,
           'id_technology' => $id
        );
        $this->db->insert('user_technology', $data);
    }
    
    function setFirst($user_id){
        
        $this->db->where('id', $user_id);
        $this->db->update('users', array('first_time' => '1')); 
    }
}
?>
