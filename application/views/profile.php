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
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

    <style type="text/css">
        *{
            font-family: 'Roboto', sans-serif;
        }
        body {
            background-color: #F4F4F4;
        }
        
        
        .jumbotron{
            background-color: #EDC844;
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
            border: 3px solid #915B51;
        }
        .label-default{
        background-color:#A55D35;
        padding: 5px 10px 5px 10px;
        border-radius: 30px;
        font-size: 1em;
        }
        legend{
            background-color: #915B51;
            margin-bottom: 0px;
            width: auto; 
            border: 1px solid #915B51;
            border-radius: 0px; 
            padding: 5px 5px 5px 10px; 
            color:  #EED090;
            font-size: 20px;
            font-family: 'Oswald', sans-serif;

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
        #btn-edit,#btn-edit1,#btn-edit2{
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
            color: #000000;
            display: inline;
            font-family: 'Roboto', sans-serif;
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
            background-color: none;
            color: none;
        }

        .showBorder{
            border: 1px solid #e5e6e8 !important;
            background: #F4F4F4 !important;
        }
        h2{
            text-align: center;
            color:  #915B51;
            font-family: 'Oswald', sans-serif;

        }
        
    </style>

    <title></title>
</head>
<body>
    <div class="page-wrap">
        <div class="content">
            <div class="container">
                <div class="jumbotron">
                    <label style="color: #A55D35;"><span class="fa fa-user" aria-hidden="true"></span> Student Information</label>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="well">
                            <div class="profile-container">
                                
                                    <div class="profile-image">
                                        
                                        <?php if($personalDetails[0]['image_id'] == '<i class="fa fa-user-circle fa-5x" style="font-size: 150px;" aria-hidden="true"></i>'):?>
                                            <?php echo $personalDetails[0]['image_id'];?>

                                             <img class="img-circle" src="" style="display: none;">
                                        <?php else:?>
                                            <?php echo $personalDetails[0]['image_id']?>
                                            
                                        <?php endif; ?>
                                       
                                        
                                    </div>
                                    <div style="margin-top: -10px;"></div>
                                    <div class="profile-name">
                                        <div class="label label-default"><?php echo $personalDetails[0]['first_name']." ".$personalDetails[0]['middle_initial']." ".$personalDetails[0]['last_name'];?>
                                    </div>
                                    </div>
                                    <div class="change-photo" style="margin-top: 10px">
                                        <!-- browse -->
                                        <button class="btn btn-default click-photo" id="btn-browse"><i class="fa fa-picture-o" aria-hidden="true"></i></button>
                                        <button class="btn btn-default"><i class="fa fa-camera" aria-hidden="true"></i></button>
                                    </div>
                                   
                                <form action="saveImage" method="POST" enctype="multipart/form-data">
                                    <input class="browse-photo" type="file" accept="image/*" onchange="previewFile()" name="files" style="display: none;">
                                      <div class="saveCancel" style="margin-top: 10px; display: none;">
                                        <button type="submit"class="btn btn-default" style="width:75px" id="saveBrowse" name="saveBrowse">Save</button>
                                        <button type="button" class="btn btn-default" id="cancelBrowse">Cancel</button>
                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                    <fieldset>
                    <legend><i class="fa fa-user"></i>Personal Information</legend>
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
                               <button class="btn btn-danger bt" id="cancel" style="display: none;" type="button">Cancel</button>
                           </p>
                            
                    </fieldset>
                    <fieldset id="second-fieldset">
                    <legend><i class="fa fa-users"></i>Family Data</legend>
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

                               <button class="btn btn-danger bts" id="cancels"style="display: none;" type="button">Cancel</button>

                           </p>
                        
                    </fieldset>
                     <fieldset id="second-fieldset">
                    <legend><i class="fa fa-building-o"> </i>Company Information</legend>
                         <div id="edit">
                             <button id="btn-edit2"><span class="fa fa-pencil-square-o" aria-hidden="true"></span></button>
                         </div>
                        <div class="row" id="pos">
                            <div class="col-lg-6">
                                <label class="labels">Company Name:</label>
                                  <input type="text" name="" value=" BSIT" readonly class="family-info form-control">
                                  <label class="labels">Company Address:</label>
                                  <input type="text" name="" value=" BSIT" readonly class="family-info form-control">
                                  <label class="labels">Telephone Number:</label>
                                <input type="text" name="" value=" 4th Year" readonly class="family-info form-control">
                                
                            </div>
                            <div class="col-lg-6">
                             <label class="labels">Product Lines:</label>
                                <input type="text" name="" value=" 4th Year" readonly class="family-info form-control">
                               <label class="labels">Fax Number:</label>
                               <input type="text" name="" value=" 4th Year" readonly class="family-info form-control">
                            </div>
                        </div>
                        <div class="row">
                            <h2>Company Classification <i class="fa fa-list-alt" aria-hidden="true"></i></h2>
                             <div class="col-lg-2">
                            <input id="assembly" value="assembly" type="checkbox"><label class="labels" for="assembly">Assembly</label>
                         </div> 
                         <div class="col-lg-2">
                            <input type="checkbox" value="manufacturing" id="manufacturing"><label class="labels"for="manufacturing">Manufacturing</label>
                         </div> 
                         <div class="col-lg-2">
                            <input type="checkbox" value="maintenance" id="maintenance"><label class="labels"for="maintenance">Maintenance</label>
                         </div>
                         <div class="col-lg-3">
                            <input type="checkbox" value="marketing" id="marketing"><label class="labels"for="marketing">Sales/Marketing</label>
                         </div>
                         <div class="col-lg-3">
                             <input type="checkbox" value="service" id="service"><label class="labels"for="service">Service/Utility</label>
                         </div>
                         
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            
                              <input type="checkbox" value="research" id="research"><label class="labels"for="research">Research and Development</label>
                            
                          </div>
                          <div class="col-lg-2">
                            <input type="checkbox" value="itrelated" id="itrelated"><label class="labels"for="itrelated">IT Related</label>
                          </div>
                          <div class="col-lg-5">
                               <input type="radio" class="other-company" id="other"><label class="labels"for="other">Others</label>
                               <input type="text" id="other_classification" name="other_classification" style="height: 15px; width: 250px; display: none;" placeholder="Please specify">
                          </div>
                       
                        </div>
                        <div class="row">
                            <h2 class="fs-title">Total number of employees <i class="fa fa-list-ol" aria-hidden="true"></i></h2>
                            <div class="col-lg-3 col-lg-offset-1">
                              <input type="radio" id="less_fifty" value="Less than 50" name="employee_numbers"><label class="labels"for="less_fifty">Less than 50</label>
             
                            </div>
                            <div class="col-lg-3 col-lg-offset-1">
                               <input type="radio" id="fifty_onehundred" value="From 50 to 100" name="employee_numbers"><label class="labels"for="fifty_onehundred">From 50 to 100</label>
             
                            </div>
                            <div class="col-lg-3 col-lg-offset-1">
                                <input type="radio" id="more_onehundred" value="More than 100" name="employee_numbers"><label class="labels"for="more_onehundred">More than 100</label>
                            </div>
                        </div>
                        </div>
                        <p style="text-align: center; margin-top: 10px;">
                               <button class="btn btn-primary bts" style="display: none" type="submit">Save Changes</button>
                               <button class="btn btn-danger bts" id="cancels" style="display: none;" type="button">Cancel</button>
                           </p>
                    </fieldset>
                    </div>
                   
                    </div>
                </div>
            </div>    
        </div>
    </div>


    
       
</body>

<!-- click save from browse photo -->


<!-- click cancel from browse photo -->
<script type="text/javascript">
    $("#cancelBrowse").click(function(){
        $(".saveCancel").css("display","none");
        location.reload();
    });
</script>

<script type="text/javascript">
    $("span").hover(function() {
        $(this).css("background", "none");
        $(this).css("color", "#000");
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
    $("#cancels").click(function(){
        $(".family-info").removeClass("showBorder");
        $(".family-info").prop("readonly",true);
        $(".bts").css("display","none");
    });

    $('.click-photo').click(function(){
        $('.browse-photo').trigger('click');
    });
</script>


<script type="text/javascript">
  
    function previewFile() {
     var preview = document.querySelector('img');
     var file    = document.querySelector('input[type=file]').files[0];
     var reader  = new FileReader();

     reader.addEventListener("load", function () {
       preview.src = reader.result;
       $('img').show();
       $('.fa-user-circle').hide();
       $(".saveCancel").css("display","inline-block");
    }, false);

    if (file) {
     reader.readAsDataURL(file);
     alert(reader.readAsDataURL(file));
    }
}
</script>
</html>