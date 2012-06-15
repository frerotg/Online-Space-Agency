<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_users
 *
 * @author greenpix
 */
class c_user extends CI_Controller {
    
   public function __construct(){
   parent::__construct();
        if($this->session->userdata('is_connect')){
            
            $this->load->model('m_user');
            $this->load->model('m_message');
            $user_id = $this->session->userdata('id');
            $resources['resource'] = $this->m_user->getResources($user_id);
            $resources['message'] = count($this->m_message->getMessageNoRead($user_id));
            
            $data['topbar'] = $this->load->view('template/topbar/user_interface_topbar', $resources, TRUE);
            
            $this->load->model('m_building');
            $buildings = $this->m_building->checkUnderConstruction($user_id);

            foreach ($buildings as $building) {
                if(now() >= $building->date_end_building){
                	$this->load->model('m_message');
                	
                	$this->m_message->addAlert($user_id, 'Bâtiment construit', 'Votre bâtiment "'.$building->name_building.'" à été construit avec succès !');
                    $this->m_building->changeStatus($user_id, $building->id_building);
                }
            }
            $this->load->model('m_equipment');
            $equipments = $this->m_equipment->checkUnderConstruction($user_id);

            foreach ($equipments as $equipment) {
                if(now() >= $equipment->date_end_equipment){
                    $this->m_equipment->changeStatus($user_id, $equipment->id_equipment);
                }
            }
            $this->load->model('m_mission');
                $missions = $this->m_mission->listUserMission($user_id);
                
                foreach ($missions as $mission) {
                if($mission->date_start_start != NULL){
                    if( (($mission->date_start_start) <= now()) AND (($mission->date_test) >= now()) ){
                        $this->m_mission->changeStatus($user_id, $mission->id_mission, 2);
                    }
                    elseif( (($mission->date_test) <= now()) AND (($mission->date_start_end) >= now()) ){
                        if($mission->id_status != 3){
                        	$base = $this->m_building->haveBuilding($user_id, 14);
	                    	$taux = 20-((($base->level_building)*10 / 100)*20);
	                    	$rand = rand(1, 100);
	                    	if($rand <= $taux){
	                    		$data = array(
											'date_start_start' => NULL,
											'date_test' => NULL,
							                'date_start_end' => NULL,
							                'date_end_start' => NULL,
							                'date_end_end' => NULL,
							                'id_status' => 10
							        );
							        
								$this->m_mission->comeBack($data, $user_id, $mission->id_mission);
	                    	}
	                    	else{
	                    		$this->m_mission->changeStatus($user_id, $mission->id_mission, 3);
	                    	}
	                    }

                    }
                    elseif( (($mission->date_start_end) <= now()) AND (($mission->date_end_start) == 0) ){
                    	if($mission->id_space_action == NULL){
                        	$this->m_mission->changeStatus($user_id, $mission->id_mission, 4);
                        }
                        else{
                        	if($mission->date_start_space_action != 0 AND $mission->date_end_space_action > now()){
                        		$this->m_mission->changeStatus($user_id, $mission->id_mission, 5);
                        	}
                        	else if($mission->date_start_space_action != 0 AND $mission->date_end_space_action <= now()){
                        		$this->m_mission->changeStatus($user_id, $mission->id_mission, 6);
                        	}
                        }
                    }
                    elseif( (($mission->date_end_start) <= now()) AND (($mission->date_end_end) >= now()) ){
                        $this->m_mission->changeStatus($user_id, $mission->id_mission, 7);
                    }
                    elseif( (($mission->date_end_end) <= now()) AND (($mission->date_end_end) != 0) ){
                        $this->m_mission->changeStatus($user_id, $mission->id_mission, 8);
                    }
                }
                }
                
                $userSpaceObjects = $this->m_mission->listUserSpaceObject($user_id);
                
                foreach($userSpaceObjects AS $userSpaceObject){
                	if($userSpaceObject->xp_space_object_status == 0){
                		$this->m_mission->setSpaceObjectStatus($user_id, $userSpaceObject->id_space_object, 1);
                	}
                	elseif(($userSpaceObject->xp_space_object_status >= 1) AND ($userSpaceObject->xp_space_object_status < 100)){
                		$this->m_mission->setSpaceObjectStatus($user_id, $userSpaceObject->id_space_object, 2);
                	}
                	elseif(($userSpaceObject->xp_space_object_status >= 100) AND ($userSpaceObject->xp_space_object_status < 1000)){
                		$this->m_mission->setSpaceObjectStatus($user_id, $userSpaceObject->id_space_object, 3);
                	}
                	elseif(($userSpaceObject->xp_space_object_status >= 1000) AND ($userSpaceObject->xp_space_object_status < 10000)){
                		$this->m_mission->setSpaceObjectStatus($user_id, $userSpaceObject->id_space_object, 4);
                	}
                }
                $this->load->model('m_technology');
            	$technologys = $this->m_technology->checkUnderDevelop($user_id);

            	foreach ($technologys as $technology) {
                	if(now() >= $technology->date_end_technology){
                		$this->m_technology->changeStatus($user_id, $technology->id_technology);
            		}
        		}

        }
        else{
        }
    }
    
