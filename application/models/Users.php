<?php
	class Users extends CI_Model {

        public function __construct()
        {
                parent::__construct();
               
        }

        public function hello(){
        	echo'<pre>'; print_r($_POST); echo '</pre>';
        }
}
	

?>