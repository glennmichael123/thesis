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
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

    <style type="text/css">
        *{
            font-family: 'Roboto', sans-serif;
        }
        body {
            background-color: #F4F4F4;
        }
        

        .header {
            position: fixed;
            right: 0;
            left: 0;
            z-index: 99;

            height: 60px;
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
        }
        
        .dropdown ul.dropdown-menu {
            border-radius:0px;
            box-shadow: none;
            margin-top: 12px;
            margin-left: -200px;
            width: 280px;
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
        
        .notification {
            float: right;
            margin-top: 20px;
        }
        
        .fa-bell-o {
            cursor: pointer;
            color: #915B51;
        }
        
        .fa-bell:hover {
            color: #A55D35;
        }
        
        
       
        li > .notifications {
            padding-left: 20px;
            color: #915B51;
            padding-top: 10px;
            width: 280px;
            display: inline-block;
        }
        
       
        
      
    

          .notifs {
            padding-left: 10px;
            padding-top: 10px;
            height: 60px;
         }

        .fa-check:hover {
            cursor: pointer;
            color: #DABD95;
        }
        

       
        .fa-check {
            color: #915B51;
            padding-right: 10px; 
        }
        
          .notification-title {
            padding-top: 10px;
            padding-left: 10px;
            padding-bottom: 10px;
        }

        .badge {
            background: #A55D35;
        }
        
        .as-all-read {
          padding-right: 10px;
        }
        
        /*.circular-square {
            border-top-left-radius: 50% 50%;
            border-top-right-radius: 50% 50%;
            border-bottom-right-radius: 50% 50%;
            border-bottom-left-radius: 50% 50%;
        }*/
        
        .content {
            padding-top: 100px;
            padding-bottom: 30px;
            background: #E9EBEE;
            color: #000000 !important;
        }
        .profile-container{
            margin: 0 auto;
            text-align: center;
            background-color: #FFFFFF;

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
            background-color:#b5292d;
            padding: 5px 10px 5px 10px;
            border-radius: 10px;
            font-size: 1em;
        }
        legend{
            background-color:#ef5350;
            margin-bottom: 0px;
            width: auto; 
            border-radius: 5px; 
            padding: 5px 5px 5px 10px; 
            color:  #EED090;
            font-size: 20px;
            font-family: 'Oswald', sans-serif;
            color: #FFFFFF;
            text-align: center;

        }
        fieldset{
        border: 1px solid #C0C0C0 !important;
        margin: 0;
        padding: 10px;       
        position: relative;
        border-radius:4px;
        background-color:#FFFFFF;
        padding-left:10px!important;
        }
        #edit{
            float: right;
            margin-top: -25px;
            margin-right: -10px;
        }
        #btn-edit,#btn-edit1,#btn-edit2{
            background-color: #FFFFFF;
            border: 0px #FFFFFF;
        }
        
        .fa-pencil-square-o{
            color: #800000;
            font-size: 1.5em;
        }
        #pos{
            margin-top: 10px;
        }
        #second-fieldset{
            margin-top: 10px;

        }
        #third-fieldset{
            display: none;
        }
        .labels{
            font-size: 15px;
            color: #000000;
            display: inline;
            font-family: 'Roboto', sans-serif;
        }
        .personal-info{
            font-size: 13px;
            margin-left: 3px;
            display: inline;
            border: 0;
            color: #000000;
            width: 100%;
            background:none !important;
            box-shadow: none !important;

        }
        .family-info{
            font-size: 13px;
            margin-left: 3px;
            display: inline;
            border: 0;
            color: #000000;
            width: 100%;
            background:none !important;
            box-shadow: none !important;
        }
        .company-info{
            font-size: 13px;
            margin-left: 3px;
            display: inline;
            border: 0;
            color: #000000;
            width: 100%;
            background:none !important;
            box-shadow: none !important;
        }
  
        span:hover{
            background-color: none;
            color: none;
        }

        .showBorder{
            border: 1px solid #e5e6e8 !important;
            background: #F4F4F4 !important;
        }
        h2{
            text-align: center;
            color:  #915B51;
            font-family: 'Oswald', sans-serif;

        }
        .btn-loginas{
            margin-top: 10px;
        }
         label {
            color: #A55D35;
            padding-bottom: 20px;
            padding-top: 20px;
        }
        
        .badge {
            background-color: #A55D35;
        }
        .modal-body{
            font-family: 'Roboto', sans-serif;
        }
        .fa-question-circle{
            color: #A55D35;
        }
        .popover-title{
        color: #0a0a0a;
        font-size: 15px;
        text-align: center;
        background-color: #fafafa;
        }
        .popover-content{
            text-align: left;
        }
         ol {
            list-style: lower-alpha;
        }
        
        textarea {
            height: 100px;
            width: 250px;
        }
        
        .score {
            height: 25px;
            width: 50px;
            
        }
       .btn-browse{
            background-color: #ffba00;
        }
        .panel-heading{
            background: none !important;
            background-color: #ef5350 !important;
            color: #FFFFFF !important;
        }
        a{
            font-size: 15px;
        }
        .btn-save{
        color: #FFFFFF;
        background:#FFB900;
        
        }
        .btn-save:hover{
        transition: 0.4s;
        color: #FFFFFF;
        background-color: #f5b301 !important;

        }
        .btn-cancel{
        color:#FFFFFF;
        background: #800000 !important;
        
        }
        .btn-cancel:hover{
        color:#FFFFFF;
        background-color:#760404;
        transition: 0.4s;
        }
        .profile-menu{
            margin-top: 10px;
        }
        .profile-menu ul li {
            border-bottom: 1px solid #f0f4f7;
            text-align: left;
        }
        .profile-menu ul li a {
             color: #93a3b5;
             font-size: 14px;
             font-weight: 400;
        }
        .profile-menu ul li a i {
            margin-right: 8px;
            font-size: 14px;
        }

        .profile-menu ul li a:hover {
            background-color: #fef80a;
            color: #5b9bd1;
        }

        .profile-menu ul li.active {
            border-bottom: none;
        }

        .profile-menu ul li.active a {
            color: #ca2e32;
            background-color: #fef80a;
            border-left: 3px solid #ffba00;
            margin-left: -2px;
        }
        .home{
            border-top: 1px solid #f0f4f7;
        }
        #fourth-fieldset,#fifth-fieldset{
            display: none;
        }
        #tabs{
            display:none;
        }
        .ui-widget-header {
         border: none;
         background: #FFFFFF;
         color: #333333;
         font-weight: bold;
        }

    </style>

    <title></title>
