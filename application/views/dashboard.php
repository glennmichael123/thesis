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

    <script src="<?php echo base_url()?>assets/js/progressbar/dist/progressbar.js"></script>
    <script src="<?php echo base_url()?>assets/js/progressbar/dist/progressbar.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <style type="text/css">
        .top {
            background-color: #915B51;
            height: 50px;
        }
        
        * {
            font-family: Roboto, sans-serif;
        }
        
        .header {
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
            border-radius:0px;
            box-shadow: none;
            margin-top: 20px;
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
        
        
      /*  
        li > .notifications {
            padding-left: 20px;
            color: #915B51;
            padding-top: 10px;
            width: 280px;
            display: inline-block;
        }
        
       
        
      
        */

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
        
        .circular-square {
            border-top-left-radius: 50% 50%;
            border-top-right-radius: 50% 50%;
            border-bottom-right-radius: 50% 50%;
            border-bottom-left-radius: 50% 50%;
        }
        
        .content {
            padding-top: 50px;
            padding-bottom: 50px;
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
            height: 80px;
        }
        
        .logs-upper,
        .logs-lower {
            display: none;
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
        li.view-notification{
            background-color: #EDF2FA;
        }

    </style>
    <title></title>

</head>

<body>

    <div class="page-wrap">
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <div class="logo"><img src="<?php echo base_url();?>assets/images/logo.png" style="width: 120px;"></div>
                    </div>
                    <div class="col-lg-7 col-sm-7">
                        
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" id="dropdown-notification" data-toggle="dropdown"><i class="pull-right fa fa-bell-o fa-2x" style="width: 40px; height: 40px; margin-top: 0px;"></i> </a>
                                
                                <ul class="dropdown-menu" id="show-notifications" style="position: absolute; top: 35px; left: -63px; width: 340px;">
                                
                                         <li><div class="notification-title">Notifications <a href="#" class="as-all-read pull-right">Mark all as read</a></div></li>
                                         <li class="divider"></li>
                                <?php for($i=1; $i<=3; $i++):?>
                                         <a href="#" class="view-notif"><li class="view-notification"><div class="notifs">Lfeliz posted announcement <i class="fa fa-check pull-right" title="Mark as read"></i></div></li></a>
                                         <li class="divider"></li>
                                <?php endfor;?>    

                                   </ul>
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-1 col-sm-1">

                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" id="dropdown-logout" data-toggle="dropdown"><img src="<?php echo base_url();?>/assets/images/snow.jpg" class="pull-right circular-square" style="width: 40px; height: 40px; margin-top: -5px;"> </a>
                                
                                <ul class="dropdown-menu" id="show-logout">
                                    <li><a href="#">Jon Snow <i class="fa fa-user pull-right"></i></a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Dashboard<i class="fa fa-tachometer pull-right"></i></a></li>
                                    <li class="divider"></li>

                                    <li><a href="changepassword">Change password <i class="fa fa-key pull-right" aria-hidden="true"></i></a></li>
                                    <li class="divider"></li>

                                    <li><a href="index">Log Out <i class="fa fa-sign-out pull-right"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h2 style="padding:0px 0px 20px 0px;">Dashboard</h2>
                </div>

            </div>
            <div class="dashboard-info-student well">
                <div class="row">
                    <div class="col-lg-4">

                        <div class="dashboard-title hours">
                            <span>Number of hours rendered</span>
                            <div id="hoursProgress">

                            </div>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    
                                

                                    // progressbar.js@1.0.0 version is used
                                    // Docs: http://progressbarjs.readthedocs.org/en/1.0.0/

                                    var bar = new ProgressBar.Circle(hoursProgress, {
                                        color: '#53b1e0',
                                        trailColor: '#eee',
                                        trailWidth: 1,
                                        duration: 1400,
                                        easing: 'bounce',
                                        strokeWidth: 6,
                                        text: {
                                            value: <?php echo $rendered?> + "/" + <?php echo $total?> + " " + 'hours',
                                        },
                                        from: {
                                            color: '#9ebdef',
                                            a: 0
                                        },
                                        to: {
                                            color: '#65f771',
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
                                        easing: 'bounce',
                                        duration: 1400,
                                        text: {
                                            value: <?php echo $now?> + "/" + <?php echo $all?> + " " + 'evaluations',
                                        },
                                        from: {
                                            color: '#FFEA82',
                                            a: 0
                                        },
                                        to: {
                                            color: '#7ac3e8',
                                            a: 1
                                        },
                                        // Set default step function for all animate calls
                                        step: function(state, circle) {
                                            circle.path.setAttribute('stroke', state.color);
                                        },
                                        color: 'orange',
                                        trailColor: '#eee',
                                        trailWidth: 1,
                                        svgStyle: null
                                    });

                                    bar.animate(<?php echo $now/$all?>); // Number from 0.0 to 1.0

                                });
                            </script>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="dashboard-title logs">
                            <span>Verified Logs</span>
                            <div id="verifiedLogs">
                            </div>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    var bar = new ProgressBar.Circle(verifiedLogs, {
                                        strokeWidth: 6,
                                        easing: 'bounce',
                                        duration: 1400,
                                        text: {
                                            value: <?php echo $verified?> + "/" + <?php echo $totalLogs?> + " " + 'logs',
                                        },
                                        from: {
                                            color: '#FFEA82',
                                            a: 0
                                        },
                                        to: {
                                            color: '#4ff262',
                                            a: 1
                                        },
                                        // Set default step function for all animate calls
                                        step: function(state, circle) {
                                            circle.path.setAttribute('stroke', state.color);
                                        },
                                        color: 'orange',
                                        trailColor: '#eee',
                                        trailWidth: 1,
                                        svgStyle: null
                                    });

                                    bar.animate(<?php echo $verified/$totalLogs?>); // Number from 0.0 to 1.0
                                });
                            </script>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="well" style="background: #fff">
                        <p>OJT Workmates</p>
                        <div class="well workmates-list">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h6>Ser Davos Seaworth</h6>
                                </div>
                                <div class="col-lg-4">
                                    <a href="#" style="font-size: 12px;">View profile</a>
                                </div>
                            </div>

                        </div>

                        <div class="well workmates-list">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h6>Ser Davos Seaworth</h6>
                                </div>
                                <div class="col-lg-4">
                                    <a href="#" style="font-size: 12px;">View profile</a>
                                </div>
                            </div>

                        </div>
                        

                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="logs-students">
                        <div class="well">
                            <div class="logs-title">
                                <span>Post your log <i class="fa fa-paper-plane-o" aria-hidden="true"></i></span>
                            </div>
                            <form class="logs-display" method="post">
                                <div class="row logs-upper">
                                    <div class="col-lg-6">

                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="date" class="form-control" value="<?php echo date('Y-m-d')?>" name="log_date" id="log_date">
                                            <label>Division</label>
                                            <input type="text" class="form-control" name="division" id="division">
                                            <label>Deparment/Area</label>
                                            <input type="text" class="form-control" name="department" id="department">
                                            <label>Designation</label>
                                            <input type="text" class="form-control" name="designation" id="designation">
                                        </div>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Time In</label>
                                            <input type="time" class="form-control" name="time_in" id="time_in">
                                            <label>Time Out</label>
                                            <input type="time" class="form-control" name="time_out" id="time_outs">
                                            <label>Hours Rendered</label>
                                            <input type="text" class="form-control" name="hours_rendered" id="hours_rendered">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="log_activity" id="log_activity" placeholder="Write your log here" class="form-control"></textarea>
                                </div>
                                <div class="form-group logs-lower">
                                    <button type="submit" name="submit_log" id="submit_log" class="btn btn-primary" value="Submit">Post</button>
                                    <button type="button" class="btn btn-success">Load last log</button>
                                    <button type="reset" class="btn btn-default">Clear</button>
                                    <button type="button" class="btn btn-danger cancel-btn" style="float: right;" class="btn btn-danger">Cancel</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <?php for($i=1;$i<=5;$i++):?>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="well">
                                    <span class="user-name">Jon Snow</span>
                                    <div class="dropdown" style="float: right; width:20px;">
                                        <a href="#" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <i style="color: #000000;" class="fa fa-angle-down"></i>
                                        </a>

                                        <ul class="dropdown-menu" style="width: 233px;" aria-labelledby="dropdownMenu2">
                                            <li><a href="#" class="edit-log" style="color: #000000;">Edit <i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                            <li role="separator" class="divider"> </li>
                                            <li><a href="#" class="delete-log" style="color: #000000;">Delete <i class="fa fa-trash"></i></a></li>
                                        </ul>

                                    </div>

                                    <hr>

                                    <form method="post">
                                        <div class="row">
                                            <div class="logs-lists">
                                                <div class="col-lg-6">

                                                    <div class="form-group">
                                                        <label>Date</label>
                                                        <input type="text" class="list-logs" name="log_list_date" id="log_list_date" value="<?php echo date(" Y/m/d ");?>" readonly>
                                                        <label>Division</label>
                                                        <input type="text" class="list-logs" name="log_list_division" id="log_list_division" value="Westeros" readonly>
                                                        <label>Deparment/Area</label>
                                                        <input type="text" class="list-logs" name="log_lists_department" value="Night's Watch" id="log_lists_department" readonly>
                                                        <label>Designation</label>
                                                        <input type="text" class="list-logs" value="Castle Black" name="    log_lists_designation" id="log_lists_designation" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Time In</label>
                                                        <input type="text" class="list-logs" name="log_lists_time_in" value="8:30" id="log_lists_time_in" readonly>
                                                        <label>Time Out</label>
                                                        <input type="text" class="list-logs" name="log_lists_time_out" value="12:30" id="log_lists_time_out" readonly>
                                                        <label>Hours Rendered</label>
                                                        <input type="text" class="list-logs" name="log_lists_hours_rendered" id="log_lists_hours_rendered" value="6" readonly>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Activity</label>
                                            <textarea class="list-logs" name="log_lists_activity" id="log_lists_activity" placeholder="Write your log here" readonly>Killed white walkers and wildlings</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Comments</label>
                                            <span style="font-size: 11px;">No comments</span>

                                            <span style="float: right; color:green; font-size: 11px;"> Verified  <i style="color: green;" class="fa fa-check-circle" aria-hidden="true"></i></span>

                                        </div>
                                        <div class="save-edit" style="display: none;">
                                            <button type="submit" class="btn btn-success">Save</button>
                                            <button type="button" class="cancel-edit btn btn-danger" class="btn btn-danger">Cancel</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php endfor;?>

                </div>
            </div>
            <!-- LOGSSSSS LISSSSSTTTT -->

        </div>

    </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        &copy;Copyright OJT Automate 2017 | All rights reserved
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

<script type="text/javascript">
    $("#dropdown-notification").click(function() {
       $("#show-notifications").slideToggle();
       $("#show-logout").slideUp();
    });

    $("#dropdown-logout").click(function() {
       $("#show-logout").slideToggle();
       $("#show-notifications").slideUp();
    });
</script>

<script type="text/javascript">
    $("span").hover(function() {
        $("span").css("background", "none");
        $("span").css("color", "#000");
    })
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
        var test = $(this).closest('.row');

        test.remove();
    });

    $('.edit-log').click(function(e) {
        e.preventDefault();
        var input = $(this).closest(".row").find(".list-logs");
        var buttons = $(this).closest(".row").find(".save-edit");
        buttons.show();
        input.prop('readonly', false);
        input.css('border', '1px solid #CCCCCC');
        input.css('background', '#fff');

    });
</script>

<script type="text/javascript">
    $('.cancel-edit').click(function() {
        location.reload(true);
    });
</script>

</html>