    function connection(){
        $this->load->model('m_user');
        $u = $this->input->post('username');
        $p = sha1($this->input->post('password'));

        if($this->m_user->checkUser($u, $p)){
            
            $result = $this->m_user->getOnce($u);
            $result['is_connect'] = TRUE;
            
            $this->session->set_userdata($result);
            $id_user = $this->session->userdata('id');
            
            $first_time = $this->m_user->checkFirst($id_user);
            
            if($first_time->first_time == 0){
                redirect('c_user/first_time');
            }
            else{
                redirect('c_user/user_interface');
            }
        }
        else{
            $this->session->set_userdata('is_connect', FALSE);
            $this->session->set_flashdata('error', 'Oupps on dirait que vous avez oublié votre username/password');
            redirect('c_main/index');
        }
    }
    
    function disconnection(){
        $this->session->set_userdata('is_connect', FALSE);
        redirect('c_main/index');
    }
     
    
    function register(){
    	$this->load->model('m_user');
    	
	    if($_GET['step'] == 1){
	    	$this->load->helper('email');
	    	
	    	$username = $_GET['inputUsername'];
	    	$password = $_GET['inputPassword'];
	    	$email = $_GET['inputEmail'];
	    	
	    	if(!empty($username)){
			    if ($this->m_user->checkRegisterUsername($username))
			    {
				    $usernameStatus = 'fail';
			    }
			    else{
				    $usernameStatus = 'ok';
			    }
		    }
		    else{
			    $usernameStatus = 'empty';
		    }
		    
		    if(empty($password)){
			    $passwordStatus = 'empty';
		    }
		    else{
			    $passwordStatus = 'ok';
		    }
		    
		    if(!empty($email)){
			    if(valid_email($email))
			    {
			    	$emailvalidStatus = 'ok';
			    	if ($this->m_user->checkRegisterEmail($email))
			    	{
				    	$emailStatus = 'fail';
			    	}
			    	else{
				    	$emailStatus = 'ok';
			    	}
			    }
			    else{
				    $emailvalidStatus = 'fail';
				    $emailStatus = 'dontknow';
				    
			    }
			}
			else{
				$emailvalidStatus = 'dontknow';
				$emailStatus = 'empty';
			}
		    
		    if(($usernameStatus == 'ok') AND ($emailvalidStatus == 'ok') AND ($emailStatus == 'ok') AND ($emailStatus == 'ok')){
			    $status = 'ok';
		    }
		    else{
			    $status = 'fail';
		    }
		    
		    $data = array('status'=>$status, 'username'=>$usernameStatus, 'password'=>$passwordStatus ,'validemail'=>$emailvalidStatus, 'email'=>$emailStatus);
	    }
	    elseif($_GET['step'] == 2){
		    $country_name = $_GET['inputCountryName'];
	    	$country_capital = $_GET['inputCountryCapital'];
	    	
	    	if(!empty($country_name)){
			    if ($this->m_user->checkRegisterCountry_name($country_name))
			    {
				    $countrynameStatus = 'fail';
			    }
			    else{
				    $countrynameStatus = 'ok';
			    }
		    }
		    else{
			    $countrynameStatus = 'empty';
		    }
		    
		    
		    if(!empty($country_capital)){
		    	if ($this->m_user->checkRegisterCountry_capital($country_capital))
		    	{
			    	$countrycapitalStatus = 'fail';
		    	}
		    	else{
			    	$countrycapitalStatus = 'ok';
		    	}
			}
			else{
				$countrycapitalStatus = 'empty';
			}
		    
		    
		    if(($countrynameStatus == 'ok') AND ($countrycapitalStatus == 'ok')){
			    $status = 'ok';
		    }
		    else{
			    $status = 'fail';
		    }
		    
		    $data = array('status'=>$status, 'country_name'=>$countrynameStatus, 'country_capital'=>$countrycapitalStatus);
	    }
	    elseif($_GET['step'] == 3){
	    	
	    	$username = $_GET['inputUsername'];
	    	$password = $_GET['inputPassword'];
	    	$email = $_GET['inputEmail'];
	    
	    	$country_name = $_GET['inputCountryName'];
	    	$country_continent = $_GET['inputCountryContinent'];
	    	$country_capital = $_GET['inputCountryCapital'];
	    
		    $agency_name = $_GET['inputAgencyName'];
		    $agency_initial = $_GET['inputAgencyInitial'];
		    $director_first_name = $_GET['inputDirectorFirst'];
		    $director_last_name = $_GET['inputDirectorLast'];
	    	
	    	if(!empty($agency_name)){
			    if ($this->m_user->checkRegisterAgency_name($agency_name))
			    {
				    $agencyNameStatus = 'fail';
			    }
			    else{
				    $agencyNameStatus = 'ok';
			    }
		    }
		    else{
			    $agencyNameStatus = 'empty';
		    }
		    
		    if(!empty($agency_initial)){
			    if ($this->m_user->checkRegisterAgency_initial($agency_initial))
			    {
				    $agencyInitialStatus = 'fail';
			    }
			    else{
				    $agencyInitialStatus = 'ok';
			    }
		    }
		    else{
			    $agencyInitialStatus = 'empty';
		    }
		    
		    if(!empty($director_first_name)){
			    if ($this->m_user->checkRegisterDirector_first_name($director_first_name))
			    {
				    $directorFirstStatus = 'fail';
			    }
			    else{
				    $directorFirstStatus = 'ok';
			    }
		    }
		    else{
			    $directorFirstStatus = 'empty';
		    }
		    
		    if(!empty($director_last_name)){
			    if ($this->m_user->checkRegisterDirector_last_name($director_last_name))
			    {
				    $directorLastStatus = 'fail';
			    }
			    else{
				    $directorLastStatus = 'ok';
			    }
		    }
		    else{
			    $directorLastStatus = 'empty';
		    }
		   	
		   	if(($agencyNameStatus == 'ok') AND ($agencyInitialStatus == 'ok') AND ($directorFirstStatus == 'ok') AND ($directorLastStatus == 'ok')){
			    $status = 'ok';
		    }
		    else{
			    $status = 'fail';
		    }
		    
		    if($status = 'ok'){
		    
			    $data = array(
                    'username' => $username,
                    'password' => sha1($password),
                    'email' => $email,
                    'country_name' => $country_name,
                    'country_continent' => $country_continent,
                    'country_capital' => $country_capital,
                    'agency_name' => $agency_name,
                    'agency_initial' => $agency_initial,
                    'director_first_name' => $director_first_name,
                    'director_last_name' => $director_last_name,
                    'pierre' => '50000',
                    'metal' => '50000',
                    'oxygene' => '10000',
                    'carburant' => '25000',
                    'argent' => '50000',
                    'first_time' => '0'
                );
                
                $this->m_user->addOnce($data);
                
                $this->load->library('email');

				$this->email->from('noreply@online-space-agency.net', 'Online Space Agency');
				$this->email->to($email); 
				
				$this->email->subject('Inscription à Online Space Agency');
				$this->email->message('Bonjour/Bonsoir '.$director_first_name.' '.$director_last_name.'.<br /> Votre agency à été créer !');	
				
				$this->email->send();
		    }
		   	      
		    $data = array('status'=>$status, 'agency_name'=>$agencyNameStatus, 'agency_initial'=>$agencyInitialStatus, 'director_first_name'=>$directorFirstStatus, 'director_last_name'=>$directorLastStatus);
	    }
        echo json_encode($data);
	}
        