</head>
<body>
    <div class="page-wrap">
      <div class="header">
          <div class="logo"><img src="<?php echo base_url();?>assets/images/logo.png" style="width: 120px;"></div>
      </div>
       <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <div class="logo"><img src="<?php echo base_url();?>assets/images/logo.png" style="width: 120px;"></div>
                    </div>
                    <div class="col-lg-7 col-sm-7">
                        <?php if(isset($id_number)):?>
                        <?php else:?>
                        <ul class="nav navbar-nav" style="float: right !important;">
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" id="dropdown-notification" data-toggle="dropdown"><i class="pull-right fa fa-bell-o fa-2x" style="width: 40px; height: 40px; margin-top: 0px;"></i> </a>
                                
                                <ul class="dropdown-menu" id="show-notifications" style="position: relative; margin-top:20px; top: -22px; left: -63px; width: 340px;">
                                
                                         <li><div class="notification-title">Notifications <a href="#" class="as-all-read pull-right">Mark all as read</a></div></li>
                                         <li class="divider"></li>
                                <?php for($i=1; $i<=3; $i++):?>
                                         <a href="#" class="view-notif"><li class="view-notification"><div class="notifs">Lfeliz posted announcement <i class="fa fa-check pull-right" title="Mark as read"></i></div></li></a>
                                         <li class="divider"></li>
                                <?php endfor;?>    

                                   </ul>
                            </li>
                        </ul>
                    <?php endif;?>
                    </div>
                    <div class="col-lg-1 col-sm-1">
                        <?php if(isset($id_number)):?>
                               <ul class="nav navbar-nav">
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" id="dropdown-logout" data-toggle="dropdown"><i class="fa fa-user-circle fa-2x"></i><?php //echo $supImage[0]['image_id']?></a>
                    
                              <ul class="dropdown-menu" id="show-logout">
                                <li><a href="#">Dashboard<i class="fa fa-tachometer pull-right"></i></a></li>
                                <li class="divider"></li>
        
                                <li><a href="changepassword">Change password <i class="fa fa-key pull-right" aria-hidden="true"></i></a></li>
                                <li class="divider"></li>
                    
                                <li><a href="<?php echo base_url()?>main/logout">Log Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
                              </ul>
                            </li>
                          </ul>
                        <?php else:?>
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" id="dropdown-logout" data-toggle="dropdown">
                                <?php if ($image_header[0]['user_image'] == '<i class="fa fa-user-circle pull-right" style="font-size: 40px; margin-top: -5px;" aria-hidden="true"></i>'):?>
                                    <?php echo $image_header[0]['user_image'];?>
                                    <?php else:?> 
                                        <img src="<?php echo base_url().$image_header[0]['user_image'];?>" class="pull-right circular-square user-image" style="width: 40px; height: 40px; margin-top: -5px;">
                                <?php endif ?>
                                 

                             </a>
                                
                                <ul class="dropdown-menu" id="show-logout">
                                    <li><a href="profile"><?php echo $user_data[0]['first_name'] . " " .$user_data[0]['last_name'];?><i class="fa fa-user pull-right"></i></a></li>
                                    <li class="divider"></li>
                                    <li><a href="dashboard">Dashboard<i class="fa fa-tachometer pull-right"></i></a></li>
                                    <li class="divider"></li>

                                    <li><a href="changepassword">Change password <i class="fa fa-key pull-right" aria-hidden="true"></i></a></li>
                                    <li class="divider"></li>

                                    <li><a href="logout">Log Out <i class="fa fa-sign-out pull-right"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    <?php endif;?>
                    </div>

                </div>

            </div> 
        </div>
        </div>
       <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                            <div class="profile-container">
                                    <div class="profile-image">
                                        <?php if($personalDetails[0]['image_id'] == '<i class="fa fa-user-circle fa-5x" style="font-size: 150px;" aria-hidden="true"></i>'):?>
                                            <?php echo $personalDetails[0]['image_id'];?>
                                             <img class="img-circle" src="" style="display: none;">
                                        <?php else:?>
                                            <img src="<?php echo base_url().$personalDetails[0]['image_id']?>" class="img-circle">
                                            
                                        <?php endif; ?>
                                       
                                        
                                    </div>
                                    <div style="margin-top: -10px;"></div>
                                    <div class="profile-name">
                                        <div class="label label-default"><?php echo $personalDetails[0]['first_name']." ".$personalDetails[0]['middle_initial']." ".$personalDetails[0]['last_name'];?>
                                    </div>
                                    </div>
                                    <div class="change-photo" style="margin-top: 10px">
                                        <!-- browse -->
                                        <button class="btn btn-default click-photo btn-md" id="btn-browse"><i class="fa fa-picture-o" aria-hidden="true" ></i></button>
                                        <button class="btn btn-default btn-md"><i class="fa fa-camera" aria-hidden="true"></i></button>
                                    </div>
                                   
                                <form action="saveImage" method="POST" enctype="multipart/form-data">
                                    <input class="browse-photo" type="file" accept="image/*" onchange="previewFile()" name="files" style="display: none;">
                                      <div class="saveCancel" style="margin-top: 10px; display: none;">
                                        <button type="submit" class="btn btn-save btn-md" style="width:75px" id="saveBrowse" name="saveBrowse">Save</button>
                                        <button type="button" class="btn btn-cancel btn-md" id="cancelBrowse">Cancel</button>
                                    </div>
                                </form> 
                           
                            <div class="profile-menu">
                                <ul class="nav">
                                    <li class="home"><a href="dashboard"><i class="fa fa-home" aria-hidden="true"></i>Dashboard</a></li>
                                    <li class="active" id="nav1"><a href="#" ><i class="fa fa-user" aria-hidden="true"></i>Personal Information</a></li>
                                    <li id="nav2"><a href="#"><i class="fa fa-building" aria-hidden="true"></i>Company Information</a></li>
                                    <li id="nav3"><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i>Evaluation</a></li>
                                </ul>
                            </div>
                      </div>
                        <!-- <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 style="text-align: center;">Evaluation</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h5>Midterm Evaluation</h5>
                                        <h5>Final Evaluation</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="evaluate/123" target="_new">View <i class="fa fa-external-link" aria-hidden="true"></i></a>
                                        <a href="finalevaluation/123" target="_new">View <i class="fa fa-external-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>

                    <div class="col-lg-8">
                    <fieldset id="first-fieldset">
                    <legend><i class="fa fa-user"></i>Personal Information</legend>
                         <div id="edit">
                             <button id="btn-edit"><span class="fa fa-pencil-square-o" aria-hidden="true"></span></button>
                         </div>
                        <div class="row" id="pos">
                            <div class="col-lg-6">
                                <label class="labels">Course:</label>
                                  <input type="text" name="" value=" BSIT" readonly class="personal-info form-control" readonly="true">
                                  <label class="labels">College:</label>
                                <input type="text" name="" value=" College of Computer Studies" readonly class="personal-info form-control">
                                <label class="labels">Present Address:</label>
                                <input type="text" name="" value=" 4th Year" readonly class="personal-info form-control">
                                <label class="labels">Permanent Address:</label>
                                <input type="text" name="" value=" 4th Year" readonly class="personal-info form-control"><br>
                                <label class="labels">Phone or Landline:</label>
                                  <input type="text" name="" value=" BSIT" readonly class="personal-info form-control"><br>
                                    <label class="labels">Date of Birth:</label>
                                  <input type="text" name="" value=" BSIT" readonly class="personal-info form-control"><br>
                                  <label class="labels">Status:</label>
                                  <input type="text" name="" value=" BSIT" readonly class="personal-info form-control"><br>
                                  <label class="labels">Weight:</label>
                                  <input type="text" name="" value=" BSIT" readonly class="personal-info form-control"><br>
                                  <label class="labels">Religion:</label>
                                  <input type="text" name="" value=" BSIT" readonly class="personal-info form-control"><br>

                            </div>
                            <div class="col-lg-6">
                                <label class="labels">Year:</label>
                               <input type="text" name="" value=" 4th Year" readonly class="personal-info form-control"><br>
                               <label class="labels">Email Address:</label>
                               <input type="text" name="" value=" 4th Year" readonly class="personal-info form-control"><br>
                               <label class="labels">Age:</label>
                               <input type="text" name="" value=" 4th Year" readonly class="personal-info form-control"><br>
                               <label class="labels">Blood Type:</label>
                               <input type="text" name="" value=" 4th Year" readonly class="personal-info form-control"><br>
                               <label class="labels">Height in Cm:</label>
                               <input type="text" name="" value=" 4th Year" readonly class="personal-info form-control"><br>
                               <label class="labels">Citizenship:</label>
                               <input type="text" name="" value=" 4th Year" readonly class="personal-info form-control"><br>
                            </div>
                            </div>
                             <p style="text-align: center; margin-top: 10px;">
                               <button class="btn btn-primary bt" style="display: none" type="submit">Save Changes</button>
                               <button class="btn btn-danger bt" id="cancel" style="display: none;" type="button">Cancel</button>
                           </p>
                            
                    </fieldset>
                    <fieldset id="second-fieldset">
                    <legend><i class="fa fa-users"></i>Family Data</legend>
                         <div id="edit">
                             <button id="btn-edit1"><span class="fa fa-pencil-square-o" aria-hidden="true"></span></button>
                         </div>
                        <div class="row" id="pos">
                            <div class="col-lg-6">
                                <label class="labels">Father's Name:</label>
                                  <input type="text" name="" value=" BSIT" readonly class="family-info form-control">
                                  <label class="labels">Mother's Name:</label>
                                  <input type="text" name="" value=" BSIT" readonly class="family-info form-control">
                                  <label class="labels">Parent's Address:</label>
                                <input type="text" name="" value=" 4th Year" readonly class="family-info form-control">
                                 <label class="labels">Landline or Mobile:</label>
                                <input type="text" name="" value=" 4th Year" readonly class="family-info form-control">
                            </div>
                            <div class="col-lg-6">
                               <label class="labels">Father's Occupation:</label>
                               <input type="text" name="" value=" 4th Year" readonly class="family-info form-control">
                                <label class="labels">Mother's Occupation:</label>
                               <input type="text" name="" value=" 4th Year" readonly class="family-info form-control">
                            </div>
                        </div>
                        <p style="text-align: center; margin-top: 10px;">
                               <button class="btn btn-primary bts" style="display: none" type="submit">Save Changes</button>

                               <button class="btn btn-danger bts" id="cancels"style="display: none;" type="button">Cancel</button>

                           </p>
                        
                    </fieldset>
                     <fieldset id="third-fieldset">
                    <legend><i class="fa fa-building-o"> </i>Company Information</legend>
                         <div id="edit">
                             <button id="btn-edit2"><span class="fa fa-pencil-square-o" aria-hidden="true"></span></button>
                         </div>
                        <div class="row" id="pos">
                            <div class="col-lg-6">
                                <label class="labels">Company Name:</label>
                                  <input type="text" name="" value=" BSIT" readonly class="company-info form-control">
                                  <label class="labels">Company Address:</label>
                                  <input type="text" name="" value=" BSIT" readonly class="company-info form-control">
                                  <label class="labels">Telephone Number:</label>
                                <input type="text" name="" value=" 4th Year" readonly class="company-info form-control">
                                
                            </div>
                            <div class="col-lg-6">
                             <label class="labels">Product Lines:</label>
                                <input type="text" name="" value=" 4th Year" readonly class="company-info form-control">
                               <label class="labels">Fax Number:</label>
                               <input type="text" name="" value=" 4th Year" readonly class="company-info form-control">
                            </div>
                        </div>
                        <div class="row">
                            <h2 style="margin-bottom: 30px">Company Classification <i class="fa fa-list-alt" aria-hidden="true"></i></h2>
                             <div class="col-lg-2">
                            <input id="assembly" value="assembly" type="checkbox"><label class="labels" for="assembly">Assembly</label>
                         </div> 
                         <div class="col-lg-2">
                            <input type="checkbox" value="manufacturing" id="manufacturing"><label class="labels"for="manufacturing">Manufacturing</label>
                         </div> 
                         <div class="col-lg-2">
                            <input type="checkbox" value="maintenance" id="maintenance"><label class="labels"for="maintenance">Maintenance</label>
                         </div>
                         <div class="col-lg-3">
                            <input type="checkbox" value="marketing" id="marketing"><label class="labels"for="marketing">Sales/Marketing</label>
                         </div>
                         <div class="col-lg-3">
                             <input type="checkbox" value="service" id="service"><label class="labels"for="service">Service/Utility</label>
                         </div>
                         
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            
                              <input type="checkbox" value="research" id="research"><label class="labels"for="research">Research and Development</label>
                            
                          </div>
                          <div class="col-lg-2">
                            <input type="checkbox" value="itrelated" id="itrelated"><label class="labels"for="itrelated">IT Related</label>
                          </div>
                          <div class="col-lg-5">
                               <input type="radio" class="other-company" id="other"><label class="labels"for="other">Others</label>
                               <input type="text" id="other_classification" name="other_classification" style="height: 15px; width: 250px; display: none;" placeholder="Please specify">
                          </div>
                       
                        </div>
                        <div class="row">
                            <h2 class="fs-title" style="margin: 30px 30px">Total number of employees <i class="fa fa-list-ol" aria-hidden="true"></i></h2>
                            <div class="col-lg-3 col-lg-offset-1">
                              <input type="radio" id="less_fifty" value="Less than 50" name="employee_numbers"><label class="labels"for="less_fifty">Less than 50</label>
             
                            </div>
                            <div class="col-lg-3 col-lg-offset-1">
                               <input type="radio" id="fifty_onehundred" value="From 50 to 100" name="employee_numbers"><label class="labels"for="fifty_onehundred">From 50 to 100</label>
             
                            </div>
                            <div class="col-lg-3 col-lg-offset-1">
                                <input type="radio" id="more_onehundred" value="More than 100" name="employee_numbers"><label class="labels"for="more_onehundred">More than 100</label>
                            </div>
                        </div>
                        <p style="text-align: center; margin-top: 10px;">
                               <button class="btn btn-primary btss" style="display: none" type="submit">Save Changes</button>
                               <button class="btn btn-danger btss" id="cancelss" style="display: none;" type="button">Cancel</button>
                        </p>
                    </fieldset>
                    <div id="tabs">
                        <ul>
                            <li id="tab1"><a href="#fourth-fieldset">Midterm</a></li>
                            <li id="tab2"><a href="#fifth-fieldset">Final</a></li>
                        </ul>
                    <fieldset id="fourth-fieldset">
                            <h1 style="text-align: center;">My Midterm Evaluation</h1>
                         <label>WORK ATTITUDE(<div class="badge">40</div> points)</label>
                                <ol>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            
                                                <li>Enthusiasm / Eagerness to Learn</li>
                                                
                                            
                                          
                                                <li>Cooperation and Willingness</li>
                                           
                                            
                                           
                                                <li>Adaptability and Sociability</li>
                                            
                                           
                                          
                                                <li>Industriousness and Initiative</li>
                                          
                                           
                                           
                                                <li>Sense of Responsibility</li>
                                           
                                            
                                                <li>Attentiveness / Attention</li>
                                        
                                            
                                                <li>Personal Grooming</li>
                                          
                                                <li>Attendance</li>
                                            
                                        </div>

                                    <div class="col-lg-6">
                                        <form method="post">
                                         
                                         <fieldset style="float: right;">
                                             <input tabindex="1" maxlength="1" type="text" name="enthusiasm" class="score">
                                            <a role="button" class="clicky"id="pop" data-container="body" data-toggle="popover" data-placement="top" title="Enthusiasm / Eagerness to Learn" data-content="Confident to learn new tasks / assignments." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                             <br>
                                             <input tabindex="2"  maxlength="1" type="text" name="cooperation" class="score">  
                                             <a role="button" class="clicky"id="pop" data-container="body" data-toggle="popover" data-placement="top" title="Cooperation and Willingness" data-content="Readiness to accept and carry out instructions and assignments; works well with others; shows support and concerns for co-workers." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a><br>
                                             <input tabindex="3" maxlength="1" type="text" name="adaptability" class="score">
                                                   <a role="button" class="clicky"id="pop" data-container="body" data-toggle="popover" data-placement="top" title="Adaptability and Sociability" data-content="Ability to adjust to a new environment and be at ease with others; ability to deal with people of different levels/ positions; amiable and friendly with others and knows how to respect authority." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                             </i><br>
                                             <input tabindex="4" maxlength="1" type="text" name="industriousness" class="score"> 
                                             <a role="button" class="clicky"id="pop" data-container="body" data-toggle="popover" data-placement="top" title="Industriousness and Initiative" data-content="Constant worker / keeps himself busy with initiative; does not take unauthorized breaks; initiates action when the situation calls for it." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                             <br>
                                             <input tabindex="5" maxlength="1" type="text" name="responsibility" class="score">

                                               <a role="button" class="clicky"id="pop" data-container="body" data-toggle="popover" data-placement="top" title="Sense of Responsibility" data-content="Applies sound judgement / decision making." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a><br>
                                             <input tabindex="6"  maxlength="1" type="text" name="attentiveness" class="score">
                                              <a role="button" class="clicky"id="pop" data-container="body" data-toggle="popover" data-placement="top" title="Attentiveness / Attention" data-content="Focuses on his/her work / gives full attention to what he/she is doing; ability to handle unexpected problems; carry-out instructions / assignments at once." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a><br>
                                             <input tabindex="7" maxlength="1" type="text" name="grooming" class="score">
                                             <a role="button" class="clicky"id="pop" data-container="body" data-toggle="popover" data-placement="top" title="Personal Grooming" data-content="Maintains proper way of dressing marked by proper conduct, tidiness, and well-grooming; lively and well-spirited during at work and at rest." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                             
                                             <br>
                                             <input tabindex="8" maxlength="1" type="text" name="attendance" class="score">                           
                                                <a role="button" class="clicky"id="pop" data-container="body" data-toggle="popover" data-placement="top" title="Attendance" data-content="Reports to work regurlarly and on time and uses time wisely and productively." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a><br>
                                        </fieldset>
                                    </div>
                                 
                                    </div>
                                   
                                       
                                    
                                </ol>
                                <label>WORK PERFORMANCE (30 x 2 =
                                    <div class="badge">60</div> points)</label>

                                <ol>
                                    
                                    <div class="row">
                                        <div class="col-lg-6">
                                                <li>Quality of Work</li>
                                               
                                                <li>Quantity of Work</li>
                                             
                                                <li>Dependability</li>
                                              
                                                <li>Comprehension</li>
                                                <li>Safety Consciousness</li>
                                               
                                                <li>Waste Consciousness</li>
                                         </div>
                                         <div class="col-lg-6">
                                            <fieldset style="float: right;">
                                                <input tabindex="9" maxlength="1" type="text" name="quality" class="score">
                                                    <a role="button" class="clicky"id="pop" data-container="body" data-toggle="popover" data-evaluation-type="a_two"data-placement="top" title="Quality of Work" data-content="Thoroughness, accuracy, neatness and effectiveness of output, meets required standards and even exceeds expected results." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                                <input tabindex="10" maxlength="1" type="text" name="quantity" class="score">
                                                      <a role="button" class="clicky"id="pop" data-container="body" data-toggle="popover" data-evaluation-type="a_two"data-placement="top" title="Quantity of Work" data-content="Able to complete work within the alloted time, finishes work on schedule and maximizes use of tme." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                                <input tabindex="11" maxlength="1" type="text" name="dependability" class="score">
                                                      <a role="button" class="clicky"id="pop" data-container="body" data-toggle="popover" data-evaluation-type="a_two"data-placement="top" title="Dependability" data-content="Ability to work with minimum supervision, does not need constant follow-up." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                                <input tabindex="12" maxlength="1" type="text" name="comprehension" class="score">
                                                      <a role="button" class="clicky"id="pop" data-container="body" data-toggle="popover" data-evaluation-type="a_two"data-placement="top" title="Comprehension" data-content="Understand instructions at once with almost no clarification." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                                <input tabindex="13" maxlength="1" type="text" name="safety" class="score">
                                                  <a role="button" class="clicky"id="pop" data-container="body" data-toggle="popover" data-evaluation-type="a_two"data-placement="top" title="Safety Consciousness" data-content="Carefully takes precaution and observe visible hazards; follow safety rules and reads instructions prior to working." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                                <input tabindex="14" maxlength="1" type="text" name="waste" class="score">
                                                     <a role="button" class="clicky"id="pop" data-container="body" data-toggle="popover" data-evaluation-type="a_two"data-placement="top" title="Waste Consciousness" data-content="Shows concerns of company facilities; handles tools and equipment carefully; keeps equipment, tools, materials and work area clean and well-kept; proper use and disposal of materials." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                            </fieldset>
                                            </ol>
                                             <div class="row">
                                    <div class="col-lg-6">
                                     <label class="pointy">OVERALL TOTAL</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset style="float: right;">
                                            <input type="text" name="" class="score" style="margin-right: 25px; margin-top: 20px;" readonly> 
                                         </fieldset>
                                    </div>
                                </div>
                                <label for="remark" style="margin:0; padding: 0;" class="pointy">REMARKS</label>
                              
                                    <textarea tabindex="15" name="remarks" id="remark" class="form-control"></textarea>

                            </div>

                            </div>
                        <div id="fifth-fieldset">
                        <div class="col-lg-3">
                            
                        </div>

                        <div class="col-lg-9">
                            <div class="well" style="background-image:none; background-color: #FFFFFF; border: 1px solid #C0C0C0; width: 88.5% !important;">
                            <h1 style="text-align: center;">My Final Evaluation</h1>
                                <label>WORK ATTITUDE(<div class="badge">40</div> points)</label>
                                <ol>
                                    
                                    <div class="row">
                                        <div class="col-lg-6">
                                            
                                                <li>Enthusiasm / Eagerness to Learn</li>
                                                
                                            
                                          
                                                <li>Cooperation and Willingness</li>
                                           
                                            
                                           
                                                <li>Adaptability and Sociability</li>
                                            
                                           
                                          
                                                <li>Industriousness and Initiative</li>
                                          
                                           
                                           
                                                <li>Sense of Responsibility</li>
                                           
                                            
                                                <li>Attentiveness / Attention</li>
                                        
                                            
                                                <li>Personal Grooming</li>
                                          
                                                <li>Attendance</li>
                                            
                                        </div>

                                    <div class="col-lg-6">
                                        <form method="post" id="formy"  name="mid_ev">
                                         
                                         <fieldset style="float: right;">
                                             <input tabindex="1" maxlength="1" type="text" name="enthusiasm"  onkeyup="scoreTotal()" id="enthusiasm" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>

                                            <a role="button" class="clicky" data-container="body" data-toggle="popover" data-placement="top" title="Enthusiasm / Eagerness to Learn" data-content="Confident to learn new tasks / assignments." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                             <br>
                                             <input tabindex="2"  maxlength="1" type="text" name="cooperation" onkeyup="scoreTotal()" id="cooperation" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>  

                                             <a role="button" class="clicky" data-container="body" data-toggle="popover" data-placement="top" title="Cooperation and Willingness" data-content="Readiness to accept and carry out instructions and assignments; works well with others; shows support and concerns for co-workers." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a><br>
                                             <input tabindex="3" maxlength="1" type="text" name="adaptability" onkeyup="scoreTotal()" id="adaptability" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                                                   <a role="button" class="clicky" data-container="body" data-toggle="popover" data-placement="top" title="Adaptability and Sociability" data-content="Ability to adjust to a new environment and be at ease with others; ability to deal with people of different levels/ positions; amiable and friendly with others and knows how to respect authority." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                             </i><br>
                                             <input tabindex="4" maxlength="1" type="text" name="industriousness" onkeyup="scoreTotal()" id="industriousness" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required> 
                                             <a role="button" class="clicky" data-container="body" data-toggle="popover" data-placement="top" title="Industriousness and Initiative" data-content="Constant worker / keeps himself busy with initiative; does not take unauthorized breaks; initiates action when the situation calls for it." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                             <br>
                                             <input tabindex="5" maxlength="1" type="text" name="responsibility" onkeyup="scoreTotal()" id="responsibility" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>

                                               <a role="button" class="clicky" data-container="body" data-toggle="popover" data-placement="top" title="Sense of Responsibility" data-content="Applies sound judgement / decision making." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a><br>
                                             <input tabindex="6"  maxlength="1" type="text" name="attentiveness" class="score" onkeyup="scoreTotal()" id="attentiveness" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                                              <a role="button" class="clicky" data-container="body" data-toggle="popover" data-placement="top" title="Attentiveness / Attention" data-content="Focuses on his/her work / gives full attention to what he/she is doing; ability to handle unexpected problems; carry-out instructions / assignments at once." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a><br>
                                             <input tabindex="7" maxlength="1" type="text" name="grooming" onkeyup="scoreTotal()" id="grooming" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                                             <a role="button" class="clicky" data-container="body" data-toggle="popover" data-placement="top" title="Personal Grooming" data-content="Maintains proper way of dressing marked by proper conduct, tidiness, and well-grooming; lively and well-spirited during at work and at rest." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                             
                                             <br>
                                             <input tabindex="8" maxlength="1" type="text" name="attendance" onkeyup="scoreTotal()" id="attendance" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>                           
                                                <a role="button" class="clicky" data-container="body" data-toggle="popover" data-placement="top" title="Attendance" data-content="Reports to work regurlarly and on time and uses time wisely and productively." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a><br>
                                        </fieldset>
                                    </div>
                                 
                                    </div>
                                   
                                       
                                    
                                </ol>
                                <label>WORK PERFORMANCE (30 x 2 =
                                    <div class="badge">60</div> points)</label>

                                <ol>
                                    
                                    <div class="row">
                                        <div class="col-lg-6">
                                                <li>Quality of Work</li>
                                               
                                                <li>Quantity of Work</li>
                                             
                                                <li>Dependability</li>
                                              
                                                <li>Comprehension</li>
                                                <li>Safety Consciousness</li>
                                               
                                                <li>Waste Consciousness</li>
                                         </div>
                                         <div class="col-lg-6">
                                            <fieldset style="float: right;">
                                                <input tabindex="9" maxlength="1" type="text" name="quality" onkeyup="scoreTotal()" id="quality" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                                                    <a role="button" class="clicky" data-container="body" data-toggle="popover" data-evaluation-type="a_two"data-placement="top" title="Quality of Work" data-content="Thoroughness, accuracy, neatness and effectiveness of output, meets required standards and even exceeds expected results." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                                <input tabindex="10" maxlength="1" type="text" name="quantity" onkeyup="scoreTotal()" id="quantity" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                                                      <a role="button" class="clicky" data-container="body" data-toggle="popover" data-evaluation-type="a_two"data-placement="top" title="Quantity of Work" data-content="Able to complete work within the alloted time, finishes work on schedule and maximizes use of tme." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                                <input tabindex="11" maxlength="1" type="text" name="dependability" onkeyup="scoreTotal()" id="dependability" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                                                      <a role="button" class="clicky" data-container="body" data-toggle="popover" data-evaluation-type="a_two"data-placement="top" title="Dependability" data-content="Ability to work with minimum supervision, does not need constant follow-up." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                                <input tabindex="12" maxlength="1" type="text" name="comprehension" onkeyup="scoreTotal()" id="comprehension" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                                                      <a role="button" class="clicky" data-container="body" data-toggle="popover" data-evaluation-type="a_two"data-placement="top" title="Comprehension" data-content="Understand instructions at once with almost no clarification." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                                <input tabindex="13" maxlength="1" type="text" name="safety" onkeyup="scoreTotal()" id="safety" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                                                  <a role="button" class="clicky" data-container="body" data-toggle="popover" data-evaluation-type="a_two"data-placement="top" title="Safety Consciousness" data-content="Carefully takes precaution and observe visible hazards; follow safety rules and reads instructions prior to working." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                                <input tabindex="14" maxlength="1" type="text" name="waste" onkeyup="scoreTotal()" id="waste" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                                                     <a role="button" class="clicky" data-container="body" data-toggle="popover" data-evaluation-type="a_two"data-placement="top" title="Waste Consciousness" data-content="Shows concerns of company facilities; handles tools and equipment carefully; keeps equipment, tools, materials and work area clean and well-kept; proper use and disposal of materials." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                            </fieldset>
                                         </div>
                                    </div>
                                   
                                </ol>
                                <div class="row">
                                    <div class="col-lg-6">
                                     <label class="pointy">OVERALL TOTAL</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset style="float: right;">
                                            <input type="text" name="total" class="score" id="total" style="margin-right: 25px; margin-top: 20px;" readonly> 
                                         </fieldset>
                                    </div>
                                </div>
                                <label for="remark" style="margin:0; padding: 0;" class="pointy">REMARKS</label>
                              
                                    <textarea tabindex="15" name="remarks" id="remark" class="form-control"></textarea>
                                   
                                </form>
                            </div>
                        </div>

                

            </div>  

        </div> 




    
       
