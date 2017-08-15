<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="favicon.ico">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
     <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   
<style type="text/css">
        .page-wrap {
            height: 100%;
            position: relative;
        }
        
        .header {
            background-color: rgba(255, 215, -9, 1);
            padding: 0px 5px 0px 5px;
            font-family: Roboto, sans-serif;
            border-bottom: 2px solid #A55D35;
        }
        
        .logo {
            font-weight: 600;
            font-size: 30px;
        }
        
        .signin {
            padding-top: 10px;
        }
        
        .signin a,
        span {
            color: #A55D35;
        }
        
        nav ul {
            margin-top: 20px;
            padding: 0;
            list-style: none;
            position: relative;
            float: right;
            background: #EED090;
            border-bottom: 1px solid #EED090;
            border-radius: 3px;
        }
        
        nav li {
            float: left;
        }
        
        nav #login {
            border-right: 2px solid #A55D35;
        }
        
        nav #login-trigger,
        nav #signup a {
            display: inline-block;
            *display: inline;
            *zoom: 1;
            height: 25px;
            line-height: 25px;
            font-weight: bold;
            padding: 0 8px;
            text-decoration: none;
            color: #915B51;
        }
        
        nav #signup a {
            border-radius: 0 3px 3px 0;
        }
        
        nav #login-trigger {
            border-radius: 3px 0 0 3px;
        }
        
        nav #login-trigger:hover,
        nav #login .active,
        nav #signup a:hover,
        span:hover {
            background: #915B51;
            color: #EDC844;
            transition: 0.3s linear;
        }
        
        nav #login-content {
            display: none;
            position: absolute;
            top: 24px;
            right: 0;
            z-index: 999;
            background: #fff;
            background-image: linear-gradient(top, #fff, #eee);
            padding: 15px;
            box-shadow: 0 2px 2px -1px rgba(0, 0, 0, .9);
            border-radius: 3px 0 3px 3px;
        }
        
        nav li #login-content {
            right: 0;
            width: 270px;
        }
        /*--------------------*/
        
        #inputs input {
            background: #f1f1f1;
            padding: 6px 5px;
            margin: 0 0 5px 0;
            width: 238px;
            border: 1px solid #ccc;
            box-shadow: 0 1px 1px #ccc inset;
        }
        
        #inputs input:focus {
            background-color: #fff;
            border-color: #e8c291;
            outline: none;
            box-shadow: 0 0 0 1px #e8c291 inset;
        }
        /*--------------------*/
        
        #login #actions {
            margin: 10px 0 0 0;
        }
        
        #login #submit {
            background-color: #d14545;
            background-image: linear-gradient(top, #e97171, #d14545);
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            text-shadow: 0 1px 0 rgba(0, 0, 0, .5);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.3) inset;
            border: 1px solid #7e1515;
            float: left;
            height: 30px;
            padding: 0;
            width: 100px;
            cursor: pointer;
            font: bold 14px Arial, Helvetica;
            color: #fff;
        }
        
        #login #submit:hover,
        #login #submit:focus {}
        
        #login #submit:active {
            outline: none;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
        }
        
        #login #submit::-moz-focus-inner {
            border: none;
        }
        
        #login label {
            float: right;
            line-height: 30px;
        }
        
        #login label input {
            position: relative;
            top: 2px;
            right: 2px;
        }
        
        .header-links {
            float: right;
            margin-top: 30px;
        }
        
        .header-links a {
            font-weight: 600;
            color: #800000;
            margin-left: 20px;
        }
        
        h5 > a {
            position: relative;
            color: #000;
            text-decoration: none;
        }
        
        h5 > a:hover {
            color: #800000;
            text-decoration: none;
        }
        
        h5 > a:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #000;
            visibility: hidden;
            -webkit-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transition: all 0.3s ease-in-out 0s;
            transition: all 0.3s ease-in-out 0s;
        }
        
        h5 > a:hover:before {
            visibility: visible;
            -webkit-transform: scaleX(1);
            transform: scaleX(1);
        }
        
        .current-link:after {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #000;
        }
        
        h5 {
            display: inline;
        }
        
        .footer {
            background-color: #A55D35;
            color: #FFFFFF;
            font-family: Roboto, sans-serif;
            padding: 20px 5px 20px 5px;
        }
        
        .copyright {
            font-size: 12px;
        }
        
        .features {
            position: relative;
            padding: 100px 0px 100px 0px;
        }
        
        .description {
            margin-top: 50px;
        }
        
        .content {
            height: 100%;
            font-family: 'Open Sans', sans-serif;
            padding: 50px 0px 50px 0px;
             
        }
        .form-control{
            display: inline;
            width: 30%;
        }
        .title{
        	text-align: center;
        	/*padding-bottom: 50px;*/
        }
        .well{
        	margin:0;
        	background: #f4f6f9;
        	border-radius: 0px;
        	border: 1px solid #f8f8f9;
            padding: 50px 20px 50px 20px;
        }
        .form-control{
        	border-radius: 0px;
        }
        .form-control:focus{
        	border-color: #EED090;
        	outline:0;
        	-webkit-box-shadow:inset 0 1px 1px rgba(238, 208, 144,.6),0 0 8px rgba(238, 208, 144,.6);
        	box-shadow:inset 0 1px 1px rgba(238, 208, 144,.6),0 0 8px rgba(238, 208, 144,.6)
        }
        .hint{
        	font-size:12px;
        	font-weight: 300;
        	padding-left: 10px;
        	color:#EDC844;
        	display: none;
        }
    
        .form-head h3{
            font-weight: 600;
            /*padding: 20px 0px 20px 0px;*/
            margin:0px 0px 30px 0px;
            padding: 0;

        }
         .forgot-password{
            font-size: 11px;
            float: right;
            margin-top: 8px;
        }
        .required{
            color: red;
            margin-left: 10px;
        }
        .next-form{
            text-align: center;
        }
        .btn-next{
           color: #4286f4;
           border: 1px solid #4286f4;
           background: #fff;
           padding: 5px 30px;
           margin-top: 20px;
        }
         .btn-next:hover{
           color: #FFF;
           border: 1px solid #4286f4;
           background: #4286f4;
           transition: 0.3s linear;

        }
    </style>
	<title></title>
