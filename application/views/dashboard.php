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
    <style type="text/css">
 
    .top{
        background-color: #915B51;
        height: 50px;
           
    }
    *{
        font-family: Roboto, sans-serif;

    }
    .header{
       height: 60px;
    }

    .mission{
        height: 200px;
       
    }
    .txt{
        text-align: justify;
        font-size: 1em;
        padding: 30px;
        margin-top: -40px;
    }
    .title-txt{
        text-align: center;
        font-weight: bold;
        font-size: 3em;
        color: #800000;

    }
    .missim{
        height: 75px;
        margin-top: -10px;
        
    }
    h1,h2,h3,h4,h5{
        margin: 0;
            
    }

.nav{
    float: right;
  


}
.nav a{
     color: #915B51;
}
.nav>li>a:hover, .nav>li>a:focus, .nav .open>a, .nav .open>a:hover, .nav .open>a:focus {
    background:inherit;
}
.dropdown {
    background:inherit;
    border:1px solid inherit;
    border-radius:4px;
    width:90px;   

}
.dropdown-menu>li>a {
     color: #915B51;

}
.dropdown ul.dropdown-menu {
    border-radius:4px;
    box-shadow:none;
    margin-top:20px;
    margin-left: -200px;
    width:280px;

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

.notification{
    float: right;
    margin-top: 20px;


}
.fa-bell-o{
    cursor: pointer;
    color: #915B51;
}
.fa-bell:hover{
    color: #A55D35;
}
li.notification-title{
    padding-left: 20px;
    padding-top: 10px;
}
li > .notifications{
    padding-left: 20px;
    color: #915B51;
    padding-top: 10px;
    width: 280px;
    display: inline-block;

}
li.notification-title{
    color: #915B51;
    font-weight: 600;
    padding-bottom: 10px;
}
.notifs{
    background-color: #EDF2FA;
    height:70px;
   
}
.fa-check:hover{
    cursor: pointer;
    color: #DABD95;
}
.fa-check{
    color:  #915B51;
}
.badge{
    background:#A55D35;
}
.as-all-read{
    float: right;
    padding-right: 20px;
    padding-top: 10px;
    font-size: 12px;
}
.circular-square {
  border-top-left-radius: 50% 50%;
  border-top-right-radius: 50% 50%;
  border-bottom-right-radius: 50% 50%;
  border-bottom-left-radius: 50% 50%;
}

.content{
    padding-top: 50px;
    padding-bottom: 50px;
    background: #E9EBEE;
    color: #000000 !important;
}
.dashboard-title{
    font-size: 15px;
    font-weight: 600;
}
.well{
   
    border: 1px solid #fdfdfd;
    border-radius: 0px;
    box-shadow: none;
    background: #f7f8f9;
}
.progress{
    margin-top: 10px;
}
.form-control{
    border-radius: 0;
}
input{
    height:30px;
}
label{
    display: block;
    margin-top: 10px;
    font-size: 13px;
}
#log_activity{
    height: 80px;
}
.logs-upper, .logs-lower{
    display: none;
}
.logs-title{
    margin-bottom: 20px;
}
.btn{
    border-radius: 0;
}
.logs-lists label{
    font-size: 11px;
}

.logs-lists input{
    font-size: 11px;
    border: none;
    background-color: #f7f8f9;
}

#log_lists_activity{
    width: 100%;
    font-size: 11px;
    border: none;
    background-color: #f7f8f9;
    resize: none;

}
#log_lists_activity:focus{
    border-color: none;
}

