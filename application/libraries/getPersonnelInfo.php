<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GetPesonnelInfo
 *
 * @author greenpix
 */
class getpersonnelinfo {
    
    function getName(){
        $CI =& get_instance();
        
        $CI->load->model('m_personnel');
        
        $first_name = $CI->m_personnel->getFirstName();
        $last_name = $CI->m_personnel->getLastName();
        
        $name = $first_name->first_name.' '.$last_name->last_name;
        return $name;
        
    }
    
    function getPersonnelType($personnel_type){
        
        switch ($personnel_type) {
            case 0:
                $personnel = rand(1,5);
                break;
            case 1:
                $personnel = 1;
                break;
            case 2:
                $personnel = 2;
                break;
            case 3:
                $personnel = 3;
                break;
            case 4:
                $personnel = 4;
                break;
            case 5:
                $personnel = 5;
                break;
        }
        return $personnel;
    }
    
    function getReputation($rep){
        if($rep == 0){
            $reputation = rand(1,100);
        }
        else{
            $reputation = $rep;
        }
        
        return $reputation;
    }
    
    function getSkill($reputation){
        if($reputation > 0 && $reputation <= 60){
            $skill1 = rand(1,8);
            $skill2 = rand(1,8);
            $skill3 = rand(1,8);
        }
        elseif($reputation > 60 && $reputation <= 80){
            $skill1 = rand(8,12);
            $skill2 = rand(8,12);
            $skill3 = rand(8,12);
        }
        elseif($reputation > 80 && $reputation <= 95){
            $skill1 = rand(12,16);
            $skill2 = rand(12,16);
            $skill3 = rand(12,16);
        }
        elseif($reputation > 95){
            $skill1 = rand(16,20);
            $skill2 = rand(16,20);
            $skill3 = rand(16,20);
        }
        
        $skill = array('skill1' => $skill1,
                       'skill2' => $skill2,
                       'skill3' => $skill3);
        return $skill;
    }
    
    function getSalaire($skill1, $skill2, $skill3) {
        
        $salaire = ($skill1 + $skill2 + $skill3)*100;
        return $salaire;
    }
    
    function getValeur($personnel, $salaire){
         
        switch ($personnel) {
            case 1:
                $ind = 1;
                break;
            case 2:
                $ind = 1.4;
                break;
            case 3:
                $ind = 0.8;
                break;
            case 4:
                $ind = 0.6;
                break;
            case 5:
                $ind = 0.6;
                break;
        }
        $valeur = $salaire*50*$ind;
        return $valeur;
    }
}

?>
