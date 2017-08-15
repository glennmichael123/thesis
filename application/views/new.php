<!DOCTYPE html>
<html>
<head>
<style type="text/css">
    /*custom font*/
@import url(https://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {
    margin: 0;
    padding: 0;
}

html {
    height: 100%;
    background: #E9EBEE; /* fallback for old browsers */
    background: -webkit-linear-gradient(to left, #6441A5, #2a0845); /* Chrome 10-25, Safari 5.1-6 */
}

body {
    font-family: montserrat, arial, verdana;
    background: transparent;
}

/*form styles*/
#msform {
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
    box-sizing: border-box;
    width: 80%;
    margin: 0 10%;

    /*stacking fieldsets above each other*/
    position: relative;
}

/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
    display: none;
}

/*inputs*/
#msform input[type=text], input[type=date], input[type=email], input[type=password], select, #msform textarea {
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 10px;
    width: 100%;
    height: 50px;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 13px;
}

#msform input:focus, select:focus, #msform textarea:focus {
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

#msform .action-button:hover, #msform .action-button:focus {
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

#msform .action-button-previous:hover, #msform .action-button-previous:focus {
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
    z-index: -1; /*put it behind the numbers*/
}

#progressbar li:first-child:after {
    /*connector not needed before the first step*/
    content: none;
}

/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before, #progressbar li.active:after {
    background: #AAF200;
    color: white;
}

.choose-same-address{
    display: none;
}
label{
    cursor: pointer;
}
</style>
    <title></title>
</head>
<body>
    <!-- MultiStep Form -->
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form id="msform">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Personal Details</li>
                <li>Company Profile</li>
                <li>Email Verification</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Personal Details</h2>
               
                <input type="text" name="first_name" style="width: 40%; float: left;" id="first_name" placeholder="First name" class="form-control" required>
              <input type="text" style="width: 10%; margin-left: 10px; float: left;" name="middle_initial" id="middle_initial" placeholder="M.I" class="form-control" required>
                  <input type="text" name="last_name" style="width: 48%; margin-left: 10px; float: left;" id="last_name" placeholder="Last name" class="form-control" required>
               <input type="text" name="course" style="width: 48%; float: left;" placeholder="Course" id="course" class="form-control" required>
               <select name="year" id="year" style="width: 48%; float: left; margin-left: 40px;" class="form-control" required>
                     <option selected disabled>Year</option>
                        <option value="1st Year">1st Year</option>
                        <option value="2nd Year">2nd Year</option>
                       <option value="3rd Year">3rd Year</option>
                       <option value="4th Year">4th Year</option>
                      <option value="5th Year">5th Year</option>
                </select>
                 <select class="form-control" id="college" name="college">
                                                    <option selected disabled>Select college</option>
                                                    <option value="College of Computer Studies">College of Computer Studies</option>
                                                    <option value="College of Engineering and Architecture">College of Engineering and Architecture</option>
                                                    <option value="College of Engineering and Architecture">College of Nursing</option>
                                                    <option value="College of Education">College of Education</option>
                                                    <option value="College of Management, Business and Accoutancy">College of Management, Business and Accoutancy</option>
                                                    <option value="College of Art and Sciences">College of Art and Sciences</option>
                                                </select>

                <input type="text" name="present_address" placeholder="Present address" id="present_address" class="form-control" required>
                 <input type="text" name="permanent_address" placeholder="Permanent address" id="permanent_address" class="form-control" required>   
                   <input type="text" style="width: 48%; float: left;" name="number" placeholder="Phone or landline" id="number" class="form-control" required>  
                   <input type="email" style="width: 48%; float: left;  margin-left: 40px;" name="email" placeholder="Email address" id="number" class="form-control">                                   
                <input type="date" style="width: 48%; float: left;" placeholder="Date of birth" name="date_of_birth" class="form-control" id="date_of_birth" required>
                <input type="text" style="width: 48%; float: left;  margin-left: 40px;" name="age" placeholder="Age" style="margin-left: 10px;" class="form-control" id="age">
                <select class="form-control" style="width: 48%; float: left;" id="civil_status" name="civil_status" required> 
                         <option selected disabled>Status</option>
                         <option value="Single">Single</option>
                         <option value="Married">Married</option>
                                                      
                </select>
                 <select class="form-control" style="width: 48%; float: left;  margin-left: 40px;" id="blood_type" name="blood_type" required>
                                                      <option selected disabled>Blood type</option>
                                                      <option value="Type A">Type A</option>
                                                      <option value="Type B">Type B</option>
                                                      <option value="Type AB">Type AB</option>
                                                      <option value="Type O">Type O</option>
                                                      
                </select>
                 <input type="text" name="weight" style="width: 48%; float: left;" placeholder="Weight in kg" class="form-control" id="weight">
                
                <input type="text" name="height" placeholder="Height in cm" style="width: 48%; float: left;  margin-left: 40px;" class="form-control" id="age">
                <input type="text" name="religion" style="width: 48%; float: left;" placeholder="Religion" class="form-control" id="religion">
                 <input type="text" name="citizenship" placeholder="Citizenship" style="width: 48%; float: left;  margin-left: 40px; margin-bottom: 30px;" class="form-control" id="citizenship">
                    <h2 class="fs-title">Family Data</h2>

                 <input type="text" style="width: 48%; float:left;" name="fathers_name" placeholder="Father's name" id="fathers_name" class="form-control"> 
                  <input type="text" style="width: 48%; margin-left: 40px; float: left;" name="fathers_occupation" placeholder="Father's occupation" id="fathers_occupation" class="form-control">
                        <input type="text" style="width: 48%; float: left;" name="mothers_name" placeholder="Mother's name" id="mothers_name" class="form-control">  
                        <input type="text" style="width: 48%; margin-left: 40px; float:left;" name="mothers_occupation" placeholder="Mother's occupation" id="mothers_occupation" class="form-control">
                          <input type="text" name="parents_address" placeholder="Parent's Address" id="parents_address" class="form-control">
                          <span class="choose-same-address">
                               <input type="radio" name="same-address" id="same-present" style="float: left;"><label for="same-present" style="font-size: 11px; float:left;">Same as your present address</label>
                           <input type="radio" name="same-address" id="same-permanent" style="float: left; margin-left:50px;"><label for="same-permanent" style="font-size: 11px; float:left;">Same as your permanent address</label>
                           </span>
                <input type="text"  name="tel_no" placeholder="Landline or mobile" id="tel_no" class="form-control">
                <h2 class="fs-title">In case of emergency please contact</h2>
                <input type="text" style="width: 48%; float: left" name="guardian_name" placeholder="Full name" id="guardian_name" class="form-control">
                    <select class="form-control" style="width: 48%; float: left;  margin-left: 40px;" id="blood_type" name="blood_type" required>
                      <option selected disabled>Relationship</option>
                          <option value="Guardian">Guardian</option>
                             <option value="Father">Father</option>
                           <option value="Mother">Mother</option>
                                                                                                            
                </select>  

                   <input type="text" name="tel_no" placeholder="Telephone number" id="tel_no" class="form-control">
                   <input type="text" name="emergency_address" placeholder="Address" id="emergency_address" class="form-control">
                
                <input type="button" name="next" class="next action-button" value="Next"/>

               
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Company Information</h2>
                <input type="text" class="form-control" placeholder="Company name" id="company_name" name="company_name">
                 <input type="text" name="company_address" placeholder="Company address" id="company_address" class="form-control">
                 <input type="text" style="width: 48%; float: left" name="company_telephone" placeholder="Telephone number" id="company_telephone" class="form-control">
                 <input type="text" style="width: 48%; float: left; margin-left: 40px;" name="company_fax" placeholder="Fax number" id="company_fax" class="form-control">
                 <input type="text" class="form-control" placeholder="Product lines" id="product_lines" name="product_lines">
                 <h2 class="fs-title">Company Classification</h2>

                 <input id="assembly" type="checkbox"><label for="assembly">Assembly</label>&nbsp;&nbsp;
                 <input type="checkbox">Manufacturing&nbsp;&nbsp;
                 <input type="checkbox">Maintenance&nbsp;&nbsp;
                 <input type="checkbox">Sales/Marketing&nbsp;&nbsp;
                 <input type="checkbox">Service/Utility&nbsp;&nbsp;
                 <input type="checkbox">Research and Development&nbsp;&nbsp;
                 <input type="checkbox">IT Related&nbsp;&nbsp;<br>
                
                 <input type="radio" class="other-company" style="float: left; margin-top:20px; margin-left: 10px;"><span style="float: left;margin-top:18px; margin-bottom: 18px;">Others</span>
                 
                 <textarea style="height: 100px; display: none;" style="display: block;" placeholder="Please specify"></textarea>
                 <h2 class="fs-title">Total number of employees</h2>
                 <span style="display: block;">
                 <input type="radio" id="less_fifty" name="employee_number"><label>Less than 50</label>
                 <input type="radio" id="fifty_onehundred" name="employee_number"><label>From 50 to 100</label>
                 <input type="radio" id="more_onehundred" name="employee_number"><label ">More than 100</label>
                 </span>
                    
                
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Email Verification</h2>
                <h3 class="fs-title">Almost there!</h3>
                <p>An email verification link has been sent to your account. Please verify your email to finish the registration. </p>
                <input type="button"  name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="submit" name="submit" class="submit action-button" value="Submit"/>
            </fieldset>
        </form>
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

