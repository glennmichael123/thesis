<div id="wrap-log-section">
  <?php $i=0; ?>
<?php foreach($traineesLog as $log):?>
                        <div class="row row-logs"  style="color:#000;">
                       
                             <div class="col-lg-12" >
                                <div class="well" style="background: #fff; padding-bottom: 0; padding-top: 10px">
                                    <span class="user-name"><a href="studentdashboard/<?php echo $log['id_number'];?>">



                                        <?php if($log['user_image'] == '<i class="fa fa-user-circle pull-right" style="font-size: 40px; margin-top: -5px;" aria-hidden="true"></i>'):?>

                                            <i class="fa fa-user-circle"></i>
                                        <?php else: ?>
                                            <img src="<?php echo base_url().$log['user_image']?>" style="width: 25px; height: 25px; border-radius: 100%;" >
                                        <?php endif; ?>
                                        <?php echo $log['first_name'] . " " .$log['last_name']?>



                                    </span></a>
                                  
                                    <hr style="margin-top: 0; margin-bottom: 0">

                                    <form method="post">
                                        <div class="row">
                                            <div class="logs-lists">
                                                    <span style="position: absolute; font-size: 12px; top:32px; right: 38px; z-index: 999; padding-top: 10px; text-decoration: underline; cursor: pointer;" class="show-more">Show more</span>
                                                    <span style="position: absolute; font-size: 12px; top:32px; right: 38px; z-index: 999; padding-top: 10px; text-decoration: underline; cursor: pointer; display: none;" class="show-less">Show less</span>
                                                <div class="col-lg-6 left-side" style="display: none;">

                                                    <div class="form-group">
                                                        <label>Date</label>
                                                        <input type="text" class="list-logs" name="log_list_date" id="log_list_date" value="<?php echo $log['date'];?>" readonly>
                                                        <label>Division</label>
                                                        <input type="text" class="list-logs" name="log_list_division" id="log_list_division" value="<?php echo $log['division']?>" readonly>
                                                        <label>Deparment/Area</label>
                                                        <input type="text" class="list-logs" name="log_lists_department" value="<?php echo $log['department']?>" id="log_lists_department" readonly>
                                                        <label>Designation</label>
                                                        <input type="text" class="list-logs" value="<?php echo $log['designation']?>" name="    log_lists_designation" id="log_lists_designation" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 right-side" style="display: none;">
                                                    <div class="form-group">
                                                        <label>Time In</label>
                                                        <input type="time" class="list-logs" name="log_lists_time_in" value="<?php echo $log['time_in']?>" id="log_lists_time_in" readonly>
                                                        <label>Time Out</label>
                                                        <input type="time" class="list-logs" name="log_lists_time_out" value="<?php echo $log['time_out']?>" id="log_lists_time_out" readonly>
                                                        <label>Hours Rendered</label>
                                                        <input type="text" class="list-logs" name="log_lists_hours_rendered" id="log_lists_hours_rendered" value="<?php echo $log['hours_rendered']?>" readonly>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                            <label style="font-size: 11px;">Activity</label> 
                                            <textarea class="list-logs log-activity" name="log_lists_activity" id="log_lists_activity" placeholder="Write your log here" readonly><?php echo $log['log_content']?></textarea>
                                            <?php if($log['verified']):?>
                                            <span style="color:green; font-size: 11px; position: absolute; left: 690px; margin-top: -20px; "> Verified  <i style="color: green;" class="fa fa-check-circle" aria-hidden="true"></i></span>
                                            <?php else:?>
                                                 <span class="pending-log" style="color:black; font-size: 11px; position: absolute; margin-top: -20px; left: 690px;"> Pending  <i style="color: green;" class="fa fa-circle-thin" aria-hidden="true"></i></span>
                                                 <?php endif;?>


                                        
                                      
                                       
                                            
                                       
                                        
                                        <hr style="margin-bottom: 0; margin-top: 0;">

                                     <div class="row" style="padding-top: 5px; padding-bottom: 5px;">
                                        <div class="col-lg-2">
                                            <?php if($log['verified']):?>
                                                <a href="#" data-log-id="<?php echo $log['id']?>" style="color: #318ACE" class="evaluator-option verify-btn-verified"><i class="fa fa-check" aria-hidden="true"></i>Verified</a>
                                            <?php else:?>
                                                 <a href="#" data-log-id="<?php echo $log['id']?>" class="evaluator-option verify-btn"><i class="fa fa-check" aria-hidden="true"></i>Verify</a>
                                            <?php endif;?>
                                                
                                                 
                                        </div>
                                        <div class="col-lg-3">
                                            <a href="#" class="evaluator-option comment-btn"><i class="fa fa-comment" aria-hidden="true"></i>Comment</a>
                                        </div>
                                     </div>

                                

                                
                                     <div class="wrap-comments" id="wrap-comment-section<?php echo $log['id'];?>">
                                     <div class="row display-comments">
                                        
                                            <div class="col-lg-12"> 

                                                <div id="display_comments"> 
                                                    <?php foreach ($comments as $comment):?>
                                                    <?php if($log['id'] == $comment['log_id']):?>
                                                        <!-- <div class="well" style="box-shadow: none; border: none; background: #f7f7f7; padding: 10px; margin-bottom: 10px;"> -->
                                                         <div class="comments-list" style="font-size: 12px; margin-bottom: 10px;">
                                                              <b style="float: left; margin-right: 5px;"> Supervisor </b> <span class="actual-comment"><?php echo $comment['content'];?> </span>

                                                              <textarea data-supervisor-id="<?php echo $this->session->userdata['id_number'] ?>" 
                                                            data-comment-id="<?php echo $comment['id'] ?>" id="comment-textarea" autofocus class="to-edit-comment" name=""><?php echo $comment['content'];?></textarea> <span class="guide-comment" style="font-size:10px; display: none;">Press esc to cancel</span>
                                                                    <div class="dropdown" style="float: right; width:20px;">
                                                                            <a href="#" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                                                <i style="color: #000000; font-size: 15px;" class="fa fa-caret-down"></i>
                                                                            </a>

                                                                            <ul class="dropdown-menu" style="width: 180px; padding-bottom: 0px; padding-top: 0px; font-size: 11px; margin-left: -149px; margin-top: 4px;" aria-labelledby="dropdownMenu2">
                                                                                <li><a href="#"  class="edit-comment" style="color: #000000;">Edit <i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                                                                <li role="separator" class="divider" style="margin: 0;"> </li>
                                                                                <li><a href="#" class="delete-comment cd-popup-trigger" data-comment-id="<?php echo $comment['id']?>" style="color: #000000;">Delete <i class="fa fa-trash"></i></a></li>
                                                                            </ul>

                                                                        </div>
                                                          </div>
                                                        
                                                    <?php endif;?>
                                                      <?php endforeach;?>
                                                      </div>    
                                            </div>
                                         
                                     </div>

                                           
                                       
                                       
                                        
                                  
                                    <div class="row">

                                        
                                       <div class="comment-section" style="display: none;"> 
                                            <div class="col-lg-12">
                                                <hr style="margin-top: 0; margin-bottom: 5px;">
                                                <textarea style="resize: none;" class="form-control comment-content" data-log-id="<?php echo $log['id']?>" placeholder="Write your comment"></textarea>
                                                <!-- <button type="button" style="float: right; margin-top: 5px; margin-bottom: 5px; padding: 2px 5px 2px 5px;" class="btn btn-primary submit-comment" data-log-id="<?php echo $log['id']?>">Post</button> -->
                                            </div>
                                        </div>
                                        
                                     </div>
                                        </div>
                                    </form>
                                   
                                </div>
                                  
                                </div>
                                 


                            </div>


                            <?php $i++; ?>
                        <?php endforeach;?>
                      

                  
                    </div>
          </div>