    function user_interface() { 
                
        $id_user = $this->session->userdata('id');
        $this->load->model('m_user');
        $this->load->model('m_mission');
        $this->load->model('m_building');
        $this->load->model('m_know');
        $this->load->helper('date');
        $this->load->helper('array');
      
        $foo['missions'] = $this->m_mission->listUserMission($id_user);
        $foo['building'] = $this->m_user->checkBuildingUnderConstruction($id_user);
        $foo['technology'] = $this->m_user->checkUnderDevelop($id_user);
        $foo['equipment'] = $this->m_user->checkEquipmentUnderConstruction($id_user);
        
        $date = date("j",time());
		$know_date = $this->m_know->historicDate($date);
		$foo['know_date'] = random_element($know_date);
        
        $data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
        $data['content'] = $this->load->view('template/content/user_interface_content', $foo, TRUE);
        $data['footer'] = $this->load->view('template/footer/user_interface_footer', '', TRUE);
        $data['script'] = $this->load->view('template/script/user_script', '', TRUE);
        
        $this->load->view('layout',$data);
    }
    
    function first_time() { 
                
        $data['header'] = $this->load->view('template/header/first_time_header', '', TRUE);
        $data['content'] = $this->load->view('template/content/first_time_content', '', TRUE);
        $data['script'] = $this->load->view('template/script/first-time_script', '', TRUE);
        $data['footer'] = $this->load->view('template/footer/user_interface_footer', '', TRUE);
        
        $this->load->view('layout',$data);
    }
    
