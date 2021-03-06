<!DOCTYPE html>
  <html>
    <head>

      <script src="<?php echo base_url() ?>assets/js/swal.js"></script>
      <!-- Optional theme -->
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/materialize.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
      <!-- Latest compiled and minified JavaScript -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous"> -->
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- Compiled and minified CSS -->
      
       <!-- Compiled and minified JavaScript -->
       
    </head>
    <style type="text/css">
      h1.heading{
        text-transform: uppercase;
        font-size: 2.5em;
        font-weight: bold;
        text-align: center;
        color: white;
      }
      h3.heading{
        text-align: center;
        font-weight: bold;
        text-transform: uppercase;
        margin-top: -15px;
        font-size: 1.5em;
        color: white;
      }
      header{
        background-color: #ca2e32;
        height: 150px;
        margin-top: -20px;
        padding: 20px;
        box-shadow: 5px 5px 5px gray;
      }
      #wrapper{
        margin-top: 10px;
      }
      h4.parts{
        background-color: #ffba00;
        font-size: 1.3em;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 5px 5px 5px gray;
      }
      .first-field{
        margin-top: 25px;
      }
      h4.factors{
        text-align: center;
        text-transform: uppercase;
      }
      p.list{
        text-transform: uppercase;
        font-weight: bold;
      }
      p.lists{
        text-align: center;
      }
      .red-border{
      	border-bottom: 1px solid red !important;
      }

      a.tooltipped{
        text-decoration: none;
      }
      span.rate{
        margin-left: 40%;
      }
    </style>
    <body>
    <header>
      <h1 class="heading">On-The-Job Training</h1>
      <h3 class="heading">Performance Evaluation Report</h3>
    </header>
    <div id="wrapper">
      <div class="container">
        <div class="row">
          <div class="col l12">
            <h4 class="parts">Part I(To be filled by the student trainee)</h4>
            <form id="formy2">
            <div class="row">
              <div class="col l6">
                <div class="input-field first-field">
                  <label for="#name">Name</label>
                  <input type="text" name="fname" id="fname" required class="validate" value="<?php echo $initial_data[0]['first_name'].'  '.$initial_data[0]['middle_initial'].'  '.$initial_data[0]['last_name']; ?>">
                </div>
              </div>
              <div class="col l3">
                <div class="input-field first-field"">
                  <label for="#age">Age</label>
                  <input type="text" name="fage" id="fage" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="validate" value="<?php echo $initial_data[0]['age']; ?>">
                </div>
              </div>
              <div class="col l3">
                <div class="input-field first-field"">
                  <label for="#sex">Sex</label>
                  <input type="text" name="fsex" id="fsex" required class="validate" value="<?php echo $initial_data[0]['sex'] ?> ">
                </div>
              </div>
             </div>
             <div class="row">
               <div class="col l6">
                <div class="input-field">
                  <label for="#course">Course</label>
                  <input type="text" name="fcourse" id="fcourse" required class="validate" value="<?php echo $initial_data[0]['course']; ?>">
                </div>
              </div>
              <div class="col l3">
                <div class="input-field">
                  <label for="#major">Major</label>
                  <input type="text" name="fmajor" id="fmajor" class="validate">
                </div>
              </div>
             </div>
             <div class="row">
               <div class="col l6">
                <div class="input-field">
                  <label for="#school">School</label>
                  <input type="text" name="fschool" id="fschool" required class="validate" value="Cebu Institute of Technology-University">
                </div>
              </div>
             </div>
             <div class="row">
               <div class="col l6">
                <div class="input-field">
                  <label for="#caddress">City Address</label>
                  <input type="text" name="fcity" id="fcity" required class="validate" value="<?php echo $initial_data[0]['present_address']; ?>">
                </div>
              </div>
             </div>
             <div class="row">
               <div class="col l6">
                <div class="input-field">
                  <label for="#paddress">Permanent Address</label>
                  <input type="text" name="fpermanent" required id="fpermanent" class="validate" value="<?php echo $initial_data[0]['permanent_address']; ?>">
                </div>
              </div>
             </div>
             <div class="row">
               <div class="col l3">
                <div class="input-field">
                  <label for="#training">No. of Training Required</label>
                  <?php if($ojt_program->ojt_program == 'ojt_one'): ?>
                  <input type="text" name="frequired" required id="frequired" class="validate" value="<?php echo $initial_data[0]['ojtone_required'];?>">
                <?php else: ?>
                  <input type="text" name="frequired" required id="frequired" class="validate" value="<?php echo $initial_data[0]['ojttwo_required'];?>">
                <?php endif; ?>
                </div>
              </div>
             </div>
             <h4 class="parts">Part II(To be filled by the company representative)</h4>
            <div class="row">
              <div class="col l12">
                <div class="input-field first-field">
                  <label for="#company">Name of the Company</label>
                  <input type="text" name="fcompany" id="fcompany" class="validate" value="<?php echo $initial_data[0]['company_name']; ?>">
                </div>
              </div>
             </div>
              <div class="row">
              <div class="col l12">
                <div class="input-field">
                  <label for="#assign">Division Assigned</label>
                  <input type="text" name="fdivision" id="fdivision" required class="validate">
                </div>
              </div>
             </div>
              <div class="row">
              <div class="col l12">
                <div class="input-field">
                  <label for="#fot">Field of Training</label>
                  <input type="text" name="ffield" required id="ffield" class="validate">
                </div>
              </div>
             </div>
              <div class="row">
              <div class="col l7">
                <div class="input-field">
                  <label for="#company">Inclusive dates of Training: From:</label>
                  <input type="text" name="fdates" required id="fdates" class="validate datepicker">
                </div>
              </div>
               <div class="col l5">
                <div class="input-field">
                  <label for="#to">To:</label>
                  <input type="text" name="fdatesto" required id="fdatesto" class="validate datepicker">
                </div>
              </div>
             </div>
             <div class="row">
               <div class="col l4">
                <div class="input-field">
                  <label for="#training">Total Number of Hours Rendered</label>
                  <?php if($ojt_program->ojt_program == 'ojt_one'): ?>
                  <input type="text" value="<?php echo $initial_data[0]['ojtone_rendered'] ?>" name="ftotal" required id="ftotal" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="validate">
                <?php else: ?>
                    <input type="text" value="<?php echo $initial_data[0]['ojttwo_rendered'] ?>" name="ftotal" required id="ftotal" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="validate">
                  <?php endif; ?>
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
                    <input type="text" name="fquality" id="fquality" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" style="height: 1rem;">
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
                    <input type="text" name="fquality2" id="fquality2" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" style="height: 1rem;">

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
                    <input type="text" name="fdependability" id="fdependability" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" style="height: 1rem;">
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
                    <input type="text" name="fattendance" id="fattendance" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" style="height: 1rem;">
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
                    <input type="text" name="fcooperation" id="fcooperation" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' style="height: 1rem;">
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
                    <input type="text" name="fjudgement" id="fjudgement" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" style="height: 1rem;">
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
                    <input type="text" name="fpersonality" id="fpersonality" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" style="height: 1rem;">
                 </div>
               </div>
             </div>
             <ul class="collapsible" data-collapsible="accordion">
              <li>
                <div class="collapsible-header"><i class="fa fa-pencil" aria-hidden="true"></i>Recommendation</div>
                <div class="collapsible-body" style="padding: 10px;">
                  <textarea name="recommend" class="materialize-textarea" placeholder="Write your recommendation here..."></textarea>
                </div>
              </li>
             </ul>
              <div class="allow">
                   <input type="checkbox" id="allow-view" name="allow_view" value="true" checked><label for="allow-view" style="color: #23807e; font-size: 14px;"> Allow OJT to view evaluation</label>
              </div>        
             <p style="text-align: center;">
             <button type="submit" id="btn_submit2" data-stud-user="<?php echo $stud_username; ?>" class="btn btn-primary">Submit</button>
             <button type="button" class="btn btn-danger" id="btnCancel">Cancel</button>
             </p>
              <input type="hidden" name="supervisor_id" value="<?php echo $this->session->userdata('id_number'); ?>">
            </form>
          </div>
        </div>      
      </div>
    </div>


      <!--Import jQuery before materialize.js-->
      <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
      <script src="<?php echo base_url() ?>assets/js/materialize.min.js"></script>
  
      </body>
