<?php
	class Users extends CI_Model {

        public function __construct()
        {
                $this->load->database();
                parent::__construct();      
        }

        public function hello(){
        	echo'<pre>'; print_r($_POST); echo '</pre>';
        }

        public function saveEmail($hash){
                
                $email = $_POST['email'];
                return $this->db->query("INSERT INTO email (id_number, email_address, hash) VALUES('14-2649-276','$email', '$hash')");     
        }

        public function insertPersonalData(){
                // print_r($_POST);exit;
               $result = $this->db->query("SELECT id_number FROM personal_details WHERE id_number ='14-2649-276'")->result_array();
               // print_r($result);
                if (empty($result)) {
                     return $this->db->insert('personal_details', $_POST);   
                }else{

                }                
        }


        public function insertFamilyData(){

                $result = $this->db->query("SELECT id_number FROM family_details WHERE id_number ='14-2649-276'")->result_array();
               // print_r($result);
                if (empty($result)) {
                     return $this->db->insert('family_details', $_POST);   
                }else{

                }
        } 

        public function insertEmergencyData(){
                $result = $this->db->query("SELECT id_number FROM emergency_details WHERE id_number ='14-2649-276'")->result_array();
               // print_r($result);
                if (empty($result)) {
                     return $this->db->insert('emergency_details', $_POST);   
                }else{

                }
        }

        public function user_login(){
                $username = $_POST['username']; //need to be dynamic
                $password = $_POST['password']; //need to be dynamic
                $result = $this->db->query("SELECT * FROM users WHERE id_number = '$username' AND password = '$password'");
                //print_r($result->result_array());
                $affectedRows = $this->db->affected_rows();
                
               if($affectedRows>0){
                    return true;
                        
                }else{
                    return false;
                }
        }

         public function user_login_administrator(){
                $username = $_POST['username']; //need to be dynamic
                $password = $_POST['password']; //need to be dynamic
                $result = $this->db->query("SELECT * FROM admin WHERE id_number = '$username' AND password = '$password'");
                //print_r($result->result_array());
                $affectedRows = $this->db->affected_rows();
                
               if($affectedRows>0){
                    return true;
                        
                }else{
                    return false;
                }
        }

        public function readUserAdmin($data){
            $username = $data['username'];
            $password = $data['password'];
      
            $result = $this->db->query("SELECT * FROM admin WHERE id_number = '$username' AND password = '$password'");
            return $result->result_array();

         
         }

         public function user_login_supervisor(){
                $username = $_POST['username']; //need to be dynamic
                $password = $_POST['password']; //need to be dynamic
                $result = $this->db->query("SELECT * FROM supervisor WHERE id_number = '$username' AND password = '$password'");
                //print_r($result->result_array());
                $affectedRows = $this->db->affected_rows();
                
               if($affectedRows>0){
                    return true;
                        
                }else{
                    return false;
                }
        }

      public function readUserId($data){
        $username = $data['username'];
        $password = $data['password'];
  
        $result = $this->db->query("SELECT * FROM users WHERE id_number = '$username' AND password = '$password'");
        return $result->result_array();

         
         }

         public function readUserSupervisor($data){
             $username = $data['username'];
             $password = $data['password'];
  
            $result = $this->db->query("SELECT * FROM supervisor WHERE id_number = '$username' AND password = '$password'");
             return $result->result_array();
         }



           public function supervisorGetTrainee($company_name){
          $company_name2 = $company_name[0]['company_name'];
        
            $query = $this->db->query("SELECT users.id_number, users.first_name, users.last_name FROM users INNER JOIN company_information ON users.id_number = company_information.id_number WHERE company_information.company_name = '$company_name2'");
           return $query->result_array();
       }

        public function getCompanyNames(){
            $query = $this->db->query("SELECT company_name FROM company_information");

           return $query->result_array();
         }

         public function getCompanyWatchlist(){
            $query = $this->db->query("SELECT company_name FROM company_information WHERE watchlisted = 0");
           return $query->result_array();
         }
         public function getCompanySupervisor($id_number){
             $query = $this->db->query("SELECT company_name FROM supervisor WHERE id_number= '$id_number'");
             return $query->result_array();
         }

         public function getAccountType($data){
           $username = $data;
            $result = $this->db->query("SELECT account_type FROM users WHERE id_number = '$username'");
            return $result->result_array();
         }

        //  public function dashboardDataAdmin($data){   
        //        $username = $data;
             
        //         $result = $this->db->query("SELECT * FROM users WHERE id_number = '$username'");
        //         return $result->result_array();


        // }

         public function getStudentList(){
            $query = $this->db->query("SELECT * FROM users");
        
            return $query->result_array();

         }

        public function insertLogs(){
            $id_number = $_POST['id_number'];
            $date =  $_POST['log_date'];
            $time_in = $_POST['time_in'];
            $time_out = $_POST['time_out'];
            $division = $_POST['division'];
            $department = $_POST['department'];
            $designation = $_POST['designation'];
            $log_content = $_POST['log_activity'];
            $hours_rendered = $_POST['hours_rendered'];

            $data = Array(
            'id_number' => $id_number,
            'date' => $date,
            'time_in' => $time_in,
            'time_out' => $time_out,
            'division' => $division,
            'department' => $department,
            'designation' => $designation,
            'log_content' => $log_content,
            'hours_rendered' => $hours_rendered
            );
            return $this->db->insert('logs',$data);


        }

        public function getLogs($data){
            $username = $data;
            $result = $this->db->query("SELECT * FROM logs WHERE id_number = '$username' ORDER BY id DESC");
            return $result->result_array();
        }

        public function deleteLog(){
            $id = $_POST['log_id'];
            $this->db->where('id', $id);
            $this->db->delete('logs');
        }

         public function dashboardData($id_number){   
             $username = $id_number;         
             $result = $this->db->query("SELECT * FROM users WHERE id_number = '$username'");
             return $result->result_array();


        }

        public function dashboardDataRecords($id_number){   
            $username = $id_number;
      
            $result = $this->db->query("SELECT * FROM ojt_records WHERE id_number = '$username'");
                  
           return $result->result_array();
         }   

         public function editLog(){
            $id = $_POST['log_id'];
            $date = $_POST['date'];
            $time_in = $_POST['time_in'];
            $time_out = $_POST['time_out'];
            $division = $_POST['division'];
            $department = $_POST['department'];
            $designation = $_POST['designation'];
            $log_activity = $_POST['log_activity'];
            $hours_rendered = $_POST['hours_rendered'];

            return $this->db->query("UPDATE logs SET date = '$date', time_in = '$time_in', time_out = '$time_out', division = '$division', department = '$division', designation = '$designation', log_content = '$log_activity', hours_rendered = '$hours_rendered'  WHERE id = $id");

         }


        public function insertCompanyData(){
                $result = $this->db->query("SELECT id_number FROM company_information WHERE id_number ='14-2649-276'")->result_array();
               // print_r($result);
               $id_number = $_POST['id_number'];
               $company_name = $_POST['company_name'];
               $company_address = $_POST['company_address'];
               $contact_number = $_POST['contact_number'];
               $fax_number = $_POST['fax_number'];
               $product_lines = $_POST['product_lines'];
               $company_classification = implode($_POST['company_classification'], ',');
               $number_of_employees = $_POST['number_of_employees'];

               $data = Array(
                'id_number' => $id_number,
                'company_name' => $company_name,
                'company_address' => $company_address,
                'contact_number'=> $contact_number, 
                'fax_number' => $fax_number, 
                'product_lines' => $product_lines, 
                'company_classification' => $company_classification,
                'number_of_employees' => $number_of_employees,
                );
               


                if (empty($result)) {
                     return $this->db->insert('company_information', $data);   
                }else{

                }       
        }



        // public getUserData($data){
        //     $id_number = $data;

        //    $result = $this->db->query("SELECT * FROM users WHERE id_number = '$id_number'");

        //    return $result->result_array();
        // }
        public function getNumberLogs($data){
            $id = $data;

            $result = $this->db->query("SELECT COUNT(logs.id) as logscount FROM logs WHERE id_number = '$id'");
            return $result->result_array();
        }

        public function checkExistRecords($data){
            $id = $data;
            $query = $this->db->query("SELECT * FROM ojt_records WHERE id_number = '$id'");
               $affectedRows = $this->db->affected_rows();
                
               if($affectedRows>0){
                    return true;
                        
                }else{
                    return false;
                }

        }

        public function getSumRendered($data){
            $id = $data;

            $query = $this->db->query("SELECT SUM(hours_rendered) AS rendered FROM logs WHERE id_number ='$id' AND verified = 1");
            return $query->result_array();
        }

        public function updateLogCount($logscount,$id){
            return $this->db->query("UPDATE ojt_records SET logs = $logscount WHERE id_number ='$id'");
        }
        public function updateLogsVerifiedCount($logscount, $id){
              return $this->db->query("UPDATE ojt_records SET logs_verified = $logscount WHERE id_number = '$id'");
        }

        public function updateRenderedHours($hours, $id){
            return $this->db->query("UPDATE ojt_records SET rendered_hours = $hours WHERE id_number = '$id'");
        }

        public function getNumberLogsVerified($data){
             $id = $data;

            $result = $this->db->query("SELECT COUNT(verified) as logscount FROM logs WHERE id_number = '$id' AND verified = 1");
            return $result->result_array();
        }

        public function insertNewRecordOjt($data){
            return $this->db->insert('ojt_records', $data);
        }

        public function getOjtLogs($id){
            $query = $this->db->query("SELECT logs.id, logs.id_number, logs.date, logs.time_in, logs.time_out, logs.division, logs.department, logs.designation, logs.log_content, logs.hours_rendered, logs.verified, users.first_name, users.last_name FROM logs INNER JOIN users ON users.id_number = logs.id_number WHERE logs.supervisor_id = '$id' ORDER BY verified ASC");
            return $query->result_array();
        }

        public function updateLog(){
            $log_id = $_POST['log_id'];

            return $this->db->query("UPDATE logs SET verified = 1 WHERE id = $log_id");

        }
            

        public function getComments(){
            $query = $this->db->query("SELECT * FROM comments");

            return $query->result_array();
        }

        public function insertComment(){
            $log_id = $_POST['log_id'];
            $comment = $_POST['comment'];
            $supervisor_id = $_POST['supervisor_id'];
            return $this->db->query("INSERT INTO comments (log_id, content, supervisor_id) VALUES($log_id, '$comment', '$supervisor_id')");
        }

         public function updateTraineeSupID(){
            $supervisor_id = $_POST['supervisor_id'];
            $student_id = $_POST['studentID'];
            
           return $this->db->query("UPDATE company_information SET supervisor_id = '$supervisor_id' WHERE id_number='$student_id'");
         
         }

         public function addAdmin(){
            $adminName = $_POST['adName'];
            $adminID = $_POST['adID'];
            $adminPass = $_POST['adPass'];
            $adminEmail = $_POST['adEmail'];
            
           return $this->db->query("INSERT INTO admin (name, id_number, password, email) VALUES('$adminName', '$adminID', '$adminPass', '$adminEmail')");
         }
         public function addWatch(){
            $companyToWatch = $_POST['companyName'];

           return $this->db->query("INSERT INTO watchlist (company_name) VALUES('$companyToWatch')");
         }

         public function addSupervisor(){
            $supervisorName = $_POST['supName'];
            $supervisorComp = $_POST['supCompany'];
            $supervisorDesig = $_POST['supDesig'];
            $supervisorID = $_POST['supID'];
            $supervisorPass = $_POST['supPass'];
            $supervisorEmail = $_POST['supEmail'];
            
           return $this->db->query("INSERT INTO supervisor (name,company_name,designation,id_number,password,email) VALUES('$supervisorName','$supervisorComp','$supervisorDesig','$supervisorID','$supervisorPass','$supervisorEmail')");
         }
}



?>