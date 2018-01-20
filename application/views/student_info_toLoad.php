
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="well top">
                            <div class="row">
                    <div class="col-lg-4">

                       <div class="dashboard-title hours">
                            <span>Number of hours rendered</span>
                            <div id="hoursProgress">

                            </div>
                           <?php if($rendered == 0 && $total == 0): ?>
                              <script type="text/javascript">
                                $(document).ready(function() {
                                    
                            
                                    // progressbar.js@1.0.0 version is used
                                    // Docs: http://progressbarjs.readthedocs.org/en/1.0.0/
                                    var bar = new ProgressBar.Circle(hoursProgress, {
                                        color: '#A55D35',
                                         text: {
                                            value: '0/0',
                                        },
                                        trailColor: '#eee',
                                        trailWidth: 1,
                                        duration: 1400,
                                        easing: 'easeInOut',
                                        strokeWidth: 6,
                                        text: {
                                            value: <?php echo $rendered?> + "/" + <?php echo $total?> + " " + 'hours',
                                        },
                                        from: {
                                            color: '#EECD86',
                                            a: 0
                                        },
                                        to: {
                                            color: '#B95835',
                                            a: 1
                                        },
                                        // Set default step function for all animate calls
                                        step: function(state, circle) {
                                            circle.path.setAttribute('stroke', state.color);
                                        }
                                    });
                                    bar.animate(<?php echo 0/1?>); // Number from 0.0 to 1.0
                                });
                            </script>
                            <?php else: ?>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    
                            
                                    // progressbar.js@1.0.0 version is used
                                    // Docs: http://progressbarjs.readthedocs.org/en/1.0.0/
                                    var bar = new ProgressBar.Circle(hoursProgress, {
                                        color: '#A55D35',
                                        trailColor: '#eee',
                                        trailWidth: 1,
                                        duration: 1400,
                                        easing: 'easeInOut',
                                        strokeWidth: 6,
                                        text: {
                                            value: <?php echo $rendered?> + "/" + <?php echo $total?> + " " + 'hours',
                                        },
                                        from: {
                                            color: '#EECD86',
                                            a: 0
                                        },
                                        to: {
                                            color: '#B95835',
                                            a: 1
                                        },
                                        // Set default step function for all animate calls
                                        step: function(state, circle) {
                                            circle.path.setAttribute('stroke', state.color);
                                        }
                                    });
                                     <?php if($rendered > $total): ?>
                                     bar.animate(1.0);
                                    <?php else: ?>
                                    bar.animate(<?php echo $rendered/$total?>); // Number from 0.0 to 1.0
                                    <?php endif; ?>  // Number from 0.0 to 1.0
                                });
                            </script>
                          <?php endif; ?>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="dashboard-title evaluations">
                            <span>Evaluations</span>
                            <div id="progressEvaluations">

                            </div>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    // progressbar.js@1.0.0 version is used
                                    // Docs: http://progressbarjs.readthedocs.org/en/1.0.0/
                                    var bar = new ProgressBar.Circle(progressEvaluations, {
                                        strokeWidth: 6,
                                        easing: 'easeInOut',
                                        duration: 1400,
                                        text: {
                                            value: <?php echo $current_evaluations?> + "/" + <?php echo $all_evaluations?> + " " + 'evaluations',
                                        },
                                        from: {
                                            color: '#EECD86',
                                            a: 0
                                        },
                                        to: {
                                            color: '#B95835',
                                            a: 1
                                        },
                                        // Set default step function for all animate calls
                                        step: function(state, circle) {
                                            circle.path.setAttribute('stroke', state.color);
                                        },
                                        color: '#A55D35',
                                        trailColor: '#eee',
                                        trailWidth: 1,
                                        svgStyle: null
                                    });
                                    bar.animate(<?php echo $current_evaluations/$all_evaluations?>); // Number from 0.0 to 1.0
                                });
                            </script>

                        </div>
                    </div>

                    <div class="col-lg-4">
                         <div class="dashboard-title logs">
                            <span>Verified Logs</span>
                            <div id="verifiedLogs">
                            </div>
                            <?php if(empty($verified) && empty($totalLogs)):?>
                                <script type="text/javascript">
                                $(document).ready(function() {
                                    var bar = new ProgressBar.Circle(verifiedLogs, {
                                        strokeWidth: 6,
                                        easing: 'easeInOut',
                                        duration: 1400,
                                        text: {
                                            value: '0/0',
                                        },
                                        from: {
                                            color: '#EECD86',
                                            a: 0
                                        },
                                        to: {
                                            color: '#B95835',
                                            a: 1
                                        },
                                        // Set default step function for all animate calls
                                        step: function(state, circle) {
                                            circle.path.setAttribute('stroke', state.color);
                                        },
                                        color: '#A55D35',
                                        trailColor: '#eee',
                                        trailWidth: 1,
                                        svgStyle: null
                                    });
                                    bar.animate(<?php echo 0/1?>); // Number from 0.0 to 1.0
                                });
                            </script>
                            <?php else:?>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    var bar = new ProgressBar.Circle(verifiedLogs, {
                                        strokeWidth: 6,
                                        easing: 'easeInOut',
                                        duration: 1400,
                                        text: {
                                            value: <?php echo $verified?> + "/" + <?php echo $totalLogs;?> + " " + 'logs',
                                        },
                                        from: {
                                            color: '#EECD86',
                                            a: 0
                                        },
                                        to: {
                                            color: '#B95835',
                                            a: 1
                                        },
                                        // Set default step function for all animate calls
                                        step: function(state, circle) {
                                            circle.path.setAttribute('stroke', state.color);
                                        },
                                        color: '#A55D35',
                                        trailColor: '#eee',
                                        trailWidth: 1,
                                        svgStyle: null
                                    }); 
                                    bar.animate(<?php echo $verified/$totalLogs?>); // Number from 0.0 to 1.0
                                });
                            </script>
                        <?php endif; ?>

                        </div>
                    </div>
                </div>
                        </div>
                    </div>
                </div>
                <?php if(empty($personalDetails)): ?>
                    <h3 style="color:#6a6e70">This student has not registered yet</h3>
                <?php else: ?>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="well">
                            <div class="profile-container" style="text-align: center;">
                                
                                    <div class="profile-image">
                                        
                                        <?php if($personalDetails[0]['image_id'] == '<i class="fa fa-user-circle fa-5x" style="font-size: 150px;" aria-hidden="true"></i>'):?>
                                            <?php echo $personalDetails[0]['image_id'];?>
                                             <img id="img_change" class="img-circle" src="" style="display: none;">
                                        <?php else:?>
                                            <img id="img_change" src="<?php echo base_url().$personalDetails[0]['image_id']?>" class="img-circle">
                                            
                                        <?php endif; ?>
                                       
                                    </div>
                                   
                                    <div class="profile-name" style="margin-top: 10px;">
                                        <div class="label label-default"><?php echo $personalDetails[0]['first_name']." ".$personalDetails[0]['middle_initial']." ".$personalDetails[0]['last_name'];?>
                                        </div>
                                    </div>
                                   
                            </div>
                        </div>    
                        <div class="well" style="color: #000; padding-top: 0; overflow: hidden;">
                        <div class="row">
                             <div class="col-lg-12" style="text-align: center;">
                                <h4>Personal Information</h4>
                             </div>
                         </div>
                         <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Course</label>
                                 </div>
                                 <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo $personalDetails[0]['course']?></span>
                                 </div>
                            </div>
                            <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">College</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo $personalDetails[0]['college']?></span>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Year</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo $personalDetails[0]['year']?></span>
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Phone or Landline</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo $personalDetails[0]['contact_number'] ?></span>
                                 </div>
                             </div>

                              <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Present Address</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo $personalDetails[0]['present_address'] ?></span>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Permanent Address</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo $personalDetails[0]['permanent_address'] ?></span>
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Date of Birth</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo date('F d, Y',strtotime($personalDetails[0]['date_of_birth']))?></span>
                                 </div>
                             </div>

                               <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Email Address</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo $personalDetails[0]['email_address'] ?></span>
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Status</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo $personalDetails[0]['marital_status']?></span>
                                 </div>
                             </div>


                             <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Religion</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo $personalDetails[0]['religion'] ?></span>
                                 </div>
                             </div>


                             <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Citizenship</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo $personalDetails[0]['citizenship'] ?></span>
                                 </div>
                             </div>


                             <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Age</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo '12' ?></span>
                                 </div>
                             </div>


                             <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Blood Type</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo $personalDetails[0]['blood_type'] ?></span>
                                 </div>
                             </div>
                              <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Height</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo $personalDetails[0]['height'] ?></span>
                                 </div>
                             </div>
                              <div class="row">
                                 <div class="col-lg-6">
                                     <label style="font-size: 13px;">Weight</label>
                                 </div>
                                  <div class="col-lg-6">
                                     <span style="font-size: 13px;"><?php echo $personalDetails[0]['weight'] ?></span>
                                 </div>
                             </div>
                             
                         </div>
                       <div class="well" style="color: #000000 !important;">
                        <h4 style="text-align: center; margin: 0 !important; padding: 0 !important;">Family Details</h4>
                           <div class="row" style="margin-top: 10px;">

                               <div class="col-lg-6"><label style="font-size: 13px">Father's Name</label></div>
                               <div class="col-lg-6"><span style="font-size: 13px;"><?php echo $familydetails->fathers_name; ?></span></div>
                           </div>
                           <div class="row">
                               <div class="col-lg-6"><label>Father's Occupation</label></div>
                               <div class="col-lg-6"><span style="font-size: 13px;"><?php echo $familydetails->fathers_occupation; ?></span></div>
                           </div>

                            <div class="row">
                               <div class="col-lg-6"><label>Mother's Name</label></div>
                               <div class="col-lg-6"><span style="font-size: 13px;"><?php echo $familydetails->mothers_name; ?></span></div>
                           </div>

                           <div class="row">
                               <div class="col-lg-6"><label>Mother's Occupation</label></div>
                               <div class="col-lg-6"><span style="font-size: 13px;"><?php echo $familydetails->mothers_occupation; ?></span></div>
                           </div>

                            <div class="row">
                               <div class="col-lg-6"><label>Parent's Address</label></div>
                               <div class="col-lg-6"><span style="font-size: 13px;"><?php echo $familydetails->parents_address; ?></span></div>
                           </div>

                           <div class="row">
                               <div class="col-lg-6"><label>Contact Number</label></div>
                               <div class="col-lg-6"><span style="font-size: 13px;"><?php echo $familydetails->contact_number; ?></span></div>
                           </div>
                       </div>

                       <div class="well" style="color: #000000 !important;">
                        <h4 style="text-align: center; margin: 0 !important; padding: 0 !important;">Emergency Details</h4>
                           <div class="row" style="margin-top: 10px;">

                               <div class="col-lg-6"><label style="font-size: 13px">Contact Name</label></div>
                               <div class="col-lg-6"><span style="font-size: 13px;"><?php echo $emergency->name; ?></span></div>
                           </div>
                           <div class="row">
                               <div class="col-lg-6"><label>Relationship</label></div>
                               <div class="col-lg-6"><span style="font-size: 13px;"><?php echo $emergency->relationship; ?></span></div>
                           </div>

                            <div class="row">
                               <div class="col-lg-6"><label>Contact Number</label></div>
                               <div class="col-lg-6"><span style="font-size: 13px;"><?php echo $emergency->contact_number; ?></span></div>
                           </div>

                           <div class="row">
                               <div class="col-lg-6"><label>Contact Address</label></div>
                               <div class="col-lg-6"><span style="font-size: 13px;"><?php echo $emergency->address; ?></span></div>
                           </div>

                          
                       </div>

                        <div class="well" style="color: #000000 !important; word-wrap: break-word;">
                        <h4 style="text-align: center; margin: 0 !important; padding: 0 !important;">Company Information</h4>
                        <?php if(empty($company)): ?>
                          <p style="text-align:center;font-size: 15px;padding-top: 20px;color: gray;">Student has no company yet</p>
                        <?php else: ?>
                           <div class="row" style="margin-top: 10px;">

                               <div class="col-lg-6"><label style="font-size: 13px">Company Name: </label></div>

                               <div class="col-lg-6"><span style="font-size: 13px;"><?php echo $company->company_name; ?></span></div>
                           </div>
                           <div class="row">
                               <div class="col-lg-6"><label>Supervisor Name:</label></div>
                               <div class="col-lg-6"><span style="font-size: 13px;"><?php echo empty($supervisorName->name)? "Not assigned" : $supervisorName->name;?></span></div>
                           </div>
                          <div class="row">
                               <div class="col-lg-6"><label>Company Address</label></div>
                               <div class="col-lg-6"><span style="font-size: 13px;"><?php echo $company->company_address; ?></span></div>
                           </div>

                            <div class="row">
                               <div class="col-lg-6"><label>Contact Number</label></div>
                               <div class="col-lg-6"><span style="font-size: 13px;"><?php echo $company->contact_number; ?></span></div>
                           </div>

                           <div class="row">
                               <div class="col-lg-6"><label>Fax Number</label></div>
                               <div class="col-lg-6"><span style="font-size: 13px;"><?php echo $company->fax_number; ?></span></div>
                           </div>  

                            <div class="row">
                               <div class="col-lg-6"><label>Product Lines</label></div>
                               <div class="col-lg-6"><span style="font-size: 13px;"><?php echo $company->product_lines; ?></span></div>
                           </div>

                            <div class="row">
                               <div class="col-lg-6"><label>Company Classification</label></div>
                               <div class="col-lg-6"><span style="font-size: 13px;"><?php echo $company->company_classification; ?></span></div>
                           </div>

                             <div class="row">
                               <div class="col-lg-6"><label>Number of Employees</label></div>
                               <div class="col-lg-6"><span style="font-size: 13px;"><?php echo $company->number_of_employees; ?></span></div>
                           </div>

                          
                       </div>
                     <?php endif; ?>
                    </div>
                    <div class="col-lg-8">
                         <?php foreach($logs_list as $log):?>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="well" style="padding-bottom: 0; padding-top: 5px; color:#000;">
                                    <span class="user-name" style="font-size: 15px; color: #000;"><?php echo $user_data[0]['first_name'] . " " . $user_data[0]['last_name']?></span>

                                    <hr style="margin-bottom: 0; margin-top: 5px;">

                                    <form method="post">
                                        <div class="row">
                                            <div class="logs-lists">
                                                <span class="show-more-info" style="float: right; cursor: pointer; font-size: 12px; text-decoration: underline; margin-right: 20px;
                                                ">Show more</i></span>

                                                 <span class="show-less-info" style="float: right; display: none; margin-right: 20px; cursor: pointer; text-decoration: underline; font-size: 12px;">Show less</i></span>
                                                <div class="col-lg-6">

                                                    <div class="form-group show-more-right" style="display: none;">
                                                        <label>Date</label>
                                                        <input type="text" class="list-logs date_listed" name="log_list_date" id="log_list_date" value="<?php echo $log['date']?>" readonly>
                                                        <label>Division</label>
                                                        <input type="text" class="list-logs division_listed" name="log_list_division" id="log_list_division" value="<?php echo $log['division']?>" readonly>
                                                        <label>Deparment/Area</label>
                                                        <input type="text" class="list-logs department_listed" name="log_lists_department" value="<?php echo $log['department']?>" id="log_lists_department" readonly>
                                                        <label>Designation</label>
                                                        <input type="text" class="list-logs designation_listed" value="<?php echo $log['designation']?>" name="log_lists_designation" id="log_lists_designation" readonly>
                                                    </div>
                                                    <label>Activity</label>
                                                      
                                                </div>

                                                   
                                                     

                                                <div class="col-lg-6">
                                                    <div class="form-group show-more-left" style="display: none;">
                                                        <label>Time In</label>
                                                        <input type="time" class="list-logs time_in_listed" name="log_lists_time_in" value="<?php echo $log['time_in']?>" id="log_lists_time_in" readonly>
                                                        <label>Time Out</label>
                                                        <input type="time" class="list-logs time_out_listed" name="log_lists_time_out" value="<?php echo $log['time_out']?>" id="log_lists_time_out" readonly>
                                                        <label>Hours Rendered</label>
                                                        <input type="text" class="list-logs hours_listed" name="log_lists_hours_rendered" id="log_lists_hours_rendered" value="<?php echo $log['hours_rendered']?>" readonly>

                                                    </div>

                                                   
                                                  
                                                </div>
                                                   
                                                 <textarea spellcheck="false" class="list-logs activity_listed" name="log_lists_activity" id="log_lists_activity" placeholder="Write your log here" readonly><?php echo $log['log_content']?></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="save-edit" style="display: none;">
                                            <button type="button" data-log-id="<?php echo $log['id']?>" class="save-edit-log btn btn-success">Save</button>
                                            <button type="button" class="cancel-edit btn btn-danger" class="btn btn-danger">Cancel</button>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                    <hr style="margin-bottom: 0; margin-top: 0;">
                                                    <?php if($log['verified']):?>
                                                        <span style="color:green; font-size: 11px; float: right; margin-top: 15px;"> Verified  <i style="color: green;" class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                    <?php else:?>
                                                     <span style="font-size: 11px; float: right; margin-top: 15px;"> Pending  <i class="fa fa-circle-thin" aria-hidden="true"></i></span>
                                                    <?php endif;?>
                                                    <?php if(in_array($log['id'], array_column($comments, 'log_id'))):?>  
                                                         <label >Comments</label>
                                                         <?php endif;?>


                                                    <?php foreach ($comments as $comment):?>
                                                    <?php if($log['id'] == $comment['log_id']):?>

                                                        <!-- <div class="well" style="box-shadow: none; border: none; background: #f7f7f7; padding: 10px; margin-bottom: 10px;"> -->
                                                         <div class="comments-list" style="font-size: 12px; margin-bottom: 10px; color: #000;">
                                                              <b>Supervisor</b> <?php echo $comment['content'];?>
                                                          </div>
                                                        
                                                    <?php endif;?>
                                              
                                                    <?php endforeach;?>

                                                   <?php if(!in_array($log['id'], array_column($comments, 'log_id'))):?>  
                                                        
                                                     <label>Comments</label>
                                                        <span style="font-size: 11px; color:#000;">No comments</span>
                                                        
                                                   <?php endif;?>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                         <p><?php echo $links; ?></p>
                    </div>
                </div>
            </div>         
    <?php endif; ?>