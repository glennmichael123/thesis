<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
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
  
     public function page1(){
    	$this->load->view('page1');
    }
     public function page2(){
    	$this->load->view('page2');
    }
     public function page3(){
    	$this->load->view('page3');
    }
    public function incorrectpassword(){
    	$this->load->view('incorrectpassword');
    }
    
    public function getLogId(){
    	print_r($_POST);
    }

    public function loginojt(){
    	if(isset($this->session->userdata['id_number'])){
    		header("Location: dashboard");
    	}
    	else{
    		$this->load->view('loginojt');
    	}
    	
    }

    public function loginsupervisor(){
    	$this->load->view('loginsupervisor');
    }

    public function loginadmin(){
    	$this->load->view('loginadministrator');
    }
    public function finalevaluation(){
    	$this->load->view('finalevaluation');
    }

	public function index()
	{
		// print_r($this->session->userdata['id_number']);exit;
     if(isset($this->session->userdata['id_number'])){
     	header("location: dashboard");
     }else{
     	$data['watch_list'] = $this->users->getWatchlists();
     	$this->load->view('index',$data);
     	//print_r($this->session->userdata['id_number']);exit;
     }
		
		
	}


	public function profile()
	{
		if(!isset($this->session->userdata['id_number'])){
          header("location: index");
     	}else{
     		$data['user_data'] = $this->users->dashboardData($this->session->userdata['id_number']);
     		 $data['image_header'] = $this->users->displayImageToHeader($this->session->userdata['id_number']);
     		$data['personalDetails'] = $this->users->getProfile($this->session->userdata['id_number']);
     		$this->load->view('profile',$data);
     	}
		
		
	}
	public function about()
	{
		$data['watch_list'] = $this->users->getWatchlists();
		$this->load->view('about-us',$data);
	}

	public function changepassword()
	{

		$this->load->view('change-password');
	}

	public function savePassword(){
		$this->users->updatePassword($this->session->userdata['id_number']);
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
		if(!isset($this->session->userdata['id_number'])){
          header("location: index");
         
      	} $this->load->view('evaluate');
		/*else{
     		$account_type = $this->users->getAccountType(isset($this->session->userdata['id_number']) ? $this->session->userdata['id_number']: '');
     		if($account_type[0]['account_type'] == 0){
					header("location: dashboard");
			}
			else if($account_type[0]['account_type'] == 1){
				
			}
			elseif ($account_type[0]['account_type'] == 2) {
				 header("location: adminDashboard");
			}
		}*/
	}

	public function supervisorDashboard(){

		if(!isset($this->session->userdata['id_number'])){
          header("location: index");
     	}else{
     		$data['comments'] = $this->users->getComments();
     		$company_name = $this->users->getCompanySupervisor($this->session->userdata['id_number']);
     		$data['supervisorAddOjt'] = $this->users->supervisorGetTrainee($company_name);
     		$data['traineesLog'] = $this->users->getOjtLogs($this->session->userdata['id_number']);
     		$data['supImage'] = $this->users->supervisorImage($this->session->userdata['id_number']);

     		$this->load->view('supervisor-dashboard', $data);
			
				
			
		}
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
		$logintype = $_POST['login-options'];
		if($logintype == 'ojt'){
			$condition = $this->users->user_login();
			$data['error'] = 'abcd';
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
				$account_type = $this->users->getAccountType(isset($this->session->userdata['id_number']) ? $this->session->userdata['id_number'] : '');
				$existId = $this->users->checkExistRecords($this->session->userdata['id_number']);
				$newId = $this->session->userdata['id_number'];
				$newRecord = Array('id_number' => $newId, 'total_hours' => 200, 'total_evaluations'=> 2);
				if(!$existId && $account_type[0]['account_type'] == 0){
					$this->users->insertNewRecordOjt($newRecord);
				}
				if($account_type[0]['account_type'] == 0){
					header("location: dashboard");
				}else if($account_type[0]['account_type'] == 1){
					header("location: supervisorDashboard");
				 }elseif ($account_type[0]['account_type'] == 2) {
				 	header("location: adminDashboard");
				 }
			
				

					
	}else{
		header("location: index?error=Username or password incorrect");
	}	
	}else if($logintype == 'supervisor'){
		$this->loggedinSupervisor();
	}else if($logintype == 'administrator'){
		$this->loggedinAdministrator();
	}
		


	
}



