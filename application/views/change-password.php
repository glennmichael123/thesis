
<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="favicon.ico">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php base_url()?>assets/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

    <script src="<?php echo base_url()?>assets/js/swal.js"></script>
    <style type="text/css">
     body{
         background-color: #f2efef;
    }
    *{
        font-family: 'Roboto', sans-serif;
    }
    .top{
        background-color: #915B51;
        height: 50px;
       

       
    }

    .mission{
        height: 200px;
       
    }
    .content{
        color: #333;
    }
    .txt{
        text-align: justify;
        font-size: 1em;
        padding: 30px;
        margin-top: -40px;
    }
    .btn{
        border-radius: 0;
    }
    .save{
        color: #FFFFFF;
        /*background:#FFB900;*/
        border-radius: 3px;
        padding: 10px 15px;

        
    }
    .save:hover{
        transition: 0.4s;
        color: #FFFFFF;
        /*background-color: #f5b301 !important;*/

    }
    .cancel{
        color:#FFFFFF;
        background: #d32f2f !important;
        border-radius: 3px;
        padding: 10px 30px;
    }
    .cancel:hover{
        transition: 0.4s;
        color:#FFFFFF;
        background-color:#760404;
        
    }
    .form-control{
        border-radius: 0;
    }
    .footer{
        position: absolute;
        right: 0;
        left: 0;
        top: 600px;
    }
    label{
        cursor: pointer;
        font-size: 12px;
    }
    h3{
        font-weight: 600;
        padding-bottom: 20px;
        padding-top: 20px;
    }
    .error{
        color: red;
        padding-bottom: 20px;
    }
    </style>
    <title></title>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-lg-offset-3">
                <div class="panel panel-default" style="margin-top: 80px;">
                    <div class="panel-heading" style="color:white;text-align: center;background: #d32f2f"><h4>CHANGE  PASSWORD</h4></div>
                <div class="panel-body">
                    <form action="savePassword" method="POST">
                        <div class="form-group">
                            <label for="old_password">Old password</label>
                            <input type="password" id="old_password"  name="old_password" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label for="newpass">New password</label>
                            <input type="password" name="newpass"  class="form-control" id="newpass" required="required">
                        </div>
                        <div class="form-group">
                            <label for="confirm_newpass">Confirm password</label>
                            <input type="password" name="confirm_newpass" class="form-control" id="confirm_newpass" required="required">
                        </div>
                        <div class="error">

                        </div>
                        <div class="form-group">
                            <button type="button" id="save-changes" class="btn btn-success save">Save changes</button>
                            <?php if($this->session->userdata['account_type'] == 'student'):?>
                            <a href="dashboard" id="cancel" class="btn cancel" style="float: right;width: 115px">Cancel</a>
                        <?php elseif($this->session->userdata['account_type'] == 'supervisor'):?>
                            <a href="supervisordashboard" id="cancel" class="btn cancel" style="float: right;width: 115px">Cancelq</a>
                        <?php elseif($this->session->userdata['account_type'] == 'admin'):?>
                            <a href="admindashboard" id="cancel" class="btn cancel" style="float: right;width: 115px">Cancel</a>
                         <?php elseif($this->session->userdata['account_type'] == 'nlo'):?>
                            <a href="nloDashboard" id="cancel" class="btn cancel" style="float: right;width: 115px">Cancel</a>
                         <?php endif;?>
                        </div>
                    </form>
                </div>
            </div>
            </div>    
            
        </div>
    </div>

<!-- 

    <div class="page-wrap">
        <div class="header">
         
         </div>
        <div class="content">
            <div class="container">
               
                <div class="row">
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-4">
                         <h3 style="text-align: center;">Change password</h3>
                        <form class="well" action="savePassword" method="POST">
                            <div class="form-group">
                                <label for="old_password">Old password</label>
                                <input type="password" id="old_password"  name="old_password" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label for="newpass">New password</label>
                                <input type="password" name="newpass"  class="form-control" id="newpass" required="required">
                            </div>
                            <div class="form-group">
                                <label for="confirm_newpass">Confirm password</label>
                                <input type="password" name="confirm_newpass" class="form-control" id="confirm_newpass" required="required">
                            </div>
                            <div class="error">

                            </div>
                            <div class="form-group">
                                <button type="button" id="save-changes" class="btn save">Save changes</button>
                                <?php if($this->session->userdata['account_type'] == 'student'):?>
                                <a href="dashboard" id="cancel" class="btn cancel" style="float: right;width: 115px">Cancel</a>
                            <?php elseif($this->session->userdata['account_type'] == 'supervisor'):?>
                                 <a href="supervisordashboard" id="cancel" class="btn cancel" style="float: right;width: 115px">Cancel</a>
                            <?php elseif($this->session->userdata['account_type'] == 'admin'):?>
                                 <a href="admindashboard" id="cancel" class="btn cancel" style="float: right;width: 115px">Cancel</a>
                             <?php endif;?>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        
                    </div>
                </div>

            </div>
        </div>
        <div class="footer" style="display: none;">
        </div> -->
</body>

<script type="text/javascript">

   $("#save-changes").click(function(){
    var pass1=$("#newpass").val();
    var pass2=$("#confirm_newpass").val();
    var oldpass=$("#old_password").val();

    if(pass1!=pass2 || pass1=="" || pass2==""){
        $("#newpass").css("border","1px solid red");
        $("#confirm_newpass").css("border","1px solid red");
        $(".error").html("Passwords do not match!");
        $("#newpass").val('');
        $("#confirm_newpass").val('');
        $('.error').html('Passwords do not match');
        return false;
    }else{
        $.ajax({
            url: "savePassword",
            type: "POST",
            data:{
                'newpass': pass1,
                'confirm_newpass': pass2,
                'old_password': oldpass,
            },
            success:function(data){
                var type = data;
                if($.trim(data) == "old_not_match_student"){
                    swal('Oops..', 'Old password does not match', 'error');return false;
                }else if($.trim(data) == "old_not_match_supervisor"){
                    swal('Oops..', 'Old password does not match', 'error');return false;
                }else if($.trim(data) == "old_not_match_admin"){
                    swal('Oops..', 'Old password does not match', 'error');return false;
                }else{
                    swal({
                        title: "Success",
                        text: "Password changed",
                        icon: "success",
                    }).then(function(){
                       window.location.replace("dashboard");
                    });
                }
            },

        });
    }

   });
</script>

</html>