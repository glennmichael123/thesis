                  <div id="wrap-students">

                    <div class="well dashboard-list">

                      <?php if(empty($student_list)):?>
                          <p style="font-family: Roboto, sans-serif;color: black;text-align: center">No records</p>
                      <?php else:?>
                      <!-- <form action="deleteStudent" method="POST" name="formDel"> -->
                            <table id="adminDataTable" class="table table-bordered" cellspacing="0" width="100%" style="font-size: 13px;">
                                    <thead>
                                        <tr style="background-color: #f44336; color:white;">
                                            <th style="text-align: center;width: 45px"><input type="checkbox" id="checkall"></th>
                                            <th>Name</th>
                                            <th>Course & Year</th>
                                            <th>School Year</th>
                                            <th>Evaluations(OJT1)</th>
                                            <!-- <th>Evaluations(OJT2)</th> -->
                                            <th>Status</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                      <?php foreach($student_list as $student):?>
                                          <tr class="dashTable">
                                              <td style="text-align: center;width: 45px"><input type="checkbox" class="checkitem" value="<?php echo $student['id_number']?>" name="usernames[]"></td>
                                              <td><a href="studentinfo/<?php echo $student['id_number']?>"><?php echo $student['first_name'] . " " . $student['last_name']?></a></td>
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
                                              <!-- <td>Midterm | Final</td> -->
                                              <?php if ($student['ojtone_rendered'] >= $student['ojtone_required'] && $student['ojtone_current_evaluations'] == 2):?>
                                                  <td style="color:green;">OJT-1 Completed</td>
                                                <?php else :?>
                                                  <td style="color:#f44336;">OJT-1 On going</td>
                                              <?php endif;?>
                                          </tr>
                                      <?php endforeach;?>
                                  </tbody>
                              </table>
                              <div><button type="button" class="btn btn-warning" id="btnDelete"><i class="fa fa-trash"></i> Delete Selected Item(s)</button> </div>
                            <?php endif;?>
                        <!-- </form> -->
                    </div><!-- end of well -->


                    <script type="text/javascript">
                      var table = $('#adminDataTable').DataTable({
       "bProcessing": true,
        "order": [1, 'asc'],
        //"columns": [{"targets": 0, "orderable": false },null,null,null,null,null],
        "columns": [{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false }],
      });
                    </script>


                    </div>