public function loggedinSupervisor(){
	$condition = $this->users->user_login_supervisor();
		$data['error'] = 'abcd';
		// print_r("condition = " . $condition. "   ");
		if($condition){
			$data = array(
				'username' => $this->input->post('username'), //need to be dynamic e.g $this->input->post('username')
				'password' => $this->input->post('password') // this->input->post('password');
				);
				$result = $this->users->readUserSupervisor($data);
			
				$session_data = $result[0]['id_number'];
				// print_r($session_data);
			// Add user data in session
				$this->session->set_userdata('id_number', $session_data);
				// $account_type = $this->users->getAccountType(isset($this->session->userdata['id_number']) ? $this->session->userdata['id_number'] : '');
				// $existId = $this->users->checkExistRecords(isset($this->session->userdata['id_number']) ? $this->session->userdata['id_number'] : '');
				// $newId = $this->session->userdata['id_number'];
				// $newRecord = Array('id_number' => $newId, 'total_hours' => 200, 'total_evaluations'=> 2);
				header("location: supervisorDashboard");
			
					
	}else{
		header("location: loginsupervisor?error=Username or password incorrect");
	}	

}

public function loggedinAdministrator(){
	$condition = $this->users->user_login_administrator();
		$data['error'] = '';
		// print_r("condition = " . $condition. "   ");
		if($condition){
			$data = array(
				'username' => $this->input->post('username'), //need to be dynamic e.g $this->input->post('username')
				'password' => $this->input->post('password') // this->input->post('password');
				);
				$result = $this->users->readUserAdmin($data);
			
				$session_data = $result[0]['id_number'];
				// print_r($session_data);
			// Add user data in session
				$this->session->set_userdata('id_number', $session_data);
				// $account_type = $this->users->getAccountType(isset($this->session->userdata['id_number']) ? $this->session->userdata['id_number'] : '');
				// $existId = $this->users->checkExistRecords(isset($this->session->userdata['id_number']) ? $this->session->userdata['id_number'] : '');
				// $newId = $this->session->userdata['id_number'];
				// $newRecord = Array('id_number' => $newId, 'total_hours' => 200, 'total_evaluations'=> 2);
				// if(!$existId && $account_type[0]['account_type'] == 0){
				// 	$this->users->insertNewRecordOjt($newRecord);
				// }
				// if($account_type[0]['account_type'] == 0){
				// 	header("location: dashboard");
				// }else if($account_type[0]['account_type'] == 1){
				// 	header("location: supervisorDashboard");
				//  }elseif ($account_type[0]['account_type'] == 2) {
				//  	header("location: adminDashboard");
				//  }
				header("location: adminDashboard");	
			
				

					
	}else{
		header("location: loginadmin?error=Username or password incorrect");
	}	
}

public function editLog(){
	$this->users->editLog();
}
public function addLogs(){
	$this->users->insertLogs();
      header("location: dashboard");
}

