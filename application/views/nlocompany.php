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
    
    <!-- <script src="//code.jquery.com/jquery-1.12.4.js"></script> -->
    <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/dataTables.bootstrap.min.js"></script>
    <link href="<?php echo base_url() ?>assets/css/toggle.min.css" rel="stylesheet">
  <script src="<?php echo base_url() ?>assets/js/toggle.min.js"></script>
<!-- Sweet Alert -->
    <script src="<?php echo base_url()?>assets/js/swal.js"></script>
</head>
<style type="text/css">

body{
     background-color: #F4F4F4;
}

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

.pagination > li.active > a{
    background-color:#f44336 !important;
    border:2px solid #d32f2f !important;
 }

.pagination > li > a:hover{
  background-color:#ffc107;
}
tr:hover{
  background-color: #faf2cc;
}

</style>
<body>
 <!--   <form action="<?php echo base_url('addCsvCompany')?>" method="POST" enctype="multipart/form-data">
      <input type="file" name="companyCsv">
      <input type="submit" name="">
  </form> -->
	<div class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4">
					<div class="logo" style="float: left;"><img src="<?php echo base_url();?>assets/images/logo.png" style="width: 50px; height: 50px;"></div>
                        <a href="admindashboard" style="text-decoration: none;"><h3 style="font-weight: bold; margin-top: 12px; color: #b71c1c ; text-align: left; font-family: fantasy;font-style: italic;font-size: 20pt;letter-spacing: 1px;">OJT AUTOMATE</h3></a> 
				</div>
				<div class="col-lg-5"></div>
				<div class="col-lg-2">
            <h5 style="position: relative; top: 5px;font-weight: bold;float: right;">Hi, <?php echo $fname;?><br>
            <span style="font-size:11px;font-weight: normal;">NLO Admin</span></h5>
          </div>
          <div class="col-lg-1">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" id="dropdown-logout" data-toggle="dropdown">

                  <i class="fa fa-user-circle fa-3x circular-square pull-right" style="width: 40px; height: 40px; margin-top: -10px;"></i>
                 </a>
                <ul class="dropdown-menu" id="show-logout">
                  <li><a href="changepassword">Change password <i class="fa fa-key" style="position: absolute; right: 20px;" aria-hidden="true"></i></a></li>
                  <li class="divider"></li>
                  <li><a href="logout">Log Out <i class="fa fa-sign-out" style="position: absolute; right: 20px;"></i></a></li>
                </ul>
              </li>
            </ul>
          </div>
			</div>
		</div>
	</div>

  
<div class="container">
  
  <div class="panel nlopanel" style="border-radius: 7px;">
  <h3 id="nlo">Networking and Linkages Office
    <button type="button" class="btn btn-company" style="float:right;margin-right: 10px;" id="viewpdf" ><i class="fa fa-book"></i>View PDF</button>
    <button type="button" class="btn btn-company" style="float:right;margin-right: 10px;" id="viewwatchlisted" ><i class="fa fa-book"></i>View Watchlisted</button>
   <button style="float: right; margin-right: 10px;" data-toggle="modal" data-target="#addComp" class="btn btn-company">+Company</button></h3>
  
</div>


</div>

<div class="container">
<div id="wrap-students">
  <div class="well">
    <div class="row">
      <div class="col-lg-3 col-lg-offset-5">
        <select class="form-control" id="nloWatchlistedFilter">
          <option selected disabled>Watchlisted</option>
          <option value="">All</option>
          <option value="yes">Yes</option>
          <option value="no">No</option>
        </select>
      </div>
      <div class="col-lg-3">
        <select class="form-control" id="nloMOAFilter">
          <option selected disabled>MOA</option>
          <option value="">All</option>
          <option value="with_moa">With MOA</option>
          <option value="no_moa">No MOA</option>
        </select>
      </div>
      <div class="col-lg-1">
        <button class="btn btn-default" id="disp" onclick="location.reload();" style="float: right;"><i class="fa fa-refresh" aria-hidden="true" style="color:#7f715a"></i></button>
      </div>
    </div>

    <!-- Table  -->
    <div class="loadNLOTable">
      
    </div>
  </div>
    
    </div>
</div>    
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Company</h4>
      </div>
      <div class="modal-body">
        <form class="form-group">
          <label>Company Name</label>
          <input type="hidden" name="id" class="hidden_id" value="">
          <input type="text" id="compName" name="company_name" class="form-control compName" value="">
          <label>Company Address</label>
          <input type="text" id="compAddress" name="address" class="form-control compAddress" value="">
          <label>Designated Person</label>
          <input type="text" id="compPerson" name="designated_person" class="form-control compPerson" value="">
          <label>Position</label>
          <input type="text" id="compPosition" name="position" class="form-control compPosition" value="">
          <label>Contact Number</label>
          <input type="text" id="compContact" name="contact_no" class="form-control compContact" value="">
          <hr>
          <div class="checkbox">
              <input type="checkbox" id="compMoa" class="compMoa" data-toggle="toggle" data-on="With MOA" data-off="Without MOA" data-onstyle="success" data-offstyle="danger" data-width="150">
         </div>
          <div class="checkbox">
                  <input type="checkbox" id="compBan" class="compBan" data-toggle="toggle" data-on="Not Banned" data-off="Banned" data-onstyle="success" data-offstyle="danger" data-width="150">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary savecompany">Save Changes</button>
      </div>
    </div>
  </div>
