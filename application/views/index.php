<!DOCTYPE html>
<html>
<head>
 <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

          

  <!-- Compiled and minified JavaScript -->
  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
    <title></title>
    <style type="text/css">
        .header{
            width: 100%
        }
        .top{
          background-color: #ca2e32;
          padding: 20px;
          position: relative;
          bottom: 65px;
        }
        p.login-title{
          font-size: 1.5em;
          text-transform: uppercase;
          text-align: center;
          font-weight: bold;
          font-family: 'Roboto', sans-serif;
        }
        p.login-subtitle{
          font-size: 1.2em;
          text-transform: uppercase;
          text-align: center;
          font-weight: bold;
          font-family: 'Roboto', sans-serif;
        }
        .login-box{
          margin-top: 9%;
        }
    </style>
</head>
<body>
<div class="header">
   <div class="container" style="width: 100%;">
       <div class="col s12">
           Qwe qwe qwe
       </div>
   </div>
</div>
    <div class="valign-wrapper row login-box" >
  <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
    <form action="<?php echo base_url() ?>main/loggedin" method="post">
      <div class="card-content">
        <!-- <span class="card-title">Login</span>-->  
        <div class="top hoverable z-depth-5">
          <p class="login-title" style="color: #FFF;">On-The-Job Training</p>
          <p class="login-subtitle" style="color: #FFF;">Automate</p>
        </div>      
        <div class="row" style="margin-top: -25px;">
          <div class="input-field col s12">
            <label for="email">Username</label>
            <input type="text" class="validate" name="username" id="email" />
          </div>
          <div class="input-field col s12">
            <label for="password">Password</label>
            <input type="password" class="validate" name="password" id="password" />
          </div>
          <label style="margin-left: 10px;"><a href="incorrectpassword">Forget Password?</a></label>

          
        </div>
      </div>

      <div class="card-action right-align">
        <div class="col s6">
             <select name="login-options" id="loginas">
                 <!-- <option selected disabled>Login as</option> -->
                 <option value="ojt" selected>OJT</option>
                 <option value="supervisor">Supervisor</option>
                 <option value="administrator">Administrator</option>
             </select>
          </div>

        <button type="submit" class="btn amber lighten-1 waves-effect waves-light ">LOGIN</button>

        
      </div>
    </form>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>

<script type="text/javascript">
    $(document).ready(function() {
    $('select').material_select();
});
</script>
</html>