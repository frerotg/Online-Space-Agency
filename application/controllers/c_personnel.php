<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_personnel
 *
 * @author greenpix
 */
class c_personnel extends CI_Controller {
    
   public function __construct(){
   parent::__construct();
        if($this->session->userdata('is_connect')){
            
            $this->load->model('m_user');
            $user_id = $this->session->userdata('id');
            $resources['resource'] = $this->m_user->getResources($user_id);
            $this->load->model('m_message');
            $resources['message'] = count($this->m_message->getMessageNoRead($user_id));
            $data['topbar'] = $this->load->view('template/topbar/user_interface_topbar', $resources, TRUE);
        }
        else{
            redirect('c_main/index');
        }
    }
   
    function createPersonnel($personnel_type, $rep){
        
        $this->load->model('m_personnel');
        $this->load->library('getpersonnelinfo');
        
        //Le nom du personnel
        $name = $this->getpersonnelinfo->getName();
        //Le type du personnel
        $personnel = $this->getpersonnelinfo->getPersonnelType($personnel_type);
        //La réputation du personnel
        $reputation = $this->getpersonnelinfo->getReputation($rep);
        //Les skils du personnel
        $skill = $this->getpersonnelinfo->getSkill($reputation);       
        //Le status du personnel
        $status = 0;       
        //Le propriétaire du personnel
        $owner = NULL;       
        //Salaire du personnel
        $salaire = $this->getpersonnelinfo->getSalaire($skill['skill1'], $skill['skill2']);      
        //Valeur du personnel
        $valeur = $this->getpersonnelinfo->getValeur($personnel, $salaire);
        
        //Ajout des informations dans la base de donnée
        $data = array(
           'name_personnel' => $name ,
           'id_type_personnel' => $personnel ,
           'reputation_personnel' => $reputation,
           'skill1_personnel' => $skill['skill1'] ,
           'skill2_personnel' => $skill['skill2'] ,
           'status_personnel' => $status ,
           'owner_personnel' => $owner ,
           'salaire_personnel' => $salaire ,
           'valeur_personnel' => $valeur
        );
        $this->m_personnel->addPersonnel($data);
    }
    
