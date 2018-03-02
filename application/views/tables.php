<div id="wrap-students">
    <div class="well dashboard-list">
      <?php if(empty($student_list)):?>
          <table id="adminDataTable" class="table table-bordered" cellspacing="0" width="100%" style="font-size: 13px;">
            <thead>
                <tr style="background-color: #f44336; color:white;">
                    <th style="text-align: center;width: 45px"><input type="checkbox" id="checkall"></th>
                    <th>Name</th>
                    <th>Course & Year</th>
                    <th>School Year</th>
                    <th>Evaluations</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
          </table>
      <?php else:?>
      <form action="deleteStudent" method="POST" name="formDel">
            <table id="adminDataTable" class="table table-bordered" cellspacing="0" width="100%" style="font-size: 13px;">
                    <thead>
                        <tr style="background-color: #f44336; color:white;">
                            <th style="text-align: center;width: 45px"><input type="checkbox" id="checkall"></th>
                            <th>Name</th>
                            <th>Course & Year</th>
                            <th>School Year</th>
                            <th>Evaluations</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach($student_list as $student):?>
                          <tr class="dashTable">
                              <td style="text-align: center;width: 45px"><input type="checkbox" class="checkitem" value="<?php echo $student['id_number']?>" name="usernames[]"></td>
                              <td><a href="studentinfo/<?php echo $student['id_number']?>" target="_blank"><?php echo $student['last_name'] . ", " . $student['first_name']?></a></td>
                              <td><?php echo $student['course']." - ".$student['year']?></td>
                              <td><?php echo $student['school_year']?></td>
                              <td>
                                <?php if ($student['ojtone_current_evaluations'] == 1 || $student['ojtone_current_evaluations'] == 2 || $student['ojttwo_current_evaluations'] == 1 || $student['ojttwo_current_evaluations'] == 2): ?>
                                  <a href="<?php base_url() ?>viewmidterm/<?php echo $student['id_number']; ?>" target="_blank">
                                    Midterm <i class="fa fa-check-circle"></i></a>
                                <?php else:?>
                                  <a style="color:gray">Midterm <i class="fa fa-times-circle"></i></a>
                                <?php endif;?> 
                                <?php if ($student['ojtone_current_evaluations'] == 2 || $student['ojttwo_current_evaluations'] == 2): ?>
                                    | <a target="_blank" href="<?php base_url() ?>viewfinal/<?php echo $student['id_number']; ?>"> Final <i class="fa fa-check-circle"></i></a> 
                                <?php else: ?>
                                    | <a style="color: gray">Final <i class="fa fa-times-circle"></i></a> 
                                <?php endif; ?>
                              </td>
                   
                              <?php if ($student['ojtone_rendered'] >= $student['ojtone_required'] && $student['ojtone_current_evaluations'] >= $student['total_evaluations'] && $student['ojttwo_rendered']==0):?>
                                  <td style="color:green;">OJT-1 Completed</td>
                                <?php elseif($student['ojtone_rendered'] >= $student['ojtone_required'] && $student['ojtone_current_evaluations'] >= $student['total_evaluations'] && $student['ojttwo_rendered']>0 && $student['ojttwo_rendered'] < $student['ojttwo_required']):?>
                                  <td style="color:green;">OJT-1 Completed | <span style="color:#f44336">OJT-2 On Going</span></td>
                                <?php elseif($student['ojtone_rendered'] > $student['ojtone_required'] && $student['ojttwo_rendered'] >= $student['ojttwo_required'] &&$student['ojttwo_current_evaluations'] >= $student['total_evaluations']):?>
                                <td style="color:green;">OJT-1 Completed | OJT-2 Completed</td>
                                <?php elseif($student['ojtone_rendered'] == 0 && $student['ojttwo_rendered'] >= $student['ojttwo_required'] && $student['ojttwo_current_evaluations'] >= $student['total_evaluations']):?>
                                <td style="color:#f44336;">OJT-1 No Records | <span style="color:green">OJT-2 Completed</span></td>
                               <?php elseif($student['ojtone_rendered'] == 0 && $student['ojttwo_rendered'] < $student['ojttwo_required'] && $student['ojttwo_rendered'] != 0):?>
                                <td style="color:#f44336;">OJT-1 No Records | OJT-2 On Going</td>
                               <?php else: ?>
                                   <?php if($student['ojt_program'] == 'ojt_one'): ?>
                                <td style="color:#f44336;">OJT-1 On Going</td>
                              <?php else: ?>
                                <td style="color:#f44336;">OJT-2 On Going</td>
                              <?php endif; ?>
                              <?php endif;?>
                              <td style="text-align: center"><a href="" class="editStudent" data-studentid="<?php echo $student['id_number']?>" data-toggle="modal" data-target="#editStudentModal"><i class="fa fa-pencil"></i></a></td>
                          </tr>
                      <?php endforeach;?>
                  </tbody>
              </table>
              <div><button type="button" class="btn btn-warning" id="btnDelete"><i class="fa fa-trash"></i> Delete Selected Item(s)</button></div>
            <?php endif;?>
        </form>
    </div>
    </div>

