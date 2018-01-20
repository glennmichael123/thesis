<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="favicon.ico">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="<?php echo base_url() ?>assets/js/swal.js"></script>
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <style type="text/css">
        body {
            background-color: #F4F4F4;
        }
        
        .topper {
            margin-top: 20px;
        }
        
        .well {
            background-color: #FFD700;
            border-radius: 15px;
        }
        
        .panel-default{
          
            margin-top: 40px;
          
        }
        
        .panel-heading {
           
            background: none !important;
            background-color: #CA2E32 !important;
            color: #FFFFFF !important;
        }
        
        ol {
            list-style: lower-alpha;
        }
        
        textarea {
            height: 100px;
            width: 250px;
        }
        
        .score {
            height: 25px;
            width: 50px;
            
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
      
        a:hover{
            text-decoration: none;
        }
        .pointy {
            cursor: pointer;
        }
        
        li {
            color: black;
        }
        
        label {
            color: #A55D35;
            padding-bottom: 20px;
            padding-top: 20px;
        }
        
        .badge {
            background-color: #A55D35;
        }
        .modal-body{
            font-family: 'Roboto', sans-serif;
        }
        .fa-question-circle{
            color: #A55D35;
        }
        .popover-title{
        color: #0a0a0a;
        font-size: 15px;
        text-align: center;
        background-color: #fafafa;
        }
        .popover-content{
            text-align: left;
        }
    </style>

    <title></title>

</head>

<body>
    <div class="container tabOptions" style="margin-top: 10px">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#ojt1" id="toOjt1">OJT 1</a></li>
        <li><a data-toggle="tab" href="#ojt2" id="toOjt2">OJT 2</a></li>
      </ul>
     <div class="tab-content">
        <div id="ojt1" class="tab-pane fade in active">
          <div class="content ojt1MidtermContent">

         </div>
        <div id="ojt2" class="tab-pane fade">
          <div class="content ojt2MidtermContent">

         </div>
      </div>
    </div>
       
</body>
<script type="text/javascript">
    $(document).ready(function(){
        $(function(){
          $('[data-toggle="popover"]').popover();
        });
        $('body').find('input, textarea').each(function(){
            $(this).prop('readonly', true);
        });

        $.ajax({
          type:'POST',
          url:'<?php echo base_url() ?>/'+'loadMidtermEvaluations',
            data:{
              'ojt_program':"ojt_one",
              'username':"<?php echo $username;?>",
            },
          success: function(data){
            $('.ojt1MidtermContent').html(data);
            $('.ojt2MidtermContent').html("");
          }
        });
    });

    $('#toOjt1').click(function(){
        $.ajax({
          type:'POST',
          url:'<?php echo base_url() ?>/'+'loadMidtermEvaluations',
          data:{
            'ojt_program':"ojt_one",
             'username':"<?php echo $username;?>",
          },
          success: function(data){
            $('.ojt1MidtermContent').html(data);
            $('.ojt2MidtermContent').html("");
          }
        });
    });
    $('#toOjt2').click(function(){
        $.ajax({
          type:'POST',
          url:'<?php echo base_url() ?>/'+'loadMidtermEvaluations',
          data:{
              'ojt_program':"ojt_two",
              'username':"<?php echo $username;?>",
          },
          success: function(data){
            $('.ojt2MidtermContent').html(data);
            $('.ojt1MidtermContent').html("");
          }
        });
    });
</script>

</html>