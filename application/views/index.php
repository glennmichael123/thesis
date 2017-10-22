

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
    <style type="text/css">
    .btn-circle.btn-lg {
        width: 40px;
        height: 40px;
        padding: 5px 8px;
        font-size: 12px;
        line-height: 1.33;
        border-radius: 25px;

    }
    .btn-bug{
        background-color: #800000;
    }
    .btn-bug:hover{
        color: #FFFFFF;
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
    .feedback .dropdown-menu{width: 290px;height: 300px;bottom: 50px;}
    .feedback.left .dropdown-menu{ left: 0px}
    .feedback.right .dropdown-menu{ right: 0px}
    .feedback .hideme{ display: none}
    
    .btn-login{
        background-color: #FFBA00;
        color: #FFFFFF;
        width: 100%;
        margin-top: 5px;
        font-size: 1.25em;
    }
    .btn-login:hover{
        color: #FFFFFF;
        background-color: #f5b301;
        border-radius: 0;
    }
    .btn-loginas{
        font-size: 15px;
        color: #FFFFFF;
        background-color: #FFBA00;

    }
    .btn-loginas:hover{
        color: #FFFFFF;
        background-color: #f5b301;
        
    }
    .forget{
        margin-top: 10px;
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
    body{
        background-image: url('<?php echo base_url()?>assets/images/backgrounds.jpg');
    }
   
    .login{
        margin-top: 120px;
    }
    a{
        color: #FFFFFF;
    }
    a:hover{
        color: #FFFFFF;
    }
    option{
        background-color: #FFFFFF;
        color: #000000;
    }
  


    

    </style>
    <title></title>

</head>

<body>
 <script>
    AOS.init({
      offset: 100,
      duration: 900,
      easing: 'ease-in-out-cubic',
      delay: 50,

    });
  </script>
    <div class="page-wrap">
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="logo"><img src="<?php echo base_url();?>assets/images/logo.png" style="width: 175px;"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="header-links">
                            <h5> <a href="#" class="current-link">Home</a></h5>
                              <?php echo (isset($error) ? $error : '');?>
                            <h5><a href="<?php echo base_url()?>main/about">About us</a></h5>
                            <h5><a href="#" data-toggle="modal" data-target="#watchlistModal">Watchlist</a></h5>
                        </div>
                    </div>
                   <!--  <div class="col-lg-1">
                        <a class="btn btn-primary login-btn" href="<?php echo base_url()?>main/loginojt" class="btn btn-primary">Login</a>
                    </div> -->
                </div>
            </div>
        </div>

        <!-- line modal -->
        <div class="modal fade" id="watchlistModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i><span class="sr-only">Close</span></button>
                    <h3 class="modal-title" id="lineModalLabel">Watch list</h3>
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
                                 <h2 style="color: #FFFFFF; text-align: center;">Please Login</h2>
                                    <form action="<?php echo base_url()?>main/loggedin" method="POST">
                                         <div class="form-group">
                                             <input type="text" name="username" class="form-control" placeholder="Username">
                                         </div>
                                         <div class="form-group">
                                              <input type="password" name="password" class="form-control" placeholder="Password">
                                              <div class="forget">
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
                                             <button class="btn btn-login btn-block">Sign In</button>

                                    </form>
                            </div>
                        </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>
            
            
           

        </div>
        <!-- <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                <div class="feedback left">
      <div class="tooltips">
          <div class="btn-group dropup">
            <button type="button" class="btn btn-primary dropdown-toggle btn-circle btn-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-bug fa-2x" title="Report Bug"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-form">
              <li>
                <div class="report">
                  <h2 class="text-center" style="color: #000000;">Report a Bug or Suggestion</h2>
                  <form class="doo" method="post" action="report.php">
                    <div class="col-sm-12">
                      <textarea name="comment" class="form-control" placeholder="Please tell us any bugs or issues you've found, provide as much detail as possible." required></textarea>
                      
                     </div>
                     <div class="col-sm-12 clearfix">
                      <button class="btn btn-primary btn-block">Submit Report</button>
                     </div>
                 </form>
                </div>
                <div class="loading text-center hideme">
                  <h2>Please wait...</h2>
                  <h2><i class="fa fa-refresh fa-spin"></i></h2>
                </div>
                <div class="reported text-center hideme">
                  <h2>Thank you!</h2>
                  <p>Your submission has been received, we will review it shortly.</p>
                   <div class="col-sm-12 clearfix">
                      <button class="btn btn-success btn-block do-close">Close</button>
                   </div>
                </div>
                <div class="failed text-center hideme">
                  <h2>Oh no!</h2>
                  <p>It looks like your submission was not sent.<br><br><a href="mailto:">Try contacting us by the old method.</a></p>
                   <div class="col-sm-12 clearfix">
                      <button class="btn btn-danger btn-block do-close">Close</button>
                   </div>
                </div>
              </li>
            </ul>
          </div>
      </div>
    </div>
                    </div>
                    <div class="col-lg-6">
                        
                            <p class="copyright" style="float: right;">&copy;Copyright OJT Automate 2017 | All rights reserved</p>
                        
                    </div>
                </div>
            </div>

        </div>
    </div> -->

        
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
        $('.btn-submit').click(function(){
            alert("natoy");
        });
    });
        $(function () {
  $('[data-toggle="popover"]').popover()
})
</script> 



</html>