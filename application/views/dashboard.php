
<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="favicon.ico">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
  <!--   <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/materialize.css"> -->
    <!-- Optional theme -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-theme.min.css" >
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="<?php echo base_url()?>assets/js/progressbar/dist/progressbar.js"></script>
    <script src="<?php echo base_url()?>assets/js/progressbar/dist/progressbar.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.simple-popup.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
   <script src="<?php echo base_url() ?>assets/js/swal.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/jquery.simple-popup.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/jquery.simple-popup.settings.css" rel="stylesheet">
    <style type="text/css">
.img-replace {
  /* replace text with an image */
  display: inline-block;
  overflow: hidden;
  text-indent: 100%;
  color: transparent;
  white-space: nowrap;
}
/* -------------------------------- 
xnugget info 
-------------------------------- */
.cd-nugget-info {
  text-align: center;
  position: absolute;
  width: 100%;
  height: 50px;
  line-height: 50px;
  bottom: 0;
  left: 0;
}
.cd-nugget-info a {
  position: relative;
  font-size: 14px;
  color: #5e6e8d;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  transition: all 0.2s;
}
.no-touch .cd-nugget-info a:hover {
  opacity: .8;
}
.cd-nugget-info span {
  vertical-align: middle;
  display: inline-block;
}
.cd-nugget-info span svg {
  display: block;
}
.cd-nugget-info .cd-nugget-info-arrow {
  fill: #5e6e8d;
}
/* -------------------------------- 
Main components 
-------------------------------- */
   .header{
      padding: 5px;
      height: 60px;
      border-bottom: 3px solid #791b1e;
      background-color: #ffba00;
    }
header h1 {
  font-size: 20px;
  font-size: 1.25rem;
}

.show-more-right input[type=text]{
  font-size: 12px;
}
.show-more-left input[type=time]{
  font-size: 12px;
}
.show-more-left input[type=text]{
  font-size: 12px;
}
.show-more-left label{
  font-size: 12px !important; 
}
.show-more-right label{
  font-size: 13px !important;
}
      .top {
            background-color: #915B51;
            height: 50px;
        }
        
        * {
            font-family: Roboto, sans-serif;
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
        
        .fa-bell {
            cursor: pointer;
            color: #7a5230;
        }
        
        .fa-bell:hover {
            color: #7a5230;
        }
        
        
      /*  
        li > .notifications {
            padding-left: 20px;
            color: #915B51;
            padding-top: 10px;
            width: 280px;
            display: inline-block;
        }
        
       
        
      
        */
        textarea{
            resize: none;
        }
        
          .notifs {
            padding-left: 10px;
            padding-top: 10px;
            height: 60px;
         }
        .fa-circle:hover {
            cursor: pointer;
            color: #DABD95;
        }
        .fa-circle-o:hover {
            cursor: pointer;
            color: #DABD95;
        }
        
        .fa-circle-o {
          position: absolute;
          right: 0;
          color: #915B51;
          margin-top: -49px;
          padding-right: 10px;
      }
       
        .fa-circle {
          position: absolute;
          /* top: 0; */
          margin-top: -49px;
          right: 0;
          color: #915B51;
          padding-right: 10px;
      }
          .notification-title {
            padding-top: 10px;
            padding-left: 10px;
            padding-bottom: 10px;
        }
        .badge {
            background: #ca2e32;
            z-index: 1;
        }
        
        .as-all-read {
          padding-right: 10px;
        }
        .as-all-read:hover{
         text-decoration: underline;
        }
        
        .circular-square {
            border-top-left-radius: 50% 50%;
            border-top-right-radius: 50% 50%;
            border-bottom-right-radius: 50% 50%;
            border-bottom-left-radius: 50% 50%;
        }
        body{
           background: #E9EBEE;
        }
        
        .content {
            padding-top: 30px;
            padding-bottom: 30px;
            background: #E9EBEE;
            color: #000000 !important;
        }
        
        .dashboard-title {
            font-size: 15px;
            font-weight: 600;
            text-align: center;
        }
        
        .well {
            border: 1px solid #fdfdfd;
            border-radius: 0px;
            box-shadow: none;
            background: #fff;
        }
        
        .progress {
            margin-top: 10px;
        }
        
        .form-control {
            border-radius: 0;
        }
        
        input {
            height: 30px;
        }
        ul a:hover{
            text-decoration: none;
        }
        label {
            display: block;
            margin-top: 10px;
            font-size: 13px;
        }
        
        #log_activity {
            resize: none;
            height: 80px;
            overflow: hidden;
           
            outline: none;
           
        }
        
        .logs-upper,
        .logs-lower {
            display: none;
        }
        .logs-lower button{
            font-size: 11px;
            border-radius: 20px;
        }
        .logs-title {
            margin-top: 10px;
        }
        
        .btn {
            border-radius: 0;
        }
        
        .logs-lists label {
            font-size: 15px;
        }
        
        .logs-lists input {
            font-size: 15px;
            border: none;
            background-color: #fff;
        }
        
        #log_lists_activity {
            width: 95%;
            font-size: 15px;
            margin-left:20px;
            border: none;
            background-color: #fff;
            resize: none;
        }
        
        #Log_lists_activity:focus {
            border-color: none;
        }
        
        .list-logs {
            width: 100%;
            padding: 2px;
        }
        
        #hoursProgress {
            margin: 20px;
            width: 150px;
            height: 150px;
            position: relative;
            left: 70px;
        }
        #progressEvaluations {
           margin: 20px;
            width: 150px;
            height: 150px;
            position: relative;
            left: 80px;
        }
        
        #verifiedLogs {
            margin: 20px;
            width: 150px;
            height: 150px;
            margin-left: 100px;
        }
        .workmates-list{
            background: #f7f8f9;
        }
        #show-notifications{
            padding-top: 0;
            padding-bottom: 0;
        }
        .dropdown-menu .divider{
            margin:0;
        }
        li.view-notification:hover{
            background-color: #F6F6F7;
        } 
        li.view-notification-read:hover{
            background-color: #F6F6F7;
        } 
        li.view-notification{
            background-color: #EDF2FA;
        }
        .clickBorder{
            border: 2px solid #A55D35;
            transition: 0.1s linear;
        }

     

        .btn-circle.btn-lg {
        width: 40px;
        height: 40px;
        padding: 5px 8px;
        font-size: 12px;
        line-height: 1.33;
        border-radius: 25px;
    }
  
    textarea:focus{
      outline: none !important;
    }    
    .save-edit button{
        border-radius: 20px;
        font-size: 12px;
    }
    .btn-bug{
        background-color: #d96c6f;
    }
    .btn-bug:hover{
        color: #cf4246;
    }
    .btn-submit{
        color: #FFFFFF;
        background-color: #FFBA00;
    }
    .btn-submit:hover{
        color: #FFFFFF;
        background-color: #f5b301;
    }
    .feedback{position: fixed;}
    .feedback textarea{height: 150px; }
    .feedback .reported p, .feedback .failed p  { height: 190px}
    .feedback.left{left:5px; bottom:15px}
    .feedback.right{right:5px; bottom:15px}
    .feedback .dropdown-menu{width: 290px;height: 275px;bottom: 50px;}
    .feedback.left .dropdown-menu{ left: 0px}
    .feedback.right .dropdown-menu{ right: 0px}
    .feedback .hideme{ display: none}
    .footer{
        height: 50px;
    }
    .panel-heading{
      color: #FFFFFF !important;
      font-size: 20px;
      background-color: #CA2E32 !important;
      background-image: none !important;
      padding: 10px 10px !important;
    }
    .notification-bell{
      margin-top: -5px;
    }
    .dropdown-image{
      margin-top: -5px;
    }
     .badge {
            background: #ca2e32;
            z-index: 1;
        }
   .btn-bug{
        background-color: #d96c6f;
    }
    .btn-bug:hover{
        color: #cf4246;
    }

    .btn-danger{
      background:#871F21 !important;
      border: 1px solid transparent;
      border-radius: 0px !important;
    }
    .btn-danger:hover{
      background:#5e1517 !important;
      border: 1px solid transparent;
    }
    .btn-primary{
      border-radius: 0px !important;
      background:#FFBA00 !important;
      border: 1px solid transparent;
    }
    .btn-primary:hover{
      background:#e5ac16 !important;
      border: 1px solid transparent;
    }
    .btn-success{
      border-radius: 0px !important;
      background:#357fff !important;
      border: 1px solid transparent;
    }
    .btn-success:hover{
      border-radius: 0px !important;
      background:#2f72e5 !important;
      border: 1px solid transparent;
    }
    .btn-default{
      border-radius: 0px !important;
      background:#e0e0e0 !important;
      border: 1px solid transparent;
    }
    .btn-default:hover{
      background:#c9c9c9 !important;
      border: 1px solid transparent;
    }

    </style>
    <title>OJT Automate <?php echo empty($numberAnnouncements->numberUnread) ? '' : '('.$numberAnnouncements->numberUnread.')';?></title>

