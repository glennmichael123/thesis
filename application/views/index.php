<!DOCTYPE html>
<html>
<head>
 <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/materialize.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

          

  <!-- Compiled and minified JavaScript -->
  
   <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
 
    <title></title>
    <style type="text/css">
        body{
          background-image: url(<?php echo base_url() ?>assets/images/backgrounds.jpg);
        }
        .header{
            width: 100%;
        }
        .top{
          background-color: #ca2e32;
          padding: 20px;
          position: relative;
          bottom: 65px;
        }
        p.login-title{
          font-size: 1.5em;
          text-transform: uppercase;
          text-align: center;
          font-weight: bold;
          font-family: 'Roboto', sans-serif;
        }
        p.login-subtitle{
          font-size: 1.2em;
          text-transform: uppercase;
          text-align: center;
          font-weight: bold;
          font-family: 'Roboto', sans-serif;
        }
        .login-box{
          margin-top: 3%;
        }
        p.header-name{
          /*display: inline-block;*/
          font-size: 2em;
          font-weight: bold;
          font-family: 'Roboto', sans-serif;
          /*position: absolute;*/
          /*top: -15px;*/
          margin-bottom: 0px;
          margin-top: 0px;
          /*left: 120px;*/
          color: #800000;
          text-transform: uppercase;
        }
        p.header-subname{
          /*position: absolute;*/
          /*top: 25px;*/
          /*left: 320px;*/
          font-size: 1.5em;
          font-weight: bold;
          font-family: 'Roboto', sans-serif;
          color: #800000;
          text-transform: uppercase;
          margin-bottom: 0px;
          margin-top: 0px;
          letter-spacing: 5px;
        }
        .btnWatchList{
            background-color: #ca2e32 !important;
            float: right;
            font-size: 12px;
        }
        .btnWatchList:hover{
            background-color: #ca2e32 !important;
        }
        .btnWatchList:visited{
            background-color: #ca2e32 !important;
        }
    </style>
</head>
<body>
<div class="header">
<!--    <div class="container-fluid" style="width: 100%; padding-top: 5px;">
       <div class="col s12" style="display: inline-block;">
           
           <p class="header-name">Cebu Institute of Technology</p>
           <p class="header-subname">University</p>
       </div>
   </div> -->

   <div class="row " style="margin-bottom: 0px;">
     <!-- <img src="<?php echo base_url() ?>assets/images/cit.png" style="width: 150px; float: left;"> -->
      <div class="col s12 center-align" style="padding: 10px;">
       
        <p class="header-name"><u>Cebu Institute of Technology</u></p>
        <p class="header-subname">University</p>
      </div>
   </div>
</div>
<div class="row">
  <a href="#watchlist" class="modal-trigger">
    <button class="btn waves-effect waves-dark btnWatchList">WATCHLIST</button>
  </a>
  <a href="#companylist" class="modal-trigger">
    <button class="btn waves-effect waves-dark btnWatchList" style="margin-right: 5px;">COMPANIES</button>
  </a>
