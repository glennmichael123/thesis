
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

    <script src="<?php echo base_url() ?>assets/js/jquery.easy-autocomplete.min.js"></script> 
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/easy-autocomplete.min.css"> 

    <!-- Latest compiled and minified JavaScript -->

    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="<?php echo base_url();?>assets/js/swal.js"></script>
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <style type="text/css">
        body {
            background-color: #F4F4F4;
        }
        
        .jumbotron {
            background-color: #d32f2f;
            padding: 10px;
            color: #FFFFFF;
            font-size: 1.5em;
            margin-top: 20px;
        }
        
        .wells {
            background-color: #0C1021;
        }
        
        * {
            font-family: Roboto, sans-serif;
        }
        
        
        .btn {
            border-radius: 0;
        }
        
        .form-control {
            border-radius: 0;
        }
        
        .circular-square {
            border-top-left-radius: 50% 50%;
            border-top-right-radius: 50% 50%;
            border-bottom-right-radius: 50% 50%;
            border-bottom-left-radius: 50% 50%;
        }
        
        .header {
            height: 60px;
            background-color: #ffba00 !important;
        }
        
        .mission {
            height: 200px;
        }
        
        .txt {
            text-align: justify;
            font-size: 1em;
            padding: 30px;
            margin-top: -40px;
        }
        
        .title-txt {
            text-align: center;
            font-weight: bold;
            font-size: 3em;
            color: #800000;
        }
        .comment-section .col-lg-12{
            padding-bottom: 5px;
        }
        
        .missim {
            height: 75px;
            margin-top: -10px;
        }
        
        h1,
        h2,
        h3,
        h4,
        h5 {
            margin: 0;
        }
        
        .nav {
            float: right;
        }
        
        .nav a {
            color: #915B51;
        }
        
        .nav>li>a:hover,
        .nav>li>a:focus,
        .nav .open>a,
        .nav .open>a:hover,
        .nav .open>a:focus {
            background: inherit;
        }
        
        .dropdown {
            background: inherit;
            border: 1px solid inherit;
            border-radius: 4px;
            width: 90px;
        }
        
        .dropdown-menu>li>a {
            color: #915B51;
            padding: 2px 20px;
        }
          .dropdown-menu{
           padding-top: 0;
           padding-bottom: 0;
        }
        
        .dropdown ul.dropdown-menu {
            border-radius: 4px;
            box-shadow: none;
            margin-top: 10px;
            margin-left: -198px;
            width: 280px;
        }
        .dropdown-menu .divider{
            margin: 0;
        }
        
        .dropdown ul.dropdown-menu:before {
            content: "";
            border-bottom: 10px solid #fff;
            border-right: 10px solid transparent;
            border-left: 10px solid transparent;
            position: absolute;
            top: -10px;
            right: 16px;
            z-index: 10;
        }
        
        .dropdown ul.dropdown-menu:after {
            content: "";
            border-bottom: 12px solid #ccc;
            border-right: 12px solid transparent;
            border-left: 12px solid transparent;
            position: absolute;
            top: -12px;
            right: 14px;
            z-index: 9;
        }
        
        #trainees {}
        
        .badge {
            background: #09ba20;
        }
        
        .progress {
            height: 35px;
        }
        textarea:focus{
            outline: none;
        }
        .progress .skill {
            font: normal 12px "Open Sans Web";
            line-height: 35px;
            padding: 0;
            text-transform: uppercase;
            font-family: Roboto, sans-serif;
            color: #fff;
        }
        
        .progress-bar {
            text-align: center;
            transition-duration: 3s;
        }
        .logs-list-ojt{
            margin-top: 20px;
        }
           .logs-title {
            margin-bottom: 20px;
        }
        
        .btn {
            border-radius: 0;
        }
         .logs-lists label {
            font-size: 11px;
        }
        
        .logs-lists input {
            font-size: 11px;
            border: none;
            background-color: #fff;
        }
        
        #log_lists_activity {
            width: 100%;
            font-size: 11px;
            border: none;
            background-color: #fff;
            resize: none;
        }
        
        #log_lists_activity:focus {
            border-color: none;
        }
        
        .list-logs {
            width: 100%;
            padding: 2px;
        }
        .well{
            border-radius: 0px;
            margin-bottom: 20px;
            background-color: #FFFFFF;
            background-image: none;
        }
        .evaluator-option{
            color: #000;
            font-size: 13px;
        }
         .evaluator-option:hover{
            color: #000;
        }
        .profile-image{
            padding: 20px;
        }
        .profile-image>img.img-circle{
            width: 150px;
            height: 150px;
            border: 1px solid #C0C0C0;
        }
        .label-default{
        background-color: white;
        font-family: Arial, Helvetica, sans-serif;
        padding: 5px 10px 5px 10px;
        border-radius: 10px;
        font-size: 1.3em;
        color:#606060;
        }
        .comment-btn:focus{
            color: #000;
        }
        .btn-trainee{
            background-color: #e53935;
            padding: 10px 12px 10px 12px;
            color: #FFFFFF;
            transition: 0.4s;
            border-radius: 3px;
        }
        .btn-trainee:hover{
            background-color: #cf4246;
            color: #FFFFFF;
            transition: 0.4s;
            border-radius: 5px;
        }
        .progress-bar-first{
            background: #84bb5c !important;
        }
        .progress-bar-second{
            background: #ebcb38 !important;
        }
        .progress-bar-third{
            background: #d35d60 !important;
        }
        .progress-bar-first{
            background: #b4292c;
        }
        .progress-bar-second{
            background: #800000;
        }
        .progress-bar-third{
            background: #FFC019;
        }
        .skills{
            font-size: 1.25em !important;
            margin-top: 8px;
        }
        .alert{
            margin-top: 20px;
            padding: 10px 30px 10px 10px;
            /* padding-top: 5px; */
            /* padding: 12px; */
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 0px;
        }
        .panel-heading{
            color: #FFFFFF !important;
            font-size: 18px !important;
            background-color: #d32f2f !important;
            background-image: none !important;
            padding: 10px 10px !important;
        }
        #comment-textarea{
            /*border: none;*/
            display: none;
            resize: none;
            overflow: hidden;
            width: 60%;
        }

        .evaluate-btn{
            color: #2196f3 !important;
        }
        /*.evaluate-btn:hover{
            background-color:#791b1d;
            color: #FFFFFF !important;
        }*/

    
    </style>



    <title>OJT Automate</title>

