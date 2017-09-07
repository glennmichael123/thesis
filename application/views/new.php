<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <style type="text/css">
        /*custom font*/
        /*basic reset*/
        
        * {
            margin: 0;
            padding: 0;
        }
        
        html {
            height: 100%;
            background: #E9EBEE;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #6441A5, #2a0845);
            /* Chrome 10-25, Safari 5.1-6 */
        }
        
        body {
            font-family: montserrat, arial, verdana;
            background: transparent;
        }
        /*form styles*/
        
        #msform ul li,
        h2,
        button[type="button"] {
            text-align: center;
            position: relative;
            margin-top: 30px;
        }
        
        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0px;
            box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
            padding: 20px 30px;
            width: 80%;
            margin: 0 10%;
        }
        
        #msform .row {
            margin-bottom: 10px;
        }
        /*Hide all except first fieldset*/
        
        #msform fieldset:not(:first-of-type) {
            display: none;
        }
        /*inputs*/
        
        #msform input[type=text],
        input[type=date],
        input[type=email],
        input[type=password],
        select,
        #msform textarea {
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 0px;
            width: 100%;
            height: 50px;
            font-family: montserrat;
            color: #2C3E50;
            font-size: 13px;
        }
        
        #msform input:focus,
        select:focus,
        #msform textareafocus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #ee0979;
            outline-width: 0;
            transition: All 0.5s ease-in;
            -webkit-transition: All 0.5s ease-in;
            -moz-transition: All 0.5s ease-in;
            -o-transition: All 0.5s ease-in;
        }
        /*buttons*/
        
        #msform .action-button {
            width: 100px;
            background: #EDC844;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 25px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }
        
        #msform .action-button:hover,
        #msform .action-button:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #EDC844;
        }
        
        #msform .action-button-previous {
            width: 100px;
            background: #C5C5F1;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 25px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }
        
        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #C5C5F1;
        }
        /*headings*/
        
        .fs-title {
            font-size: 18px;
            text-transform: uppercase;
            color: #2C3E50;
            margin-bottom: 20px;
            margin-top: 20px;
            letter-spacing: 2px;
            font-weight: bold;
        }
        
        .fs-subtitle {
            font-weight: normal;
            font-size: 13px;
            color: #666;
            margin-bottom: 20px;
        }
        /*progressbar*/
        
        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            /*CSS counters to number the steps*/
            counter-reset: step;
        }
        
        #progressbar li {
            list-style-type: none;
            color: #966868;
            text-transform: uppercase;
            font-size: 9px;
            width: 33.33%;
            float: left;
            position: relative;
            letter-spacing: 1px;
        }
        
        #progressbar li:before {
            content: counter(step);
            counter-increment: step;
            width: 24px;
            height: 24px;
            line-height: 26px;
            display: block;
            font-size: 12px;
            color: #AAF200;
            background: white;
            border-radius: 25px;
            margin: 0 auto 10px auto;
        }
        /*progressbar connectors*/
        
        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: white;
            position: absolute;
            left: -50%;
            top: 9px;
            z-index: -1;
            /*put it behind the numbers*/
        }
        
        #progressbar li:first-child:after {
            /*connector not needed before the first step*/
            content: none;
        }
        /*marking active/completed steps green*/
        /*The number of the step and the connector before it = green*/
        
        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #AAF200;
            color: white;
        }
        
        .choose-same-address {
            display: none;
        }
        
        label {
            cursor: pointer;
        }
        
      
    </style>
    <title></title>
</head>

