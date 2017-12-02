

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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style type="text/css">
    body{
        overflow: auto;
        background-image: url('<?php echo base_url()?>assets/images/backgrounds.jpg');
        
    }
    .btn-circle.btn-lg {
        width: 40px;
        height: 40px;
        padding: 5px 8px;
        font-size: 12px;
        line-height: 1.33;
        border-radius: 25px;

    }

      .header{
        padding: 5px;
       height: 70px;
       border-bottom: 3px solid #791b1e;
       background-color: #ffba00;
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
    .btn-submit:focus{
        color: #FFFFFF;
    }
    
    .feedback{position: fixed;}
    .feedback textarea{height: 150px; }
    .feedback .reported p, .feedback .failed p  { height: 190px}
    .feedback.left{left:5px; bottom:15px}
    .feedback.right{right:5px; bottom:15px}
    .feedback .dropdown-menu{width: 290px;height: 300px;bottom: 50px;}
    .feedback.left .dropdown-menu{ left: 0px}
    .feedback.right .dropdown-menu{ right: 0px}
    .feedback .hideme{ display: none}
    .btn-login{
        background-color: #FFBA00;
        color: #FFFFFF;
        width: 100%;
        margin-top: 15px;
        font-size: 1.25em;
        transition: 0.4s;
    }
    .btn-login:hover{
        color: #FFFFFF;
        background-color: #f5b301;
        transition: 0.4s;
        
    }
    .btn-loginas{
        font-size: 13px;
        color: #000000;
        background-color: #FFF;
        

    }
    .btn-loginas:hover{
        color: #000000;
        background-color: #FFFFFF;
        
    }
    .btn-loginas:visited{
        color: #000000;
        background-color: #FFFFFF;
    }
    .forget{
        margin-top: 15px;
    }
  
    input{
        margin-top: 5px;
        width: 100%;
        

    }
    .login-container{
        margin-top: 100px;
    }
    .login-footer{

    }
    h6{
        display: inline-block;


    }
  
    .login{
        position: absolute;
        top: 150px;
    }
    a{
        color: #000000;
    }
    a:hover{
        color: #000000;
    }
    option{
        background-color: #FFFFFF;
        color: #000000;
    }
    .well{
      
        background-color: #F4F4F4;
        
    }
    .panel-header{
        background-color: #CA2E32;
        color: #FFFFFF;
    }
    .panel-body{
        height: 220px;

    }
    .panel .panel-header{
        border-color:  #d32f2f;
    }
    .incorrect{
        color: red;
        text-align: center;
        display: none;
    }
    .header-links{
        position: relative;
        bottom: 15px;        

    }
    .footer{
       background-color: #a12428;
       position: relative;
    }


    .modal-header-color:{
        background-color: #f44336;
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
                        <div class="logo"><img src="<?php echo base_url();?>assets/images/logo.png" style="width: 150px;"></div>
                    </div>
                    <div class="col-lg-5"></div>
                    <div class="col-lg-3">
                        <div class="header-links">
                            <h4><a href="#" data-toggle="modal" data-target="#watchlistModal" style="font-family:copperplate_gothic_boldRg">WATCH LIST</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- line modal -->
        <div class="modal fade" id="watchlistModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content" style="border-radius: 12px">
                <div class="modal-header" style="background-color: #f44336;border-radius: 10px 10px 0 0">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i><span class="sr-only">Close</span></button>
                    <h3 class="modal-title" id="lineModalLabel" style="color:white">Watch list</h3>
                </div>
                <div class="modal-body">
                    <div class="ban-title">
                        <h4>The following are on the company watch list</h4>
                    </div>
                    <ul>
                        <?php foreach ($watch_list as $watchlists): ?>
                            <li><?php echo $watchlists['company_name'] ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
          </div>
        </div>

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <div class="login">
                            <div class="panel panel-default">
                            <div class="panel panel-header">
                                 <h2 style="color:#FFFFFF; text-align: center;">LOGIN</h2>
                            </div>
                            <div class="panel panel-body">
                                         <div class="form-group" style="margin-top: -10px;">
                                    <form action="<?php echo base_url()?>main/loggedin" method="POST">
                                         <div class="form-group">
                                             <input type="text" name="username" class="form-control" placeholder="Username">
                                         </div>
                                         <div class="form-group">
                                              <input type="password" name="password" class="form-control" placeholder="Password">
                                              <div class="forget">
                                                <div>
                                              <?php echo $this->session->flashdata('Status'); ?>
                                              
                                                     <h6><a href="incorrectpassword">Forgot Password?</a></h6>         
                                                       <div class="btn-group" style="float: right;">
                                                      <select type="button" class="btn btn-loginas" name="login-options">
                                                       <span class="caret"></span>         
                                                        <option value="ojt">Login as OJT</option>
                                                        <option value="supervisor">Login as Supervisor</option>
                                                        <option value="administrator">Login as Administrator</option>
                                                        </select>

                                                     </div>
                                                </div>
                                            </div>
                                             <button class="btn btn-login btn-block" id="login-sign">Sign In</button>

                                    </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-lg-4"></div>
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
        })
    });

    $('#goto_feature1').click(function() {
        $('html,body').animate({
                scrollTop: $("#" + "feature1").offset().top
            },
            'slow');
    });
    $('#goto_feature2').click(function() {
        $('html,body').animate({
                scrollTop: $("#" + "feature2").offset().top
            },
            'slow');
    });

    $('#goto_feature3').click(function() {
        $('html,body').animate({
                scrollTop: $("#" + "feature3").offset().top
            },
            'slow');
    });

 
     
  
</script>
<script type="text/javascript">
  $(document).ready(function(){
      $("#btn-report").click(function(){
          swal({
              title:"You have Successfully reported a bug",
              text: "We will review your report",
              icon: "success",
            });
      });
  });
</script>

</html>