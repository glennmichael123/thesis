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
    <link href="<?php echo base_url() ?>assets/css/toggle.min.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/js/toggle.min.js"></script>
<!-- Sweet Alert -->
    <script src="<?php echo base_url()?>assets/js/swal.js"></script>
</head>
<style type="text/css">
	 .header{
        background-color: #ffba00;
        padding: 5px;
      	height: 60px;
       	border-bottom: 3px solid #791b1e;
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
.nav a{
     color: #915B51;
}
.nav>li>a:hover, .nav>li>a:focus, .nav .open>a, .nav .open>a:hover, .nav .open>a:focus {
    background:inherit;
}
.nlopanel{
  height: 70px;
  margin-top: 20px;
  background-color: #aa2e25;
  border-radius: 0px;


}
#nlo{
  color: #FFF;
  padding-left: 10px;

}
.btn-company{
  background-color: #DB3C30;
  color: #FFFFFF;
  transition: 0.4s;
  border-radius: 3px;
        
}
.btn-company:hover{
   background-color: #DB3C30;
    color: #FFFFFF;
    transition: 0.4s;
    border-radius: 5px;
       
}
.btn-company:focus{
  color: #FFFFFF;
}
</style>
<body>
	<div class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4">
					<div class="logo" style="float: left;"><img src="<?php echo base_url();?>assets/images/logo.png" style="width: 50px; height: 50px;"></div>
                        <a href="admindashboard" style="text-decoration: none;"><h3 style="font-weight: bold; margin-top: 12px; color: #b71c1c ; text-align: left; font-family: fantasy;font-style: italic;font-size: 20pt;letter-spacing: 1px;">OJT AUTOMATE</h3></a> 
				</div>
				<div class="col-lg-5"></div>
				<div class="col-lg-2">
                      <!-- <h5 style="position: relative; top: 15px;">Admin</h5> -->
                      <!-- <h5 style="position: relative; top: 15px;font-weight: bold;float: right;">Hi, <?php echo $first_name;?><br>
                      	<span style="font-size:13px;font-weight: normal;">Admin</span></h5> -->
                    </div>
                    <div class="col-lg-1">

                          <ul class="nav navbar-nav">
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" id="dropdown-logout" data-toggle="dropdown">

                                <i class="fa fa-user-circle fa-3x circular-square pull-right" style="width: 40px; height: 40px; margin-top: -10px;"></i>
                               </a>
                              <ul class="dropdown-menu" id="show-logout">
                                <li><a href="<?php echo base_url('admindashboard') ?>">Dashboard<i class="fa fa-tachometer pull-right"></i></a></li>
                                <li class="divider"></li>
        
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

  
<div class="container">
  
  <div class="panel nlopanel">
  <h3 id="nlo">Networking and Linkages Office <button style="float: right; margin-right: 10px;" data-toggle="modal" data-target="#addComp" class="btn btn-company">+Company</button></h3>
</div>
</div>

<div class="container">
<div id="wrap-students">
    <div class="well dashboard-list">
      <?php if(empty($companies)):?>
          <table id="adminDataTable" class="table table-bordered" cellspacing="0" width="100%" style="font-size: 13px;">
            <thead>
                <tr style="background-color: #f44336; color:white;">
                    <th style="text-align: center;width: 45px"><input type="checkbox" id="checkall"></th>
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
            <table id="adminDataTable" class="table table-bordered" cellspacing="0" width="100%" style="font-size: 13px;">
                    <thead>
                        <tr style="background-color: #db3c30; color:white;">
                            <th style="text-align: center;width: 45px"><input type="checkbox" id="checkall"></th>
                            <th>Company Name</th>
                    		<th>Company Address</th>
                    		<th>Designated Person</th>
                    		<th>Contact Number</th>
                    		<th>MOA</th>
                    		<th></th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($companies as $company):?>
                      	<tr class="dashTable">
                              <td style="text-align: center;width: 45px"><input type="checkbox" class="checkitem" value="<?php echo $company['id']?>" name="usernames[]"></td>
                              <td><?php echo $company['company_name']; ?></td>
                              <td><?php echo $company['address']; ?></td>
                              <td><?php echo $company['designated_person']; ?></td>
                              <td><?php echo $company['contact_no']; ?></td>
                              <td><?php echo($company['moa'] == 1 ? 'With MOA' : 'Without MOA')?></td>
                              <td><button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#<?php echo $company['id']; ?>">Edit <i class="fa fa-pencil"></i></button></td>

                          </tr>
                  	  <?php endforeach;?>
                  </tbody>
              </table>
              <div><button type="button" class="btn btn-warning" id="btnDelete"><i class="fa fa-trash"></i> Delete Selected Item(s)</button></div>
            <?php endif;?>
        </form>
    </div>
    </div>
</div>    
    <!-- Modal -->