</head>


<body>

    <div class="page-wrap">

        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="logo" style="float: left;"><img src="<?php echo base_url();?>assets/images/logo.png" style="width: 50px; height:50px; margin-top: 5px;"></div>
                        <a href="supervisordashboard" style="text-decoration: none;"><h3 style="font-weight: bold; margin-top: 12px; color: #b71c1c ; text-align: left; font-family: fantasy;font-style: italic;font-size: 20pt;letter-spacing: 1px;">OJT AUTOMATE</h3></a> 
                    </div>
                    <div class="col-lg-5">

                    </div>
                    <div class="col-lg-2">
                        <h5 style="position: relative; top: 20px;font-weight: bold;float: right;">Hi, <?php echo $supervisorName; ?><br>
                            <span style="font-size:13px;font-weight: normal;">Supervisor</span>
                        </h5>
                    </div>

                    <!-- <div class="col-lg-1">
                        <h5 style="position: relative; top: 20px;">Supervisor</h5>
                    </div> -->
                    <div class="col-lg-1">

                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" id="dropdown-logout" data-toggle="dropdown">
                                
                                    <?php if ($supImage[0]['image_id'] == '<i class="fa fa-user-circle pull-right" style="font-size: 40px; margin-top: -5px;" aria-hidden="true"></i>'):?>
                                    <?php echo $supImage[0]['image_id'];?>
                                    <?php else:?> 
                                        <img src="<?php echo base_url().$supImage[0]['image_id'];?>" class="pull-right circular-square user-image" style="width: 40px; height: 40px; margin-top: -5px;">
                                    <?php endif ?>

                                <ul class="dropdown-menu" id="show-logout">
                                    <li><a href="#">Dashboard<i class="fa fa-tachometer pull-right"></i></a></li>
                                    <li class="divider"></li>

                                    <li><a href="#" data-toggle="modal" data-target="#changeImage">Change photo<i class="fa fa-picture-o pull-right" aria-hidden="true"></i></a></li>
                                    <li class="divider"></li>

                                    <li><a href="changepassword">Change password <i class="fa fa-key pull-right" aria-hidden="true"></i></a></li>
                                    <li class="divider"></li>

                                    <li><a href="logout">Log Out <i class="fa fa-sign-out pull-right"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
        <div class="content">

            <!-- <div class="container">
                <div class="row">
                        
                        <div class="col-lg-4 jumbotron">
                            DASHBOARD
                        </div>
                        <div class="col-lg-8">
                            <button class="btn btn-trainee" style="float: right;" data-target="#addtraineeModal" data-toggle="modal">+Trainee</button>
                        </div>
                </div>
            </div> -->
            <div class="container">
                <?php echo $this->session->flashdata('Status'); ?>
            <div class="jumbotron">
              <div class="row">
                    <div class="col-lg-4" style="font-size: 25px">
                        DASHBOARD
                    </div>
                    <div class="col-lg-8">
                        <section style="display: inline-block; float: right;">
                            <button class="btn btn-trainee" data-target="#addtraineeModal" data-toggle="modal">+Trainee</button>
                           <!--  <a href="Main/database_backup">hahaha</a> -->
                         </section>
                    </div>
                </div>
            </div>
          </div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-4">
                        
                    <div class="panel panel-default">
                            <div class="row">
                                <div class="col-lg-12">
                                  <div class="panel-heading">
                                    <p style="text-align: center; margin-top: 0px;">Progress</p>
                                  </div>
                                    <h4 style="text-align: center; margin-top: 10px;">Trainees Completed</h4>
                                  
                                  <div class="panel-body">  
                                    <!-- if --><?php if(empty($ojtStatus['completed']) && empty($ojtStatus['all_stud'])):?>
                                    <!-- no studs -->
                                    <p style="text-align: center;font-size: 12px;"><?php echo "No trainees yet";?></p>  
                                    <!-- else -->
                                <?php else:?>
                                    <div class="progress skill-bar">

                                        <div class="progress-bar progress-bar-first" role="progressbar" aria-valuenow="
                                        <?php echo ($ojtStatus['completed'] / ($ojtStatus['all_stud'] == 0 ? $ojtStatus['completed'] : $ojtStatus['all_stud']))*100 ?>" aria-valuemin="0" aria-valuemax="100">
                                            <p class="skills"><?php echo $ojtStatus['completed'] .'/'. ($ojtStatus['all_stud'] == 0 ? $ojtStatus['completed'] : $ojtStatus['all_stud']);?></p>  
                                        </div>
                                    </div>
                                    <!-- endif -->
                                <?php endif;?>
                                
                            

                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 style="text-align: center; margin-bottom: 10px;">Evaluations</h4>
                                    <!-- if --><?php if(empty($evaluationsOjt['total_eval']) && empty($evaluationsOjt['current_eval'])):?>
                                    <!-- no stud -->
                                     <p style="text-align: center;font-size: 12px;"><?php echo "No evaluations yet";?></p> 
                                    <!-- else -->
                                     <?php else:?>
                                    <div class="progress skill-bar">
                                        <div class="progress-bar progress-bar-second" role="progressbar" aria-valuenow="<?php echo ($evaluationsOjt['current_eval'] / $evaluationsOjt['total_eval']) * 100;?>" aria-valuemin="0" aria-valuemax="100">
                                            <p class="skills"><?php echo $evaluationsOjt['current_eval'] . '/' . $evaluationsOjt['total_eval'];?></p>
                                        </div>
                                    </div>
                                    <!-- endif -->
                                         <?php endif;?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 style="text-align: center; margin-bottom: 10px;">Pending Logs</h4>

                                    <?php if(empty($not_verified)):?>
                                    <!-- if -->
                                    <p style="text-align: center;font-size: 12px;"><?php echo "No pending logs";?></p>  
                                    <!-- else -->
                                    <?php else:?>
                                    <div class="progress skill-bar">
                                        <div class="progress-bar progress-bar-third" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                            <p class="skills"><?php echo $not_verified;?></p>
                                        </div>
                                    </div>
                                    <!-- endif -->
                                     <?php endif;?>
                                </div>
                            </div>
                            </div>
                            </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <p style="text-align: center; color: #FFFFFF;">Trainees</p>
                            </div>      
                            <div class="panel-body">
                                <?php if(empty($ojtRecords)):?>
                                    <p class="skill" style="font-size: 14px;text-align: center;"><?php echo "No Trainees Yet";?></p>
                                     <?php else:?>
                                <div id="tabs">
                                                <ul>
                                                    <li><a href="#midterm-tab">Midterm</a></li>
                                                    <li><a href="#final-tab">Final</a></li>
                                                </ul>

                                <li id="midterm-tab">
                                    <table style="width: 100%;">
                                 
                                    <tbody>
                                        

                                        <?php foreach($ojtRecords as $student):?>
                                        <tr style="font-size: 15px; color: #000;">
                                            <td><a href="<?php echo base_url() ?>studentdashboard/<?php echo $student['id_number'] ?>"><?php echo $student['first_name'] . " " . $student['last_name']?></a></td>

                                        <?php if($student['ojt_program'] == 'ojt_one'): ?>

                                                <?php if($student['ojtone_rendered'] < 50):?>
                                                    <td><a href="#" class="evaluate-btn" data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Student must render at least 50 hours to be evaluated." disabled style="color: gray !important; background-color: #fff !important;">Evaluate <i class="fa fa-exclamation-circle" aria-hidden="true"></i></a></td>
                                                    <td><a href="#" class="remove-stud" data-stud-name="<?php echo $student['first_name'] . " " . $student['last_name']?>" data-stud-id="<?php echo $student['id_number'] ?>"><i class="fa fa-trash"></i></a></td>
                                                  

                                                <?php else:?>
                                                    <?php if(in_array($student['id_number'], array_column($evaluated, 'username'))):?>
                                                     <td><i class="fa fa-check"  aria-hidden="true"></i></td>          
                                                     <td><a href="#" class="remove-stud" data-stud-name="<?php echo $student['first_name'] . " " . $student['last_name']?>" data-stud-id="<?php echo $student['id_number'] ?>"><i class="fa fa-trash"></i></a></td> 
                                                    <?php else:?>
                                                <td><a href="<?php echo base_url()?>main/evaluate/<?php echo $student['id_number']?>" class=" evaluate-btn">Evaluate</a></td>
                                                <td><a href="#" class="remove-stud" data-stud-name="<?php echo $student['first_name'] . " " . $student['last_name']?>" data-stud-id="<?php echo $student['id_number'] ?>"><i class="fa fa-trash"></i></a></td>
                                                    
                                                 <?php endif;?>                                                                                         
                                                <?php endif;?>
                                            <?php else:  ?>
                                                    <?php if($student['ojttwo_rendered'] < 50):?>
                                                    <td><a href="#" class="evaluate-btn" data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Student must render at least 50 hours to be evaluated." disabled style="color: gray !important; background-color: #fff !important;">Evaluate <i class="fa fa-exclamation-circle" aria-hidden="true"></i></a></td>
                                                    <td><a href="#" class="remove-stud" data-stud-name="<?php echo $student['first_name'] . " " . $student['last_name']?>" data-stud-id="<?php echo $student['id_number'] ?>"><i class="fa fa-trash"></i></a></td>
                                                  

                                                <?php else:?>
                                                  
                                                    
                                                    <?php if(in_array($student['id_number'], array_column($evaluated, 'username'))):?>
                                                     <td><i class="fa fa-check"  aria-hidden="true"></i></td>          
                                                     <td><a href="#" class="remove-stud" data-stud-name="<?php echo $student['first_name'] . " " . $student['last_name']?>" data-stud-id="<?php echo $student['id_number'] ?>"><i class="fa fa-trash"></i></a></td> 
                                                    <?php else:?>
                                                <td><a href="<?php echo base_url()?>main/evaluate/<?php echo $student['id_number']?>" class=" evaluate-btn">Evaluate</a></td>

                                                <td><a href="#" class="remove-stud" data-stud-name="<?php echo $student['first_name'] . " " . $student['last_name']?>" data-stud-id="<?php echo $student['id_number'] ?>"><i class="fa fa-trash"></i></a></td>
                                                    
                                                 <?php endif;?>

                                           
                                                    
                                                <?php endif;?>
                                        <?php endif; ?>



                                        </tr>
                                    <?php endforeach;?>

                                    </tbody>
                                               
                                </table>
                            </li>
                                    

                                     <!-- FOR FINAL EVALUATION -->
                                      <li id="final-tab">
                                            <table style="width: 100%;">
                                 

                                    <tbody>
                                      
                                        <?php foreach($ojtRecords as $student):?>
                                        <tr style="font-size: 15px; color: #000;">
                                            <td><a href="<?php echo base_url() ?>studentdashboard/<?php echo $student['id_number'] ?>"><?php echo $student['first_name'] . " " . $student['last_name']?></a></td>

                                            <?php if($student['ojt_program'] == 'ojt_one'): ?>
                                                  <?php if($student['ojtone_rendered'] < $student['ojtone_required']):?>
                                                    <td><a href="#" class="evaluate-btn" data-toggle="popover" data-placement="top" data-trigger="focus" data-content="Student must complete the number of hours required to be evaluated." disabled style="color: gray !important; background-color: #fff !important;">Evaluate <i class="fa fa-exclamation-circle" aria-hidden="true"></i></a></td>

                                                    <td><a href="#" class="remove-stud" data-stud-name="<?php echo $student['first_name'] . " " . $student['last_name']?>" data-stud-id="<?php echo $student['id_number'] ?>"><i class="fa fa-trash"></i></a></td>
                                                <?php else:?>                                                                      
                                                     <?php if(in_array($student['id_number'], array_column($evaluated2, 'username'))):?>
                                                     <td><i class="fa fa-check" aria-hidden="true"></i></td> 
                                                       <td><a href="#" class="remove-stud" data-stud-id="<?php echo $student['id_number'] ?>"><i class="fa fa-trash"></i></a></td>          
                                                    <?php else:?>
                                                <td><a href="<?php echo base_url()?>main/finalevaluation/<?php echo $student['id_number']?>" class="evaluate-btn" target="_blank">Evaluate</a></td>
                                                  <td><a href="#" class="remove-stud" data-stud-name="<?php echo $student['first_name'] . " " . $student['last_name']?>" data-stud-id="<?php echo $student['id_number'] ?>"><i class="fa fa-trash"></i></a></td>
                                                    
                                                <?php endif;?>
                                            <?php endif;?>
                                        <?php else: ?>
                                              <?php if($student['ojttwo_rendered'] < $student['ojttwo_required']):?>
                                                    <td><a href="#" class="evaluate-btn" data-toggle="popover" data-placement="top" data-trigger="focus" data-content="Student must complete the number of hours required to be evaluated." disabled style="color: gray !important; background-color: #fff !important;">Evaluate <i class="fa fa-exclamation-circle" aria-hidden="true"></i></a></td>

                                                    <td><a href="#" class="remove-stud" data-stud-name="<?php echo $student['first_name'] . " " . $student['last_name']?>" data-stud-id="<?php echo $student['id_number'] ?>"><i class="fa fa-trash"></i></a></td>
                                                <?php else:?>                                                                      
                                                     <?php if(in_array($student['id_number'], array_column($evaluated2, 'username'))):?>
                                                     <td><i class="fa fa-check" aria-hidden="true"></i></td> 
                                                       <td><a href="#" data-stud-id="<?php echo $student['id_number'] ?>"><i class="fa fa-trash"></i></a></td>          
                                                    <?php else:?>
                                                <td><a href="<?php echo base_url()?>main/finalevaluation/<?php echo $student['id_number']?>" class="evaluate-btn" target="_blank">Evaluate</a></td>
                                                  <td><a href="#" class="remove-stud" data-stud-name="<?php echo $student['first_name'] . " " . $student['last_name']?>" data-stud-id="<?php echo $student['id_number'] ?>"><i class="fa fa-trash"></i></a></td>
                                                    
                                                <?php endif;?>
                                            <?php endif;?>
                                        <?php endif; ?>

                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                                    </li>
                                </div>
                                 <?php endif;?> 
                            </div>
                        </div>    
                    </div>

                    <div class="col-lg-8">
                        <?php if(empty($traineesLog)): ?>
                                <h4 style="text-align: center;">There are no logs yet</h4>
                        <?php else: ?>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col-lg-5">
                                  <label style="color:#6d6b64;">Trainee</label>
                                <select class="form-control" id="stud-filter">
                                    <option selected value="">All</option>
                                    <?php foreach ($ojtRecords as $trainee): ?>
                                         <option value="<?php echo $trainee['id_number'] ?>"><?php echo $trainee['first_name'] . " " . $trainee['last_name']?></option>
                                    <?php endforeach; ?>
                                </select>

                            </div>
                            <div class="col-lg-5">
                                <label style="color:#6d6b64;">Status</label>
                                <select class="form-control" id="log-status">
                                    <option selected value="all">All</option>
                                    <option value="0">Pending</option>
                                    <option value="1">Verified</option>
                                </select>
                            </div>
                            
                        </div>
                    <div id="wrap-log-section">
                <?php $i=0; ?>
                    <?php foreach($traineesLog as $log):?>
                        <div class="row row-logs"  style="color:#000;">
                       
                             <div class="col-lg-12" >
                                <div class="well" style="background: #fff; padding-bottom: 0; padding-top: 10px">
                                    <span class="user-name"><a href="studentdashboard/<?php echo $log['id_number'];?>">



                                        <?php if($log['user_image'] == '<i class="fa fa-user-circle pull-right" style="font-size: 40px; margin-top: -5px;" aria-hidden="true"></i>'):?>

                                            <i class="fa fa-user-circle"></i>
                                        <?php else: ?>
                                            <img src="<?php echo base_url().$log['user_image']?>" style="width: 25px; height: 25px; border-radius: 100%;" >
                                        <?php endif; ?>
                                        <?php echo $log['first_name'] . " " .$log['last_name']?>



                                    </span></a>
                                  
                                    <hr style="margin-top: 0; margin-bottom: 0">

                                    <form method="post">
                                        <div class="row">
                                            <div class="logs-lists">
                                                    <span style="position: absolute; font-size: 12px; top:32px; right: 38px; z-index: 999; padding-top: 10px; text-decoration: underline; cursor: pointer;" class="show-more">Show more</span>
                                                    <span style="position: absolute; font-size: 12px; top:32px; right: 38px; z-index: 999; padding-top: 10px; text-decoration: underline; cursor: pointer; display: none;" class="show-less">Show less</span>
                                                <div class="col-lg-6 left-side" style="display: none;">

                                                    <div class="form-group">
                                                        <label>Date</label>
                                                        <input type="text" class="list-logs" name="log_list_date" id="log_list_date" value="<?php echo $log['date'];?>" readonly>
                                                        <label>Division</label>
                                                        <input type="text" class="list-logs" name="log_list_division" id="log_list_division" value="<?php echo $log['division']?>" readonly>
                                                        <label>Deparment/Area</label>
                                                        <input type="text" class="list-logs" name="log_lists_department" value="<?php echo $log['department']?>" id="log_lists_department" readonly>
                                                        <label>Designation</label>
                                                        <input type="text" class="list-logs" value="<?php echo $log['designation']?>" name="    log_lists_designation" id="log_lists_designation" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 right-side" style="display: none;">
                                                    <div class="form-group">
                                                        <label>Time In</label>
                                                        <input type="time" class="list-logs" name="log_lists_time_in" value="<?php echo $log['time_in']?>" id="log_lists_time_in" readonly>
                                                        <label>Time Out</label>
                                                        <input type="time" class="list-logs" name="log_lists_time_out" value="<?php echo $log['time_out']?>" id="log_lists_time_out" readonly>
                                                        <label>Hours Rendered</label>
                                                        <input type="text" class="list-logs" name="log_lists_hours_rendered" id="log_lists_hours_rendered" value="<?php echo $log['hours_rendered']?>" readonly>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                            <label style="font-size: 11px;">Activity</label> 
                                            <textarea class="list-logs log-activity" name="log_lists_activity" id="log_lists_activity" placeholder="Write your log here" readonly><?php echo $log['log_content']?></textarea>
                                            <?php if($log['verified']):?>
                                            <span class="verified-log" style="color:green; font-size: 11px; position: absolute; left: 690px; margin-top: -20px; "> Verified  <i style="color: green;" class="fa fa-check-circle" aria-hidden="true"></i></span>
                                            <?php else:?>
                                                 <span class="pending-log" style="color:black; font-size: 11px; position: absolute; margin-top: -20px; left: 690px;"> Pending  <i style="color: green;" class="fa fa-circle-thin" aria-hidden="true"></i></span>
                                                 <?php endif;?>


                                        
                                      
                                       
                                            
                                       
                                        
                                        <hr style="margin-bottom: 0; margin-top: 0;">

                                     <div class="row" style="padding-top: 5px; padding-bottom: 5px;">
                                        <div class="col-lg-2">
                                            <?php if($log['verified']):?>
                                                <a href="#" data-log-id="<?php echo $log['id']?>" style="color: #318ACE" class="evaluator-option unverify"><i class="fa fa-check" aria-hidden="true"></i>Verified</a>
                                            <?php else:?>
                                                 <a href="#" data-log-id="<?php echo $log['id']?>" class="evaluator-option verify-btn"><i class="fa fa-check" aria-hidden="true"></i>Verify</a>
                                            <?php endif;?>
                                                
                                                 
                                        </div>
                                        <div class="col-lg-3">
                                            <a href="#" class="evaluator-option comment-btn"><i class="fa fa-comment" aria-hidden="true"></i>Comment</a>
                                        </div>
                                     </div>

                                

                                
                                     <div class="wrap-comments" id="wrap-comment-section<?php echo $log['id'];?>">
                                     <div class="row display-comments">
                                        
                                            <div class="col-lg-12"> 

                                                <div id="display_comments"> 
                                                    <?php foreach ($comments as $comment):?>
                                                    <?php if($log['id'] == $comment['log_id']):?>
                                                        <!-- <div class="well" style="box-shadow: none; border: none; background: #f7f7f7; padding: 10px; margin-bottom: 10px;"> -->
                                                         <div class="comments-list" style="font-size: 12px; margin-bottom: 10px;">

                                                              <b style="float: left; margin-right: 5px;"> <?php echo $name->name; ?> </b> <span class="actual-comment"><?php echo $comment['content'];?> </span>

                                                              <textarea data-supervisor-id="<?php echo $this->session->userdata['id_number'] ?>" 
                                                            data-comment-id="<?php echo $comment['id'] ?>" id="comment-textarea" autofocus class="to-edit-comment" name=""><?php echo $comment['content'];?></textarea> <span class="guide-comment" style="font-size:10px; display: none;">Press esc to cancel</span>
                                                                    <div class="dropdown" style="float: right; width:20px;">
                                                                            <a href="#" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                                                <i style="color: #000000; font-size: 15px;" class="fa fa-caret-down"></i>
                                                                            </a>

                                                                            <ul class="dropdown-menu" style="width: 180px; padding-bottom: 0px; padding-top: 0px; font-size: 11px; margin-left: -149px; margin-top: 4px;" aria-labelledby="dropdownMenu2">
                                                                                <li><a href="#"  class="edit-comment" style="color: #000000;">Edit <i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                                                                <li role="separator" class="divider" style="margin: 0;"> </li>
                                                                                <li><a href="#" class="delete-comment cd-popup-trigger" data-comment-id="<?php echo $comment['id']?>" style="color: #000000;">Delete <i class="fa fa-trash"></i></a></li>
                                                                            </ul>

                                                                        </div>
                                                          </div>
                                                        
                                                    <?php endif;?>
                                                      <?php endforeach;?>
                                                      </div>    
                                            </div>
                                         
                                     </div>

                                           
                                       
                                       
                                        
                                  
                                    <div class="row">

                                        
                                       <div class="comment-section" style="display: none;"> 
                                            <div class="col-lg-12">
                                                <hr style="margin-top: 0; margin-bottom: 5px;">
                                                <textarea style="resize: none;" class="form-control comment-content" data-log-id="<?php echo $log['id']?>" placeholder="Write your comment"></textarea>
                                                <!-- <button type="button" style="float: right; margin-top: 5px; margin-bottom: 5px; padding: 2px 5px 2px 5px;" class="btn btn-primary submit-comment" data-log-id="<?php echo $log['id']?>">Post</button> -->
                                            </div>
                                        </div>
                                        
                                     </div>
                                        </div>
                                    </form>
                                   
                                </div>
                                  
                                </div>
                                 


                            </div>


                            <?php $i++; ?>
                        <?php endforeach;?>
                      

                  
                    </div>
                <?php endif; ?>
                </div>
                </div>
            </div>

        </div>

        <!-- line modal -->
        <div class="modal fade" id="addtraineeModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content" style="border-radius: 12px">
                <div class="modal-header" style="background-color: #f44336;border-radius: 10px 10px 0 0">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title" id="lineModalLabel" style="color:white;">Add trainee</h3>
                </div>
                <div class="modal-body">
                    
                    <!-- content goes here -->
                    <form>
                      <div class="form-group">
                            <label>Trainee name</label>
                            <select class="form-control" style="margin-top:5px;border-radius: 5px" id="names">
                                <option selected disabled>Select trainee</option>
                                <?php foreach($supervisorAddOjt as $trainees):?>  
                                    <option value="<?php echo $trainees['id_number']?>"><?php echo $trainees['first_name'] . " " . $trainees['last_name']?></option>
                                <?php endforeach;?> 
                            </select>
                        </div>
                    </form>
                   
                    <div class="row show-find-trainee" style="display: none;">
                        <div class="col-lg-12">
                              <input type="text" placeholder="Search for trainee" id="trainee-name" name="" style="width: 238%;">
                              <input type="hidden" value="" id="trainee-username" name="" style="width: 238%;">
                        </div>
                    </div>
              

                    <a href="#"  id="find-trainee" style="font-size: 11px; float: right;">Not finding the trainee you're looking for?</a>



                </div>
                <div class="modal-footer">
                    <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                        <div class="btn-group" role="group">
                             <button type="button" class="btn btn-success btn-hover-green" data-action="save" role="button" style="width: 270px;border-radius: 5px" id="addTrainee" name="addTrainee">Add</button>
                        </div>
                        <div class="btn-group" role="group">
                           
                            <button type="button" class="btn btn-danger" data-dismiss="modal"  role="button" style="width: 270px;border-radius: 5px; float: right">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>

        <!-- MODAL CHANGE IMAGE -->

        <div class="modal fade" id="changeImage" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content" style="border-radius: 12px">
                <div class="modal-header" style="background-color: #d32f2f;border-radius: 10px 10px 0 0">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title" id="lineModalLabel" style="color:white">Change photo</h3>
                </div>
                <div class="modal-body">
                    <!-- content goes here -->
                    <div class="profile-image" style="text-align: center">
                        
                        <?php if($supImage[0]['imageDisplayToChange'] == '<i class="fa fa-user-circle fa-5x" style="font-size: 150px;" aria-hidden="true"></i>'):?>
                            <?php echo $supImage[0]['imageDisplayToChange'];?>

                            <img class="img-circle" id="image-modal" src="" style="display: none;">
                        <?php else:?>
                           
                            <img src="<?php echo base_url().$supImage[0]['imageDisplayToChange']?>" class="img-circle" id="image-modal">
                        <?php endif; ?>

                        <div class="profile-name" style="margin-top: 15px">
                            <div class="label label-default"><?php echo $supImage[0]['name'];?></div>
                        </div>
                        <div class="change-photo" style="margin-top: 10px">
                            <!-- browse -->
                            <button class="btn btn-success click-photo" id="btn-browse"><i class="fa fa-picture-o" aria-hidden="true"></i> Browse image</button>
                        </div>

                        <form action="supervisorSaveImage" method="POST" enctype="multipart/form-data">
                            <input class="browse-photo" type="file" accept="image/*" onchange="previewFile()" name="supFiles" style="display: none;">
                            <div class="saveCancel" style="margin-top: 10px; display: none;">
                                <button type="submit" class="btn btn-default" style="width:75px" id="supSave" name="supSave">Save</button>
                                <button type="button" class="btn btn-default" id="cancelBrowse">Cancel</button>
                            </div>   
                        </form> 

                    </div>

                    
                    
                </div>
                <!-- <div class="modal-footer">
                    <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                        <div class="btn-group" role="group">
                             <button type="button" class="btn btn-primary btn-hover-green" data-action="save" role="button" style="width: 270px;border-radius: 5px" id="addTrainee" name="addTrainee">Save Changes</button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-success" data-dismiss="modal"  role="button" style="width: 150px;border-radius: 5px;float:right;display: block" id="btnSaveChanges">Save Changes</button>
                        </div>
                    </div>
                </div> -->
            </div>
          </div>
        </div>