    function index(){
        
        $user_id = $this->session->userdata('id');
        
        $this->load->model('m_personnel');
        $this->load->model('m_building');
        $this->load->model('m_technology');
        $list = $this->m_personnel->getList(1,$user_id);
        $table['types'] = $this->m_personnel->getType();
        
        $table['spationautes'] = array();
        $table['pilotes'] = array();
        $table['scientifiques'] = array();
        $table['horslalois'] = array();
        $table['securites'] = array();
        
        $base = $this->m_building->haveBuilding($user_id, 15);
        $technology = $this->m_technology->haveTechnology($user_id, 5);
        
        $table['base'] = $base->level_building;
        
        if($technology->level_technology == 0){
	        $coefficient = 1;
        }
        else{
	        $coefficient = 0.90;
        }

        
        foreach($list as $personnel){
        	
        	$valeur = $personnel->valeur_personnel * $coefficient;
        	$personnel->valeur_personnel = $valeur;
        	
            if($personnel->id_type_personnel == 1){
                $table['spationautes'][] = $personnel;
            }
            if($personnel->id_type_personnel == 2){
                $table['pilotes'][] = $personnel;
            }
            if($personnel->id_type_personnel == 3){
                $table['scientifiques'][] = $personnel;
            }
            if($personnel->id_type_personnel == 4){
                $table['horslalois'][] = $personnel;
            }
            if($personnel->id_type_personnel == 5){
                $table['securites'][] = $personnel;
            }
        }
                
        switch($base->level_building){
            case 0:
        		$limit_spationaute = 2;
        		$limit_pilote = 1;
        		$limit_scientifique = 1;
        		$limit_horslaloi = 1;
        		$limit_securite = 1;
        		break;
        	case 1:
        		$limit_spationaute = 2;
        		$limit_pilote = 1;
        		$limit_scientifique = 1;
        		$limit_horslaloi = 1;
        		$limit_securite = 1;
        		break;
        	case 2:
        		$limit_spationaute = 2;
        		$limit_pilote = 1;
        		$limit_scientifique = 1;
        		$limit_horslaloi = 1;
        		$limit_securite = 1;
        		break;
        	case 3:
        		$limit_spationaute = 2;
        		$limit_pilote = 1;
        		$limit_scientifique = 1;
        		$limit_horslaloi = 1;
        		$limit_securite = 1;
        		break;
        	case 4:
        		$limit_spationaute = 2;
        		$limit_pilote = 1;
        		$limit_scientifique = 2;
        		$limit_horslaloi = 2;
        		$limit_securite = 2;
        		break;
        	case 5:
        		$limit_spationaute = 2;
        		$limit_pilote = 1;
        		$limit_scientifique = 2;
        		$limit_horslaloi = 2;
        		$limit_securite = 2;
        		break;
        	case 6:
        		$limit_spationaute = 4;
        		$limit_pilote = 2;
        		$limit_scientifique = 2;
        		$limit_horslaloi = 2;
        		$limit_securite = 2;
        		break;
        	case 7:
        		$limit_spationaute = 4;
        		$limit_pilote = 2;
        		$limit_scientifique = 2;
        		$limit_horslaloi = 2;
        		$limit_securite = 2;
        		break;
        	case 8:
        		$limit_spationaute = 4;
        		$limit_pilote = 2;
        		$limit_scientifique = 2;
        		$limit_horslaloi = 2;
        		$limit_securite = 2;
        		break;
        	case 9:
        		$limit_spationaute = 4;
        		$limit_pilote = 2;
        		$limit_scientifique = 2;
        		$limit_horslaloi = 2;
        		$limit_securite = 2;
        		break;
        	case 10:
        		$limit_spationaute = 4;
        		$limit_pilote = 2;
        		$limit_scientifique = 3;
        		$limit_horslaloi = 2;
        		$limit_securite = 2;
        		break;
        	case 11:
        		$limit_spationaute = 4;
        		$limit_pilote = 2;
        		$limit_scientifique = 3;
        		$limit_horslaloi = 2;
        		$limit_securite = 2;
        		break;
        	case 12:
        		$limit_spationaute = 4;
        		$limit_pilote = 2;
        		$limit_scientifique = 3;
        		$limit_horslaloi = 3;
        		$limit_securite = 3;
        		break;
        	case 13:
        		$limit_spationaute = 4;
        		$limit_pilote = 2;
        		$limit_scientifique = 3;
        		$limit_horslaloi = 3;
        		$limit_securite = 3;
        		break;
        	case 14:
        		$limit_spationaute = 4;
        		$limit_pilote = 2;
        		$limit_scientifique = 3;
        		$limit_horslaloi = 3;
        		$limit_securite = 3;
        		break;
        	case 15:
        		$limit_spationaute = 4;
        		$limit_pilote = 2;
        		$limit_scientifique = 3;
        		$limit_horslaloi = 3;
        		$limit_securite = 3;
        		break;
        	case 16:
        		$limit_spationaute = 6;
        		$limit_pilote = 3;
        		$limit_scientifique = 3;
        		$limit_horslaloi = 3;
        		$limit_securite = 3;
        		break;
			case 17:
        		$limit_spationaute = 6;
        		$limit_pilote =3;
        		$limit_scientifique = 3;
        		$limit_horslaloi = 3;
        		$limit_securite = 3;
        		break;
        	case 18:
        		$limit_spationaute = 6;
        		$limit_pilote =3;
        		$limit_scientifique = 4;
        		$limit_horslaloi = 3;
        		$limit_securite = 3;
        		break;
        	case 19:
        		$limit_spationaute = 6;
        		$limit_pilote =3;
        		$limit_scientifique = 4;
        		$limit_horslaloi = 3;
        		$limit_securite = 3;
        		break;
        	case 20:
        		$limit_spationaute = 6;
        		$limit_pilote =3;
        		$limit_scientifique = 4;
        		$limit_horslaloi = 3;
        		$limit_securite = 3;
        		break;
        	case 21:
        		$limit_spationaute = 6;
        		$limit_pilote =3;
        		$limit_scientifique = 4;
        		$limit_horslaloi = 3;
        		$limit_securite = 3;
        		break;
        	case 22:
        		$limit_spationaute = 6;
        		$limit_pilote =3;
        		$limit_scientifique = 4;
        		$limit_horslaloi = 3;
        		$limit_securite = 3;
        		break;
        }
        
        $table['limit'] = array('spationaute' => $limit_spationaute,'pilote' => $limit_pilote,'scientifique' => $limit_scientifique,'horslaloi' => $limit_horslaloi,'securite' => $limit_securite);
        
        $data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
        $data['content'] = $this->load->view('template/content/personnel_index_content', $table, TRUE);
        $data['footer'] = $this->load->view('template/footer/user_interface_footer', '', TRUE);
        $data['script'] = $this->load->view('template/script/personnel_script', '', TRUE);
        
        $this->load->view('layout',$data);
        
    }
    
