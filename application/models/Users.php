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

        public function queryEmailAndHash(){
                
        }
}
	

?>