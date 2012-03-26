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
        $this->load->model('m_building');
        
        $users = $this->m_cron->listUsers();
        
        $xml = simplexml_load_file('xml/ressource.xml');
        $ressources =  new SimpleXMLElement('xml/ressource.xml', NULL, TRUE);
        
        foreach($users AS $user){
        	$id_user = $user->id;
        	
        	$buildings = $this->m_cron->userBuilding($id_user);
        	
        	foreach($buildings AS $building){
        	
        		if($building->id_building == 1){
        			$lvl_pierre = $building->level_building;
        			$get_pierre = $ressources->xpath('/ressources/ressource[@name="pierre"]/get[@niveau='.$lvl_pierre.']');
        		}
        		elseif($building->id_building == 2){
        			$lvl_metal = $building->level_building;
        			$get_metal = $ressources->xpath('/ressources/ressource[@name="metal"]/get[@niveau='.$lvl_metal.']');
        		}
        		elseif($building->id_building == 3){
        			$lvl_oxygene = $building->level_building;
        			$get_oxygene = $ressources->xpath('/ressources/ressource[@name="oxygene"]/get[@niveau='.$lvl_oxygene.']');
        		}
        		elseif($building->id_building == 4){
        			$lvl_carburant = $building->level_building;
        			$get_carburant = $ressources->xpath('/ressources/ressource[@name="carburant"]/get[@niveau='.$lvl_carburant.']');
        		}
        		elseif($building->id_building == 5){
        			$lvl_argent = $building->level_building;
        			$get_argent = $ressources->xpath('/ressources/ressource[@name="argent"]/get[@niveau='.$lvl_argent.']');
        		}
        		
        		if($building->status_building == 1){
	        		
	        		if(now() >= $building->date_end_building){
	                    $this->m_building->changeStatus($id_user, $building->id_building);
	                }
	            }
        	
        	}
        	
        	$this->m_cron->updateRessources($id_user, $get_pierre, $get_metal, $get_oxygene, $get_carburant, $get_argent);
        	
        }


    }
    
}