    function listRecruitable(){
        
        $this->load->model('m_personnel');
        $this->load->model('m_technology');
        $user_id = $this->session->userdata('id');        
        $list = $this->m_personnel->getList(0,'all');
        $table['types'] = $this->m_personnel->getType();
        
        $table['spationautes'] = array();
        $table['pilotes'] = array();
        $table['scientifiques'] = array();
        $table['horslalois'] = array();
        $table['securites'] = array();
        
        $technology = $this->m_technology->haveTechnology($user_id, 5);
        
        if($technology->level_technology == 0){
	        $coefficient = 1;
        }
        else{
	        $coefficient = 0.90;
        }
        
        foreach($list as $personnel){
        
        	$valeur = $personnel->valeur_personnel * $coefficient;
        	$personnel->valeur_personnel = $valeur;
        	
            if($personnel->id_type_personnel == 1){
                $table['spationautes'][] = $personnel;
            }
            if($personnel->id_type_personnel == 2){
                $table['pilotes'][] = $personnel;
            }
            if($personnel->id_type_personnel == 3){
                $table['scientifiques'][] = $personnel;
            }
            if($personnel->id_type_personnel == 4){
                $table['horslalois'][] = $personnel;
            }
            if($personnel->id_type_personnel == 5){
                $table['securites'][] = $personnel;
            }
        }
        
        $data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
        $data['content'] = $this->load->view('template/content/personnel_listRecruitable_content', $table, TRUE);
        $data['footer'] = $this->load->view('template/footer/user_interface_footer', '', TRUE);
        $data['script'] = $this->load->view('template/script/personnel_script', '', TRUE);

        $this->load->view('layout',$data);
        
    }
   
