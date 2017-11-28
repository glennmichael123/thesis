
    
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
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <script src="<?php echo base_url()?>assets/js/progressbar/dist/progressbar.js"></script>
    <script src="<?php echo base_url()?>assets/js/progressbar/dist/progressbar.min.js"></script>

    <style type="text/css">
        *{
            font-family: 'Roboto', sans-serif;
        }
        body {
            background-color: #F4F4F4;
        }
        .top{
            margin-top: 10px;
        }
        .well{
            background: none;
            border-radius: 0;
            background-color: #FFFFFF;
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
        }
        
        .dropdown ul.dropdown-menu {
            border-radius: 4px;
            box-shadow: none;
            margin-top: 11px;
            margin-left: -198px;;
            width: 280px;
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
          .dashboard-title {
            font-size: 15px;
            font-weight: 600;
            text-align: center;
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
            height: 70px;
            margin-left: 105px;
            text-align: center;
        }
        
        #verifiedLogs {
            margin: 20px;
            width: 150px;
            height: 150px;
            margin-left: 100px;
        }
        .navbar-inverse{
            background-color: #e5a700 !important;
            background-image: none;
            border: none;
            border-bottom: 2px solid #800000;
            border-radius: 0px;

        }
          .profile-image>img.img-circle{
            width: 150px;
            height: 150px;
            border: 3px solid #b5292d;
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

  label {
            display: block;
            margin-top: 10px;
            font-size: 13px;
            color:#000;
        }

        .logs-lists label {
            font-size: 15px;
        }
        
        .logs-lists input {
            font-size: 15px;
            border: none;
            background-color: #fff;
        }

        .list-logs{
            color: #000;
        }

        .circular-square {
  border-top-left-radius: 50% 50%;
  border-top-right-radius: 50% 50%;
  border-bottom-right-radius: 50% 50%;
  border-bottom-left-radius: 50% 50%;
    }
    .dropdown-menu .divider{
  margin: 0;
}

        
        

    </style>

    <title></title>
</head>
<body>
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="logo"><img src="<?php echo base_url();?>assets/images/logo.png" style="width: 120px;"></div>
                    </div>
                    <div class="col-lg-7">
                    </div>
              <div class="col-lg-1">
              

                          <ul class="nav navbar-nav">
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" id="dropdown-logout" data-toggle="dropdown"><img src="<?php echo base_url();?>/assets/images/snow.jpg" class="pull-right circular-square" style="width: 40px; height: 40px; margin-top: -14px;"> </a>
                              <ul class="dropdown-menu" id="show-logout">
                                <li><a href="#">Dashboard<i class="fa fa-tachometer pull-right"></i></a></li>
                                <li class="divider"></li>
        
                                <li><a href="<?php echo base_url()?>changepassword">Change password <i class="fa fa-key pull-right" aria-hidden="true"></i></a></li>
                                <li class="divider"></li>
                    
                                <li><a href="<?php echo base_url()?>logout">Log Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
                              </ul>
                            </li>
                          </ul>
                    </div>

              </div>
                    
                  
                    
                </div>
            </div>
    <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="well top">
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
                                    bar.animate(<?php echo $rendered/$total?>); // Number from 0.0 to 1.0
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
                                    var bar = new ProgressBar.SemiCircle(progressEvaluations, {
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
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="well">
                            <div class="profile-container" style="text-align: center;">
                                
                                    <div class="profile-image">
                                        
                                        <?php if($personalDetails[0]['image_id'] == '<i class="fa fa-user-circle fa-5x" style="font-size: 150px;" aria-hidden="true"></i>'):?>
                                            <?php echo $personalDetails[0]['image_id'];?>
                                             <img id="img_change" class="img-circle" src="" style="display: none;">
                                        <?php else:?>
                                            <img id="img_change" src="<?php echo base_url().$personalDetails[0]['image_id']?>" class="img-circle">
                                            
                                        <?php endif; ?>
                                       
                                        
                                    </div>
                                   
                                    <div class="profile-name" style="margin-top: 10px;">
                                        <div class="label label-default"><?php echo $personalDetails[0]['first_name']." ".$personalDetails[0]['middle_initial']." ".$personalDetails[0]['last_name'];?>
                                        </div>
                                    </div>
                                   
                            </div>
                        </div>    
                        <div class="well" style="color: #000; padding-top: 0;">
                        <div class="row">
                             <div class="col-lg-12" style="text-align: center;">
                                <h4>Personal Information</h4>
                             </div>
                         </div>
                         <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Course</label>
                                 </div>
                                 <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo $personalDetails[0]['course']?></span>
                                 </div>
                            </div>
                            <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">College</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo $personalDetails[0]['college']?></span>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Year</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo $personalDetails[0]['year']?></span>
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Phone or Landline</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;">09xx</span>
                                 </div>
                             </div>

                              <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Present Address</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo $personalDetails[0]['present_address'] ?></span>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Permanent Address</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo $personalDetails[0]['permanent_address'] ?></span>
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Date of Birth</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo $personalDetails[0]['date_of_birth'] ?></span>
                                 </div>
                             </div>

                               <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Email Address</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo $personalDetails[0]['email_address'] ?></span>
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Status</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo $personalDetails[0]['status']?></span>
                                 </div>
                             </div>


                             <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Religion</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo $personalDetails[0]['religion'] ?></span>
                                 </div>
                             </div>


                             <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Citizenship</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo $personalDetails[0]['citizenship'] ?></span>
                                 </div>
                             </div>


                             <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Age</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo '12' ?></span>
                                 </div>
                             </div>


                             <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Blood Type</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo $personalDetails[0]['blood_type'] ?></span>
                                 </div>
                             </div>
                              <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Height</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo $personalDetails[0]['height'] ?></span>
                                 </div>
                             </div>
                              <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Weight</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo $personalDetails[0]['weight'] ?></span>
                                 </div>
                             </div>
                             
                         </div>
                       
                    </div>
                    <div class="col-lg-8">
                         <?php foreach($logs_list as $log):?>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="well" style="padding-bottom: 0; padding-top: 5px; color:#000;">
                                    <span class="user-name" style="font-size: 15px; color: #000;"><?php echo $user_data[0]['first_name'] . " " . $user_data[0]['last_name']?></span>

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
                                                        <input type="text" class="list-logs date_listed" name="log_list_date" id="log_list_date" value="<?php echo $log['date']?>" readonly>
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
                                                    <?php if($log['verified']):?>
                                                        <span style="color:green; font-size: 11px; float: right; margin-top: 15px;"> Verified  <i style="color: green;" class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                    <?php else:?>
                                                     <span style="font-size: 11px; float: right; margin-top: 15px;"> Pending  <i class="fa fa-circle-thin" aria-hidden="true"></i></span>
                                                    <?php endif;?>
                                                    <?php if(in_array($log['id'], array_column($comments, 'log_id'))):?>  
                                                         <label >Comments</label>
                                                         <?php endif;?>


                                                    <?php foreach ($comments as $comment):?>
                                                    <?php if(in_array($log['id'], $comment)):?>

                                                        <!-- <div class="well" style="box-shadow: none; border: none; background: #f7f7f7; padding: 10px; margin-bottom: 10px;"> -->
                                                         <div class="comments-list" style="font-size: 12px; margin-bottom: 10px; color: #000;">
                                                              <b>Supervisor</b> <?php echo $comment['content'];?>
                                                          </div>
                                                        
                                                    <?php endif;?>
                                              
                                                    <?php endforeach;?>

                                                   <?php if(!in_array($log['id'], array_column($comments, 'log_id'))):?>  
                                                        
                                                     <label>Comments</label>
                                                        <span style="font-size: 11px; color:#000;">No comments</span>
                                                        
                                                   <?php endif;?>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
     </div>                         
                                        
                           
     

       




    
       
</body>
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


</html>