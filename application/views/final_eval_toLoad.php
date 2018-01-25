    

    <div id="wrapper">
      <div class="container">
        <div class="row">
            <?php if(empty($evaluation)) :  ?>
              <h4 style="text-align:center;padding-top: 20px;color:gray;">No evaluation yet</h4>
           <?php else: ?>
          <div class="col l12">
            <h4 class="parts">Part I (Filled by the student trainee)</h4>
            <form id="formy2">
            <div class="row">
              <div class="col l6">
                <div class="input-field first-field">
                  <label for="#name">Name</label>
                  <input type="text" name="fname" id="fname" required class="validate" value="<?php echo $evaluation->name;?>" >
                </div>
              </div>
              <div class="col l3">
                <div class="input-field first-field"">
                  <label for="#age">Age</label>
                  <input type="text" name="fage" id="fage" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="validate" value="<?php echo $evaluation->age; ?>">
                </div>
              </div>
              <div class="col l3">
                <div class="input-field first-field"">
                  <label for="#sex">Sex</label>
                  <input type="text" name="fsex" id="fsex" required class="validate" value="<?php echo $evaluation->sex; ?>">
                </div>
              </div>
             </div>
             <div class="row">
               <div class="col l6">
                <div class="input-field">
                  <label for="#course">Course</label>
                  <input type="text" name="fcourse" id="fcourse" required class="validate" value="<?php echo $evaluation->course; ?>">
                </div>
              </div>
              <div class="col l3">
                <div class="input-field">
                  <label for="#major">Major</label>
                  <input type="text" name="fmajor" value="<?php echo $evaluation->major; ?>" id="fmajor" required class="validate">
                </div>
              </div>
             </div>
             <div class="row">
               <div class="col l6">
                <div class="input-field">
                  <label for="#school">School</label>
                  <input type="text" name="fschool" id="fschool" required class="validate" value="<?php echo $evaluation->school; ?>">
                </div>
              </div>
             </div>
             <div class="row">
               <div class="col l6">
                <div class="input-field">
                  <label for="#caddress">City Address</label>
                  <input type="text" name="fcity" id="fcity" required class="validate" value="<?php echo $evaluation->city; ?>">
                </div>
              </div>
             </div>
             <div class="row">
               <div class="col l6">
                <div class="input-field">
                  <label for="#paddress">Permanent Address</label>
                  <input type="text" name="fpermanent" required id="fpermanent" class="validate" value="<?php echo $evaluation->permanent; ?>">
                </div>
              </div>
             </div>
             <div class="row">
               <div class="col l3">
                <div class="input-field"> 
                  <label for="#training">No. of Training Required</label>
                  <input type="text" name="frequired" required id="frequired" class="validate" value="<?php echo $evaluation->required; ?>">
                </div>
              </div>
             </div>
             <h4 class="parts">Part II (Filled by the company representative)</h4>
            <div class="row">
              <div class="col l12">
                <div class="input-field first-field">
                  <label for="#company">Name of the Company</label>
                  <input type="text" name="fcompany" id="fcompany" class="validate" value="<?php echo $evaluation->company; ?>">
                </div>
              </div>
             </div>
              <div class="row">
              <div class="col l12">
                <div class="input-field">
                  <label for="#assign">Division Assigned</label>
                  <input type="text" name="fdivision" id="fdivision" value="<?php echo $evaluation->division; ?>" required class="validate">
                </div>
              </div>
             </div>
              <div class="row">
              <div class="col l12">
                <div class="input-field">
                  <label for="#fot">Field of Training</label>
                  <input type="text" name="ffield" value="<?php echo $evaluation->field; ?>" required id="ffield" class="validate">
                </div>
              </div>
             </div>
              <div class="row">
              <div class="col l7">
                <div class="input-field">
                  <label for="#company">Inclusive dates of Training: From:</label>
                  <input type="text" name="fdates" required id="fdates" class="validate" value="<?php echo $evaluation->dates_from; ?>">
                </div>
              </div>
               <div class="col l5">
                <div class="input-field">
                  <label for="#to">To:</label>
                  <input type="text" name="fdatesto" required id="fdatesto" class="validate" value="<?php echo $evaluation->dates_to; ?>">
                </div>
              </div>
             </div>
             <div class="row">
               <div class="col l4">
                <div class="input-field">
                  <label for="#training">Total Number of Hours Rendered</label>
                  <input type="text" name="ftotal" required id="ftotal" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="validate" value="<?php echo $evaluation->total_hours; ?>">
                </div>
              </div>
             </div>
             <div class="row">
               <div class="col l12">
                  <div class="row">
                    <div class="col l4">
                      <h4 class="factors">Job Factors</h4>
                    </div>
                    <div class="col l4">
                      <h4 class="factors">Rating</h4>
                    </div>

                    <div class="col l4">
                      <h4 class="factors"><h4 class="factors">Given Rate</h4></h4>

                    </div>
                  </div>
               </div>
             </div>
             <div class="row">
               <div class="col l12">
                 <div class="col l4">
                   <p class="list""><a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Thoroughness, accuracy, neatness and effectiveness">Quality of Work</a></p>
                 </div>
                 <div class="col l4">
                   <span class="rate">20%</span>
                 </div>
                 <div class="col l2 offset-l2">
                    <input type="text" name="fquality" value="<?php echo $evaluation->quality; ?>" id="fquality" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" style="height: 1rem;">
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col l12">
                 <div class="col l4">
                   <p class="list""><a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Able to complete work in allotted time">Quality of Work</a></p>
                 </div>
                 <div class="col l4">
                   <span class="rate">20%</span>
                 </div>
                 <div class="col l2 offset-l2">
                    <input type="text" name="fquality2" value="<?php echo $evaluation->quality2; ?>" id="fquality2" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" style="height: 1rem;">

                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col l12">
                 <div class="col l4">
                   <p class="list""><a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Ability to work w/ minimum amount of break supervision">Dependability, reliabilty and resoucefulness</a></p>
                 </div>
                 <div class="col l4">
                   <span class="rate">15%</span>
                 </div>
                 <div class="col l2 offset-l2">
                    <input type="text" name="fdependability" value="<?php echo $evaluation->dependability; ?>" id="fdependability" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" style="height: 1rem;">
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col l12">
                 <div class="col l4">
                   <p class="list""><a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Regularity and Punctuality in office attendance and report observation of break periods">Attendance</a></p>
                 </div>
                 <div class="col l4">
                   <span class="rate">15%</span>
                 </div>
                 <div class="col l2 offset-l2">
                    <input type="text" name="fattendance" value="<?php echo $evaluation->attendance; ?>" id="fattendance" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" style="height: 1rem;">
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col l12">
                 <div class="col l4">
                   <p class="list""><a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Works well with everyone">Cooperation</a></p>
                 </div>
                 <div class="col l4">
                   <span class="rate">10%</span>
                 </div>
                 <div class="col l2 offset-l2">
                    <input type="text" name="fcooperation" value="<?php echo $evaluation->cooperation; ?>" id="fcooperation" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' style="height: 1rem;">
                 </div>
               </div>
             </div>
              <div class="row">
               <div class="col l12">
                 <div class="col l4">
                   <p class="list""><a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Sound decisions: Ability to identify and evaluate pertinent factors">Judgement</a></p>
                 </div>
                 <div class="col l4">
                   <span class="rate">10%</span>
                 </div>
                 <div class="col l2 offset-l2">
                    <input type="text" name="fjudgement" value="<?php echo $evaluation->judgement; ?>" id="fjudgement" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" style="height: 1rem;">
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col l12">
                 <div class="col l4">
                  <p class="list""><a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Personal grooming and pleasant disposition">Personality</a></p>
                 </div>
                 <div class="col l4">
                   <span class="rate">10%</span>
                 </div>
                 <div class="col l2 offset-l2">
                    <input type="text" name="fpersonality" value="<?php echo $evaluation->personality; ?>" id="fpersonality" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" style="height: 1rem;">
                 </div>
               </div>
             </div>
             <ul class="collapsible" data-collapsible="accordion">
              <li>
                <div class="collapsible-header"><i class="fa fa-pencil" aria-hidden="true"></i>Recommendation</div>
                  <textarea name="recommend" class="materialize-textarea"><?php echo $evaluation->recommend; ?></textarea>
              </li>
             </ul>
             <p style="text-align: center;">
            
             </p>
              <input type="hidden" name="supervisor_id" value="">
            </form>
          </div>
        <?php endif; ?>
        </div>      
      </div>
    </div>

<script src="<?php echo base_url() ?>assets/js/materialize.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
            $('body').find('input, textarea').each(function(){
            $(this).prop('readonly', true);
        });
            });
      </script>