<body>
 <div class="visible-sm">
      gwapo ko
    </div>
    <!-- MultiStep Form -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form id="msform" method="post">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">Personal Details</li>
                        <li>Company Profile</li>
                        <li>Email Verification</li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset>
                        <h2 class="fs-title">Before you continue, please complete this form first</h2>
                        <h2 class="fs-title">Personal Details <i class="fa fa-user" aria-hidden="true"></i></h2>
                        <div class="row">
                            <div class="col-lg-5">

                                <input type="text" name="first_name" id="first_name" placeholder="First name" required>

                            </div>
                            <div class="col-lg-2">
                                <input type="text" name="middle_initial" id="middle_initial" placeholder="M.I" required>

                            </div>
                            <div class="col-lg-5">
                                <input type="text" name="last_name" id="last_name" placeholder="Last name" required>
                            </div>
                        </div>
                        <?php $collegechoice = (empty($_POST['college'])) ? '' : $_POST['college'];?>
                        <div class="row">
                            <div class="col-lg-12">
                                <select id="college" name="college">
                                    <option <?php echo (empty($collegechoice)) ? "selected" : '';?> disabled>Select college</option>
                                    <option  <?php echo (!empty($collegechoice)) && $collegechoice == 'CCS' ? "selected" : '';?> value="CCS">College of Computer Studies</option>
                                    <option <?php echo (!empty($collegechoice)) && $collegechoice == 'CEA' ? "selected" : '';?> value="CEA">College of Engineering and Architecture</option>
                                    <option <?php echo (!empty($collegechoice)) && $collegechoice == 'CON' ? "selected" : '';?> value="CON">College of Nursing</option>
                                    <option <?php echo (!empty($collegechoice)) && $collegechoice == 'COE' ? "selected" : '';?> value="COE">College of Education</option>
                                    <option <?php echo (!empty($collegechoice)) && $collegechoice == 'CMBA' ? "selected" : '';?> value="CMBA">College of Management, Business and Accoutancy</option>
                                    <option <?php echo (!empty($collegechoice)) && $collegechoice == 'CAS' ? "selected" : '';?> value="CAS">College of Art and Sciences</option>
                                </select>
                            </div>
                        </div>
                        <?php
                          $courseCCS = array("BSIT", "BSCS");
                          $courseCOE = array("BSED", "BSEE", "BSG");
                          $courseCMBA = array("BSA", "BSBA", "BSHRM");
                        ?>
                      <?php if(isset($_POST['college'])):?>
                        <?php $college = $_POST['college'];?>
                        <div class="row course-section">
                            <div class="col-lg-6">
                                <select name="course" id="course" required>  
                                <option selected disabled>Select Course</option>
                                <?php if($college == 'CCS'):?>

                                  <?php foreach($courseCCS as $courses):?>                    
                                  <option>
                                      <?php echo $courses?>
                                  </option>
                                <?php endforeach;?>
                              <?php elseif($college == 'COE'):?>
                                  <?php foreach($courseCOE as $courses):?>                    
                                  <option>
                                      <?php echo $courses?>
                                  </option>
                  
                              <?php endforeach;?>
                              <?php endif;?>
                                </select>
                            </div>
                         
                            <div class="col-lg-6">
                                <select name="year" id="year" required>
                                    <option selected disabled>Year</option>
                                    <option value="1st Year">1st Year</option>
                                    <option value="2nd Year">2nd Year</option>
                                    <option value="3rd Year">3rd Year</option>
                                    <option value="4th Year">4th Year</option>
                                    <option value="5th Year">5th Year</option>
                                </select>
                            </div>
                        </div>
                         <?php endif;?>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="present_address" placeholder="Present address" id="present_address" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="permanent_address" placeholder="Permanent address" id="permanent_address" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="number" placeholder="Phone or landline" id="number" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="email" placeholder="Email address" id="email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="date" placeholder="Date of birth" name="date_of_birth" id="date_of_birth" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="age" placeholder="Age" id="age">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <select id="civil_status" name="civil_status" required>
                                    <option selected disabled>Status</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>

                                </select>

                            </div>
                            <div class="col-lg-6">
                                <select id="blood_type" name="blood_type" required>
                                    <option selected disabled>Blood type</option>
                                    <option value="Type A">Type A</option>
                                    <option value="Type B">Type B</option>
                                    <option value="Type AB">Type AB</option>
                                    <option value="Type O">Type O</option>

                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="weight" placeholder="Weight in kg" id="weight">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="height" placeholder="Height in cm" id="height">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="religion" placeholder="Religion" id="religion">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="citizenship" placeholder="Citizenship" id="citizenship">
                            </div>
                        </div>
                        <h2 class="fs-title">Family Data <i class="fa fa-users" aria-hidden="true"></i></h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="fathers_name" placeholder="Father's name" id="fathers_name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="fathers_occupation" placeholder="Father's occupation" id="fathers_occupation">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="mothers_name" placeholder="Mother's name" id="mothers_name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="mothers_occupation" placeholder="Mother's occupation" id="mothers_occupation">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="parents_address" placeholder="Parent's Address" id="parents_address">
                            </div>
                        </div>
                        <div class="row choose-same-address" style="display: none;">
                            <div class="col-lg-4">
                                <input type="radio" name="same-address" id="same-present">
                                <label for="same-present">Same as your present address</label>
                            </div>  
                            <div class="col-lg-5">
                                <input type="radio" name="same-address" id="same-permanent">
                                <label for="same-permanent">Same as your permanent address</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="tel_no" placeholder="Landline or mobile" id="tel_no">
                            </div>
                        </div>
                        <h2 class="fs-title">In case of emergency please contact <i class="fa fa-ambulance" aria-hidden="true"></i></h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="guardian_name" placeholder="Full name" id="guardian_name" >
                            </div>
                            <div class="col-lg-6">
                                <select id="blood_type" name="blood_type" required>
                                    <option selected disabled>Relationship</option>
                                    <option value="Guardian">Guardian</option>
                                    <option value="Father">Father</option>
                                    <option value="Mother">Mother</option>

                                </select>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12">
                            <input type="text" name="tel_no" placeholder="Telephone number" id="tel_no">
                            </div>
                            <div class="col-lg-12" style="margin-top: 10px;">
                              <input type="text" name="emergency_address" placeholder="Address" id="emergency_address">
                          </div>
                        </div>
                        <div class="row choose-same-address-emergency" style="display: none;">
                          <div class="col-lg-5">
                            <input type="radio" id="same-address-present-emergency" name="same-address-emergency"><label for="same-address-present-emergency">Same as my present Address</label>
                            
                          </div>
                          <div class="col-lg-6">
                            <input type="radio" id="same-address-permanent-emergency" name="same-address-emergency"><label for="same-address-permanent-emergency">Same as my permanent Address</label>
                          </div>
                        </div>
                      
                          
                          
                            <button type="button" name="next" id="to-next-page" class="next action-button">Next <i class="fa fa-step-forward" aria-hidden="true"></i></button>
                            
                            
                    </fieldset>
                    <fieldset>

                       <h2 class="fs-title">Company Information<i class="fa fa-info-circle"></i></h2>
                        <div class="row">
                          <div class="col-lg-12">
                            <input type="text" placeholder="Company name" id="company_name" name="company_name">
                          </div>
                        </div>
                         <div class="row">
                          <div class="col-lg-12">
                           <input type="text" name="company_address" placeholder="Company address" id="company_address">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <input type="text" name="company_telephone" placeholder="Telephone number" id="company_telephone">
                          </div>
                          <div class="col-lg-6">
                             <input type="text" name="company_fax" placeholder="Fax number" id="company_fax">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-12">
                            <input type="text" placeholder="Product lines" id="product_lines" name="product_lines">
                          </div>
                        </div>
                        <h2 class="fs-title">Company Classification <i class="fa fa-list-alt" aria-hidden="true"></i></h2>
                        <div class="row">
                          <div class="col-lg-2">
                            <input id="assembly" type="checkbox"><label for="assembly">Assembly</label>
                         </div> 
                         <div class="col-lg-2">
                            <input type="checkbox" id="manufacturing"><label for="manufacturing">Manufacturing</label>
                         </div> 
                         <div class="col-lg-2">
                            <input type="checkbox" id="maintenance"><label for="maintenance">Maintenance</label>
                         </div>
                         <div class="col-lg-3">
                            <input type="checkbox" id="marketing"><label for="marketing">Sales/Marketing</label>
                         </div>
                         <div class="col-lg-3">
                             <input type="checkbox" id="service"><label for="service">Service/Utility</label>
                         </div>
                         
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            
                              <input type="checkbox" id="research"><label for="research">Research and Development</label>
                            
                          </div>
                          <div class="col-lg-2">
                            <input type="checkbox" id="it"><label for="it">IT Related</label>
                          </div>
                          <div class="col-lg-5">
                               <input type="radio" class="other-company" id="other"><label for="other">Others</label>
                               <input type="text" id="other_classification" name="other_classification" style="height: 15px; width: 250px; display: none;" placeholder="Please specify">
                          </div>
                       
                        </div>

                         <h2 class="fs-title">Total number of employees <i class="fa fa-list-ol" aria-hidden="true"></i></h2>

                         <div class="row">
                            <div class="col-lg-3 col-lg-offset-1">
                              <input type="radio" id="less_fifty" name="employee_numbers"><label for="less_fifty">Less than 50</label>
             
                            </div>
                            <div class="col-lg-3 col-lg-offset-1">
                               <input type="radio" id="fifty_onehundred" name="employee_numbers"><label for="fifty_onehundred">From 50 to 100</label>
             
                            </div>
                            <div class="col-lg-3 col-lg-offset-1">
                                <input type="radio" id="more_onehundred" name="employee_numbers"><label for="more_onehundred">More than 100</label>
                            </div>
                         </div>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        <input style="float: right;" type="Submit" name="next" id="submit_form" class="next action-button" value="Submit" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Almost Done!</h2>
                        <h2 class="fs-title">Just one more step and you are done.</h2>
                        <p style="text-align: center;">An email verification link has been to your email address. Please verify your email to complete the registration.</p>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                </form>
            </div>
        </div>
    </div>


    <!-- link to designify.me code snippets -->
    <!-- jQuery -->
    <script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <!-- jQuery easing plugin -->
    <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
