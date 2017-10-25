<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="favicon.ico">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
   
    <style type="text/css">
        *{
            font-family: 'Oswald', sans-serif;
        }
        body{
            background-color: #F4F4F4;
        }
        header{
            text-align: center;
        }
        .body{
            background-color: #FFFFFF !important;
            border-radius: 0px;
            box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
            padding: 20px 30px;
            width: 100%;
            margin: 5% 0%;

        }
        input{
            width: 100%;
            height: 40px;
            font-color: #000000 !important;
        }
        input[type=text],
        input[type=date],
        input[type=email],
        input[type=password],select{
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 0px;
            font-family: 'Rajdhani', sans-serif;
            font-weight: bold;
            font-size: 15px;
            width: 100%;
            height: 40px;
            margin-top: 5px;
        }
        .fs-title{
            text-align: center;
            font-weight: bold;
        }
        /*button[type="button"] {
            text-align: center;
            position: relative;
            margin-top: 30px;
            padding: 5px;
            background-color: blue;
            color: #FFFFFF;
            border: 0;
            width: 15%;
            border-radius: 10px;
        }*/
       
        .btn-glyphicon 
        { 
            
            padding:8px; 
            background:#ffffff; 
            margin-left:8px; 
        }
        .icon-btn 
        { 
            font-size: 18px;
            border-radius:25px;
            font-family: 'Oswald', sans-serif;
            margin-top: 10px;
        }


       .topage2{
            position: relative;
            top: 10px;
            font-size: 20px;
            border-radius: 5px;
            padding: 5px 20px 5px 20px;
            color:#FFFFFF;
            background: #FFBA00;
            text-decoration: none;
       }
       .topage2:hover{
        text-decoration: none;
        color: #FFFFFF;
        background-color: #f5b301;
       }
       .address{
        display: none;
       }

    </style>

    <title></title>

</head>

<body>
    <div class="page-wrap">
        <div class="content">
            <header>
                <h2 class="fs-title">Before you continue, please complete this form first</h2>
                
            </header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10" style="position: relative;">
                    <div class="body">
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
                        <div class="row">
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
                         <!-- <div class="row">
                            <div class="col-lg-1">
                                <div style="float: left;">
                                  <input type="radio" name="address" value="address" id="present_address" class="address" style="width: 25px;">
                                  <input type="radio" name="address" value="address" id="permanent_address" class="address" style="width: 25px;">
                                </div>
                            </div>  
                         </div> -->
                         <div class="row">
                            <div class="col-lg-3 col-lg-offset-1">
                              <input type="radio" id="presents_address" class="address" value="address" name="address"><label for="presents_address" class="address"  style="margin-left: 30px;">Same as Present Address</label>
             
                            </div>
                            <div class="col-lg-3 col-lg-offset-1">
                            </div>
                            <div class="col-lg-3 col-lg-offset-1">
                                <input type="radio" id="permanents_address" value="address" name="address" class="address"><label for="permanents_address" class="address"  style="margin-left: 20px;">Same as Permanent Address</label>
                            </div>
                         </div>
                            <a class="topage2" href="page2">Next</a>
                     </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </div> 
             
    </div>

</body>
<script type="text/javascript">
    $(document).ready(function(){
        $('#emergency_address').focus(function(){
            $('.address').css('display','inline');
        })
    })
</script>

</html>