<?php foreach ($companies as $company):?>
<div class="modal fade" id="<?php echo $company['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Company</h4>
      </div>
      <div class="modal-body">
        <form class="form-group">
        	<label>Company Name</label>
        	<input type="hidden" name="id" class="hidden_id" value="<?php echo $company['id']; ?>">
        	<input type="text" name="company_name" class="form-control compName" value="<?php echo $company['company_name']; ?>">
        	<label>Company Address</label>
        	<input type="text" name="address" class="form-control compAddress" value="<?php echo $company['address']; ?>">
        	<label>Designated Person</label>
        	<input type="text" name="designated_person" class="form-control compPerson" value="<?php echo $company['designated_person']; ?>">
        	<label>Contact Number</label>
        	<input type="text" name="contact_no" class="form-control compContact" value="<?php echo $company['contact_no']; ?>">
        	<div class="checkbox">
  						<input type="checkbox" class="compMoa" <?php echo($company['moa'] == 1 ? 'checked' : '') ?> data-toggle="toggle" data-on="With MOA" data-off="Without MOA" data-onstyle="success" data-offstyle="danger" data-width="150">
			</div>
			<div class="checkbox">
  						<input type="checkbox" class="compBan" <?php echo($company['watchlisted'] == 1 ? 'checked' : '') ?> data-toggle="toggle" data-on="Banned" data-off="Not Banned" data-onstyle="danger" data-offstyle="success" data-width="150">
			</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary savecompany">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
<div class="modal fade" id="addComp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Company</h4>
      </div>
      <div class="modal-body">
        <form class="form-group">
          <label>Company Name</label>
          <input type="text" name="companyName" class="form-control companyName">
          <label>Company Address</label>
          <input type="text" name="companyAddress" class="form-control companyAddress">
          <label>Designated Person</label>
          <input type="text" name="companyDP" class="form-control companyDP">
          <label>Contact Number</label>
          <input type="text" name="companyCN" class="form-control companyCN">
          <div class="checkbox">
              <input type="checkbox" class="companyMoa" data-toggle="toggle" data-on="With MOA" data-off="Without MOA" data-onstyle="danger" data-offstyle="success" data-width="150">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary addcompany">Add Company</button>
      </div>
    </div>
  </div>
</div>
</body>
<script type="text/javascript">
	$('.savecompany').click(function(){
		var compName = $(this).closest('.modal').find('.compName').val().trim();
		var compAddress = $(this).closest('.modal').find('.compAddress').val().trim();
		var compPerson = $(this).closest('.modal').find('.compPerson').val().trim();
		var compContact = $(this).closest('.modal').find('.compContact').val().trim();
		var compID = $(this).closest('.modal').find('.hidden_id').val().trim();
		var moa;
		var ban;
		if($(this).closest('.modal').find('.compMoa').is(':checked')){
			moa=1;
		}
		else{
			moa=0;
		}
		if($(this).closest('.modal').find('.compBan').is(':checked')){
			ban=1;
		}
		else{
			ban=0;
		}

		$.ajax({
			url: '<?php echo base_url() ?>'+'editCompany',
			type:'POST',
			data: {
				'compName': compName,
				'compAddress': compAddress,
				'compPerson': compPerson,
				'compContact': compContact,
				'compID': compID,
				'moa': moa,
				'ban':ban

			},
			success: function(data){
				location.reload();
			}
		});
		
		
	});
</script>
<script type="text/javascript">
  $('.addcompany').click(function(){
      var companyName = $(this).closest('.modal').find('.companyName').val();
      var companyAddress = $(this).closest('.modal').find('.companyAddress').val();
      var companyDP = $(this).closest('.modal').find('.companyDP').val();
      var companyCN = $(this).closest('.modal').find('.companyCN').val();
      var moa;
      var ban = 0;
      if($(this).closest('.modal').find('.companyMoa').is(':checked')){
      moa=1;
      }
      else{
      moa=0;
      }
      $.ajax({
        url:'<?php echo base_url() ?>'+'addCompany',
        type:'POST',
        data:{
          'companyName': companyName,
          'companyAddress': companyAddress,
          'companyDP': companyDP,
          'companyCN': companyCN,
          'moa': moa,
          'ban': ban
        },
        success: function(data){
          swal({
                title: "Success",
                text: "Company added successfully",
                icon: "success",
              }).then(function () {
                location.reload();
              });
        }
      });



  });
</script>
<script type="text/javascript">
    $("#dropdown-logout").click(function(){
        $("#show-logout").toggle();
        // $('#notification-content').slideUp();
    });
</script>

<!--data-table-->
<script type="text/javascript">
  var table = $('#adminDataTable').DataTable({
     "bProcessing": true,
      "order": [1, 'asc'],
      "columns": [{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false }],
  });
</script>

<script type="text/javascript">
  $('#checkall').change(function(){
    $('.checkitem').prop("checked",$(this).prop("checked"));
  });

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
                url: "deleteCompany",
                type: "POST",
                data:dataUsername,
                success: function(data){
                  location.reload(true);
                }
              });
            }
            else{
              e.preventDefault();
            }
          });
      }
    });
</script>

</html>