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
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
        *{
            font-family: 'Roboto', sans-serif;
        }
        body{
            background: rgba(241,231,101,0.9);
background: -moz-linear-gradient(left, rgba(241,231,101,0.9) 8%, rgba(241,231,101,0.9) 27%, rgba(241,229,100,0.9) 28%, rgba(251,193,74,0.9) 49%, rgba(254,182,67,0.91) 55%, rgba(254,182,67,0.96) 74%, rgba(254,182,67,1) 91%);
background: -webkit-gradient(left top, right top, color-stop(8%, rgba(241,231,101,0.9)), color-stop(27%, rgba(241,231,101,0.9)), color-stop(28%, rgba(241,229,100,0.9)), color-stop(49%, rgba(251,193,74,0.9)), color-stop(55%, rgba(254,182,67,0.91)), color-stop(74%, rgba(254,182,67,0.96)), color-stop(91%, rgba(254,182,67,1)));
background: -webkit-linear-gradient(left, rgba(241,231,101,0.9) 8%, rgba(241,231,101,0.9) 27%, rgba(241,229,100,0.9) 28%, rgba(251,193,74,0.9) 49%, rgba(254,182,67,0.91) 55%, rgba(254,182,67,0.96) 74%, rgba(254,182,67,1) 91%);
background: -o-linear-gradient(left, rgba(241,231,101,0.9) 8%, rgba(241,231,101,0.9) 27%, rgba(241,229,100,0.9) 28%, rgba(251,193,74,0.9) 49%, rgba(254,182,67,0.91) 55%, rgba(254,182,67,0.96) 74%, rgba(254,182,67,1) 91%);
background: -ms-linear-gradient(left, rgba(241,231,101,0.9) 8%, rgba(241,231,101,0.9) 27%, rgba(241,229,100,0.9) 28%, rgba(251,193,74,0.9) 49%, rgba(254,182,67,0.91) 55%, rgba(254,182,67,0.96) 74%, rgba(254,182,67,1) 91%);
background: linear-gradient(to right, rgba(241,231,101,0.9) 8%, rgba(241,231,101,0.9) 27%, rgba(241,229,100,0.9) 28%, rgba(251,193,74,0.9) 49%, rgba(254,182,67,0.91) 55%, rgba(254,182,67,0.96) 74%, rgba(254,182,67,1) 91%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f1e765', endColorstr='#feb643', GradientType=1 );
        }
        h3{
            color: #3e4444;
            font-size: 25px;
            
        }
        .btn{
            border-radius: 0;
        }
        .top{
            margin-top: 100px;
        }
        .img-circle{
            width: 96px;
            height: 96px;
            margin: 0 auto 10px;
            display: block;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }
      .sign-in{
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .cont{
            margin-top: 20px;
            padding: 40px 0px 20px 0px;
            background: rgba(226,226,226,1);
background: -moz-radial-gradient(center, ellipse cover, rgba(226,226,226,1) 0%, rgba(232,232,232,0.96) 37%, rgba(255,255,255,0.94) 65%, rgba(254,254,254,0.9) 100%);
background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(226,226,226,1)), color-stop(37%, rgba(232,232,232,0.96)), color-stop(65%, rgba(255,255,255,0.94)), color-stop(100%, rgba(254,254,254,0.9)));
background: -webkit-radial-gradient(center, ellipse cover, rgba(226,226,226,1) 0%, rgba(232,232,232,0.96) 37%, rgba(255,255,255,0.94) 65%, rgba(254,254,254,0.9) 100%);
background: -o-radial-gradient(center, ellipse cover, rgba(226,226,226,1) 0%, rgba(232,232,232,0.96) 37%, rgba(255,255,255,0.94) 65%, rgba(254,254,254,0.9) 100%);
background: -ms-radial-gradient(center, ellipse cover, rgba(226,226,226,1) 0%, rgba(232,232,232,0.96) 37%, rgba(255,255,255,0.94) 65%, rgba(254,254,254,0.9) 100%);
background: radial-gradient(ellipse at center, rgba(226,226,226,1) 0%, rgba(232,232,232,0.96) 37%, rgba(255,255,255,0.94) 65%, rgba(254,254,254,0.9) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e2e2e2', endColorstr='#fefefe', GradientType=1 );
            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }
        .sign-in .form-control{
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .sign-in .form-control:focus{
            z-index: 2;
        }
        p{
            text-align: center;
        }

    </style>

    <title></title>

</head>

<body>
    <div class="page-wrap">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="top">
                            <h3 style="text-align: center;">Sign in to Continue to OJT AUTOMATE</h3>
                           <div class="cont">
                               <img class="img-circle" src="<?php echo base_url()?>/assets/images/invalid.jpg">
                            <form class="sign-in">
                             <div style="margin-bottom: 10px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control"placeholder="ID">                                        
                                    </div>
                                <div  class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="Password" placeholder="password">
                                    </div>
                                <button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top: 10px;">
                                Sign in</button>
                            </form>
                            <p><a href="#" >Forgot Password?</a></p>
                           </div>

                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </div> 
             
    </div>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>

</script>


</html>