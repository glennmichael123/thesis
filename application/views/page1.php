<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="favicon.ico">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php base_url()?>assets/css/bootstrap.min.css">
    <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
    <!-- Optional theme -->

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-theme.min.css" >
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="<?php echo base_url()?>assets/js/progressbar/dist/progressbar.js"></script>
    <script src="<?php echo base_url()?>assets/js/progressbar/dist/progressbar.min.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/jquery-ui.css">
    
    <script src="<?php echo base_url() ?>assets/js/jquery-1.12.4.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery-ui.js"></script>
    <link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/jquery-ui.css">

    <script src="<?php echo base_url() ?>assets/js/jquery.easy-autocomplete.min.js"></script> 
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/easy-autocomplete.min.css"> 

    <!-- Latest compiled and minified JavaScript -->

    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="<?php echo base_url();?>assets/js/swal.js"></script>

    <style type="text/css">
        *{
            font-family: 'Oswald', sans-serif;
        }
        body{
            background-color: #F4F4F4;
        }
        header{
            text-align: center;
        }
        .body{
            background-color: #FFFFFF !important;
            border-radius: 0px;
            box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
            padding: 20px 30px;
            width: 100%;
            margin: 5% 0%;

        }
       /* input{
            width: 100%;
            height: 40px;
            font-color: #000000 !important;
        }*/
        input[type=text],
        input[type=date],
        input[type=email],
        input[type=password],select{
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 0px;
            font-family: 'Rajdhani', sans-serif;
            font-weight: bold;
            font-size: 15px;
            width: 100%;
            height: 40px;
            margin-top: 5px;
        }
         input[type=checkbox],input[type=radio]{
            height: 15px;
            width: 15px;
            vertical-align: top;
        }
        .fs-title{
            font-family: 'ABeeZee';
            text-align: center;
            color: #58656f;
        }
           .fs-subtitle {
            font-weight: normal;
            font-size: 13px;
            color: #666;
            margin-bottom: 20px;
        }
        /*button[type="button"] {
            text-align: center;
            position: relative;
            margin-top: 30px;
            padding: 5px;
            background-color: blue;
            color: #FFFFFF;
            border: 0;
            width: 15%;
            border-radius: 10px;
        }*/
       
        .btn-glyphicon 
        { 
            
            padding:8px; 
            background:#ffffff; 
            margin-left:8px; 
        }
        .icon-btn 
        { 
            font-size: 18px;
            border-radius:25px;
            font-family: 'Oswald', sans-serif;
            margin-top: 10px;
        }


       /*.topage2{
            position: relative;
            top: 10px;
            font-size: 20px;
            border-radius: 5px;
            padding: 5px 20px 5px 20px;
            color:#FFFFFF;
            background: #FFBA00;
            text-decoration: none;

       }
       .topage2:hover{
        text-decoration: none;
        color: #FFFFFF;
        background-color: #f5b301;
       }*/
       .firstnext{
        position: relative;
        top: 10px;
        font-family: sans-serif;
        background-color: #fdd835;
        color:white;
        padding: 10px 20px 10px 20px;
        font-size: 17px;
        border-radius: 3px;
        float: right;
        
       }

       .firstnext:hover{
        text-decoration: none;
        color: #FFFFFF;
        background-color: #f5b301;
       }

       .address{
        display: none;	
       }
       .parent_address{
        display: none;
       }
       label {
            cursor: pointer;
            padding: 5px;
            font-family: 'Rajdhani', sans-serif;
            
        }
        .topage4{
            position: relative;
            top: 10px;
            font-size: 17px;
            border-radius: 5px;
            padding: 5px 20px 5px 20px;
            color:#FFFFFF;
            background: #FFBA00;
            float: right;
       }
       .topage4:hover{
        text-decoration: none;
        color:#FFFFFF;
        background-color:#f5b301;
        float: right;
       }
       .topage3{
            position: relative;
            top: 10px;
            font-size: 17px;
            color:white;
            padding: 10px 20px 10px 20px;
            border-radius: 3px;
            background: #ef5350;
            float: left;
       }
       .topage3:hover{
        text-decoration: none;
        color: #FFFFFF;
        background-color: #d32f2f;
        float: left;
       }

       .cancelOut{
            position: relative;
            top: 10px;
            font-size: 17px;
            color:white;
            padding: 10px 20px 10px 20px;
            border-radius: 3px;
            background: #ef5350;
            float: left;
       }
       .cancelOut:hover{
        text-decoration: none;
        color: #FFFFFF;
        background-color: #d32f2f;
        float: left;
       }


       .page2{
        display: none;
       }
       .page3{
        display: none;
       }

    </style>

    <title></title>

