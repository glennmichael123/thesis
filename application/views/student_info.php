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
 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
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




        
        

    </style>

    <title></title>
</head>
<body>
       <!--  <div class="header">
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
                                <a href="#" class="dropdown-toggle" id="dropdown-logout" data-toggle="dropdown">
                                
                                    <?php if ($supImage[0]['image_id'] == '<i class="fa fa-user-circle pull-right" style="font-size: 40px; margin-top: -5px;" aria-hidden="true"></i>'):?>
                                    <?php echo $supImage[0]['image_id'];?>
                                    <?php else:?> 
                                        <img src="<?php echo base_url().$supImage[0]['image_id'];?>" class="pull-right circular-square user-image" style="width: 40px; height: 40px; margin-top: -5px;">
                                    <?php endif ?>

                                <ul class="dropdown-menu" id="show-logout">
                                    <li><a href="#">Dashboard<i class="fa fa-tachometer pull-right"></i></a></li>
                                    <li class="divider"></li>

                                    <li><a href="#" data-toggle="modal" data-target="#changeImage">Change profile image<i class="fa fa-picture-o pull-right" aria-hidden="true"></i></a></li>
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
        </div> -->
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
                                            value: <?php echo $current_evaluations?> + "/" + <?php echo $all_evaluations?> + " " + 'evaluations',
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
                                        },
                                        color: '#53b1e0',
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
                                        easing: 'bounce',
                                        duration: 1400,
                                        text: {
                                            value: 'You have not posted logs yet',
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
                                        },
                                        color: '#53b1e0',
                                        trailColor: '#eee',
                                        trailWidth: 1,
                                        svgStyle: null
                                    });

                                    bar.animate(<?php echo 1/1?>); // Number from 0.0 to 1.0
                                });
                            </script>
                            <?php else:?>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    var bar = new ProgressBar.Circle(verifiedLogs, {
                                        strokeWidth: 6,
                                        easing: 'bounce',
                                        duration: 1400,
                                        text: {
                                            value: <?php echo $verified?> + "/" + <?php echo $totalLogs;?> + " " + 'logs',
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
                                        },
                                        color: '#53b1e0',
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
                            
                        </div>    
                    </div>
                    <div class="col-lg-8">
                        <div class="well">
                            
                        </div>
                    </div>
                </div>
            </div>
     </div>                         
                                        
                           
     

       




    
       
</body>

</html>