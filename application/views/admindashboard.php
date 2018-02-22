<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="favicon.ico">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php base_url()?>assets/css/bootstrap.min.css">
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <!-- Optional theme -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-theme.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Latest compiled and minified JavaScript -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
   <script src="<?php echo base_url()?>assets/js/chart.min.js"></script>
   <script src="<?php echo base_url()?>assets/js/chart.js"></script>
   <script src="<?php echo base_url()?>assets/js/chart.bundle.min.js"></script>
   <script src="<?php echo base_url()?>assets/js/chart.bundle.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Sweet Alert -->
    <script src="<?php echo base_url()?>assets/js/swal.js"></script>
    <!-- <script src="bower_components/sweetalert2/dist/sweetalert2.all.min.js"></script> -->

    <!-- Data table -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/dataTables.bootstrap.min.css">
    
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/dataTables.bootstrap.min.js"></script>

    <!-- <script type="text/javascript" src="jquery.dataTables.js"></script>
    <script type="text/javascript" src="dataTables.scrollingPagination.js"></script>
 -->

    <!-- AutoComplete Jquery huehue -->
    <script src="<?php echo base_url() ?>assets/js/jquery-ui.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui.css">

    <script src="<?php echo base_url()?>assets/js/jquery.easy-autocomplete.min.js"></script> 
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/easy-autocomplete.min.css"> 

    <style type="text/css">
        body{
             background-color: #F4F4F4;
        }
        .jumbotron{
            background-color: #f44336;
            padding: 10px;
            color: white;
            font-size: 1.5em;
            margin-top: 20px;
            width: 100%;
            
        }

      .header{
        background-color: #ffba00;
        padding: 5px;
       height: 60px;
       border-bottom: 3px solid #791b1e;
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
    margin-top:10px;
    margin-left: -196px;
    width:280px;

}
.redBorder{
        border-bottom: 1px solid red !important;
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
.dashboard-graphs{
    background: #fff;
    color: #fff;
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
.my-error-class {
    color:red;
}
.my-valid-class {
    color:green;
}
.dashboard-search{
    background: #fff;
}
.dashboard-list{
    margin-top: 20px;
    background: #f7f8f9;
}
#search_students{
    width: 90%;
    display: inline;
    border-radius: 0;
    padding-right: 20px;
}

.fa-search{
        position: relative;
        right: 30px;
        padding: 0;
        margin:0;
}
.form-control{
    border-radius: 0;
}

.well{
    border-radius: 0;
}
.student-list{
    background: #fff;    
}
.view-student-options{
    font-size: 12px;
    color: white;
}

.modalContent{
  border-radius: 12px;
}
.dropdown-menu .divider{
  margin: 0;
}

.modalHeader{
  background-color: #f44336;
  border-radius: 10px 10px 0 0;
}

.capitalize {
    text-transform: capitalize;
}
.uppercase{
    text-transform: uppercase;
}
.dashTable{
  color: black;
  font-size: 13px;
}

.pagination > li.active > a{
    background-color:#f44336 !important;
    border:2px solid #d32f2f !important;
 }

.pagination > li > a:hover{
  background-color:#ffc107;
}

.dataTables_wrapper > div > div > div{
  font-size: 14px !important;
}

.btn-admin{
  background-color: #e53935;
  padding: 10px 12px 10px 12px;
  color: #FFFFFF;
  transition: 0.4s;
  border-radius: 3px;
        
}
.btn-admin:hover{
   background-color: #cf4246;
    color: #FFFFFF;
    transition: 0.4s;
    border-radius: 5px;
       
}
.btn-admin:focus{
  color: #FFFFFF;
}
.capitalize {
    text-transform: capitalize;
}

.dataTables_wrapper > div > div > div{
  font-size: 14px !important;
}
.nav-tabs{
  background-color: #F4F4F4;
}
a#addStuds:focus{
  box-shadow: 0px 0px 10px 5px  #871F21;
}
a#addcsv:focus{
  box-shadow: 0px 0px 10px 5px  #871F21;
}
tr:hover{
  background-color: #faf2cc;
}

#postEdit, .postDelete:hover{
  cursor:pointer;
}

.container{
  padding: 0px;
}

.blink_me {
  animation: blinker 1s linear infinite;
}
@keyframes blinker {  
  50% { opacity: 0; }
}

.hide{
  display: none;
}

.dispWatch:hover{
	color: #ffba00 !important;
}
.hiddenLoading{
  display: none;
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
                        <div class="logo" style="float: left;"><img src="<?php echo base_url();?>assets/images/logo.png" style="width: 50px; height: 50px;"></div>

                        <a href="admindashboard" style="text-decoration: none;"><h3 style="font-weight: bold; margin-top: 12px; color: #b71c1c ; text-align: left; font-family: fantasy;font-style: italic;font-size: 20pt;letter-spacing: 1px;">OJT AUTOMATE</h3></a> 
                    </div>
                    <div class="col-lg-5">
                    </div>
                    <div class="col-lg-2">
                      <!-- <h5 style="position: relative; top: 15px;">Admin</h5> -->
                      <h5 style="position: relative; top: 15px;font-weight: bold;float: right;">Hi, <?php echo $first_name;?><br>
                      	<span style="font-size:13px;font-weight: normal;">Admin</span></h5>
                    </div>
              <div class="col-lg-1">

                          <ul class="nav navbar-nav">
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" id="dropdown-logout" data-toggle="dropdown">

                                <i class="fa fa-user-circle fa-3x circular-square pull-right" style="width: 40px; height: 40px; margin-top: -10px;"></i>
                               </a>
                              <ul class="dropdown-menu" id="show-logout">
        
                                <li><a href="changepassword">Change password <i class="fa fa-key pull-right" aria-hidden="true"></i></a></li>
                                <li class="divider"></li>
                    
                                <li><a href="logout">Log Out <i class="fa fa-sign-out pull-right"></i></a></li>
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
            <div class="jumbotron">
              <div class="row">
                    <div class="col-lg-4" style="font-size: 25px">
                        DASHBOARD
                    </div>
                    <div class="col-lg-8">
                        <section style="display: inline-block; float: right;">
                            <button class="btn btn-admin" data-target="#watchlistModal" data-toggle="modal">+Watch list</button>
                            <button class="btn btn-admin" data-target="#squarespaceModal" data-toggle="modal">+Announcement</button>
                            <button class="btn btn-admin" data-target="#addAdminModal" data-toggle="modal">+Admin</button>
                            <button class="btn btn-admin" data-target="#addSupervisorModal" data-toggle="modal">+Supervisor</button>
                            <button class="btn btn-admin" data-target="#addStudent" data-toggle="modal">+Student</button>
                            
                           <!--  <a href="Main/database_backup">hahaha</a> -->
                         </section>
                    </div>
                </div>
            </div>
          </div>
          
            <div class="container tabOptions" style="margin-top: -20px">
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#ojt1" id="toOjt1">OJT 1</a></li>
                <li><a data-toggle="tab" href="#ojt2" id="toOjt2">OJT 2</a></li>
              </ul>
             <div class="tab-content">
                <div id="ojt1" class="tab-pane fade in active">
                  <div class="content ojt1GraphContent">

                 </div>
                <div id="ojt2" class="tab-pane fade">
                  <div class="content ojt2GraphContent">

                 </div>
              </div>
            </div>
        </div>
</div>

  <!-- <div class="container">
      <div class="well" style="background: #fff;">
          <div class="row">
              <div class="col-lg-12">

                    <canvas id="companyChart" width="400" height="150"></canvas>
                        <script>
                        var ctx = document.getElementById("companyChart").getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: [<?php echo implode(',', $company_for_graph) ?>],
                                datasets: [{
                                    label: 'Company distribution',
                                    data: [<?php echo implode(',', $company_for_graph_count) ?>],
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)',
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgba(255,99,132,1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(255, 159, 64, 1)',
                                        'rgba(255,99,132,1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(255, 159, 64, 1)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero:true
                                        }
                                    }]
                                }
                            }
                        });
                        </script>
              </div>
          </div>
      </div>
  </div> -->

