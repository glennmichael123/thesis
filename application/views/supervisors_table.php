<div id="wrap-students">
    <div class="well dashboard-list">

      <?php if(empty($supervisor_list)):?>
          <table id="supervisorDataTable" class="table table-bordered" cellspacing="0" width="100%" style="font-size: 13px;">
            <thead>
                <tr style="background-color: #f44336; color:white;">
                    <!-- <th style="text-align: center;width: 45px"><input type="checkbox" id="checkall"></th> -->
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Company</th>
                    <th>Contact number</th>
                    <th>Trainees</th>
                    <th></th>
                </tr>
            </thead>
          </table>
      <?php else:?>
      <form action="deleteStudent" method="POST" name="formDel">
            <table id="supervisorDataTable" class="table table-bordered" cellspacing="0" width="100%" style="font-size: 13px;">
                    <thead>
                        <tr style="background-color: #f44336; color:white;">
                            <!-- <th style="text-align: center;width: 45px"><input type="checkbox" id="checkall"></th> -->
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Company</th>
                            <th>Contact number</th>
                            <th>Trainees</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                      <?php foreach ($supervisor_list as $supervisor):?>
                          <tr class="dashTable">
                            <!-- <td></td> -->
                            <td><?php echo $supervisor['name'];?>
                              <?php if (!$supervisor['flag']):?>
                                <a class="resendEmail" href="#" style="float: right;" data-email="<?php echo $supervisor['email'];?>" data-id-number="<?php echo $supervisor['id_number'];?>" data-name="<?php echo $supervisor['name'];?>" data-password="<?php echo $supervisor['password'];?>" title="Retry sending email"><i class="fa fa-envelope" style="color: red;"></i></a>
                                <i class="fa fa-circle-o-notch fa-spin hiddenLoading loader" style="font-size:15px;float:right;"></i>
                              <?php else: ?>
                                  <?php if($supervisor['verified']): ?>
                                  <i class="fa fa-check" style="color: green;float: right;" title="Verified"></i>
                                <?php endif; ?>
                              <?php endif;?>
                            </td>
                            <td><?php echo $supervisor['designation'];?></td>
                            <td><?php echo $supervisor['company_name'];?></td>
                            <td><?php echo $supervisor['phone_number'];?></td>
                            <td>
                              <?php foreach ($trainees as $trainee):?>
                                <?php if ($trainee['supervisor_id'] == $supervisor['id_number']):?>
                                  <p style="padding: 0px;margin: 0px;">
                                    <?php echo $trainee['last_name'].", ".$trainee['first_name']." ".$trainee['middle_initial']."";?>
                                  </p>
                                <?php endif;?>
                              <?php endforeach;?>
                            </td>
                            <td style="text-align: center"><a href="" data-toggle="modal" data-target="<?php echo '#'.preg_replace("/[^A-Za-z0-9 ]/", '', $supervisor['id_number'])?>"><i class="fa fa-pencil"></i></a></td>
                          </tr>
                      <?php endforeach;?>
                  </tbody>
              </table>
              <!-- <div><button type="button" class="btn btn-warning" id="btnDelete"><i class="fa fa-trash"></i> Delete Selected Item(s)</button> </div> -->
        <?php endif;?>
        </form>
     </div>
  </div>


<?php foreach ($supervisor_list as $supervisor):?>
<div class="modal fade" id="<?php echo preg_replace("/[^A-Za-z0-9 ]/", '',$supervisor['id_number'])?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  
  <div class="modal-dialog">
    <div class="modal-content modalContent">
        <div class="modal-header modalHeader">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h3 class="modal-title" id="lineModalLabel" style="color:white;">Edit supervisor</h3>
        </div>
        <div class="modal-body">
            
            <!-- content goes here -->
            <form>
              <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control capitalize suppName" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="edit-supName" name="edit-supName" value="<?php echo $supervisor['name']?>">
                    <!-- <label>Company</label> <span style="float:right;text-decoration: italic"><a href="#" class="edit-new-company">New</a></span>
                    <input type="text" class="form-control editNew_company suppCompany" style="border-radius: 5px;margin-bottom: 10px; width: 100%; display:none" id="editNew_company" name="editNew_company">
                    <select class="form-control edit-company_list_choice2" style="border-radius:5px;margin-bottom:10px" id="dropCompany" name="dropCompany">
                         <option selected hidden><?php echo $supervisor['company_name']?></option>
                         <?php foreach($company_list as $company):?>  
                           <option value="<?php echo $company['company_name']?>"><?php echo $company['company_name']?></option>
                        <?php endforeach;?>  
                    </select> -->
                    <div class="row">
                      <div class="col-lg-12" style="padding: 10px 15px;">
                        <label for="editComp">Company name</label>
                        <input type="text" class="form-control suppCompany" id="editComp" style="border-radius: 5px;width: 565px;" name="suppCompany" value="<?php echo $supervisor['company_name']?>">
                       </div>
                    </div>


                    <label>Designation</label>
                    <input type="text" class="form-control capitalize suppDesig" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="edit-supDesig" name="edit-supDesig" value="<?php echo $supervisor['designation']?>">
                    <label>Username</label>
                    <input type="text" class="form-control suppId" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="edit-supID" name="edit-supID" value="<?php echo $supervisor['id_number']?>">
                    <input type="hidden" class="hiddenId" value="<?php echo $supervisor['id_number']?>">
                    <label>Password</label>
                    <input type="text" class="form-control suppPass" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="edit-supPass" name="edit-supPass" value="<?php echo $supervisor['password']?>">
                    <label>Email</label>
                    <input type="text" class="form-control suppEmail" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="edit-supEmail" name="edit-supEmail" value="<?php echo $supervisor['email']?>">
                    <input type="hidden" class="hiddenEmail" value="<?php echo $supervisor['email']?>">
                    <label>Phone Number</label>
                    <input type="text" class="form-control suppNumber" onkeypress='return event.charCode >= 48 && event.charCode <= 57' style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="edit-supNumber" name="edit-supNumber" value="<?php echo $supervisor['phone_number']?>">
                    <p class="blink_me hide" style="text-align: center">Sending email ... </p> 
                </div>
            </form>

        </div>
        <div class="modal-footer">
            <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                <div class="btn-group" role="group">
                     <button type="button" class="btn btn-success btn-hover-green editsup" data-action="save" role="button" style="width: 270px;border-radius: 5px" id="editsup">Save</button>
                </div>
                <div class="btn-group" role="group">
                   
                    <button type="button" class="btn btn-danger cancel" data-dismiss="modal" role="button" style="width: 270px;border-radius: 5px; float: right">Cancel</button>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
