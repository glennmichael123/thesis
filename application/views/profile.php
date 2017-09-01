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
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

    <style type="text/css">
        *{
            font-family: 'Roboto', sans-serif;
        }
        body {
            background-color: #F4F4F4;
        }
        #student_info{

        }
        .jumbotron{
            background-color: #000080;
            padding: 20px 20px !important;
            color: #FFFFFF;
            font-size: 1.5em;
            border-radius: 0px !important;


        }
        .well{
            background: #FFFFFF;
            border-radius: 0px;
        }
        .profile-container{
            margin: 0 auto;
            text-align: center;

        }
        .profile-image{

            padding: 20px;
        }
        .profile-image>img.img-circle{
            width: 150px;
            height: 150px;
            border: 3px solid #C0C0C0;
        }
        .label.label-default.profile-name {
        background-color:#C0C0C0;
        padding: 5px 10px 5px 10px;
        border-radius: 27px;
        font-size: 1em;
        }
        legend{
            background-color: #FFFFFF;
            margin-bottom: 0px;
            width: auto; 
            border: 1px solid #C0C0C0;
            border-radius: 0px; 
            padding: 5px 5px 5px 10px; 
            color:  #000080
            text-align: center;
            font-size: 20px;

        }
        fieldset{
        border: 1px solid #C0C0C0 !important;
        margin: 0;
        padding: 10px;       
        position: relative;
        border-radius:4px;
        background-color:#FFFFFF;
        padding-left:10px!important;
        }
        #edit{
            float: right;
            margin-top: -25px;
            margin-right: -10px;
        }
        #btn-edit{
            background-color: #FFFFFF;
            border: 0px #FFFFFF;
        }
        #btn-edit1{
            background-color: #FFFFFF;
            border: 0px #FFFFFF;
        }
        .fa-pencil-square-o{
            color: #000080;
            font-size: 1.5em;
        }
        #pos{
            margin-top: 10px;
        }
        #second-fieldset{
            margin-top: 10px;
        }
        .labels{
            font-size: 15px;
            color: #000080;
            display: inline;
        }
        .personal-info{
            font-size: 13px;
            margin-left: 3px;
            display: inline;
            border: 0;
            color: #000000;
            width: 100%;
            background:none !important;
            box-shadow: none !important;

        }
        .family-info{
            font-size: 13px;
            margin-left: 3px;
            display: inline;
            border: 0;
            color: #000000;
            width: 100%;
            background:none !important;
            box-shadow: none !important;
        }
  
        span:hover{
            background-color: #777777;
            color: #FFFFFF;
        }

        .showBorder{
            border: 1px solid black !important;
            background: #CCCCCC; !important;
        }
        
    </style>

    <title></title>