.list-logs{
    width: 100%;
    padding:2px;

}


 </style>
    <title></title>

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
                        <div class="notification">
                                <i class="fa fa-bell-o fa-2x" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                  </i><div class="badge" style="display: inline; position: relative; top: -20px; right:10px;" class="counter"><?php echo 5;?></div>

                                  <ul style="position: absolute; left: 445px; padding-bottom: 0px; width: 300px; border-radius: 0;" id="notification-content" class="dropdown-menu" aria-labelledby="dropdownMenu1">

                                    <li style="display: inline-block;" class="notification-title">Notifications </li><a class="as-all-read" href="#">Mark all as read</a>

                                  <?php for($i=1; $i<=5; $i++):?>
                                   
                                    <div class="notifs" >
                                        <li role="separator" class="divider" style="padding: 0; margin: 0;"></li>
                                        <li style="margin-bottom: 0">
                                              <div class="notifications">Westeros has been attacked</div>
                                                <i class="fa fa-check as-read" style="position: absolute; padding-top: 10px; right: 20px;" aria-hidden="true" title="Mark as read"></i>
                                         </li>
                                    </div>
                                    <?php endfor;?>
                                  </ul>
                         </div>
                       
                    </div>
              <div class="col-lg-1">

                          <ul class="nav navbar-nav">
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" id="dropdown-logout" data-toggle="dropdown"><img src="<?php echo base_url();?>/assets/images/snow.jpg" class="pull-right circular-square" style="width: 40px; height: 40px; margin-top: -5px;"> </a>
                              <ul class="dropdown-menu" id="show-logout">
                              <li><a href="#">Jon Snow <span class="glyphicon glyphicon-user pull-right"></span></a></li>
                                <li class="divider"></li>
                                <li><a href="#">Dashboard<i class="fa fa-tachometer pull-right"></i></span></a></li>
                                <li class="divider"></li>
        
                                <li><a href="changepassword">Change password <i class="fa fa-key pull-right" aria-hidden="true"></i></a></li>
                                <li class="divider"></li>
                    
                                <li><a href="index">Log Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
                              </ul>
                            </li>
                          </ul>
                    </div>

              </div>
                    
                  
                    
                </div>
            </div>
        </div>
        <div class="content">
             <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h2 style="padding:0px 0px 20px 0px;">Dashboard</h2>
                    </div>
                    
                </div>

             </div>
             <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="dashboard-info-student well">
                            <div class="dashboard-title hours">
                                <span>Number of hours rendered</span>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70"
                                  aria-valuemin="0" aria-valuemax="200" style="width:<?php echo ($rendered/$total)*100;?>%">
                                   <?php echo $rendered?>/200
                                  </div>
                                </div>
                            </div>

                            <div class="dashboard-title evaluations">
                                <span>Evaluations</span>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70"
                                  aria-valuemin="0" aria-valuemax="2" style="width:<?php echo ($now/$all)*100;?>%">
                                    <?php echo $now?>/<?php echo $all?>
                                  </div>
                                </div>
                            </div>

                             <div class="dashboard-title logs">
                                <span>Verified Logs</span>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70"
                                  aria-valuemin="0" aria-valuemax="2" style="width:<?php echo ($rendered/$total)*100;?>%">
                                    <?php echo $rendered?>/<?php echo $total?>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="logs-students">
                            <div class="well">
                                <div class="logs-title">
                                    <span>Post your log <i class="fa fa-paper-plane-o" aria-hidden="true"></i></span>
                                </div>
                            <form class="logs-display" method="post">
                                <div class="row logs-upper">
                                    <div class="col-lg-6">
                                       
                                             <div class="form-group">
                                                <label>Date</label>
                                                <input type="date" class="form-control" name="log_date" id="log_date">
                                                <label>Division</label>
                                                <input type="text" class="form-control" name="division" id="division">
                                                 <label>Deparment/Area</label>
                                                <input type="text" class="form-control" name="department" id="department">
                                                 <label>Designation</label>
                                                <input type="text" class="form-control" name="designation" id="designation">
                                             </div>
                                             

                                      
                                    </div>
                                    <div class="col-lg-6">
                                           <div class="form-group">
                                                <label>Time In</label>
                                                <input type="time" class="form-control" name="time_in" id="time_in">
                                                <label>Time Out</label>
                                                <input type="time" class="form-control" name="time_out" id="time_outs">
                                               <label>Hours Rendered</label>
                                                <input type="text" class="form-control" name="hours_rendered" id="hours_rendered">
                                             </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="log_activity" id="log_activity" placeholder="Write your log here" class="form-control"></textarea>
                                </div>
                                <div class="form-group logs-lower"> 
                                    <button type="submit" name="submit_log" id="submit_log" class="btn btn-primary" value="Submit">Post</button>
                                    <button type="button" class="btn btn-success">Load last log</button>
                                    <button type="reset" class="btn btn-default">Clear</button>
                                    <button type="button" class="btn btn-danger cancel-btn" style="float: right;" class="btn btn-danger">Cancel</button>
                                </div>

                            </form>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- LOGSSSSS LISSSSSTTTT -->
                 <?php for($i=1;$i<=5;$i++):?>
                <div class="row">
                    <div class="col-lg-4">
                    </div>
                   
                    <div class="col-lg-8">
                    <div class="well">
                    <span class="user-name">Jon Snow</span>
                    <div class="dropdown" style="float: right; width:20px;">
                      <a href="#" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                             <i style="color: #000000;" class="fa fa-angle-down"></i> 
                      </a>
                    
                      <ul class="dropdown-menu" style="width: 233px;" aria-labelledby="dropdownMenu2">
                        <li ><a href="#" class="edit-log" style="color: #000000;">Edit <i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                         <li role="separator" class="divider"> </li>
                        <li><a href="#" class="delete-log" style="color: #000000;">Delete <i class="fa fa-trash"></i></a></li>
                      </ul>
                    
                    </div>
               
                    <hr>
           
                            <form method="post">
                                <div class="row">
                                <div class="logs-lists">
                                    <div class="col-lg-6">
                                     
                                             <div class="form-group">
                                                <label>Date</label>
                                                <input type="text" class="list-logs" name="log_list_date" id="log_list_date" value="<?php echo date("Y/m/d");?>" readonly>
                                                <label>Division</label>
                                                <input type="text" class="list-logs"  name="log_list_division" id="log_list_division" value="Westeros" readonly>
                                                 <label>Deparment/Area</label>
                                                <input type="text" class="list-logs"  name="log_lists_department" value="Night's Watch" id="log_lists_department" readonly>
                                                 <label>Designation</label>
                                                <input type="text" class="list-logs" value="Castle Black" name="    log_lists_designation" id="log_lists_designation" readonly>
                                        </div>
                                      </div>       

                                      
                                
                                    <div class="col-lg-6">
                                           <div class="form-group">
                                                <label>Time In</label>
                                                <input type="text" class="list-logs" name="log_lists_time_in" value="8:30" id="log_lists_time_in" readonly>
                                                <label>Time Out</label>
                                                <input type="text" class="list-logs" name="log_lists_time_out" value="12:30" id="log_lists_time_out" readonly>
                                               <label>Hours Rendered</label>
                                                <input type="text" class="list-logs"  name="log_lists_hours_rendered" id="log_lists_hours_rendered" value="6" readonly>
                                
                                            </div>
                                    </div>
                                </div>
                                </div>
                                <div class="form-group">
                                    <label>Activity</label>
                                        <textarea class="list-logs"  name="log_lists_activity" id="log_lists_activity" placeholder="Write your log here" readonly>Killed white walkers and wildlings</textarea>
                                </div>

                                 <div class="form-group">
                                    <label>Comments</label>
                                        <span style="font-size: 11px;">No comments</span>

                                          <span style="float: right; color:green; font-size: 11px;"> Verified  <i style="color: green;" class="fa fa-check-circle" aria-hidden="true"></i></span>  
                            
                         
                                </div>
                                <div class="save-edit" style="display: none;">
                                    <button type="submit" class="btn btn-success">Save</button>
                                    <button type="button" class="cancel-edit btn btn-danger" class="btn btn-danger">Cancel</button>
                                </div>
                                

                            </form>
                    </div>
              
                       </div>
                    </div>
                      <?php endfor;?>
                </div>
             </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright">
                            &copy;Copyright OJT Automate 2017 | All rights reserved
                        </div>
                    </div>
                </div>
            </div>

        </div>
