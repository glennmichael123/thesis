
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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

    <script src="<?php echo base_url()?>assets/js/swal.js"></script>
    <style type="text/css">
     body{
         background-color: #F4F4F4;
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
        background:#FFB900;
        
    }
    .save:hover{
        transition: 0.4s;
        color: #FFFFFF;
        background-color: #f5b301 !important;

    }
    .cancel{
        color:#FFFFFF;
        background: #800000 !important;
        
    }
    .cancel:hover{
        color:#FFFFFF;
        background-color:#760404;
        transition: 0.4s;
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
        font-size: 15px;
    }
    h3{
        font-weight: 600;
        padding-bottom: 20px;
        padding-top: 20px;
    }
    .error{
        color: red;
        padding-bottom: 20px;
        display: none;
    }
    </style>
    <title></title>

</head>

<body>



    <div class="page-wrap">
        <div class="header">
         
         </div>
        <div class="content">
            <div class="container">
               
                <div class="row">
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-4">
                         <h3 style="text-align: center;">Reset password</h3>
                        <div class="well">
                          <form>
                            <div class="form-group">
                                <label for="newpass">New password</label>
                                <input id="password" name="newpass" type="password" class="form-control" placeholder="New Password" required>
                            </div>
                            <div class="form-group">
                                <label for="confirm_newpass">Confirm password</label>
                                <input id="password_two" name="newpass_two" type="password" class="form-control" placeholder="Verify Password" required>
                                <input type="hidden" name="username" value="<?php echo $_GET['username'] ?>">
                            </div>
                            <div class="error">
                                <span>Passwords do not match!</span>
                            </div>
                            <div class="form-group">
                                <input type="submit" id="save-changes" data-username="<?php echo $_GET['username'] ?>" class="btn save">
                                
                                <a href="index" id="cancel" class="btn cancel" style="float: right;width: 115px">Cancel</a>
                            
                             
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        
                    </div>
                </div>

            </div>
        </div>
        <div class="footer" style="display: none;">
        </div>
        


</body>
<script type="">
    $('#save-changes').click(function(e){ 
        e.preventDefault();
        var newpass = $('#password').val();
        var newpass2 = $('#password_two').val();
        var username = $(this).data('username');
        var data = $('form').serialize();
        if(newpass != newpass2){
            $('#password').css('border','1px solid red');
            $('#password_two').css('border','1px solid red');
            $('#password_two').val('');
            $('#password').val('');
            $('.error').show();
        }else{
            $.ajax({
            url: 'resetPass',
            method: 'POST',
            data:data,
            success: function(data){   
                swal({
                    title: "Password Successfully Changed",
                    icon:"success",
                }).then(function(){
                   window.location.replace("index");
                });           
                }
            });
        }

        
 }); 

</script>

</html>