</head>

<body onload="init()">
 
      
            <div id="popup1" style="display: none;">
                <h4 style="padding-left: 10px;color: #2693e6;text-transform: uppercase;"><?php echo empty($announcements[0]['name'])?'':$announcements[0]['name']; ?></h4>
                <p class="date_posted" style="margin-left: 10px;font-size: 13px"><?php echo date('F d, Y');?></p>
                <pre class="content-announcement" style="font-size: 15px;">
                  <?php echo empty($announcements[0]['content']) ? '': $announcements[0]['content']; ?>
                </pre>
            </div>
        
     
    <div class="page-wrap">
        <div class="header">
            <div class="container-fluid">
              <div class="col-lg-8">
                  <div class="logo" style="float: left;"><img src="<?php echo base_url();?>assets/images/logo.png" style="width: 50px; height: 50px;"></div>
                 <a href="dashboard" style="text-decoration: none;"><h3 style="font-weight: bold; margin-top: 12px; color: #b71c1c ; text-align: left; font-family: fantasy;font-style: italic;font-size: 20pt;letter-spacing: 1px;">OJT AUTOMATE</h3></a> 
              </div>
              <div class="col-lg-1">
                      <section id="notification-bell">
                        <?php if(isset($id_number)):?>
                        <?php else:?>
                          <?php if(empty($numberAnnouncements->numberUnread)):?>
                            <div id="countUnread">
                               </div>
                          <?php else:?>
                          <div id="countUnread">
                              <span class="badge" style="position: absolute;right: 23px;top: 10px;">
                                  <?php echo $numberAnnouncements->numberUnread;?></span>
                                </div>
                          <?php endif;?>
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                            
                            <a href="#" class="dropdown-toggle" id="dropdown-notification" data-toggle="dropdown"><i class="pull-right  fa fa-bell fa-2x" style="width: 40px; height: 40px; margin-top: 0px;"></i></a>
                                
                                <ul class="dropdown-menu" id="show-notifications" style="position: relative; margin-top:20px;top: -32px; left: -76px; width: 340px; max-height: 400px; overflow: auto;">
                                      <div id="notification-body">
                                         <li><div class="notification-title">Notifications <a href="#" class="as-all-read pull-right">Mark all as read</a></div></li>
                                         <li class="divider"></li>

                                         <?php if(empty($announcements)):?>
                                          <li><div class="notifs" style="text-align: center; padding-left: 0; height: 150px;">No notifications yet</div></li>
                                        <?php else:?>
                                          <?php foreach($announcements as $announcement):?>
                                            <?php if($announcement['status'] == 1):?>
                                                 <li class="divider"></li>
                                              <a href="#" data-announcement-id="<?php echo $announcement['id']?>" class="view-notif"><li class="view-notification-read"><div class="notifs"><?php echo $announcement['name']; ?> posted an announcement <br><span style="font-size: 12px;"><?php
                                                    $timestamp = strtotime($announcement['date_posted']);
                                                    $datetime = explode(" ",$announcement['date_posted']); 
                                                    
                                                    $date = date('F d, Y', $timestamp);
                                                    // $time = date('Gi.s', $timestamp);
                                                    //echo $date . " at " . date('h:ia', $timestamp);
                                                         
                                                          $now = new DateTime;
                                                          $ago = new DateTime($announcement['date_posted']);
                                            
                                                          $diff = $now->diff($ago);
                                                          $full = false;
                                                          $diff->w = floor($diff->d / 7);
                                                          $diff->d -= $diff->w * 7;
                                                          $string = array(
                                                              'y' => 'year',
                                                              'm' => 'month',
                                                              'w' => 'week',
                                                              'd' => 'day',
                                                              'h' => 'hour',
                                                              'i' => 'minute',
                                                              's' => 'second',
                                                          );
                                                          foreach ($string as $k => &$v) {
                                                              if ($diff->$k) {
                                                                  $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                                                              } else {
                                                                  unset($string[$k]);
                                                              }
                                                          }
                                                          if (!$full) $string = array_slice($string, 0, 1);
                                                          echo $string ? implode(', ', $string) . ' ago' : 'just now';
                                              
                                              ?></span></div></li></a><i class="fa fa-circle-o pull-right unread-notif" title="Mark as unread" data-announcement-id="<?php echo $announcement['id']?>"></i>
                                               
                                           
                                        
                                            <?php else:?>
                                           <li class="divider"></li>
                                          <a href="#" data-announcement-id="<?php echo $announcement['id'];?>" class="view-notif"><li class="view-notification"><div class="notifs"><?php echo $announcement['name'];?> posted an announcement<br><span style="font-size: 12px;"><?php
                                                    
                                                    // $time = date('Gi.s', $timestamp);
                                                    //echo $date . " at " . date('h:ia', $timestamp);
                                          //echo $announcement['date_posted'];exit;
                                                      // $datetime = strtotime($announcement['date_posted']);
                                                          $now = new DateTime;
                                                          $ago = new DateTime($announcement['date_posted']);
                                            
                                                          $diff = $now->diff($ago);
                                                          $full = false;
                                                          $diff->w = floor($diff->d / 7);
                                                          $diff->d -= $diff->w * 7;
                                                          $string = array(
                                                              'y' => 'year',
                                                              'm' => 'month',
                                                              'w' => 'week',
                                                              'd' => 'day',
                                                              'h' => 'hour',
                                                              'i' => 'minute',
                                                              's' => 'second',
                                                          );
                                                          foreach ($string as $k => &$v) {
                                                              if ($diff->$k) {
                                                                  $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                                                              } else {
                                                                  unset($string[$k]);
                                                              }
                                                          }
                                                          if (!$full) $string = array_slice($string, 0, 1);
                                                          echo $string ? implode(', ', $string) . ' ago' : 'just now';
                                              ?></span></div></li></a><i class="fa fa-circle pull-right read-notif" data-announcement-id="<?php echo $announcement['id']?>" title="Mark as read" ></i>

                                         
                                        
                                        
                                       <?php endif;?>
                                       <?php endforeach;?>
                                         <?php endif;?>
                                       
                                         
                                  
                                       </div>
                                   </ul>
                            </li>
                        </ul>
                    <?php endif;?>
                    </section>
              </div>
              <div class="col-lg-1">
                 <?php if(isset($id_number)):?>
                 <?php else: ?>
                   <h5 style="position: relative; top: 15px;">Hi, <?php echo $ojtFirstName;?></h5>
                 <?php endif; ?>
              </div>

              <div class="col-lg-1">
                 <?php if(isset($id_number)):?>
                 <?php else: ?>
                        <?php
                          $program = '';
                            if($user_data[0]['ojt_program'] == 'ojt_one'){
                              $program = 'OJT 1';
                            }else{
                               $program = 'OJT 2';
                            }
                          ?>
                   <h5 style="position: relative; top: 15px;">Trainee</h5>
                 <?php endif; ?>
              </div>

              <div class="col-lg-1">
                  <section class="dropdown-image">
                        <?php if(isset($id_number)):?>
                               <ul class="nav navbar-nav">
                                
                            <li class="dropdown">
                            

                                <?php if($supervisor_image->image_id == '<i class="fa fa-user-circle pull-right" style="font-size: 40px; margin-top: -5px;" aria-hidden="true"></i>'): ?>
                                  <a href="#" class="dropdown-toggle" style="margin-top: -10px;" id="dropdown-logout" data-toggle="dropdown">  <i class="fa fa-user-circle fa-3x"></i>

                                    </a>
                                     <ul class="dropdown-menu" style="margin-top: -5px;margin-left: -218px;" id="show-logout">
                                <li><a href="<?php echo base_url('supervisordashboard')?>">Dashboard<i class="fa fa-tachometer pull-right"></i></a></li>
                                <li class="divider"></li>
        
                                <li><a href="<?php echo base_url('changepassword') ?>">Change password <i class="fa fa-key pull-right" aria-hidden="true"></i></a></li>
                                <li class="divider"></li>
                    
                                <li><a href="<?php echo base_url()?>main/logout">Log Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
                              </ul>
                              <?php else: ?>

                              <a href="#" class="dropdown-toggle" style="margin-top: -10px;" id="dropdown-logout" data-toggle="dropdown"> 
                                <img src="<?php echo base_url().$supervisor_image->image_id;?>" class="pull-right circular-square user-image" style="width: 40px;height: 40px;margin-top: 5px;"></a>

                                 <ul class="dropdown-menu" style="margin-top: 11px;margin-left: -200px;" id="show-logout">
                                <li><a href="<?php echo base_url()?>main/supervisorDashboard">Dashboard<i class="fa fa-tachometer pull-right"></i></a></li>
                                <li class="divider"></li>
        
                                <li><a href="<?php echo base_url('changepassword') ?>">Change password <i class="fa fa-key pull-right" aria-hidden="true"></i></a></li>
                                <li class="divider"></li>
                    
                                <li><a href="<?php echo base_url()?>main/logout">Log Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
                              </ul>
                            <?php endif; ?>
                             
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
                                    <li><a href="<?php echo base_url('profile') ?>">Profile<i class="fa fa-user pull-right"></i></a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo base_url('dashboard') ?>">Dashboard<i class="fa fa-tachometer pull-right"></i></a></li>
                                    <li class="divider"></li>

                                    <li><a href="<?php echo base_url('changepassword') ?>">Change password <i class="fa fa-key pull-right" aria-hidden="true"></i></a></li>
                                    <li class="divider"></li>

                                    <li><a href="<?php echo base_url('logout') ?>">Log Out <i class="fa fa-sign-out pull-right"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    <?php endif;?>
                      </section>
              </div>
            </div>
        </div>
       
    </div>
    <div class="content">

      <?php if($rendered >= $total && $current_evaluations >= $all_evaluations): ?>
        <?php if($current_program == 'ojt_two'): ?>
            <?php else: ?>
           <div class="container" style="margin-top: 40px;">
            <div class="well" style="margin-bottom: 0;">
                <div class="row">
                    <div class="col-lg-8">
                        <div style="font-size: 15px;"><i class="fa fa-check" style="color: green;"></i>Congratulations! You have completed your OJT1. You can now proceed to OJT2.</div>
                       </div>
                        <div class="col-lg-2 col-lg-offset-2">
                            <div style="font-size: 15px;"><a href="#" class="proceed-ojt btn btn-success" style="padding: 2px; background: #43a047 !important;" class="btn btn-success">Proceed</a></div>
                        </div>
                
                </div>
            </div>
        </div>
          <?php endif; ?>
  <?php endif; ?>
      <?php if(isset($id_number)): ?>
    <?php else: ?>
      <?php if($checkEmail->status): ?>
      <?php else: ?>
    <div class="container" style="margin-top: 40px;">
        <div class="well" style="margin-bottom: 0;">
            <div class="row">
                <div class="col-lg-8">
                    <div style="font-size: 15px;"><i class="fa fa-exclamation-circle" aria-hidden="true" style="color: red"></i>You must verify your email before you can post any logs</div>
            </div>
                    <div class="col-lg-4">
                        <div style="font-size: 15px;">Not receiving your email? <a href="#" class="resend-email" data-email-address="<?php echo $checkEmail->email_address; ?>">Click here to resend</a></div>
                    </div>
            
            </div>
        </div>
    </div>
  <?php endif; ?>