<!-- Modal Edit Student -->
<div class="modal fade studentEditModal" id="editStudentModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modalContent">
        <div class="modal-header modalHeader">
            <h3 class="modal-title" id="lineModalLabel" style="color:white;">Edit student</h3>
        </div>
        <div class="modal-body">
              <div class="tab-pane active addIndiv" style="display: inline;"role="tabpanel">
                    <label>First Name</label>
                    <input type="text" class="form-control capitalize requiredEdit " style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="studFirstEdit" name="studFirstEdit">
                    <input type="hidden" id="hiddenStudID" name="hiddenStudID">
                    <label>Middle Initial</label>
                    <input type="text" class="form-control capitalize requiredEdit" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="studMidEdit" name="studMidEdit" maxlength="1">
                    <label>Last Name</label>
                    <input type="text" class="form-control capitalize requiredEdit" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="studLastEdit" name="studLastEdit">
                    <label>Course <small style="color:gray; font-size: 9px">(Acronym e.g. BSIT)</small></label>
                    <input type="text" class="form-control uppercase requiredEdit" style="border-radius: 5px;margin-bottom: 10px; width: 100%" id="studCourseEdit" name="studCourseEdit">
                    <label>Year</label>
                    <select id="studYearEdit" name="studYearEdit" class="form-control requiredEdit" style="border-radius: 5px;margin-bottom: 10px; width: 100%">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                    <div class="row">
                        <div class="col-lg-6">
                          <!-- <label>Required Hours</label> -->
                          <div class="form-inline">
                            <div class="row">
                              <div class="col-lg-5" style="padding-right: 0"> 
                                <label style="font-size: 10px;">Required hours</label>
                                <input type="text" class="form-control requiredEdit" style="border-radius: 5px;margin-bottom: 10px; width: 90%" id="studojtEdit" name="studojtEdit">
                              </div>
                              <div class="col-lg-6" style="padding-left: 3px">
                                <label style="font-size: 10px;">OJT Program</label>                    
                            
                                <select style="border-radius: 5px;margin-bottom: 10px; width: 90%" class="form-control requiredEdit" id="studprogramEdit" name="studprogramEdit">
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
                                <input type="text" class="form-control requiredEdit" style="border-radius: 5px;margin-bottom: 10px; width: 90%" id="sy_1Edit" name="sy_1Edit" maxlength="4" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>

                              </div>
                              <div class="col-lg-5" style="padding-left: 3px">
                                <!-- <label style="font-size: 10px;color: white">Year</label>                     -->
                                <input type="text" class="form-control requiredEdit" style="border-radius: 5px;margin-bottom: 10px; width: 90%" id="sy_2Edit" name="sy_2Edit" maxlength="4">
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                <div class="btn-group" role="group">
                     <button type="button" class="btn btn-success btn-hover-green" data-action="save" role="button" style="width: 270px;border-radius: 5px" id="saveEditStudent">Save</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"  role="button" style="width: 270px;border-radius: 5px; float: right">Cancel</button>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  var table = $('#adminDataTable').DataTable({
     "bProcessing": true,
      "order": [1, 'asc'],
      "columns": [{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false }],
  });

  $(document).on('click','.editStudent',function(e){
    e.preventDefault();
    var userID = $(this).data('studentid');
      $.ajax({  
        url: "getStudentDetails",
        type: "POST",
        data:{'username':userID},
        success:function(data){
          var user = JSON.parse(data);
          $('#hiddenStudID').val(userID);
          $('#studFirstEdit').val(user.first_name);
          $('#studMidEdit').val(user.middle_initial);
          $('#studLastEdit').val(user.last_name);
          $('#studCourseEdit').val(user.course);
          $('#studYearEdit').val(user.year);
          if(user.ojt_program == "ojt_one"){
            $('#studojtEdit').val(user.ojtone_required);
            $('#studprogramEdit').val("ojt_one");
          }else{
            $('#studojtEdit').val(user.ojttwo_required);
            $('#studprogramEdit').val("ojt_two");
          }

          var sc = user.school_year;
          var year = sc.split('-');

          $('#sy_1Edit').val(year[0]);
          $('#sy_2Edit').val(year[1]);
        }
      });
  });

  $(document).on('click','#saveEditStudent',function(e){
    var userid = $('#hiddenStudID').val();
    var fname = $('#studFirstEdit').val().trim();
    var mid = $('#studMidEdit').val().trim();
    var lname = $('#studLastEdit').val().trim();
    var course = $('#studCourseEdit').val().trim();
    var year = $('#studYearEdit').val();
    var required_hours = $('#studojtEdit').val().trim();
    var ojt_program = $('#studprogramEdit').val();
    var sy_1 = $('#sy_1Edit').val().trim();
    var sy_2 = $('#sy_2Edit').val().trim();
    var sc = sy_1+"-"+sy_2;

    if(fname == "" || mid == "" || lname == "" || course=="" || sy_1=="" || sy_2=="" || required_hours == "" || !ojt_program){
      swal('Oops...','Please fill all fields','error');
       $(".requiredEdit").each(function() {
        if ($(this).val() === "" || $(this).val() == null) {
          $(this).css('border-color', 'red');
        }else{
          $(this).css('border-color', '');
        }
      });
    }else{
      $('#saveEditStudent').html("Saving");
      $('#saveEditStudent').prop('disabled',true);
      $.ajax({
        url: "adminEditStudent",
        type: "POST",
        data:{
          'username':userid,
          'fname':fname,
          'mid':mid,
          'lname':lname,
          'course':course,
          'year':year,
          'required_hours':required_hours,
          'ojt_program':ojt_program,
          'school_year':sc,
        },
        success:function(data){
          $('#saveEditStudent').html('Save');
          $('#saveEditStudent')[0].removeAttribute("disabled");
          if($.trim(data) == "user_exists"){
            swal('Oops...','User already exists','error');return false;
          }else{
            swal({
                title: "Edit successful",
                icon: "success",
            })
            .then((proceed) => {
              if(proceed) {
                location.reload();
              }
            });
          }
        }
      });
    }
  });
</script>

<script type="text/javascript">
 $('#sy_1Edit').blur(function(){
    var curr_year = parseInt($('#sy_1Edit').val());
    var i = parseInt("1");
    if($('#sy_1Edit').val().length==4){
      $('#sy_2Edit').val(curr_year+i);
    }
  });

  $('#sy_2Edit').blur(function(){
    var curr_year = parseInt($('#sy_2Edit').val());
    var i = parseInt("1");
    if($('#sy_2Edit').val().length==4){
      $('#sy_1Edit').val(curr_year-i);
    }
  });

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