</body>
<script type="text/javascript">

    $('#log-status').change(function(){
         var stud = $('#stud-filter').val();
        var status = $(this).val();
        var stud = $('#stud-filter').val();
        $.ajax({
            method:'POST',
            url: 'filterLogsForSupervisor',
            data: {
                'status': status,
                'stud_id': stud,
            },
            success: function(data){
               $('#wrap-log-section').replaceWith(data);
            }
        });
    });


    $('#stud-filter').change(function(){

        var status = $('#log-status').val();
        var stud = $(this).val();
        $.ajax({
            method:'POST',
            url: 'filterLogsForSupervisor',
            data: {
                'status': status,
                'stud_id': stud,
            },
            success: function(data){
               $('#wrap-log-section').replaceWith(data);
            }
        });
    });

      $('#stud-filter').change(function(){
 
         var status = $('#log-status').val();
        var stud = $(this).val();
          $.ajax({
              method:'POST',
              url: 'filterLogsForSupervisor',
              data: {
                  'status': status,
                 'stud_id': stud,
              },
              success: function(data){
                 $('#wrap-log-section').replaceWith(data);
              }
    
        });
  });

</script>

<script type="text/javascript">
    $(document).on('click', '.remove-stud',function(e){
        e.preventDefault();
        var stud_id = $(this).data('stud-id');
        var stud_name = $(this).data('stud-name');

        // alert(stud_id); 

        swal({
            title: 'Confirm',
            text: 'Are you sure you want to remove student?',
            icon: 'warning',
            buttons: true,
            buttons: ['No', 'Yes'],
            dangerMode: true,
        }).then((willSmith)=>{
            if(willSmith){
                $.ajax({
                    url: 'removeStudentFromSupervisor',
                    method: 'POST',
                    data: {
                        'stud_id': stud_id,
                        'stud_name': stud_name,
                    },
                    success: function(data){
                      location.reload();
                    }
                });
            }else{

            }
        })
    });