<div class="container">
              <div class="container tabOptions" style="margin-top: 10px">
                <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#students" id="toStudentsTable">Students</a></li>
                  <li><a data-toggle="tab" href="#supervisors" id="toSupervisorsTable">Supervisors</a></li>
                  <li><a data-toggle="tab" href="#companies" id="toCompaniesTable">Companies</a></li>
                </ul>
                <div class="tab-content">
                  <div id="students" class="tab-pane fade in active">
                    <div class="well dashboard-search">
                      <div class="studentFilters"></div>
                      <div class="content studentContent">
                        
                      </div>
                    </div> 
                  </div>
                  <div id="supervisors" class="tab-pane fade">
                    <div class="well dashboard-search">
                      <div class="content supervisorContent">

                      </div>
                    </div>

                  </div>
                  <div id="companies" class="tab-pane fade">
                    <div class="well dashboard-search">
                      <div class="content companyContent">
                        
                      </div>
                    </div> 
                  </div>
                </div>
              </div> 
          </div>


<!-- line modal -->
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modalContent">
        <div class="modal-header modalHeader">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <button type="button" class="btn btn-default" style="float: right;margin-right: 15px" id="btnViewPosts">View posts</button>
            <button type="button" class="btn btn-default" style="float: right;margin-right: 10px" id="btnCompose">Compose</button>
            <h3 class="modal-title postHeading" id="lineModalLabel" style="color:white;">Post announcement</h3>
            
        </div>
        <div class="modal-body">
            
            <!-- content goes here -->
            <form>
              <div class="form-group" id="compose">
                    <label>Message</label>
                    <textarea class="form-control" style="resize: none; border-radius: 5px" id="announcement_message" name="msg"></textarea>
              </div>
              <div id="viewPosts" style="display: none">
                <?php if (empty($announcements)):?>
                  <p style="text-align: center;color: gray;font-size: 13px;padding: 20px">You have no announcements posted</p>
                <?php else:?>
                  <?php foreach ($announcements as $post):?>

                      <div class="well" style="margin-bottom: 10px;background: #f8f8f8">
                        <div class="row">
                          <div class="col-lg-12">
                            <input type="hidden" class="post_id" value="<?php echo $post['announcement_id'];?>">
                             <p style="font-weight: bold;color: #337ab7;" class="postDate"><?php echo date('F d, Y',strtotime($post['date_posted'])) ?></p>
                            <textarea style="font-size: 13px;color:#616161;width: 100%;resize:none;border: none;background: none" class="postContent" spellcheck="false" readonly><?php echo $post['content']; ?></textarea>
                          </div>  
                        </div>
                        <div class="row" style="margin-top: 5px;">
                          <div class="col-lg-6">
                            <i class="fa fa-pencil-square" style="font-size: 20px;margin-right:3px;color: gray" aria-hidden="true" id="postEdit" title="Edit post"></i>
                            <i class="fa fa-trash postDelete" style="font-size: 20px;color: gray"  aria-hidden="true" title="Delete post"></i>
                          </div>
                          <div class="col-lg-3 col-lg-offset-3" id="postSaveCancel" style="display: none">
                            <a href="#" style="font-size: 10px;margin-right: 3px;" id="saveEdit">SAVE</a>
                            <a href="#" style="font-size: 10px;" id="cancelEdit">CANCEL</a>
                          </div>
                        </div>
                      </div>
                  <?php endforeach; ?>
                <?php endif; ?>
              </div>
            </form>

        </div>
        <div class="modal-footer" id="announcementModalFooter">
            <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                <div class="btn-group" role="group">
                     <button type="button" class="btn btn-success btn-hover-green postAnnounce" data-action="save" role="button" style="width: 270px;border-radius: 5px" id="postAnnouncement" >Post</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-danger cancelsss" data-dismiss="modal"  role="button" style="width: 270px;border-radius: 5px; float: right">Cancel</button>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="watchlistModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modalContent">
        <div class="modal-header modalHeader">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>

            <button type="button" class="btn btn-default" style="float:right; margin-right:20px" id="btnWatchlists"><span aria-hidden="true">Watchlists</span><span class="sr-only"></span></button>
            <button type="button" class="btn btn-default" style="float:right; margin-right:10px" id="btnAddWatch"><span aria-hidden="true">+Watchlist</span><span class="sr-only"></span></button>

            <h3 class="modal-title watchHeader" id="lineModalLabel" style="color:white;">ADD WATCH LIST</h3>
        </div>
        <div class="modal-body">
            <div id="plusWatch">

              <div class="row">
                <div class="col-lg-12" style="padding: 20px 15px;">
                  <label for="addWatch">Company name</label>
                  <input type="text" id="addWatch" style="width: 565px;" name="addWatch" required>
                 </div>
              </div>
	        </div>
	        <div id="lists" style="display: none;padding: 20px 10px">
            <?php if(empty($company_watch_list)):?>
              <p style="text-align: center;color: gray;font-size: 13px;padding: 20px">No companies on the watch list</p>
              
            <?php else:?>
  	          <?php foreach($company_watch_list as $companywatch):?>
                <div class="companyWatchList">
                  <p class="dispWatch" style="font-weight: bold;">
                    <?php echo $companywatch['company_name'];?>
                      <i class="fa fa-trash" id="watchDelete" style="font-size: 17px;color: gray;cursor: pointer;float: right;" aria-hidden="true" title="Remove from watch list"></i>
                      <input type="hidden" class="hiddenCompWatch" value="<?php echo $companywatch['company_name'];?>">
                  </p>
                </div>
  		        <?php endforeach;?>
            <?php endif; ?>
	        </div>

        </div>
        <div class="modal-footer watchListFooter">
            <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                <div class="btn-group" role="group">
                     <button type="button" class="btn btn-success btn-hover-green" data-action="save" role="button" style="width: 270px;border-radius: 5px" id="addWatchList">Add</button>
                </div>
                <div class="btn-group" role="group">
                   
                    <button type="button" class="btn btn-danger" data-dismiss="modal"  role="button" style="width: 270px;border-radius: 5px; float: right">Cancel</button>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="addAdminModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modalContent">
        <div class="modal-header modalHeader">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h3 class="modal-title" id="lineModalLabel" style="color:white;">Add Admin</h3>
        </div>
        <div class="modal-body">
            
            <!-- content goes here -->
            <form>
              <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control capitalize" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="adminName" name="adminName">
                    <label>Username</label>
                    <input type="text" class="form-control" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="adminID" name="adminID">
                    <label>Password</label>
                    <input type="text" class="form-control" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="adminPass" name="adminPass">
                    <label>College</label>
                    <select class="form-control" style="border-radius:5px;margin-bottom:10px" id="adminCollege" name="adminCollege">
                        <option selected disabled>Select college</option>
                        <option value="CCS">College of Computer Studies</option>
                        <option value="CEA">College of Engineering and Architecture</option>
                        <option value="CON">College of Nursing</option>
                        <option value="CMBA">College of Management, Business and Accoutancy</option>
                        <option value="COE">College of Education</option>
                        <option value="CAS">College of Arts and Sciences</option>       
                    </select>
                    <label>Email</label>
                    <input type="Email" class="form-control" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="adminEmail" name="adminEmail">
                    <p class="blink_me hide" style="text-align: center">Sending email ... </p>
                </div>
            </form>

        </div>
        <div class="modal-footer">
            <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                <div class="btn-group" role="group">
                     <button type="button" id="adminAdd" name="adminAdd" class="btn btn-success btn-hover-green" data-action="save" role="button" style="width: 270px;border-radius: 5px">Add</button>
                </div>
                <div class="btn-group" role="group">
                   
                    <button type="button" class="btn btn-danger" data-dismiss="modal"  role="button" style="width: 270px;border-radius: 5px; float: right">Cancel</button>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="addSupervisorModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modalContent">
        <div class="modal-header modalHeader">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h3 class="modal-title" id="lineModalLabel" style="color:white;">Add supervisor</h3>
        </div>
        <div class="modal-body">
            
            <!-- content goes here -->
            <form id="formsupervisor">
              <div class="form-group">
                    <label>Name</label>

                    <input type="text" class="form-control capitalize" style="border-radius: 5px;width: 100%" id="supName" name="supName">
                    <div class="row">
                      <div class="col-lg-12" style="padding: 10px 15px;">
                        <label for="dropCompany">Company name</label>
                        <input type="text" id="dropCompany" style="border-radius: 5px;width: 565px;" name="dropCompany" required>
                       </div>
                    </div>

                    <label>Designation</label>
                    <input type="text" class="form-control capitalize required" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="supDesig" name="supDesig" required>
                    <label>Username</label>
                    <input type="text" class="form-control required" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="supID" name="supID" required>
                    <label>Password</label>
                    <input type="text" class="form-control required" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="supPass" name="supPass" required>
                    <label>Email</label>
                    <input type="text" class="form-control required" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="supEmail" name="supEmail" required>
                    
                    <label>Phone Number</label>
                    <input type="text" class="form-control required" onkeypress='return event.charCode >= 48 && event.charCode <= 57' style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="supNumber" name="supNumber" required>
                    <p class="blink_me hide" style="text-align: center">Sending email ... </p> 
                </div>
            </form>

        </div>
        <div class="modal-footer">
            <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                <div class="btn-group" role="group">
                     <button type="button" class="btn btn-success btn-hover-green" data-action="save" role="button" style="width: 270px;border-radius: 5px" id="addSup">Add</button>
                </div>
                <div class="btn-group" role="group">
                   
                    <button type="button" class="btn btn-danger" data-dismiss="modal"  role="button" style="width: 270px;border-radius: 5px; float: right">Cancel</button>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>