</head>
<body>
    <div class="page-wrap">
        <div class="content">
            <div class="container">
                <div class="jumbotron">
                    <label ><span class="fa fa-user" aria-hidden="true"></span> Student Information</label>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="well">
                            <div class="profile-container">
                                <div class="profile-image">
                                    <img class="img-circle" src="<?php echo base_url()?>/assets/images/natoy.jpg">
                                </div>
                                <div style="margin-top: -10px;">
                                </div>
                                <div class="profile-name">
                                    <span class="label label-default">Renato A. Manalili Jr.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                    <fieldset>
                    <legend>Personal Information</legend>
                         <div id="edit">
                             <button id="btn-edit"><span class="fa fa-pencil-square-o" aria-hidden="true"></span></button>
                         </div>
                        <div class="row" id="pos">
                            <div class="col-lg-6">
                                <label class="labels">Course:</label>
                                  <input type="text" name="" value=" BSIT" readonly class="personal-info form-control" readonly="true">
                                  <label class="labels">College:</label>
                                <input type="text" name="" value=" College of Computer Studies" readonly class="personal-info form-control">
                                <label class="labels">Present Address:</label>
                                <input type="text" name="" value=" 4th Year" readonly class="personal-info form-control">
                                <label class="labels">Permanent Address:</label>
                                <input type="text" name="" value=" 4th Year" readonly class="personal-info form-control"><br>
                                <label class="labels">Phone or Landline:</label>
                                  <input type="text" name="" value=" BSIT" readonly class="personal-info form-control"><br>
                                    <label class="labels">Date of Birth:</label>
                                  <input type="text" name="" value=" BSIT" readonly class="personal-info form-control"><br>
                                  <label class="labels">Status:</label>
                                  <input type="text" name="" value=" BSIT" readonly class="personal-info form-control"><br>
                                  <label class="labels">Weight:</label>
                                  <input type="text" name="" value=" BSIT" readonly class="personal-info form-control"><br>
                                  <label class="labels">Religion:</label>
                                  <input type="text" name="" value=" BSIT" readonly class="personal-info form-control"><br>

                            </div>
                            <div class="col-lg-6">
                                <label class="labels">Year:</label>
                               <input type="text" name="" value=" 4th Year" readonly class="personal-info form-control"><br>
                               <label class="labels">Email Address:</label>
                               <input type="text" name="" value=" 4th Year" readonly class="personal-info form-control"><br>
                               <label class="labels">Age:</label>
                               <input type="text" name="" value=" 4th Year" readonly class="personal-info form-control"><br>
                               <label class="labels">Blood Type:</label>
                               <input type="text" name="" value=" 4th Year" readonly class="personal-info form-control"><br>
                               <label class="labels">Height in Cm:</label>
                               <input type="text" name="" value=" 4th Year" readonly class="personal-info form-control"><br>
                               <label class="labels">Citizenship:</label>
                               <input type="text" name="" value=" 4th Year" readonly class="personal-info form-control"><br>
                            </div>
                            </div>
                             <p style="text-align: center; margin-top: 10px;">
                               <button class="btn btn-primary bt" style="display: none" type="submit">Save Changes</button>
                               <button class="btn btn-danger bt" id="cancel"style="display: none;" type="button">Cancel</button>
                           </p>
                            
                    </fieldset>
                    <fieldset id="second-fieldset">
                    <legend>Family Data</legend>
                         <div id="edit">
                             <button id="btn-edit1"><span class="fa fa-pencil-square-o" aria-hidden="true"></span></button>
                         </div>
                        <div class="row" id="pos">
                            <div class="col-lg-6">
                                <label class="labels">Father's Name:</label>
                                  <input type="text" name="" value=" BSIT" readonly class="family-info form-control">
                                  <label class="labels">Mother's Name:</label>
                                  <input type="text" name="" value=" BSIT" readonly class="family-info form-control">
                                  <label class="labels">Parent's Address:</label>
                                <input type="text" name="" value=" 4th Year" readonly class="family-info form-control">
                                 <label class="labels">Landline or Mobile:</label>
                                <input type="text" name="" value=" 4th Year" readonly class="family-info form-control">
                            </div>
                            <div class="col-lg-6">
                               <label class="labels">Father's Occupation:</label>
                               <input type="text" name="" value=" 4th Year" readonly class="family-info form-control">
                                <label class="labels">Mother's Occupation:</label>
                               <input type="text" name="" value=" 4th Year" readonly class="family-info form-control">
                            </div>
                        </div>
                        <p style="text-align: center; margin-top: 10px;">
                               <button class="btn btn-primary bts" style="display: none" type="submit">Save Changes</button>
                               <button class="btn btn-danger bts" id="cancel"style="display: none;" type="button">Cancel</button>
                           </p>
                        
                    </fieldset>
                    </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>


    
       
</body>

<script type="text/javascript">
    $(document).ready(function() {
        
    });
</script>
<script type="text/javascript">
    $("#btn-edit").click(function(){
        $(".personal-info").addClass("showBorder");
        $(".personal-info").prop("readonly",false);
        $(".bt").css("display","inline-block");
    });
</script>
<script type="text/javascript">
    $("#cancel").click(function(){
        $(".personal-info").removeClass("showBorder");
        $(".personal-info").prop("readonly",true);
        $(".bt").css("display","none");
    });
</script>
<script type="text/javascript">
    $("#btn-edit1").click(function(){
         $(".family-info").addClass("showBorder");
         $(".family-info").prop("readonly",false);
         $(".bts").css("display","inline-block"); 
    });
</script>
<script type="text/javascript">
    $("#cancel").click(function(){
        $(".family-info").removeClass("showBorder");
        $(".family-info").prop("readonly",true);
        $(".bts").css("display","none");
    });
</script>

</html>