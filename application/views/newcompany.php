
<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="favicon.ico">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>

    <!-- Optional theme -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-theme.min.css" >
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  
    <!-- Latest compiled and minified JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
   
    <!-- Datepicker -->
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->

<!--     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    <script src="<?php echo base_url() ?>assets/js/swal.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery-1.12.4.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery-ui.js"></script>
    <link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/jquery-ui.css">
</head>
<style type="text/css">
    body{
        background-color: #f4f4f4;
    }
    h1,h6{
        font-family: 'Roboto', sans-serif;
        text-align: center;
        text-transform: uppercase;
    }
    .form-control{
        margin-top: 5px;
    }
    .well{
        background-color: #FFF !important;
        background-image: none;
        border-radius: 0.5;
        box-shadow: 0 8px 10px 1px rgba(0,0,0,0.14), 0 3px 14px 2px rgba(0,0,0,0.12), 0 5px 5px -3px rgba(0,0,0,0.3);
    }
    input{
        border-color: #929292 !important;
    }
</style>
<body>
<div>
<h1>Company Information</h1>
<h6>This is for your new Company</h6>


<div class="container">
    <div class="row">
        <div class="col-lg-2">
        </div>
        <form id="form-company">
        <div class="col-lg-8 well">
            <div class="row">
               
            <div class="row">
                <div class="col-lg-12">
                    <input type="text" placeholder="Company name" id="company_name" name="company_name" required class="form-control">
                </div>
            </div>
             <div class="row">
                <div class="col-lg-12">
                    <input type="text" name="company_address" placeholder="Company address" id="company_address" required class="form-control">
                </div>
             </div>
             <div class="row">
                <div class="col-lg-6">
                    <input type="text" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="company_telephone" placeholder="Landline or mobile" id="company_telephone" required class="form-control">
                </div>
                <div class="col-lg-6">
                    <input type="text" name="company_fax" placeholder="Fax number" id="company_fax" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control">
                </div>
             </div>
             <div class="row">
                <div class="col-lg-12">
                    <input type="text" placeholder="Product lines" id="product_lines" name="product_lines" class="form-control">
                </div>
             </div>
             <div class="col-lg-6">
                 <h3>Company Classification</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <input id="assembly" value="Assembly" type="checkbox"><label for="assembly">Assembly</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                         <input type="checkbox" value="Manufacturing" id="manufacturing"><label for="manufacturing">Manufacturing</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                         <input type="checkbox" value="Maintenance" id="maintenance"><label for="maintenance">Maintenance</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                          <input type="checkbox" value="Sales/Marketing" id="marketing"><label for="marketing">Sales/Marketing</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                         <input type="checkbox" value="Service/Utility" id="service"><label for="service">Service/Utility</label>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-lg-8">
                         <input type="checkbox" value="Research and Development" id="research"><label for="research">Research and Development</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <input type="checkbox" value="IT Related" id="itrelated"><label for="itrelated">IT Related</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                       <input type="radio" class="other-company" id="other"><label for="other">Others</label>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-lg-6">
                       <input type="text" class="form-control" id="other_classification" name="other_classification" style="height: 23px; width: 250px; display: none;" placeholder="Please specify">
                    </div>
                </div>
             </div>

             <div class="col-lg-6">
                 <h3>Total Number of Employees</h3>
                 <div class="row">
                    <div class="col-lg-6">
                        <input type="radio" id="less_fifty" value="Less than 50" name="employee_numbers"> <label for="less_fifty">Less than 50</label>
                    </div>
                </div>
               <!--  <div class="row">
                    <div class="col-lg-6">
                        <label for="fifty_onehundred">From 50 to 100</label>
                        <input type="radio" id="fifty_onehundred" value="From 50 to 100" name="employee_numbers">

                    </div>
                </div> -->
                <div class="row">    
                    <div class="col-lg-6">

                        <input type="radio" id="fifty_onehundred" value="From 50 to 100" name="employee_numbers">
                        <label for="fifty_onehundred">From 50 to 100</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <input type="radio" id="more_onehundred" value="More than 100" name="employee_numbers"> <label for="more_onehundred">More than 100</label>
                    </div>
                </div>
             </div>

        </div>
        </form>
        <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-2"><button id="submit-company" class="btn btn-primary" style="text-align: center;">Submit</button></div>
            <div class="col-lg-5"></div>
        </div>
        </div>
   
        <div class="col-lg-2">
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#other').click(function(){
        $('#other_classification').css("display","inline-block");
    });
    var classification = [];
     $('input[type="checkbox"]').click(function(){
        if($(this).is(":checked")==true){
            classification.push($(this).val());
        }else{
             classification.pop($(this).val());
        }
    });
     

     $('#submit-company').click(function(e){
        e.preventDefault();
        var data = $('#form-company').serialize();
        // var fail_log = '';
        // console.log(data);return false;
        var fail = false;
        var other = $('#other_classification');
        if(!other.val()){
           
        }else{
            classification.push(other.val());
        }
        var name = '';
        $( 'body' ).find( 'input[type=text]' ).each(function(){
            if( ! $( this ).prop( 'required' )){

            } else {
                if ( ! $( this ).val() ) {
                    fail = true;
                    name = $( this ).attr( 'style', 'border: 1px solid red !important' );
                    // fail_log += name + " is required \n";
                }else{
                    name = $( this ).attr( 'style', 'border: 1px solid #ccc !important' );
                }

            }


        });
        
        if(!fail){
            $.ajax({
                url:'changeOjtStatusDifferentCompany',
                type: 'POST',
                data: data + "&classification="+classification,
                success: function(data){
                    location.replace('dashboard');
                }
            })   
        }
     });

</script>
</body>
</html>