    function CreateDBUser(){
        $id_user = $this->session->userdata('id');
        
        $buildings = $this->m_user->listBuilding();
        $equipments = $this->m_user->listEquipment();
        $spaceObjects = $this->m_user->listSpaceObject();
        $technologys = $this->m_user->listTechnology();
        
        foreach($buildings AS $building){
            $this->m_user->setBuilding($id_user, $building->id_building);
        }
        
        foreach($equipments AS $equipment){
            $this->m_user->setEquipment($id_user, $equipment->id_equipment);
        }
        
        foreach($spaceObjects AS $SpaceObject){
            $this->m_user->setSpaceObject($id_user, $SpaceObject->id_space_object);
        }
        
        foreach($technologys AS $technology){
            $this->m_user->setTechnology($id_user, $technology->id_technology);
        }
        
        $this->m_user->setFirst($id_user);
        redirect('c_main/index');
        
    }
    
    function index(){
    	 $id_user = $this->session->userdata('id');
    	 
    	 $foo['email'] = $this->m_user->getEmail($id_user);
    	 
    	 $data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
         $data['content'] = $this->load->view('template/content/user_index_content', $foo, TRUE);
         $data['footer'] = $this->load->view('template/footer/user_interface_footer', '', TRUE);
         $data['script'] = $this->load->view('template/script/user_script', '', TRUE);
        
         $this->load->view('layout',$data);
    }
    
    function updateInfo(){
    	$this->load->model('m_user');
    	$this->load->helper('email');
        $id_user = $this->session->userdata('id');
        $username = $this->session->userdata('username');
		
		$password_old= $_GET['Ipassword_old'];
		$password_new= $_GET['Ipassword_new'];
		$password_new2= $_GET['Ipassword_new2'];
		$email= $_GET['Iemail'];
		
		if(!empty($password_old)){
			if($this->m_user->checkUser($username, sha1($password_old))){
				$password_oldS = 'ok';
			}
			else{
				$password_oldS = 'fail';
			}
		}
		else{
			$password_oldS = 'empty';
		}
				
		if(!empty($password_new)){
		
			if(!empty($password_new2)){
				$password_newS = 'ok';
				$password_new2S = 'ok';
			}
			else{
				$password_newS = 'ok';
				$password_new2S = 'empty';
			}
		}
		else{
		
			if(!empty($password_new2)){
				$password_newS = 'empty';
				$password_new2S = 'ok';
			}
			else{
				$password_newS = 'empty';
				$password_new2S = 'empty';
			}
		}
		
		if(!empty($email))
		{
		    if(valid_email($email))
		    {
				$emailS = 'ok';
		    }
		    else{
			    $emails = 'notvalid'; 
		    }
		}
		else{
			$emailS = 'empty';
		}
		
		if(($password_oldS == 'ok') AND ($password_new2S == 'ok') AND ($password_newS == 'ok') AND ($emailS == 'ok')){
			$status = 'ok';
			
			$data = array('password' => sha1($password_new), 'email' => $email);
            $this->m_user->updateOnce($id_user, $data);
		}
		else{
			$status = 'fail';
		}
		
		$array = array('status'=>$status, 'password_old'=>$password_oldS, 'password_new2'=>$password_new2S, 'password_new'=>$password_newS, 'email'=>$emailS);
        echo json_encode($array);
    }
}

?>
