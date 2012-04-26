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
class m_mission extends CI_Model {
    
    function listUserMission($user_id){
        
        $this->db->select('*');
        $this->db->from('user_mission');
        $this->db->join('mission_status', 'user_mission.id_status = mission_status.id_status');
        $this->db->where('id_user', $user_id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
    function listZone($id){
        if($id !== 'all'){
            $this->db->select('*');
            $this->db->from('space_zone');
            $this->db->where('id_zone', $id);
            $query = $this->db->get();

            $result = $query->result();
            return $result;
        }
        else{
            $this->db->select('*');
            $this->db->from('space_zone');
            $this->db->order_by("id_zone_space", "asc"); 
            $query = $this->db->get();

            $result = $query->result();
            return $result;
        }
    }
    
    function listObject($user_id){
        
        $this->db->select('*');
        $this->db->from('user_space_object');
        $this->db->join('space_object', 'user_space_object.id_space_object = space_object.id_space_object');
        $this->db->where('id_user', $user_id);
        $this->db->order_by("id_zone_space", "asc"); 
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }
    function listEquipment($type_id, $user_id){
        
        $this->db->select('*');
        $this->db->from('user_equipment');
        $this->db->join('equipment_list', 'user_equipment.id_equipment = equipment_list.id_equipment');
        $this->db->where('id_user', $user_id);
        $this->db->where('id_type_equipment', $type_id);
        $this->db->where('amount_equipment >', 0);
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }
    
    
    function listPersonnel($type_id, $user_id){
        
        $this->db->select('*');
        $this->db->from('personnel_list');
        $this->db->where('owner_personnel', $user_id);
        $this->db->where('id_type_personnel', $type_id);
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }
    function addMission($data){
        $this->db->insert('user_mission', $data); 
    }
    
    function infoMission($user_id, $id_mission){
        $this->db->select('*');
        $this->db->from('user_mission');
        $this->db->where('id_user', $user_id);
        $this->db->where('id_mission', $id_mission);
        $query = $this->db->get();
        
        $result = $query->row();
        return $result;
    }
    
    function changeStatus($user_id, $id_mission, $id_status){
        $array = array('id_status'=> $id_status);
        $this->db->where('id_user', $user_id);
        $this->db->where('id_mission', $id_mission);
        $this->db->update('user_mission', $array);
    }
    
    function getUserSpaceObject($id_user, $id_space_object){
        
        $this->db->select('*');
        $this->db->from('space_object');
        $this->db->join('space_type', 'space_object.id_type_space = space_type.id_type_space');
        $this->db->join('space_zone', 'space_object.id_zone_space = space_zone.id_zone_space');
        $this->db->join('user_space_object', 'space_object.id_space_object = user_space_object.id_space_object');
        $this->db->join('space_object_status', 'user_space_object.id_space_object_status = space_object_status.id_space_object_status');
        $this->db->where('user_space_object.id_user', $id_user);
        $this->db->where('space_object.id_space_object', $id_space_object);
        $query = $this->db->get();
        
        $result = $query->row();
        return $result;
    }
    
    function getEquipment($id_equipment){
        $this->db->select('*');
        $this->db->from('equipment_list');
        $this->db->join('equipment_type', 'equipment_list.id_type_equipment = equipment_type.id_type_equipment');
        $this->db->where('equipment_list.id_equipment', $id_equipment);
        $query = $this->db->get();
        
        $result = $query->row();
        return $result;
    }
    
    function getPersonnel($id_personnel){
        $this->db->select('*');
        $this->db->from('personnel_list');
        $this->db->join('personnel_type', 'personnel_list.id_type_personnel = personnel_type.id_type_personnel');
        $this->db->where('personnel_list.id_personnel', $id_personnel);
        $query = $this->db->get();
        
        $result = $query->row();
        return $result;
    }
    
    function getAction($id_action){
        $this->db->select('*');
        $this->db->from('space_action');
        
        if($id_action !== 'all'){
        	$this->db->where('space_action.id_space_action', $id_action);
        	$query = $this->db->get();
        	$result = $query->row();
        }
        else{
        	$query = $this->db->get();
        	$result = $query->result();
        }
        return $result;
    }
    
    function getEvents($id_user){
        $this->db->select('*');
        $this->db->from('user_space_object_event');
        $this->db->join('space_object_event', 'user_space_object_event.id_space_object_event = space_object_event.id_space_object_event');
        $this->db->where('user_space_object_event.id_user', $id_user);
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }
    
    function getSingleEvents($id_user, $id_space_object_event){
        $this->db->select('*');
        $this->db->from('user_space_object_event');
        $this->db->where('user_space_object_event.id_user', $id_user);
        $this->db->where('id_space_object_event', $id_space_object_event);
        $query = $this->db->get();
        
        $result = $query->row();
        return $result;
    }
    
    function addAction($data, $id_user, $id_mission){
        $this->db->where('id_user', $id_user);
        $this->db->where('id_mission', $id_mission);
		$this->db->update('user_mission', $data); 
    }
    
    function getSpaceObjectEvent($id_space_object,$id_action){
    	$this->db->select('*');
        $this->db->from('space_object_event');
        $this->db->where('id_space_object', $id_space_object);
        $this->db->where('id_space_action', $id_action);
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;

    }
    
    function getUserSpaceObjectStatusXp($id_user, $id_space_object){
    	$this->db->select('*');
    	$this->db->from('user_space_object_event');
        $this->db->where('id_user', $id_user);
        $this->db->where('id_space_object', $id_user);
        $query = $this->db->get();
        
        $result = $query->row();
        return $result;
    }
    
    function getSpaceObjectStep($id_space_object_status){
    	$this->db->select('step_space_object_status');
    	$this->db->from('space_object_status');
        $this->db->where('id_space_object_status', $id_space_object_status);
        $query = $this->db->get();
        
        $result = $query->row();
        return $result;
    }
    
    function updateUserSpaceObject($id_user, $id_space_object, $point_space_object_event){
    	$this->db->query('UPDATE user_space_object SET xp_space_object_status=xp_space_object_status+'.$point_space_object_event.' WHERE id_user='.$id_user.' AND id_space_object='.$id_space_object.' ');
    }
    
    function updateActionPoint($actionCout, $user_id, $id_mission){
    	$this->db->query('UPDATE user_mission SET point_action=point_action-'.$actionCout.' WHERE id_user='.$user_id.' AND id_mission='.$id_mission.' ');
    }
    
    function addUserSpaceObjectEvent($data){
        $this->db->insert('user_space_object_event', $data);
    }
    
    function comeBack($data, $id_user, $id_mission){
        $this->db->where('id_user', $id_user);
        $this->db->where('id_mission', $id_mission);
		$this->db->update('user_mission', $data); 
    }
    
    function listUserSpaceObject($id_user){
    	$this->db->select('*');
        $this->db->from('user_space_object');
        $this->db->where('id_user', $id_user);
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }
    
    function setSpaceObjectStatus($user_id, $userSpaceObject, $number){
    	$array = array('id_space_object_status'=> $number);
        $this->db->where('id_user', $user_id);
        $this->db->where('id_space_object', $userSpaceObject);
        $this->db->update('user_space_object', $array);
    }
}

?>