$(".next").click(function(){
    if(animating) return false;
    animating = true;
    
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    
    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    
    //show the next fieldset
    next_fs.show(); 
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = (now * 50)+"%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
            next_fs.css({'left': left, 'opacity': opacity});
        }, 
        duration: 800, 
        complete: function(){
            current_fs.hide();
            animating = false;
        }, 
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});

$(".previous").click(function(){
    if(animating) return false;
    animating = true;
    
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
    
    //de-activate current step on progressbar
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
    
    //show the previous fieldset
    previous_fs.show(); 
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            left = ((1-now) * 50)+"%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'left': left});
            previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
        }, 
        duration: 800, 
        complete: function(){
            current_fs.hide();
            animating = false;
        }, 
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});

$(".submit").click(function(){
    return false;
})
</script>
<script type="text/javascript">
    $('.other-company').click(function(){
        $('textarea').slideDown()
    });
</script>
<script type="text/javascript">
    $("#parents_address").focus(function(){
        $('.choose-same-address').show();
    });
   
   
</script>
<script type="text/javascript">
    $("#same-present").change(function(){
        var address = $("#present_address").val();
        
        $("#parents_address").val(address);
    });

      $("#same-permanent").change(function(){
        var address = $("#permanent_address").val();
        $("#parents_address").val(address);
    });
</script>
<script type="text/javascript">
    $("input").blur(function(){
        var data = $(this).val();
        if(data.length==0){
          $(this).val("Field is required");
          $(this).css("border-color","red");
        }else{
           
            $(this).css("border-color","green")
        }
    });
  $("input").focus(function(){
         if($(this).val()=='Field is required'){
            $(this).val("");
         }
         
    });
     $("select").blur(function(){
        var data = $(this).val();

        if(data == null){
          $(this).css("border-color","red");
        }else{
            $(this).css("border-color","green")
        }
    });
</script>
<script type="text/javascript">
    $(".submit").click(function(){
        var data = $("input").val();
        var dataselect = $("select").val();

</script>