</head>

<body>
    <header>
        <h2 class="fs-title">Before you continue, please complete this form first</h2>         
    </header>
<form id="reg_form">
<section class="page1">
    <div class="page-wrap">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10" style="position: relative;">
                    <div class="body">
                    <h2 class="fs-title">Personal Data <i class="fa fa-user" aria-hidden="true"></i></h2>

                        <div class="row">
                            <div class="col-lg-5">
                                <input type="text" name="first_name" id="first_name" placeholder="First Name" value="<?php echo $initial_data[0]['first_name'] ?>" required>
                            </div>
                            <div class="col-lg-2">
                                <input type="text" name="middle_initial" id="middle_initial" placeholder="M.I" value="<?php echo $initial_data[0]['middle_initial'] ?>" required>
                            </div>
                            <div class="col-lg-5">
                                <input type="text" name="last_name" id="last_name" placeholder="Last name" value="<?php echo $initial_data[0]['last_name'] ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <select style="width: 99%;" id="college" name="college" required>
                                    <option selected disabled>Select college</option>
                                    <option value="CCS">College of Computer Studies</option>
                                    <option value="CEA">College of Engineering and Architecture</option>
                                    <option value="CON">College of Nursing</option>
                                    <option value="COE">College of Education</option>
                                    <option value="CMBA">College of Management, Business and Accoutancy</option>
                                    <option value="CAS">College of Arts and Sciences</option>
                                </select><span style="color: red;">*</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6"> 
                                <input type="text" style="width: 98%;" name="course" id="course" placeholder="Course" value="<?php echo $initial_data[0]['course'] ?>">
                                <span style="color: red;">*</span>
                            </div>
                            <div class="col-lg-6">
                                <select style="width: 98%;" name="year" id="year" required>
                                    <?php if ($initial_data[0]['year']==1) {
                                         echo '<option value="1st Year" selected hidden>1st Year</option>';
                                    } ?>
                                    <?php if ($initial_data[0]['year']==2) {
                                         echo '<option value="2nd Year" selected hidden>2nd Year</option>';
                                    } ?>
                                    <?php if ($initial_data[0]['year']==3) {
                                         echo '<option value="3rd Year" selected hidden>3rd Year</option>';
                                    } ?>
                                    <?php if ($initial_data[0]['year']==4) {
                                         echo '<option value="4th Year" selected hidden>4th Year</option>';
                                    } ?>
                                    <?php if ($initial_data[0]['year']==5) {
                                         echo '<option value="5th Year" selected hidden>5th Year</option>';
                                    } ?><!-- <option selected disabled>Year</option> -->
                                    <option value="1st Year">1st Year</option>
                                    <option value="2nd Year">2nd Year</option>
                                    <option value="3rd Year">3rd Year</option>
                                    <option value="4th Year">4th Year</option>
                                    <option value="5th Year">5th Year</option>
                                </select>
                                <span style="color: red;">*</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="present_address" placeholder="Present address" id="present_address">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="permanent_address" placeholder="Permanent address" id="permanent_address">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" maxlength="11" name="number" placeholder="Phone or landline" id="number">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" style="width: 98%;" name="email" placeholder="Email address" id="email" required>
                                <span style="color: red;">*</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" style="width: 98%;" placeholder="Date of birth" name="date_of_birth" id="date_of_birth">
                                <span style="color: red;">*</span>
                            </div>
                            <div class="col-lg-6">
                                <select id="civil_status" name="civil_status">
                                    <option selected disabled>Status</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Separated">Separated</option>
                                    <option value="Widowed">Widowed</option>

                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="weight" placeholder="Weight in kg" id="weight">
                            </div>
                            <div class="col-lg-6">
                                <select id="blood_type" name="blood_type">
                                    <option selected disabled>Blood type</option>
                                    <option value="O-">O-</option>
                                    <option value="O+">O+</option>
                                    <option value="A-">A-</option>
                                    <option value="A+">A+</option>
                                    <option value="B-">B-</option>
                                    <option value="B+">B+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="AB+">AB+</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="height" placeholder="Height in cm" id="height">
                            </div>
                            <div class="col-lg-6">
                                <select name="sex" id="sex">
                                    <option selected hidden value="">Sex</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="citizenship" placeholder="Citizenship" id="citizenship">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="religion" placeholder="Religion" id="religion">
                            </div> 
                        </div>
                        <div class="row">
                             
                        </div>

                        <h2 class="fs-title">Family Data <i class="fa fa-users" aria-hidden="true"></i></h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="fathers_name" placeholder="Father's name" id="fathers_name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="fathers_occupation" placeholder="Father's occupation" id="fathers_occupation">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="mothers_name" placeholder="Mother's name" id="mothers_name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="mothers_occupation" placeholder="Mother's occupation" id="mothers_occupation">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="parents_address" placeholder="Parent's Address" id="parents_address">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                              <input type="radio" id="parent_rad_1" class="parent_address" value="address" name="address"><label for="parent_rad_1" class="parent_address" style="margin-left: 3px;">Same as my Present Address</label>
                            </div>
                            <div class="col-lg-4">
                                <input type="radio" id="parent_rad_2" value="address" name="address" class="parent_address"><label for="parent_rad_2" class="parent_address" style="margin-left: 3px;">Same as my Permanent Address</label>
                            </div>
                         </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" maxlength="11" name="tel_no" placeholder="Landline or mobile" id="tel_no">
                            </div>
                        </div>
                        <h2 class="fs-title">In case of emergency, please contact <i class="fa fa-ambulance" aria-hidden="true"></i></h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="guardian_name" placeholder="Full name" id="guardian_name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="relationship_emergency" placeholder="Relationship" id="relationship_emergency">
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12">
                            <input type="text" maxlength="11" name="tel_no_emergency" placeholder="Landline or mobile" id="tel_no_emergency">
                            </div>
                            <div class="col-lg-12">
                              <input type="text" name="emergency_address" placeholder="Address" id="emergency_address">
                          </div>
                        </div>
                         <!-- <div class="row">
                            <div class="col-lg-1">
                                <div style="float: left;">
                                  <input type="radio" name="address" value="address" id="present_address" class="address" style="width: 25px;">
                                  <input type="radio" name="address" value="address" id="permanent_address" class="address" style="width: 25px;">
                                </div>
                            </div>  
                         </div> -->
                         <div class="row">
                            <div class="col-lg-4">
                              <input type="radio" id="emergency_rad_1" class="address" value="address" name="address2"><label for="emergency_rad_1" class="address" style="margin-left: 3px;">Same as my Present Address</label>
             
                            </div>
                            <div class="col-lg-4">
                                <input type="radio" id="emergency_rad_2" value="address" name="address2" class="address"><label for="emergency_rad_2" class="address" style="margin-left: 3px;">Same as my Permanent Address</label>
                            </div>
                         </div>
                         <div class="row">
                             <div style="float: right;margin-top: 20px">
                                <a class="firstnext first-next" href="#" id="firstNext" style="margin-right:15px">NEXT</a>
                            </div>
                            <div style="float: left;margin-top: 20px">
                                <a class="cancelOut" href="logout" style="margin-left:15px">CANCEL</a>
                            </div>
                         </div>
                     </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </div> 
             
    </div>