</script>

 <script type="text/javascript">
    $(document).ready(function(){
    var options = {
    url: "main/getTraineeNames",
    getValue: function(element) {
         return element.names;
    },
    list: {
        onChooseEvent: function(element){
            var value = $('#trainee-name').getSelectedItemData().username;
            $("#trainee-username").val(value).trigger("change");
    },
        match: {
            enabled: true
        },
    },
    template: {
        type: "description",
        fields: {
            description: "type"
        }
    }
    };
    $("#trainee-name").easyAutocomplete(options);
    });

 </script>

<script type="text/javascript">
  $(function () {
  $('[data-toggle="popover"]').popover();
  $('body').find('[data-toggle="popover"]').each(function(e){
        $(this).click(function(e){
            e.preventDefault();
        })

  })
})
    function previewFile() {
     var preview = document.querySelector('#image-modal');
     var file    = document.querySelector('input[type=file]').files[0];
     var reader  = new FileReader();
     var closestImageCircle = $('#btn-browse').closest('.profile-image').find('.fa-user-circle');
     reader.addEventListener("load", function () {
       preview.src = reader.result;
       $('#image-modal').show();
       closestImageCircle.hide();
       $(".saveCancel").css("display","inline-block");
    }, false);
    if (file) {
     reader.readAsDataURL(file);
     alert(reader.readAsDataURL(file));
    }
}
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.progress .progress-bar').css("width",
            function() {
                return $(this).attr("aria-valuenow") + "%";
            }
        )
    });
    //trigger browse photo
    $('.click-photo').click(function(){
        $('.browse-photo').trigger('click');
    });
