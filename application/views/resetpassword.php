
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
                        <form class="well" method="POST" action="<?php base_url();?>resetUserPassword">
                            <div class="form-group">
                                <label for="input_email">Email</label>
                                <input type="email" id="reset_email"  name="reset_email" class="form-control" value="<?php echo $_GET['email']; ?>"readonly>
                            </div>
                            <div class="form-group">
                                <label for="newpass">New password</label>
                                <input id="password" name="newpass" type="password" class="form-control"  pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="New Password" required>
                            </div>
                            <div class="form-group">
                                <label for="confirm_newpass">Confirm password</label>
                                <input id="password_two" name="confirm_newpass" type="password" pattern="^\S{6,}$" class="form-control"  onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="Verify Password" required>
                            </div>
                            <div class="error">

                            </div>
                            <div class="form-group">
                                <input type="submit" id="save-changes" class="btn save">
                                
                                <a href="index" id="cancel" class="btn cancel" style="float: right;width: 115px">Cancel</a>
                            
                             
                            </div>
                        </form>
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
    $('#btn-reset').click(function(){ 
    var data = $('#resetpass').serialize();
     var fail = false;
     var fail_log = '';
      var email = $('#reset_email').val();
     $( '#resetpass' ).find( 'input[type=email]' ).each(function(){
            if( ! $( this ).prop( 'required' )){

            } else {
                if ( ! $( this ).val() ) {
                    fail = true;
                    name = $( this ).attr( 'style', 'border: 1px solid red' );
                    fail_log += name + " is required ";
                }else{
                    name = $( this ).attr( 'style', 'border: 1px solid #ccc' );
                }

            }
        });
     if(!fail){
            // alert("true");
            // return false;
                 $.ajax({
                    url: "confirmSend",
                    type: "POST",
                    data:{
                      'email': email,
                    },
                    success:function(){
                         alert('Email Sent.');
                         //     
                    }
                });

      


     }
     else{
           
            return false;

     }
 }); 

</script>

</html>