<?php endforeach;?>


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
      $(this).closest('.modal').find('.suppCompany').easyAutocomplete(options);
  });
</script>
<script type="text/javascript">
  String.prototype.capitalize = function() {
    return this.replace(/(?:^|\s)\S/g, function(a) { return a.toUpperCase(); });
  };

    $(document).on('click','.editsup',function(e){
        var cancel = $(this).closest('.modal').find('.cancel');
        var id = $(this).closest('.modal').find('.hiddenId').val();
        var currentEmail = $(this).closest('.modal').find('.hiddenEmail').val().trim();
        var name = $(this).closest('.modal').find('.suppName').val().capitalize().trim();
        var company = $(this).closest('.modal').find('.suppCompany').val().trim()
        var designation = $(this).closest('.modal').find('.suppDesig').val().trim();
        var username = $(this).closest('.modal').find('.suppId').val().trim();
        var password = $(this).closest('.modal').find('.suppPass').val().trim();
        var email = $(this).closest('.modal').find('.suppEmail').val().trim();
        var phone_number = $(this).closest('.modal').find('.suppNumber').val().trim();
        if(name.length == 0 || company == null || company.length == 0|| designation.length == 0 || username.length == 0 || password.length == 0 || email.length == 0){
          swal('Oops...','Please fill all fields','error');;return false;
        }
        if(currentEmail != email){
          var flag = 0;
        }else{
          flag = 1;
        }
        $.ajax({
          url:"<?php echo base_url('editSupervisor')?>",
          type:'POST',
          data:{
            'id':id,
            'name':name,
            'company':company,
            'designation':designation,
            'username':username,
            'password':password,
            'email':email,
            'phone_number':phone_number,
            'flag':flag,
          },
          success:function(data){
            if($.trim(data) == "name_exist"){
                swal('Oops...','Name already exist','error');
                return false;
            }else if($.trim(data) == "id_exist"){
                swal('Oops...','Username already exist','error');
                return false;
            }else if($.trim(data) == "email_exist"){
                swal('Oops...','Email already exist','error');
                return false;
            }else{
              swal({
                  title: "Edit success",
                  icon: "success",
                }).then(function () {
                  $(".cancel").trigger("click");
                  $("#toSupervisorsTable").trigger("click");
                });
            }
          }
        });
    });
</script>

<script type="text/javascript">
  $('.edit-new-company').click(function(e){
      e.preventDefault();
      $('.edit-company_list_choice2').toggle();//class
      $('.editNew_company').toggle();//
      var n = $('.edit-new-company').html();
 
      if(n == 'New'){
         $('.edit-new-company').html('Cancel');
      
      }else{
        $('.edit-new-company').html('New');
      }
  });
</script>

<script type="text/javascript">

  $(document).on('click','.resendEmail',function(e){
      e.preventDefault();

      var email=$(this).data('email');
      var username=$(this).data('id-number');
      var name=$(this).data('name');
      var password=$(this).data('password');
      var loading = $(this).closest('.dashTable').find('.loader');
      var envelope = $(this).closest('.dashTable').find('.fa-envelope');
      loading.removeClass('hiddenLoading');
      envelope.hide();
      $.ajax({
        url:"retrySendEmail",
        type: "POST",
        data:{
          'name': name,
          'email': email,
          'password': password,
          'username': username,
        },
        success:function(data){
          if($.trim(data) == "true"){
            swal({
              title: "Success!",
              text: "Email sent successfully",
              icon: "success",
            }).then(function(){
              $("#toSupervisorsTable").trigger("click");
              // location.reload();
            });
          }else
              swal('Something went wrong','Email not sent','error');
              loading.addClass('hiddenLoading');
              envelope.show();
          }
      });
  });
</script>

<script type="text/javascript">
  var table = $('#supervisorDataTable').DataTable({
     "bProcessing": true,
      "order": [1, 'asc'],
      "columns": [{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false }],
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
                url: "deleteStudent",
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
