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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
        body{
             background-color: #F4F4F4;
        }
        .jumbotron{
            background-color: pink;
            padding: 10px;
            color: white;
            font-size: 1.5em;
            margin-top: 10px;
            margin-left: 10px;
            margin-right: 10px;
        }
        .wells{
            background-color: #0C1021;
        }
         .btn-primary{
            color: #4FA8AF;
            background-color: #FFF;
            text-shadow: none !important;
        }
        .btn-primary:hover{
            transition: 0.4s;
        }
        .btn{
            border-radius: 0;
        }
        
    </style>

    <title></title>

</head>

<body>


<!-- line modal -->
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i><span class="sr-only">Close</span></button>
            <h3 class="modal-title" id="lineModalLabel">Watchlist</h3>
        </div>
        <div class="modal-body">
            <div class="ban-title">
                <h4>The following are the watchlist companies</h4>
            </div>
          <ul>
            <li>sasa</li>
            <li>sasa</li>
            <li>sasa</li>
            <li>sasa</li>
            <li>sasa</li>
            <li>sasa</li>
          </ul>

        </div>
    </div>
  </div>
</div>
    <div class="page-wrap">
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="logo"><img src="logo.png" style="width: 175px;"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="header-links">
                            <h5> <a href="index.php">Home</a></h5>
                            <h5><a href="about-us.php" class="current-link">About us</a></h5>
                            <h5><a href="#" data-toggle="modal" data-target="#squarespaceModal">Watchlist</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <div class="signin">
                            <nav>
                                <ul>
                                    <li id="login">
                                        <a id="login-trigger" href="#">
        Log in ▼
      </a>
                                        <div id="login-content">
                                            <form action="" method="POST">
                                                <fieldset id="inputs">
                                                    <label style="float: left;">ID Number</label>

                                                    <input id="username" type="text" name="username" placeholder="ID Number" required>
                                                    <label style="float: left;">Password</label>
                                                    <input id="password" type="password" name="Password" placeholder="Password" required>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
         <div class="jumbotron">Dashboard
                <button class="btn btn-primary" style="float: right; margin-right: 10px;">+Trainee</button>
         </div>
       
         
            <div class="container">
                <div class="row">
                    <div class="col-lg-3" style="margin-top: 30px;">
                        <div class="well">
                            <progress value="19" max="100">
                        </div>
                        
                    </div>
                    <div class="col-lg-7">
                        <section style="text-align: justify;">
                            <select style="width: 200px;">
                                <option>Select Trainee</option>
                            </select>
                            <select>
                                <option>Log Status</option>
                            </select>
                            <button class="btn btn-primary" style="float: right;padding: 3px;">Evaluate</button>
                        </section>
                        <div class="well" style="margin-top: 5px;">
                            <h1>FOR LOGS: PS NATOY CUTE <3</h1>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        
                    </div>
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
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
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


 
</script>


</html>