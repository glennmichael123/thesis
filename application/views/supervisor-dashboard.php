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
    <script src="<?php echo base_url()?>assets/js/progressbar/dist/progressbar.js"></script>
    <script src="<?php echo base_url()?>assets/js/progressbar/dist/progressbar.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <style type="text/css">
        body {
            background-color: #F4F4F4;
        }
        
        .jumbotron {
            background-color: #EED090;
            padding: 10px;
            color: white;
            font-size: 1.5em;
            margin-top: 10px;
            margin-left: 10px;
            margin-right: 10px;
        }
        
        .wells {
            background-color: #0C1021;
        }
        
        * {
            font-family: Roboto, sans-serif;
        }
        
        .btn {
            border-radius: 0;
        }
        
        .form-control {
            border-radius: 0;
        }
        
        .circular-square {
            border-top-left-radius: 50% 50%;
            border-top-right-radius: 50% 50%;
            border-bottom-right-radius: 50% 50%;
            border-bottom-left-radius: 50% 50%;
        }
        
        .header {
            height: 60px;
        }
        
        .mission {
            height: 200px;
        }
        
        .txt {
            text-align: justify;
            font-size: 1em;
            padding: 30px;
            margin-top: -40px;
        }
        
        .title-txt {
            text-align: center;
            font-weight: bold;
            font-size: 3em;
            color: #800000;
        }
        
        .missim {
            height: 75px;
            margin-top: -10px;
        }
        
        h1,
        h2,
        h3,
        h4,
        h5 {
            margin: 0;
        }
        
        .nav {
            float: right;
        }
        
        .nav a {
            color: #915B51;
        }
        
        .nav>li>a:hover,
        .nav>li>a:focus,
        .nav .open>a,
        .nav .open>a:hover,
        .nav .open>a:focus {
            background: inherit;
        }
        
        .dropdown {
            background: inherit;
            border: 1px solid inherit;
            border-radius: 4px;
            width: 90px;
        }
        
        .dropdown-menu>li>a {
            color: #915B51;
        }
        
        .dropdown ul.dropdown-menu {
            border-radius: 4px;
            box-shadow: none;
            margin-top: 20px;
            margin-left: -200px;
            width: 280px;
        }
        
        .dropdown ul.dropdown-menu:before {
            content: "";
            border-bottom: 10px solid #fff;
            border-right: 10px solid transparent;
            border-left: 10px solid transparent;
            position: absolute;
            top: -10px;
            right: 16px;
            z-index: 10;
        }
        
        .dropdown ul.dropdown-menu:after {
            content: "";
            border-bottom: 12px solid #ccc;
            border-right: 12px solid transparent;
            border-left: 12px solid transparent;
            position: absolute;
            top: -12px;
            right: 14px;
            z-index: 9;
        }
        
        #trainees {}
        
        .badge {
            background: #09ba20;
        }
        
        .progress {
            height: 35px;
        }
        
        .progress .skill {
            font: normal 12px "Open Sans Web";
            line-height: 35px;
            padding: 0;
            text-transform: uppercase;
            font-family: Roboto, sans-serif;
            color: #fff;

        }
        
        .progress-bar {
            text-align: center;
            transition-duration: 3s;

        }

        .logs-list-ojt{
            margin-top: 20px;
        }

           .logs-title {
            margin-bottom: 20px;
        }
        
        .btn {
            border-radius: 0;
        }

         .logs-lists label {
            font-size: 11px;
        }
        
        .logs-lists input {
            font-size: 11px;
            border: none;
            background-color: #fff;
        }
        
        #log_lists_activity {
            width: 100%;
            font-size: 11px;
            border: none;
            background-color: #fff;
            resize: none;
        }
        
        #log_lists_activity:focus {
            border-color: none;
        }
        
        .list-logs {
            width: 100%;
            padding: 2px;
        }
        .well{
            border-radius: 0px;
            margin-bottom: 20px;
        }
        .evaluator-option{
            color: #000;
            font-size: 13px;
        }
         .evaluator-option:hover{
            color: #000;

        }

        .profile-image{

            padding: 20px;
        }
        .profile-image>img.img-circle{
            width: 150px;
            height: 150px;
            border: 2px solid #f44336;
        }

        .label-default{
        background-color: white;
        font-family: Arial, Helvetica, sans-serif;
        padding: 5px 10px 5px 10px;
        border-radius: 10px;
        font-size: 1.3em;
        color:#f44336;
        }

        .comment-btn:focus{
            color: #000;
        }
        
    </style>



    <title>OJT Automate</title>

