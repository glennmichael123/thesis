<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="favicon.ico">
    <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>

    <!-- Optional theme -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-theme.min.css" >
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Latest compiled and minified JavaScript -->
     <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous"> -->
     <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
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
    .header{
        background-color: #ffba00 !important;
        padding: 4px;
    }

.tabOptions 
.nav>li>a:hover,
.nav>li>a:focus{
    background:#d0e4e4;
}
    </style>

    <title></title>
</head>
<body>
        
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="logo" style="float: left;"><img src="<?php echo base_url();?>assets/images/logo.png" style="width: 50px; height: 50px;"></div>

                        <a href="<?php echo base_url('admindashboard') ?>" style="text-decoration: none;"><h3 style="font-weight: bold; margin-top: 12px; color: #b71c1c ; text-align: left; font-family: fantasy;font-style: italic;font-size: 20pt;letter-spacing: 1px;">OJT AUTOMATE</h3></a> 
                    </div>
                    <div class="col-lg-7">
                    </div>
                  <div class="col-lg-1">
                      <ul class="nav navbar-nav">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" id="dropdown-logout" data-toggle="dropdown"> <i class="fa fa-user-circle fa-3x circular-square pull-right" style="width: 40px; height: 40px; margin-top: -10px;"></i> </a>
                          <ul class="dropdown-menu" id="show-logout">
                            <li><a href="<?php echo base_url('admindashboard')?>">Dashboard<i class="fa fa-tachometer" style="position: absolute; right: 20px;"></i></a></li>
                            <li class="divider"></li>

                            <li><a href="<?php echo base_url()?>changepassword">Change password <i class="fa fa-key" style="position: absolute; right: 20px;" aria-hidden="true"></i></a></li>
                            <li class="divider"></li>
                
                            <li><a href="<?php echo base_url()?>logout">Log Out <i class="fa fa-sign-in" style="position: absolute; right: 20px;"></i></a></li>
                          </ul>
                        </li>
                      </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="container tabOptions" style="margin-top: 10px">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#ojt1" id="toOjt1">OJT 1</a></li>
        <li><a data-toggle="tab" href="#ojt2" id="toOjt2">OJT 2</a></li>
      </ul>
     <div class="tab-content">
        <div id="ojt1" class="tab-pane fade in active">
          <div class="content ojt1Content">

         </div>
        <div id="ojt2" class="tab-pane fade">
          <div class="content ojt2Content">

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

        $.ajax({
          type:'POST',
          url:'<?php echo base_url() ?>/'+'loadStudentInfo',
            data:{
              'ojt_program':"ojt_one",
              'username':"<?php echo $username;?>",
            },
          success: function(data){
            $('.ojt1Content').html(data);
            $('.ojt2Content').html("");
          }
        });
    });
</script>

<script type="text/javascript">

    $('#toOjt1').click(function(){
        $.ajax({
          type:'POST',
          url:'<?php echo base_url() ?>/'+'loadStudentInfo',
          data:{
            'ojt_program':"ojt_one",
             'username':"<?php echo $username;?>",

          },
          success: function(data){
            $('.ojt1Content').html(data);
            $('.ojt2Content').html("");
          }
        });
    });
    $('#toOjt2').click(function(){
        $.ajax({
          type:'POST',
          url:'<?php echo base_url() ?>/'+'loadStudentInfo',
          data:{
              'ojt_program':"ojt_two",
              'username':"<?php echo $username;?>",
          },
          success: function(data){
            $('.ojt2Content').html(data);
            $('.ojt1Content').html("");
          }
        });
    });

    $(document).on('click','.show-more-info',function(){
        var right = $(this).closest('.row').find('.show-more-right');
        var left = $(this).closest('.row').find('.show-more-left');
        var show_less = $(this).closest('.row').find('.show-less-info');
        right.show();
        left.show();
        $(this).hide();

        show_less.show();
       
    });

    $(document).on('click','.show-less-info',function(){
        var right = $(this).closest('.row').find('.show-more-right');
        var left = $(this).closest('.row').find('.show-more-left');
        right.hide();
        left.hide();
        $(this).hide();
        $('.show-more-info').show();
       
    });
</script>


</html>