<?php endif; ?>
        <div class="container">
          <?php echo $this->session->flashdata('Status'); ?>
            <div class="row">
            </div>
            <div class="dashboard-info-student well" <?php  if(isset($id_number)): ?> style="margin-top: 40px;" <?php else: ?><?php  if($checkEmail->status): ?> style="margin-top: 40px;" <?php  else: ?> style="margin-top: 20px;" <?php  endif;?> <?php endif; ?>">
                <div class="row">
                    <div class="col-lg-4">

                        <div class="dashboard-title hours">
                            <span>Number of hours rendered</span>
                            <div id="hoursProgress">

                            </div>
                            <?php if($rendered == 0 && $total == 0): ?>
                              <script type="text/javascript">
                                $(document).ready(function() {
                                    
                            
                                    // progressbar.js@1.0.0 version is used
                                    // Docs: http://progressbarjs.readthedocs.org/en/1.0.0/
                                    var bar = new ProgressBar.Circle(hoursProgress, {
                                        color: '#A55D35',
                                         text: {
                                            value: '0/0',
                                        },
                                        trailColor: '#eee',
                                        trailWidth: 1,
                                        duration: 1400,
                                        easing: 'easeInOut',
                                        strokeWidth: 6,
                                        text: {
                                            value: <?php echo $rendered?> + "/" + <?php echo $total?> + " " + 'hours',
                                        },
                                        from: {
                                            color: '#EECD86',
                                            a: 0
                                        },
                                        to: {
                                            color: '#B95835',
                                            a: 1
                                        },
                                        // Set default step function for all animate calls
                                        step: function(state, circle) {
                                            circle.path.setAttribute('stroke', state.color);
                                        }
                                    });
                                    bar.animate(<?php echo 0/1?>); // Number from 0.0 to 1.0
                                });
                            </script>
                            <?php else: ?>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    
                            
                                    // progressbar.js@1.0.0 version is used
                                    // Docs: http://progressbarjs.readthedocs.org/en/1.0.0/
                                    var bar = new ProgressBar.Circle(hoursProgress, {
                                        color: '#A55D35',
                                        trailColor: '#eee',
                                        trailWidth: 1,
                                        duration: 1400,
                                        easing: 'easeInOut',
                                        strokeWidth: 6,
                                        text: {
                                            value: <?php echo $rendered?> + "/" + <?php echo $total?> + " " + 'hours',
                                        },
                                        from: {
                                            color: '#EECD86',
                                            a: 0
                                        },
                                        to: {
                                            color: '#B95835',
                                            a: 1
                                        },
                                        // Set default step function for all animate calls
                                        step: function(state, circle) {
                                            circle.path.setAttribute('stroke', state.color);
                                        }
                                    });
                                    <?php if($rendered > $total): ?>
                                     bar.animate(1.0);
                                    <?php else: ?>
                                    bar.animate(<?php echo $rendered/$total?>); // Number from 0.0 to 1.0
                                    <?php endif; ?>
                                });
                            </script>
                          <?php endif; ?>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="dashboard-title evaluations">
                            <span>Evaluations</span>
                            <div id="progressEvaluations">

                            </div>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    // progressbar.js@1.0.0 version is used
                                    // Docs: http://progressbarjs.readthedocs.org/en/1.0.0/
                                    var bar = new ProgressBar.Circle(progressEvaluations, {
                                        strokeWidth: 6,
                                        easing: 'easeInOut',
                                        duration: 1400,
                                        text: {
                                            value: <?php echo $current_evaluations?> + "/" + <?php echo $all_evaluations?> + " " + 'evaluations',
                                        },
                                        from: {
                                            color: '#EECD86',
                                            a: 0
                                        },
                                        to: {
                                            color: '#B95835',
                                            a: 1
                                        },
                                        // Set default step function for all animate calls
                                        step: function(state, circle) {
                                            circle.path.setAttribute('stroke', state.color);
                                        },
                                        color: '#A55D35',
                                        trailColor: '#eee',
                                        trailWidth: 1,
                                        svgStyle: null
                                    });
                                    bar.animate(<?php echo $current_evaluations/$all_evaluations?>); // Number from 0.0 to 1.0
                                });
                            </script>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="dashboard-title logs">
                            <span>Verified Logs</span>
                            <div id="verifiedLogs">
                            </div>
                            <?php if(empty($verified) && empty($totalLogs)):?>
                                <script type="text/javascript">
                                $(document).ready(function() {
                                    var bar = new ProgressBar.Circle(verifiedLogs, {
                                        strokeWidth: 6,
                                        easing: 'easeInOut',
                                        duration: 1400,
                                        text: {
                                            value: '0/0',
                                        },
                                        from: {
                                            color: '#EECD86',
                                            a: 0
                                        },
                                        to: {
                                            color: '#B95835',
                                            a: 1
                                        },
                                        // Set default step function for all animate calls
                                        step: function(state, circle) {
                                            circle.path.setAttribute('stroke', state.color);
                                        },
                                        color: '#A55D35',
                                        trailColor: '#eee',
                                        trailWidth: 1,
                                        svgStyle: null
                                    });
                                    bar.animate(<?php echo 0/1?>); // Number from 0.0 to 1.0
                                });
                            </script>
                            <?php else:?>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    var bar = new ProgressBar.Circle(verifiedLogs, {
                                        strokeWidth: 6,
                                        easing: 'easeInOut',
                                        duration: 1400,
                                        text: {
                                            value: <?php echo $verified?> + "/" + <?php echo $totalLogs;?> + " " + 'logs',
                                        },
                                        from: {
                                            color: '#EECD86',
                                            a: 0
                                        },
                                        to: {
                                            color: '#B95835',
                                            a: 1
                                        },
                                        // Set default step function for all animate calls
                                        step: function(state, circle) {
                                            circle.path.setAttribute('stroke', state.color);
                                        },
                                        color: '#A55D35',
                                        trailColor: '#eee',
                                        trailWidth: 1,
                                        svgStyle: null
                                    }); 
                                    bar.animate(<?php echo $verified/$totalLogs?>); // Number from 0.0 to 1.0
                                });
                            </script>
                        <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                  <?php if(isset($id_number)): ?>
                  <?php else: ?>
                    <div class="panel panel-default">
                        <div class="panel-heading" style="text-align: center;">OJT Workmates</div>
                        <div class="panel-body" style="text-align: center">
                          <?php if(empty($workmates)): ?>
                            <?php if(isset($id_number)): ?>
                                <h5 style="color: #8b8f92">This student has no OJT workmates.</h5>
                            
                            <?php else: ?>
                            <h5 style="color: #8b8f92">You have no OJT workmates.</h5>
                          <?php endif;   ?>
                          
                          <?php else: ?>
                         
                          <?php foreach($workmates as $workmate):?>
                          <div class="row">
                            <div class="col-lg-7">
                              
                              <h5><?php echo $workmate['first_name'] . " " . $workmate['middle_initial'] . ". " . $workmate['last_name'] ?></h5>
                            
                            </div>
                              <div class="col-lg-4">
                               <a href="<?php echo base_url('workmate') ?>/<?php echo $workmate['id_number']?>" style="font-size: 12px;"> View dashboard</a>
                              </div>
                          </div>
                          <?php endforeach;?>
                           <?php endif; ?>
                        </div>
                    </div>
                  <?php endif; ?>
                </div>
                <div class="col-lg-8">
                    <?php if(isset($id_number)): ?>
                    <?php else:?>
                    <div class="logs-students">
                        
                          <div class="panel-heading">
                            <div class="logs-title">
                                <span>Create a log <i class="fa fa-paper-plane-o" aria-hidden="true"></i></span>
                            </div>
                          </div>  
                          <div class="well" style="padding: 0;">
                            <form class="logs-display" id="addLogs">
                                <div class="row logs-upper">
                                    <div class="col-lg-6" style="padding-left: 30px;">

                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="date" class="form-control" required value="<?php echo date('Y-m-d')?>" name="log_date" id="log_date">
                                            <label>Division</label>
                                            <input type="text" class="form-control" required name="division" id="division">
                                            <label>Deparment/Area</label>
                                            <input type="text" class="form-control" required name="department" id="department">
                                            <label>Designation</label>
                                            <input type="text" class="form-control" required name="designation" id="designation">
                                            <input type="hidden" name="supervisor_id" value="<?php echo (empty($supervisor_id->supervisor_id) ? '' : $supervisor_id->supervisor_id); ?>">
                                        </div>

                                    </div>
                                    <div class="col-lg-6" style="padding-right: 30px;">
                                        <div class="form-group">
                                            <label>Time In</label>
                                            <input type="time" class="form-control" name="time_in" id="time_in" required>
                                            <label>Time Out</label>
                                            <input type="time" class="form-control" name="time_out" id="time_out" required>
                                            <label>Hours Rendered</label>
                                            <input type="text" class="form-control" name="hours_rendered" onkeypress='return event.charCode >= 48 && event.charCode <= 57' id="hours_rendered" required>

                                            <input type="hidden" name="id_number" value="<?php echo $this->session->userdata['id_number']?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-right: 15px; padding-left: 15px; padding-top: 15px;">
                                    <textarea name="log_activity" rows="3" id="log_activity" placeholder="Write your log here" class="form-control" required></textarea>
                                </div>
                                <?php if($checkEmail->status): ?>
                                <div class="form-group logs-lower">
                                    <button type="submit" id="submit_log"  class="btn btn-primary btn-md" value="Submit" style="float: left; margin-left: 15px;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Post</button>
                                    <button type="button" <?php echo (empty($logs_list)) ? 'disabled' : '' ?> class="btn btn-success btn-md" id="load_last_log" style="margin-left: 5px;"><i class="fa fa-history" aria-hidden="true"></i> Load last log</button>
                                    <button type="reset" class="btn btn-default btn-md"><i class="fa fa-eraser" aria-hidden="true"></i>Clear</button>
                                    <button type="button" class="btn btn-danger cancel-btn btn-md" style="float: right; margin-right: 15px;" class="btn btn-danger"></i> Cancel</button>
                                </div>
                              <?php else: ?>
                              <?php endif; ?>



                            </form>
                        </div>
                    </div>
                <?php endif;?>
                    <?php if(empty($logs_list)):?>
                        <?php if(isset($id_number)):?>
                         <?php echo 'This student has not posted a log yet';?>
                     <?php else:?>
                          <?php echo 'You have not posted a log yet';?>   
                    <?php endif;?>
                <?php else:?>

                    <?php foreach($logs_list as $log):?>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="well" style="padding-bottom: 0; padding-top: 5px;">
                                    <span class="user-name" style="font-size: 15px;"><?php echo $user_data[0]['first_name'] . " " . $user_data[0]['last_name']?></span>
                                    <?php if(isset($id_number)):?>
                                    <?php else:?>
                                    <div class="dropdown" style="float: right; width:20px;">
                                        <a href="#" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <i style="color: #000000; font-size: 15px;" class="fa fa-angle-down"></i>
                                        </a>

                                        <ul class="dropdown-menu" style="width: 233px;margin-top: 2px;margin-left: -202px;" aria-labelledby="dropdownMenu2">
                                            <li><a href="#" class="edit-log" style="color: #000000;">Edit <i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                            <li role="separator" class="divider"> </li>
                                            <li><a href="#" class="delete-log" data-log-id="<?php echo $log['id']?>" style="color: #000000;">Delete <i class="fa fa-trash"></i></a></li>
                                             <li role="separator" class="divider"> </li>
                                            <li><a href="#" class="load-log" data-log-id="<?php echo $log['id']?>" style="color: #000000;">  Load log <i class="fa fa-sticky-note" aria-hidden="true"></i> </a></li>
                                        </ul>

                                    </div>
                                <?php endif;?>

                                    <hr style="margin-bottom: 0; margin-top: 5px;">

                                    <form method="post">
                                        <div class="row">
                                            <div class="logs-lists">
                                                <span class="show-more-info" style="float: right; cursor: pointer; font-size: 12px; text-decoration: underline; margin-right: 20px;
                                                ">Show more</i></span>

                                                 <span class="show-less-info" style="float: right; display: none; margin-right: 20px; cursor: pointer; text-decoration: underline; font-size: 12px;">Show less</i></span>
                                                <div class="col-lg-6">

                                                    <div class="form-group show-more-right" style="display: none;">
                                                        <label>Date</label>
                                                        <input type="text" class="list-logs date_listed" name="log_list_date" id="log_list_date" value="<?php echo date('F d Y',strtotime($log['date']))?>" readonly>
                                                        <label>Division</label>
                                                        <input type="text" class="list-logs division_listed" name="log_list_division" id="log_list_division" value="<?php echo $log['division']?>" readonly>
                                                        <label>Deparment/Area</label>
                                                        <input type="text" class="list-logs department_listed" name="log_lists_department" value="<?php echo $log['department']?>" id="log_lists_department" readonly>
                                                        <label>Designation</label>
                                                        <input type="text" class="list-logs designation_listed" value="<?php echo $log['designation']?>" name="log_lists_designation" id="log_lists_designation" readonly>
                                                    </div>
                                                    <label>Activity</label>
                                                      
                                                </div>

                                                   
                                                     

                                                <div class="col-lg-6">
                                                    <div class="form-group show-more-left" style="display: none;">
                                                        <label>Time In</label>
                                                        <input type="time" class="list-logs time_in_listed" name="log_lists_time_in" value="<?php echo $log['time_in']?>" id="log_lists_time_in" readonly>
                                                        <label>Time Out</label>
                                                        <input type="time" class="list-logs time_out_listed" name="log_lists_time_out" value="<?php echo $log['time_out']?>" id="log_lists_time_out" readonly>
                                                        <label>Hours Rendered</label>
                                                        <input type="text" class="list-logs hours_listed" name="log_lists_hours_rendered" id="log_lists_hours_rendered" value="<?php echo $log['hours_rendered']?>" readonly>

                                                    </div>

                                                   
                                                  
                                                </div>
                                                   
                                                 <textarea spellcheck="false" class="list-logs activity_listed" name="log_lists_activity" id="log_lists_activity" placeholder="Write your log here" readonly><?php echo $log['log_content']?></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="save-edit" style="display: none;">
                                            <button type="button" data-log-id="<?php echo $log['id']?>" class="save-edit-log btn btn-success">Save</button>
                                            <button type="button" class="cancel-edit btn btn-danger" class="btn btn-danger">Cancel</button>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                    <hr style="margin-bottom: 0; margin-top: 0;">
                                                    <?php if (empty($log['supervisor_id'])):?>
                                                        <span style="font-size: 11px; float: right; margin-top: 15px;"> Unsupervised  <i class="fa fa-user-times" aria-hidden="true"></i></span>

                                                    <?php else:?>

                                                    <?php if($log['verified']):?>
                                                        <span style="color:green; font-size: 11px; float: right; margin-top: 15px;"> Verified  <i style="color: green;" class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                    <?php else:?>
                                                     <span style="font-size: 11px; float: right; margin-top: 15px;"> Pending  <i class="fa fa-circle-thin" aria-hidden="true"></i></span>
                                                    <?php endif;?>
                                                  <?php endif;?>
                                                    <?php if(in_array($log['id'], array_column($comments, 'log_id'))):?>  
                                                         <label>Comments</label>

                                                          <?php foreach ($comments as $comment):?>
                                                    <?php if($log['id'] == $comment['log_id']):?>

                                                        <!-- <div class="well" style="box-shadow: none; border: none; background: #f7f7f7; padding: 10px; margin-bottom: 10px;"> -->
                                                         <div class="comments-list" style="font-size: 12px; margin-bottom: 10px;">

                                                              <b><?php echo $supervisorname->name ?></b> <?php echo $comment['content'];?>
                                                          </div>
                                                        
                                                    <?php endif;?>
                                              
                                                    <?php endforeach;?>
                                                    <?php endif;?>


                                                   

                                                   <?php if(!in_array($log['id'], array_column($comments, 'log_id'))):?>  
                                                        
                                                     <label>Comments</label>
                                                        <span style="font-size: 11px;">No comments</span>
                                                        
                                                   <?php endif;?>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    <?php endif;?>
                                
                </div>

            </div>
            <!-- LOGSSSSS LISSSSSTTTT -->

        </div>

    </div>

    </div>
  
