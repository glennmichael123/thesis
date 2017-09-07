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
   
       	

    }

	public function index()
	{
		
		$this->load->view('index');
	}
	public function profile()
	{
		
		$this->load->view('profile');
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


	public function adminDashboard(){
		$this->load->view('admindashboard');
	}

	public function dashboard(){
		$data['total'] = 200;
		$data['rendered'] = 150;
		$data['all'] = 2;
		$data['now'] = 1;
		$data['verified'] = 10;
		$data['totalLogs'] = 50;
		$this->load->view('dashboard', $data);
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
		    $this->email->subject('Testing Email');
		    $this->email->message($email_body);

		    $this->email->send();
  	
  		 
  		 


    }

    public function saveEmail(){
    	$hash = md5(rand(0,1000)); 
    	$email = $_POST['email'];
    	$this->users->saveEmail($hash);
    	$this->sendEmail($hash,$email);
    }


}
