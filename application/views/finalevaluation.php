<!DOCTYPE html>
  <html>
    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="<?php echo base_url() ?>assets/js/swal.js"></script>
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
       <!-- Compiled and minified JavaScript -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </head>
    <style type="text/css">
<<<<<<< HEAD
      h1.heading{
        text-transform: uppercase;
        font-size: 2.5em;
        font-weight: bold;
        text-align: center;
      }
      h3.heading{
        text-align: center;
        font-weight: bold;
        text-transform: uppercase;
        margin-top: -15px;
        font-size: 1.5em;
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
    </style>
    <body>
    <header>
      <h1 class="heading">On-The-Job Training (OJT)</h1>
      <h3 class="heading">Performance Evaluation Report</h3>
    </header>
    <div id="wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h4 class="parts">Part I(To be filled by the student trainee)</h4>
            <form method="post" id="formy2" name="fin_ev">
            <div class="row">
              <div class="col-lg-6">
                <div class="input-field first-field">
                  <label for="#name">Name</label>
                  <input type="text" name="fname" id="fname" required class="validate">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="input-field first-field"">
                  <label for="#age">Age</label>
                  <input type="text" name="fage" id="fage" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="validate">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="input-field first-field"">
                  <label for="#sex">Sex</label>
                  <input type="text" name="fsex" id="fsex" class="validate">
                </div>
              </div>
             </div>
             <div class="row">
               <div class="col-lg-6">
                <div class="input-field">
                  <label for="#course">Course</label>
                  <input type="text" name="fcourse" id="fcourse" class="validate">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="input-field">
                  <label for="#major">Major</label>
                  <input type="text" name="fmajor" id="fmajor" class="validate">
                </div>
              </div>
             </div>
             <div class="row">
               <div class="col-lg-6">
                <div class="input-field">
                  <label for="#school">School</label>
                  <input type="text" name="fschool" id="fschool" class="validate">
                </div>
              </div>
             </div>
             <div class="row">
               <div class="col-lg-6">
                <div class="input-field">
                  <label for="#caddress">City Address</label>
                  <input type="text" name="fcity" id="fcity" class="validate">
                </div>
              </div>
             </div>
             <div class="row">
               <div class="col-lg-6">
                <div class="input-field">
                  <label for="#paddress">Permanent Address</label>
                  <input type="text" name="fpermanent" id="fpermanent" class="validate">
                </div>
              </div>
             </div>
             <div class="row">
               <div class="col-lg-3">
                <div class="input-field">
                  <label for="#training">No. of Training Required</label>
                  <input type="text" name="frequired" id="frequired" class="validate">
                </div>
              </div>
             </div>
             <h4 class="parts">Part II(To be filled by the company representative)</h4>
            <div class="row">
              <div class="col-lg-12">
                <div class="input-field first-field">
                  <label for="#company">Name of the Company</label>
                  <input type="text" name="fcompany" id="fcompany" class="validate">
                </div>
              </div>
             </div>
              <div class="row">
              <div class="col-lg-12">
                <div class="input-field">
                  <label for="#assign">Division Assigned</label>
                  <input type="text" name="fdivision" id="fdivision" class="validate">
                </div>
              </div>
             </div>
              <div class="row">
              <div class="col-lg-12">
                <div class="input-field">
                  <label for="#fot">Field of Training</label>
                  <input type="text" name="ffield" id="ffield" class="validate">
                </div>
              </div>
             </div>
              <div class="row">
              <div class="col-lg-7">
                <div class="input-field">
                  <label for="#company">Inclusive dates of Training: From:</label>
                  <input type="text" name="fdates" id="fdates" class="validate">
                </div>
              </div>
               <div class="col-lg-5">
                <div class="input-field">
                  <label for="#to">To:</label>
                  <input type="text" name="fdatesto" id="fdatesto" class="validate">
                </div>
              </div>
             </div>
             <div class="row">
               <div class="col-lg-4">
                <div class="input-field">
                  <label for="#training">Total Number of Hours Rendered</label>
                  <input type="text" name="ftotal" id="ftotal" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="validate">
                </div>
              </div>
             </div>
             <div class="row">
               <div class="col-lg-4">
                 <h4 class="factors">Job Factors</h4>
                <ol>
                  <li><p class="list" style="margin-top: 25px;">Quality of Work</p>
                  <p>(Thoroughness, accuracy, neatness and effectiveness)</p>
                  </li>
                   <li><p class="list" style="margin-top: 20px;">Quality of Work</p>
                  <p>(Able to complete work in allotted time)</p>
                  </li>
                   <li><p class="list" style="margin-top: 20px;">Dependability, reliabilty and resoucefulness</p>
                  <p>(Ability to work w/ minimum amount of break supervision)</p>
                  </li>
                   <li><p class="list" style="margin-top: 20px;">Attendance</p>
                  <p>(Regularity and Punctuality in office attendance and report observation of break periods)</p>
                  </li>
                   <li><p class="list" style="margin-top: 20px;">Cooperation</p>
                  <p>(Works well with everyone)</p>
                  </li>
                   <li><p class="list" style="margin-top: 20px;">Judgement</p>
                  <p>(Sound decisions: Ability to identify and evaluate pertinent factors)</p>
                  </li>
                   <li><p class="list" style="margin-top: 20px;">Personality</p>
                  <p>(Personal grooming and pleasant disposition)</p>
                  </li>
                </ol>
               </div>
               <div class="col-lg-4">
                 <h4 class="factors">Rating</h4>
                 <ul>
                   <li><p class="lists" style="margin-top: 30px;">20%</p></li>
                   <li><p class="lists" style="margin-top: 65px;">20%</p></li>
                   <li><p class="lists" style="margin-top: 75px;">15%</p></li>
                   <li><p class="lists" style="margin-top: 85px;">15%</p></li>
                   <li><p class="lists" style="margin-top: 90px;">10%</p></li>
                   <li><p class="lists" style="margin-top: 60px;">10%</p></li>
                   <li><p class="lists" style="margin-top: 60px;">10%</p></li>
                 </ul>
               </div>
               <div class="col-lg-4">
                 <h4 class="factors">Given Rate</h4>
                 <input type="text" name="fquality" id="fquality" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2">
                 <input type="text" name="fquality2" id="fquality2" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" style="margin-top: 15px;">
                 <input type="text" name="fdependability" id="fdependability" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" style="margin-top: 25px;">
                 <input type="text" name="fattendance" id="fattendance" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" style="margin-top: 40px;">
                 <input type="text" name="fcooperation" id="fcooperation" onkeypress='return event.charCode >= 48 && event.charCode <= 57' style="margin-top: 45px;">
                 <input type="text" name="fjudgement" id="fjudgement" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" style="margin-top: 20px;">
                 <input type="text" name="fpersonality" id="fpersonality" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" style="margin-top: 5px;">
               </div>
             </div>
             <ul class="collapsible" data-collapsible="accordion">
              <li>
                <div class="collapsible-header"><i class="fa fa-pencil" aria-hidden="true"></i>Recommendation</div>
                <div class="collapsible-body" style="padding: 10px;">
                  <textarea name="recommend" placeholder="Write your recommendation here..."></textarea>
=======
        body{
             background-color: #F4F4F4;
        }
        header{
            text-align: center;
        }
        .partlist{
            margin-top: 20px;
            background-color: #ffba00;
            color: #FFFFFF;
            padding: 10px;
        }
        .fields{
            margin-top: 10px;
        }
        .labels{
            font-size: 15px; 
            color: #000000;
        }
        input{
            font-size: 15px;
            width: 100%;
            border-right: none;
            border-left: none;
            border-top:none;
            border-bottom: 1px solid #000;
            border-bottom-color: #000000;
            background-color: #F4F4F4;
>>>>>>> 7dc4f837b172c0410c315385dd8c50ec726fea28

                </div>
              </li>
             </ul>
             <p style="text-align: center;">
             <button type="submit" id="btn_submit2" class="btn btn-primary">Submit</button>
             <button type="cancel" class="btn btn-danger">Cancel</button>
             </p>
              <input type="hidden" name="supervisor_id" value="<?php echo $this->session->userdata('id_number'); ?>">
            </form>
          </div>
        </div>      
      </div>
    </div>


<<<<<<< HEAD

=======
        .lists{
            padding: 2px;
        }
        .lis{
            margin-top: 32px;
            padding: 6px;
            text-align: center;
            color: #000000;
        }
        li{
            margin: 50px 0;
        }
      
    </style>
>>>>>>> 7dc4f837b172c0410c315385dd8c50ec726fea28



<<<<<<< HEAD
=======
<body>
    
    <div class="page-wrap">
       
        <div class="content">

            <form method="post" id="formy2"  name="fin_ev">
            <div class="container">
                 <div class="col-lg-2"></div>
                <div class="col-lg-8">
>>>>>>> 7dc4f837b172c0410c315385dd8c50ec726fea28


<<<<<<< HEAD

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
          $(document).ready(function(){
            $('.collapsible').collapsible();
           });
      </script>
      <script type="text/javascript">
      $('#btn_submit2').click(function(){ 
        var data = $('#formy2').serialize();
        //alert(data);
        $.ajax({
=======
                <div class="row">
                    <div class="col-lg-6" style="margin-top: 20px;">
                        <label class="labels" >Name:</label>
                        <input type="text" name="fname" id="fname" required><br>
                        <label class="labels">Course:</label> 
                        <input type="text" name="fcourse" id="fcourse" required><br>
                        <label class="labels">School:</label>
                        <input type="text" name="fschool" id="fschool" required><br>
                        <label class="labels">City Address:</label>
                        <input type="text" name="fcity" id="fcity" required><br>
                        <label class="labels">Permanent Address:</label>
                        <input type="text" name="fpermanent" id="fpermanent" required>
                        <label class="labels">No. of Training Required:</label>
                        <input type="text" name="frequired" id="frequired" required>
                    </div>
                    <div class="col-lg-3" style="margin-top: 20px">
                        <div class="blocking">
                            <label class="labels">Age:</label>
                            <input type="text" name="fage" id="fage" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required><br>
                            <label class="labels">Major:</label>
                            <input type="text" name="fmajor" id="fmajor" required><br>
                        </div>
                    </div>
                    <div class="col-lg-3" style="margin-top: 20px">
                        <label class="labels">Sex:</label>
                        <input type="text" name="fsex" id="fsex" required>
                    </div>
                </div>
                <div class="partlist">
                    <label>Part II (To be filled by the company representative)</label>
                </div>
                <div class="row">
                    <div class=col-lg-12 style="margin-top: 20px;">
                        <label class="labels">Name of the Company:</label>
                        <input type="text" name="fcompany" id="fcompany" required>
                        <label class="labels">Division Assigned:</label>
                        <input type="text" name="fdivision" id="fdivision" required>
                        <label class="labels">Field of Training:</label>
                        <input type="text" name="ffield" id="ffield" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <label class="labels">Inclusive Dates of Training: From:</label>
                        <input type="text" name="fdates" id="fdates" required>
                        <label class="labels" >Total Number of Hours Rendered:</label>
                        <input type="text" name="ftotal" id="ftotal" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                    </div>
                    <div class="col-lg-4">
                        <label class="labels">To:</label>
                        <input type="text" name="fdatesto" id="fdatesto" required>
                    </div>
                </div>
                <div class="row" style="padding: 10px">
                    <div class="col-lg-6">
                        <h3 style="text-align: center;">JOB FACTORS</h3>
                        <ol>
                            <li class="lists">Quality of Work<p>(Thoroughness,accuracy,neatness and effectiveness)</p></li>
                            <li class="lists">Quality of Work<p>(Able to complete work in allotted time)</p></li>
                            <li class="lists">Dependability,reliability and resoucefulness<p>(Ability to work w/ minimum amount of break supervision)</p></li>
                            <li class="lists">Attendance<p>(Regularity and Punctuality in office attendance and report observation of break periods)</p></li>
                            <li class="lists">Cooperation<p>(Works well with everyone)</p></li>
                            <li class="lists">Judgement<p>(Sound decisions: Ability to identify and evaluate pertinent factors)</p></li>
                            <li class="lists">Personality<p>(Personal grooming and pleasant disposition)</p></li>
                        </ol>
                    </div>
                    <div class="col-lg-3">
                        <h3 style="text-align: center;">RATING</h3>
                        <ul style="list-style: none;">
                            <li class="lis">20%</li>
                            <li class="lis">20%</li>
                            <li class="lis">15%</li>
                            <li class="lis">15%</li>
                            <li class="lis">10%</li>
                            <li class="lis">10%</li>
                            <li class="lis">10%</li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h3 style="text-align: center;">GIVEN RATE</h3>
                        <ul style="list-style: none;">

                            <li class="list"><input type="text" name="fquality" id="fquality" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" required></li>
                            <li class="list"><input type="text" name="fquality2" id="fquality2" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" required></li>
                            <li class="list"><input type="text" name="fdependability" id="fdependability" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" required></li>
                            <li class="list"><input type="text" name="fattendance" id="fattendance" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" required></li>
                            <li class="list"><input type="text" name="fcooperation" id="fcooperation" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required></li>
                            <li class="list"><input type="text" name="fjudgement" id="fjudgement" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" required></li>
                            <li class="list"><input type="text" name="fpersonality" id="fpersonality" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" required></li>
                        </ul>
                    </div>
                </div>
                <div class="partlist">
                    <label>RECOMMENDATION:</label>
                </div>
              
                    <textarea class="form-control" style="margin-top: 10px;" name="recommend"></textarea>
                    <p style="margin-top: 10px; text-align: center;"><button type="submit" class="btn btn-primary" id="btn_submit2" >Submit</button>
                    <button class="btn btn-danger">Cancel</button></p>
                    <input type="hidden" name="supervisor_id" value="<?php echo $this->session->userdata('id_number'); ?>">
             </div>
            <div class="col-lg-2"></div>  
            </div>
        </form>
 

    </div>


<!-- 
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script> -->
<script type="text/javascript">
  $('#btn_submit2').click(function(){ 
    var data = $('#formy2').serialize();
     var fail = false;
     var fail_log = '';
     $( '#formy2' ).find( 'input[type=text]' ).each(function(){
            if( ! $( this ).prop( 'required' )){

            } else {
                if ( ! $( this ).val() ) {
                    fail = true;
                    name = $( this ).attr( 'style', 'border: 1px solid red' );
                    fail_log += name + " is required ";
                }else{
                    name = $( this ).attr( 'style', 'border: 1px solid #ccc' );
                }

            }
        });
     if(!fail){
          $.ajax({
>>>>>>> 7dc4f837b172c0410c315385dd8c50ec726fea28
            url:"<?php echo base_url()?>main/insert_final_eval/<?php echo $stud_username;?>",
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
                   window.location.href = "<?php echo base_url()?>main/supervisorDashboard";
                });return false;
     }
     else{

        return false;
     }

       
        //alert(data);
      

   
  
  });
    </body>
    
  </html>