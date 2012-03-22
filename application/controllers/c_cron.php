<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_building
 *
 * @author greenpix
 */
class c_building extends CI_Controller {
    
        function build(){
        
        $this->load->model('m_cron');
        $this->load->model('m_user');
        
        $users = $this->m_cron->listUsers();
        
        foreach($users AS $user){
        	$id_user = $user->id;
        	
        	$buildings = $this->m_cron->userBuilding($id_user);
        	
        	foreach($buildings AS $building){
        	
        		if($building->id_building == 1){
        			$lvl_pierre = $building->level_building;
        		}
        		elseif($building->id_building == 2){
        			$lvl_metal = $building->level_building
        		}
        		elseif($building->id_building == 3){
        			$lvl_oxygene = $building->level_building
        		}
        		elseif($building->id_building == 4){
        			$lvl_carburant = $building->level_building
        		}
        		elseif($building->id_building == 5){
        			$lvl_argent = $building->level_building
        		}
        	
        	}
        	
        	
        	
        }


    }
    
}