public function helloworld(){
	echo 'hello world';
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
		// $newdata['dashboard_data'] = $this->users->dashboardDataAdmin($this->session->userdata['id_number']);
		   $data['student_list'] = $this->users->getStudentList();

		// $newdata['dashboard_data'] = $this->users->dashboardDataAdmin($this->session->userdata['id_number']);
		   $data['student_list'] = $this->users->getStudentList();

		if(!isset($this->session->userdata['id_number'])){
          header("location: index");
     	}else{

     		
				 	// $data['dashboard_data'] = $this->users->dashboardDataAdmin($this->session->userdata['id_number']);
				 	$data['company_list'] = $this->users->getCompanyNames();
				 	$data['company_watch_list'] = $this->users->getCompanyWatchlist();
					$this->load->view('admindashboard', $data);

			}
     }
		

	


	public function deleteLog(){
		
		$this->users->deleteLog();
	}

	public function dashboard(){

		if(!isset($this->session->userdata['id_number'])){
          header("location: index");
     	}else{

     	$data['comments'] = $this->users->getComments();
     	$totalLogsCount = $this->users->getNumberLogs(isset($this->session->userdata['id_number']) ? $this->session->userdata['id_number'] : '');
     	$totalLogsVerifiedCount = $this->users->getNumberLogsVerified(isset($this->session->userdata['id_number']) ? $this->session->userdata['id_number'] : '');
     	

     	$renderedCount = $this->users->getSumRendered(isset($this->session->userdata['id_number']) ? $this->session->userdata['id_number'] : '');


     	$this->users->updateLogCount(isset($totalLogsCount[0]['logscount']) ? $totalLogsCount[0]['logscount'] : 0, $this->session->userdata['id_number']);
     	$this->users->updateLogsVerifiedCount(isset($totalLogsVerifiedCount[0]['logscount']) ? $totalLogsVerifiedCount[0]['logscount'] : 0, $this->session->userdata['id_number']);
     	$this->users->updateRenderedHours(isset($renderedCount[0]['rendered']) ? $renderedCount[0]['rendered'] : 0,  $this->session->userdata['id_number']);

     	$ojtRecords = $this->users->dashboardDataRecords(isset($this->session->userdata['id_number']) ? $this->session->userdata['id_number'] : '');
     	if(!empty($ojtRecords)){
     		$data['total'] = $ojtRecords[0]['total_hours'];

		$data['rendered'] = $ojtRecords[0]['rendered_hours'];
		$data['all_evaluations'] = $ojtRecords[0]['total_evaluations'];
		$data['current_evaluations'] = $ojtRecords[0]['current_evaluations'];
		$data['verified'] = $ojtRecords[0]['logs_verified'];
		$data['totalLogs'] = $ojtRecords[0]['logs'];
		$data['logs_list'] = $this->users->getLogs(isset($this->session->userdata['id_number']) ? $this->session->userdata['id_number'] : '');
		
		$account_type = $this->users->getAccountType(isset($this->session->userdata['id_number']) ? $this->session->userdata['id_number'] : '');
     		if($account_type[0]['account_type'] == 0){
			     	$ojtRecords = $this->users->dashboardDataRecords(isset($this->session->userdata['id_number']) ? $this->session->userdata['id_number'] : '');

					$data['total'] = $ojtRecords[0]['total_hours'];
					$data['rendered'] = $ojtRecords[0]['rendered_hours'];
					$data['all_evaluations'] = $ojtRecords[0]['total_evaluations'];
					$data['current_evaluations'] = $ojtRecords[0]['current_evaluations'];
					$data['verified'] = $ojtRecords[0]['logs_verified'];
					$data['totalLogs'] = $ojtRecords[0]['logs'];
					$data['logs_list'] = $this->users->getLogs(isset($this->session->userdata['id_number']) ? $this->session->userdata['id_number'] : '');
					

					 $data['user_data'] = $this->users->dashboardData($this->session->userdata['id_number']);

		
     	}
		 $data['user_data'] = $this->users->dashboardData($this->session->userdata['id_number']);
		 $data['image_header'] = $this->users->displayImageToHeader($this->session->userdata['id_number']);
					// $this->users->getUserData($this->session->userdata['id_number']);
					$this->load->view('dashboard', $data);
			}
			/*else if($account_type[0]['account_type'] == 1){
					header("location: supervisorDashboard");
			}
			elseif ($account_type[0]['account_type'] == 2) {
					header("location: admindashboard");
			}*/
     	}


	
	}

	public function studentDashboard($id_number){
		$data['comments'] = $this->users->getComments();
		$totalLogsCount = $this->users->getNumberLogs(isset($id_number) ? $id_number : '');
     	$totalLogsVerifiedCount = $this->users->getNumberLogsVerified(isset($id_number) ? $id_number : '');
     	$renderedCount = $this->users->getSumRendered(isset($id_number) ? $id_number : '');
     	$data['supImage'] = $this->users->supervisorImage($this->session->userdata['id_number']);
     	$this->users->updateLogCount(isset($totalLogsCount[0]['logscount']) ? $totalLogsCount[0]['logscount'] : 0, $id_number);
     	$this->users->updateLogsVerifiedCount(isset($totalLogsVerifiedCount[0]['logscount']) ? $totalLogsVerifiedCount[0]['logscount'] : 0, $id_number);
     	$this->users->updateRenderedHours(isset($renderedCount[0]['rendered']) ? $renderedCount[0]['rendered'] : 0,  $id_number);
     	$ojtRecords = $this->users->dashboardDataRecords(isset($id_number) ? $id_number : '');

     	if(!empty($ojtRecords)){
     		$data['total'] = $ojtRecords[0]['total_hours'];
		$data['rendered'] = $ojtRecords[0]['rendered_hours'];
		$data['all_evaluations'] = $ojtRecords[0]['total_evaluations'];
		$data['current_evaluations'] = $ojtRecords[0]['current_evaluations'];
		$data['verified'] = $ojtRecords[0]['logs_verified'];
		$data['totalLogs'] = $ojtRecords[0]['logs'];
		$data['logs_list'] = $this->users->getLogs(isset($id_number) ? $id_number : '');
     	}

     	$data['id_number'] = $id_number;

     	$data['user_data'] = $this->users->dashboardData($id_number);

     	$this->load->view('dashboard', $data);
	}



	public function addTrainee(){
		$this->users->updateTraineeSupID();
	}

	public function adminAddAdmin(){
		$this->users->addAdmin();
	}

	public function adminAddSupervisor(){
		$this->users->addSupervisor();
	}

	public function addWatchlist(){
		$this->users->addWatch();
	}


	public function addComment(){
		$this->users->insertComment();
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

    public function verifyLog(){
    	$this->users->updateLog();
    }

    public function saveImage(){
    	$this->users->profileImage();
    }

    public function supervisorSaveImage(){
    	$this->users->sup_image();
    }

    public function addReport(){
    	$this->users->addReport();
    }
    public function getLastLog(){
    	$this->users->getLastLog();
    }


   	public function saveCSV(){
   		$this->users->importCSV();
   	}

   	public function addStudent(){
   		$this->users->addStud();
   	}
}