</head>

<body>

    <div class="page-wrap">

        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="logo"><img src="<?php echo base_url();?>assets/images/logo.png" style="width: 120px;"></div>
                    </div>
                    <div class="col-lg-7">

                    </div>
                    <div class="col-lg-1">

                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" id="dropdown-logout" data-toggle="dropdown">
                                
                                    <?php if ($supImage[0]['image_id'] == '<i class="fa fa-user-circle pull-right" style="font-size: 40px; margin-top: -5px;" aria-hidden="true"></i>'):?>
                                    <?php echo $supImage[0]['image_id'];?>
                                    <?php else:?> 
                                        <img src="<?php echo base_url().$supImage[0]['image_id'];?>" class="pull-right circular-square user-image" style="width: 40px; height: 40px; margin-top: -5px;">
                                    <?php endif ?>

                                <ul class="dropdown-menu" id="show-logout">
                                    <li><a href="#">Dashboard<i class="fa fa-tachometer pull-right"></i></a></li>
                                    <li class="divider"></li>

                                    <li><a href="#" data-toggle="modal" data-target="#changeImage">Change profile image<i class="fa fa-picture-o pull-right" aria-hidden="true"></i></a></li>
                                    <li class="divider"></li>

                                    <li><a href="changepassword">Change password <i class="fa fa-key pull-right" aria-hidden="true"></i></a></li>
                                    <li class="divider"></li>

                                    <li><a href="logout">Log Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
        <div class="content">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="jumbotron">Dashboard
                            <button class="btn btn-primary" style="float: right;" data-target="#addtraineeModal" data-toggle="modal">+Trainee</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-4">
                        <div class="well">

                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 style="text-align: center;">Trainees Completed</h4>
                                    <div class="progress skill-bar">

                                        <div class="progress-bar progress-bar-first" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                            <span class="skill">3/5</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 style="text-align: center;">Evaluations</h4>
                                    <div class="progress skill-bar">

                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                            <span class="skill">2/10</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 style="text-align: center;">Pending logs</h4>
                                    <div class="progress skill-bar">

                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                            <span class="skill">10</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col-lg-5">
                                <select class="form-control">
                                    <option selected disabled>Select a trainee</option>
                                </select>

                            </div>
                            <div class="col-lg-5">
                                <select class="form-control">
                                    <option selected disabled>Log status</option>
                                    <option>Pending</option>
                                    <option>Verified</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <button class="btn btn-default" disabled>Evaluate</button>
                            </div>
                        </div>

               
                    <?php foreach($traineesLog as $log):?>
                        <div class="row row-logs"  style="color:#000;">
                       
                             <div class="col-lg-12" >
                                <div class="well" style="background: #fff; padding-bottom: 0; padding-top: 10px">
                                    <span class="user-name"><a href="studentDashboard/<?php echo $log['id_number'];?>"><i class="fa fa-user-circle"></i><?php echo $log['first_name'] . " " .$log['last_name']?></span></a>
                                  
                                    <hr style="margin-top: 0; margin-bottom: 0">

                                    <form method="post">
                                        <div class="row">
                                            <div class="logs-lists">
                                                <div class="col-lg-6">

                                                    <div class="form-group">
                                                        <label>Date</label>
                                                        <input type="text" class="list-logs" name="log_list_date" id="log_list_date" value="<?php echo $log['date'];?>" readonly>
                                                        <label>Division</label>
                                                        <input type="text" class="list-logs" name="log_list_division" id="log_list_division" value="<?php echo $log['division']?>" readonly>
                                                        <label>Deparment/Area</label>
                                                        <input type="text" class="list-logs" name="log_lists_department" value="<?php echo $log['department']?>" id="log_lists_department" readonly>
                                                        <label>Designation</label>
                                                        <input type="text" class="list-logs" value="<?php echo $log['designation']?>" name="    log_lists_designation" id="log_lists_designation" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Time In</label>
                                                        <input type="time" class="list-logs" name="log_lists_time_in" value="<?php echo $log['time_in']?>" id="log_lists_time_in" readonly>
                                                        <label>Time Out</label>
                                                        <input type="time" class="list-logs" name="log_lists_time_out" value="<?php echo $log['time_out']?>" id="log_lists_time_out" readonly>
                                                        <label>Hours Rendered</label>
                                                        <input type="text" class="list-logs" name="log_lists_hours_rendered" id="log_lists_hours_rendered" value="<?php echo $log['hours_rendered']?>" readonly>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                            <label style="font-size: 11px;">Activity</label>
                                            <textarea class="list-logs" name="log_lists_activity" id="log_lists_activity" placeholder="Write your log here" readonly><?php echo $log['log_content']?></textarea>

                                            <?php if($log['verified']):?>
                                                     <span style="color:green; font-size: 11px; position: absolute; top: 280px; left: 700px;"> Verified  <i style="color: green;" class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                 <?php else:?>
                                                     <span class="pending-log" style="color:black; font-size: 11px; position: absolute; top: 280px; left: 700px;"> Pending  <i style="color: green;" class="fa fa-circle-thin" aria-hidden="true"></i></span>
                                                 <?php endif;?>


                                        
                                      
                                       
                                            
                                       
                                        
                                        <hr style="margin-bottom: 0; margin-top: 0;">

                                     <div class="row" style="padding-top: 5px; padding-bottom: 5px;">
                                        <div class="col-lg-2">
                                            <?php if($log['verified']):?>
                                                <a href="#" data-log-id="<?php echo $log['id']?>" style="color: #318ACE" class="evaluator-option verify-btn-verified"><i class="fa fa-check" aria-hidden="true"></i>Verified</a>
                                            <?php else:?>
                                                 <a href="#" data-log-id="<?php echo $log['id']?>" class="evaluator-option verify-btn"><i class="fa fa-check" aria-hidden="true"></i>Verify</a>
                                            <?php endif;?>
                                                
                                                 
                                        </div>
                                        <div class="col-lg-3">
                                            <a href="#" class="evaluator-option comment-btn"><i class="fa fa-comment" aria-hidden="true"></i>Comment</a>
                                        </div>
                                     </div>

                                

                                
                                     
                                     <div class="row">
                                        
                                            <div class="col-lg-12"> 

                                                    
                                                    <?php foreach ($comments as $comment):?>
                                                    <?php if(in_array($log['id'], $comment)):?>
                                                        <!-- <div class="well" style="box-shadow: none; border: none; background: #f7f7f7; padding: 10px; margin-bottom: 10px;"> -->
                                                         <div class="comments-list" style="font-size: 12px; margin-bottom: 10px;">
                                                              <b>Supervisor</b> <?php echo $comment['content'];?>
                                                                    <div class="dropdown" style="float: right; width:20px;">
                                                                            <a href="#" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                                                <i style="color: #000000; font-size: 15px;" class="fa fa-caret-down"></i>
                                                                            </a>

                                                                            <ul class="dropdown-menu" style="width: 180px; padding-bottom: 0px; padding-top: 0px; font-size: 11px; margin-left: -149px; margin-top: 5px;" aria-labelledby="dropdownMenu2">
                                                                                <li><a href="#" class="edit-log" style="color: #000000;">Edit <i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                                                                <li role="separator" class="divider" style="margin: 0;"> </li>
                                                                                <li><a href="#" class="delete-log cd-popup-trigger" data-log-id="<?php echo $log['id']?>" style="color: #000000;">Delete <i class="fa fa-trash"></i></a></li>
                                                                            </ul>

                                                                        </div>
                                                          </div>
                                                        
                                                    <?php endif;?>
                                                      <?php endforeach;?>
                                            </div>
                                         
                                     </div>

                                           
                                       
                                       
                                        
                                  
                                    <div class="row">

                                        
                                       <div class="comment-section" style="display: none;"> 
                                            <div class="col-lg-12">
                                                <hr style="margin-top: 0; margin-bottom: 5px;">
                                                <textarea style="height:45px; resize: none;" class="form-control comment-content" placeholder="Write your comment"></textarea>
                                                <button type="button" style="float: right; margin-top: 5px; margin-bottom: 5px; padding: 2px 5px 2px 5px;" class="btn btn-primary submit-comment" data-log-id="<?php echo $log['id']?>">Post</button>
                                            </div>
                                        </div>
                                        
                                     </div>
                                    
                                    </form>
                                   
                                </div>
                                  
                                </div>
                                 


                            </div>



                        <?php endforeach;?>
                      

                  
                    </div>

                </div>
            </div>

        </div>

        <!-- line modal -->
        <div class="modal fade" id="addtraineeModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content" style="border-radius: 12px">
                <div class="modal-header" style="background-color: #f44336;border-radius: 10px 10px 0 0">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title" id="lineModalLabel" style="color:white;">Add trainee</h3>
                </div>
                <div class="modal-body">
                    
                    <!-- content goes here -->
                    <form>
                      <div class="form-group">
                            <label>Trainee name</label>
                            <select class="form-control" style="margin-top:5px;border-radius: 5px" id="names">
                                <option selected disabled>Select trainee</option>
                                <?php foreach($supervisorAddOjt as $trainees):?>  
                                    <option value="<?php echo $trainees['id_number']?>"><?php echo $trainees['first_name'] . " " . $trainees['last_name']?></option>
                                <?php endforeach;?> 
                            </select>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                        <div class="btn-group" role="group">
                             <button type="button" class="btn btn-success btn-hover-green" data-action="save" role="button" style="width: 270px;border-radius: 5px" id="addTrainee" name="addTrainee">Add</button>
                        </div>
                        <div class="btn-group" role="group">
                           
                            <button type="button" class="btn btn-danger" data-dismiss="modal"  role="button" style="width: 270px;border-radius: 5px; float: right">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>

        <!-- MODAL CHANGE IMAGE -->

        <div class="modal fade" id="changeImage" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content" style="border-radius: 12px">
                <div class="modal-header" style="background-color: #d32f2f;border-radius: 10px 10px 0 0">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title" id="lineModalLabel" style="color:white">Change image</h3>
                </div>
                <div class="modal-body">
                    <!-- content goes here -->
                    <div class="profile-image" style="text-align: center">
                        
                        <?php if($supImage[0]['imageDisplayToChange'] == '<i class="fa fa-user-circle fa-5x" style="font-size: 150px;" aria-hidden="true"></i>'):?>
                            <?php echo $supImage[0]['imageDisplayToChange'];?>

                            <img class="img-circle" id="image-modal" src="" style="display: none;">
                        <?php else:?>
                           
                            <img src="<?php echo base_url().$supImage[0]['imageDisplayToChange']?>" class="img-circle" id="image-modal">
                        <?php endif; ?>

                        <div class="profile-name" style="margin-top: 15px">
                            <div class="label label-default"><?php echo $supImage[0]['name'];?></div>
                        </div>
                        <div class="change-photo" style="margin-top: 10px">
                            <!-- browse -->
                            <button class="btn btn-success click-photo" id="btn-browse"><i class="fa fa-picture-o" aria-hidden="true"></i> Browse image</button>
                        </div>

                        <form action="supervisorSaveImage" method="POST" enctype="multipart/form-data">
                            <input class="browse-photo" type="file" accept="image/*" onchange="previewFile()" name="supFiles" style="display: none;">
                            <div class="saveCancel" style="margin-top: 10px; display: none;">
                                <button type="submit" class="btn btn-default" style="width:75px" id="supSave" name="supSave">Save</button>
                                <button type="button" class="btn btn-default" id="cancelBrowse">Cancel</button>
                            </div>   
                        </form> 

                    </div>

                    
                    
                </div>
                <!-- <div class="modal-footer">
                    <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                        <div class="btn-group" role="group">
                             <button type="button" class="btn btn-primary btn-hover-green" data-action="save" role="button" style="width: 270px;border-radius: 5px" id="addTrainee" name="addTrainee">Save Changes</button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-success" data-dismiss="modal"  role="button" style="width: 150px;border-radius: 5px;float:right;display: block" id="btnSaveChanges">Save Changes</button>
                        </div>
                    </div>
                </div> -->
            </div>
          </div>
        </div>


