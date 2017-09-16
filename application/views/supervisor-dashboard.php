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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <style type="text/css">
        body {
            background-color: #F4F4F4;
        }
        
        .jumbotron {
            background-color: #EED090;
            padding: 10px;
            color: white;
            font-size: 1.5em;
            margin-top: 10px;
            margin-left: 10px;
            margin-right: 10px;
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
            border-radius: 4px;
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
        
        #trainees {}
        
        .badge {
            background: #09ba20;
        }
        
        .progress {
            height: 35px;
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
        }
        .evaluator-option{
            color: #000;
            font-size: 13px;
        }
         .evaluator-option:hover{
            color: #000;

        }
    </style>



    <title>OJT Automate</title>

</head>

<body>

    <div class="page-wrap">

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
                                <a href="#" class="dropdown-toggle" id="dropdown-logout" data-toggle="dropdown"><img src="<?php echo base_url();?>/assets/images/snow.jpg" class="pull-right circular-square" style="width: 40px; height: 40px; margin-top: -5px;"> </a>
                                <ul class="dropdown-menu" id="show-logout">
                                    <li><a href="#">Dashboard<i class="fa fa-tachometer pull-right"></i></a></li>
                                    <li class="divider"></li>

                                    <li><a href="changepassword">Change password <i class="fa fa-key pull-right" aria-hidden="true"></i></a></li>
                                    <li class="divider"></li>

                                    <li><a href="logout">Log Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
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
                        <div class="jumbotron">Dashboard
                            <button class="btn btn-primary" style="float: right;">+Trainee</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-4">
                        <div class="well">

                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 style="text-align: center;">Trainees Completed</h4>
                                    <div class="progress skill-bar">

                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                            <span class="skill">3/5</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 style="text-align: center;">Evaluations</h4>
                                    <div class="progress skill-bar">

                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                            <span class="skill">2/10</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 style="text-align: center;">Pending logs</h4>
                                    <div class="progress skill-bar">

                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                            <span class="skill">10</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col-lg-5">
                                <select class="form-control">
                                    <option selected disabled>Select a trainee</option>
                                </select>

                            </div>
                            <div class="col-lg-5">
                                <select class="form-control">
                                    <option selected disabled>Log status</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <button class="btn btn-default" disabled>Evaluate</button>
                            </div>
                        </div>

               
                    <?php for($i=0; $i<=3; $i++):?>
                        <div class="row"  style="color:#000;">
                       
                             <div class="col-lg-12" >
                                <div class="well" style="background: #fff; padding-bottom: 0; padding-top: 10px">
                                    <span class="user-name"><i class="fa fa-user-circle"></i>Jon Snow</span>
                                  
                                    <hr style="margin-top: 0; margin-bottom: 0">

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
                                        
                                            <label style="font-size: 11px;">Activity</label>
                                            <textarea class="list-logs" name="log_lists_activity" id="log_lists_activity" placeholder="Write your log here" readonly>Killed white walkers and wildlings</textarea>

                                             <span style="color:green; font-size: 11px; position: absolute; top: 288px; left: 700px;"> Verified  <i style="color: green;" class="fa fa-check-circle" aria-hidden="true"></i></span>
                                      
                                       
                                            
                                       
                                        
                                        <hr style="margin-bottom: 0; margin-top: 0;">

                                     <div class="row" style="padding-top: 5px; padding-bottom: 5px;">
                                        <div class="col-lg-2">
                                                 <a href="#" class="evaluator-option verify-btn"><i class="fa fa-check" aria-hidden="true"></i>Verify</a>
                                                 
                                        </div>
                                        <div class="col-lg-3">
                                            <a href="#" class="evaluator-option comment-btn"><i class="fa fa-comment" aria-hidden="true"></i>Comment</a>
                                        </div>
                                     </div>

                                    <div class="row">
                                        
                                       <div class="comment-section" style="display: none;"> 
                                            <div class="col-lg-12">
                                                <hr style="margin-top: 0; margin-bottom: 5px;">
                                                <textarea style="height:45px; resize: none;" class="form-control" placeholder="Write your comment"></textarea>
                                                <button style="float: right; margin-top: 5px; margin-bottom: 5px; padding: 2px 5px 2px 5px;" class="btn btn-primary">Post</button>
                                            </div>
                                        </div>
                                        
                                     </div>
                                    
                                    </form>
                                   
                                     

                                  

                                </div>
                                  
                                </div>
                                 


                            </div>



                        <?php endfor;?>
                      

                  
                    </div>

                </div>
            </div>

        </div>

</body>

<script type="text/javascript">
    $(document).ready(function() {
        $('.progress .progress-bar').css("width",
            function() {
                return $(this).attr("aria-valuenow") + "%";
            }
        )
    });
</script>

<script type="text/javascript">
    $('.comment-btn').click(function(e){
        e.preventDefault();
        var commentSection = $(this).closest("form").find(".comment-section");

        commentSection.slideToggle();
      
    });

     $("#dropdown-logout").click(function() {
       $("#show-logout").slideToggle();
       $("#show-notifications").slideUp();
    });
</script>

</html>