<div class="modal fade" id="addStudent" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modalContent">
        <div class="modal-header modalHeader">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <button type="button" class="btn btn-default" style="float:right; margin-right:20px" id="import"><span aria-hidden="true">Import CSV</span><span class="sr-only"></span></button>
            <button type="button" class="btn btn-default" style="float:right; margin-right:10px" id="stud"><span aria-hidden="true">+Student</span><span class="sr-only"></span></button>
            <h3 class="modal-title" id="lineModalLabel" style="color:white;">Add student</h3>
        </div>
        <div class="modal-body">
              <div class="tab-pane active addIndiv" style="display: inline;" id="addStudent" role="tabpanel">
                    <label>First Name</label>
                    <input type="text" class="form-control capitalize required" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="studFirst" name="studFirst">
                    <label>Middle Initial</label>
                    <input type="text" class="form-control capitalize required" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="studMid" name="studMid" maxlength="1">
                    <label>Last Name</label>
                    <input type="text" class="form-control capitalize required" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="studLast" name="studLast">
                    <label>Course <small style="color:gray; font-size: 9px">(Acronym e.g. BSIT)</small></label>
                    <input type="text" class="form-control uppercase required" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="studCourse" name="studCourse">
                    <label>Year</label>
                    <select id="studYear" name="studYear" class="form-control required" style="border-radius: 5px;margin-bottom: 10px; width: 100%">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                    <!-- <label>Program</label>
                    <select id="studProgram" name="studProgram" class="form-control" style="border-radius: 5px;margin-bottom: 10px; width: 100%">
                      <option>OJT-1</option>
                      <option>OJT-2</option>
                    </select> -->
                    <div class="row">
                        <div class="col-lg-6">
                          <!-- <label>Required Hours</label> -->
                          <div class="form-inline">
                            <div class="row">
                              <div class="col-lg-5" style="padding-right: 0"> 
                                <label style="font-size: 10px;">Required hours</label>
                                <input type="text" class="form-control required" style="border-radius: 5px;margin-bottom: 10px; width: 90%" id="studojt" name="studojt" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                              </div>
                              <div class="col-lg-6" style="padding-left: 3px">
                                <label style="font-size: 10px;">OJT Program</label>                    
                            
                                <select required style="border-radius: 5px;margin-bottom: 10px; width: 90%" class="form-control required" id="studprogram" name="studprogram">
                                    <option selected disabled>Program</option>
                                    <option value="ojt_one">OJT 1</option>
                                    <option value="ojt_two">OJT 2</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <label>School Year</label>
                          <div class="form-inline">
                            <div class="row">
                              <div class="col-lg-5" style="padding-right: 0"> 
                                <!-- <label style="font-size: 10px;color: white">Since</label> -->
                                <input type="text" class="form-control required" style="border-radius: 5px;margin-bottom: 10px; width: 90%" id="sy_1" name="sy_1" maxlength="4" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>

                              </div>
                              <div class="col-lg-5" style="padding-left: 3px">
                                <!-- <label style="font-size: 10px;color: white">Year</label>                     -->
                                <input type="text" class="form-control required" style="border-radius: 5px;margin-bottom: 10px; width: 90%" id="sy_2" name="sy_2" maxlength="4" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>

                <!-- Import CSV -->
                <div class="tab-pane importCSV" id="addCSV" style="display:none;" role="tabpanel">
                  <div class="row">
                    <div class="col-lg-12">

                        <form action="saveCSV" method="POST" enctype="multipart/form-data">
                          <div class="row">
                            <div class="col-lg-8 col-lg-offset-4">
                              <label>Required hours</label>
                              <input type="text" name="required_hours" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" style="width: 50%;" required>
                            </div>
                          </div>
                          <div class="row">
                             <div class="col-lg-8 col-lg-offset-4">
                                   <label>OJT Program</label>
                                    <select name="ojt_program" class="form-control" id="program-choice" style="width: 50%" style="margin-top: 10px;" required>
                                        <option selected disabled>Select Program</option>
                                        <option value="ojt_one">OJT 1</option>
                                        <option value="ojt_two">OJT 2</option>
                                    </select>
                             </div>
                          </div>

                          <div class="row">
                             <div class="col-lg-8 col-lg-offset-4">
                                   <label>School Year</label>
                                   <input type="text" id="fromYr" placeholder="From" name="fromYr" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" style="width: 50%;" required>
                                   <input type="text" id="toYr" placeholder="To" name="toYr" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" style="width: 50%; margin-top: 10px;" required>
                             </div>
                          </div>

                            <div class="row">
                                <div class="col-lg-8 col-lg-offset-4">
                                    <input class="form-group" type="file" name="importCSV" accept=".csv" style="margin-top:20px" onchange="previewFile()">
                                </div>
                            </div>
                       
                            <div class="row">
                              <div class="col-lg-8 col-lg-offset-4">
                                  <button class="btn btn-success button-loading" type="submit" id="saveImport" name="saveImport" data-loading-text="Saving..." style="margin-top:10px;width: 90px; margin-right: 5px;" disabled="">Save</button>
                                  <button type="button" class="btn btn-danger" data-dismiss="modal" id="cancelImport" role="button" style="margin-top:10px;width: 90px">Cancel</button>
                                </div>

                            </div>
                          
                      </form> 
                    </div>
                  </div>
                  
                </div>

        </div>
        <div class="modal-footer addStudentFooter">
            <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                <div class="btn-group" role="group">
                     <button type="button" class="btn btn-success btn-hover-green" data-action="save" role="button" style="width: 270px;border-radius: 5px" id="addStud">Add</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"  role="button" style="width: 270px;border-radius: 5px; float: right">Cancel</button>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