</script>

<script type="text/javascript">
    $("#cancelBrowse").click(function(){
        $(".saveCancel").css("display","none");
        location.reload();
    });
</script>

<script type="text/javascript">
    $('body').on('click','.comment-btn',function(e){
        e.preventDefault();
        var commentSection = $(this).closest("form").find(".comment-section");
        commentSection.toggle();
      
    });
     $("#dropdown-logout").click(function() {
       $("#show-logout").toggle();
    });
</script>

<script type="text/javascript">
    $('body').on('click','.verify-btn',function(e){
        e.preventDefault();
        var log_id = $(this).data('log-id');
        var pending = $(this).closest('form').find('.pending-log');
        var element = $(this);
        $.ajax({
            url: '<?php echo base_url()?>' + 'main/verifyLog',
            method: 'POST',
            data:{
                'log_id' : log_id,
            },
            success: function(data){
               pending.addClass('verified-log');
                pending.removeClass('pending-log');
                 pending.html('<span style="color: green;">Verified</span> <i style="color: green;" class="fa fa-check-circle" aria-hidden="true"></i>');
                 element.removeClass('verify-btn');
                 element.addClass('unverify');
            }   
        });
         $(this).css("color", "#318ACE");

        
         $(this).html('<i class="fa fa-check" aria-hidden="true"></i>Verified');
              
    });

    $('body').on('click','.unverify', function(e){
        e.preventDefault();
        var log_id = $(this).data('log-id');
        var pending = $(this).closest('form').find('.verified-log');
        var element = $(this);
        $.ajax({
            url: '<?php echo base_url()?>' + 'main/unverifyLog',
            method: 'POST',
            data:{
                'log_id' : log_id,
            },
            success: function(data){
                pending.removeClass('verified-log');
                pending.addClass('pending-log');
                  pending.html('<span style="color: #000;">Pending</span> <i style="color: #000;" class="fa fa-circle-thin" aria-hidden="true"></i>');
                  element.removeClass('unverify');
                  element.addClass('verify-btn');
                
            }   
        });

         $(this).css("color", "#000");
         $(this).html('<i class="fa fa-check" aria-hidden="true"></i>Verify');
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
      $('.comment-content').each(function () {
          this.setAttribute('style', 'height:' + '40px;' + 'px;overflow-y:hidden; resize:none;');
        }).on('input', function () {
          this.style.height = 'auto';
          this.style.height = (this.scrollHeight) + 'px';
        });
    });
    $(document).ready(function(){
      $('.to-edit-comment').each(function () {
          this.setAttribute('style', 'height:' + '25px;' + 'px;overflow-y:hidden; resize:none;');
        }).on('input', function () {
          this.style.height = 'auto';
          this.style.height = (this.scrollHeight) + 'px';
        });
    });
    $(document).ready(function(){
      $('.log-activity').each(function () {
          this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
        }).on('input', function () {
          this.style.height = 'auto';
          this.style.height = (this.scrollHeight) + 'px';
        });
    });
