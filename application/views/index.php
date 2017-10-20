

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
    .feedback{position: fixed;}
    .feedback textarea{height: 180px; }
    .feedback .reported p, .feedback .failed p  { height: 190px}
    .feedback.left{left:5px; bottom:15px}
    .feedback.right{right:5px; bottom:15px}
    .feedback .dropdown-menu{width: 290px;height: 320px;bottom: 50px;}
    .feedback.left .dropdown-menu{ left: 0px}
    .feedback.right .dropdown-menu{ right: 0px}
    .feedback .hideme{ display: none}
    .modal-header-color:{
        background-color: #f44336;
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
                            <h5><a href="about">About us</a></h5>
                            <h5><a href="#" data-toggle="modal" data-target="#watchlistModal">Watchlist</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <a class="btn btn-primary login-btn" href="<?php echo base_url()?>main/loginojt" class="btn btn-primary">Login</a>
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
        
            <section>
                <div class="img-carousel">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>

                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="<?php echo base_url();?>assets/images/imgfront.png" style="width: 100%; height: 500px;" alt="...">
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url();?>assets/images/img1.png" style="width: 100%; height: 500px;">
                                <div class="carousel-caption">
                                    <h3><a id="goto_feature1" class="btn btn-primary">Learn More</a></h3>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url();?>assets/images/img2.png" style="width: 100%; height: 500px;" alt="...">
                                <div class="carousel-caption">
                                    <h3><a id="goto_feature2" class="btn btn-primary">Learn More</a></h3>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url();?>assets/images/img3.png" style="width: 100%; height: 500px;" alt="...">
                                <div class="carousel-caption">
                                    <h3><a id="goto_feature3" class="btn btn-primary">Learn More</a></h3>
                                </div>
                            </div>

                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                    <!-- Carousel -->
                </div>
            </section>
            <section>
                <div class="features">

                    <div class="container">
                        <section id="feature1">
                            <div class="row">
                                <div class="col-lg-3" data-aos="fade-right">
                                    <img src="<?php echo base_url();?>assets/images/feature1.png" style="height: 250px; border-radius: 100%;">
                                </div>
                                <div class="col-lg-9">
                                    <div class="description" data-aos="zoom-in">
                                    <!-- THIS PART IS EVALUATION -->
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                                    </div>
                                </div>
                            </div>

                        </section>

                        <section id="feature2" style="margin-top: 100px;">
                            <div class="row">
                                <div class="col-lg-9" style="margin-top: 50px;" data-aos="fade-right">
                                    <div class="description">
                                    <!-- THIS PART IS LOGS -->
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                                    </div>

                                </div>
                                <div class="colg-lg-3" data-aos="fade-up">
                                    <img src="<?php echo base_url();?>assets/images/feature2.png" style="height: 250px; border-radius: 100%;">
                                </div>
                            </div>
                        </section>

                        <section id="feature3" style="margin-top: 100px;">
                            <div class="row">
                                <div class="col-lg-3" style="margin-top: 50px;" data-aos="fade-up">
                                    <img src="<?php echo base_url();?>assets/images/feature3.png" style="height: 250px; border-radius: 100%;">

                                </div>
                                <div class="colg-lg-9" data-aos="fade-right">

                                    <div class="description" style="margin-top: 100px;">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>
            </section>

        </div>
        <div class="footer">
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
</html>