</body>

<!-- click save from browse photo -->


<!-- click cancel from browse photo -->
<script type="text/javascript">
    $("#cancelBrowse").click(function(){
        $(".saveCancel").css("display","none");
        location.reload();
    });
</script>

<script type="text/javascript">
    $("span").hover(function() {
        $(this).css("background", "none");
        $(this).css("color", "#000");
    });
</script>
<script type="text/javascript">
    $("#btn-edit").click(function(){
        $(".personal-info").addClass("showBorder");
        $(".personal-info").prop("readonly",false);
        $(".bt").css("display","inline-block");
    });
</script>
<script type="text/javascript">
    $("#cancel").click(function(){
        $(".personal-info").removeClass("showBorder");
        $(".personal-info").prop("readonly",true);
        $(".bt").css("display","none");
    });
</script>
<script type="text/javascript">
    $("#btn-edit1").click(function(){
         $(".family-info").addClass("showBorder");
         $(".family-info").prop("readonly",false);
         $(".bts").css("display","inline-block"); 
    });
</script>
<script type="text/javascript">
    $("#btn-edit2").click(function(){
         $(".company-info").addClass("showBorder");
         $(".company-info").prop("readonly",false);
         $(".btss").css("display","inline-block"); 
    });
</script>
<script type="text/javascript">
    $("#cancelss").click(function(){
        $(".company-info").removeClass("showBorder");
        $(".company-info").prop("readonly",true);
        $(".btss").css("display","none");
    });