<script type="text/javascript">
  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });
       
</script>
<script type="text/javascript">
  $('#btnCancel').click(function(){
       window.location.href = "<?php echo base_url()?>main/supervisorDashboard";
  });
  $('#btn_submit2').click(function(e){ 
  	e.preventDefault();
  	// alert('heyyo');return false;
    var student = '<?php echo $stud_username ?>';
    var data = $('#formy2').serialize();
     var fail = false;
     var fail_log = '';
     var stud = $(this).data('stud-user');
     $( 'body' ).find( 'input[type=text]' ).each(function(){
     	$(this).blur(function(){

     	});
            if( ! $( this ).prop( 'required' )){
            } else {
                if ( ! $( this ).val() ) {
                    fail = true;
                    name = $(this).addClass('red-border');
                    fail_log += name + " is required ";
                }else{
                    name = $(this).removeClass('red-border');
                }
            }
        });
     if(!fail){
          $.ajax({
            url:"<?php echo base_url()?>main/insert_final_eval/"+student,
            type:"POST",
            data:data,
            success:function(data){
               // console.log(data);
            }
        });
               swal({
                    title: "Evaluation Submitted",
                    icon:"success",
                }).then(function(){
                   window.location.href = "<?php echo base_url('supervisordashboard')?>";
                });return false;
     }
     else{
     	alert('Please fill all fields');
        return false;
     }
  });
</script>
<script type="text/javascript">

    $('#fquality').change(function(){
        var rating = $(this).val();
        if(rating > 20 || rating < 1){
           
            $(this).val('20');
        }
    });
      $('#fquality2').change(function(){
        var rating = $(this).val();
        if(rating > 20 || rating < 1){
           
            $(this).val('20');
        }
    });
        $('#fdependability').change(function(){
        var rating = $(this).val();
        if(rating > 15 || rating < 1){
           
            $(this).val('15');
        }
    });
          $('#fattendance').change(function(){
        var rating = $(this).val();
        if(rating > 15 || rating < 1){
           
            $(this).val('15');
        }
    });
            $('#fcooperation').change(function(){
        var rating = $(this).val();
        if(rating > 10 || rating < 1){
           
            $(this).val('10');
        }
    });
              $('#fjudgement').change(function(){
        var rating = $(this).val();
        if(rating > 10 || rating < 1){
           
            $(this).val('10');
        }
    });
                $('#fpersonality').change(function(){
        var rating = $(this).val();
        if(rating > 10 || rating < 1){
           
            $(this).val('10');
        }
    });

</script>
    
  </html>