</body>

<script type="text/javascript">
    $("#dropdownMenu1").click(function(){
        $('#notification-content').slideToggle();
         $("#show-logout").slideUp();
    
         $('#dropdownMenu1').css("color","red");

    });

    $("#dropdown-logout").click(function(){
        $("#show-logout").slideToggle();
        $('#notification-content').slideUp();
    });
</script>

<script type="text/javascript">
    $("span").hover(function(){
        $("span").css("background","none");
        $("span").css("color","#000");
    })
</script>
<script type="text/javascript">
    $("#log_activity").click(function(){
      
        $('.logs-upper').show();
        $('.logs-lower').show();
    });

     $(".cancel-btn").click(function(){
        $('.logs-upper').hide();
        $('.logs-lower').hide();
    });

</script>
<script type="text/javascript">
    $('.delete-log').click(function(){
       var test = $(this).closest('.row');

    test.remove();
    });


$('.edit-log').click(function(e){
    e.preventDefault();
   var input =  $(this).closest(".row").find(".list-logs");
    var buttons =  $(this).closest(".row").find(".save-edit");
   buttons.show();
   input.prop('readonly',false);
   input.css('border','1px solid #CCCCCC');
   input.css('background','#fff');

});
</script>

<script type="text/javascript">
    $('.cancel-edit').click(function(){
        location.reload(true);
    });

</script>


</html>