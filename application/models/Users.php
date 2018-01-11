<?php
  class Users extends CI_Model {

        public function __construct()
        {
                $this->load->database();
                $this->load->library('session');

                 // added by peter gwapo ah sku
                $this->load->helper('form');
                $this->load->library('encrypt');

                parent::__construct();      
        }


        public function saveEmail($hash){
                $username = $this->session->userdata['id_number'];
                $email = $_POST['email'];
                return $this->db->query("INSERT INTO email (id_number, email_address, hash) VALUES('$username','$email', '$hash')");     
        }


        public function queryUserByEmail($email){
              // $email = $_POST['reset_email'];
              $result= $this->db->query("SELECT id_number from email where email_address = '$email'")->row();

             return $result;
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

        public function resetUserPassword($username){
          $password = $_POST['newpass'];
          $this->db->query("UPDATE users SET password = '$password' WHERE id_number = '$username'");
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

        public function updateAnnouncemment($username){
            $announcement_id = $_POST['announcement_id'];
            $this->db->query("UPDATE announcements SET status = 1, date_posted = date_posted WHERE id = $announcement_id AND username = '$username'");
        }

        public function getNumberUnreadAnnouncements($username){
            $query = $this->db->query("SELECT count(status) as numberUnread FROM announcements WHERE username = '$username' AND status = 0")->row();

            return $query;
        }

        public function updateAnnouncemmentToUnreadAll(){
            $username = $_POST['username'];
            $this->db->query("UPDATE announcements SET status = 1, date_posted = date_posted WHERE username = '$username'");
        }
        public function updateAnnouncemmentToUnread($username){
            $announcement_id = $_POST['announcement_id'];
            $this->db->query("UPDATE announcements SET status = 0, date_posted = date_posted WHERE id = $announcement_id AND username = '$username'");
        }

        public function getAnnouncements($username){
            $query = $this->db->query("SELECT a.id, admin_id,content,username,status,date_posted,announcement_id,name,id_number FROM announcements as a INNER JOIN admin ON a.admin_id = admin.id_number WHERE a.username = '$username' ORDER BY a.id DESC");
            return $query->result_array();
        }
        public function getAnnouncementsForStudents(){
            $announcement_id = $_POST['announcement_id'];
            $query = $this->db->query("SELECT * FROM announcements WHERE id = '$announcement_id'")->row();
            
            echo json_encode($query);
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

        public function insertAnnouncement($id){
            $usernames = $this->db->query("SELECT id_number FROM users WHERE admin_id = '$id'")->result_array();
            $i = $this->db->query("SELECT MAX(announcement_id) as max_id FROM announcements")->row();
            $announcement = $this->input->post('announcement');
            $insert_announce = mysqli_real_escape_string($this->get_mysqli(),$announcement);
            if(empty($i->max_id)){
              $i=1;
              foreach ($usernames as $username)    {
                $stud_username = $username['id_number'];

                $this->db->query("INSERT INTO announcements(admin_id,content, username,announcement_id) VALUES ('$id','$insert_announce', '$stud_username','$i')");
            
            }
            }else{
              
            $i = $i+$i->max_id;
            foreach ($usernames as $username)    {
                $stud_username = $username['id_number'];

                $this->db->query("INSERT INTO announcements(admin_id,content, username,announcement_id) VALUES ('$id','$insert_announce', '$stud_username','$i')");

            
            }
            }
            
            

        }

      public  function get_mysqli() { 
                $db = (array)get_instance()->db;
                return mysqli_connect('localhost', $db['username'], $db['password'], $db['database']);
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




        public function supervisorGetTrainee($company_name,$username){
          $company_name2 = $company_name[0]['company_name'];
      
            $query = $this->db->query("SELECT users.id_number, users.first_name, users.last_name FROM users INNER JOIN company_information ON users.id_number = company_information.id_number WHERE company_information.company_name = '$company_name2' AND supervisor_id = '' ");
           return $query->result_array();
       }


       
        public function getCompanyNames(){
            $query = $this->db->query("SELECT DISTINCT company_name FROM company_information ORDER BY company_name ASC");

           return $query->result_array();
         }

         public function getCompanyWatchlist(){
            $query = $this->db->query("SELECT DISTINCT company_name FROM company_information WHERE watchlisted = 0");
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
          $admin_id = $this->session->userdata('id_number');
          $query = $this->db->query("SELECT * FROM users INNER JOIN ojt_records ON users.id_number = ojt_records.id_number WHERE users.status!='DELETED' AND users.admin_id = '$admin_id'");

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
            $supervisor_id = empty($_POST['supervisor_id']) ? '' : $_POST['supervisor_id'];

            $data = Array(
            'id_number' => $id_number,
            'date' => $date,
            'time_in' => $time_in,
            'time_out' => $time_out,
            'division' => $division,
            'department' => $department,
            'designation' => $designation,
            'log_content' => $log_content,
            'hours_rendered' => $hours_rendered,
            'supervisor_id' => $supervisor_id
            );

            $existDate = $this->db->query("SELECT * FROM logs WHERE date = '$date' AND id_number = '$id_number' ")->result();

            if(!empty($existDate)){
              echo 'dateexist';
            }else{
               $this->db->insert('logs',$data);
            }
          


        }

        public function getLogs($data,$limit, $start){
            $username = $data;
              $this->db->limit($limit, $start);
              $this->db->select('*');
              $this->db->where('id_number', $username);
              $this->db->from('logs');
              $this->db->order_by('id', 'DESC');
              $result = $this->db->get();
              // print_r($result->result_array());
            // $result = $this->db->query("SELECT * FROM logs WHERE id_number = '$username' ORDER BY id DESC");
            return $result->result_array();
        }

        public function getLogsForStuds($id_number){
              $this->db->select('*');
              $this->db->where('id_number', $id_number);
              $this->db->from('logs');
              $this->db->order_by('id', 'DESC');
              $result = $this->db->get();
              return $result->result_array();
        }

        public function deleteLog(){
            $id = $_POST['log_id'];
            $this->db->where('id', $id);
            $this->db->delete('logs');

            $this->db->where('log_id', $id);
            $this->db->delete('comments');
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

         public function getOjtRecordsForSupervisor($username){
           
            $result = $this->db->query("SELECT ojt_records.id_number, ojt_records.ojtone_required,ojt_records.ojtone_rendered,ojt_records.ojttwo_rendered, users.first_name, users.last_name FROM ojt_records INNER JOIN users ON users.id_number = ojt_records.id_number WHERE supervisor_id = '$username'");         

            return $result->result_array();
         }

         public function filterStud(){
          $admin_id = $this->session->userdata('id_number');
          $html = '';
          $course = empty($_POST['course']) ? '' : $_POST['course'];
          $sy = empty($_POST['sy']) ? '' : $_POST['sy'];
          $eval = empty($_POST['eval']) ? '' : $_POST['eval'];
          $stat = empty($_POST['stat']) ? '' : $_POST['stat'];
          
          if($sy == 'all'){
            $sy = '';
          }
          if($eval == 'all'){
            $eval = '';
          }
          if($eval == 'None'){
            $eval = '0';
          }
          if($course == 'all'){
            $course = '';
          }
          if($stat == 'all'){
            $stat = '';
          }

          ///echo $eval;exit;
          if(empty($sy)){
              $query = $this->db->query("SELECT * FROM users INNER JOIN ojt_records ON users.id_number = ojt_records.id_number WHERE status!='DELETED' AND admin_id = '$admin_id' AND users.course LIKE '%$course%' AND ojtone_current_evaluations LIKE '%$eval%' AND ojtone_status LIKE '%$stat%' ORDER BY users.id_number");
          }else{
              $query = $this->db->query("SELECT * FROM users INNER JOIN ojt_records ON users.id_number = ojt_records.id_number WHERE status!='DELETED' AND admin_id = '$admin_id' AND users.course LIKE '%$course%' AND school_year = '$sy' AND ojtone_current_evaluations LIKE '%$eval%' AND ojtone_status LIKE '%$stat%' ORDER BY users.id_number ASC");
          }
          return $query->result_array();
            // if(!empty($query->result_array())){

            //     $html .= '<tbody>';
            //   foreach ($query->result_array() as $value) {
            //     $html .= '<tr class="dashTable">';
            //     $html .= '<td style="text-align: center;width: 45px"><input type="checkbox" class="checkitem" value="'.$value['id_number'].'" name="usernames[]"></td>';
            //     $html .= '<td><a href="studentinfo/'.$value['id_number'].'">'.$value['first_name']." ". $value['last_name'].'</a></td>';
            //     $html .= '<td>'.$value['course']." - ".$value['year'].'</td>';
            //     $html .= '<td>'.$value['school_year'].'</td>';
                
            //     $html .=  '<td>';
            //                 if ($value['ojtone_current_evaluations'] == 1 || $value['ojtone_current_evaluations'] == 2 || $value['ojttwo_current_evaluations'] == 1 || $value['ojttwo_current_evaluations'] == 2){
            //                   $html .= '<a target="_blank" href="'.base_url().'viewmidterm/'.$value['id_number'].'">Midterm  <i class="fa fa-check-circle"></i></a>';
            //                 }else{
            //                   $html .= '<a style="color:gray">Midterm <i class="fa fa-times-circle"></i> </a>';
            //                 }

            //                 if ($value['ojtone_current_evaluations'] == 2 || $value['ojttwo_current_evaluations'] == 2){
            //                   $html .= '| <a target="_blank" href="'.base_url().'viewfinal/'.$value['id_number'].'">  Final <i class="fa fa-check-circle"></i></a>'; 
            //                 }else{
            //                   $html .= '| <a style="color: gray">Final <i class="fa fa-times-circle"></i></a>';
            //                 }
            //     $html .=  '</td>';   

            //     if ($value['ojtone_rendered'] >= $value['ojtone_required'] && $value['ojtone_current_evaluations'] == 2){
            //         $html .= '<td style="color:green;">OJT-1 Completed</td>';
            //     }else{
            //         $html .= '<td style="color:#f44336;">OJT-1 On going</td>';
            //     }

            //     $html .= '</tr>';
            //   }
            //    $html .= '</tbody>';
             
            // }else{
            //   $html .= '<tbody>';
            //   $html .= '</tbody>';
            // }

            //  echo $html;
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


/*        public function insertCompanyData(){
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
*/


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


        /*//to be removed later
        public function checkExistRecords($data){
            $id = $data;
            $query = $this->db->query("SELECT * FROM ojt_records WHERE id_number = '$id'");
               $affectedRows = $this->db->affected_rows();
                
               if($affectedRows>0){
                    return true;
                        
                }else{
                    return false;
                }

        }*/

        public function getMidtermEvaluations($username){

          $query =  $this->db->query("SELECT * FROM midterm_evaluation WHERE username = '$username'");

          return $query->row();
        }
        public function getFinalEvaluations($username){

          $query =  $this->db->query("SELECT * FROM final_evaluation WHERE username = '$username'");

          return $query->row();
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
            return $this->db->query("UPDATE ojt_records SET ojtone_rendered = $hours WHERE id_number = '$id'");
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
            $query = $this->db->query("SELECT logs.id, logs.id_number, logs.date, logs.time_in, logs.time_out, logs.division, logs.department, logs.designation, logs.log_content, logs.hours_rendered, logs.verified, users.first_name, users.last_name, company_information.supervisor_id, ojt_records.supervisor_id, users.user_image FROM logs INNER JOIN users ON users.id_number = logs.id_number INNER JOIN company_information ON company_information.supervisor_id = logs.supervisor_id INNER JOIN ojt_records ON ojt_records.supervisor_id = logs.supervisor_id WHERE logs.supervisor_id = '$id' AND company_information.supervisor_id !='' AND ojt_records.supervisor_id != '' ORDER BY id DESC");
            return $query->result_array();
        }

        public function updateLog(){
            $log_id = $_POST['log_id'];
             $this->db->query("UPDATE logs SET verified = 1 WHERE id = $log_id");
        }

        public function unverifyLog(){
            $log_id = $_POST['log_id'];
             $this->db->query("UPDATE logs SET verified = 0 WHERE id = $log_id");
        }
            
        public function getComments(){
            $query = $this->db->query("SELECT * FROM comments");

            return $query->result_array();
        }
        public function updateOJTStatus($id){
           $this->db->query("UPDATE ojt_records SET ojtone_status = 'COMPLETED' WHERE ojtone_rendered >= ojtone_required AND ojtone_current_evaluations = 2 AND id_number = '$id'");
        }
        public function updatePassword($id,$account_type){

            if($account_type == 'admin'){
                 $old_pass = $this->db->query("SELECT password FROM admin WHERE id_number = '$id'")->row();
             
              $new_pass = $_POST['newpass'];
              $confirm = $_POST['confirm_newpass'];
              $old = $_POST['old_password'];
              if($old!=$old_pass->password){
                echo "old_not_match_admin";exit;
                 //echo '<script>alert("Old passwords did not match");  window.location.href = "changepassword"</script>';
              }else{
                 $this->db->query("UPDATE admin SET password = '$new_pass' WHERE id_number = '$id'");
                 //echo '<script>alert("Password successfully changed"); window.location.href = "admindashboard";</script> ';

              }
            }else if($account_type == 'student'){
                 $old_pass = $this->db->query("SELECT password FROM users WHERE id_number = '$id'")->row();
           
            $new_pass = $_POST['newpass'];
            $confirm = $_POST['confirm_newpass'];
            $old = $_POST['old_password'];
            if($old!=$old_pass->password){
               //echo '<script>alert("Old passwords did not match");  window.location.href = "changepassword"</script>';
              echo "old_not_match_student";exit;
            }else{
               $this->db->query("UPDATE users SET password = '$new_pass' WHERE id_number = '$id'");
               //echo '<script>alert("Password successfully changed"); window.location.href = "dashboard";</script> ';
            }
          
            }else if($account_type == 'supervisor'){
                 $old_pass = $this->db->query("SELECT password FROM supervisor WHERE id_number = '$id'")->row();
           
            $new_pass = $_POST['newpass'];
            $confirm = $_POST['confirm_newpass'];
            $old = $_POST['old_password'];
            if($old!=$old_pass->password){
               echo "old_not_match_supervisor";exit;
            }else{
               $this->db->query("UPDATE supervisor SET password = '$new_pass' WHERE id_number = '$id'");
              // echo '<script>alert("Password successfully changed"); window.location.href = "dashboard";</script> ';

            }
            }

           
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
           $query = $this->db->query("SELECT * FROM ojt_records WHERE supervisor_id = '' AND id_number = '$student_id' ")->row();
           if(!empty($query)){
              $this->db->query("UPDATE company_information SET supervisor_id = '$supervisor_id' WHERE id_number='$student_id'");
               $this->db->query("UPDATE logs SET supervisor_id = '$supervisor_id' WHERE id_number='$student_id'");
               $this->db->query("UPDATE ojt_records SET supervisor_id = '$supervisor_id' WHERE id_number='$student_id'");
           }else{
              echo 'error';
           }
          
         
         }
         public function getSupervisorIdForStudent($username){

            $query = $this->db->query("SELECT supervisor_id FROM ojt_records WHERE id_number = '$username'");

            return $query->row();
         }

         public function addAdmin(){
            //print_r($_POST);exit;
            $adminName = $_POST['adName'];
            $adminID = $_POST['adID'];
            $adminPass = $_POST['adPass'];
            $adminCollege = $_POST['adCollege'];
            $adminEmail = $_POST['adEmail'];
            
            //check duplicate name
            $result = $this->db->query("SELECT * FROM admin WHERE name = '".$adminName."' ");
            if($this->db->affected_rows() > 0){
                echo "name_exist"; exit;
            }

            //check duplicate id
            $result = $this->db->query("SELECT * FROM admin WHERE id_number = '".$adminID."' ");
            if($this->db->affected_rows() > 0){
                echo "id_exist"; exit;
            }

            //check duplicate email
            $result = $this->db->query("SELECT * FROM admin WHERE email = '".$adminEmail."' ");
            if($this->db->affected_rows() > 0){
               echo "email_exist"; exit;
            }
            $result = $this->db->query("SELECT * FROM personal_details WHERE email_address = '".$adminEmail."'");
            if($this->db->affected_rows() > 0){
                echo "email_exist";exit;
            }
            $result = $this->db->query("SELECT * FROM supervisor WHERE email = '".$adminEmail."'");
            if($this->db->affected_rows() > 0){
                echo "email_exist";exit;
            }
            else{
                return $this->db->query("INSERT INTO admin (name, id_number, password, college, email) VALUES('$adminName', '$adminID', '$adminPass', '$adminCollege', '$adminEmail')");
             }
         }
         public function addWatch(){
            $companyToWatch = $_POST['companyName'];

            // CHANGE OPERATOR TO LIKE  --------------
            $result = $this->db->query("SELECT * FROM watchlist WHERE company_name = '".$companyToWatch."'");
            if($this->db->affected_rows() > 0){
                echo "fail";
            }
            else{  
               $this->db->query("UPDATE company_information SET watchlisted = 1 WHERE company_name = '$companyToWatch'");
               return $this->db->query("INSERT INTO watchlist (company_name) VALUES('$companyToWatch')");
            }
         }

         public function addSupervisor(){
            $supervisorName = $_POST['supName'];
            $supervisorComp = $_POST['supCompany'];
            $supervisorDesig = $_POST['supDesig'];
            $supervisorID = $_POST['supID'];
            $supervisorPass = $_POST['supPass'];
            $supervisorEmail = $_POST['supEmail'];
            
            //check duplicate name
            $result = $this->db->query("SELECT * FROM supervisor WHERE name = '".$supervisorName."'");
            if($this->db->affected_rows() > 0){
                echo "name_exist";exit;
            }
            
            //check duplicate id
            $result = $this->db->query("SELECT * FROM supervisor WHERE id_number = '".$supervisorID."'");
            if($this->db->affected_rows() > 0){
                echo "id_exist";exit;
            }
            
            //check duplicate email
            $result = $this->db->query("SELECT * FROM personal_details WHERE email_address = '".$supervisorEmail."'");
            if($this->db->affected_rows() > 0){
                echo "email_exist";exit;
            }
            $result = $this->db->query("SELECT * FROM admin WHERE email = '".$supervisorEmail."'");
            if($this->db->affected_rows() > 0){
                echo "email_exist";exit;
            }
            $result = $this->db->query("SELECT * FROM supervisor WHERE email = '".$supervisorEmail."'");
            if($this->db->affected_rows() > 0){
                echo "email_exist";exit;
            }
            else{
                return $this->db->query("INSERT INTO supervisor (name,company_name,designation,id_number,password,email) VALUES('$supervisorName','$supervisorComp','$supervisorDesig','$supervisorID','$supervisorPass','$supervisorEmail')");
            }
           
         }

         public function getWatchlists(){
            $query = $this->db->query("SELECT * FROM watchlist");
            return $query->result_array();
         }

         public function getProfile($id){
            return $this->db->query("SELECT * FROM personal_details WHERE id_number = '$id'")->result_array();
         }

         public function displayImageToHeader($id){
            return $this->db->query("SELECT * FROM users WHERE id_number = '$id'")->result_array();
         }

         public function getStudentInfo($id_number){

            return $this->db->query("SELECT * FROM users WHERE id_number ='$id_number'")->result_array();

         }
         public function profileImage(){
            if(isset($_POST['saveBrowse'])){
                $id = $this->session->userdata['id_number'];
                $file = $_FILES['files'];

                $path = $_FILES['files']['name'];
                $ext = pathinfo($path, PATHINFO_EXTENSION);
                $fileTmpName = $file['tmp_name'];
                $fileError = $file['error'];
                $randString = $this->generateRandomString();
                if($fileError === 0){
                    $newFileName = $id.".".$ext;
                    $fileDestination = FCPATH."assets\uploads\\";
                    $full_path = 'assets/uploads/'.$newFileName . '?dummy='.$randString;
                    // $img_tag = '<img src='.$full_path.' class="img-circle">';
                    /*$img_tag_toHeader = '<img src='.$full_path.' class="pull-right circular-square user-image" style="width: 40px; height: 40px; margin-top: -5px;">';
*/
                    if (move_uploaded_file($_FILES['files']['tmp_name'], $fileDestination. $newFileName)) {
                           echo "<script>window.location.href='profile'</script>";
                    $this->db->query("UPDATE users SET user_image = '$full_path' WHERE id_number = '$id'");   
                    $this->db->query("UPDATE personal_details SET image_id = '$full_path' WHERE id_number = '$id'");
                    }
                }else{
                    echo "There was an error uploading the file";
                }

            }
         }

         public function generateRandomString($length = 10) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

         public function supervisorImage($id){
            return $this->db->query("SELECT * FROM supervisor WHERE id_number = '$id'")->result_array();
         }

         public function sup_image(){
            if(isset($_POST['supSave'])){
                $id = $this->session->userdata['id_number'];
                $file = $_FILES['supFiles'];
                $path = $_FILES['supFiles']['name'];
                $randString = $this->generateRandomString();
                $ext = pathinfo($path, PATHINFO_EXTENSION);
                $fileTmpName = $file['tmp_name'];
                $fileError = $file['error'];

                if($fileError === 0){
                    $newFileName = $id.".".$ext;
                    $fileDestination = FCPATH."assets\uploads\\";
                    $full_path ='assets/uploads/'.$newFileName. '?dummy='.$randString;
                    /*$img_tag = '<img src='.$full_path.' class="img-circle" id="image-modal">';
                    $img_tag_toHeader = '<img src='.$full_path.' class="pull-right circular-square user-image" style="width: 40px; height: 40px; margin-top: -5px;">';*/

                    if (move_uploaded_file($_FILES['supFiles']['tmp_name'], $fileDestination. $newFileName)) {
                           echo '<script>window.location.href="supervisordashboard"</script>';
                    $this->db->query("UPDATE supervisor SET imageDisplayToChange = '$full_path' WHERE id_number = '$id'");   
                    return $this->db->query("UPDATE supervisor SET image_id = '$full_path' WHERE id_number = '$id'");
                    }
                }else{
                    echo "There was an error uploading the file";
                }

            }
         }

         public function addReport(){
                if(isset($_POST['btn-report'])){
                    $report=$_POST['comment'];
                    return $this->db->query("INSERT INTO reports (report) VALUES('".$report."')");
                }
         }
         public function getLastLog(){
            $username = $_POST['username'];

            $latestId = $this->db->query("SELECT MAX(id) AS latest_id FROM logs WHERE id_number = '$username'")->row();
            $maxId = $latestId->latest_id;
            $lastlog = $this->db->query("SELECT * FROM logs WHERE id = $maxId")->row();

             echo json_encode($lastlog);
         }  

         public function loadSpecificLog(){
            $id = $_POST['log_id'];

          
            $log = $this->db->query("SELECT * FROM logs WHERE id = $id")->row();

             echo json_encode($log);
         }
        

         /*public function getMaxComment(){
            $username = $_POST['username'];

            $latestId = $this->db->query("SELECT MAX(id) AS latest_id FROM comments WHERE supervisor_id = '$username'")->row();
            $maxId = $latestId->latest_id;
            echo $maxId;

         }*/



         //import csv
         public function importCSV(){
            $admin_id = $this->session->userdata('id_number');
            $filename=$_FILES["importCSV"]["tmp_name"];      
            $duplicate_names="";
 
             if($_FILES["importCSV"]["size"] > 0)
             {
                $file = fopen($filename, "r");
                fgets($file);
                while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
                 {
                    // $username = strtolower($getData[1].".".$getData[3]);
                    $username = strtolower(str_replace(' ', '',$getData[1]).".".str_replace(' ', '',$getData[0]));
                    $sy=str_replace(' ','',$getData[5]);
                    
                    $result = $this->db->query("SELECT id_number FROM users WHERE id_number = '".$username."'")->result_array();
                    if(in_array($username, array_column($result, 'id_number'))){
                      $key = array_search($username, array_column($result, 'id_number'));
                      $existStuds[] = $result[$key];
                     
                    } else{
                      if($getData[7]!=""){
                         $total_hours = $getData[6]+$getData[7];
                      }else{
                        $total_hours = $getData[6];
                      }
                      
                      $this->db->query("INSERT INTO users (id_number,admin_id,first_name,middle_initial,last_name,course,year,school_year,password) 
                        values ('$username','$admin_id','".$getData[1]."','".$getData[2]."','".$getData[0]."','".$getData[3]."','".$getData[4]."','$sy','123456')");
                      $this->db->query("INSERT INTO ojt_records(id_number,total_hours,ojtone_required,ojttwo_required) VALUES('$username',$total_hours,'".$getData[6]."','".$getData[7]."')");
                    }
                    
                 }
                 fclose($file);
                 if(!empty($existStuds)){
                    echo '<script>alert("Students:'.implode(',' , array_column($existStuds, 'id_number')).' already exists, not added to the database")</script>';
                 }
                 echo "<script type=\"text/javascript\">
                            alert(\"Successful\");
                      </script>";
                  echo "<script>window.location.replace('admindashboard');</script>";
             }
             else{
                echo "<script type=\"text/javascript\">
                            alert(\"Invalid File:Please Upload CSV File.\");
                            window.location = \"adminDashboard\"
                      </script>";exit;
             }

             /*if($duplicate_names!=""){
              echo "<script type=\"text/javascript\">
                      alert('Duplicate entry:'+' '+$duplicate_names);
                    </script>";
             }*/
         }


         //add student
         public function addStud(){
            $admin_id = $this->session->userdata('id_number');
            $first = $_POST['fname'];
            $mid = $_POST['mname'].".";
            $last = $_POST['lname'];
            $course = $_POST['course'];
            $year = $_POST['year'];
            $ojt1_required = $_POST['ojt1_required'];
            $ojt2_required = $_POST['ojt2_required'];
            $sy = $_POST['sy_1']."-".$_POST['sy_2'];
            $total_hours = $ojt1_required+$ojt2_required;
            $password = '123456';
            $evaluations = 2;
            $username = strtolower(str_replace(' ', '',$first).".".str_replace(' ', '',$last));
            $result = $this->db->query("SELECT * FROM users WHERE id_number = '".$username."'");
            if($this->db->affected_rows() > 0){
                echo "user_exist";
            }
            else{
               $this->db->query("INSERT INTO users (id_number,admin_id,first_name,middle_initial,last_name,course,year,school_year,password) VALUES('".$username."','".$admin_id."','".$first."','".$mid."','".$last."','".$course."',$year,'".$sy."','".$password."')");
               $this->db->query("INSERT INTO ojt_records(id_number,total_hours,ojtone_required,ojttwo_required,total_evaluations) VALUES('".$username."',$total_hours,$ojt1_required,$ojt2_required, $evaluations)");
            }
         }
         public function getTrainess(){
            $supp_id=$this->session->userdata['id_number'];
            $query = $this->db->query("SELECT users.id_number,users.first_name,users.last_name FROM users INNER JOIN company_information
                 ON users.id_number = company_information.id_number WHERE company_information.supervisor_id = '$supp_id'"
                 );
            
            return $query->result_array();
         }



         public function deleteComment(){
            $comment_id = $_POST['comment_id'];
            $this->db->where('id',$comment_id);
            $this->db->delete('comments');
         }
         
         public function midterm_eval($username){
            $value = 0;
                if($_POST['allow_view']==true){  
               $value = 1;

                }
                $supervisor = $_POST['supervisor_id'];
                $a1 =$_POST['enthusiasm'];
                $a2 =$_POST['cooperation'];
                $a3 =$_POST['adaptability'];
                $a4 =$_POST['industriousness'];
                $a5 =$_POST['responsibility'];
                $a6 =$_POST['attentiveness'];
                $a7 =$_POST['grooming'];
                $a8 =$_POST['attendance'];
                $a9 =$_POST['quality'];
                $a10 =$_POST['quantity'];
                $a11 =$_POST['dependability'];
                $a12 =$_POST['comprehension'];
                $a13 =$_POST['safety'];
                $a14 =$_POST['waste'];
                $remarks = $_POST['remarks'];
                $total = $a1+$a2+$a3+$a4+$a5+$a6+$a7+$a8+(($a9+$a10+$a11+$a12+$a13+$a14)*2);    
                       
                $this->db->query("INSERT INTO midterm_evaluation(username,supervisor_username,enthusiasm,cooperation,adaptability,industriousness,responsibility,attentiveness,grooming,
                    attendance,quality,quantity,dependability,comprehension,
                    safety,waste,remarks,allow_view,total) VALUES('$username','$supervisor',$a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10,$a11,$a12,$a13,$a14,'$remarks',$value,$total)"); 

               

                if($this->db->affected_rows()>0){
                     $this->db->query("UPDATE ojt_records SET ojtone_current_evaluations = ojtone_current_evaluations + 1 WHERE id_number = '$username'");
                    return true;
                }
                else
                    return false;

         }
//to be dynamic query where current_ojt program
     public function checkMidtermEvaluation($username){
        $query = $this->db->query("SELECT username from midterm_evaluation where supervisor_username ='$username'");
        return $query->result_array();
      }


      public function checkFinalEvaluation($username){
        $query = $this->db->query("SELECT username from final_evaluation where supervisor_username ='$username'");
        return $query->result_array();
      }

     public function countTrainees($username){
        $query = $this->db->query("SELECT count(id_number) as num_trainee from ojt_records where supervisor_id = '$username'");
         return $query->row();
     }


      public function getNotVerified($username){
           return $this->db->query("SELECT count(verified) as not_verified from logs INNER JOIN company_information ON logs.supervisor_id = company_information.supervisor_id INNER JOIN ojt_records ON ojt_records.supervisor_id = logs.supervisor_id where (logs.supervisor_id='$username' AND verified=0) AND ojt_records.supervisor_id!='' AND company_information.supervisor_id!= ''")->row();
      }
      
       public function delStud($username){
          $this->db->query("UPDATE users SET status='DELETED' WHERE id_number= '$username'");
       }

      public function load_initial_data($username){
          $query = $this->db->query("SELECT * FROM users WHERE id_number = '$username'");
          return $query->result_array();
      }

      public function checkEmail(){
          $email = $_POST['email'];
          
          $result = $this->db->query("SELECT * FROM admin WHERE email = '".$email."' ");
            if($this->db->affected_rows() > 0){
               echo "invalid"; exit;
            }
            $result = $this->db->query("SELECT * FROM personal_details WHERE email_address = '".$email."'");
            if($this->db->affected_rows() > 0){
                echo "invalid";exit;
            }
            $result = $this->db->query("SELECT * FROM supervisor WHERE email = '".$email."'");
            if($this->db->affected_rows() > 0){
                echo "invalid";exit;
            }
      }

      public function insertReg($username){

        // users table
        $fname = $_POST['first_name'];
        $mname = $_POST['middle_initial'];
        $lname = $_POST['last_name'];

        // personal details table
        $college = $_POST['college'];
        $course = $_POST['course'];
        if($_POST['year']=="1st Year"){
          $year = 1;
        }
        else if(($_POST['year']=="2nd Year")){
          $year = 2;
        }
        else if(($_POST['year']=="3rd Year")){
          $year = 3;
        }
        else if(($_POST['year']=="4th Year")){
          $year = 4;
        }
        else if(($_POST['year']=="5th Year")){
          $year = 5;
        }
        $present_add = $_POST['present_address'];
        $permanent_add = $_POST['permanent_address'];
        $contact_num = $_POST['number'];
        $email = $_POST['email'];
        //$birth = date('F d Y',strtotime($_POST['date_of_birth']));
        $birth = date('Y-m-d',strtotime($_POST['date_of_birth'])); 
        //echo $birth;exit;
        $age = $_POST['age'];
        $civil_stat = $_POST['civil_status'];
        $bloodtype = $_POST['blood_type'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $religion = $_POST['religion'];
        $citizenship = $_POST['citizenship'];
        $sex = $_POST['sex'];
        $year = $_POST['year'];
        //family details table
        $father = $_POST['fathers_name'];
        $father_occu = $_POST['fathers_occupation'];
        $mother = $_POST['mothers_name'];
        $mother_occu = $_POST['mothers_occupation'];
        $parents_add = $_POST['parents_address'];
        $parents_contact = $_POST['tel_no'];

        //emergency details table
        $name = $_POST['guardian_name'];
        $relationship = $_POST['relationship_emergency'];
        $emergency_contact = $_POST['tel_no_emergency'];
        $emergency_add = $_POST['emergency_address']; 

        //company information table
        $comp_name = $_POST['company_name'];
        $comp_add = $_POST['company_address'];
        $comp_contact = $_POST['company_telephone'];
        $fax_number = $_POST['company_fax'];
        $product_lines = $_POST['product_lines'];
        $employees = $_POST['employee_numbers'];
        $classif = $_POST['classification'];
       

        $this->db->query("INSERT INTO personal_details(id_number,first_name, middle_initial, last_name, college,course,year,present_address,permanent_address,contact_number,email_address,date_of_birth,age,marital_status,blood_type,weight,height,religion,citizenship,sex) VALUES('".$username."','".$fname."','".$mname."','".$lname."','".$college."','".$course."','$year','".$present_add."','".$permanent_add."',$contact_num,'".$email."','".$birth."',$age,'".$civil_stat."','".$bloodtype."',$weight,$height,'".$religion."','".$citizenship."','".$sex."')");

        $this->db->query("INSERT INTO family_details(id_number,fathers_name,fathers_occupation,mothers_name,mothers_occupation,parents_address,contact_number) VALUES('".$username."','".$father."','".$father_occu."','".$mother."','".$mother_occu."','".$parents_add."',$parents_contact)");

        $this->db->query("INSERT INTO emergency_details(id_number,name,relationship,contact_number,address) VALUES('".$username."','".$name."','".$relationship."',$emergency_contact,'".$emergency_add."')");

        $this->db->query("INSERT INTO company_information(id_number,company_name,company_address,contact_number,fax_number,product_lines,company_classification,number_of_employees) VALUES('".$username."','".$comp_name."','".$comp_add."',$comp_contact,$fax_number,'".$product_lines."','".$classif."','".$employees."')");
      }


      public function checkExistPersonal($username){
       
          $this->db->query("SELECT * FROM personal_details WHERE id_number = '$username'");

          if($this->db->affected_rows()>0){
            return true;
          }else{
              return false;
          }

      }

      public function getFamilyDetails($username){

          $query = $this->db->query("SELECT * FROM family_details WHERE id_number = '".$username."'");

          return $query->row(); 
      }  

      public function getEmergencyDetails($username){

          $query = $this->db->query("SELECT * FROM emergency_details WHERE id_number = '".$username."'");

          return $query->row(); 
      } 

      public function getCompanyInformation($username){

          $query = $this->db->query("SELECT * FROM company_information WHERE id_number = '".$username."'");
            return $query->row();

      }
      public function getWorkmates($username, $supervisor_id){

          $query = $this->db->query("SELECT users.id_number, users.first_name, users.middle_initial, users.last_name FROM users INNER JOIN company_information ON users.id_number = company_information.id_number WHERE company_information.supervisor_id = '$supervisor_id' AND company_information.id_number != '$username'");
          

          return $query->result_array(); 
      }

      public function truncateAllTables(){

          $tables = $this->db->query("show tables")->result_array();

         foreach ($tables as $table) {
            $tb = $table['Tables_in_thesisdatabase'];
            $this->db->query("TRUNCATE $tb");
         }
      }
     

      public function final_eval($username){
          if($_POST['allow_view']==true){
            $allow = 1;
          }else{
            $allow = 0;
          }
          $supervisor = $_POST['supervisor_id'];
          $fname = $_POST['fname'];
          $fcourse = $_POST['fcourse'];
          $fage = $_POST['fage'];
          $fschool = $_POST['fschool'];
          $fcity = $_POST['fcity'];
          $fsex = $_POST['fsex'];
          $fpermanent = $_POST['fpermanent'];
          $frequired = $_POST['frequired'];
          $fmajor = $_POST['fmajor'];
          $fcompany = $_POST['fcompany'];
          $fdivision = $_POST['fdivision'];
          $ffield = $_POST['ffield'];
          $fdates = $_POST['fdates'];
          $ftotal =$_POST['ftotal'];
          $fdatesto = $_POST['fdatesto'];
          $fquality =$_POST['fquality'];
          $fquality2 = $_POST['fquality2'];
          $fdependability = $_POST['fdependability'];
          $fattendance = $_POST['fattendance'];
          $fcooperation = $_POST['fcooperation'];
          $fjudgement = $_POST['fjudgement'];
          $fpersonality = $_POST['fpersonality'];
          $recommend = $_POST['recommend'];
           $total = $fquality + $fquality2 + $fdependability + $fattendance+ $fcooperation + $fjudgement+ $fpersonality;
          // $total = ($fquality + $fquality2 + $fdependability+ $fattendance+ $fcooperation+ $fjudgement + $fpersonality);

            // $this->db->query("INSERT INTO final_evaluation(id_number,name,age,sex,course,major,school,city,permanent,required,company,division,field,dates_from,dates_to,total_hours,quality,quality2,dependability,attendance,cooperation,judgement,personality) VALUES('$username','$fname',$fage,'$fsex','$fcourse','$fmajor','$fschool','$fcity','$fpermanent','$frequired','$fcompany','$fdivision','$ffield','$dates','$fdatesto',$ftotal,$fquality,$fquaility2,$fdependability,$fattendance,$fcooperation,$fjudgement,$fpersonality)");
          $this->db->query("INSERT INTO final_evaluation(username,supervisor_username,name,age,sex,course,major,school,city,permanent,
                    required,company,division,field,dates_from,
                    dates_to,total_hours,quality,quality2,dependability,attendance,cooperation,judgement,personality,recommend,total,allow_view) VALUES('$username','$supervisor','$fname',$fage,'$fsex','$fcourse','$fmajor','$fschool','$fcity','$fpermanent','$frequired','$fcompany','$fdivision','$ffield','$fdates','$fdatesto','$ftotal',$fquality,$fquality2,$fdependability,$fattendance,$fcooperation,$fjudgement,$fpersonality,'$recommend',$total,$allow)"); 


                  if($this->db->affected_rows()>0){
                    $this->db->query("UPDATE ojt_records SET ojtone_current_evaluations = ojtone_current_evaluations + 1 WHERE id_number = '$username'");
                    return true;

                      }
                else
                    return false;
                }
      public function editProfilePersonal($username){

          $data = Array('college'=> $_POST['profile_college'], 
                        'course' => $_POST['profile_course'],
                        'year' => $_POST['profile_year'],
                        'present_address' => $_POST['profile_present_address'],
                        'permanent_address' => $_POST['profile_permanent_address'],
                        'contact_number' => $_POST['profile_contact_number'],
                        'email_address' => $_POST['profile_email'],
                        'date_of_birth' => date('Y-m-d',strtotime($_POST['profile_birth'])),
                        'age' => $_POST['profile_age'],
                        'marital_status' => $_POST['profile_marital'],
                        'blood_type' => $_POST['profile_blood'],
                        'weight' => $_POST['profile_weight'],
                        'height' => $_POST['profile_height'],
                        'religion' => $_POST['profile_religion'],
                        'citizenship' => $_POST['profile_citizenship']);

          $this->db->where('id_number', $username);
          $this->db->update('personal_details', $data);

      }

      public function editProfileEmergency($username){
        // echo $username;exit;

          $data = Array('name'=>$_POST['profile_emergency_name'],
                        'relationship'=>$_POST['profile_relationship_emergency'],
                        'contact_number'=>$_POST['profile_contact_emergency'],
                        'address'=>$_POST['profile_emergency_address']);

          $this->db->where('id_number', $username);
          $this->db->update('emergency_details', $data);

      }

      public function editProfileFamily($username){
         

          $data = Array('fathers_name' => $_POST['profile-father-name'],
                        'fathers_occupation' => $_POST['profile-father-occupation'],
                        'mothers_name' => $_POST['profile-mother-name'],
                        'mothers_occupation' => $_POST['profile-mother-occupation'],
                        'parents_address' => $_POST['profile-parent-address'],
                        'contact_number' => $_POST['profile-contact-number']
                      );
           $this->db->where('id_number', $username);
          $this->db->update('family_details', $data);
      }

      public function editProfileCompany($username){

        $data = Array('company_name' => $_POST['profile_company_name'],
                      'company_address' => $_POST['profile_company_address'],
                      'contact_number' => $_POST['profile_telephone_number'],
                      'fax_number' => $_POST['profile_fax_number'],
                      'product_lines' => $_POST['profile_product_lines'],
                      'company_classification' => $_POST['classification'],
                      'number_of_employees' => $_POST['employee_numbers']
                    );

          $this->db->where('id_number', $username);
          $this->db->update('company_information', $data);
      }

      public function checkEmailVerified($username){

          $query = $this->db->query("SELECT * FROM email WHERE id_number = '$username'");
          return $query->row();
      }

      public function editComment(){  
        $comment_id = $_POST['comment_id'];
        $supervisor_id = $_POST['supervisor_id'];
        $comment = $_POST['comment_content'];

        $data = array('content' => $comment);
        
          $this->db->where('id',$comment_id);
          // $this->db->where('supervisor_id', $supervisor_id);
          $this->db->update('comments', $data);

      }
      
      public function schoolYear(){
        $query = $this->db->query("SELECT DISTINCT school_year FROM users ORDER BY school_year");
        return $query->result_array();
      }

      public function courses(){
        $query = $this->db->query("SELECT DISTINCT course FROM users ORDER BY course");
        return $query->result_array();
      }




      public function getStudentStatus(){

          $query = $this->db->query("SELECT ojtone_rendered, ojtone_required, ojtone_current_evaluations, total_evaluations FROM ojt_records");
          $array_status = array('completed'=>0, 'not_completed'=>0);
          if(!empty($query->result_array())){

              foreach ($query->result_array() as $student_status) {
                
                  if($student_status['ojtone_rendered'] >= 200 && $student_status['ojtone_current_evaluations'] == $student_status['total_evaluations']){
                      
                      $array_status['completed']++;

                  }else{
                      $array_status['not_completed']++;
                  }
              }
          }

          return $array_status;
      }

      public function getOjtStatusForSupervisor($username){
            $query = $this->db->query("SELECT ojtone_rendered, ojtone_required, ojtone_current_evaluations,total_evaluations, ojtone_status FROM ojt_records WHERE supervisor_id = '$username'")->result_array();

            $countAllStud = $this->db->query("SELECT COUNT(id_number) as all_students FROM ojt_records WHERE supervisor_id = '$username' ")->row();
          $array_status = array('completed'=>0, 'all_stud'=>0);

         // echo '<pre>'; print_r($query); echo '</pre>';
          if(!empty($query)){

              foreach ($query as $student_status) {

                  if($student_status['ojtone_rendered'] >= $student_status['ojtone_required'] && $student_status['ojtone_current_evaluations'] >=2){
                      $array_status['completed']++;
                  }

                  
              }
              $array_status['all_stud'] = $countAllStud->all_students;
          }
         return $array_status;
      }

      
      public function getCoursesList(){

        $query = $this->db->query("SELECT DISTINCT course FROM users ORDER BY course ASC")->result_array();
        $courses_list = [];
        foreach ($query as $courses) {
            $c = $courses['course'];
            $courses_list[] = '"'.$c.'"';
        }

        return $courses_list; 
      }

      public function getCoursesCount(){

        $query = $this->db->query("SELECT DISTINCT course FROM users ORDER BY course ASC")->result_array();
        $courses_count = [];
        foreach ($query as $courses) {
            $c = $courses['course'];
            
            $total_students = $this->db->query("SELECT count(*) as total_students FROM users  WHERE course = '$c' ORDER BY course ASC")->row();

            $courses_count[] = $total_students->total_students;
        }

     return $courses_count;
      }

      public function countEvaluationsForSupervisor($username){
           $query = $this->db->query("SELECT ojtone_current_evaluations as current_eval, total_evaluations as total_eval FROM ojt_records WHERE supervisor_id = '$username'")->result_array();
           $array_eval = array('current_eval'=>0, 'total_eval' => 0);
         foreach ($query as $evaluations) {
              $t = $evaluations['total_eval'];
              $c = $evaluations['current_eval'];

              $array_eval['current_eval'] += $c;
              $array_eval['total_eval'] += $t;

         }

         return $array_eval;


      }

      public function getSupervisorImageForStud($username){
          $query= $this->db->query("SELECT image_id FROM supervisor WHERE id_number = '$username' ")->row();

          return $query;

      }

      public function getEvaluationViewForAdmin($username){
          $query= $this->db->query("SELECT * FROM midterm_evaluation WHERE username = '$username' ")->row();

          return $query;
      }  


      public function getFinalEvaluationViewForAdmin($username){
          $query= $this->db->query("SELECT * FROM final_evaluation INNER JOIN users ON users.id_number = final_evaluation.username INNER JOIN personal_details ON final_evaluation.username = personal_details.id_number WHERE username = '$username' ")->row();
          // echo '<pre>'; print_r($query); echo '</pre>';
          return $query;
      }  

       public function currentLoggedInOjt($username){
          $query=$this->db->query("SELECT * FROM users WHERE id_number = '$username' ")->row();

          return $query;
      }

      public function loadFinalEval($username){
        $query = $this->db->query("SELECT * FROM users as u INNER JOIN personal_details as p ON u.id_number = p.id_number INNER JOIN family_details as f ON u.id_number = f.id_number INNER JOIN ojt_records as o ON u.id_number = o.id_number INNER JOIN company_information as c on u.id_number = c.id_number WHERE u.id_number='$username'");
        return $query->result_array();
      }

      public function checkStudEvaluated($username){

          $query = $this->db->query("SELECT * FROM midterm_evaluation WHERE username = '$username'");

          if($this->db->affected_rows() > 0){
              return true;
          }else{
              return false;
          }
      }

      public function checkStudEvaluatedFinal($username){
          $query = $this->db->query("SELECT * FROM final_evaluation WHERE username = '$username'")->row();

          if(!empty($query)){
              return 'true';
          }else{
              return 'false';
          }
      }

    public function filterLogsForSupervisor($id){
      // print_r($_POST);exit;
        $status = $_POST['status'];
        $stud = empty($_POST['stud_id']) ? '' : $_POST['stud_id'];

          if($status == 'all'){
             $query = $this->db->query("SELECT logs.id, logs.id_number, logs.date, logs.time_in, logs.time_out, logs.division, logs.department, logs.designation, logs.log_content, logs.hours_rendered, logs.verified, users.first_name, users.last_name, users.user_image FROM logs INNER JOIN users ON users.id_number = logs.id_number  WHERE logs.supervisor_id = '$id' AND users.id_number LIKE '%$stud%' ORDER BY id DESC");
          }else{
            // echo "hey";exit;
            $query = $this->db->query("SELECT logs.id, logs.id_number, logs.date, logs.time_in, logs.time_out, logs.division, logs.department, logs.designation, logs.log_content, logs.hours_rendered, logs.verified, users.first_name, users.last_name, users.user_image FROM logs INNER JOIN users ON users.id_number = logs.id_number  WHERE logs.supervisor_id = '$id' AND verified = $status AND users.id_number LIKE '%$stud%' ORDER BY id DESC");
          }

            return $query->result_array();
      }

      public function getAnnouncmentsForAdmin($id){
        $query = $this->db->query("SELECT * FROM announcements WHERE admin_id = '$id' GROUP BY announcement_id ORDER BY date_posted DESC");
        return $query->result_array();
      }

      public function updatePost(){
        $postID = $_POST['post_id'];
        $content = $_POST['content'];
        $this->db->query("UPDATE announcements SET content='$content' WHERE announcement_id='$postID'");
      }

      public function deletePost(){
        $postID = $_POST['post_id'];
        $this->db->query("DELETE FROM announcements WHERE announcement_id='$postID'");
      }

     public function removeStudentFromSupervisor(){
         $id = $_POST['stud_id'];
          $this->db->query("UPDATE company_information SET supervisor_id = '' WHERE id_number = '$id'");
          $this->db->query("UPDATE ojt_records SET supervisor_id = '' WHERE id_number = '$id'");
      }

      public function getSupervisorNameForStud($username){
       $supId = $this->db->query("SELECT supervisor_id FROM company_information WHERE id_number = '$username'")->row();
       $si = empty($supId->supervisor_id) ? '' : $supId->supervisor_id;
       $supName = $this->db->query("SELECT name FROM supervisor WHERE id_number = '$si'")->row();
        return $supName;
      }

      public function getAdminFirstName($username){
          $query = $this->db->query("SELECT name FROM admin WHERE id_number = '$username'")->row();
          $breakArray = explode(' ', $query->name);
          $fname = $breakArray[0];
          return $fname;
      } 

      public function getSupervisorName($username){
          $query = $this->db->query("SELECT name FROM supervisor WHERE id_number = '$username'")->row();
          $breakArray = explode(' ', $query->name);
          $fname = $breakArray[0];
          return $fname;
      }

      public function getojtFirstName($username){

          $query = $this->db->query("SELECT first_name FROM users WHERE id_number = '$username'")->row();
          $breakArray = explode(' ', $query->first_name);
          $fname = $breakArray[0];
          return $fname;
      } 
}
?>
  