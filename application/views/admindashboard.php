
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="bower_components/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <!-- Data table -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

    <!-- <script type="text/javascript" src="jquery.dataTables.js"></script>
    <script type="text/javascript" src="dataTables.scrollingPagination.js"></script>
 -->

    <style type="text/css">
        body{
             background-color: #F4F4F4;
        }
        .jumbotron{
            background-color: #EED090;
            padding: 10px;
            color: white;
            font-size: 1.5em;
           
        
            margin-top: 20px;
            width: 100%;
            
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

.modalHeader{
  background-color: #f44336;
  border-radius: 10px 10px 0 0;
}

.capitalize {
    text-transform: capitalize;
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
                              <a href="#" class="dropdown-toggle" id="dropdown-logout" data-toggle="dropdown"><img src="<?php echo base_url();?>/assets/images/snow.jpg" class="pull-right circular-square" style="width: 40px; height: 40px; margin-top: -5px;"> </a>
                              <ul class="dropdown-menu" id="show-logout">
                                <li><a href="#">Dashboard<i class="fa fa-tachometer pull-right"></i></a></li>
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
        </div>
        
        <div class="content">
          <div class="container">
            <div class="jumbotron">
              <div class="row">
              
                    <div class="col-lg-5">
                        Admin Dashboard
                    </div>
                    <div class="col-lg-7">
                        <section style="display: inline-block; float: right;">
                            <button class="btn btn-primary" data-target="#watchlistModal" data-toggle="modal">+Watch list</button>
                            <button class="btn btn-primary" data-target="#squarespaceModal" data-toggle="modal">+Announcement</button>
                            <button class="btn btn-primary" data-target="#addAdminModal" data-toggle="modal">+Admin</button>
                            <button class="btn btn-primary" data-target="#addSupervisorModal" data-toggle="modal">+Supervisor</button>
                            <button class="btn btn-primary" data-target="#addStudent" data-toggle="modal">+Student</button>
                         </section>
                     </div>
                    </div>
                </div>
             </div>
         
           <div class="container">
           <div class="well dashboard-graphs">
                <div class="row">
                   
                        <div class="col-lg-4">
                         
                           <canvas id="chartOJTStatus" width="400" height="200"></canvas>
                           <script>
                                var ctx = document.getElementById("chartOJTStatus").getContext('2d');
                                var myChart = new Chart(ctx, {

                                    type: 'bar',
                                    data: {
                                        labels: ["On Going", "Complete"],
                                        datasets: [{
                                            label: 'Complete vs On Going',
                                            data: [<?php echo 100?>, <?php echo 20?>],
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 0.2)',
                                                'rgba(54, 162, 235, 0.2)',
                                                
                                            ],
                                            borderColor: [
                                                'rgba(255,99,132,1)',
                                                'rgba(54, 162, 235, 1)',
                                               
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
                       
                    <?php $course = array('"IT"','"CS"')?>
                    <div class="col-lg-4">
                         <canvas id="chartCourses" width="400" height="200"></canvas>
                             <script>
                               var ctx = document.getElementById("chartCourses").getContext('2d');
                                var myChart = new Chart(ctx, {
                                 label: 'Courses',
                                  type: 'pie',
                                  data: {
                                    labels: [<?php echo implode($course, ',')?>],
                                    datasets: [{
                                      backgroundColor: [
                                        "rgba(255, 159, 64, 0.2)",
                                        "rgba(54, 162, 235, 0.2)",
                                        
                                      ],
                                      hoverBackgroundColor: [
                                         "rgba(255, 159, 64, 0.5)",
                                         "rgba(54, 162, 235, 0.5)",
                                      ],

                                      borderColor: [
                                         'rgba(255, 159, 64, 1)',
                                         'rgba(54, 162, 235, 1)',

                                               
                                         ],
                                         borderWidth: 1,
                                      data: [<?php echo 200?>,<?php echo 50?>]
                                    }]
                                  },
                                  options: {
                                    cutoutPercentage: 0,
                                  },
                                });
                                </script>
                      </div>

                      <div class="col-lg-4">
                            <canvas id="chart" width="400" height="200"></canvas>
                             <script>
                               var ctx = document.getElementById("chart").getContext('2d');
                                var myChart = new Chart(ctx, {
                                 label: 'Courses',
                                  type: 'doughnut',
                                  data: {
                                    labels: ['Present', 'Absent'],
                                    datasets: [{
                                      backgroundColor: [                                       
                                        "rgba(38, 239, 105,0.5)",
                                         "rgba(255, 99, 132, 0.2)",      
                                      ],
                                      hoverBackgroundColor: [
                                         
                                         "rgba(38, 239, 105,0.8)",
                                         "rgba(255, 99, 132, 0.5)",
                                      ],

                                      borderColor: [
                                         'rgba(38, 239, 105, 1)',
                                         'rgba(255, 99, 132, 1)',

                                               
                                         ],
                                         borderWidth: 1,
                                      data: [100,20]
                                    }]
                                  },
                                  options: {
                                        cutoutPercentage: 50,
                                  },
                                });
                                </script>
                      </div>
                    
            
                    </div>
                </div>    
           </div>

           <div class="container">
                <div class="well dashboard-search">
                    <div class="row">
                        <div class="col-lg-4">
                          <input type="search" placeholder="Search trainee" id="search_students" name="search_students" class="form-control">  <i class="fa fa-search"></i>
                        </div>
                        <div class="col-lg-3">
                            <select class="form-control">
                                <option selected disabled>Course</option>
                                <option>All</option>
                                <option>BSIT</option>
                                <option>BSCS</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                             <select class="form-control">
                                <option selected disabled>Status</option>
                                <option>All</option>
                                <option>On Going</option>
                                <option>Completed</option>
                            </select>
                        </div>
                        <div>
                            <div class="col-lg-2">
                             <select class="form-control">
                                <option selected disabled>Evaluations</option>
                                <option>None</option>
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                        </div>

                    </div>
                    <div class="well dashboard-list">
                      <table id="adminDataTable" class="table table-striped table-bordered" cellspacing="0" width="100%" style="font-size: 13px;">
                              <thead>
                                  <tr style="background-color: #f44336; color:white;">
                                      <th>Name</th>
                                      <th>Course</th>
                                      <th>Evaluations</th>
                                      <!-- <th>Profile</th>
                                      <th>Dashboard</th> -->
                                      <th>Actions</th>
                                      <th>Status</th>
                                  </tr>
                              </thead>
                             <!--  <tfoot>
                                  <tr>
                                      <th>Name</th>
                                      <th>Course</th>
                                      <th>Evaluations</th>
                                      <th>Profile</th>
                                      <th>Dashboard</th>
                                      <th>Status</th>
                                  </tr>
                              </tfoot> -->
                              <tbody>
                                <?php foreach($student_list as $student):?>
                                    <tr class="dashTable">
                                        <td><?php echo $student['first_name'] . " " . $student['last_name']?></td>
                                        <td><?php echo $student['course']?></td>
                                        <td><?php echo $student['current_evaluations']?></td>
                                        <td style="text-align: center"><a class="btn btn-success view-student-options" href="dashboard?id=<?php echo 2;?>" style="width: 90px">Profile</a> <a class="btn btn-warning view-student-options" href="studentDashboard/<?php echo $student['id_number']?>">Dashboard</a></td>
                                        <td style="color:#f44336;">On going</td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                       <!--  <div class="row">
                            <div class="col-lg-4"> <h4 style="padding-bottom: 20px;margin-left: 20px">Name</h4></div>
                            <div class="col-lg-1"> <h4 style="padding-bottom: 20px;">Course</h4></div>
                            <div class="col-lg-1"> <h4 style="padding-bottom: 20px;">Evaluations</h4></div>
                            <div class="col-lg-2"> <h4 style="padding-bottom: 20px;">Profile</h4></div>
                            <div class="col-lg-2"> <h4 style="padding-bottom: 20px;">Dashboard</h4></div>
                            <div class="col-lg-2"> <h4 style="padding-bottom: 20px;">Status</h4></div>
                             
                        </div> -->
                            
                        <?php foreach($student_list as $student):?>
                        <div class="student-list" style="padding: 10px 10px 10px 10px; margin-bottom: 0px;">
                            <!-- <div class="row">
                                <div class="col-lg-2 nameList" style="color: black; font-size: 13px;" value="<?php echo $student['first_name'] . " " . $student['last_name']?>">
                                    <?php echo $student['first_name'] . " " . $student['last_name']?>
                                </div>
                                <div class="col-lg-2 view-student-options">
                                   <?php echo $student['course']?>
                                </div>
                                <div class="col-lg-2 view-student-options">
                                   Evaluations
                                </div>
                                <div class="col-lg-2 view-student-options">
                                    <a class="view-student-options" href="dashboard?id=<?php echo 2;?>">Profile</a>
                                </div>
                                <div class="col-lg-2 view-student-options">
                                    <a class="view-student-options" href="studentDashboard/<?php echo $student['id_number']?>" style="margin-left: 10px">Dashboard</a>
                                </div>
                                <div class="col-lg-2 view-student-options">
                                    Status
                                </div>
                            </div> -->
                        </div>
                    <?php endforeach;?>
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
            <h3 class="modal-title" id="lineModalLabel" style="color:white;">Post announcement</h3>
        </div>
        <div class="modal-body">
            
            <!-- content goes here -->
            <form>
              <div class="form-group">
                    <label>Announcement</label>
                    <textarea class="form-control" style="resize: none; border-radius: 5px" id="msg" name="msg"></textarea>
                </div>
            </form>

        </div>
        <div class="modal-footer">
            <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                <div class="btn-group" role="group">
                     <button type="button" class="btn btn-success btn-hover-green" data-action="save" role="button" style="width: 270px;border-radius: 5px" id="postMsg">Post</button>
                </div>
                <div class="btn-group" role="group">
                   
                    <button type="button" class="btn btn-danger" data-dismiss="modal"  role="button" style="width: 270px;border-radius: 5px; float: right">Cancel</button>
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
            <h3 class="modal-title" id="lineModalLabel" style="color:white;">Add watch list</h3>
        </div>
        <div class="modal-body">
            
            <!-- content goes here -->
            <form>
              <div class="form-group">
                    <label>Company name</label>
                    <span style="float: right;text-decoration: italic"><a href="#" class="new-company-watchlist">New</a></span>
                     <textarea class="form-control" name="new_company_watch" id="new_company_watchlist" style="resize: none; height:34px;border-radius: 5px; display: none;"></textarea>
                    <select class="form-control company_watchlist_choice" style="border-radius: 5px" id="addWatch" name="addWatch">
                        <option selected disabled>Select company</option>

                        <?php foreach($company_watch_list as $companywatch):?>  
                               <option value="<?php echo $companywatch['company_name']?>"><?php echo $companywatch['company_name']?></option>
                         
                        <?php endforeach;?> 
                    </select>
                </div>
            </form>

        </div>
        <div class="modal-footer">
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
                    <label>Email</label>
                    <input type="Email" class="form-control" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="adminEmail" name="adminEmail">
                    
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
            <form>
              <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control capitalize" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="supName" name="supName">
                    <label>Company</label> <span style="float:right;text-decoration: italic"><a href="#" class="new-company">New</a></span>
                    <input type="text" class="form-control" style="border-radius: 5px;margin-bottom: 10px; width: 100%; display:none" id="new_company" name="new_company">
                    <select class="form-control company_list_choice2" style="border-radius:5px;margin-bottom:10px" id="dropCompany" name="dropCompany">
                                  <option selected disabled>Select company</option>
                         <?php foreach($company_list as $company):?>  
                           <option value="<?php echo $company['company_name']?>"><?php echo $company['company_name']?></option>
                        <?php endforeach;?>  
                                  
                    </select>
                    <label>Designation</label>
                    <input type="text" class="form-control" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="supDesig" name="supDesig">
                    <label>Username</label>
                    <input type="text" class="form-control" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="supID" name="supID">
                    <label>Password</label>
                    <input type="text" class="form-control" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="supPass" name="supPass">
                    <label>Email</label>
                    <input type="text" class="form-control" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="supEmail" name="supEmail">
                    
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
            <button type="button" class="btn btn-default" style="float:right; margin-right:40px" id="import"><span aria-hidden="true">Import CSV</span><span class="sr-only"></span></button>
            <button type="button" class="btn btn-default" style="float:right; margin-right:10px" id="stud"><span aria-hidden="true">+Student</span><span class="sr-only"></span></button>
            <h3 class="modal-title" id="lineModalLabel" style="color:white;">Add student</h3>
        </div>
        <div class="modal-body">
              <!-- Input student individually -->
              <div class="form-group addIndiv" style="display: inline;">

                    <label>Username</label>
                    <input type="text" class="form-control" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="studID" name="studID">
                    <label>First Name</label>
                    <input type="text" class="form-control capitalize" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="studFirst" name="studFirst">
                    <label>Middle Name</label>
                    <input type="text" class="form-control capitalize" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="studMid" name="studMid">
                    <label>Last Name</label>
                    <input type="text" class="form-control capitalize" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="studLast" name="studLast">

                </div>

                <!-- Import CSV -->
                <div class="form-group importCSV" style="display:none;text-align:center">
                    <form action="saveCSV" method="POST" enctype="multipart/form-data">
                        <input class="form-group" type="file" name="importCSV" accept=".csv" style="margin-left: 188px; margin-top:20px" onchange="previewFile()">
                        <button class="btn btn-success button-loading" type="submit" id="saveImport" name="saveImport" data-loading-text="Saving..." style="margin-top:10px;width: 90px; margin-right: 5px;" disabled="">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" id="cancelImport" role="button" style="margin-top:10px;width: 90px">Cancel</button>
                    </form> 
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
<!-- FILTER RESULTS -->
<!-- <script>
  $(document).ready(function(){
    $("#search_students").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#filterResults div").filter(function(){
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script> -->

<script type="text/javascript">
  $(document).ready(function() {
    $('#adminDataTable').DataTable({
      "processing": true,
    });
} );
</script>

<script type="text/javascript">
  String.prototype.capitalize = function() {
    return this.replace(/(?:^|\s)\S/g, function(a) { return a.toUpperCase(); });
  };

  $('#search_students').keyup(function(){
       var text_filter = $(this).val().capitalize();
       $(".student-list").hide();
       $(".student-list:contains("+text_filter+")").css('display','block ');
  });
</script>

<!-- ADD STUDENT -->
<script type="text/javascript">
    function previewFile() {
       $('#saveImport').prop("disabled",false);
    }
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
    var id = $('#studID').val();
    var first = $('#studFirst').val().capitalize();
    var mid = $('#studMid').val().capitalize();
    var last = $('#studLast').val().capitalize();

    if(id == "" || first == "" || mid == "" || last == ""){
        alert("Please fill all fields");return false;
    }else{
      $.ajax({
        url: "addStudent",
        type: "POST",
        data: {
          'id': id,
          'fname': first,
          'mname': mid,
          'lname': last, 
        },  
        success:function(data){
            if(data == "user_exist"){
              swal('Oops...','Student already exist!','error');
            }
            else{
              swal({
                title: "Success!",
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
        $("#show-logout").slideToggle();
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
    return this.replace(/(?:^|\s)\S/g, function(a) { return a.toUpperCase(); });
  };

  $('#addSup').click(function(e){
      var n = $('.new-company').html();
        var name = $('#supName').val().capitalize();
        if(n == 'New'){
          var compName = $('#dropCompany').val();
        }else{
          var compName = $('#new_company').val();
        }
        var desig = $('#supDesig').val().capitalize();
        var id = $('#supID').val();
        var pass = $('#supPass').val();
        var email = $('#supEmail').val();

        if(name == null || compName == null || desig == null || id == null || pass == null || email == null){
          alert("Please fill all fields");return false;
        }else{
          $.ajax({
            url: "adminAddSupervisor",
            type: "POST",
            data: {
              'supName':name,
              'supCompany':compName,
              'supDesig':desig,
              'supID':id,
              'supPass':pass,
              'supEmail':email,
            },
            success:function(data){
              if(data == "name_exist"){
                  swal('Oops...','Name already exist!','error');return false;
              }else if(data == "id_exist"){
                  swal('Oops...','Username already exist!','error');return false;
              }else if(data == "email_exist"){
                  swal('Oops...','Email already exist!','error');return false;
              }else{
                swal({
                    title: "Success!",
                    text: "Supervisor added successfully",
                    icon: "success",
                  }).then(function () {
                    location.reload();
                  });

                 $.ajax({
                    url: "saveEmail",
                    type: "POST",
                    data:{
                      'email': email,
                    },
                    success:function(data){
                      alert("Email verification sent");
                    }
                  });
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
<!-- ADD WATCHLIST -->
<script type="text/javascript">
  $('#addWatchList').click(function(e){
      var n = $('.new-company-watchlist').html();
        if(n == 'New'){
          var compName = $('#addWatch').val();
        }else{
          var compName = $('#new_company_watchlist').val();
        }
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

              if(data == "fail"){
                alert("That company is already in the watch list");
              }else{  
                swal({
                  title: "Success!",
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

<script type="text/javascript">
    $("span").hover(function(){
        $("span").css("background","none");
        $("span").css("color","#000");
    });
</script>

<!-- ADD ADMIN -->
<script type="text/javascript">
  String.prototype.capitalize = function() {
    return this.replace(/(?:^|\s)\S/g, function(a) { return a.toUpperCase(); });
  };
      $(document).ready(function(){
          $("#adminAdd").click(function(){
            var adminName = $('#adminName').val().capitalize();
            var idNum = $('#adminID').val();
            var pass = $('#adminPass').val();
            var email = $('#adminEmail').val();

            if(adminName.length == 0 || idNum.length == 0 || pass.length == 0 || email.length == 0){
             alert("Please fill all fields");    
            }
            else{
                $.ajax({  
                url : "adminAddAdmin",// your username checker url
                type : "POST",
                data : { 
                    'adName': adminName,
                    'adID': idNum,
                    'adPass': pass,
                    'adEmail': email,
                   },
                success:function(data){
                    if(data=="name_exist"){
                      swal('Oops...','Name already exist!','error');return false;
                    }
                    else if(data=="id_exist"){
                      swal('Oops...','Username already exist!','error');return false;
                    }
                    else if(data=="email_exist"){
                      swal('Oops...','Email already exist!','error');return false;
                    }
                    else{
                     swal({
                        title: "Success!",
                        text: "Admin added successfully",
                        icon: "success",
                      }).then(function(){
                        location.reload();
                      });
                        
                        $.ajax({
                          url: "saveEmail",
                          type: "POST",
                          data:{
                            'email': email,
                          },
                          success:function(data){
                            alert("Email verification sent");
                          }
                        });
                    }
                  },
              });
            }
          
          });
       });
</script>

</html>