
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
                        <div class="row">
                            <div class="col-lg-12">
                                <select id="college" name="college">
                                    <option selected disabled>Select college</option>
                                    <option value="CCS">College of Computer Studies</option>
                                    <option value="CEA">College of Engineering and Architecture</option>
                                    <option value="CON">College of Nursing</option>
                                    <option value="COE">College of Education</option>
                                    <option value="CMBA">College of Management, Business and Accoutancy</option>
                                    <option value="CAS">College of Art and Sciences</option>
                                </select>
                            </div>
                        </div>

                      
                
                        <div class="row course-section">
                           
                                 <div class="col-lg-6"> 
                                    <input type="text" name="course" id="course" placeholder="Course">
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
                                <select id="relationship_emergency" name="relationship_emergency" required>
                                    <option selected disabled>Relationship</option>
                                    <option value="Guardian">Guardian</option>
                                    <option value="Father">Father</option>
                                    <option value="Mother">Mother</option>

                                </select>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12">
                            <input type="text" name="tel_no_emergency" placeholder="Telephone number" id="tel_no_emergency">
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
                      
                          
                          
                            <button type="button" name="next" id="to-next-page2" class="next action-button">Next <i class="fa fa-step-forward" aria-hidden="true"></i></button>
                            
                            
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
                            <input id="assembly" value="assembly" type="checkbox"><label for="assembly">Assembly</label>
                         </div> 
                         <div class="col-lg-2">
                            <input type="checkbox" value="manufacturing" id="manufacturing"><label for="manufacturing">Manufacturing</label>
                         </div> 
                         <div class="col-lg-2">
                            <input type="checkbox" value="maintenance" id="maintenance"><label for="maintenance">Maintenance</label>
                         </div>
                         <div class="col-lg-3">
                            <input type="checkbox" value="marketing" id="marketing"><label for="marketing">Sales/Marketing</label>
                         </div>
                         <div class="col-lg-3">
                             <input type="checkbox" value="service" id="service"><label for="service">Service/Utility</label>
                         </div>
                         
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            
                              <input type="checkbox" value="research" id="research"><label for="research">Research and Development</label>
                            
                          </div>
                          <div class="col-lg-2">
                            <input type="checkbox" value="itrelated" id="itrelated"><label for="itrelated">IT Related</label>
                          </div>
                          <div class="col-lg-5">
                               <input type="radio" class="other-company" id="other"><label for="other">Others</label>
                               <input type="text" id="other_classification" name="other_classification" style="height: 15px; width: 250px; display: none;" placeholder="Please specify">
                          </div>
                       
                        </div>

                         <h2 class="fs-title">Total number of employees <i class="fa fa-list-ol" aria-hidden="true"></i></h2>

                         <div class="row">
                            <div class="col-lg-3 col-lg-offset-1">
                              <input type="radio" id="less_fifty" value="Less than 50" name="employee_numbers"><label for="less_fifty">Less than 50</label>
             
                            </div>
                            <div class="col-lg-3 col-lg-offset-1">
                               <input type="radio" id="fifty_onehundred" value="From 50 to 100" name="employee_numbers"><label for="fifty_onehundred">From 50 to 100</label>
             
                            </div>
                            <div class="col-lg-3 col-lg-offset-1">
                                <input type="radio" id="more_onehundred" value="More than 100" name="employee_numbers"><label for="more_onehundred">More than 100</label>
                            </div>
                         </div>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        <input style="float: right;" type="button" name="next" id="to-last-page" class="next action-button" value="Submit" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Almost Done!</h2>
                        <h2 class="fs-title">Just one more step and you are done.</h2>
                        <p style="text-align: center;">An email verification link has been to your email address. Please verify your email to complete the registration.</p>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        <a href="dashboard" style="float: right;">Continue to dashboard</a>
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
    $('#to-next-page2').click(function(){
        var first_name = $('#first_name').val();
        var middle_initial = $('#middle_initial').val();
        var last_name = $('#last_name').val();
        var college = $('#college').val();
        var course = $('#course').val();
        var year = $('#year').val();
        var present_address = $('#present_address').val();
        var permanent_address = $('#permanent_address').val();
        var number = $('#number').val();
        var email = $('#email').val();
        var date_of_birth = $('#date_of_birth').val();
        var age = $('#age').val();
        var civil_status = $('#civil_status').val();
        var blood_type = $('#blood_type').val();
        var weight = $('#weight').val();
        var height = $('#height').val();
        var religion = $('#religion').val();
        var citizenship = $('#citizenship').val();

            // console.log(first_name + middle_initial + last_name + college + course + year + present_address + permanent_address +
            //      number + email + date_of_birth + age + civil_status + blood_type + weight + height + religion + citizenship);

        $.ajax({
            url: 'savePersonalDetails',
            method: 'POST',
            data: {
                'id_number': '14-2649-276',
                'first_name': first_name,
                'middle_initial': middle_initial,
                'last_name': last_name,
                'college': college,
                'course': course,
                'year': year,
                'present_address': present_address,
                'permanent_address': permanent_address,
                'contact_number': number,
                'email_address': email,
                'date_of_birth': date_of_birth,
                'age': age,
                'marital_status': civil_status,
                'blood_type': blood_type,
                'weight': weight,
                'height': height,
                'religion': religion,
                'citizenship': citizenship,
            },

            success: function(data){
                // console.log(data);
            }
        });



        var fathers_name = $('#fathers_name').val();
        var fathers_occupation = $('#fathers_occupation').val();
        var mothers_name = $('#mothers_name').val();
        var mothers_occupation = $('#mothers_occupation').val();
        var parents_address = $('#parents_address').val();
        var tel_no = $('#tel_no').val();

        // console.log(fathers_name + fathers_occupation + mothers_name + mothers_occupation + tel_no);
 
        $.ajax({
            url: 'saveFamilyData',
            method: 'POST',
            data:{
                'id_number': '14-2649-276',
                'fathers_name': fathers_name,
                'fathers_occupation': fathers_occupation,
                'mothers_name': mothers_name,
                'mothers_occupation': mothers_occupation,
                'parents_address': parents_address,
                'contact_number': tel_no,
            },

            success: function(data){
                // console.log(data);
            }
        }); 



        var guardian_name = $('#guardian_name').val();
        var relationship_emergency = $('#relationship_emergency').val();
        var tel_no_emergency = $('#tel_no_emergency').val();
        var emergency_address = $('#emergency_address').val();
       


        $.ajax({
            url: 'saveEmergencyData',
            method: 'POST',
            data:{
                'id_number': '14-2649-276',
                'name': guardian_name,
                'relationship': relationship_emergency,
                'contact_number': tel_no_emergency,
                'address': emergency_address,
            },

            success: function(data){
                // console.log(data);
            }
        }); 


       
    });