</script>


<script type="text/javascript">
    $('body').on('keydown','.comment-content', function(e){
        
        if ( e.keyCode == 13 && !e.shiftKey ) { // 13 is enter key
                e.preventDefault();
                var log_id = $(this).data('log-id');
                var comment = $(this).val();
                var commentSection = $(this).closest('.comment-section');
                var student_username = $(this).data('student-username');
                var commentToAppend = $(this).closest("form").find(".display-comments");
                var toReload = $(this).closest('.wrap-comments').attr('id');
            if(!$.trim($(this).val())){
                
            }else{
                   $.ajax({
                url: '<?php echo base_url()?>' + 'main/addComment',
                method: 'POST',
                data:{
                    'log_id': log_id,
                    'comment': comment,
                    'supervisor_id': '<?php echo $this->session->userdata['id_number'];?>',
                },
                success: function(data){
                   $('#'+toReload).load(location.href + ' ' + '#'+toReload);
                   // $('#wrap-log-section').load(location.href + ' ' + ' #wrap-log-section');
                },
            });
            }
         
        
         }
    });
</script>
<script type="text/javascript">
    $('body').on('click','.show-more',function(){
        var right = $(this).closest('form').find('.right-side');
        var left = $(this).closest('form').find('.left-side');
        var less_button = $(this).closest('form').find('.show-less');
        left.show();
        
        less_button.show();
        right.show();
        $(this).hide();
    });
      $('body').on('click','.show-less',function(){
        var right = $(this).closest('form').find('.right-side');
        var left = $(this).closest('form').find('.left-side');
        var more_button = $(this).closest('form').find('.show-more');
        left.hide();
        more_button.show();
        right.hide();
        $(this).hide();
    });