</body>

<script type="text/javascript">
    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".next").click(function() {
        if (animating) return false;
        animating = true;
        var number = $('#number').val();

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        next_fs.show();
        //show the next fieldset

        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = (now * 50) + "%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'position': 'absolute'
                });
                next_fs.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".previous").click(function() {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1 - now) * 50) + "%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'left': left
                });
                previous_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".submit").click(function() {
        return false;
    })
</script>
<script type="text/javascript">
    $('.other-company').change(function() {
        //$('#other_classification').slideDown();
        $('#other_classification').toggle({ width: '400' }, 400 );
    });
</script>
<script type="text/javascript">
    $("#parents_address").focus(function() {
        $('.choose-same-address').show();
    });

    $("#emergency_address").focus(function(){
      $('.choose-same-address-emergency').show();
    });
</script>
<script type="text/javascript">
    $("#same-present").change(function() {
        var address = $("#present_address").val();

        $("#parents_address").val(address);

        if(address.length == 0 ||  address == 'Field is required'){
            $("#parents_address").css("border-color","red");
        }else{
           $("#parents_address").css("border-color","green");
        }
    });

    $("#same-permanent").change(function() {
        var address = $("#permanent_address").val();
        $("#parents_address").val(address);
    });

    $('#same-address-present-emergency').change(function(){
      var address = $("#present_address").val();
      $("#emergency_address").val(address);
    });

    $('#same-address-permanent-emergency').change(function(){
      var address = $("#permanent_address").val();

      $("#emergency_address").val(address);
    });

</script>

<script type="text/javascript">
    $(".submit").click(function() {
        var data = $("input").val();
        var dataselect = $("select").val();
    });
</script>
<script type="text/javascript">
    $('#number').blur(function() {
        var number = $("#number").val();

    });
</script>

<script type="text/javascript">
  $('#submit_form').click(function(){
      var email = $('#email').val();

      $.ajax({
        method: 'post',
        url: 'saveEmail',
        data: {
          'email': email,

        },
        success: function(data){
          alert(data);
        }
      });
  });
</script>



<script type="text/javascript">
  $('#college').change(function(){
    $('.course-section').fadeIn();
   var college = $(this).val();

    $('#msform').submit();
      
      // $courseEngineering = array("BSCE", "BSME", "BSIE", "BSCPE", "BSEE", "BSMiE");


 });
</script>