</body>
<!-- Autocomplete Watchlist companies -->
<script>
$(document).ready(function(){
    var options = {
      url: "<?php echo base_url('validCompanies')?>",
      getValue: "names",
      list: {
        match: {
          enabled: true
        }
      }
    };
    $("#addWatch").easyAutocomplete(options);
    $("#dropCompany").easyAutocomplete(options);
});
</script>

<!-- Add watchlist header button options -->
<script type="text/javascript">
	$('#btnAddWatch').click(function(){
		$('#plusWatch').show();
		$('#lists').hide();
		$('.watchHeader').html('Add watch list');
		$('.watchListFooter').show();
	});

	$('#btnWatchlists').click(function(){
		$('#plusWatch').hide();
		$('#lists').show();
		$('.watchHeader').html('Company watch list');
		$('.watchListFooter').hide();
	});

	$(document).on('click','#watchDelete',function(e){
		e.preventDefault();
		var company_name = $(this).closest('.companyWatchList').find('.hiddenCompWatch').val();
    var compField =  $(this).closest('.companyWatchList');
		swal({
      title: "Remove from watchlist?",
      icon: "warning",
      buttons: true,
      buttons: ["No", "Yes"],
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        compField.fadeOut();
        $.ajax({
          type: "POST",
          url: "<?php echo base_url()?>"+"deleteCompanyWatchlist",
          data:{
            'compName': company_name,
          },
          success:function(){

          }
        });
      }
    });
	});
