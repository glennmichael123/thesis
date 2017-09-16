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
                        
                }else
                    return false;
                }

      public function readUserId($data){
        $username = $data['username'];
        $password = $data['password'];
  
        $result = $this->db->query("SELECT * FROM users WHERE id_number = '$username' AND password = '$password'");
        return $result->result_array();

         
         }

         public function getAccountType($data){
           $username = $data;
            $result = $this->db->query("SELECT account_type FROM users WHERE id_number = '$username'");
            return $result->result_array();

         
         }

         public function dashboardDataAdmin($data){   
               $username = $data;
             
                $result = $this->db->query("SELECT * FROM users WHERE id_number = '$username'");
                return $result->result_array();


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



}
	

?>