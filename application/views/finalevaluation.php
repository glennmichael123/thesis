<!DOCTYPE html>
<html>
<!-- <?php echo $stud_username ?> -->
<head>
    <link rel="icon" href="favicon.ico">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="<?php echo base_url() ?>assets/js/swal.js"></script>
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
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
            border-bottom: solid;
            border-bottom-color: #000000;
            background-color: #F4F4F4;


        }
        input:focus{
            outline: none;
}
        }
        .list{
            margin-top: 38px;
            text-align: center;
            color: #000000;
        }
        ol,ul,h3,h1{
            color: #000000;
        }

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

    <title></title>

</head>

<body>
    <div class="page-wrap">
        <div class="content">
            <form method="post" id="formy2"  name="fin_ev">
            <div class="container">
                 <div class="col-lg-2"></div>
                <div class="col-lg-8">

                <header>
                    <h1>ON-THE-JOB TRAINING (OJT)</h1>
                    <h3>PERFORMANCE EVALUATION REPORT</h3>
                </header>
                <div class="partlist">
                    <label>Part I (To be filled by the student trainee)</label>
                </div>

                <div class="row">
                    <div class="col-lg-6" style="margin-top: 20px;">
                        <label class="labels">Name:</label>
                        <input type="text" name="fname" id="fname"><br>
                        <label class="labels">Course:</label> 
                        <input type="text" name="fcourse" id="fcourse"><br>
                        <label class="labels">School:</label>
                        <input type="text" name="fschool" id="fschool"><br>
                        <label class="labels">City Address:</label>
                        <input type="text" name="fcity" id="fcity"><br>
                        <label class="labels">Permanent Address:</label>
                        <input type="text" name="fpermanent" id="fpermanent">
                        <label class="labels">No. of Training Required:</label>
                        <input type="text" name="frequired" id="frequired">
                    </div>
                    <div class="col-lg-3" style="margin-top: 20px">
                        <div class="blocking">
                            <label class="labels">Age:</label>
                            <input type="text" name="fage" id="fage"><br>
                            <label class="labels">Major:</label>
                            <input type="text" name="fmajor" id="fmajor"><br>
                        </div>
                    </div>
                    <div class="col-lg-3" style="margin-top: 20px">
                        <label class="labels">Sex:</label>
                        <input type="text" name="fsex" id="fsex">
                    </div>
                </div>
                <div class="partlist">
                    <label>Part II (To be filled by the company representative)</label>
                </div>
                <div class="row">
                    <div class=col-lg-12 style="margin-top: 20px;">
                        <label class="labels">Name of the Company:</label>
                        <input type="text" name="fcompany" id="fcompany">
                        <label class="labels">Division Assigned:</label>
                        <input type="text" name="fdivision" id="fdivision">
                        <label class="labels">Field of Training:</label>
                        <input type="text" name="ffield" id="ffield">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <label class="labels">Inclusive Dates of Training: From:</label>
                        <input type="text" name="fdates" id="fdates">
                        <label class="labels">Total Number of Hours Rendered:</label>
                        <input type="text" name="ftotal" id="ftotal">
                    </div>
                    <div class="col-lg-4">
                        <label class="labels">To:</label>
                        <input type="text" name="fdatesto" id="fdatesto">
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
                            <li class="list"><input type="text" name="fquality" id="fquality"></li>
                            <li class="list"><input type="text" name="fquality2" id="fquality2"></li>
                            <li class="list"><input type="text" name="fdependability" id="fdependability"></li>
                            <li class="list"><input type="text" name="fattendance" id="fattendance"></li>
                            <li class="list"><input type="text" name="fcooperation" id="fcooperation"></li>
                            <li class="list"><input type="text" name="fjudgement" id="fjudgement"></li>
                            <li class="list"><input type="text" name="fpersonality" id="fpersonality"></li>
                        </ul>
                    </div>
                </div>
                <div class="partlist">
                    <label>RECOMMENDATION:</label>
                </div>
              
                
                    <p style="margin-top: 10px; text-align: center;"><button type="submit" class="btn btn-primary" id="btn_submit" >Submit</button>
                    <button class="btn btn-danger">Cancel</button></p>
             </div>
            <div class="col-lg-2"></div>  
            </div>
        </form>
         </div>
    </div>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
  $('#btn_submit').click(function(){ 
        var data = $('#formy2').serialize();
       
        $.ajax({
            url:"<?php echo base_url()?>main/insert_final_eval/<?php echo $stud_username;?>",
            type:"POST",
            data:data,
            success:function(data){
                console.log(data);
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
</body>

</script>


</html>