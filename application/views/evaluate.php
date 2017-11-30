<!DOCTYPE html>
<html>
<!-- <?php echo $stud_username;?> -->
<head>
    <link rel="icon" href="favicon.ico">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="<?php echo base_url() ?>assets/js/swal.js"></script>
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <style type="text/css">
        body {
            background-color: #F4F4F4;
        }
        
        .topper {
            margin-top: 20px;
        }
        
        .well {
            background-color: #FFD700;
            border-radius: 15px;
        }
        
        .panel-default{
          
            margin-top: 40px;
          
        }
        
        .panel-heading {
           
            background: none !important;
            background-color: #CA2E32 !important;
            color: #FFFFFF !important;
        }
        
        ol {
            list-style: lower-alpha;
        }
        
        textarea {
            height: 100px;
            width: 250px;
        }
        
        .score {
            height: 25px;
            width: 50px;
            
        }
      
        .save{
        color: #FFFFFF;
        background:#FFB900;   
        }
        .save:hover{
        transition: 0.4s;
        color: #FFFFFF;
        background-color: #f5b301 !important;
        }
        .cancel{
        color:#FFFFFF;
        background: #800000 !important;   
        }
        .cancel:hover{
        color:#FFFFFF;
        background-color:#760404;
        transition: 0.4s;
        }
      
        a:hover{
            text-decoration: none;
        }
        .pointy {
            cursor: pointer;
        }
        
        li {
            color: black;
        }
        
        label {
            color: #A55D35;
            padding-bottom: 20px;
            padding-top: 20px;
        }
        
        .badge {
            background-color: #A55D35;
        }
        .modal-body{
            font-family: 'Roboto', sans-serif;
        }
        .fa-question-circle{
            color: #A55D35;
        }
        .popover-title{
        color: #0a0a0a;
        font-size: 15px;
        text-align: center;
        background-color: #fafafa;
        }
        .popover-content{
            text-align: left;
        }
    </style>

    <title></title>

</head>