    function recruit(){
        $user_id = $this->session->userdata('id');
        $id = $this->uri->segment(3);
        
        $this->load->model('m_user');
        $resources = $this->m_user->getResources($user_id);
        
        $this->load->model('m_personnel');
        $this->load->model('m_technology');
        $personnel = $this->m_personnel->getOnce($id);
        
        $id_type_personnel = $personnel->id_type_personnel;
        $mypersonnel = $this->m_personnel->getListbyType($id_type_personnel, $user_id);
        
        $this->load->model('m_building');
        $base = $this->m_building->haveBuilding($user_id, 15);
        
        switch($base->level_building){
        	case 1:
        		$limit_spationaute = 2;
        		$limit_pilote = 1;
        		$limit_scientifique = 1;
        		$limit_horslaloi = 1;
        		$limit_securite = 1;
        		break;
        	case 2:
        		$limit_spationaute = 2;
        		$limit_pilote = 1;
        		$limit_scientifique = 1;
        		$limit_horslaloi = 1;
        		$limit_securite = 1;
        		break;
        	case 3:
        		$limit_spationaute = 2;
        		$limit_pilote = 1;
        		$limit_scientifique = 1;
        		$limit_horslaloi = 1;
        		$limit_securite = 1;
        		break;
        	case 4:
        		$limit_spationaute = 2;
        		$limit_pilote = 1;
        		$limit_scientifique = 2;
        		$limit_horslaloi = 2;
        		$limit_securite = 2;
        		break;
        	case 5:
        		$limit_spationaute = 2;
        		$limit_pilote = 1;
        		$limit_scientifique = 2;
        		$limit_horslaloi = 2;
        		$limit_securite = 2;
        		break;
        	case 6:
        		$limit_spationaute = 4;
        		$limit_pilote = 2;
        		$limit_scientifique = 2;
        		$limit_horslaloi = 2;
        		$limit_securite = 2;
        		break;
        	case 7:
        		$limit_spationaute = 4;
        		$limit_pilote = 2;
        		$limit_scientifique = 2;
        		$limit_horslaloi = 2;
        		$limit_securite = 2;
        		break;
        	case 8:
        		$limit_spationaute = 4;
        		$limit_pilote = 2;
        		$limit_scientifique = 2;
        		$limit_horslaloi = 2;
        		$limit_securite = 2;
        		break;
        	case 9:
        		$limit_spationaute = 4;
        		$limit_pilote = 2;
        		$limit_scientifique = 2;
        		$limit_horslaloi = 2;
        		$limit_securite = 2;
        		break;
        	case 10:
        		$limit_spationaute = 4;
        		$limit_pilote = 2;
        		$limit_scientifique = 3;
        		$limit_horslaloi = 2;
        		$limit_securite = 2;
        		break;
        	case 11:
        		$limit_spationaute = 4;
        		$limit_pilote = 2;
        		$limit_scientifique = 3;
        		$limit_horslaloi = 2;
        		$limit_securite = 2;
        		break;
        	case 12:
        		$limit_spationaute = 4;
        		$limit_pilote = 2;
        		$limit_scientifique = 3;
        		$limit_horslaloi = 3;
        		$limit_securite = 3;
        		break;
        	case 13:
        		$limit_spationaute = 4;
        		$limit_pilote = 2;
        		$limit_scientifique = 3;
        		$limit_horslaloi = 3;
        		$limit_securite = 3;
        		break;
        	case 14:
        		$limit_spationaute = 4;
        		$limit_pilote = 2;
        		$limit_scientifique = 3;
        		$limit_horslaloi = 3;
        		$limit_securite = 3;
        		break;
        	case 15:
        		$limit_spationaute = 4;
        		$limit_pilote = 2;
        		$limit_scientifique = 3;
        		$limit_horslaloi = 3;
        		$limit_securite = 3;
        		break;
        	case 16:
        		$limit_spationaute = 6;
        		$limit_pilote = 3;
        		$limit_scientifique = 3;
        		$limit_horslaloi = 3;
        		$limit_securite = 3;
        		break;
			case 17:
        		$limit_spationaute = 6;
        		$limit_pilote =3;
        		$limit_scientifique = 3;
        		$limit_horslaloi = 3;
        		$limit_securite = 3;
        		break;
        	case 18:
        		$limit_spationaute = 6;
        		$limit_pilote =3;
        		$limit_scientifique = 4;
        		$limit_horslaloi = 3;
        		$limit_securite = 3;
        		break;
        	case 19:
        		$limit_spationaute = 6;
        		$limit_pilote =3;
        		$limit_scientifique = 4;
        		$limit_horslaloi = 3;
        		$limit_securite = 3;
        		break;
        	case 20:
        		$limit_spationaute = 6;
        		$limit_pilote =3;
        		$limit_scientifique = 4;
        		$limit_horslaloi = 3;
        		$limit_securite = 3;
        		break;
        	case 21:
        		$limit_spationaute = 6;
        		$limit_pilote =3;
        		$limit_scientifique = 4;
        		$limit_horslaloi = 3;
        		$limit_securite = 3;
        		break;
        	case 22:
        		$limit_spationaute = 6;
        		$limit_pilote =3;
        		$limit_scientifique = 4;
        		$limit_horslaloi = 3;
        		$limit_securite = 3;
        		break;
        }
        
        switch($id_type_personnel){
        	case 1: $limit = $limit_spationaute;
        	break;
        	case 2: $limit = $limit_pilote;
        	break;
        	case 3: $limit = $limit_scientifique;
        	break;
        	case 4: $limit = $limit_horslaloi;
        	break;
        	case 5: $limit = $limit_securite;
        	break;
        }
        
        if(count($mypersonnel) < $limit){
        
        	$technology = $this->m_technology->haveTechnology($user_id, 5);
	        
	        if($technology->level_technology == 0){
		        $coefficient = 1;
	        }
	        else{
		        $coefficient = 0.90;
	        }
	        $valeur = $personnel->valeur_personnel * $coefficient;
	        
	        if($resources->argent >= $valeur){
	            
	            $argent = $resources->argent - $valeur;
	            
	            $this->m_user->updateResource($user_id, 'argent', $argent);
	            $this->m_personnel->updateStatus($id, 1);
	            $this->m_personnel->updateOwner($id, $user_id);
	            
	            $status = 'success';
	            $message = 'Vous avez recruté '.$personnel->name_personnel.' pour '.$valeur;
	        }
	        else{
	            $status = 'error';
	            $message = 'Vous n\'avez pas assez d\'argent pour recruter'.$personnel->name_personnel;
	        }
	    }
	    else{
	    	$status = 'error';
	    	$message = 'Vous avez déjà atteint la limite de personnel pour ce métier';
	    }
        
        $data = array('status'=>$status, 'message'=>$message);
        echo json_encode($data);
        
    }
    
    function kick(){
        
        $user_id = $this->session->userdata('id');
        $this->load->model('m_user');
        $resources = $this->m_user->getResources($user_id);
        
        $id = $this->uri->segment(3);
        $this->load->model('m_personnel');
        $personnel = $this->m_personnel->getOnce($id);
        
        $argent = $resources->argent + ((($personnel->valeur_personnel)/100)*60);
            
        $this->m_user->updateResource($user_id, 'argent', $argent);
        $this->m_personnel->updateStatus($id, 0);
        $this->m_personnel->updateOwner($id, NULL);
        
        $status = 'success';
        $message = 'Vous avez viré '.$personnel->name_personnel.' et récupéré 60% de sa valeur c\'est à dire '.((($personnel->valeur_personnel)/100)*60);
        $data = array('status'=>$status, 'message'=>$message);
        echo json_encode($data);
    }
    
