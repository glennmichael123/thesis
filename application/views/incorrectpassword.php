 
<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="favicon.ico">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="
    sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php base_url()?>assets/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-theme.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="<?php echo base_url() ?>assets/js/swal.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">

    <style type="text/css">
    @import url(http://fonts.googleapis.com/css?family=Roboto);

      .top-forget{
        background-color: #800000;
        width: 100%;
        color: #800000;
      }
      .header-forget{
        font-size: 4em;
      }
      p{
        font-size: 1.5em;
      }
      input{
        margin-top: 5px;
        height: 40px;
        width: 100%;
      }
      input[type=email]{
          padding: 10px;

      }
      .btn,.btn-forget{
        width: 100%;
        background-color: #FFB900;
        color: #FFFFFF;
        font-size: 1.5em;
      }
      .btn-forget:hover{
        font-size: 1.5em;
        background-color: #f5b301;
        color: #FFFFFF;
      }
      .col-lg-6{
        margin-top: 60px;
      }

      .hide{
        display: none;
      }

      .btn-circle{
        border-radius: 50%;
      }
    </style>

    <title></title>

</head>

<body class="body" style="background-color: #f2efef;">
    <div class="page-wrap">
        <div class="container">
          <div class="row hide-success">
            <div class="col-lg-5 col-lg-offset-3">
              <div class="panel panel-default" style="margin-top: 80px;">
                <div class="panel-heading" style="color:white;text-align: center;background: #d32f2f;font-size: 25px;">
                  Forgot password
                </div>
                <div class="panel-body">
                  <div style="padding-top: 20px;">
                    <p style="font-size: 15px;">Request password reset</p>
                    <input type="email" name="reset_email" id="reset_email" placeholder="Email Address" required>
                    <div class="text-center hide" id="loading">
                      <img src="<?php echo base_url()?>assets/images/loading.gif" height="100px" width="100px;">
                    </div>
                  </div>
                  <div class="row btnSend" style="margin-top: 50px;">
                    <div class="col-lg-5">
                      <button class="btn btn-warning" id="btn-reset" value="request reset">Send</button>
                    </div>
                    <div class="col-lg-2 col-lg-offset-5">
                      <a href="<?php echo base_url()?>index" class="home btn btn-warning btn-circle"><i class="fa fa-home"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container confirm-success" style="display:none;">
          <div class="jumbotron text-center">
            <h3 style="text-align: center;">Reset password link has been sent to your email.</h3>
            <a href="<?php echo base_url()?>/index" style="margin-top: 20px;">Home</a>
          </div>
        </div> 

    </div>

</body>

<script type="text/javascript">
  $('#btn-reset').click(function(){ 
    var data = $('#resetpass').serialize();
     var fail = false;
     var fail_log = '';
     var loading = $('#loading');
     var sending = $('#sending');
     var btnsend = $('.btnSend');
     var body = $('.body');
     var email = $('#reset_email').val();
     if(email == '' || email == null){
      alert("Enter an email"); return false;
     }
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
                btnsend.css('margin-top','0px');
                loading.removeClass('hide');
                sending.removeClass('hide');
                 $.ajax({
                    url: "confirmSend",
                    type: "POST",
                    data:{
                      'email': email,
                    },
                    success:function(data){
                        $('.confirm-success').show();
                        $('.hide-success').hide();
                        body.css('background-color','white');
                        loading.addClass('hide');
                        sending.addClass('hide');       
                        
                    }
                });

      


     }
     else{
           
            return false;

     }
 });

</script>

</html>