</script>

<script type="text/javascript">
  $(document).ready(function(){
    var course = $('#course_option').val();
    var current_program = $('#program_option').val();
    var status = $('#status_option').val();
    var sy = $('#sy_option').val();
      $.ajax({
          type:'POST',
          url:'<?php echo base_url() ?>/'+'loadAdminGraphs',
            data:{
              'ojt_program':"ojt_one",
            },
          success: function(data){
            $('.ojt1GraphContent').html(data);
            $('.ojt2GraphContent').html("");
          }
      });

    $.ajax({
        url : '<?php echo base_url() ?>/'+"loadAdminStudentFilters",
        type: "GET",
        dataType: "text",
        success: function(data){
          $('.studentFilters').html(data);
          $('.supervisorFilters').html("");
        }
      });

      $.ajax({
        url : "filterStudent",
        type: "POST",
        data:{
          'course': course,
          'current_program': current_program,
          'stat': status,
          'sy': sy,
        },
        success: function(data){
          $('.studentContent').html(data);
          $('.supervisorContent').html("");
        }
      });
  });

  $('#toOjt2').click(function(){
    // alert('jrr');
      $.ajax({
          type:'POST',
          url:'<?php echo base_url() ?>/'+'loadAdminGraphs',
            data:{
              'ojt_program':"ojt_two",
            },
          success: function(data){
            // console.log(data);
            $('.ojt1GraphContent').html('');
            $('.ojt2GraphContent').html(data);
          }
      });
  });

  $('#toCompaniesTable').click(function(e){
    // alert('jrr');
        e.preventDefault();
        $.ajax({
           type:"GET",
           url: "<?php echo base_url() ?>/"+"loadCompaniesTable",
            dataType: "text",
           success: function(data){
              $('.companyContent').html(data);
              $('.supervisorContent').html("");   
              $('.studentContent').html("");
              $('.studentFilters').html("");
           }
        });
  });

  $('#toOjt1').click(function(){
        $.ajax({
          type:'POST',
          url:'<?php echo base_url() ?>/'+'loadAdminGraphs',
          data:{
            'ojt_program':"ojt_one",
          },
          success: function(data){
            $('.ojt1GraphContent').html(data);
            $('.ojt2GraphContent').html("");
          }
        });
    });
</script>

<script type="text/javascript">
  $('#toSupervisorsTable').click(function(e){
    e.preventDefault();
    $.ajax({
       type:"GET",
       url: "<?php echo base_url() ?>/"+"loadSupervisorTable",
        dataType: "text",
       success: function(data){
         $('.supervisorContent').html(data);   
         $('.studentContent').html("");
         $('.studentFilters').html("");
         $('.companyContent').html("");
       }
    });
  });

  $('#toStudentsTable').click(function(e){
      
      $.ajax({
        url : '<?php echo base_url() ?>/'+"loadAdminStudentFilters",
        type: "GET",
        dataType: "text",
        success: function(data){
          $('.studentFilters').html(data);
          $('.supervisorFilters').html("");
        }
      });

      var course = $('#course_option').val();
      var current_program = $('#program_option').val();
      var status = $('#status_option').val();
      var sy = $('#sy_option').val();

      $.ajax({
        url : "filterStudent",
        type: "POST",
        data:{
          'course': course,
          'current_program': current_program,
          'stat': status,
          'sy': sy,
        },
       success: function(data){
          $('.studentContent').html(data);
          $('.supervisorContent').html("");
          $('.companyContent').html("");
       }
      });
  });
</script>