</head>
<body>
	<div class="page-wrap">
		<div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="logo"><img src="<?php echo base_url();?>assets/images/logo.png" style="width: 175px;"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="header-links">
                            <h5> <a href="index.php">Home</a></h5>
                            <h5><a href="about-us.php">About Us</a></h5>
                            <h5><a href="#">Banned Companies</a></h5>

                        </div>
            
                    </div>
                    <div class="col-lg-1">
                        
                    </div>
                </div>
            </div>
        </div>
              <div class="content">
		            <div class="container">
		            	<div class="row">
		            		<div class="col-lg-12">
		            			<div class="title">
		            				<h2>Complete the OJT Form</h2>
		            			</div>
		            		</div>
		            	</div>    
                            
                      
		                <div class="row">
		                     <div class="col-lg-3">
		                     </div>
		                     <div class="col-lg-6">
		                        <section>
		                            <div class="well first-form">
                                     <div class="form-head">
                                         <h3>Personal Data</h3>  
                                     </div>               
		                                <form action="" method="post">

		                                	<fieldset>
		                                		 <label>Name</label><br>
		                                        <input type="text" name="first_name" style="margin-right: 10px;" id="first_name" placeholder="First name" class="form-control" required>	
		                                         <input type="text" style="width: 10%; margin-right: 10px;" name="middle_initial" id="middle_initial" placeholder="M.I" class="form-control" required>
		                                         <input type="text" name="last_name" id="last_name" placeholder="Last name" class="form-control" required><label title="Required" class="required" >*</label><br>
		                                         <label style="margin-top:20px;">Course</label><label style="margin-left: 125px;">Year</label><br>
		                                        <input type="text" name="course" style="margin-right: 10px;" placeholder="Course" id="course" class="form-control" required>
		                                      	<select name="year" id="year" class="form-control" required>
		                                       		<option selected disabled>Select Year</option>
		                                       		<option value="1st Year">1st Year</option>
		                                       		<option value="2nd Year">2nd Year</option>
		                                       		<option value="3rd Year">3rd Year</option>
		                                       		<option value="4th Year">4th Year</option>
		                                       		<option value="5th Year">5th Year</option>
		                                       	</select><label title="Required" class="required">*</label><br>
                                                <label style="margin-top: 20px;">College</label><br>
                                                <select class="form-control" style="width: 320px;" id="college" name="college">
                                                    <option selected disabled>Select college</option>
                                                    <option value="College of Computer Studies">College of Computer Studies</option>
                                                    <option value="College of Engineering and Architecture">College of Engineering and Architecture</option>
                                                    <option value="College of Engineering and Architecture">College of Nursing</option>
                                                    <option value="College of Education">College of Education</option>
                                                    <option value="College of Management, Business and Accoutancy">College of Management, Business and Accoutancy</option>
                                                    <option value="College of Art and Sciences">College of Art and Sciences</option>
                                                </select><label title="Required" class="required">*</label><br>
		                                          <label style="margin-top: 20px;">Present Address</label><br>
                                                 <input type="text" name="present_address" style="margin-right: 10px; width: 75%;" placeholder="Present address" id="present_address" class="form-control" required><label title="Required" class="required">*</label><br>
                                                  <label style="margin-top: 20px;">Permament Address</label><br>
                                                 <input type="text" name="permament_address" style="margin-right: 10px; width: 75%;" placeholder="Permament address" id="permament_address" class="form-control" required><label title="Required" class="required">*</label><br>

		                                        <!-- <label style="margin-top: 20px;">ID No.</label><br>
		                                        <input type="text" name="id_no" id="id_no" class="form-control" placeholder="ID number" style="width: 42%;"><label class="hint">This will be your username</label><br> -->
                                               
		                                     
		                                       
		                                        <label style="margin-top: 20px;">Contact No.</label><label style="margin-top: 20px; margin-left: 95px;">Email Address</label><br>
		                                        <input type="text" style="margin-right: 10px;" name="number" placeholder="Phone or landline" id="number" class="form-control" required>
		                                          <input type="email" style="width: 42%;" name="email" placeholder="Email address" id="number" class="form-control"><label title="Required" class="required">*</label><br>
		                                          <label style="margin-top: 20px;">Date of Birth</label><label style="margin-left: 90px;">Age</label><br>
		                                          <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" required>
		                                          <input type="text" name="age" placeholder="Age" style="margin-left: 10px;" class="form-control" id="age"><label title="Required" class="required">*</label><br>
		                                          <label style="margin-top: 20px;">Status</label><label style="margin-left: 130px;">Blood Type</label><br>
                                                  <select class="form-control" id="civil_status" name="civil_status" required> 
                                                      <option selected disabled>Select status</option>
                                                      <option value="Single">Single</option>
                                                      <option value="Married">Married</option>
                                                      
                                                  </select>
                                                   <select class="form-control" style="margin-left: 10px;" id="blood_type" name="blood_type" required>
                                                      <option selected disabled>Blood type</option>
                                                      <option value="Type A">Type A</option>
                                                      <option value="Type B">Type B</option>
                                                      <option value="Type AB">Type AB</option>
                                                      <option value="Type O">Type O</option>
                                                      
                                                  </select> <label title="Required" class="required">*</label><br>

		                                           <label style="margin-top: 20px;">Weight</label><label style="margin-left: 130px;">Age</label><br>
                                                  <input type="text" name="weight" placeholder="Weight in kg" class="form-control" id="weight">
                                                  <input type="text" name="height" placeholder="Height in cm" style="margin-left: 10px;" class="form-control" id="age"><br>

                                                    <label style="margin-top: 20px;">Religion</label><label style="margin-left: 120px;">Citizenship</label><br> 
                                                      <input type="text" name="religion" placeholder="Religion" class="form-control" id="religion">
                                                  <input type="text" name="citizenship" placeholder="Citizenship" style="margin-left: 10px;" class="form-control" id="citizenship"><br>

                                             
                                          
		                                  
		                                        
		               
		                                	</fieldset>
		                                	 <div class="form-head">
                                                     <h3 style="margin-top: 30px;">Family Data</h3>
                                                     
                                                  </div>
                                                  <label>Father's Name</label><label style="margin-left: 135px;">Occupation</label><br>
                                                      <input type="text" style="width: 42%;" name="fathers_name" placeholder="Father's name" id="fathers_name" class="form-control">  
                                                      <input type="text" style="width: 42%; margin-left: 10px;" name="fathers_occupation" placeholder="Father's occupation" id="fathers_occupation" class="form-control"> <br> 
                                                      <label style="margin-top: 20px;">Mother's Name</label><label style="margin-left: 130px;">Occupation</label><br>
                                                      <input type="text" style="width: 42%;" name="mothers_name" placeholder="Mother's name" id="mothers_name" class="form-control">  
                                                      <input type="text" style="width: 42%; margin-left: 10px;" name="mothers_occupation" placeholder="Mother's occupation" id="mothers_occupation" class="form-control"> <br> 
                                                      <label style="margin-top: 20px;">Address</label><br>

                                                      <input type="text" style="width: 75%;" name="parents_address" placeholder="Parent's Address" id="parents_address" class="form-control"><br>
                                                        <label style="margin-top: 20px;">Contact No.</label><br>
                                                        <input type="text" style="width: 42%;"  name="tel_no" placeholder="Landline or mobile" id="tel_no" class="form-control"><br> 
                                                        
                                             <fieldset>
                                                 
                                             </fieldset>
                                              <fieldset>
                                                  <div class="form-head">
                                                     <h3 style="margin-top: 30px;">In case of emergency, please contact: </h3>
                                                  </div>

                                                  <label>Name</label><br>
                                                  <input type="text" style="width: 42%;" name="guardian_name" placeholder="Full name" id="guardian_name" class="form-control"><br><br>
                                                  <label>Relationship</label> <label style="margin-left: 85px;">Telephone No.</label><br>

                                                  <input type="text" style="margin-right: 10px;" name="relationship" placeholder="Family or guardian" id="relationship" class="form-control">

                                                  <input type="text" name="tel_no" placeholder="Landline or mobile" id="tel_no" class="form-control"><br>

                                                   <label style="margin-top: 20px;">Address</label><br>
                                                 <input type="text" name="emegerncy_address" style="margin-right: 10px; width: 75%;" placeholder="Address" id="emegerncy_address" class="form-control"><br><br>
                                              </fieldset>       
                                                                
                                                    <fieldset class="next-form">
                                                         <button type="submit" class="btn-next">Next</button>
                                                    </fieldset>               
		                                	        

		                                </form>
		                            </div>
		                        </section>
		                     </div>
		                    <div class="col-lg-3">
		                    </div>
		                    
		                </div>
		            </div>
            
        </div>
         <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright">
                            &copy;Copyright OJT Automate 2017 | All rights reserved
                        </div>
                    </div>
                </div>
            </div>

        </div>
	</div>
</body>

<script type="text/javascript">
    $(document).ready(function() {
        $('#login-trigger').click(function() {
            $(this).next('#login-content').slideToggle();
            $(this).toggleClass('active');
            if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
            else $(this).find('span').html('&#x25BC;')
        });
    });

   
</script>
<script type="text/javascript">
	$('#id_no').focus(function(){
		$('.hint').fadeIn('300');
	});
	$('#id_no').blur(function(){
		$('.hint').fadeOut('300');
	})
</script>
<script type="text/javascript">
    $('.btn-next').click(function(){
        $('.first-form').fadeOut(300);
    })
</script>
</html>