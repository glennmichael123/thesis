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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">
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
            height: 600px;

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
        input[type=checkbox],input[type=radio]{
            height: 20px;
            width: 20px;
            margin-top: 10px;
        }
        .fs-title{
            text-align: center;
            font-weight: bold;
        }
        .fs-subtitle {
            font-weight: normal;
            font-size: 13px;
            color: #666;
            margin-bottom: 20px;
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
        label {
            cursor: pointer;
            padding: 5px;
            font-family: 'Rajdhani', sans-serif;
            
        }
        .topage4{
            position: relative;
            top: 10px;
            font-size: 20px;
            border-radius: 5px;
            padding: 5px 20px 5px 20px;
            color:#FFFFFF;
            background: #800000;
            float: right;
       }
       .topage4:hover{
        text-decoration: none;
        color:#FFFFFF;
        background-color:#760404;
        float: right;
       }
       .topage3{
            position: relative;
            top: 10px;
            font-size: 20px;
            border-radius: 5px;
            padding: 5px 20px 5px 20px;
            color:#FFFFFF;
            background: #FFBA00;
            float: left;
       }
       .topage3:hover{
        text-decoration: none;
        color: #FFFFFF;
        background-color: #f5b301;
        float: left;
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
                    <div class="col-lg-10">
                    <div class="body">
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
                            <a class="topage3" href="page1">Previous</a>
                            <a class="topage4" href="page3">Next</a>
                     </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </div> 
             
    </div>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>

</script>


</html>