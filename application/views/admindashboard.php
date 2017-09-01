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
            <div class="jumbotron">
              <div class="row">
              
                    <div class="col-lg-6">
                        Admin Dashboard
                    </div>
                    <div class="col-lg-6">
                        <section style="display: inline-block; float: right;">
                            <button class="btn btn-primary" data-target="#squarespaceModal" data-toggle="modal">+Announcement</button>
                          
                            <button class="btn btn-primary">+Admin</button>
                            <button class="btn btn-primary">+Supervisor</button>
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
                                <option>BSIT</option>
                                <option>CS</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                             <select class="form-control">
                                <option selected disabled>Status</option>
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
                        <h4 style="padding-bottom: 20px;">List of students</h4>
                        <?php for($i=1; $i<=5; $i++):?>
                        <div class="well student-list">
                            <div class="row">
                            
                                <div class="col-lg-6">
                                    Tyrion Lannister
                                </div>
                                <div class="col-lg-3">
                                    <a class="btn btn-success" href="" style="float: right;">View Profile</a>
                                </div>
                                  <div class="col-lg-3">
                                    <a class="btn btn-default" href="dashboard" style="float: right;">View Dashboard</a>
                                </div>

                            </div>
                        </div>
                    <?php endfor;?>
                    </div>
                </div>
           </div>
        </div>
</div>




<!-- line modal -->
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h3 class="modal-title" id="lineModalLabel">Post announcement</h3>
        </div>
        <div class="modal-body">
            
            <!-- content goes here -->
            <form>
              <div class="form-group">
                    Announcement
                    <textarea class="form-control"></textarea>
                </div>
            </form>

        </div>
        <div class="modal-footer">
            <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                <div class="btn-group" role="group">
                     <button type="button" id="saveImage" class="btn btn-default btn-hover-green" data-action="save" role="button">Post</button>
                </div>
                <div class="btn-group" role="group">
                   
                    <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
                </div>
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



</html>