    function auction(){
        $user_id = $this->session->userdata('id');
        $id = $this->uri->segment(3);
        
        $this->load->model('m_personnel');
        $info['personnel'] = $this->m_personnel->getOnce($id);
        
        $this->load->helper('date');
        
        $data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
        $data['content'] = $this->load->view('template/content/personnel_auction_content', $info, TRUE);
        $data['footer'] = $this->load->view('template/footer/user_interface_footer', '', TRUE);
        $data['script'] = $this->load->view('template/script/personnel_script', '', TRUE);
        
        $this->load->view('layout',$data);
    }
    
    function auction_start(){
        
        $this->load->helper('date');
        $this->load->model('m_personnel');
        
        $id_seller = $this->session->userdata('id');
        $id_personnel = $this->input->post('id_personnel');
        $time_start = now();
        $time_end = human_to_unix($this->input->post('time_end'));
        $price_start = $this->input->post('price_start');
        
        $data = array(
           'id_seller_auction_personnel' => $id_seller ,
           'id_personnel' => $id_personnel ,
           'time_start_auction_personnel' => $time_start,
           'time_end_auction_personnel' => $time_end,
           'price_start_auction_personnel' => $price_start,
           'price_current_auction_personnel' => $price_start,
           'id_buyer_auction_personnel' => $id_seller
        );
        
        $this->m_personnel->addAuction($data); 
        $this->m_personnel->updateStatus($id_personnel, 2);
        
        redirect('c_personnel/index');
    }
    
    function listAuction(){        
        
        $user_id = $this->session->userdata('id');
        
        $this->load->model('m_personnel');
        $list = $this->m_personnel->getAuctionList($this->session->userdata('id'));
        $table['types'] = $this->m_personnel->getType();
        
        $table['spationautes'] = array();
        $table['pilotes'] = array();
        $table['scientifiques'] = array();
        $table['horslalois'] = array();
        $table['securites'] = array();
        
        
        foreach($list as $personnel){
            if($personnel->id_type_personnel == 1){
                $table['spationautes'][] = $personnel;
            }
            if($personnel->id_type_personnel == 2){
                $table['pilotes'][] = $personnel;
            }
            if($personnel->id_type_personnel == 3){
                $table['scientifiques'][] = $personnel;
            }
            if($personnel->id_type_personnel == 4){
                $table['horslalois'][] = $personnel;
            }
            if($personnel->id_type_personnel == 5){
                $table['securites'][] = $personnel;
            }
        }
        
        $data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
        $data['content'] = $this->load->view('template/content/personnel_listAuction_content', $table, TRUE);
        $data['footer'] = $this->load->view('template/footer/user_interface_footer', '', TRUE);
        $data['script'] = $this->load->view('template/script/personnel_script', '', TRUE);
        
        $this->load->view('layout',$data);
        
    }
    
    function bid(){
        
        $this->load->model('m_personnel');
        
        $id_buyer = $this->session->userdata('id');
        $price_current = $this->input->post('price_current_auction_personnel');
        $id_personnel = $this->input->post('id_personnel');
        
        $this->load->model('m_user');
        $resources = $this->m_user->getResources($id_buyer);   
        
        $personnel_auction = $this->m_personnel->getAuction($id_personnel);
        
        if(($personnel_auction->price_current_auction_personnel +1000)<=$price_current){
            
            if($resources->argent >= $price_current){

                $resources_old = $this->m_user->getResources($personnel_auction->id_buyer_auction_personnel); 
                
                $argent = ($resources->argent) - $price_current;
                $argent_old = $resources_old->argent + $personnel_auction->price_current_auction_personnel;
                
                $this->m_user->updateResource($personnel_auction->id_buyer_auction_personnel, 'argent', $argent_old);
                $this->m_user->updateResource($id_buyer, 'argent', $argent);
                $this->m_personnel->updateAuction($personnel_auction->id_auction_personnel, $id_buyer, $price_current);

                //$status = 'success';
            }
            else{
                //$status = 'error_argent';
            
            }
        }
        else{
            //$status = 'error_price';
        }
        
        //$data = array('status'=>$status);
        
        //echo json_encode($data);
        redirect('c_personnel/index');
    }
}

?>
