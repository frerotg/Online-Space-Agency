<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_personnel
 *
 * @author greenpix
 */
class m_personnel extends CI_Model {
    
    function getFirstName(){
        
        $this->db->select('first_name');
        $this->db->from('bd_first_name');
        $this->db->order_by('first_name' , 'random'); 
        $this->db->limit(1);
        $query = $this->db->get();
        
        $first_name = $query->row();
        return $first_name;
        
    }
    
    function getLastName(){
        
        $this->db->select('last_name');
        $this->db->from('bd_last_name');
        $this->db->order_by('last_name' , 'random'); 
        $this->db->limit(1);
        $query2 = $this->db->get();
        
        $last_name = $query2->row();
        
        return $last_name;
    }
    
    function addPersonnel($data){
        $this->db->insert('personnel_list', $data); 
    }
    
    function getList($status, $owner_id){
        
        if($owner_id == 'all'){
            $this->db->select('*');
            $this->db->from('personnel_list');
            $this->db->where(array('status_personnel' => $status));
            $query = $this->db->get();

            $data = $query->result();  
        }
        else{
            $this->db->select('*');
            $this->db->from('personnel_list');
            $this->db->where(array('status_personnel' => $status,
                                   'owner_personnel' => $owner_id));
            $query = $this->db->get();

            $data = $query->result();
        }
        
        return $data;
    }
    
    function getListbyType($id_type, $owner_id){
    
        $this->db->select('*');
        $this->db->from('personnel_list');
        $this->db->where(array('id_type_personnel' => $id_type,
        					   'owner_personnel' => $owner_id));
        $query = $this->db->get();
        $data = $query->result();  
        
        return $data;
    }
    
    function getType(){
        $this->db->select('*');
        $this->db->from('personnel_type');
        $query = $this->db->get();

        $data = $query->result();
        return $data;
    }
    
    function getOnce($id){
        
        $this->db->select('*');
        $this->db->from('personnel_list');
        $this->db->where(array('id_personnel' => $id));
        $query = $this->db->get();
        
        $result = $query->row();
        return $result;
    }
    
    function updateStatus($id, $status){
        
        $this->db->where('id_personnel', $id);
        $this->db->update('personnel_list', array('status_personnel' => $status));
    }
    
    function updateOwner($id, $owner_id){
        
        $this->db->where('id_personnel', $id);
        $this->db->update('personnel_list', array('owner_personnel' => $owner_id));
    }
    
    function addAuction($data){
        $this->db->insert('personnel_auction', $data);
    }
    
    function getAuctionList($user_id){
        
        $this->db->select('*');
        $this->db->from('personnel_list');
        $this->db->join('personnel_auction', 'personnel_list.id_personnel = personnel_auction.id_personnel');
        $this->db->join('users', 'personnel_auction.id_buyer_auction_personnel = users.id');
        $this->db->where('owner_personnel !=', $user_id);
        $query = $this->db->get();

        $data = $query->result();
        
        return $data;
    }
    
    function getAuction($id_personnel){
        
        $this->db->select('*');
        $this->db->from('personnel_auction');
        $this->db->where(array('id_personnel' => $id_personnel));
        $query = $this->db->get();

        $result = $query->row();
        return $result;
    }
    
    function updateAuction($id, $id_buyer, $price_current){
        
        $this->db->where('id', $id);
    $this->db->update('personnel_auction', array('id_buyer_auction_personnel' => $id_buyer,
                                                     'price_current_auction_personnel' => $price_current));
    }
}

?>