</body>
   <script type="text/javascript">
             $(document).ready(function() {
                $("#notification-body").on("click",'.view-notif', function(e) {
                   e.preventDefault();
                    $(this).simplePopup({ type: "html", htmlSelector: "#popup1" });
                });

                $(document).on('click', '.proceed-ojt', function(e){
                    e.preventDefault();
                    swal({
                        title: "Are you in the same company?",
                        icon: "info",
                        buttons: true,
                        buttons: ["No", "Yes"],
                        dangerMode: true,
                      })
                      .then((sameCompany) => {
                        if (sameCompany) {
                           $.ajax({
                              url: 'changeOjtStatusSameCompany',
                              type: 'POST',
                              data:{
                                'ojt_status': 'ojt_two',
                              },
                              success: function(data){
                                  location.reload();
                              }
                           });
                        }else{
                            location.href="newcompany";
                        }
                      });

                });
            });
        
        </script>
<script type="text/javascript">
    $("#dropdown-notification").click(function() {
       $("#show-notifications").toggle();
       $("#show-logout").hide();
        $('.user-image').removeClass('clickBorder');
    });
    $("#dropdown-logout").click(function() {
       $("#show-logout").toggle();
       $('.user-image').toggleClass('clickBorder');
       $("#show-notifications").hide();
    });

    $('.resend-email').click(function(e){
      // alert('yoshee');
      e.preventDefault();
      var email = $(this).data('email-address');
      $.ajax({
        url: 'resendEmail',
        method: 'POST',
        data: {
          'email': email,
        },
        success: function(){
          swal({
           title: "Success!",
           text: "Email sent",
           icon: "success",
          }).then(function () {
            location.reload();
          });
        }
      });
    });

    // $('#time_out').blur(function(){ 
    //      var diff = ( new Date("1970-1-1 " + $('#time_out').val()) - new Date("1970-1-1 " + $('#time_in').val()) ) / 1000 / 60 / 60;

    //      alert(diff);
    // })
