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
            border-color: #FFD700;
            border-radius: 15px;
        }
        
        .panel {
            border-color: #A55D35;
            margin-top: 40px;
            border-radius: 15px;
        }
        
        .panel-heading {
            border-color: #A55D35;
            background-color: #FFD700;
            height: 50px;
            border-radius: 15px 15px 0 0;
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
        
        .btn {
            border-radius: 0;
        }
        
        .btn-success {
            color: #57B257;
            background: #FFF !important;
            text-shadow: none !important;
        }
        
        .btn-success:hover,.btn-success:focus {
            background: #57B257 !important;
            color: #FFF;
            transition: 0.4s;
        }
        
        .btn-danger {
            color: #D54D49;
            background: #FFF;
            text-shadow: none !important;
        }
        
        .btn-danger:hover, .btn-danger:focus {
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
                            <div class="panel ">
                                <div class="panel-heading">
                                    <p style="color: #A55D35; text-align: center;">
                                        <label style="margin:0; padding: 0;">Rating</label>
                                    </p>
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
                                        <form method="post">
                                         
                                         <fieldset style="float: right;">
                                             <input tabindex="1" maxlength="1" type="text" name="enthusiasm" class="score">
                                             <a href="#" data-evaluation-type="a" data-toggle="modal" data-target="#1" class="clicky">

                                             <i class="fa fa-question-circle" aria-hidden="true"></i>
                                             </a>
                                             <br>
                                             <input tabindex="2"  maxlength="1" type="text" name="cooperation" class="score">  
                                             <a href="" data-evaluation-type="b"  data-toggle="modal" data-target="#1" class="clicky">
                                             <i class="fa fa-question-circle" aria-hidden="true"></i>
                                             </a><br>
                                             <input tabindex="3" maxlength="1" type="text" name="adaptability" class="score">
                                                   <a href="" data-evaluation-type="c" data-toggle="modal" data-target="#1" class="clicky"><i class="fa fa-question-circle" aria-hidden="true"></i></a>
                                                 
                                             </i><br>
                                             <input tabindex="4" maxlength="1" type="text" name="industriousness" class="score"> 
                                             <a href="" data-evaluation-type="d" data-toggle="modal" data-target="#1" class="clicky">
                                             <i class="fa fa-question-circle" aria-hidden="true"></i>
                                             </a>
                                             <br>
                                             <input tabindex="5" maxlength="1" type="text" name="responsibility" class="score">

                                               <a href="" data-evaluation-type="e"  data-toggle="modal" data-target="#1" class="clicky"><i class="fa fa-question-circle" aria-hidden="true"></i>
                                               </a><br>
                                             <input tabindex="6"  maxlength="1" type="text" name="attentiveness" class="score">
                                              <a href="" data-evaluation-type="f" data-toggle="modal" data-target="#1" class="clicky">

                                              <i class="fa fa-question-circle" aria-hidden="true"></i>
                                              </a><br>
                                             <input tabindex="7" maxlength="1" type="text" name="grooming" class="score">
                                             <a href="" data-evaluation-type="g"  data-toggle="modal" data-target="#1" class="clicky">

                                                  <i class="fa fa-question-circle" aria-hidden="true"></i>
                                             </a>
                                             
                                             <br>
                                             <input tabindex="8" maxlength="1" type="text" name="attendance" class="score">                           
                                                <a href="" data-evaluation-type="h"  data-toggle="modal" data-target="#1" class="clicky">

                                                <i class="fa fa-question-circle" aria-hidden="true"></i>

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
                                                <input tabindex="9" maxlength="1" type="text" name="quality" class="score">
                                                    <a href="#" data-evaluation-type="a_two" data-toggle="modal" data-target="#1" class="clicky">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                                <input tabindex="10" maxlength="1" type="text" name="quantity" class="score">
                                                     <a href="#" data-evaluation-type="b_two" data-toggle="modal" data-target="#1" class="clicky">
                                                      <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                                <input tabindex="11" maxlength="1" type="text" name="dependability" class="score">
                                                    <a href="#" data-evaluation-type="c_two" data-toggle="modal" data-target="#1" class="clicky"> 
                                                        <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                                <input tabindex="12" maxlength="1" type="text" name="comprehension" class="score">
                                                    <a href="#" data-evaluation-type="d_two" data-toggle="modal" data-target="#1" class="clicky">
                                                     <i class="fa fa-question-circle"></i>
                                                    </a>
                                                <br>
                                                <input tabindex="13" maxlength="1" type="text" name="safety" class="score">
                                                <a href="#" data-evaluation-type="e_two" data-toggle="modal" data-target="#1" class="clicky">
                                                    <i class="fa fa-question-circle"></i>
                                                </a>
                                                <br>
                                                <input tabindex="14" maxlength="1" type="text" name="waste" class="score">
                                                    <a href="#" data-evaluation-type="f_two" data-toggle="modal" data-target="#1" class="clicky"><i class="fa fa-question-circle"></i></a>
                                                <br>
                                            </fieldset>
                                         </div>

                                         <?php echo '<pre>'; var_dump($_POST); echo '</pre>';    ?>

                                    </div>
                                   
                                </ol>
                                <div class="row">
                                    <div class="col-lg-6">
                                     <label class="pointy">OVERALL TOTAL</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset style="float: right;">
                                            <input type="text" name="" class="score" style="margin-right: 25px; margin-top: 20px;" readonly> 
                                         </fieldset>
                                    </div>
                                </div>
                                <label for="remark" style="margin:0; padding: 0;" class="pointy">REMARKS</label>
                              
                                    <textarea tabindex="15" name="remarks" id="remark" class="form-control"></textarea>
                                    <div class="allow">
                                         <input type="checkbox" id="allow-view" name="allow_view" value="true"><label for="allow-view" style="color: black; font-size: 14px;">Allow OJT to view evaluation</label>

                                    </div>
                                   
                                    <p style="text-align: center; padding-top: 30px;">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <button type="button" class="btn btn-danger">Cancel</button>
                                    </p>
                                </form>

                            </div>
                        </div>
              
                    </div>
                </div>
            </div>

        </div>

        <div class="modal fade bs-example-modal-lg" tabindex="-1" id="1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">

                <div class="modal-content">
                      <div class="modal-header">  
                          <h3 class="evaluation-title"></h3>
                    </div>
                    <div class="modal-body">

                        
                        <h4 class="evaluation-description"></h4>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>  
                </div>
            </div>
        </div>

    
       
</body>

<script type="text/javascript">
    $(document).ready(function() {
        $('#login-trigger').click(function() {
            $(this).next('#login-content').slideToggle();
            $(this).toggleClass('active');
            if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
            else $(this).find('span').html('&#x25BC;')
        })
    });
</script>
<script type="text/javascript">
    $('.clicky').click(function(){
        var type = $(this).data('evaluation-type');

        if(type == 'a'){
            $('.evaluation-title').html('Enthusiasm / Eagerness to Learn');
            $('.evaluation-description').html('Confident to learn new tasks / assignments.');
        }else if(type=='b'){
            $('.evaluation-title').html('Cooperation and Willingness');
            $('.evaluation-description').html('Readiness to accept and carry out instructions and assignments; works well with others; shows support and concerns for co-workers.');
        }else if(type == 'c'){
            $('.evaluation-title').html('Adaptability and Sociability');
            $('.evaluation-description').html('Ability to adjust to a new environment and be at ease with others; ability to deal with people of different levels/ positions; amiable and friendly with others and knows how to respect authority.');
        }else if(type=='d'){
            $('.evaluation-title').html('Industriousness and Initiative');
            $('.evaluation-description').html('Constant worker / keeps himself busy with initiative; does not take unauthorized breaks; initiates action when the situation calls for it.');
        }else if (type == 'e'){
            $('.evaluation-title').html('Sense of Responsibility');
            $('.evaluation-description').html('Applies sound judgement / decision making.');
        }else if(type=='f'){
             $('.evaluation-title').html('Attentiveness / Attention');
             $('.evaluation-description').html('Focuses on his/her work / gives full attention to what he/she is doing; ability to handle unexpected problems; carry-out instructions / assignments at once.');
        }else if(type == 'g'){
            $('.evaluation-title').html('Personal Grooming');
            $('.evaluation-description').html('Maintains proper way of dressing marked by proper conduct, tidiness, and well-grooming; lively and well-spirited during at work and at rest.');
        }else if(type=='h'){
              $('.evaluation-title').html('Attendance');
              $('.evaluation-description').html('Reports to work regurlarly and on time and uses time wisely and productively.');
        }else if(type=='a_two'){
              $('.evaluation-title').html('Quality of work');
              $('.evaluation-description').html('Thoroughness, accuracy, neatness and effectiveness of output, meets required standards and even exceeds expected results.');
        }else if(type=='b_two'){
                $('.evaluation-title').html('Quantity of Work');
              $('.evaluation-description').html('Able to complete work within the alloted time, finishes work on schedule and maximizes use of tme.');
        }else if(type=='c_two'){
              $('.evaluation-title').html('Dependability');
              $('.evaluation-description').html('Ability to work with minimum supervision, does not need constant follow-up.');
        }else if(type=='d_two'){
              $('.evaluation-title').html('Comprehension');
              $('.evaluation-description').html('Understand instructions at once with almost no clarification.');
        }else if(type=='e_two'){
              $('.evaluation-title').html('Safety Consciousness');
              $('.evaluation-description').html('Carefully takes precaution and observe visible hazards; follow safety rules and reads instructions prior to working.');
        }else if(type=='f_two'){
              $('.evaluation-title').html('Waste Consciousness');
              $('.evaluation-description').html('Shows concerns of company facilities; handles tools and equipment carefully; keeps equipment, tools, materials and work area clean and well-kept; proper use and disposal of materials.');
        }
    }); 
</script>
<script type="text/javascript">
    $('input').change(function(){
        var rating = $(this).val();
        if(rating > 5 || rating < 1){
           
            $(this).val('');
        }
    });
</script>
</html>