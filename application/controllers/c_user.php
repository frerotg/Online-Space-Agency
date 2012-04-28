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
    
    function registerStart(){
        
        $data['header'] = $this->load->view('template/header/register_step1_header', '', TRUE);
        $data['content'] = $this->load->view('template/element/form/register/registerStep1','',TRUE);
        $data['footer'] = $this->load->view('template/footer/main_footer', '', TRUE);
        $data['script'] = $this->load->view('template/script/register_script', '', TRUE);
        
        $this->load->view('layout',$data);
    }    
    function registerEnd(){
        $this->load->model('m_user');
        $this->load->library('form_validation');
              
        $step = $this->input->post('step');
        switch ($step) {
            case 1:
                
                $this->form_validation->set_rules('username', 'Username', 'trim|required|callback_checkRegisterUsername');
                $this->form_validation->set_rules('password', 'Password', 'trim|required');
                $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_checkRegisterEmail');
                $this->form_validation->set_rules('rules', 'Règles', 'required');
                
                if ($this->form_validation->run() == FALSE){

                    $data['header'] = $this->load->view('template/header/register_step1_header', '', TRUE);
                    $data['content'] = $this->load->view('template/element/form/register/registerStep1','', TRUE);
                }
                else{
                    
                    $form_data['username'] = $this->input->post('username');
                    $form_data['password'] = sha1($this->input->post('password'));
                    $form_data['email'] = $this->input->post('email');
                    
                    $data['header'] = $this->load->view('template/header/register_step2_header', '', TRUE);
                    $data['content'] = $this->load->view('template/element/form/register/registerStep2', $form_data, TRUE);
                }
                
                break;
            case 2:

                $this->form_validation->set_rules('country_name', 'Pays', 'trim|required|callback_checkRegisterCountry_name');
                $this->form_validation->set_rules('country_capital', 'Capitale', 'trim|required|callback_checkRegisterCountry_capital');

                $form_data['username'] = $this->input->post('username');
                $form_data['password'] = $this->input->post('password');
                $form_data['email'] = $this->input->post('email');
                
                if ($this->form_validation->run() == FALSE){

                    $data['header'] = $this->load->view('template/header/register_step2_header', '', TRUE);
                    $data['content'] = $this->load->view('template/element/form/register/registerStep2', $form_data, TRUE);
                }
                else{
                    
                    $form_data['country_name'] = $this->input->post('country_name');
                    $form_data['country_continent'] = $this->input->post('country_continent');
                    $form_data['country_capital'] = $this->input->post('country_capital');
                    $form_data['country_government'] = $this->input->post('country_government');
                    
                    $experiences = $this->m_user->getExperiences();
                    foreach($experiences AS $experience){
                    	$form_data['listExperiences'][$experience->id_type_personnel] = $experience->name_type_personnel;
                    }

                    $data['header'] = $this->load->view('template/header/register_step3_header', '', TRUE);
                    $data['content'] = $this->load->view('template/element/form/register/registerStep3',$form_data, TRUE);
                }
                
                break;
            
            case 'end':

                $this->form_validation->set_rules('agency_name', 'Nom de l\'agence', 'trim|required|callback_checkRegisterAgency_name');
                $this->form_validation->set_rules('agency_initial', 'Initiale de l\'agence', 'trim|required|callback_checkRegisterAgency_initial');
                $this->form_validation->set_rules('director_first_name', 'Nom du directeur', 'trim|required|callback_checkRegisterDirector_first_name');
                $this->form_validation->set_rules('director_last_name', 'Prénom du directeur', 'trim|required|callback_checkRegisterDirector_last_name');

                $form_data['username'] = $this->input->post('username');
                $form_data['password'] = $this->input->post('password');
                $form_data['email'] = $this->input->post('email');                   
                $form_data['country_name'] = $this->input->post('country_name');
                $form_data['country_continent'] = $this->input->post('country_continent');
                $form_data['country_capital'] = $this->input->post('country_capital');
                $form_data['country_government'] = $this->input->post('country_government');

                if ($this->form_validation->run() == FALSE){
                    
                    $data['header'] = $this->load->view('template/header/register_step3_header', '', TRUE);
                    $data['content'] = $this->load->view('template/element/form/register/registerStep3',$form_data, TRUE);
                }
                else{

                    $agency_name = $this->input->post('agency_name');
                    $agency_initial = $this->input->post('agency_initial');
                    $director_first_name = $this->input->post('director_first_name');
                    $director_last_name = $this->input->post('director_last_name');
                    $director_experience = $this->input->post('director_experience');
                    $director_conviction = $this->input->post('director_conviction');

                    $data = array(
                        'username' => $form_data['username'],
                        'password' => $form_data['password'],
                        'email' => $form_data['email'],
                        'country_name' => $form_data['country_name'],
                        'country_continent' => $form_data['country_continent'],
                        'country_capital' => $form_data['country_capital'],
                        'country_government' => $form_data['country_government'],
                        'agency_name' => $agency_name,
                        'agency_initial' => $agency_initial,
                        'director_first_name' => $director_first_name,
                        'director_last_name' => $director_last_name,
                        'director_conviction' => $director_conviction,
                        'director_experience' => $director_experience,
                        'pierre' => '10000',
                        'metal' => '10000',
                        'oxygene' => '1000',
                        'carburant' => '1000',
                        'argent' => '100000',
                        'xp_technology1' => '0',
                        'point_technology1' => '0',
                        'xp_technology2' => '0',
                        'point_technology2' => '0',
                        'first_time' => '0'
                    );
                    
                    $this->m_user->addOnce($data);
                    
                    $this->load->library('email');

					$this->email->from('noreply@online-space-agency.net', 'Online Space Agency');
					$this->email->to($form_data['email']); 
					
					$this->email->subject('Inscription à Online Space Agency');
					$this->email->message('Bonjour/Bonsoir '.$director_first_name.' '.$director_last_name.'.<br /> Votre agency à été créer !');	
					
					$this->email->send();

                    $data['header'] = $this->load->view('template/header/register_success_header', '', TRUE);
                    $data['content'] = $this->load->view('template/element/form/register/success', TRUE);
                }
                
                break;
        }
        
        $data['footer'] = $this->load->view('template/footer/main_footer', '', TRUE);
        $data['script'] = $this->load->view('template/script/register_script', '', TRUE);
        
        $this->load->view('layout',$data);
    }
    
    function checkRegisterUsername($username){
        $this->load->model('m_user');
        
        if ($this->m_user->checkRegisterUsername($username))
        {
                $this->form_validation->set_message('checkRegisterUsername', 'Votre nom d\'utilisateur est déja prit');
                return FALSE;
        }
        else
        {
                return TRUE;
        }
    }
    function checkRegisterEmail($email){
        $this->load->model('m_user');
        
        if ($this->m_user->checkRegisterEmail($email))
        {
                $this->form_validation->set_message('checkRegisterEmail', 'Votre émail est déja utilisé');
                return FALSE;
        }
        else
        {
                return TRUE;
        }
    }
    function checkRegisterCountry_name($country_name){
        $this->load->model('m_user');
        
        if ($this->m_user->checkRegisterCountry_name($country_name))
        {
                $this->form_validation->set_message('checkRegisterCountry_name', 'Le nom de votre pays est déja prit');
                return FALSE;
        }
        else
        {
                return TRUE;
        }
    }
    function checkRegisterCountry_capital($country_capital){
        $this->load->model('m_user');
        
        if ($this->m_user->checkRegisterCountry_capital($country_capital))
        {
                $this->form_validation->set_message('checkRegisterCountry_capital', 'Le nom de votre capitale est déja prit');
                return FALSE;
        }
        else
        {
                return TRUE;
        }
    }
    function checkRegisterAgency_name($agency_name){
        $this->load->model('m_user');
        
        if ($this->m_user->checkRegisterAgency_name($agency_name))
        {
                $this->form_validation->set_message('checkRegisterAgency_name', 'Le nom de votre agence est déja prit');
                return FALSE;
        }
        else
        {
                return TRUE;
        }
    }
    function checkRegisterAgency_initial($agency_initial){
        $this->load->model('m_user');
        
        if ($this->m_user->checkRegisterAgency_initial($agency_initial))
        {
                $this->form_validation->set_message('checkRegisterAgency_initial', 'Les initiale de votre agence sont déja prit');
                return FALSE;
        }
        else
        {
                return TRUE;
        }
    }
    function checkRegisterDirector_first_name($director_first_name){
        $this->load->model('m_user');
        
        if ($this->m_user->checkRegisterDirector_first_name($director_first_name))
        {
                $this->form_validation->set_message('checkRegisterDirector_first_name', 'Le nom de votre personnage est déja prit');
                return FALSE;
        }
        else
        {
                return TRUE;
        }
    }
    function checkRegisterDirector_last_name($director_last_name){
        $this->load->model('m_user');
        
        if ($this->m_user->checkRegisterDirector_last_name($director_last_name))
        {
                $this->form_validation->set_message('checkRegisterDirector_last_name', 'Le prénom de votre personnage est déja prit');
                return FALSE;
        }
        else
        {
                return TRUE;
        }
    }
    
    function user_interface() { 
                
        $id_user = $this->session->userdata('id');
        $this->load->model('m_user');
        $this->load->model('m_mission');
        $this->load->model('m_know');
        $this->load->helper('date');
                
        $foo['missions'] = $this->m_mission->listUserMission($id_user);
        $foo['building'] = $this->m_user->checkBuildingUnderConstruction($id_user);
        $foo['technology'] = $this->m_user->checkUnderDevelop($id_user);
        $foo['equipment'] = $this->m_user->checkEquipmentUnderConstruction($id_user);
        
        $format = 'DATE_RFC822';
		$time = time();
		$date = standard_date($format, $time);
		$foo['know_date'] = $this->m_know->historicDate($date);
        
        $data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
        $data['content'] = $this->load->view('template/content/user_interface_content', $foo, TRUE);
        $data['footer'] = $this->load->view('template/footer/user_interface_footer', '', TRUE);
        $data['script'] = $this->load->view('template/script/user_script', '', TRUE);
        
        $this->load->view('layout',$data);
    }
    
    function first_time() { 
                
        $data['header'] = $this->load->view('template/header/first_time_header', '', TRUE);
        $data['content'] = $this->load->view('template/content/first_time_content', '', TRUE);
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
        
         $this->load->view('layout',$data);
    }
    
    function updateInfo(){
    	$this->load->model('m_user');
        $this->load->library('form_validation');
        $id_user = $this->session->userdata('id');
		
		$password_old = $this->input->post('password_old');
		
		if(!empty($password_old)){
			$this->form_validation->set_rules('password_old', 'Password actuelle', 'trim|required|callback_checkPassword');
			$this->form_validation->set_rules('password_new', 'Nouveau password', 'trim|required|matches[password_new2]');
			$this->form_validation->set_rules('password_new2', 'Confirmation password', 'trim|required');
		}
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        
        if ($this->form_validation->run() == FALSE){
			$foo['email'] = $this->m_user->getEmail($id_user);
			
         	$data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
         	$data['content'] = $this->load->view('template/content/user_index_content', $foo, TRUE);
         	$data['footer'] = $this->load->view('template/footer/user_interface_footer', '', TRUE);
        }
        else{
            
            $form_data['password_new'] = sha1($this->input->post('password'));
            $form_data['email'] = $this->input->post('email');
            
            $data = array(
                        'password' => $form_data['password_new'],
                        'email' => $form_data['email'],
                    );
                    
            $this->m_user->updateOnce($id_user, $data);

            
           	$data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
         	$data['content'] = $this->load->view('template/content/success_updateInfo', '', TRUE);
         	$data['footer'] = $this->load->view('template/footer/user_interface_footer', '', TRUE);
        }
        
        $this->load->view('layout',$data);

    }
    
    function checkPassword($p){
        $this->load->model('m_user');
        $u = $this->session->userdata('username');
        
        $password = sha1($p);
        
        $resultat = $this->m_user->checkUser($u, $password);
        
        if($resultat == 1)
        {
                return TRUE;
        }
        else
        {
        		$this->form_validation->set_message('checkPassword', 'Mot de passe incorrect');
                return FALSE;
        }
    }
    
    
    
}

?>
