
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
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
    @import url(http://fonts.googleapis.com/css?family=Roboto);

/****** LOGIN MODAL ******/
.loginmodal-container {
  padding: 30px;
  position: relative;
  top: 100px;
  width: 450px !important;
  background-color: #F7F7F7;
  margin: 0 auto;
  border-radius: 2px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  font-family: roboto;
}

.loginmodal-container h1 {
  text-align: center;
  font-size: 1.8em;
  font-family: roboto;
}

.loginmodal-container input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.loginmodal-container input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.loginmodal-container input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.loginmodal {
  text-align: center;
  font-size: 14px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
  user-select: none; */
}

.loginmodal-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #4d90fe;
  padding: 17px 0px;
  font-family: roboto;
  font-size: 14px;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.loginmodal-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.loginmodal-container a {
  text-decoration: none;
  color: #666;
  font-weight: 400;
  text-align: center;
  display: inline-block;
  opacity: 0.6;
  transition: opacity ease 0.5s;
} 

.login-help{
  font-size: 12px;
}
.login-option a{
    color: black;
    font-weight: 600;

}

.login-option a:hover{
    text-decoration: underline;
}

.admin-section, .supervisor-section{
    display: none;
}

    </style>

    <title></title>

</head>

<body>
    <div class="page-wrap">
        <div class="row">
            <div class="col-lg-12">
                
                    <div class="ojt-section">
                      <div class="modal-dialog">
                            <div class="loginmodal-container">
                                <h1>Login as OJT</h1><br>
                              <form  method="POST" action="<?php echo base_url()?>main/loggedin">
                                <input type="text" name="username" placeholder="Username">
                                <input type="password" name="password" placeholder="Password">
                                <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                              </form>
                                
                              <div class="login-help">
                                <a href="#">Forgot Password?</a>
                              </div>
                              <div class="login-option" style="margin-top: 20px;">
                                    <span style="float: left;"><a class="link-ojt-supervisor" href="#">Login as Supervisor</a></span>
                                    <span style="float: right;"><a class="link-ojt-administrator" href="#">Login as Administrator</a></span>
                              </div>
                            </div>
                        </div>
                    </div>
                        <div class="supervisor-section">
                            
                        
                         <div class="modal-dialog">
                            <div class="loginmodal-container">
                                <h1>Login as Supervisor</h1><br>
                              <form>
                                <input type="text" name="user" placeholder="Username">
                                <input type="password" name="pass" placeholder="Password">
                                <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                              </form>
                                
                              <div class="login-help">
                                <a href="#">Forgot Password?</a>
                              </div>
                              <div class="login-option" style="margin-top: 20px;">
                                    <span style="float: left;"><a class="link-supervisor-ojt" href="#">Login as OJT</a></span>
                                    <span style="float: right;"><a class="link-supervisor-administrator" href="#">Login as Administrator</a></span>
                              </div>
                            </div>
                        </div>
                    </div>

                        <div class="admin-section">
                            
                      
                         <div class="modal-dialog">
                            <div class="loginmodal-container">
                                <h1>Login as Administrator</h1><br>
                              <form>
                                <input type="text" name="user" placeholder="Username">
                                <input type="password" name="pass" placeholder="Password">
                                <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                              </form>
                                
                              <div class="login-help">
                                <a href="#">Forgot Password?</a>
                              </div>
                              <div class="login-option" style="margin-top: 20px;">
                                    <span style="float: left;"><a class="link-administrator-ojt" href="#">Login as OJT</a></span>
                                    <span style="float: right;"><a class="link-administrator-supervisor" href="#">Login as Supervisor</a></span>
                              </div>
                            </div>
                        </div>
                    </div>
             
            </div>
        </div>  
    </div>

</body>

<script type="text/javascript">
    $('.link-ojt-supervisor').click(function(e){
        e.preventDefault();

        $('.supervisor-section').show();
        $('.ojt-section').hide();
    });

    $('.link-ojt-administrator').click(function(e){
        e.preventDefault();
        $('.admin-section').show();
        $('.ojt-section').hide();
    });

    $('.link-supervisor-ojt').click(function(e){
        e.preventDefault();

        $('.ojt-section').show();
        $('.supervisor-section').hide();
    });

    $('.link-supervisor-administrator').click(function(e){
         $('.admin-section').show();
        $('.supervisor-section').hide();
    });

    $('.link-administrator-ojt').click(function(e){
        e.preventDefault();
        $('.ojt-section').show();
        $('.admin-section').hide();

    });

    $('.link-administrator-supervisor').click(function(e){
        e.preventDefault();
        $('.supervisor-section').show();
        $('.admin-section').hide();
        
    });


</script>


</html>