</script>

<script type="text/javascript">
    $("#log_activity").click(function() {
        $('.logs-upper').slideDown();
        $('.logs-lower').slideDown();
    });
    $(".cancel-btn").click(function() {
        $('.logs-upper').slideUp();
        $('.logs-lower').slideUp();
    });
</script>
<script type="text/javascript">
    $('.delete-log').click(function(e) {
        e.preventDefault();
        var log_id = $(this).data('log-id');
        var row = $(this).closest('.well');
        swal({
            title: "Are you sure you want to delete log?",
            icon: "warning",
            buttons: true,
            buttons: ["No", "Yes"],
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                  method: 'POST',
                  url: '<?php echo base_url('deleteLog') ?>',
                  data:{
                      'log_id': log_id,
                  },
                  success: function(){
                      row.fadeOut();
                  }
              });
            }
          });
        
    });
    $('.load-log').click(function(e){
      e.preventDefault();
       var log_id = $(this).data('log-id');

       $.ajax({
          url: '<?php echo base_url('loadSpecificLog') ?>',
          method: 'POST',
          data:{
            'log_id': log_id,
          },

          success: function(data){
            var logdata = JSON.parse(data);
             $('html,body').animate({ scrollTop: 0 }, 'slow');
              $('.logs-upper').slideDown();
        $('.logs-lower').slideDown();
               // console.log(logdata.division);
                $('#division').val(logdata.division);
                $('#department').val(logdata.department);
                $('#designation').val(logdata.designation);
                $('#time_in').val(logdata.time_in);
                $('#time_out').val(logdata.time_out);
                $('#hours_rendered').val(logdata.hours_rendered);
                $('#log_activity').val(logdata.log_content);

          }

       });

       // alert(log_id);
    });
  
    $('.edit-log').click(function(e) {
        e.preventDefault();
        var input = $(this).closest(".row").find(".list-logs");
        var buttons = $(this).closest(".row").find(".save-edit");
        // var dateField = $(this).closest(".row").find("#log_list_date");
        // var dateFieldVal = $(this).closest(".row").find("#log_list_date").val();
        //   document.getElementById('log_list_date').type = 'date';
        //   document.getElementById('log_list_date').value = dateFieldVal;

        buttons.show();
        input.prop('readonly', false);
        input.css('border', '1px solid #CCCCCC');
        input.css('background', '#F4F4F4');
    });