<body>

    <!-- line modal -->
    
    <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i><span class="sr-only">Close</span></button>
                    <h3 class="modal-title" id="lineModalLabel">Watchlist</h3>
                </div>
                <div class="modal-body">
                    <div class="ban-title">
                        <h4>The following are the watchlist companies</h4>
                    </div>
                    <ul>
                        <li>sasa</li>
                        <li>sasa</li>
                        <li>sasa</li>
                        <li>sasa</li>
                        <li>sasa</li>
                        <li>sasa</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <div class="page-wrap">
        
        <div class="content">
            <div class="container">
                <div class="row">

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
                                        <form method="post" id="formy"  name="mid_ev">
                                         
                                         <fieldset style="float: right;">
                                             <input tabindex="1" maxlength="1" type="text" name="enthusiasm"  onkeyup="scoreTotal()" id="enthusiasm" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>

                                            <a role="button" class="clicky" data-container="body" data-toggle="popover" data-placement="top" title="Enthusiasm / Eagerness to Learn" data-content="Confident to learn new tasks / assignments." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                             <br>
                                             <input tabindex="2"  maxlength="1" type="text" name="cooperation" onkeyup="scoreTotal()" id="cooperation" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>  

                                             <a role="button" class="clicky" data-container="body" data-toggle="popover" data-placement="top" title="Cooperation and Willingness" data-content="Readiness to accept and carry out instructions and assignments; works well with others; shows support and concerns for co-workers." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a><br>
                                             <input tabindex="3" maxlength="1" type="text" name="adaptability" onkeyup="scoreTotal()" id="adaptability" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                                                   <a role="button" class="clicky" data-container="body" data-toggle="popover" data-placement="top" title="Adaptability and Sociability" data-content="Ability to adjust to a new environment and be at ease with others; ability to deal with people of different levels/ positions; amiable and friendly with others and knows how to respect authority." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                             </i><br>
                                             <input tabindex="4" maxlength="1" type="text" name="industriousness" onkeyup="scoreTotal()" id="industriousness" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required> 
                                             <a role="button" class="clicky" data-container="body" data-toggle="popover" data-placement="top" title="Industriousness and Initiative" data-content="Constant worker / keeps himself busy with initiative; does not take unauthorized breaks; initiates action when the situation calls for it." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                             <br>
                                             <input tabindex="5" maxlength="1" type="text" name="responsibility" onkeyup="scoreTotal()" id="responsibility" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>

                                               <a role="button" class="clicky" data-container="body" data-toggle="popover" data-placement="top" title="Sense of Responsibility" data-content="Applies sound judgement / decision making." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a><br>
                                             <input tabindex="6"  maxlength="1" type="text" name="attentiveness" class="score" onkeyup="scoreTotal()" id="attentiveness" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                                              <a role="button" class="clicky" data-container="body" data-toggle="popover" data-placement="top" title="Attentiveness / Attention" data-content="Focuses on his/her work / gives full attention to what he/she is doing; ability to handle unexpected problems; carry-out instructions / assignments at once." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a><br>
                                             <input tabindex="7" maxlength="1" type="text" name="grooming" onkeyup="scoreTotal()" id="grooming" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                                             <a role="button" class="clicky" data-container="body" data-toggle="popover" data-placement="top" title="Personal Grooming" data-content="Maintains proper way of dressing marked by proper conduct, tidiness, and well-grooming; lively and well-spirited during at work and at rest." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                             
                                             <br>
                                             <input tabindex="8" maxlength="1" type="text" name="attendance" onkeyup="scoreTotal()" id="attendance" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>                           
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
                                                <input tabindex="9" maxlength="1" type="text" name="quality" onkeyup="scoreTotal()" id="quality" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                                                    <a role="button" class="clicky" data-container="body" data-toggle="popover" data-evaluation-type="a_two"data-placement="top" title="Quality of Work" data-content="Thoroughness, accuracy, neatness and effectiveness of output, meets required standards and even exceeds expected results." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                                <input tabindex="10" maxlength="1" type="text" name="quantity" onkeyup="scoreTotal()" id="quantity" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                                                      <a role="button" class="clicky" data-container="body" data-toggle="popover" data-evaluation-type="a_two"data-placement="top" title="Quantity of Work" data-content="Able to complete work within the alloted time, finishes work on schedule and maximizes use of tme." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                                <input tabindex="11" maxlength="1" type="text" name="dependability" onkeyup="scoreTotal()" id="dependability" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                                                      <a role="button" class="clicky" data-container="body" data-toggle="popover" data-evaluation-type="a_two"data-placement="top" title="Dependability" data-content="Ability to work with minimum supervision, does not need constant follow-up." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                                <input tabindex="12" maxlength="1" type="text" name="comprehension" onkeyup="scoreTotal()" id="comprehension" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                                                      <a role="button" class="clicky" data-container="body" data-toggle="popover" data-evaluation-type="a_two"data-placement="top" title="Comprehension" data-content="Understand instructions at once with almost no clarification." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                                <input tabindex="13" maxlength="1" type="text" name="safety" onkeyup="scoreTotal()" id="safety" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                                                  <a role="button" class="clicky" data-container="body" data-toggle="popover" data-evaluation-type="a_two"data-placement="top" title="Safety Consciousness" data-content="Carefully takes precaution and observe visible hazards; follow safety rules and reads instructions prior to working." tabindex="0" data-trigger="focus">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                                <input tabindex="14" maxlength="1" type="text" name="waste" onkeyup="scoreTotal()" id="waste" class="score" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
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
                                            <input type="text" name="total" class="score" id="total" style="margin-right: 25px; margin-top: 20px;" readonly> 
                                         </fieldset>
                                    </div>
                                </div>
                                <label for="remark" style="margin:0; padding: 0;" class="pointy">REMARKS</label>
                              
                                    <textarea tabindex="15" name="remarks" id="remark" class="form-control"></textarea>
                                    <div class="allow">
                                         <input type="checkbox" id="allow-view" name="allow_view" value="true" checked=""><label for="allow-view" style="color: black; font-size: 14px;"> Allow OJT to view evaluation</label>

                                    </div>
                                   
                                    <p style="text-align: center; padding-top: 30px;">

                                        <input type="hidden" name="supervisor_id" value="<?php echo $this->session->userdata('id_number'); ?>">
                                        <button type="submit" class="btn btn-success" id="btn_submit" name="midterm_eval">Submit</button>
                                        <a href="<?php echo base_url('supervisordashboard');?>" class="btn btn-danger">Cancel</a>

                                    </p>
                                </form>

                            </div>
                        </div>
              
                    </div>
                </div>
            </div>

        </div>

      

    
       
</body>


<script type="text/javascript">
    function scoreTotal(){
 var i1 = Number(document.getElementById('enthusiasm').value);
 var i2 = Number(document.getElementById('cooperation').value);
 var i3 = Number(document.getElementById('adaptability').value);
 var i4 = Number(document.getElementById('industriousness').value);
 var i5 = Number(document.getElementById('responsibility').value);
 var i6 = Number(document.getElementById('attentiveness').value);
 var i7 = Number(document.getElementById('grooming').value);
 var i8 = Number(document.getElementById('attendance').value);
 var i9 = Number(document.getElementById('quality').value);
 var i10 = Number(document.getElementById('quantity').value);
 var i11= Number(document.getElementById('dependability').value);
 var i12 = Number(document.getElementById('comprehension').value);
 var i13= Number(document.getElementById('safety').value);
 var i14= Number(document.getElementById('waste').value);

  
 document.getElementById('total').value = i1+i2+i3+i4+i5+i6+i7+i8+((i9+i10+i11+i12+i13+i14)*2);


    }
 
   

    
</script>
<script type="text/javascript">
    $('input').change(function(){
        var rating = $(this).val();
        if(rating > 5 || rating < 1){
           
            $(this).val('');
        }
    });

</script>
<script type="text/javascript">
  $('#btn_submit').click(function(){ 
        var data = $('#formy').serialize();
        //alert(data);
        $.ajax({
            url:"<?php echo base_url()?>main/insert_mid_eval/<?php echo $stud_username;?>",
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
  
  });
   $(function () {
  $('[data-toggle="popover"]').popover()
});
</script>

</html>