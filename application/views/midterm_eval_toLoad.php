 <div class="page-wrap">
        <div class="content">
            <div class="container">
                <div class="row">
 <form method="post" id="formy"  name="mid_ev">
                    <div class="topper">
                        <div class="col-lg-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                        <h3 style="text-align: center;">Rating</h3>
                                </div>
                                <div class="panel-body">
                                    <ul class="list-unstyled">
                                        <li>5 - Outsanding</li>
                                        <li>4 - Very Good</li>
                                        <li>3 - Satisfactory</li>
                                        <li>2 - Unsatisfactory</li>
                                        <li>1 - Poor</li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <p style="text-align: center;">
                                <label style="margin:0; padding: 0;">Trainee Evaluation</label>
                            </p>
                            <div class="well">
                              <?php if(empty($evaluation)):?>
                                <p style="font-size: 15px;">No evaluation yet</p>
                              <?php else: ?>
                                <label>WORK ATTITUDE(<div class="badge">40</div> points)</label>
                                <ol>
                                    
                                    <div class="row">
                                        <div class="col-lg-6">
                                            
                                                <li>Enthusiasm / Eagerness to Learn</li>
                                                
                                            
                                          
                                                <li>Cooperation and Willingness</li>
                                           
                                            
                                           
                                                <li>Adaptability and Sociability</li>
                                            
                                           
                                          
                                                <li>Industriousness and Initiative</li>
                                          
                                           
                                           
                                                <li>Sense of Responsibility</li>
                                           
                                            
                                                <li>Attentiveness / Attention</li>
                                        
                                            
                                                <li>Personal Grooming</li>
                                          
                                                <li>Attendance</li>
                                            
                                        </div>

                                    <div class="col-lg-6">
                                       
                                         
                                         <fieldset style="float: right;">
                                             <input tabindex="1" maxlength="1" value="<?php echo $evaluation->enthusiasm ?>" type="text" name="enthusiasm"  onkeyup="scoreTotal()" id="enthusiasm" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' readonly>

                                            <a role="button" class="clicky" data-container="body" data-toggle="popover" data-placement="top" title="Enthusiasm / Eagerness to Learn" data-content="Confident to learn new tasks / assignments." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                             <br>
                                             <input tabindex="2"  maxlength="1" value="<?php echo $evaluation->cooperation ?>" type="text" name="cooperation" onkeyup="scoreTotal()" id="cooperation" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' readonly>  

                                             <a role="button" class="clicky"  data-container="body" data-toggle="popover" data-placement="top" title="Cooperation and Willingness" data-content="Readiness to accept and carry out instructions and assignments; works well with others; shows support and concerns for co-workers." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a><br>
                                             <input tabindex="3" maxlength="1" value="<?php echo $evaluation->adaptability ?>" type="text" name="adaptability" onkeyup="scoreTotal()" id="adaptability" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' readonly>
                                                   <a role="button" class="clicky" data-container="body" data-toggle="popover" data-placement="top" title="Adaptability and Sociability" data-content="Ability to adjust to a new environment and be at ease with others; ability to deal with people of different levels/ positions; amiable and friendly with others and knows how to respect authority." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                             </i><br>
                                             <input tabindex="4" maxlength="1" value="<?php echo $evaluation->industriousness ?>" type="text" name="industriousness" onkeyup="scoreTotal()" id="industriousness" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' readonly> 
                                             <a role="button" class="clicky" data-container="body" data-toggle="popover" data-placement="top" title="Industriousness and Initiative" data-content="Constant worker / keeps himself busy with initiative; does not take unauthorized breaks; initiates action when the situation calls for it." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                             <br>
                                             <input tabindex="5" maxlength="1" value="<?php echo $evaluation->responsibility ?>" type="text" name="responsibility" onkeyup="scoreTotal()" id="responsibility" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' readonly>

                                               <a role="button" class="clicky" data-container="body" data-toggle="popover" data-placement="top" title="Sense of Responsibility" data-content="Applies sound judgement / decision making." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a><br>
                                             <input tabindex="6"  maxlength="1" value="<?php echo $evaluation->attentiveness ?>" type="text" name="attentiveness" class="score" onkeyup="scoreTotal()" id="attentiveness" onkeypress='return event.charCode >= 48 && event.charCode <= 57' readonly>
                                              <a role="button" class="clicky" data-container="body" data-toggle="popover" data-placement="top" title="Attentiveness / Attention" data-content="Focuses on his/her work / gives full attention to what he/she is doing; ability to handle unexpected problems; carry-out instructions / assignments at once." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a><br>
                                             <input tabindex="7" maxlength="1" value="<?php echo $evaluation->grooming ?>" type="text" name="grooming" onkeyup="scoreTotal()" id="grooming" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' readonly>
                                             <a role="button" class="clicky" data-container="body" data-toggle="popover" data-placement="top" title="Personal Grooming" data-content="Maintains proper way of dressing marked by proper conduct, tidiness, and well-grooming; lively and well-spirited during at work and at rest." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                             
                                             <br>
                                             <input tabindex="8" maxlength="1" type="text" value="<?php echo $evaluation->attendance ?>" name="attendance" onkeyup="scoreTotal()" id="attendance" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' readonly>                           
                                                <a role="button" class="clicky" data-container="body" data-toggle="popover" data-placement="top" title="Attendance" data-content="Reports to work regurlarly and on time and uses time wisely and productively." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a><br>
                                        </fieldset>
                                    </div>
                                 
                                    </div>
                                   
                                       
                                    
                                </ol>
                                <label>WORK PERFORMANCE (30 x 2 =
                                    <div class="badge">60</div> points)</label>

                                <ol>
                                    
                                    <div class="row">
                                        <div class="col-lg-6">
                                                <li>Quality of Work</li>
                                               
                                                <li>Quantity of Work</li>
                                             
                                                <li>Dependability</li>
                                              
                                                <li>Comprehension</li>
                                                <li>Safety Consciousness</li>
                                               
                                                <li>Waste Consciousness</li>
                                         </div>
                                         <div class="col-lg-6">
                                            <fieldset style="float: right;">
                                                <input tabindex="9" maxlength="1" type="text" value="<?php echo $evaluation->quality ?>" name="quality" onkeyup="scoreTotal()" id="quality" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' readonly>
                                                    <a role="button" class="clicky" data-container="body" data-toggle="popover" data-evaluation-type="a_two"data-placement="top" title="Quality of Work" data-content="Thoroughness, accuracy, neatness and effectiveness of output, meets readonly standards and even exceeds expected results." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                                <input tabindex="10" maxlength="1" type="text" value="<?php echo $evaluation->quantity ?>" name="quantity" onkeyup="scoreTotal()" id="quantity" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' readonly>
                                                      <a role="button" class="clicky" data-container="body" data-toggle="popover" data-evaluation-type="a_two"data-placement="top" title="Quantity of Work" data-content="Able to complete work within the alloted time, finishes work on schedule and maximizes use of tme." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                                <input tabindex="11" maxlength="1" type="text" value="<?php echo $evaluation->dependability ?>" name="dependability" onkeyup="scoreTotal()" id="dependability" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' readonly>
                                                      <a role="button" class="clicky" data-container="body" data-toggle="popover" data-evaluation-type="a_two"data-placement="top" title="Dependability" data-content="Ability to work with minimum supervision, does not need constant follow-up." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                                <input tabindex="12" maxlength="1" type="text" value="<?php echo $evaluation->comprehension ?>" name="comprehension" onkeyup="scoreTotal()" id="comprehension" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' readonly>
                                                      <a role="button" class="clicky" data-container="body" data-toggle="popover" data-evaluation-type="a_two"data-placement="top" title="Comprehension" data-content="Understand instructions at once with almost no clarification." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                                <input tabindex="13" maxlength="1" type="text" value="<?php echo $evaluation->safety ?>" name="safety" onkeyup="scoreTotal()" id="safety" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' readonly>
                                                  <a role="button" class="clicky" data-container="body" data-toggle="popover" data-evaluation-type="a_two"data-placement="top" title="Safety Consciousness" data-content="Carefully takes precaution and observe visible hazards; follow safety rules and reads instructions prior to working." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                                <input tabindex="14" maxlength="1" type="text" value="<?php echo $evaluation->waste ?>" name="waste" onkeyup="scoreTotal()" id="waste" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' readonly>
                                                     <a role="button" class="clicky" data-container="body" data-toggle="popover" data-evaluation-type="a_two"data-placement="top" title="Waste Consciousness" data-content="Shows concerns of company facilities; handles tools and equipment carefully; keeps equipment, tools, materials and work area clean and well-kept; proper use and disposal of materials." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                            </fieldset>
                                         </div>
                                    </div>
                                   
                                </ol>
                                <div class="row">
                                    <div class="col-lg-6">
                                     <label class="pointy">OVERALL TOTAL</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset style="float: right;">
                                            <input type="text" name="total" value="<?php echo $evaluation->total ?>" class="score" id="total" style="margin-right: 25px; margin-top: 20px;" readonly> 
                                         </fieldset>
                                    </div>
                                </div>
                                <label for="remark" style="margin:0; padding: 0;" class="pointy">REMARKS</label>
                              
                                    <textarea tabindex="15" name="remarks" id="remark" class="form-control" readonly><?php echo $evaluation->remarks ?></textarea>
                                    <div class="allow">
                                    </div>
                            </div>
                          <?php endif; ?>
                        </div>
              
                    </div>
                </div>
            </div>
        </div>

      </form>
      <script type="text/javascript">
        $(function(){
          $('[data-toggle="popover"]').popover();
        });
      </script>