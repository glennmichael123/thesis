<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
 function __construct() {
 
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('users');

        $this->load->library('session');
   
       	

    }
    public function finalevaluation(){
    	$this->load->view('finalevaluation');
    }

	public function index()
	{

	
     if(isset($this->session->userdata['id_number'])){
          header("location: dashboard");
     }else{
     	$this->load->view('index');
     }
		
	}
	public function profile()
	{
		if(!isset($this->session->userdata['id_number'])){
          header("location: index");
     	}else{
     		$this->load->view('profile');
     	}
		
		
	}
	public function about()
	{

		$this->load->view('about-us');
	}

	public function changepassword()
	{

		$this->load->view('change-password');
	}

	public function signup()
	{

		$this->load->view('signup');
	}
	public function new()
	{
		
		$this->load->view('new');
	}


	public function printData()
	{
		$this->users->hello();
	}
	public function evaluate(){
		$this->load->view('evaluate');
	}

	public function supervisorDashboard(){
		$this->load->view('supervisor-dashboard');
	}

	public function savePersonalDetails(){
		// print_r($_POST);exit;
		$this->users->insertPersonalData();
	}

	public function saveFamilyData(){
		// print_r($_POST);exit;
		$this->users->insertFamilyData();
	}


	public function loggedin(){
		$condition = $this->users->user_login();
		$error = '';
		// print_r("condition = " . $condition. "   ");
		if($condition){
			$data = array(
				'username' => $this->input->post('username'), //need to be dynamic e.g $this->input->post('username')
				'password' => $this->input->post('password') // this->input->post('password');
				);
				$result = $this->users->readUserId($data);
		
				$session_data = $result[0]['id_number'];
				// print_r($session_data);
			// Add user data in session
				$this->session->set_userdata('id_number', $session_data);
				header("location: dashboard");
					
	}else{
		$error = 'Id number or password does not match';
	}	


	
}

public function logout(){
	session_destroy();

	header("location: index");
}

	public function saveEmergencyData(){
		// print_r($_POST);exit;

		$this->users->insertEmergencyData();
	}

	public function saveCompanyData(){
		// print_r($_POST);

		$this->users->insertCompanyData();
	}



	public function adminDashboard(){
		$this->load->view('admindashboard');
	}

	public function dashboard(){
		if(!isset($this->session->userdata['id_number'])){
          header("location: index");
     	}else{
     			$ojtRecords = $this->users->dashboardDataRecords(isset($this->session->userdata['id_number']) ? $this->session->userdata['id_number'] : '');
		$data['total'] = $ojtRecords[0]['total_hours'];
		$data['rendered'] = $ojtRecords[0]['rendered_hours'];
		$data['all_evaluations'] = $ojtRecords[0]['total_evaluations'];
		$data['current_evaluations'] = $ojtRecords[0]['current_evaluations'];
		$data['verified'] = $ojtRecords[0]['logs_verified'];
		$data['totalLogs'] = $ojtRecords[0]['logs'];

		 $data['user_data'] = $this->users->dashboardData($this->session->userdata['id_number']);
		 

		// $this->users->getUserData($this->session->userdata['id_number']);
		$this->load->view('dashboard', $data);
     	}


	
	}

	public function verify(){
		$this->load->view('verify');
	}


	public function sendEmail($hash,$email){
		

		
		$config = Array(
		'protocol' => 'smtp',
		        'smtp_host' => 'ssl://smtp.googlemail.com',
		        'smtp_port' => 465,
		        'smtp_user' => 'gtorregosa@gmail.com',
		        'smtp_pass' => 'popot143',
		        'mailtype'  => 'html', 
		        'charset' => 'utf-8',
		        'wordwrap' => TRUE

		    );
		    $this->load->library('email', $config);
		    $this->email->set_newline("\r\n");
		    $url = base_url();
		    $email_setting  = array('mailtype'=>'html');
		    $this->email->initialize($email_setting);
		    $email_body ="Please click this link to activate your account:
						  {$url}main/verify?email=$email&hash=$hash";
		    $this->email->from('CITUAdmin', 'Admin');

		    // $list = array($email);
		    $this->email->to($email);
		    $this->email->subject('Email Verification');
		    $this->email->message($email_body);

		   	$this->email->send();
  		 
  		 


    }

    public function saveEmail(){
    	$email = $_POST['email'];
    	$hash = md5($email); 
    	if(!empty($email)){
    		$this->users->saveEmail($hash);
    		$this->sendEmail($hash,$email);
    	}else{

    	}
    
    }


}
