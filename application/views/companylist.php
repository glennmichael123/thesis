<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-theme.min.css">
	<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
	<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	<!-- Data table -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/dataTables.bootstrap.min.css">
    
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/dataTables.bootstrap.min.js"></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<!-- Sweet Alert -->
    <script src="<?php echo base_url()?>assets/js/swal.js"></script>
</head>
<style type="text/css">
	body{
		background-color: #F4F4F4;
	}
	.header{
		background-color: #FFD700;
		padding: 8px;
		border-bottom: 2px solid #800000;
	}
	 p.header-name{
          /*display: inline-block;*/
          font-size: 2.3em;
          font-weight: bold;
          font-family: 'Roboto', sans-serif;
          /*position: absolute;*/
          /*top: -15px;*/
          margin-bottom: 0px;
          margin-top: 0px;
          /*left: 120px;*/
          color: #800000;
          text-transform: uppercase;
          text-align: center;

        }
        p.header-subname{
          /*position: absolute;*/
          /*top: 25px;*/
          /*left: 320px;*/
          font-size: 1.8em;
          font-weight: bold;
          font-family: 'Roboto', sans-serif;
          color: #800000;
          text-transform: uppercase;
          margin-bottom: 0px;
          margin-top: 0px;
          letter-spacing: 5px;
          text-align: center;
        }
        .well{
        	background-image: none !important;
        	background-color: #FFF;
        }
        #wrap-students{
        	margin-top: 20px;
        }
      .pagination > li.active > a{
          background-color:#f44336 !important;
          border:2px solid #d32f2f !important;
       }
       tr:hover{
          background-color: #faf2cc;
        }
</style>
<body>
	<div class="header">
		<p class="header-name"><u>Cebu Institute of Technology</u></p>
        <p class="header-subname">University</p>
	</div>
	<div class="container">
		<div id="wrap-students">
    <div class="well">
      <?php if(empty($companies)):?>
          <table id="adminDataTable" class="table table-bordered" cellspacing="0" width="100%" style="font-size: 13px;">
            <thead>
                <tr style="background-color: #f44336; color:white;">
                    <th>Company Name</th>
                    <th>Address</th>
                    <th>Designated Person</th>
                    <th>Contact Number</th>
                    <th>MOA</th>
                </tr>
            </thead>
          </table>
      <?php else:?>
      <form action="deleteCompany" method="POST" name="formDel">
            <table id="adminDataTable" class="table table-bordered" cellspacing="0" width="100%" style="font-size: 13px;">
                    <thead>
                        <tr style="background-color: #db3c30; color:white;">
                            <th>Company Name</th>
                    		<th>Company Address</th>
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
                              <?php if($company['moa'] == 1):?>
                                <td style="color: green">With MOA</td>
                              <?php else:?>
                                <td style="color: red">Without MOA</td>
                              <?php endif; ?>
						          </tr>
                  	  <?php endforeach;?>
                  </tbody>
              </table>
            <?php endif;?>
        </form>
    </div>
    </div>
	</div>
</body>
<script type="text/javascript">
  var table = $('#adminDataTable').DataTable({
     "bProcessing": true,
      "order": [0, 'asc'],
      "columns": [{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false }],
  });
</script>
</html>