</script>

<script type="text/javascript">
    $('.cancel-edit').click(function() {
       var input = $(this).closest(".row").find(".list-logs");
        var buttons = $(this).closest(".row").find(".save-edit");
        var currentform = $(this).closest('form');
        buttons.hide();
        input.prop('readonly', true);
        input.css('border', 'none');
        input.css('background', 'none');
        // currentform.trigger('reset');
    });
    $('.save-edit-log').click(function(){
         var log_id = $(this).data('log-id');
         var date = $(this).closest(".row").find(".date_listed").val();
         var time_in = $(this).closest(".row").find(".time_in_listed").val();
         var time_out = $(this).closest(".row").find(".time_out_listed").val();
         var division = $(this).closest(".row").find(".division_listed").val();
         var department = $(this).closest(".row").find(".department_listed").val();
         var designation = $(this).closest(".row").find(".designation_listed").val();
         var log_activity = $(this).closest(".row").find(".activity_listed").val();
         var hours_rendered = $(this).closest(".row").find(".hours_listed").val();
         var input = $(this).closest(".row").find(".list-logs");
         var buttons = $(this).closest(".row").find(".save-edit");
         
      
        $.ajax({
            method:'POST',
            url:'<?php echo base_url('editLog') ?>',
            data: {
                'log_id': log_id,
                'date' : date,
                'time_in': time_in,
                'time_out': time_out,
                'division': division,
                'department':department,
                'designation':designation,
                'log_activity':log_activity,
                'hours_rendered': hours_rendered,
            },
            success: function(data){
                   input.prop('readonly', true);
                    input.css('border', 'none');
                    input.css('background', '#fff');
                    buttons.hide();
                // location.reload(true);
            }
        });
    });
