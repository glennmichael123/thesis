<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URLn
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
        header('Access-Control-Allow-Origin: *');
        date_default_timezone_set("Asia/Manila");
        $this->load->helper('url');
        $this->load->model('users');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('file');
        $this->load->helper('download');
        $this->load->library('zip');
        $this->load->library('encryption');
        $this->load->library("pagination");

        	 $key = $this->encryption->create_key(16);
		 	$this->encryption->initialize(
		 	array('cipher' => 'aes-128', 'mode' => 'ctr', 'key' => '123'));
    }
     public function ojtform(){
     	$data['initial_data'] = $this->users->load_initial_data($this->session->userdata('id_number'));
     	$this->load->view('page1', $data);
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
     public function viewMidterm($username){
     	$current_ojt_program = $this->users->getOjtProgramForStud($username);
     	$data['evaluation'] = $this->users->getEvaluationViewForAdmin($username,$current_ojt_program->ojt_program);
     	$data['username'] = $username;
    	$this->load->view('viewmidterm',$data);
    }
     public function viewFinal($username){
     	$current_ojt_program = $this->users->getOjtProgramForStud($username);
     	$data['evaluation'] = $this->users->getEvaluationViewForAdminFinal($username,$current_ojt_program->ojt_program);
     	$data['username'] = $username;
    	$this->load->view('viewfinal',$data);
    }
   
    public function insertAnnouncement(){
    	$this->users->insertAnnouncement($this->session->userdata['id_number']);
    }

    public function loginojt(){
    	if(isset($this->session->userdata['id_number'])){
    		header("Location: dashboard");
    	}
    	else{
    		$this->load->view('loginojt');
    	}
    	
    }
    public function getAnnouncement(){
    	$this->users->getAnnouncementsForStudents();
    }
    public function updateAnnouncemment(){
    	$this->users->updateAnnouncemment($this->session->userdata['id_number']);
    }
    public function updateAnnouncemmentToUnread(){
    	$this->users->updateAnnouncemmentToUnread($this->session->userdata['id_number']);
    }
    public function loginsupervisor(){
    	$this->load->view('loginsupervisor');
    }
    public function loginadmin(){
    	$this->load->view('loginadministrator');
    }

    public function newCompany(){
    	$this->load->view('newcompany');
    }
    public function finalevaluation($username){
    	if(!isset($this->session->userdata['id_number'])){
			redirect(base_url('index'));
		}
		 if($this->session->userdata['account_type'] == 'student'){
      		echo "<h1>You are not allowed to view this page</h1>";
      	}else{
      		$current_ojt_program = $this->users->getOjtProgramForStudSup($this->session->userdata['id_number']);
      		// $checkIfExist = $this->users->checkStudEvaluated($username,$current_ojt_program);
      		$checkIfExist = $this->users->checkStudEvaluatedFinal($username);
      		if($checkIfExist){
				echo "<h1>You have already evaluated this student</h1>";
			}else{
				$data['initial_data'] = $this->users->loadFinalEval($username);
				$data['stud_username'] = $username;
				$this->load->view('finalevaluation',$data);
			}
			
		}
    	
    
    }
	public function index()
	{
		
	
     if( isset($this->session->userdata['id_number']) ){
     	redirect(base_url('dashboard'));
     }else{
     	 session_destroy();
     	$data['watch_list'] = $this->users->getWatchlists();
     	$this->load->view('index',$data);
     	//print_r($this->session->userdata['id_number']);exit;
     }
		
		
	}
	public function profile()
	{
		if(!isset($this->session->userdata['id_number'])){
          redirect(base_url('index'));
     	}else{
     		$current_ojt_program = $this->users->getOjtProgramForStud($this->session->userdata['id_number']);
     		$data['numberAnnouncements'] = $this->users->getNumberUnreadAnnouncements($this->session->userdata['id_number']);
     		$data['announcements'] = $this->users->getAnnouncements($this->session->userdata['id_number']);
     		$data['image_header'] = $this->users->displayImageToHeader($this->session->userdata['id_number']);
     		$data['user_data'] = $this->users->dashboardData($this->session->userdata['id_number']);
     		
     		$data['midterm_evaluation'] = $this->users->getMidtermEvaluations($this->session->userdata['id_number'], $current_ojt_program->ojt_program);
     		$data['personalDetails'] = $this->users->getProfile($this->session->userdata['id_number']);
     		$data['familydetails'] = $this->users->getFamilyDetails($this->session->userdata['id_number']);
     		$data['ojtFirstName'] = $this->users->getojtFirstName($this->session->userdata['id_number']);
     		$data['companyInformation'] = $this->users->getCompanyInformation($this->session->userdata['id_number'], $current_ojt_program->ojt_program);
     		$data['emergencyInformation'] = $this->users->getEmergencyDetails($this->session->userdata['id_number']);
     		$data['final_evaluation'] = $this->users->getFinalEvaluations($this->session->userdata['id_number'], $current_ojt_program->ojt_program);
     		$data['supervisorName'] = $this->users->getSupervisorNameForStud($this->session->userdata['id_number'], $current_ojt_program->ojt_program);
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
		$this->users->updatePassword($this->session->userdata['id_number'], $this->session->userdata('account_type'));
	}
	public function signup()
	{
		$this->load->view('signup');
	}
	public function printData()
	{
		$this->users->hello();
	}

	public function evaluate($username){
		if(!isset($this->session->userdata['id_number'])){
         redirect(base_url('index'));
      	}
      	if($this->session->userdata['account_type'] == 'student'){
      		echo "<h1>You are not allowed to view this page</h1>";
      	}else{
      				// $current_ojt_program = $this->users->getOjtProgramForStudSup($this->session->userdata['id_number']);

      				$checkIfExist = $this->users->checkStudEvaluated($username);
      				$data['stud_name'] = $this->users->dashboardData($username);
      				if($checkIfExist){
      					echo "<h1>You have already evaluated this student</h1>";
      				}else{
      					$data['stud_username'] = $username;
      					$this->load->view('evaluate',$data);
      				}
      				
      	}
	}

	public function supervisorDashboard(){
		if(!isset($this->session->userdata['id_number'])){
          redirect('index');
     	}else{
     		$current_ojt_program = $this->users->getOjtProgramForStudSup($this->session->userdata['id_number']);
     		$data['comments'] = $this->users->getComments();
     		$data['evaluated']=$this->users->checkMidtermEvaluation($this->session->userdata('id_number'), $current_ojt_program);
     		$data['evaluated2']=$this->users->checkFinalEvaluation($this->session->userdata('id_number'), $current_ojt_program);
     		if($this->session->userdata['account_type'] == 'student'){
     			redirect('dashboard');
     		}else if($this->session->userdata['account_type'] == 'admin'){
     			redirect('admindashboard');
     		}else{
     		$data['comments'] = $this->users->getComments();
     		
     		// print_r($current_ojt_program);
     		$data['traineesLog'] = $this->users->getOjtLogs($this->session->userdata['id_number'], $current_ojt_program);
     		$company_name = $this->users->getCompanySupervisor($this->session->userdata['id_number']);
     		$data['supervisorAddOjt'] = $this->users->supervisorGetTrainee($company_name,$this->session->userdata['id_number']);
     		$data['ojtRecords'] = $this->users->getOjtRecordsForSupervisor($this->session->userdata['id_number']);
     		$data['ojtStatus'] = $this->users->getOjtStatusForSupervisor($this->session->userdata['id_number'], $current_ojt_program);
     		$data['supervisorName'] = $this->users->getSupervisorName($this->session->userdata['id_number']);
     		$data['supImage'] = $this->users->supervisorImage($this->session->userdata['id_number']); 
     		$data['evaluationsOjt'] = $this->users->countEvaluationsForSupervisor($this->session->userdata['id_number'], $current_ojt_program);
     		$data['not_verified'] = $this->users->getNotVerified($this->session->userdata('id_number'), $current_ojt_program);
     		$this->load->view('supervisor-dashboard', $data);
     		}
     		
			
		}
	}
	public function savePersonalDetails(){
		$this->users->insertPersonalData();
	}
	public function saveFamilyData(){
		$this->users->insertFamilyData();
	}
	public function loggedin(){
		$logintype = $_POST['login-options'];
		if($logintype == 'ojt'){
			$condition = $this->users->user_login();
			$data['error'] = 'abcd';
			$account_type = 'student';
		if($condition){
			$data = array(
				'username' => $this->input->post('username'), //need to be dynamic e.g $this->input->post('username')
				'password' => $this->input->post('password') // this->input->post('password');
				);
				$result = $this->users->readUserId($data);
			
				$session_data = $result[0]['id_number'];
				$ojtProgram = $result[0]['ojt_program'];
				// print_r($session_data);
			// Add user data in session
				$this->session->set_userdata('id_number', $session_data);
				$this->session->set_userdata('account_type', $account_type);
				$this->session->set_userdata('ojt_program', $ojtProgram);
			
				$existPersonalDetails = $this->users->checkExistPersonal($this->session->userdata['id_number']);
				
				if(!$existPersonalDetails){
					redirect('ojtform');
				}else{
					redirect('dashboard');
				}
				
			
	}else{
		$Status = '<p style="font-size: 14px; text-align: center; color: red; font-weight: bold;">Username or password incorrect</p>';
		$this->session->set_flashdata("Status",$Status);
		redirect('index');
	}	
	}else if($logintype == 'supervisor'){
		$account_type = 'supervisor';
		$this->loggedinSupervisor($account_type);
	}else if($logintype == 'administrator'){
		$account_type = 'admin';
		$this->loggedinAdministrator($account_type);
	}
}
	public function studentInfo($username){
  		if(!isset($this->session->userdata['id_number'])){
          redirect('index');
     	}else{
     	$current_ojt_program = $this->users->getOjtProgramForStud($username);
  		$data['username'] = $username;
  		$data['comments'] = $this->users->getComments();
     	$totalLogsCount = $this->users->getNumberLogs($username,$current_ojt_program->ojt_program);
     	$totalLogsVerifiedCount = $this->users->getNumberLogsVerified($username,$current_ojt_program->ojt_program);
     	$data['numberAnnouncements'] = $this->users->getNumberUnreadAnnouncements($username);
     	$renderedCount = $this->users->getSumRendered($username,$current_ojt_program->ojt_program);
     	$data['personalDetails'] = $this->users->getProfile($username);
     	$data['familydetails'] = $this->users->getFamilyDetails($username);
     	$data['emergency'] = $this->users->getEmergencyDetails($username);
     	$data['company'] = $this->users->getCompanyInformation($username,$current_ojt_program->ojt_program);
     	$data['supervisorName'] = $this->users->getSupervisorNameForStud($username,$current_ojt_program->ojt_program);
     	$this->users->updateLogCount(isset($totalLogsCount[0]['logscount']) ? $totalLogsCount[0]['logscount'] : 0, $username,$current_ojt_program->ojt_program);
     	$this->users->updateOJTStatus($username,$current_ojt_program->ojt_program);
     	$this->users->updateLogsVerifiedCount(isset($totalLogsVerifiedCount[0]['logscount']) ? $totalLogsVerifiedCount[0]['logscount'] : 0, $username,$current_ojt_program->ojt_program);
     	$this->users->updateRenderedHours(isset($renderedCount[0]['rendered']) ? $renderedCount[0]['rendered'] : 0,  $username,$current_ojt_program->ojt_program);
     	$ojtRecords = $this->users->dashboardDataRecords($username,$current_ojt_program->ojt_program);
     	$data['checkEmail'] = $this->users->checkEmailVerified($username);
     		if(!empty($ojtRecords)){
			     		$data['total'] = $ojtRecords[0]['required'];
						$data['rendered'] = $ojtRecords[0]['rendered'];
						$data['announcements'] = $this->users->getAnnouncements($username);
						// echo time_elapsed_string($data['announcements'][0]['date_posted']);
						
						$data['all_evaluations'] = $ojtRecords[0]['total'];
						$data['current_evaluations'] = $ojtRecords[0]['current_eval'];
						$data['verified'] = $ojtRecords[0]['verified_logs'];
						$data['totalLogs'] = $ojtRecords[0]['total_logs'];
						$config = array();
						$config['base_url'] = base_url() .'main/studentinfo/'.$username;
						$config['uri_segment'] = 4;
						$config["total_rows"] = $ojtRecords[0]['total_logs'];
				        $config["per_page"] = 10;
				        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
				          $this->pagination->initialize($config);
						$data["links"] = $this->pagination->create_links();
						$data['logs_list'] = $this->users->getLogs($username,$config['per_page'], $page,$current_ojt_program->ojt_program);
     	
						// $data['logs_list'] = $this->users->getLogs($username);
						
						$data['user_data'] = $this->users->dashboardData($username);
						$data['image_header'] = $this->users->displayImageToHeader($username);
					}
  				$this->load->view('student_info',$data);
  	}
  		
  		
  	}
public function loggedinSupervisor($account_type){
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
				$this->session->set_userdata('account_type', $account_type);
				// $account_type = $this->users->getAccountType(isset($this->session->userdata['id_number']) ? $this->session->userdata['id_number'] : '');
				// $existId = $this->users->checkExistRecords(isset($this->session->userdata['id_number']) ? $this->session->userdata['id_number'] : '');
				// $newId = $this->session->userdata['id_number'];
				// $newRecord = Array('id_number' => $newId, 'total_hours' => 200, 'total_evaluations'=> 2);
				redirect('supervisordashboard');
			
					
	}else{
		$Status = '<p style="font-size: 14px; text-align: center; color: red; font-weight: bold;">Username or password incorrect</p>';
		$this->session->set_flashdata("Status",$Status);
		redirect('index');
	}	
}
public function loggedinAdministrator($account_type){
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
				$this->session->set_userdata('account_type', $account_type);
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
				redirect('admindashboard');
			
				
					
	}else{
		$Status = '<p style="font-size: 14px; text-align: center; color: red; font-weight: bold;">Username or password incorrect</p>';
		$this->session->set_flashdata("Status",$Status);
		redirect('index');
	}	
}
public function editLog(){
	$this->users->editLog();
}
public function addLogs(){
	$this->users->insertLogs();
      // header("location: dashboard");
}
public function logout(){
	session_destroy();
	redirect('index');
}
	public function saveEmergencyData(){
		// print_r($_POST);exit;
		$this->users->insertEmergencyData();
	}
	/*public function saveCompanyData(){
		$this->users->insertCompanyData();
	}
*/
	public function adminDashboard(){
	// $newdata['dashboard_data'] = $this->users->dashboardDataAdmin($this->session->userdata['id_number']);
	   $data['student_list'] = $this->users->getStudentList();
	if(!isset($this->session->userdata['id_number'])){
	  header("location: index");
		}else{
			if($this->session->userdata['account_type'] == 'supervisor'){
     		redirect('supervisordashboard');
     		}else if($this->session->userdata['account_type'] == 'student'){
     		redirect('dashboard');
     		}else{
     			$data['courses_for_graph'] = $this->users->getCoursesList($this->session->userdata('id_number'), 'ojt_one');
     			$data['courses_count'] = $this->users->getCoursesCount($this->session->userdata('id_number'), 'ojt_one');
     	
			 	// $data['dashboard_data'] = $this->users->dashboardDataAdmin($this->session->userdata['id_number']);
			 	$data['company_list'] = $this->users->getCompanyNames();
			 	$data['first_name'] = $this->users->getAdminFirstName($this->session->userdata['id_number']);
			 	$data['completed_students'] = $this->users->getStudentStatus($this->session->userdata['id_number'],'ojt_one');
			 	$data['company_watch_list'] = $this->users->getCompanyWatchlist();
			 	$data['course_option'] = empty($_POST['course_option']) ? '' : $_POST['course_option'];
			 	$data['sy'] = empty($_POST['sy_option']) ? '' : $_POST['sy_option'];
			 	$data['school_year'] = $this->users->schoolYear();
			 	$data['crs'] = empty($_POST['course_option']) ? '' : $_POST['course_option'];
			 	$data['courses'] = $this->users->courses();
			 	$data['evC'] = empty($_POST['eval_option']) ? '' : $_POST['eval_option'];

			 	$data['announcements'] = $this->users->getAnnouncmentsForAdmin($this->session->userdata['id_number']);
				$this->load->view('admindashboard', $data);
			}	
		}
		if(date('Y-m-d')==('2019-1-1')){
				echo 'Main/database_backup';
		}
    }
	public function deleteLog(){
		
		$this->users->deleteLog();
	}
	
	
	public function dashboard(){
		
		if(!isset($this->session->userdata['id_number'])){
          redirect(base_url('index'));
     	}else{
     	if($this->session->userdata['account_type'] == 'supervisor'){
     		redirect('supervisordashboard');
     	}else if($this->session->userdata['account_type'] == 'admin'){
     		redirect('admindashboard');
     	}else{
     		$existPersonalDetails = $this->users->checkExistPersonal($this->session->userdata['id_number']);
     	if(!$existPersonalDetails){
     		redirect('ojtform');
     	}else{
     	$current_ojt_program = $this->users->getOjtProgramForStud($this->session->userdata['id_number']);
     	$data['current_program'] = $current_ojt_program->ojt_program;
     	$data['comments'] = $this->users->getComments();
     	$supervisorId = $this->users->getCompanyInformation($this->session->userdata['id_number'], $current_ojt_program->ojt_program);
     	$data['workmates'] = $this->users->getWorkmates($this->session->userdata['id_number'], empty($supervisorId->supervisor_id) ? '' : $supervisorId->supervisor_id);
     	$totalLogsCount = $this->users->getNumberLogs($this->session->userdata['id_number'], $current_ojt_program->ojt_program);
     	$totalLogsVerifiedCount = $this->users->getNumberLogsVerified($this->session->userdata['id_number'], $current_ojt_program->ojt_program);

     	$data['numberAnnouncements'] = $this->users->getNumberUnreadAnnouncements($this->session->userdata['id_number']);
     	$data['supervisor_id'] = $this->users->getSupervisorIdForStudent($this->session->userdata['id_number'], $current_ojt_program->ojt_program);
     	
     	$data['checkEmail'] = $this->users->checkEmailVerified($this->session->userdata['id_number']);
     	$renderedCount = $this->users->getSumRendered($this->session->userdata['id_number'], $current_ojt_program->ojt_program);
     	$this->users->updateOJTStatus($this->session->userdata['id_number'], $current_ojt_program->ojt_program);
     	$this->users->updateLogCount(isset($totalLogsCount[0]['logscount']) ? $totalLogsCount[0]['logscount'] : 0, $this->session->userdata['id_number'], $current_ojt_program->ojt_program);
     	$this->users->updateLogsVerifiedCount(isset($totalLogsVerifiedCount[0]['logscount']) ? $totalLogsVerifiedCount[0]['logscount'] : 0, $this->session->userdata['id_number'], $current_ojt_program->ojt_program);
     	$this->users->updateRenderedHours(isset($renderedCount[0]['rendered']) ? $renderedCount[0]['rendered'] : 0,  $this->session->userdata['id_number'], $current_ojt_program->ojt_program);
     	$ojtRecords = $this->users->dashboardDataRecords($this->session->userdata['id_number'], $current_ojt_program->ojt_program);
     	$data['announcements'] = $this->users->getAnnouncements($this->session->userdata['id_number']);
     		if(!empty($ojtRecords)){
			     		$data['total'] = $ojtRecords[0]['required'];
						$data['rendered'] = $ojtRecords[0]['rendered'];
						$data['all_evaluations'] = $ojtRecords[0]['total'];
						$data['current_evaluations'] = $ojtRecords[0]['current_eval'];
						$data['verified'] = $ojtRecords[0]['verified_logs'];
						$data['totalLogs'] = $ojtRecords[0]['total_logs'];




						$data['logs_list'] = $this->users->getLogsForStuds($this->session->userdata['id_number'], $current_ojt_program->ojt_program);
						
						$data['user_data'] = $this->users->dashboardData($this->session->userdata['id_number']);
						$data['ojtFirstName'] = $this->users->getojtFirstName($this->session->userdata['id_number']);
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
     }
	
	}
	public function workmate($username){
		if(!isset($this->session->userdata['id_number'])){
          redirect(base_url('index'));
     	}else{
     	$current_ojt_program = $this->users->getOjtProgramForStud($username);
     	// echo $current_ojt_program->ojt_program;
     	$data['comments'] = $this->users->getComments();

     	$companyName = $this->users->getCompanyInformation($username, $current_ojt_program->ojt_program);
     	$data['workmates'] = $this->users->getWorkmates($username, $companyName->company_name);
     	$totalLogsCount = $this->users->getNumberLogs($username,$current_ojt_program->ojt_program);
     	$totalLogsVerifiedCount = $this->users->getNumberLogsVerified($username,$current_ojt_program->ojt_program);
     	$data['numberAnnouncements'] = $this->users->getNumberUnreadAnnouncements($this->session->userdata('id_number'));
     	$data['supervisor_id'] = $this->users->getSupervisorIdForStudent($username,$current_ojt_program->ojt_program);
     
     	$data['checkEmail'] = $this->users->checkEmailVerified($username);
     	$renderedCount = $this->users->getSumRendered($username,$current_ojt_program->ojt_program);
     	$this->users->updateLogCount(isset($totalLogsCount[0]['logscount']) ? $totalLogsCount[0]['logscount'] : 0, $username, $current_ojt_program->ojt_program);
     	$this->users->updateOJTStatus($username,$current_ojt_program->ojt_program);
     	$this->users->updateLogsVerifiedCount(isset($totalLogsVerifiedCount[0]['logscount']) ? $totalLogsVerifiedCount[0]['logscount'] : 0, $username,$current_ojt_program->ojt_program);
     	$this->users->updateRenderedHours(isset($renderedCount[0]['rendered']) ? $renderedCount[0]['rendered'] : 0,  $username,$current_ojt_program->ojt_program);
     	$ojtRecords = $this->users->dashboardDataRecords($username,$current_ojt_program->ojt_program);
     		if(!empty($ojtRecords)){
			     		$data['total'] = $ojtRecords[0]['required'];
						$data['rendered'] = $ojtRecords[0]['rendered'];
						$data['announcements'] = $this->users->getAnnouncements($this->session->userdata('id_number'));
						// echo time_elapsed_string($data['announcements'][0]['date_posted']);
						
						$data['all_evaluations'] = $ojtRecords[0]['total'];
						$data['current_evaluations'] = $ojtRecords[0]['current_eval'];
						$data['verified'] = $ojtRecords[0]['verified_logs'];
						$data['totalLogs'] = $ojtRecords[0]['total_logs'];
						$config = array();
						$config['base_url'] = base_url().'main/workmate/'.$username;
						$config['uri_segment'] = 4;
						$config["total_rows"] = $ojtRecords[0]['total_logs'];
				        $config["per_page"] = 10;
				        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
				          $this->pagination->initialize($config);
				           // print_r($page);
						$data['logs_list'] = $this->users->getLogs($username, $config['per_page'], $page, $current_ojt_program->ojt_program);
						$data['userLoggedIn'] = $this->users->currentLoggedInOjt($this->session->userdata('id_number'));
						$data['ojtFirstName'] = $this->users->getojtFirstName($this->session->userdata['id_number']);
						$data['user_data'] = $this->users->dashboardData($username);
						$data['image_header'] = $this->users->displayImageToHeader($this->session->userdata('id_number'));
						$data["links"] = $this->pagination->create_links();
								// $this->users->getUserData($this->session->userdata['id_number']);
							$this->load->view('workmate', $data);
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
		if(!isset($this->session->userdata['id_number'])){
          redirect(base_url('index'));
     	}else{
     		$current_ojt_programP = $this->users->getOjtProgramForStud($id_number);
     		$current_ojt_program = $current_ojt_programP->ojt_program;
     	$companyName = $this->users->getCompanyInformation($id_number, $current_ojt_program);
     	$data['workmates'] = $this->users->getWorkmates($id_number, $companyName->company_name);
     	$data['supervisor_image'] = $this->users->getSupervisorImageForStud($this->session->userdata['id_number']);
		$data['comments'] = $this->users->getComments();
		$totalLogsCount = $this->users->getNumberLogs(isset($id_number) ? $id_number : '', $current_ojt_program);
		$data['image_header'] = $this->users->displayImageToHeader($id_number);
     	$totalLogsVerifiedCount = $this->users->getNumberLogsVerified(isset($id_number) ? $id_number : '', $current_ojt_program);
     	$renderedCount = $this->users->getSumRendered(isset($id_number) ? $id_number : '', $current_ojt_program);
     	$data['supImage'] = $this->users->supervisorImage($this->session->userdata['id_number']);
     	$this->users->updateLogCount(isset($totalLogsCount[0]['logscount']) ? $totalLogsCount[0]['logscount'] : 0, $id_number, $current_ojt_program);
     	$this->users->updateOJTStatus($id_number,$current_ojt_program);
     	$this->users->updateLogsVerifiedCount(isset($totalLogsVerifiedCount[0]['logscount']) ? $totalLogsVerifiedCount[0]['logscount'] : 0, $id_number, $current_ojt_program);
     	$this->users->updateRenderedHours(isset($renderedCount[0]['rendered']) ? $renderedCount[0]['rendered'] : 0,  $id_number, $current_ojt_program);
     	$ojtRecords = $this->users->dashboardDataRecords(isset($id_number) ? $id_number : '', $current_ojt_program);
     	if(!empty($ojtRecords)){
     	$data['total'] = $ojtRecords[0]['required'];
		$data['rendered'] = $ojtRecords[0]['rendered'];
		$data['all_evaluations'] = $ojtRecords[0]['total'];
		$data['current_evaluations'] = $ojtRecords[0]['current_eval'];
		$data['verified'] = $ojtRecords[0]['verified_logs'];
		$data['totalLogs'] = $ojtRecords[0]['total_logs'];
		$config = array();
						$config['base_url'] = base_url() .'main/studentdashboard/'.$id_number;
						$config['uri_segment'] = 4;
						$config["total_rows"] = $ojtRecords[0]['total_logs'];
				        $config["per_page"] = 5;
				        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
				          $this->pagination->initialize($config);
						$data["links"] = $this->pagination->create_links();
		$data['logs_list'] = $this->users->getLogs(isset($id_number) ? $id_number : '',$config['per_page'], $page, $current_ojt_program);
     	}
     	$data['id_number'] = $id_number;
     	$data['user_data'] = $this->users->dashboardData($id_number);
     	$this->load->view('studentdashboard', $data);
     	}
	
	}
	public function addTrainee(){

		$this->users->updateTraineeSupID();
	}
	public function adminAddAdmin(){
		//print_r($_POST);exit;
		$this->users->addAdmin();
	}
	public function adminAddSupervisor(){
		$supervisorEmail = $_POST['supEmail'];
		$supervisorName = $_POST['supName'];
		$supervisorUser = $_POST['supID'];
		// echo $supervisorUser;exit;
		$supervisorPass = $_POST['supPass'];

		$this->sendEmailSupervisor($supervisorEmail,$supervisorName,$supervisorUser,$supervisorPass);
		$this->users->addSupervisor();
	}

	public function sendEmailSupervisor($supervisorEmail,$supervisorName,$supervisorUser,$supervisorPass){
		
	
		// $config = Array(
		// 'protocol' => 'smtp',
		//         'smtp_host' => 'ssl://smtp.gmail.com',
		//         'smtp_port' => 465,
		//         'smtp_user' => 'gtorregosa@gmail.com',
		//         'smtp_pass' => 'popot143',
		//         'mailtype'  => 'html', 
		//         'charset' => 'utf-8',
		//         'wordwrap' => TRUE
		//     );
			$email_body = '';
		    $this->load->library('email');
		    $this->email->set_newline("\r\n");
		    $url = base_url();
		    $email_setting  = array('mailtype'=>'html');
		    $this->email->initialize($email_setting);
		    $email_body .='Hello '.$supervisorName.'' . "<br>";
		    $email_body .='Thank you for accepting our OJT students' . "<br>";
		    $email_body .='Here are your credentials so you could login as a supervisor' . "<br>";
		    $email_body .='Username: ' . $supervisorUser . "<br>";
		    $email_body .='Password: ' . $supervisorPass . "<br>";
		    $this->email->from('CITUAdmin', 'Admin');
		    $this->email->to($supervisorEmail);
		    $this->email->subject('Email Verification');
		    $this->email->message($email_body);
		   	$this->email->send();		
    }

	public function addWatchlist(){
		$this->users->addWatch();
	}
	public function getAnnouncementsInterval(){
		$this->users->getAnnouncements($this->session->userdata['id_number']);
	}
	public function updateAnnouncemmentToUnreadAll(){
		$this->users->updateAnnouncemmentToUnreadAll();
	}
	public function addComment(){
		$this->users->insertComment();
	}
	public function verify(){
		$this->load->view('verify');
	}

	public function sendEmailR($username,$toemail){
		// $email = 'gtorregosa@gmail.com';
		    $config['charset']    = 'utf-8';
		    $this->load->library('email',$config);
		    $this->email->set_newline("\r\n");
		    $url = base_url();
		    $email_setting  = array('mailtype'=>'html');
		    $this->email->initialize($email_setting);
		    $email_body ="Please click this link to reset your password:
						  {$url}main/resetPassword?username=$username";
		    $this->email->from('CITUAdmin', 'Admin');
		    $this->email->to($toemail);
		    $this->email->subject('Email Verification');
		    $this->email->message($email_body);
		   	$this->email->send();

		
	}


	public function confirmSend(){

		 // $config['encryption_key'] = "5"; 
		$toemail =$_POST['email'];

		$username = $this->users->queryUserByEmail($toemail);

	
		 $username = $this->encryption->encrypt($username->id_number);
		
		 $this->sendEmailR($username,$toemail);
		// $hash = md5($email); 
	
			
		


	}

	public function resetPass(){

   		$username = $_POST['username'];
   		$decodedUser = $this->encryption->decrypt($username);
   		// header("refresh:1 index");
   		// echo $decodedUser;exit;

   		$this->users->resetUserPassword($decodedUser);
		
	}

	public function resetpassword(){
		$this->load->view('resetpassword');
	}
	public function verifyreset(){
		$this->load->view('verifyreset');
	}
	public function sendEmail($hash,$email){
		
	
		// $config = Array(
		// 'protocol' => 'smtp',
		//         'smtp_host' => 'ssl://smtp.gmail.com',
		//         'smtp_port' => 465,
		//         'smtp_user' => 'gtorregosa@gmail.com',
		//         'smtp_pass' => 'popot143',
		//         'mailtype'  => 'html', 
		//         'charset' => 'utf-8',
		//         'wordwrap' => TRUE
		//     );
		    $this->load->library('email');
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

    public function resendEmail(){
    	$email = $_POST['email'];
    	$hash = md5($email); 

    	$this->sendEmail($hash, $email);
    }
    public function verifyLog(){
    	$this->users->updateLog();
    } 

    public function unverifyLog(){
    	$this->users->unverifyLog();
    }
    public function saveImage(){
    	$this->users->profileImage();
    }
    public function supervisorSaveImage(){
    	$this->users->sup_image();
    }
    public function addReport(){
    	$this->users->addReport();
    		header("location: dashboard");
    		
    }
    
    public function getLastLog(){
    	$this->users->getLastLog();
    } 
    public function loadSpecificLog(){
    	$this->users->loadSpecificLog();
    }
    /*  public function getMaxComment(){
    	$this->users->getMaxComment();
    }*/
   	public function saveCSV(){
   		$this->users->importCSV();
   	}
   	public function addStudent(){
   		$this->users->addStud();
   	}
   	public function deleteComment(){
   		$this->users->deleteComment();
   	}
   
   	  public function insert_mid_eval($username){ 	
   	  	//print_r($_POST);exit;
   	  	
    	if($this->users->midterm_eval($username)){
    		$name = $this->db->query("SELECT first_name,last_name from users where id_number = '$username'")->row();
    				$Status = '<div class="alert alert-success alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					   You have evaluated  <strong>'.$name->first_name." ".$name->last_name.' </strong> </div>';
    		$this->session->set_flashdata("Status",$Status);
    	}
    	else{
    		echo 'failed';
    	}
    }
    public function insert_final_eval($username){ 	
   	  	//print_r($_POST);exit;
    	if($this->users->final_eval($username)){
    		   		$name = $this->db->query("SELECT first_name,last_name from users where id_number = '$username'")->row();
    				$Status = '<div class="alert alert-success alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					   You have evaluated  <strong>'.$name->first_name." ".$name->last_name.' </strong> </div>';
    		$this->session->set_flashdata("Status",$Status);
    	}
    	else{
    	}
    }
   	public function deleteStudent(){
   		
   		foreach ($_POST['usernames'] as $username){
   			$this->users->delStud($username);
   		}
   		return redirect(base_url('main/admindashboard'));
   	}
   	public function emailCheck(){
   		$this->users->checkEmail();
   	}
   	public function database_backup(){
   			$this->load->dbutil();
   			$format=array('format'=>'zip','filename'=>'ojt_automate.sql');
   			$backup =& $this->dbutil->backup($format);
   			$dbname='db-backup-on-'.date('Y-m-d').'.zip';
   			$save ='assets/backup/'.$dbname;
   			write_file($save,$backup);
   			force_download($dbname,$backup);
   	}
   	public function insertRegistration(){
   		$this->users->insertReg($this->session->userdata('id_number'));
   	}
	public function editProfilePersonal(){	
   		$this->users->editProfilePersonal($this->session->userdata('id_number'));
   		
   	}

   	public function editProfileEmergency(){
   		$this->users->editProfileEmergency($this->session->userdata['id_number']);
   	}
   	public function editProfileFamily(){	
   		$this->users->editProfileFamily($this->session->userdata('id_number'));
   	}
   	public function editProfileCompany(){
   		$this->users->editProfileCompany($this->session->userdata('id_number'));
   	}
   	public function editComment(){
   		$this->users->editComment();
   	}
   	public function truncate(){
   		$this->users->truncateAllTables();
   	}
   	public function filterStudent(){
   		$data['student_list'] = $this->users->filterStud();
   		$html = $this->load->view('tables',$data, TRUE);
   		echo $html;
   	}

   	public function filterLogsForSupervisor(){
   		
   		// $data['traineesLog'] = $this->users->getOjtLogs($this->session->userdata['id_number']);
   		$data['traineesLog'] = $this->users->filterLogsForSupervisor($this->session->userdata['id_number']);
   		$data['comments'] = $this->users->getComments();
   		$html = $this->load->view('filterlog', $data,TRUE);
   		echo $html;
   		
   	}
   	
   	public function updatePostContent(){
   		$this->users->updatePost();
   	}

   	public function deletePostContent(){
   		$this->users->deletePost();
	}

	public function removeStudentFromSupervisor(){
		$name = $_POST['stud_name'];
		$this->users->removeStudentFromSupervisor();
		$Status = '<div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 40px; ">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					   You have removed '.$name.' as your trainee</div>';
    	$this->session->set_flashdata("Status",$Status);

   		
   	}

   	public function getTraineeNames(){
   		$names = $this->db->query("SELECT first_name, last_name, users.id_number, company_information.company_name FROM users INNER JOIN company_information ON company_information.id_number = users.id_number")->result();
   		// $names = $this->db->query("SELECT first_name, last_name, id_number FROM users")->result();
   		$student = array(array('names'=>''));
   		$i=0;

   		if(!empty($names)){
   			foreach ($names as $name) {
   				
   				$student[$i]['names'] = $name->first_name . " " .$name->last_name;
   				$student[$i]['username'] = $name->id_number;
   				$student[$i]['type'] = $name->company_name;
   				$i++;
   			}
   		}

   		echo json_encode($student);
   	}

   	public function loadStudentInfo(){
   		$username = $_POST['username'];
   		$current_ojt_program = $_POST['ojt_program'];
   		$data['comments'] = $this->users->getComments();
     	$totalLogsCount = $this->users->getNumberLogs($username,$current_ojt_program);
     	$totalLogsVerifiedCount = $this->users->getNumberLogsVerified($username,$current_ojt_program);
     	$data['numberAnnouncements'] = $this->users->getNumberUnreadAnnouncements($username);
     	$renderedCount = $this->users->getSumRendered($username,$current_ojt_program);
     	$data['personalDetails'] = $this->users->getProfile($username);
     	$data['familydetails'] = $this->users->getFamilyDetails($username);
     	$data['emergency'] = $this->users->getEmergencyDetails($username);
     	$data['company'] = $this->users->getCompanyInformation($username,$current_ojt_program);
     	$data['supervisorName'] = $this->users->getSupervisorNameForStud($username,$current_ojt_program);
     	$this->users->updateLogCount(isset($totalLogsCount[0]['logscount']) ? $totalLogsCount[0]['logscount'] : 0, $username,$current_ojt_program);
     	$this->users->updateOJTStatus($username,$current_ojt_program);
     	$this->users->updateLogsVerifiedCount(isset($totalLogsVerifiedCount[0]['logscount']) ? $totalLogsVerifiedCount[0]['logscount'] : 0, $username,$current_ojt_program);
     	$this->users->updateRenderedHours(isset($renderedCount[0]['rendered']) ? $renderedCount[0]['rendered'] : 0,  $username,$current_ojt_program);
     	$ojtRecords = $this->users->dashboardDataRecords($username,$current_ojt_program);

     	$data['checkEmail'] = $this->users->checkEmailVerified($username);
     		if(!empty($ojtRecords)){
			     		$data['total'] = $ojtRecords[0]['required'];
						$data['rendered'] = $ojtRecords[0]['rendered'];
						$data['announcements'] = $this->users->getAnnouncements($username);
						// echo time_elapsed_string($data['announcements'][0]['date_posted']);
						
						$data['all_evaluations'] = $ojtRecords[0]['total'];
						$data['current_evaluations'] = $ojtRecords[0]['current_eval'];
						$data['verified'] = $ojtRecords[0]['verified_logs'];
						$data['totalLogs'] = $ojtRecords[0]['total_logs'];
						$config = array();
						$config['base_url'] = base_url() .'main/studentinfo/'.$username;
						$config['uri_segment'] = 4;
						$config["total_rows"] = $ojtRecords[0]['total_logs'];
				        $config["per_page"] = 10;
				        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
				          $this->pagination->initialize($config);
						$data["links"] = $this->pagination->create_links();
						$data['logs_list'] = $this->users->getLogs($username,$config['per_page'], $page,$current_ojt_program);
     	
						// $data['logs_list'] = $this->users->getLogs($username);
						
						$data['user_data'] = $this->users->dashboardData($username);
						$data['image_header'] = $this->users->displayImageToHeader($username);
					}
        $html = $this->load->view('student_info_toLoad',$data,TRUE);
   		echo $html;
     }

     public function changeOjtStatusSameCompany(){
     	$this->users->changeOjtStatusSameCompany($this->session->userdata('id_number'));
     	$Status = '<div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 40px; ">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					   You are now transitioned to OJT2 </div>';
    	$this->session->set_flashdata("Status",$Status);
     }
     public function changeOjtStatusDifferentCompany(){
     	// print_r($_POST);exit;
     	$Status = '<div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 40px; ">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					   You are now transitioned to OJT2 </div>';
    	$this->session->set_flashdata("Status",$Status);
     	$this->users->changeOjtStatusDifferentCompany($this->session->userdata('id_number'));
     }

     public function loadMidtermEvaluations(){
     	$username = $_POST['username'];
     	$ojt_program = $_POST['ojt_program'];
     	$data['evaluation'] = $this->users->getEvaluationViewForAdmin($username,$ojt_program);
    	$this->load->view('midterm_eval_toLoad',$data);
     }
     public function loadFinalEvaluations(){
     	$username = $_POST['username'];
     
     	$ojt_program = $_POST['ojt_program'];
     	$data['evaluation'] = $this->users->getEvaluationViewForAdminFinal($username,$ojt_program);
     	$this->load->view('final_eval_toLoad',$data);
     }
     public function loadAdminGraphs(){
     	$program = $_POST['ojt_program'];
     	// echo $program;
     	$data['courses_for_graph'] = $this->users->getCoursesList($this->session->userdata('id_number'),$program);
     	$data['courses_count'] = $this->users->getCoursesCount($this->session->userdata('id_number'),$program);
		$data['completed_students'] = $this->users->getStudentStatus($this->session->userdata['id_number'],$program);
     	$this->load->view("admin_loadGraphs",$data);

     }
}