<script type="text/javascript">
   $('#fromYr').blur(function(){
        var curr_year = parseInt($('#fromYr').val());
        var i = parseInt("1");
        if($('#fromYr').val().length==4){
          $('#toYr').val(curr_year+i);
        }
    });

   $('#toYr').blur(function(){
        var curr_year = parseInt($('#toYr').val());
        var i = parseInt("1");
        if($('#toYr').val().length==4){
          $('#fromYr').val(curr_year-i);
        }
    });

   $('body').on('change', '#course_option',function(){
          var course = $('#course_option').val();
          var current_program = $('#program_option').val();
          var status = $('#status_option').val();
          var sy = $('#sy_option').val();
          $.ajax({
              url : "filterStudent",
              type: "POST",
              data:{
                'course': course,
                'current_program': current_program,
                'stat': status,
                'sy': sy,
              },
              success: function(data){
                  $('#wrap-students').replaceWith(data);
              }
          })
      });

      $('body').on('change','#sy_option',function(){
          var course = $('#course_option').val();
          var current_program = $('#program_option').val();
          var status = $('#status_option').val();
          var sy = $('#sy_option').val();
          $.ajax({
              url : "filterStudent",
              type: "POST",
              data:{
                'course': course,
                'current_program': current_program,
                'stat': status,
                'sy': sy,
              },
              success: function(data){
                  $('#wrap-students').replaceWith(data);
              }
          })
      });

        $('#program_option').change(function(){
          var course = $('#course_option').val();
          var current_program = $('#program_option').val();
          var status = $('#status_option').val();
          var sy = $('#sy_option').val();
          $.ajax({
              url : "filterStudent",
              type: "POST",
              data:{
                'course': course,
                'current_program': current_program,
                'stat': status,
                'sy': sy,
              },
              success: function(data){
                  $('#wrap-students').replaceWith(data);
              }
          })
      });

      $('#status_option').change(function(){
          var course = $('#course_option').val();
          var current_program = $('#program_option').val();
          var status = $('#status_option').val();
          var sy = $('#sy_option').val();
          $.ajax({
              url : "filterStudent",
              type: "POST",
              data:{
                'course': course,
                'current_program': current_program,
                'stat': status,
                'sy': sy,
              },
              success: function(data){
                  $('#wrap-students').replaceWith(data);
              }
          })
      });


    $(document).on('click','#postEdit',function(e){
      //var content = $(this).closest('.well').find('.postContent').val();
      //alert(content);return false;
      var saveCancel = $(this).closest('.well').find('#postSaveCancel');
      var textArea = $(this).closest('.well').find('.postContent');
      saveCancel.show();
      textArea.prop('readonly',false);
      textArea.focus();
      textArea.css('border','1px solid #ccc');
      textArea.css('background','#FFFFFF');
    });

    $(document).on('click','#cancelEdit',function(e){
      var textArea = $(this).closest('.well').find('.postContent');
      var saveCancel = $(this).closest('.well').find('#postSaveCancel');
      saveCancel.hide();
      textArea.prop('readonly',true);
      textArea.blur();
      textArea.css('border','none');
      textArea.css('background','none');
    });

    $(document).on('click','#saveEdit',function(e){
      var postId = $(this).closest('.well').find('.post_id').val();
      var content = $(this).closest('.well').find('.postContent').val();
      var textArea = $(this).closest('.well').find('.postContent');
      var saveCancel = $(this).closest('.well').find('#postSaveCancel')
      saveCancel.hide();
      textArea.prop('readonly',true);
      textArea.blur();
      textArea.css('border','none');
      textArea.css('background','none');
      textArea.html(content);
      $.ajax({
        url: "updatePostContent",
        type: "POST",
        data:{
          'content': content,
          'post_id': postId,
        }
      });
    });

    $(document).on('click','.postDelete',function(e){
      var postId = $(this).closest('.well').find('.post_id').val();
      var well = $(this).closest('.well');
      swal({
        title: "Are you sure?",
        icon: "warning",
        buttons: true,
        buttons: ["No", "Yes"],
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          well.fadeOut();
          $.ajax({
            url: "deletePostContent",
            type: "POST",
            data:{
              'post_id': postId,
            }
          });
        }
      });
        
    });


    $('#btnCompose').click(function(){
      $('#compose').css('display','block');
      $('#viewPosts').css('display','none');
      $('#announcementModalFooter').css('display','block');
      $('.postHeading').html('Post announcement');
    });

    $('#btnViewPosts').click(function(){
        $('#compose').css('display','none');
        $('#viewPosts').css('display','block');
        $('#announcementModalFooter').css('display','none');
        $('.postHeading').html('Announcements');

    });

    $(document).on('click','#cancelEdit',function(e){
      var textArea = $(this).closest('.well').find('.postContent');
      var saveCancel = $(this).closest('.well').find('#postSaveCancel');
      saveCancel.hide();
      textArea.prop('readonly',true);
      textArea.blur();
      textArea.css('border','none');
      textArea.css('background','none');
    });

    $(document).on('click','#saveEdit',function(e){
      var postId = $(this).closest('.well').find('.post_id').val();
      var content = $(this).closest('.well').find('.postContent').val();
      var textArea = $(this).closest('.well').find('.postContent');
      var saveCancel = $(this).closest('.well').find('#postSaveCancel')
      saveCancel.hide();
      textArea.prop('readonly',true);
      textArea.blur();
      textArea.css('border','none');
      textArea.css('background','none');
      textArea.html(content);
      $.ajax({
        url: "updatePostContent",
        type: "POST",
        data:{
          'content': content,
          'post_id': postId,
        }
      });
    });

    $(document).on('click','.postDelete',function(e){
      var postId = $(this).closest('.well').find('.post_id').val();
      var well = $(this).closest('.well');
      swal({
        title: "Are you sure?",
        icon: "warning",
        buttons: true,
        buttons: ["No", "Yes"],
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          well.fadeOut();
          $.ajax({
            url: "deletePostContent",
            type: "POST",
            data:{
              'post_id': postId,
            }
          });
        }
      });
        
    });


    $('#btnCompose').click(function(){
      $('#compose').css('display','block');
      $('#viewPosts').css('display','none');
      $('#announcementModalFooter').css('display','block');
      $('.postHeading').html('Post announcement');
    });

    $('#btnViewPosts').click(function(){
        $('#compose').css('display','none');
        $('#viewPosts').css('display','block');
        $('#announcementModalFooter').css('display','none');
        $('.postHeading').html('Announcements');

    });

    $('#options').click(function(){
        
    });
  
</script>

<!-- FILTER RESULTS -->
<script type="text/javascript">
   $('#checkall').change(function(){
          $('.checkitem').prop("checked",$(this).prop("checked"));
      });
   $('#btnDelete').click(function(e){ 
        // alert('ddd'); 
        var checks = document.getElementsByName("usernames[]");
        var dataUsername = $("input[type='checkbox']:checked").serialize().replace(/%5B%5D/g, '[]');
        var confirm = null;
        for (var i=0; i < checks.length; i++) {
          if(checks[i].checked == true){
            confirm = "yes";break;
          }
        }
        if(confirm == "yes"){
            swal({
              title: "Are you sure you want to remove student/s?",
              icon: "warning",
              buttons: true,
              buttons: ["No", "Yes"],
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                $.ajax({
                  url: "deleteStudent",
                  type: "POST",
                  data:dataUsername,
                  success: function(data){
                    //console.log(data);return false;
                    //table.ajax.reload();
                    location.reload(true);
                  }
                });
              }
              else{
              }
            });
        }
      });
   $(document).ready(function(){
      var table = $('#adminDataTable').DataTable({
        "bProcessing": true,
        "order": [1, 'asc'],
        "columns": [{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false }]
      });

     
    


      // $('select').change(function(){
      //   var course = $('#course_option').val();
      //   var eval = $('#eval_option').val();
      //   var stat = $('#status_option').val();
      //   var sy = $('#sy_option').val();
      //   if(course == null || course == "All"){
      //     course ="";
      //   }
      //   if(eval == null || eval == "All"){
      //     eval ="";
      //   }
      //   if(stat == null || stat == "All"){
      //     stat ="";
      //   }
      //   if(sy == null || sy == "All"){
      //     sy ="";
      //   }
      //   // $.ajax({
      //   //   url: "adminDashboard",
      //   //   type: "POST",
      //   //   data:{
      //   //     'course': course,
      //   //     'eval': eval,
      //   //     'stat': stat,
      //   //     'sy': sy,
      //   //   },
      //   //   success:function(){
      //   //     location.reload();
      //   //   }
      //   // });
      //   var search = course+" "+eval+" "+stat+" "+sy;
      //   table.search(search).draw();
      // });

  });