</section>
<section class="page2">
    <div class="page-wrap">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                    <div class="body">
                    <h2 class="fs-title">Company Information <i class="fa fa-list-alt" aria-hidden="true"></i></h2>
                        <div class="row">
                          <div class="col-lg-12">
                            <input type="text" placeholder="Company name" id="company_name" style="width: 867px; float: left;" name="company_name" required>  <span style="color: red">*</span>
                          
                            <!-- <select id="company_name" style="width: 885px;" name="company_name" required>
                                <option selected disabled>Company name</option>
                                <?php foreach ($companies as $company):?>
                                    <option><?php echo $company['company_name'];?></option>
                                <?php endforeach;?>
                            </select>
 -->                          </div>
                        </div>
                         <div class="row">
                          <div class="col-lg-12">
                           <input type="text" style="width: 98%;" name="company_address" placeholder="Company address" id="company_address" required>
                           <span style="color: red">*</span>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <input type="text" style="width: 98%;" name="company_telephone" placeholder="Landline or mobile" id="company_telephone" required>
                            <span style="color: red">*</span>
                          </div>
                          <div class="col-lg-6">
                             <input type="text" name="company_fax" placeholder="Fax number" id="company_fax">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-12">
                            <input type="text" placeholder="Product lines" id="product_lines" name="product_lines">
                          </div>
                        </div>
                        
                        <div class="container-fluid" style="margin: 10px 0 10px 0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="fs-title" style="text-align: left">Company Classification</h3>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="fs-title">Total number of employees</h3>
                                </div>
                            </div>
                        </div>
                
                         <div class="container-fluid">
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-md-7">
                                    <div class="col-md-4">  
                                        <div>
                                            <input id="assembly" value="Assembly" type="checkbox"><label for="assembly">Assembly</label>
                                        </div>
                                        <div>    
                                            <input type="checkbox" value="Manufacturing" id="manufacturing"><label for="manufacturing">Manufacturing</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" value="Maintenance" id="maintenance"><label for="maintenance">Maintenance</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" value="Sales/Marketing" id="marketing"><label for="marketing">Sales/Marketing</label>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <input type="checkbox" value="Service/Utility" id="service"><label for="service">Service/Utility</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" value="Research and Development" id="research"><label for="research">Research and Development</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" value="IT Related" id="itrelated"><label for="itrelated">IT Related</label>
                                        </div>
                                        <div>
                                            <input type="radio" class="other-company" id="other"><label for="other">Others</label>
                                        </div>
                                        <div>
                                            <input type="text" id="other_classification" name="other_classification" style="height: 23px; width: 250px; display: none;" placeholder="Please specify">
                                        </div>
                                    </div>

                                    <!-- <div class="col-md-2"></div> -->
                                    
                                    
                                </div>
                                <div class="col-md-5">
                                    <div class="row">
                                        <div>
                                          <input type="radio" id="less_fifty" value="Less than 50" name="employee_numbers"><label for="less_fifty">Less than 50</label>
                                        </div>
                                        <div>
                                           <input type="radio" id="fifty_onehundred" value="From 50 to 100" name="employee_numbers"><label for="fifty_onehundred">From 50 to 100</label>
                         
                                        </div>
                                        <div >
                                            <input type="radio" id="more_onehundred" value="More than 100" name="employee_numbers"><label for="more_onehundred">More than 100</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a class="topage3 first-previous" href="#">PREVIOUS</a>
                                <a class="firstnext" href="#" id="submit">SUBMIT</a>
                            </div>
                        </div>
                           
                     </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </div> 
             
    </div>