</div>
    <div class="valign-wrapper row login-box ">
  <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4 z-depth-5">
    <form action="<?php echo base_url() ?>main/loggedin" method="post">
      <div class="card-content" style="padding-bottom:0px">
        <!-- <span class="card-title">Login</span>-->  
        <div class="top hoverable z-depth-5">
          <p class="login-title" style="color: #FFF;">ON THE JOB TRAINING</p>
          <p class="login-subtitle" style="color: #FFF;">Automate</p>
        </div>
        <div class="row">
          <p style="font-weight: bold;" class="center-align red-text"><?php echo $this->session->flashdata('Status');  ?></p>
        </div>
        <div class="row" style="margin-top: -25px;">
          <div class="input-field col s12">
            <label for="email">Username</label>
            <input type="text" class="validate" name="username" id="email" />
          </div>
          <div class="input-field col s12">
            <label for="password">Password</label>
            <input type="password" class="validate" name="password" id="password" />
          </div>
          <div class="row">
              <div class="col s6">
                 <label><a href="<?php echo base_url('incorrectpassword') ?>">Forgot Password?</a></label>

              </div>
          </div>
         
            <!-- <div class="row">
              <div class="col s6 offset-5">
               
                 <div style="font-size: 13px;margin-top: 15px;">LOGIN AS</div>
              
              </div>
              <div class="col s6">
                 <select name="login-options" style="height: 1rem !important" id="loginas">
                 <option value="ojt" selected>OJT</option>
                 <option value="supervisor">Supervisor</option>
                 <option value="administrator">Administrator</option>
             </select>
              </div>
            </div> -->

            <button type="submit" class="btn amber lighten-1 waves-effect waves-light" style="width: 100%; height: 50px;margin: 30px 0px 15px 0px;">LOGIN</button>

        </div>
      </div>

     <!--  <div class="card-action center-align" style="padding-bottom: 0px;margin-top: -20px">
        <div class="row">
          <div class="col s12">
            <button type="submit" class="btn amber lighten-1 waves-effect waves-light" style="width: 100%; height: 50px;">LOGIN</button>
          </div>
        </div>
      </div> -->
    </form>
  </div>
</div>
<div id="watchlist" class="modal modal-fixed-footer" style="border-radius: 10px;">
  <div class="modal-header" style="background-color:#ca2e32;padding:10px;"> 
    <h5 style="font-weight:bold;color:white">Company Watchlist</h5>
  </div>
    <div class="modal-content">

      <h5 style="font-weight: bold">Company Watchlist</h5>
      <?php if(empty($watch_list)): ?>
        <h6 class="center-align">There are no company watch list yet.</h6>
      <?php else: ?>

      <?php foreach ($watch_list as $list):?>
        <ul>
          <li style="color:#00615f;font-size: 15px;"><?php echo $list['company_name']; ?></li>
        </ul>
      <?php endforeach; ?>

    <?php endif; ?>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
    </div>
  </div>
  <div id="companylist" class="modal modal-fixed-footer" style="border-radius: 10px;">
  <div class="modal-header" style="background-color:#ca2e32;padding:10px;"> 
    <h5 style="font-weight:bold;color:white">List of Companies</h5>
  </div>
    <div class="modal-content">
        <div id="wrap-students">
    <div class="well dashboard-list">
      <?php if(empty($companies)):?>
          <table id="adminDataTable" class="bordered" cellspacing="0" width="100%" style="font-size: 13px;">
            <thead>
                <tr style="background-color: #f44336; color:white;">
                    <th>Company Name</th>
                    <th>Address</th>
                    <th>Designated Person</th>
                    <th>Contact Number</th>
                    <th>MOA</th>
                    <th></th>

                </tr>
            </thead>
          </table>
      <?php else:?>
      <form action="deleteCompany" method="POST" name="formDel">
            <table id="adminDataTable" class="striped" cellspacing="0" width="100%" style="font-size: 13px;">
                    <thead>
                        <tr style="background-color: #db3c30; color:white;">
                           
                            <th>Company Name</th>
                        <th>Address</th>
                        <th>Designated Person</th>
                        <th>Contact Number</th>
                        <th>MOA</th>
              
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($companies as $company):?>
                        <tr class="dashTable">
                              <td><?php echo $company['company_name']; ?></td>
                              <td><?php echo $company['address']; ?></td>
                              <td><?php echo $company['designated_person']; ?></td>
                              <td><?php echo $company['contact_no']; ?></td>
                              <td><?php echo($company['moa'] == 1 ? 'With MOA' : 'Without MOA')?></td>
                        </tr>
                      <?php endforeach;?>
                  </tbody>
              </table>
            <?php endif;?>
        </form>
    </div>
    </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
    </div>
  </div>
<script src="<?php echo base_url() ?>assets/js/materialize.min.js"></script>
</body>

<script type="text/javascript">
    $(document).ready(function() {
    $('select').material_select();
    $('.modal').modal();
});
</script>
<script type="text/javascript">
  var table = $('#adminDataTable').DataTable({
     "bProcessing": true,
      "order": [1, 'asc'],
      "columns": [{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false }],
  });
</script>
</html>