</div>
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
          <label>Position</label>
          <input type="text" name="companyPos" class="form-control companyPos">
          <label>Contact Number</label>
          <input type="text" name="companyCN" class="form-control companyCN">
          <input type="hidden" id="hidden-edit-id" name="">
          <div class="checkbox">
              <input type="checkbox" class="companyMoa" data-toggle="toggle" data-on="With MOA" data-off="Without MOA" data-onstyle="success" data-offstyle="danger" data-width="150">
          </div>
          <div class="checkbox">
              <input type="checkbox" class="watchlisted" data-toggle="toggle" data-on="Not Banned" data-off="Banned" data-onstyle="success" data-offstyle="danger" data-width="150">
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
  $(document).ready(function(){
    var watchlisted = $('#nloWatchlistedFilter').val();
    var moa = $('#nloMOAFilter').val();
    $.ajax({
      url: "loadNLOtable",
      type: "POST",
      data:{
        'watchlisted': watchlisted,
        'moa': moa,
      },
      success:function(data){
        $('.loadNLOTable').html(data);
      }
    });
  });

  $('#nloWatchlistedFilter').change(function(){
    var watchlisted = $('#nloWatchlistedFilter').val();
    var moa = $('#nloMOAFilter').val();
    $.ajax({
      url: "loadNLOtable",
      type: "POST",
      data:{
        'watchlisted': watchlisted,
        'moa': moa,
      },
      success:function(data){
        $('.loadNLOTable').html(data);
      }
    });
  });

  $('#nloMOAFilter').change(function(){
    var watchlisted = $('#nloWatchlistedFilter').val();
    var moa = $('#nloMOAFilter').val();
    $.ajax({
      url: "loadNLOtable",
      type: "POST",
      data:{
        'watchlisted': watchlisted,
        'moa': moa,
      },
      success:function(data){
        $('.loadNLOTable').html(data);
      }
    });
  });
</script>
<script type="text/javascript">
  $('#viewpdf').click(function(){
    window.open(
  '<?php echo base_url() ?>' + 'viewpdf','_blank' 
);

  }
    );
    $('#viewwatchlisted').click(function(){

    window.open(
  '<?php echo base_url() ?>' + 'watchlisted','_blank' 
);

  }
    );
</script>
<script type="text/javascript">
	$('.savecompany').click(function(){
		var moa;
		var ban;

      var compName = $('#compName').val();
      var compAddress= $('#compAddress').val();
      var compPerson = $('#compPerson').val();
      var compContact =  $('#compContact').val();
      var compPosition = $('#compPosition').val();
      var compID = $('#hidden-edit-id').val();
    if(compName.length == 0 || compName=="" || compName == null){
      swal('Oops...', 'Company name is required', 'error');return false;
    }

		if($('#compMoa').is(':checked')){
			moa=1;
		}
		else{
			moa=0;
		}
		if($('#compBan').is(':checked')){
			ban=0;
		}
		else{
			ban=1;
		}
		$.ajax({
			url: '<?php echo base_url() ?>'+'editCompany',
			type:'POST',
			data: {
				'compName': compName,
				'compAddress': compAddress,
        'compPerson': compPerson,
				'compPosition': compPosition,
				'compContact': compContact,
				'compID': compID,
				'moa': moa,
				'ban':ban
			},

			success: function(data){
        if($.trim(data) == 'exists'){
          swal('Oops...','Company already exists','error');
        }else{
          location.reload();
        }
			}
		});
	});
</script>
<script type="text/javascript">
  $('.addcompany').click(function(){
      var companyName = $(this).closest('.modal').find('.companyName').val();
      var companyAddress = $(this).closest('.modal').find('.companyAddress').val();
      var companyDP = $(this).closest('.modal').find('.companyDP').val();
      var companyPos = $(this).closest('.modal').find('.companyPos').val();
      var companyCN = $(this).closest('.modal').find('.companyCN').val();
      var moa;
      var ban;

      if(companyName.length == 0 || companyName=="" || companyName == null){
        swal('Oops...', 'Company name is required', 'error');return false;
      }
      if($(this).closest('.modal').find('.companyMoa').is(':checked')){
        moa=1;
      }
      else{
        moa=0;
      }
      if($(this).closest('.modal').find('.watchlisted').is(':checked')){
        ban=0;
      }
      else{
        ban=1;
      }
      $.ajax({
        url:'<?php echo base_url() ?>'+'addCompany',
        type:'POST',
        data:{
          'companyName': companyName,
          'companyAddress': companyAddress,
          'companyDP': companyDP,
          'companyPos': companyPos,
          'companyCN': companyCN,
          'moa': moa,
          'ban': ban
        },
        success: function(data){
          if($.trim(data) == 'exists'){
            swal('Oops...','Company already exists','error');return false;
          }else{
            swal({
                title: "Success",
                text: "Company added successfully",
                icon: "success",
              }).then(function () {
                location.reload();
              });
            }
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
      "columns": [{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false }, {"orderable": false },{"orderable": false }],
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

<script type="text/javascript">
  $(document).on('click','.edit-view',function(e){
    var id = $(this).data('company-id');

    $.ajax({
      url: '<?php echo(base_url('getNloCompanyModal')) ?>',
      type: "POST",
      data:{
        'id':id,
      },
      success: function(data){
       var data2 = JSON.parse(data);
        $('#compName').val(data2.company_name);
        $('#compAddress').val(data2.address);
        $('#compPerson').val(data2.designated_person);
        $('#compContact').val(data2.contact_no);
        $('#compPosition').val(data2.position);
        $('#hidden-edit-id').val(data2.id);
        if(data2.moa == 1){
           $('#compMoa').prop('checked', true).change();
        }else{
          $('#compMoa').prop('checked', false).change();
        }
        if(data2.watchlisted == 0){
          $('#compBan').prop('checked', true).change();
        }else{
           $('#compBan').prop('checked', false).change();
        }
      }
    })
  });
</script>

</html>