</script>


<script type="text/javascript">
    $('#to-last-page').click(function(){
        var company_name = $("#company_name").val();
        var company_address = $("#company_address").val();
        var company_telephone = $("#company_telephone").val();
        var company_fax = $("#company_fax").val();
        var product_lines = $("#product_lines").val();


        var assembly = $("#assembly").is(':checked') ? $('#assembly').val() : '';
        var manufacturing = $("#manufacturing").is(':checked') ? $('#manufacturing').val(): '';
        var maintenance = $("#maintenance").is(':checked') ? $('#maintenance').val(): '';
        var marketing = $("#marketing").is(':checked') ? $('#marketing').val(): '';
        var service = $("#service").is(':checked') ? $('#service').val(): '';
        var research = $("#research").is(':checked') ? $('#research').val(): '';
        var itrelated = $("#itrelated").is(':checked') ? $('#itrelated').val(): '';
        

        var other_classification = $("#other_classification").val();

        var less_fifty = $("#less_fifty").is(':checked') ? $('#less_fifty').val(): '';
        var fifty_onehundred = $("#fifty_onehundred").is(':checked') ? $('#fifty_onehundred').val(): '';
        var more_onehundred = $("#more_onehundred").is(':checked') ? $('#more_onehundred').val(): '';
        var classification = [assembly, manufacturing, maintenance, marketing, service, research, itrelated, other_classification];
      
       $.ajax({
           url: 'saveCompanyData',
           method: 'POST',
           data: {
                'id_number': '14-2649-276',
                'company_name': company_name,
                'company_address': company_address,
                'contact_number': company_telephone,
                'fax_number': company_fax,
                'product_lines': product_lines,
                'company_classification':classification,
                'number_of_employees': less_fifty + fifty_onehundred + more_onehundred, 
           },
           success: function(data){
                // console.log(data);
           },
       });

        var email = $('#email').val();

      $.ajax({
        method: 'post',
        url: 'saveEmail',
        data: {
          'email': email,
        },
        success: function(data){
        }
      });
  });
</script>



<script type="text/javascript">
  $('#college').change(function(){
    $('.course-section').fadeIn();
   var college = $(this).val();

  
      // $courseEngineering = array("BSCE", "BSME", "BSIE", "BSCPE", "BSEE", "BSMiE");


 });

</script>