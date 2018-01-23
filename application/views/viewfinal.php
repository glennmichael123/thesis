<!DOCTYPE html>
  <html>
    <head>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="<?php echo base_url() ?>assets/js/swal.js"></script>
      <!-- Optional theme -->
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

      <!-- Latest compiled and minified JavaScript -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <!-- <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/> -->
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/materialize.min.css">
      <!-- <link rel="stylesheet" href="<?php #echo base_url() ?>assets/css/style.css"> -->
      
       <!-- Compiled and minified JavaScript -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </head>
    <style type="text/css">
      h1.heading{
        text-transform: uppercase;
        font-size: 2.5em;
        font-weight: bold;
        text-align: center;
        color: white;
      }
      h3.heading{
        text-align: center;
        font-weight: bold;
        text-transform: uppercase;
        margin-top: -15px;
        font-size: 1.5em;
        color: white;
      }
      header{
        background-color: #ca2e32;
        height: 150px;
        margin-top: -20px;
        padding: 20px;
        box-shadow: 5px 5px 5px gray;
      }
      #wrapper{
        margin-top: 10px;
      }
      h4.parts{
        background-color: #ffba00;
        font-size: 1.3em;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 5px 5px 5px gray;
      }
      .first-field{
        margin-top: 25px;
      }
      h4.factors{
        text-align: center;
        text-transform: uppercase;
      }
      p.list{
        text-transform: uppercase;
        font-weight: bold;
      }
      p.lists{
        text-align: center;
      }
      .red-border{
      	border-bottom: 1px solid red !important;
      }

      a.tooltipped{
        text-decoration: none;
      }
      span.rate{
        margin-left: 40%;
      }
    </style>
 
    <body>
    <header>
      <h1 class="heading">On-The-Job Training</h1>
      <h3 class="heading">Performance Evaluation Report</h3>
    </header>
    <div class="row" style="margin-top: 20px;">
    <div class="col s9 offset-s3">
      <ul class="tabs">
        <li id="toOjt1" class="tab col s3"><a href="#ojt1">OJT 1</a></li>
        <li id="toOjt2" class="tab col s3"><a href="#ojt2">OJT 2</a></li>
      
      </ul>
    </div>
    <div id="ojt1" class="col s12">
      <div class="content ojt1FinalContent">
    </div>
  </div>

    <div id="ojt2" class="col s12">
    
      <div class="content ojt2FinalContent">
      </div>
    </div>
      
  
      </body>
<script src="<?php echo base_url() ?>assets/js/materialize.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
            $('body').find('input, textarea').each(function(){
            $(this).prop('readonly', true);
        });

        $.ajax({
          type:'POST',
          url:'<?php echo base_url() ?>/'+'loadFinalEvaluations',
            data:{
              'ojt_program':"ojt_one",
              'username':"<?php echo $username;?>",
            },
          success: function(data){
            $('.ojt1FinalContent').html(data);
            $('.ojt2FinalContent').html("");
          }
        });
    });

    $('#toOjt1').click(function(){
        $.ajax({
          type:'POST',
          url:'<?php echo base_url() ?>/'+'loadFinalEvaluations',
          data:{
            'ojt_program':"ojt_one",
             'username':"<?php echo $username;?>",
          },
          success: function(data){
            $('.ojt1FinalContent').html(data);
            $('.ojt2FinalContent').html("");
          }
        });
    });
    $('#toOjt2').click(function(){
      // var ojt2 = $('body').find('.ojt1FinalContent');
        $.ajax({
          type:'POST',
          url:'<?php echo base_url() ?>/'+'loadFinalEvaluations',
          data:{
              'ojt_program':"ojt_two",
              'username':"<?php echo $username;?>",
          },
          success: function(data){
      
             $('.ojt2FinalContent').html(data);
            $('.ojt1FinalContent').html("");
          }
        });
    });
</script>


      <!--Import jQuery before materialize.js-->
      
  
 

<!-- <script type="text/javascript">

    // $('body').on('find','input, textarea').each(function(){
    //         $(this).prop('readonly', true);
    //     });
    $(document).on('ready',function(){

       $('body').on('find','input, textarea').each(function(){
            $(this).prop('readonly', true);
        });
    })
   
</script> -->
    
  </html>