</script>
<!-- ajaxdelete -->
<!-- <script type="text/javascript">
  $('#btnDelete').click(function(e){ 
    var checks = document.getElementsByName("usernames[]");
    var dataUsername = $("input[type='checkbox']:checked").serialize().replace(/%5B%5D/g, '[]');
    var confirm = null;
    for (var i=0; i < checks.length; i++) {
      if(checks[i].checked == true){
        confirm = "yes";break;
      }
    }
    if(confirm == "yes"){
        swal({
          title: "Are you sure?",
          icon: "warning",
          buttons: true,
          buttons: ["No", "Yes"],
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
              url: "deleteStudent",
              type: "POST",
              data:dataUsername,
              success: function(data){
                //console.log(data);return false;
                //location.reload();
              }
            });
          }
          else{
            e.preventDefault();
          }
        });
    }
  });
</script> -->

<!-- DELETE FROM ADMIN DASHBOARD -->
<!-- <script type="text/javascript">
  $('#btnDelete').click(function(){ 
    var checks = document.getElementsByName("usernames[]");
    var confirm = null;
    for (var i=0; i < checks.length; i++) {
      if(checks[i].checked == true){
        confirm = "yes";break;
      }
    }
    if(confirm == "yes"){
        swal({
          title: "Are you sure?",
          icon: "warning",
          buttons: true,
          buttons: ["No", "Yes"],
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            document.formDel.submit();
          }
          else{
            e.preventDefault();
          }
        });
    }
  });
</script> -->

<!-- <script type="text/javascript">
  String.prototype.capitalize = function() {
    return this.replace(/(?:^|\s)\S/g, function(a) { return a.toUpperCase(); });
  };

  $('#search_students').keyup(function(){
       var text_filter = $(this).val().capitalize();
       $(".student-list").hide();
       $(".student-list:contains("+text_filter+")").css('display','block ');
  });
</script> -->
<script type="text/javascript">
    $('#sy_1').blur(function(){
        var curr_year = parseInt($('#sy_1').val());
        var i = parseInt("1");
        if($('#sy_1').val().length==4){
          $('#sy_2').val(curr_year+i);
        }
    });
  
    $('#sy_2').blur(function(){
        var curr_year = parseInt($('#sy_2').val());
        var i = parseInt("1");
        if($('#sy_2').val().length==4){
          $('#sy_1').val(curr_year-i);
        }
    });
  
</script>

<!-- ADD STUDENT -->
<script type="text/javascript">
    function previewFile() {
       $('#saveImport').prop("disabled",false);
    }
    $('#saveImport').click(function(e){
        if(!$('#program-choice').val()){
            $('#program-choice').css('border','1px solid red');
            return false;
        }
    });
</script>

 <script type="text/javascript">
   $('#stud').click(function(){
      $(".addIndiv").css("display","inline");
      $(".addStudentFooter").css("display","inline-block");
      $(".importCSV").css("display","none");
   });
 </script>

 <script type="text/javascript">
   $('#import').click(function(){
      $(".importCSV").css("display","inline");
      $(".addIndiv").css("display","none");
      $(".addStudentFooter").css("display","none");
   });
 </script>

<!-- ADD INDIVIDUAL STUDENTS-->
<script type="text/javascript">
  String.prototype.capitalize = function() {
    return this.replace(/(?:^|\s)\S/g, function(a) { return a.toUpperCase(); });
  };

  $('#addStud').click(function(){
    //var id = $('#studID').val().trim(); // to be removed
    var first = $('#studFirst').val().capitalize().trim();
    var mid = $('#studMid').val().capitalize();
    var last = $('#studLast').val().capitalize().trim();
    var course = $('#studCourse').val().toUpperCase().trim();
    var year = $('#studYear').val();
    var required_hours = $('#studojt').val();
    var ojt_program = $('#studprogram').val();
    var sy_1 = $('#sy_1').val();
    var sy_2= $('#sy_2').val();

    if(first == "" || mid == "" || last == "" || course=="" || sy_1=="" || sy_2=="" || required_hours == "" || !ojt_program){
        swal('Oops...','Please fill all fields','error');
         $("body").each(function() {

            if ($(this).val() === "") {
            $(this).css('border-color', 'red');
            
           }
           else{
            $(this).css('border-color', '');
           }

    });

    }else{
      $.ajax({
        url: "addStudent",
        type: "POST",
        data: {
          'fname': first,
          'mname': mid,
          'lname': last, 
          'course': course,
          'year': year,
          'required_hours': required_hours,
          'ojt_program': ojt_program,
          'sy_1': sy_1,
          'sy_2': sy_2,
        },  
        success:function(data){
            if($.trim(data) == "user_exist"){
              swal('Oops...','Student already exist','error');
            }
            else{
              swal({
                title: "Success",
                text: "Student added successfully",
                icon: "success",
              }).then(function () {
                location.reload();
              });
            }
        },
      });
    }
  });
</script>

<!-- DROP DOWN -->
<script type="text/javascript">
  
    $("#dropdown-logout").click(function(){
        $("#show-logout").toggle();
        // $('#notification-content').slideUp();
    });
</script>


<script type="text/javascript">
  $('.new-company').click(function(e){
      e.preventDefault();

      $('.company_list_choice2').toggle();//class
      $('#new_company').toggle();//
      var n = $('.new-company').html();
 
      if(n == 'New'){
         $('.new-company').html('Cancel');
      
      }else{
        $('.new-company').html('New');
      }
  });
</script>

