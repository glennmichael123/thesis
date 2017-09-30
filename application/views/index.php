

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
                            <h5><a href="#">Watchlist</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-1">
                    <!--     <div class="signin">
                            <nav>
                                <ul>
                                    <li id="login">
                                        <a id="login-trigger" href="#">
        Log in ▼
      </a>
                                        <div id="login-content">
                                            <form action="<?//php echo base_url()?>main/loggedin" method="POST">
                                                <fieldset id="inputs">
                                                    <label style="float: left;">ID Number</label>

                                                    <input id="username" type="text" name="username" placeholder="ID Number" required>
                                                    <label style="float: left;">Password</label>
                                                    <input id="password" type="password" name="password" placeholder="Password" required>
                                                   
                                                </fieldset>
                                                <fieldset id="actions">
                                                    <button type="submit" id="submit">Login&nbsp;<i class="fa fa-sign-in"></i></button>
                                                    <a href="#" class="forgot-password">Forgot password?</a>
                                                </fieldset>

                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div> -->

                        <a class="btn btn-primary login-btn" href="<?php echo base_url()?>main/loginojt" class="btn btn-primary">Login</a>
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
                        <div class="copyright">
                            &copy;Copyright OJT Automate 2017 | All rights reserved
                        </div>
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