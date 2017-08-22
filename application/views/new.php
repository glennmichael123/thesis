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
    background: #E9EBEE; /* fallback for old browsers */
    background: -webkit-linear-gradient(to left, #6441A5, #2a0845); /* Chrome 10-25, Safari 5.1-6 */
}

body {
    font-family: montserrat, arial, verdana;
    background: transparent;
}

/*form styles*/
#msform ul li,h2,button[type="button"]{
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
#msform .row{
  margin-bottom: 10px;
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
    width: 100%;
    height: 50px;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 13px;
}

#msform input:focus, select:focus, #msform textareafocus {
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
#msform #to-next-page{
  margin-left: 200px;
}
</style>
    <title></title>
</head>
<body>
    <!-- MultiStep Form -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form id="msform">
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

                               <input type="text" name="first_name" id="first_name" placeholder="First name"  required>
                                  
                           </div>
                           <div class="col-lg-2">
                              <input type="text" name="middle_initial" id="middle_initial" placeholder="M.I" required>
                              
                           </div>
                           <div class="col-lg-5">
                              <input type="text" name="last_name" id="last_name" placeholder="Last name" required> 
                           </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <input type="text" name="course" placeholder="Course" id="course" required>
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
                            <select id="college" name="college">
                              <option selected disabled>Select college</option>
                              <option value="College of Computer Studies">College of Computer Studies</option>
                              <option value="College of Engineering and Architecture">College of Engineering and Architecture</option>
                              <option value="College of Engineering and Architecture">College of Nursing</option>
                              <option value="College of Education">College of Education</option>
                              <option value="College of Management, Business and Accoutancy">College of Management, Business and Accoutancy</option>
                              <option value="College of Art and Sciences">College of Art and Sciences</option>
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
                        <button type="button" name="next" id="to-next-page" class="next action-button">Next <i class="fa fa-step-forward" aria-hidden="true"></i></button>
                    
                </fieldset>
                <fieldset>
                    <input type="button"  name="previous" class="previous action-button-previous" value="Previous"/>  
                    <input type="Submit" name="next" class="next action-button" value="Submit"/>
                </fieldset>
                <fieldset>
                   
                    <input type="button"  name="previous" class="previous action-button-previous" value="Previous"/>
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

$(".next").click(function(){
    if(animating) return false;
    animating = true;
    var number = $('#number').val();
  

    
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    
    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    


      next_fs.show(); 
    //show the next fieldset
    
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
      });

</script>
<script type="text/javascript">
  $('#number').blur(function(){
    var number = $("#number").val();
    

  });
</script>