</script>

<script type="text/javascript">
      $(document).ready(function(){
          $("#addTrainee").click(function () {
                // var studId = '';
               var studId = '';

            if($('#trainee-name').val().length != 0){
                 studId = $('#trainee-username').val();
            }else{
                studId = $('#names').val();
            }
            
            // alert(studId);return false;

            if(studId == null){
             //alert("Select a trainee");
             swal('Oops...', 'Select a trainee', 'error');    
            }else{
                $.ajax({  
                url : "addTrainee",
                type : "POST",
                data : { 
                    'studentID': studId,
                    'supervisor_id': '<?php echo $this->session->userdata['id_number']?>',
                   },
                success:function(data){
                    if($.trim(data) == 'error'){
                        swal('Oops...','This student already has a supervisor','error');return false;
                    }else{
                         swal({
                        title: "Success!",
                        text: "Trainee added successfully",
                        icon: "success",
                    }).then(function(){
                        location.reload();
                    });
                    }
                   
                  },
              });  
            }
          
          });

          $('#find-trainee').click(function(e){
            e.preventDefault();
            $('#names').hide();
            $('.show-find-trainee').show();
          });
       });
</script>
<script type="text/javascript">
    $('body').on('click','.delete-comment',function(e){
        e.preventDefault();
        var comment_id = $(this).data('comment-id');
        var comment_row = $(this).closest('.comments-list');
        $.ajax({
            url:'<?php echo base_url()?>main/deleteComment',
            method: 'POST',
            data:{
                'comment_id': comment_id, 
            },
            success: function(data){
                comment_row.remove();
            }
        });
    });