</script>


<script type="text/javascript">
    $('.show-more-info').click(function(){
        var right = $(this).closest('.row').find('.show-more-right');
        var left = $(this).closest('.row').find('.show-more-left');
        var show_less = $(this).closest('.row').find('.show-less-info');
        right.show();
        left.show();
        $(this).hide();
        show_less.show();
       
    });
    $('.show-less-info').click(function(){
        var right = $(this).closest('.row').find('.show-more-right');
        var left = $(this).closest('.row').find('.show-more-left');
        right.hide();
        left.hide();
        $(this).hide();
        $('.show-more-info').show();
       
    });
</script>

<script type="text/javascript">
  $(document).on('click','.view-notif',function(e){
    //e.preventDefault();
    var announcement_id = $(this).data('announcement-id');
    $.ajax({
      url: '<?php echo base_url('main/getAnnouncement')?>',
      method: 'POST',
      data:{
        'announcement_id': announcement_id,
      },
      success:function(data){
        var announce = JSON.parse(data);
        $('.content-announcement').html(announce.content);
        //var full_date = announce.date_posted;
       var date = new Date(announce.date_posted), y = date.getFullYear(), m = date.getMonth(), d = date.getDate();
       var actual_date = new Date(y, m, d).toString().split(' ').slice(0,3).join(' ');
        $('.date_posted').html(actual_date);
      }
    });
    var currentNotif = $(this).closest('.wrap-notif').find('.view-notification');
    $.ajax({
      url: '<?php echo base_url('main/updateAnnouncemment')?>',
      method: 'POST',
      data:{
        'announcement_id': announcement_id,
      },
      success: function(data){
         $('#notification-body').load(location.href + " #notification-body");
         $('#countUnread').load(location.href + " #countUnread");
      }
    });
    //alert(announcement_id);
  });