</section>

</form>

<section class="page3">
    <div class="page-wrap">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                    <div class="body">
                    <fieldset>
                        <div style="margin-top: 50px" class="fs-title">
                            <h1>Almost Done!</h1>
                            <h4 style="margin-top: 50px">Just one more step and you are done.</h4>
                            <h5>An email verification link has been sent to your email address. Please verify your email to activate your account.</h5>
                        </div>
                        <div style="margin-top: 70px">
                            <a class="topage3 second-previous" href="#" hidden="">PREVIOUS</a>
                            <!-- <a class="firstnext third-next" href="dashboard">SUBMIT</a>  -->
                        </div>

                        <div>
                            <a href="<?php echo base_url('dashboard') ?>" style="float: right;">Continue to dashboard</a>
                        </div>
                        
                    </fieldset>
                     </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </div> 
             
    </div>
</section>
</body>
<script>
$(document).ready(function(){
    var options = {
      url: "<?php echo base_url('validCompanies')?>",
      getValue: "names",
      list: {
        match: {
          enabled: true
        }
      }
    };
    $("#company_name").easyAutocomplete(options);
});
</script>

<!-- <script type="text/javascript">
    $('#firstNext').click(function(){
        $('#first_form :input:visible[required="required"]').each(function()
        {
            if(!this.validity.valid)
            {
                $(this).focus();
                return false;
            }
            else{
                $(".page1").hide();
                $(".page2").show();
            }
        });
    })
</script> -->

<!-- RADIO BUTTONS -->
<script type="text/javascript">
    $(document).ready(function(){
        var options = {
            url: "main/getCompanyNamesJson",

            getValue: "names",

            list: {
                match: {
                    enabled: true
                }
            }
        };

        $("#company_name").easyAutocomplete(options);
    });

    $('#parent_rad_1').click(function(){
        var present = $('#present_address').val();
        $('#parents_address').val(present);
    });
    $('#parent_rad_2').click(function(){
        var permanent = $('#permanent_address').val();
        $('#parents_address').val(permanent);
    });
    $('#emergency_rad_1').click(function(){
        var present = $('#present_address').val();
        $('#emergency_address').val(present);
    });
    $('#emergency_rad_2').click(function(){
        var permanent = $('#permanent_address').val();
        $('#emergency_address').val(permanent);
    });
    $('#other').click(function(){
        $('#other_classification').css("display","inline-block");
    });

</script>