</script>
<script type="text/javascript">
    $( function(){
        $( "#tabs" ).tabs();
  });
    $('body').on('click','.edit-comment', function(e){
        e.preventDefault();
      
        var commentToHide = $(this).closest('.comments-list').find('.actual-comment');
        var commentToEditShow = $(this).closest('.comments-list').find('.to-edit-comment');
        var caretToHide = $(this).closest('.comments-list').find('.fa-caret-down');
        var commentGuideline = $(this).closest('.comments-list').find('.guide-comment');
        var autoFocus = $(this).closest('.comments-list').find('.to-edit-comment');
        commentToHide.hide();
        caretToHide.hide();
        commentToEditShow.show();
        commentGuideline.show();
        autoFocus.prop('autofocus',true);
        
    });
    $('body').on('keydown','.to-edit-comment',function(e){
        if(e.keyCode == 27){
            var commentToHide = $(this).closest('.comments-list').find('.actual-comment');
            var commentToEditShow = $(this).closest('.comments-list').find('.to-edit-comment');
            var caretToHide = $(this).closest('.comments-list').find('.fa-caret-down');
              var commentGuideline = $(this).closest('.comments-list').find('.guide-comment');
            commentToHide.show();
            caretToHide.show();
            commentGuideline.hide();
            commentToEditShow.hide();
        }
     if(e.keyCode == 13 && !e.shiftKey ){
        e.preventDefault();
        var comment_id = $(this).data('comment-id');
        var commentContent = $(this).val();
        var toReload = $(this).closest('.wrap-comments').attr('id');
        var supervisor_id = $(this).data('supervisor-id');

         if(!$.trim($(this).val())){
                
        }else{
            $.ajax({
                url: 'editComment',
                method: 'POST',
                data: {
                    'comment_id': comment_id,
                    'comment_content': commentContent,
                    'supervisor_id': supervisor_id,
                },
                success: function(data){
                    
                      $('#'+toReload).load(location.href + ' ' + '#'+toReload);
                }
            });
        }
            
     }
    });
</script>

<script type="text/javascript">
      $( function() {
    $( "#tabs" ).tabs();
  } );
</script>


</html>