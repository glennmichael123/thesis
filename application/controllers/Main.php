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
		

		print_r($this->input->post()); 
	}

	public function dashboard(){
		$data['total'] = 200;
		$data['rendered'] = 22;
		$data['all'] = 2;
		$data['now'] = 1;

		$this->load->view('dashboard', $data);
	}

	public function sendEmail(){

		

					$config = Array(
					    'protocol' => 'smtp',
					    'smtp_host' => 'ssl://smtp.googlemail.com',
					    'smtp_port' => 465,
					    'smtp_user' => 'gtorregosa',
					    'smtp_pass' => 'popot143',
					    'mailtype'  => 'html', 
					    'charset'   => 'iso-8859-1'
					);
					$this->load->library('email', $config);
					$this->email->set_newline("\r\n");

					$this->email->from('ojtadmin@citu.com', 'LFeliz');
					$this->email->to('gtorregosa@gmail.com');

					$this->email->subject('Email Test');
					$this->email->message('Testing the email class.');

					$result = $this->email->send();
						
					if($result){
						echo "Email sent";
					}
					else{
						echo $this->email->print_debugger();
					}
}


}