<!-- VALIDATE EMAIL -->
<script type="text/javascript">
    
    function validateEmail(email) {
      var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    }
    $('#firstNext').click(function(){ 
        // validate fields
        var fail = false;
        var fail_log = '';
        $( '.page1' ).find( 'select, textarea, input' ).each(function(){
            if( ! $( this ).prop( 'required' )){

            } else {
                if ( ! $( this ).val() ) {
                    fail = true;
                    name = $( this ).css( 'border', '1px solid #e57373' );
                    fail_log += name + " is required \n";
                }else{
                    name = $( this ).css( 'border', '1px solid #ccc' );
                }

            }
        });

        //submit if fail never got set to true
        if ( ! fail ) {
            //process form here.
            var email = $("#email").val();

            if(email!=""){
                if (validateEmail(email)) {
                    $.ajax({
                        url:"emailcheck",
                        type: "POST",
                        data:{
                            'email':email,
                        },
                        success:function(data){
                            if($.trim(data) == "invalid"){
                                alert("Email already exist");return false;
                            }else{
                                $("#email").css("border","1px solid #ccc");
                                $(".page1").hide();
                                $(".page2").show(); 
                            }
                        }
                    });
                } else{
                    $("#email").css("border","1px solid #e57373");
                }
            }
        } else{
            
        }
    });
</script>


<!-- FOR DATE INPUT FIELD -->
<script type="text/javascript">
    var yearNow = (new Date()).getFullYear();
   $( function() {
    $( "#date_of_birth" ).datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: '1940:'+yearNow,
    });
  } );
</script>



<script type="text/javascript">
    $(document).ready(function(){
        $('#emergency_address').focus(function(){
            $('.address').css('display','inline');
        });

        $('#parents_address').focus(function(){
            $('.parent_address').css('displayy','inline');
        })
    })

    $(".first-previous").click(function(){
        $(".page1").show();
        $(".page2").hide();
    });

    // Get checked values
    var classification=[];
    $('input[type="checkbox"]').click(function(){
        if($(this).is(":checked")==true){
            classification.push($(this).val());
        }else{
             classification.pop($(this).val());
        }
    });

    $("#submit").click(function(){
          
        var fail = false;
        var fail_log = '';
        $( '.page2' ).find( 'select, textarea, input' ).each(function(){
            if( ! $( this ).prop( 'required' )){

            } else {
                if ( ! $( this ).val() ) {
                    fail = true;
                    name = $( this ).attr( 'style', 'border: 1px solid #e57373' );
                    fail_log += name + " is required \n";
                }else{
                    name = $( this ).attr( 'style', 'border: 1px solid #ccc' );
                }

            }
        });

        //submit if fail never got set to true
        if ( ! fail ) {
            var reg_info = $('#reg_form').serialize();
            //var username = '<?php //echo $this->session->userdata['id_number']?>';
            var username = "123";
            var email = $('#email').val();
            if($('#other_classification').val()!=""){
                classification.push($('#other_classification').val());
            }
            var companyName = $('#company_name').val().trim();
            $.ajax({
                url: "validateCompany",
                type: "POST",
                data: {
                    'companyName' : companyName,
                },
                success: function(data){
                    if($.trim(data)=='error'){
                        swal('Oops...', 'The company you entered is on the watchlist. You cannot undergo OJT in a watchlisted company', 'error');return false;
                    }else{
                        swal({
                          title: "Warning",
                          text: "You are about to submit this form. Please make sure that the email you provided is an active one :)",
                          icon: "warning",
                          buttons: true,
                          buttons: ["CANCEL", "PROCEED"],
                          dangerMode: true,
                        })
                        .then((yes) => {
                          if (yes) {
                            $.ajax({
                                url: "insertRegistration",
                                type: "POST",
                                data: reg_info + "&classification="+classification,
                                success: function(data){
                                    if($.trim(data)=='error'){
                                        swal('Oops...', 'The company you entered is on the watchlist. You cannot undergo OJT in a watchlisted company', 'error');return false;
                                    }
                                }
                            });
                            $.ajax({
                                url: "saveEmail",
                                type: "POST",
                                data:{
                                  'email': email,
                                },
                                success:function(){
                                     alert('email sent');
                                }
                            });
                            $(".page2").hide();
                             $(".page3").show();
                          }
                        });
                    }
                }
            });

                 
        } else {

        }
    });
    $(".second-previous").click(function(){
        $(".page3").hide();
        $(".page2").show();
    });

    function deFocus(element) {
        element.setAttribute('readonly','readonly');
        return false;
    }
</script>

</html>