</body>

<script type="text/javascript">
  
    function previewFile() {
     var preview = document.querySelector('#image-modal');
     var file    = document.querySelector('input[type=file]').files[0];
     var reader  = new FileReader();

     reader.addEventListener("load", function () {
       preview.src = reader.result;
       $('#image-modal').show();
       $('.fa-user-circle').hide();
       $(".saveCancel").css("display","inline-block");
    }, false);

    if (file) {
     reader.readAsDataURL(file);
     alert(reader.readAsDataURL(file));
    }
}
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.progress .progress-bar').css("width",
            function() {
                return $(this).attr("aria-valuenow") + "%";
            }
        )
    });

    //trigger browse photo
    $('.click-photo').click(function(){
        $('.browse-photo').trigger('click');
    });
</script>

<script type="text/javascript">
    $("#cancelBrowse").click(function(){
        $(".saveCancel").css("display","none");
        location.reload();
    });
</script>

<script type="text/javascript">
    $('.comment-btn').click(function(e){
        e.preventDefault();
        var commentSection = $(this).closest("form").find(".comment-section");

        commentSection.slideToggle();
      
    });

     $("#dropdown-logout").click(function() {
       $("#show-logout").slideToggle();
       $("#show-notifications").slideUp();
    });
</script>

<script type="text/javascript">
    $('.verify-btn').click(function(e){
        e.preventDefault();

        var log_id = $(this).data('log-id');
        var pending = $(this).closest('form').find('.pending-log');
                 


        $.ajax({
            url: '<?php echo base_url()?>' + 'main/verifyLog',
            method: 'POST',
            data:{
                'log_id' : log_id,

            },
            success: function(data){
               
                 pending.html('<span style="color: green;">Verified</span> <i style="color: green;" class="fa fa-check-circle" aria-hidden="true"></i>');
            }
        });

         $(this).css("color", "#318ACE");
         $(this).html('<i class="fa fa-check" aria-hidden="true"></i> Verified');
              
    });
</script>

<script type="text/javascript">
    $('.submit-comment').click(function(){
        var log_id = $(this).data('log-id');
        var comment = $(this).closest("form").find(".comment-content").val();

        $.ajax({
            url: '<?php echo base_url()?>' + 'main/addComment',
            method: 'POST',
            data:{
                'log_id': log_id,
                'comment': comment,
                'supervisor_id': '<?php echo $this->session->userdata['id_number'];?>'
            },

            success: function(data){
                location.reload(true);
            },
        });
    });
</script>

<script type="text/javascript">

      $(document).ready(function(){
          $("#addTrainee").click(function () {
            var studId = $('#names').val();

            if(studId == null){
             alert("Select a trainee");    
            }else{
                $.ajax({  
                url : "addTrainee",
                type : "POST",
                data : { 
                    'studentID': studId,
                    'supervisor_id': '<?php echo $this->session->userdata['id_number']?>',

                   },
                success:function(data){
                    location.reload();
                    alert('Trainee added successfully');
                  },
              });  
            }
          
          });
       });
</script>
</script>
</html>