</script>

<script type="text/javascript">
    $("#cancels").click(function(){
        $(".family-info").removeClass("showBorder");
        $(".family-info").prop("readonly",true);
        $(".bts").css("display","none");
    });

    $('.click-photo').click(function(){
        $('.browse-photo').trigger('click');
    });
</script>


<script type="text/javascript">
  
    function previewFile() {
     var preview = document.querySelector('img');
     var file    = document.querySelector('input[type=file]').files[0];
     var reader  = new FileReader();

     reader.addEventListener("load", function () {
       preview.src = reader.result;
       $('img').show();
       $('.fa-user-circle').hide();
       $(".saveCancel").css("display","inline-block");
    }, false);

    if (file) {
     reader.readAsDataURL(file);
     alert(reader.readAsDataURL(file));
    }
}
  $(function () {
  $('[data-toggle="popover"]').popover()
})
</script>
<script type="text/javascript">
    $("#nav1").click(function(){
        $("#first-fieldset").show();
        $("#second-fieldset").show();
        $("#third-fieldset").hide();
        $("#fifth-fieldset").hide();
        $("#fourth-fieldset").hide();
        $("#nav1").addClass("active");
        $("#nav2").removeClass("active");
        $("#tabs").hide();
    });
    $("#nav2").click(function(){
        $("#first-fieldset").hide();
        $("#second-fieldset").hide();
        $("#fourth-fieldset").hide();
        $("#fifth-fieldset").hide();
        $("#third-fieldset").show();
        $("#nav2").addClass("active");
        $("#nav1").removeClass("active");
        $("#nav3").removeClass("active")
        $("#tabs").hide();
    });
</script>
<script type="text/javascript">
    $("#nav3").click(function(){
        $("#tabs").tabs().show();
        $("#first-fieldset").hide();
        $("#second-fieldset").hide();
        $("#third-fieldset").hide();
        $("#fourth-fieldset").show();
        $("#fifth-fieldset").hide();
        $("#nav3").addClass("active");
        $("#nav1").removeClass("active");
        $("#nav2").removeClass("active");
    });
</script>
<script type="text/javascript">
    $("#tab1").click(function(){
        $("#fifth-fieldset").hide();
    });
    $("#tab2").click(function(){
        $("#fifth-fieldset").show();
    });
</script>
</html>