</script>

<script type="text/javascript">
    $('#load_last_log').click(function(){
        $.ajax({
            url: '<?php echo base_url()?>main/getLastLog',
            method: 'POST',
            data:{
                'username': '<?php echo $this->session->userdata['id_number']?>',
            },
            success: function(data){
                var logdata = JSON.parse(data);
               // console.log(logdata.division);
                $('#division').val(logdata.division);
                $('#department').val(logdata.department);
                $('#designation').val(logdata.designation);
                $('#time_in').val(logdata.time_in);
                $('#time_out').val(logdata.time_out);
                $('#hours_rendered').val(logdata.hours_rendered);
                $('#log_activity').val(logdata.log_content);
            },
        });
    });
</script>
<?php if(isset($id_number)):?>
<?php else:?>
<script type="text/javascript">
        var observe;
        if (window.attachEvent) {
            observe = function (element, event, handler) {
                element.attachEvent('on'+event, handler);
            };
        }
        else {
            observe = function (element, event, handler) {
                element.addEventListener(event, handler, false);
            };
        }
        function init () {
            var text = document.getElementById('log_activity');
            function resize () {
                text.style.height = 'auto';
                text.style.height = text.scrollHeight+'px';
            }
            /* 0-timeout to get the already changed text */
            function delayedResize () {
                window.setTimeout(resize, 0);
            }
            observe(text, 'change',  resize);
            observe(text, 'cut',     delayedResize);
            observe(text, 'paste',   delayedResize);
            observe(text, 'drop',    delayedResize);
            observe(text, 'keydown', delayedResize);
            text.focus();
            text.select();
            resize();
        }
  
</script>
<?php endif;?>

<script type="text/javascript">
    $(document).ready(function(){
      $('.activity_listed').each(function () {
          this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
        }).on('input', function () {
          this.style.height = 'auto';
          this.style.height = (this.scrollHeight) + 'px';
        });
    });
</script>

<script type="text/javascript">
  $(document).ready(function(){
      $("#btn-report").click(function(){
          swal({
              title: "You have Successfully reported a bug",
              text: "We will review your report",
              icon: "success",
            });
      });
  });
</script>
<script type="text/javascript">
  $('#submit_log').click(function(e){
    e.preventDefault();
    var date = $('#log_date').val();
    var date_now = '<?php echo date('Y-m-d') ?>';
    var hours = $('#hours_rendered').val();
    var data = $('#addLogs').serialize();
    var fail = false;
     var fail_log = '';
    $( '#addLogs' ).find( 'input[type=text], input[type=date], input[type=time], textarea' ).each(function(){
            if( ! $( this ).prop( 'required' )){

            } else {
                if ( ! $( this ).val() ) {
                    fail = true;
                    name = $( this ).attr( 'style', 'border: 1px solid red' );
                    fail_log += name + " is required ";
                }else{
                    name = $( this ).attr( 'style', 'border: 1px solid #ccc' );
                }

            }
        });
  if(!fail){
    if(date > date_now){ 
      swal('Oops...','You are not from the future.','error');return false;
    }else{

	  if(hours > 8 ){
	  	 swal('Oops...','You are only allowed to render 8 hours of work.','error');return false;
	  }else{
	  	 $.ajax({
        url:'addLogs',
        method: 'POST',
        data:data,
        success: function(data){
          if($.trim(data) == 'dateexist'){
            swal('Oops...','You already posted a log in this date','error');return false;
          }else{
            location.reload();
          }
          
        }
      });
	  }    	
     
    }
  }else{
    return false;
  }
    
  });
  $(document).ready(function(){
        setInterval(function(){ 
          // $('title').load(location.href + " title")
          
          $('#notification-body').load(location.href + " #notification-body");
          $('#countUnread').load(location.href + " #countUnread");
          
     }, 5000);    
      
    
    
      $(document).on('click', '.read-notif',function(){
      var announcement_id = $(this).data('announcement-id');
      $.ajax({
       url:'<?php echo base_url('main/updateAnnouncemment')?>',
       method: 'POST',
       data:{
          'announcement_id': announcement_id,
       },
       success:function(){
          // /currentNotif.css("background-color",'#FFF');
          $('#notification-body').load(location.href + " #notification-body");
          $('#countUnread').load(location.href + " #countUnread");
          
       }
    });
  });
  $(document).on('click','.unread-notif',function(){
    var announcement_id = $(this).data('announcement-id');
    $.ajax({
       url:'<?php echo base_url('main/updateAnnouncemmentToUnread')?>',
       method: 'POST',
       data:{
          'announcement_id': announcement_id,
       },
       success:function(){
          //currentNotif.css("background-color",'#EDF2FA');
          $('#notification-body').load(location.href + " #notification-body");
       }
    });
  });
   $(document).on('click','.as-all-read',function(e){
    e.preventDefault();
    var announcement_id = $(this).data('announcement-id');
    $.ajax({
       url:'<?php echo base_url('main/updateAnnouncemmentToUnreadAll')?>',
       method: 'POST',
       data:{
          'username': '<?php echo $this->session->userdata['id_number']?>',
       },
       success:function(){
          //currentNotif.css("background-color",'#EDF2FA');
          $('#notification-body').load(location.href + " #notification-body");
       }
    });
  });
  });
</script>
</html>
