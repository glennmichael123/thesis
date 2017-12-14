 
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
    <script src="<?php echo base_url() ?>assets/js/swal.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
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
        margin-top: 5px;
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




    </style>

    <title></title>

</head>

<body>
    <div class="page-wrap">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <header class="header-forget">Forgot Password?</header>
                <p>Request Password Reset</p>
                <div class="top-forget">a</div>
                <form method="POST" id="resetpass" >
                <input type="email" name="reset_email" id="reset_email" placeholder="Email Address" required>
                <button  class="btn btn-forget" id="btn-reset" value="request reset">Request Reset</button>
                </form>
            </div>
            <div class="col-lg-3"></div>
        </div>  

    </div>

</body>

<script type="text/javascript">
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