<!-- ADD SUPERVISOR -->
<script type="text/javascript">
  String.prototype.capitalize = function() {
    return this.replace(/(?:^|\s)\S/g, function(a){ return a.toUpperCase(); });
  };

  $('#addSup').click(function(e){
        var name = $('#supName').val().capitalize().trim();

        var compName = $('#dropCompany').val().trim();

        var desig = $('#supDesig').val().capitalize().trim();
        var id = $('#supID').val().trim();
        var pass = $('#supPass').val().trim();
        var email = $('#supEmail').val().trim();
        var number = $('#supNumber').val().trim();
        var sending = $('.blink_me');
        var fail = false;
         var fail_log = '';
        if(name.length == 0 || compName == null || compName==0 || desig.length == 0 || id.length == 0 || pass.length == 0 || email.length == 0){//existing condition ni pete

              
              swal('Oops...','Please fill all fields','error');
                $(".required").each(function() {
            if ($(this).val() === "") {
            $(this).css('border-color', 'red');
            
           }
           else{
            $(this).css('border-color', '');
           }

    });
      // alert("Fields required");
          
        }
      

        else{
          sending.removeClass("hide");
          $.ajax({
            url: "<?php echo base_url()?>/"+"adminAddSupervisor",
            type: "POST",
            data: {
              'supName':name,
              'supCompany':compName,
              'supDesig':desig,
              'supID':id,
              'supPass':pass,
              'supEmail':email,
              'supNumber':number,
            },
            success:function(data){
              if($.trim(data) == "name_exist"){
                  swal('Oops...','Name already exist','error');
                  sending.addClass("hide");
                  return false;
              }else if($.trim(data) == "id_exist"){
                  swal('Oops...','Username already exist','error');
                  sending.addClass("hide");
                  return false;
              }else if($.trim(data) == "email_exist"){
                  swal('Oops...','Email already exist','error');
                  sending.addClass("hide");
                  return false;
              }else{
                sending.addClass("hide");
                console.log($.trim(data));
                if($.trim(data) == "sent"){
                  swal({
                    title: "Success!",
                    text: "Supervisor added successfully | Email sent",
                    icon: "success",
                  }).then(function () {
                    location.reload();
                  });
                }else if($.trim(data) == "not_sent"){
                  swal({
                    title: "Success!",
                    text: "Supervisor added successfully | Email not sent",
                    icon: "success",
                  }).then(function () {
                    location.reload();
                  });
                }
              }
            },
          });
        }
  });
</script>

<script type="text/javascript">
  $('.new-company-watchlist').click(function(e){
      e.preventDefault();

      $('.company_watchlist_choice').toggle();/*select*/
      $('#new_company_watchlist').toggle();/*input*/
      var n = $('.new-company-watchlist').html();
 
      if(n == 'New'){
         $('.new-company-watchlist').html('Cancel');
      
      }else{
        $('.new-company-watchlist').html('New');
      }
  });
</script>
<script type="text/javascript">
  $('#postAnnouncement').click(function(){
      var announcement = $('#announcement_message').val();
      if(!$.trim(announcement)){
        swal('Oops...','Please enter a message','error');
      }else{
          $('.postAnnounce').html('Posting');
          $('.postAnnounce').prop('disabled',true);
          $.ajax({
            url: '<?php echo base_url('main/insertAnnouncement')?>',
            method: 'POST',
            data: {
              'announcement': announcement,
            },
            success: function(data){
             $('.postAnnounce').html('Post');
             $('.cancelsss')[0].removeAttribute("disabled");
             swal({
                title: "Announcement posted",
                //text: "Announcement posted",
                icon: "success",
             }).then(function(){
                location.reload();
             });
             
             //$("#btnViewPosts").trigger("click");
            }
          }); 
      }
  });
</script>

<script type="text/javascript">
    $(document).ready(function(){
      $('#announcement_message').each(function () {
          this.setAttribute('style', 'height:' + '30px' + 'px;overflow-y:hidden; resize:none;');
        }).on('input', function () {
          this.style.height = 'auto';
          this.style.height = (this.scrollHeight) + 'px';
        });
    });
</script>
<!-- ADD WATCHLIST -->
<script type="text/javascript">
  $('#addWatchList').click(function(e){
  	var compName = $('#addWatch').val().trim();
    if(compName == null || compName.length==0){
      alert("Please select or enter a company");
    }else{
      $.ajax({
        url: "addWatchlist",
        type: "POST",
        data: {
          'companyName':compName,
        },
        success:function(data){
          if($.trim(data) == "fail"){
            // alert("The company is already on the watch list");
            swal('Oops...', 'That company is already on the watch list','error');
          }else{  
            swal({
              title: "Success",
              text: "Company added to watch list",
              icon: "success",
            }).then(function(){
              location.reload();
            });
          }
        },
      });
    }
  });
      
</script>


<!-- ADD ADMIN -->
<script type="text/javascript">
  String.prototype.capitalize = function() {
    return this.replace(/(?:^|\s)\S/g, function(a) { return a.toUpperCase(); });
  };

  function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }

      $(document).ready(function(){
          $("#adminAdd").click(function(){
            var adminName = $('#adminName').val().capitalize().trim();
            var idNum = $('#adminID').val().trim();
            var pass = $('#adminPass').val().trim();
            var college = $('#adminCollege').val();
            var email = $('#adminEmail').val().trim();
            var sending = $('.blink_me');

            if(adminName.length == 0 || idNum.length == 0 || pass.length == 0 || college == null || email.length == 0){
             alert("Please fill all fields");    
            }
            else{
               if (validateEmail(email)){
                  sending.removeClass("hide");
                  $.ajax({  
                  url : "adminAddAdmin",// your username checker url
                  type : "POST",
                  data : { 
                      'adName': adminName,
                      'adID': idNum,
                      'adPass': pass,
                      'adCollege': college,
                      'adEmail': email,
                    },
                  success:function(data){
                      if($.trim(data)=="name_exist"){
                        swal('Oops...','Name already exist','error');
                        sending.addClass("hide");
                        return false;
                      }
                      else if($.trim(data)=="id_exist"){
                        swal('Oops...','Username already exist','error');
                        sending.addClass("hide");
                        return false;
                      }
                      else if($.trim(data)=="email_exist"){
                        swal('Oops...','Email already exist','error');
                        sending.addClass("hide");
                        return false;
                      }
                      else{
                       sending.addClass("hide");
                       swal({
                          title: "Success!",
                          text: "Admin added successfully | Email verification sent",
                          icon: "success",
                        }).then(function(){
                          location.reload();
                        });
                      }
                    },
                });
              }else{
                swal('Oops...', 'Invalid email', 'error');
              }
            }//end else
          });
       });
</script>
<script type="text/javascript">
  $("#addcsv").click(function(){
      $("#addCSV").show();
      $(".addIndiv").hide();
      $(".modal-footer").hide();
  });
  $("#addStuds").click(function(){
      $(".addIndiv").show();
      $("#addCSV").hide();
      $(".modal-footer").show();
  });
</script>
</html>