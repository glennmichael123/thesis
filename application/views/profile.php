<!DOCTYPE html>
  <html>
    <head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="http://[::1]/thesis/assets/js/swal.js"></script>
      <!-- Optional theme -->
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
       <!-- Compiled and minified JavaScript -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </head>
    <style type="text/css">
     #wrapper{
        margin-top: 50px;
     }
     .left{
        
     }
     .name{
        font-size: 1.5em;
        text-align: center;
     }
     .edit-btn{
        position: absolute;
        top: 70px;
        left: 250px;
       

     }
     .pulse-button {
        position: relative;
        height: 75px;
        border: none;
        box-shadow: 0 0 0 0 rgba(232, 76, 61, 0.7);
        border-radius: 50%;
        background-color: #e84c3d;
        color: white;
        background-size:cover;
        background-repeat: no-repeat;
        cursor: pointer;
        -webkit-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
        -moz-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
        -ms-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
        animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
    }
    .pulse-button:hover 
    {
        -webkit-animation: none;-moz-animation: none;-ms-animation: none;animation: none;
    }
        @-webkit-keyframes pulse {to {box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);}}
        @-moz-keyframes pulse {to {box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);}}
        @-ms-keyframes pulse {to {box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);}}
        @keyframes pulse {to {box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);}}
    .card-panel{
        padding: 0px !important;
        padding-top: 20px !important;
    }
    a.collection-item{
        text-decoration: none;
    }
    #personal-information,#company-information{
        margin-top: -23px;

    }
    #company-information,#evaluations{
        display: none;
        
    }
    .collection .collection-item.active {
    background-color: #c62828;
    color: #eafaf9;
    border-left: 5px solid #ffd600;
    }
    .collection a.collection-item {
    display: block;
    -webkit-transition: .25s;
    transition: .25s;
    color: #757575;
    }
    .print{
        font-size: 1.3em;
    }

      

    </style>
    <body>
      <div id="wrapper">
              <div class="row">
                  <div class="col l3 left">
                    <div class="card-panel z-depth-3">
                        <div class="card-image">
                          <div class="profile-image">
                            <p style="text-align: center;">
                            <?php if($personalDetails[0]['image_id'] == '<i class="fa fa-user-circle fa-5x" style="font-size: 150px;" aria-hidden="true"></i>'):?>
                            <?php echo $personalDetails[0]['image_id'];?>
                            <img class="img-circle" id="img_preview" src="" style="display: none; height: 100px; width: 150px;">
                            <?php else:?>
                            <img id="img_preview" src="<?php echo base_url().$personalDetails[0]['image_id']?>" class="img-circle" style="height: 180px; width: 200px;">
                            <?php endif; ?>
                            </p>
                           </div>
                           <div class="profile-name">
                             <div class="name"><?php echo $personalDetails[0]['first_name']." ".$personalDetails[0]['middle_initial'].".".$personalDetails[0]['last_name'];?>  
                           </div>
                           </div>
                           <div class="edit-btn">
                           <a class="btn-floating btn-small waves-effect waves-light red hoverable show-profilepic-options"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                           </div>
                           <div class="change-photo" style="margin-top: 10px; display: none;">
                                        <!-- browse -->
                                        <p style="text-align: center;">
                                        <button class="btn pulse-button click-photo btn-md" id="btn-browse"><i class="fa fa-picture-o" aria-hidden="true" style="text-align: center;"></i></button>
                                        <button class="btn pulse-button btn-md"><i class="fa fa-camera" aria-hidden="true" style="text-align: center;"></i></button>
                                        </p>
                                    </div>
                                   
                                <form action="saveImage" method="POST" enctype="multipart/form-data">
                                    <input class="browse-photo" type="file" accept="image/*" onchange="previewFile()" name="files" style="display: none;height: 180px; width: 200px; ">


                                      <p style="text-align: center"><div class="saveCancel" style="margin-top: 15px; display: none;">
                                        <button type="submit" class="btn btn-save waves-effect waves-light" id="saveBrowse" name="saveBrowse">Save</button>
                                        <button type="button" class="btn btn-cancel btn-md waves-effect waves-light" id="cancelBrowse">Cancel</button></p>
                                    </div>
                                </form> 
                        </div>
                        <div class="card-content">
                           <div class="side-menu">
                                  <div class="collection">
                                    <a href="dashboard" class="collection-item" id="first"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
                                    <a href="#!" class="collection-item active" id="second"><i class="fa fa-user" aria-hidden="true"></i> Personal Information</a>
                                    <a href="#!" class="collection-item" id="third"><i class="fa fa-building" aria-hidden="true"></i> Company Information</a>
                                    <a href="#!" class="collection-item" id="fourth"><i class="fa fa-star" aria-hidden="true"></i> Evaluation</a>
                                  </div>
                           </div>
                        </div>
                    </div>              
                  </div>
                    <div class="col l9">
                    <div id="personal-information">
                        <div class="card z-depth-3">
                            <h1 class="center-align" style="padding: 20px;">Personal Information<span style="float: right;"><a class="btn-floating btn-small waves-effect waves-light #0091ea light-blue accent-4 hoverable btn-edit-personal" id="btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></span></h1>
                            <div class="card-content">
                                <form id="personal-details-user">
                                    <div class="row">
                                        <div class="col l10">
                                            <div class="input-field">
                                                <label>Course</label>
                                                <input type="text" name="profile_course" value="<?php echo $personalDetails[0]['course']?>" readonly class="personal-info form-control" readonly="true" class="validate">
                                            </div>
                                        </div>
                                        <div class="col l2">
                                            <div class="input-field">
                                                <label>Year</label>
                                                <input type="text" name="profile_year" value="<?php echo $personalDetails[0]['year']?>" readonly class="personal-info form-control" class="validate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                         <div class="col l6">
                                            <div class="input-field">
                                                <label class="labels">College:</label>
                                <input type="text" name="profile_college" value="<?php echo $personalDetails[0]['college']?>" readonly class="personal-info form-control" class="validate">
                                            </div>
                                        </div>
                                        <div class="col l6">
                                            <div class="input-field">
                                                 <label class="labels">Email Address:</label>
                               <input type="text" name="profile_email" value="<?php echo $personalDetails[0]['email_address'] ?>" readonly class="personal-info form-control" class="validate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                         <div class="col l10">
                                            <div class="input-field">
                                                <label class="labels">Present Address:</label>
                                <input type="text" name="profile_present_address" value="<?php echo $personalDetails[0]['present_address']?>" readonly class="personal-info form-control" class="validate">
                                            </div>
                                        </div>
                                        <div class="col l2">
                                            <div class="input-field">
                                                 <label class="labels">Age:</label>
                               <input type="text" name="profile_age" value="<?php echo $personalDetails[0]['age'] ?>" readonly class="personal-info form-control" class="validate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                         <div class="col l10">
                                            <div class="input-field">
                                                <label class="labels">Permanent Address:</label>
                                <input type="text" name="profile_permanent_address" value="<?php echo $personalDetails[0]['permanent_address']?>" readonly class="personal-info form-control" class="validate">
                                            </div>
                                        </div>
                                        <div class="col l2">
                                            <div class="input-field">
                                                 <label class="labels">Blood Type:</label>
                               <input type="text" name="profile_blood" value="<?php echo $personalDetails[0]['blood_type'] ?>" readonly class="personal-info form-control" class="validate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                         <div class="col l10">
                                            <div class="input-field">
                                                <label class="labels">Phone or Landline:</label>
                                  <input type="text" name="profile_contact_number" value="<?php echo $personalDetails[0]['contact_number']?>" readonly class="personal-info form-control" class="validate">
                                            </div>
                                        </div>
                                        <div class="col l2">
                                            <div class="input-field">
                                                 <label class="labels">Height in Cm:</label>
                               <input type="text" name="profile_height" value="<?php echo $personalDetails[0]['height'] ?>" readonly class="personal-info form-control" class="validate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                         <div class="col l8">
                                            <div class="input-field">
                                                 <label class="labels">Date of Birth:</label>
                                  <input type="text" name="profile_birth" value="<?php echo $personalDetails[0]['date_of_birth'] ?>" readonly class="personal-info form-control" class="validate">
                                            </div>
                                        </div>
                                        <div class="col l4">
                                            <div class="input-field">
                                                 <label class="labels">Citizenship:</label>
                               <input type="text" name="profile_citizenship" value="<?php echo $personalDetails[0]['citizenship'] ?>" readonly class="personal-info form-control" class="validate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                         <div class="col l4">
                                            <div class="input-field">
                                                 <label class="labels">Status:</label>
                                  <input type="text" name="profile_marital" value="<?php echo $personalDetails[0]['marital_status']  ?>" readonly class="personal-info form-control" class="validate">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                         <div class="col l4">
                                            <div class="input-field">
                                                 <label class="labels">Weight:</label>
                                  <input type="text" name="profile_weight" value="<?php echo $personalDetails[0]['weight'] ?>" readonly class="personal-info form-control" class="validate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col l4">
                                            <div class="input-field">
                                                 <label class="labels">Religion:</label>
                                  <input type="text" name="profile_religion" value="<?php echo $personalDetails[0]['religion'] ?>" readonly class="personal-info form-control" class="validate">
                                            </div>
                                        </div>
                                    </div>
                                    <p style="text-align: center; margin-top: 10px;">
                               <button class="btn btn-primary bt #0d47a1 blue darken-4" id="save-personal-details" style="display: none" type="submit">Save Changes</button>
                               <button class="btn btn-danger bt #b71c1c red darken-4" id="cancel" style="display: none;" type="button">Cancel</button>
                           </p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="family-information">
                        <div class="card z-depth-3">
                            <h1 class="center-align" style="padding: 20px;">Family Data <span style="float: right;"><a class="btn-floating btn-small waves-effect waves-light #0091ea light-blue accent-4 hoverable" id="btn-edit1"><i class="fa fa-pencil" aria-hidden="true"></i></a></span></h1>
                        <div class="card-content">
                            <form id="family-details-user">
                                <div class="row">
                                    <div class="col l6">
                                        <div class="input-field">
                                            <label class="labels">Father's Name:</label>
                                      <input type="text" name="profile-father-name" value="<?php echo $familydetails->fathers_name; ?>" readonly class="family-info form-control validate">
                                        </div>
                                    </div>
                                    <div class="col l6">
                                        <div class="input-field">
                                            <label class="labels">Father's Occupation:</label>
                                   <input type="text" name="profile-father-occupation" value="<?php echo $familydetails->fathers_occupation; ?>" readonly class="family-info form-control validate">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col l6">
                                        <div class="input-field">
                                            <label class="labels">Mother's Name:</label>
                                      <input type="text" name="profile-mother-name" value="<?php echo $familydetails->mothers_name; ?>" readonly class="family-info form-control validate">
                                        </div>
                                    </div>
                                    <div class="col l6">
                                        <div class="input-field">
                                            <label class="labels">Mother's Occupation:</label>
                                   <input type="text" name="profile-mother-occupation" value="<?php echo $familydetails->mothers_occupation; ?>" readonly class="family-info form-control validate">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col l12">
                                        <div class="input-field">
                                            <label class="labels">Parent's Address:</label>
                                    <input type="text" name="profile-parent-address" value="<?php echo $familydetails->parents_address; ?>" readonly class="family-info form-control validate">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col l14">
                                        <div class="input-field">
                                            <label class="labels">Landline or Mobile:</label>
                                    <input type="text" name="profile-contact-number" value="<?php echo $familydetails->contact_number; ?>" readonly class="family-info form-control validate">
                                        </div>
                                    </div>
                                </div>
                                <p style="text-align: center; margin-top: 10px;">
                               <button class="btn btn-primary bts #0d47a1 blue darken-4" id="save-family-details" style="display: none" type="submit">Save Changes</button>

                               <button class="btn btn-danger bts #b71c1c red darken-4" id="cancels" style="display: none;" type="button">Cancel</button>

                           </p>
                            </form>
                        </div>
                        </div>
                    </div>
                     <div id="company-information">
                         <div class="card z-depth-3">
                            <h1 class="center-align" style="padding: 20px;">Company Information<span style="float: right;"><a class="btn-floating btn-small waves-effect waves-light#0091ea light-blue accent-4 hoverable" id="btn-edit2"><i class="fa fa-pencil" aria-hidden="true"></i></a></span></h1>
                         <div class="card-content">
                             <form id="company-information-user">
                                 <div class="row">
                                     <div class="col l8">
                                         <div class="input-field">
                                              <label class="labels">Company Name:</label>
                                  <input type="text" name="profile_company_name" value="<?php echo $companyInformation->company_name; ?>" readonly class="company-info form-control validate">
                                         </div>
                                     </div>
                                     <div class="col l4">
                                         <div class="input-field">
                                               <label class="labels">Product Lines:</label>
                                <input type="text" name="profile_product_lines" value="<?php echo $companyInformation->product_lines; ?>" readonly class="company-info form-control validate">
                                         </div>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col l8">
                                         <div class="input-field">
                                              <label class="labels">Company Address:</label>
                                  <input type="text" name="profile_company_address" value="<?php echo $companyInformation->company_address; ?>" readonly class="company-info form-control validate">
                                         </div>
                                     </div>
                                     <div class="col l4">
                                         <div class="input-field">
                                             <label class="labels">Fax Number:</label>
                               <input type="text" name="profile_fax_number" value="<?php echo $companyInformation->fax_number; ?>" readonly class="company-info form-control validate">
                                         </div>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col l4">
                                         <div class="input-field">
                                             <label class="labels">Telephone Number:</label>
                                <input type="text" name="profile_telephone_number" value="<?php echo $companyInformation->contact_number; ?>" readonly class="company-info form-contro validatel">
                                         </div>
                                     </div>
                                 </div>
                                 <?php 
                                    $array_company = explode(',', $companyInformation->company_classification);
                                 ?>
                                 <h4 class="center-align" style="padding: 20px;">Company Classification</h4>
                                 <div class="row">
                                     <div class="col l3">
                                         <input id="assembly" <?php echo(in_array('Assembly', $array_company)) ? 'checked' : '' ?> disabled value="Assembly" type="checkbox" ><label class="labels" for="assembly" ">Assembly</label>
                                     </div>
                                     <div class="col l3">
                                         <input type="checkbox" <?php echo(in_array('Manufacturing', $array_company)) ? 'checked' : '' ?> disabled value="Manufacturing" id="manufacturing"><label class="labels" for="Manufacturing">Manufacturing</label>
                                     </div>
                                     <div class="col l3">
                                         <input type="checkbox" <?php echo(in_array('Maintenance', $array_company)) ? 'checked' : '' ?> disabled value="Maintenance" id="maintenance"><label class="labels" for="maintenance">Maintenance</label>
                                     </div>
                                     <div class="col l3">
                                         <input type="checkbox" <?php echo(in_array('Sales/Marketing', $array_company)) ? 'checked' : '' ?> disabled value="Sales/Marketing" id="marketing"><label class="labels" for="marketing">Sales/Marketing</label>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col l3">
                                         <input type="checkbox" <?php echo(in_array('Service/Utility', $array_company)) ? 'checked' : '' ?> disabled value="Service/Utility" id="service"><label class="labels" for="service">Service/Utility</label>
                                     </div>
                                     <div class="col l3">
                                         <input type="checkbox" <?php echo(in_array('Research and Development', $array_company)) ? 'checked' : '' ?> disabled value="Research and Development" id="research"><label class="labels" for="research">Research and Development</label>
                                     </div>
                                     <div class="col l3">
                                         <input type="checkbox" <?php echo(in_array('IT Related', $array_company)) ? 'checked' : '' ?> disabled value="IT Related" id="itrelated"><label class="labels" for="itrelated">IT Related</label>
                                     </div>
                                     <div class="col l3">
                                         <input type="radio" class="other-company" disabled id="other"><label class="labels" for="other">Others</label>
                               <input type="text" id="other_classification" name="other_classification" style="height: 30px; width: 250px; display: none;" placeholder="Please specify">
                                     </div>
                                 </div>
                                <h4 class="center-align" style="padding: 20px;">Total Number of Employees</h4>
                                <div class="row">
                                    <div class="col l2"></div>
                                    <div class="col l3">
                                         <input type="radio" <?php echo ($companyInformation->number_of_employees == 'Less than 50') ? 'checked' : '' ?> id="less_fifty" value="Less than 50" disabled name="employee_numbers"><label class="labels" for="less_fifty">Less than 50</label>
                                    </div>
                                     <div class="col l3">
                                        <input type="radio" <?php echo ($companyInformation->number_of_employees == 'From 50 to 100') ? 'checked' : '' ?> id="fifty_onehundred" value="From 50 to 100" disabled name="employee_numbers"><label class="labels"for="fifty_onehundred">From 50 to 100</label>
                                    </div>
                                     <div class="col l3">
                                        <input type="radio" id="more_onehundred" <?php echo ($companyInformation->number_of_employees == 'More than 100') ? 'checked' : '' ?> value="More than 100" disabled name="employee_numbers"><label class="labels"for="more_onehundred">More than 100</label>
                                    </div>
                                </div>
                                <p style="text-align: center; margin-top: 10px;">
                               <button class="btn btn-primary btss #0d47a1 blue darken-4" style="display: none" id="save-company-information" type="submit">Save Changes</button>
                               <button class="btn btn-danger btss #b71c1c red darken-4" id="cancelss" style="display: none;" type="button">Cancel</button>
                        </p>
                             </form>
                         </div>
                         </div>
                     </div>
                     <div id="evaluations">
                         <div class="card z-depth-3">
                             <div class="card-tabs">
                                <ul class="tabs tabs-fixed-width">
                                    <li class="tab"><a class="active" href="#mid" style="text-decoration: none;">Midterm</a></li>
                                    <li class="tab"><a href="#final" style="text-decoration: none;">Final</a></li>
                                </ul>
                             </div>
                             <div class="card-content grey lighten-4">
                                 <div id="mid">
                                     <h4 class="center-align" style="text-transform: uppercase; font-weight: bold;">Midterm Evaluation</h4>
                                     <?php if(empty($midterm_evaluation->username)):?>
                                <h4 style="color: #000; text-align: center; margin-top: 50px;">You have not been evaluated yet</h4>
                            <?php else:?>
                            <?php if($midterm_evaluation->allow_view == 0):?>
                                <h4 style="color: #000; text-align: center; margin-top: 50px;">Your supervisor did not allow you to view your evaluation.</h4>
                            <?php else:?>
                                     <h6 style="font-size: 2.2em;">WORK ATTITUDE(<div class="badge">40</div> points)</h6>
                                     <form method="post" id="formy"  name="mid_ev">
                                         <div class="row">
                                            <div class="col l10">
                                              <p class="print">a.Enthusiasm / Eagerness to Learn</p>  
                                            </div>
                                            <div class="col l2">
                                                <input tabindex="1" maxlength="1" value="<?php echo $midterm_evaluation->enthusiasm; ?>" type="text" name="enthusiasm" class="score" readonly style="height: 1rem;">
                                            </div> 
                                         </div>
                                         <div class="row">
                                            <div class="col l10">
                                              <p class="print">b.Cooperation and Willingness</p>  
                                            </div>
                                            <div class="col l2">
                                                <input tabindex="2" value="<?php echo $midterm_evaluation->cooperation; ?>" maxlength="1" type="text" name="cooperation" class="score" readonly style="height: 1rem;">
                                            </div> 
                                         </div>
                                          <div class="row">
                                            <div class="col l10">
                                              <p class="print">c.Adaptability and Sociability</p>  
                                            </div>
                                            <div class="col l2">
                                                <input tabindex="3" maxlength="1" value="<?php echo $midterm_evaluation->adaptability; ?>" type="text" name="adaptability" class="score" readonly style="height: 1rem;">
                                            </div> 
                                         </div>
                                          <div class="row">
                                            <div class="col l10">
                                              <p class="print">d.Industriousness and Initiative</p>  
                                            </div>
                                            <div class="col l2">
                                                 <input tabindex="4" value="<?php echo $midterm_evaluation->industriousness; ?>" readonly maxlength="1" type="text" name="industriousness" class="score" style="height: 1rem;">
                                            </div> 
                                         </div>
                                          <div class="row">
                                            <div class="col l10">
                                              <p class="print">e.Sense of Responsibility</p>  
                                            </div>
                                            <div class="col l2">
                                                <input tabindex="5" value="<?php echo $midterm_evaluation->responsibility; ?>"  readonly maxlength="1" type="text" name="responsibility" class="score" style="height: 1rem;">
                                            </div> 
                                         </div>
                                          <div class="row">
                                            <div class="col l10">
                                              <p class="print">f.Attentiveness / Attention</p>  
                                            </div>
                                            <div class="col l2">
                                                <input tabindex="6" value="<?php echo $midterm_evaluation->attentiveness; ?>" readonly  maxlength="1" type="text" name="attentiveness" class="score" style="height: 1rem;">
                                            </div> 
                                         </div>
                                          <div class="row">
                                            <div class="col l10">
                                              <p class="print">g.Personal Grooming</p>  
                                            </div>
                                            <div class="col l2">
                                                <input tabindex="7" value="<?php echo $midterm_evaluation->grooming; ?>" readonly maxlength="1" type="text" name="grooming" class="score" style="height: 1rem;">
                                            </div> 
                                         </div>
                                          <div class="row">
                                            <div class="col l10">
                                              <p class="print">h.Attendance</p>  
                                            </div>
                                            <div class="col l2">
                                                <input tabindex="8" value="<?php echo $midterm_evaluation->attendance; ?>" readonly maxlength="1" type="text" name="attendance" class="score" style="height: 1rem;"> 
                                            </div> 
                                         </div>
                                         <h6 style="font-size: 2.2em;">WORK PERFORMANCE (30 x 2 = <div class="badge">60</div> points)</h6>
                                         <div class="row">
                                             <div class="col l10">
                                                 <p class="print">a.Quality of Work</p>
                                             </div>
                                             <div class="col l2">
                                                 <input tabindex="9" value="<?php echo $midterm_evaluation->quality; ?>" readonly maxlength="1" type="text" name="quality" class="score" style="height: 1rem;">
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col l10">
                                                 <p class="print">b.Quantity of Work</p>
                                             </div>
                                             <div class="col l2">
                                                 <input tabindex="10" value="<?php echo $midterm_evaluation->quantity; ?>" readonly maxlength="1" type="text" name="quantity" class="score" style="height: 1rem;">
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col l10">
                                                 <p class="print">c.Dependability</p>
                                             </div>
                                             <div class="col l2">
                                                 <input tabindex="11" value="<?php echo $midterm_evaluation->dependability; ?>" readonly maxlength="1" type="text" name="dependability" class="score" style="height: 1rem;">
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col l10">
                                                 <p class="print">d.Comprehension</p>
                                             </div>
                                             <div class="col l2">
                                                 <input tabindex="12" value="<?php echo $midterm_evaluation->comprehension; ?>" readonly maxlength="1" type="text" name="comprehension" class="score" style="height: 1rem;">
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col l10">
                                                 <p class="print">e.Safety Consciousness</p>
                                             </div>
                                             <div class="col l2">
                                                 <input tabindex="13" value="<?php echo $midterm_evaluation->safety; ?>" readonly maxlength="1" type="text" name="safety" class="score" style="height: 1rem;">
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col l10">
                                                 <p class="print">f.Waste Consciousness</p>
                                             </div>
                                             <div class="col l2">
                                                 <input tabindex="14" maxlength="1" value="<?php echo $midterm_evaluation->waste; ?>" readonly type="text" name="waste" class="score" style="height: 1rem;">
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col l10">
                                                 <p class="print">OVERALL TOTAL</p>
                                             </div>
                                             <div class="col l2">
                                                 <input type="text" name="" value="<?php echo $midterm_evaluation->total; ?>" class="score" style="height: 1rem;" readonly> 
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col l12">
                                                 <p class="print">REMARKS</p>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col l12">
                                                 <textarea tabindex="15" name="remarks" id="remark" class="materialize-textarea" readonly style="resize: none;"><?php echo $midterm_evaluation->remarks ?></textarea>
                                <?php endif;?>
                                    <?php endif;?>
                                             </div>
                                         </div>
                                     </form>
                                 </div>
                                 <div id="final">
                                     <div class="row">
               <div class="col l12">
                  <div class="row">
                  <h4 class="center-align" style="text-transform: uppercase; font-weight: bold;">Final Evaluation</h4>
                    <div class="col l4">
                      <h4 class="factors">Job Factors</h4>
                    </div>
                    <div class="col l4">
                      <h4 class="factors">Rating</h4>
                    </div>
                    <div class="col l4">
                      <h4 class="factors"><h4 class="factors">Given Rate</h4></h4>
                    </div>
                  </div>
               </div>
             </div>
             <div class="row">
               <div class="col l12">
                 <div class="col l4">
                   <p class="list""><a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Thoroughness, accuracy, neatness and effectiveness">Quality of Work</a></p>
                 </div>
                 <div class="col l4">
                   <span class="rate">20%</span>
                 </div>
                 <div class="col l4">
                    <input type="text" name="fquality" id="fquality" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" style="height: 1rem;">
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col l12">
                 <div class="col l4">
                   <p class="list""><a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Able to complete work in allotted time">Quality of Work</a></p>
                 </div>
                 <div class="col l4">
                   <span class="rate">20%</span>
                 </div>
                 <div class="col l4">
                    <input type="text" name="fquality2" id="fquality2" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" style="height: 1rem;">

                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col l12">
                 <div class="col l4">
                   <p class="list""><a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Ability to work w/ minimum amount of break supervision">Dependability, reliabilty and resoucefulness</a></p>
                 </div>
                 <div class="col l4">
                   <span class="rate">15%</span>
                 </div>
                 <div class="col l4">
                    <input type="text" name="fdependability" id="fdependability" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" style="height: 1rem;">
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col l12">
                 <div class="col l4">
                   <p class="list""><a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Regularity and Punctuality in office attendance and report observation of break periods">Attendance</a></p>
                 </div>
                 <div class="col l4">
                   <span class="rate">15%</span>
                 </div>
                 <div class="col l4">
                    <input type="text" name="fattendance" id="fattendance" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" style="height: 1rem;">
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col l12">
                 <div class="col l4">
                   <p class="list""><a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Works well with everyone">Cooperation</a></p>
                 </div>
                 <div class="col l4">
                   <span class="rate">10%</span>
                 </div>
                 <div class="col l4">
                    <input type="text" name="fcooperation" id="fcooperation" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' style="height: 1rem;">
                 </div>
               </div>
             </div>
              <div class="row">
               <div class="col l12">
                 <div class="col l4">
                   <p class="list""><a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Sound decisions: Ability to identify and evaluate pertinent factors">Judgement</a></p>
                 </div>
                 <div class="col l4">
                   <span class="rate">10%</span>
                 </div>
                 <div class="col l4">
                    <input type="text" name="fjudgement" id="fjudgement" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" style="height: 1rem;">
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col l12">
                 <div class="col l4">
                  <p class="list""><a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Personal grooming and pleasant disposition">Personality</a></p>
                 </div>
                 <div class="col l4">
                   <span class="rate">10%</span>
                 </div>
                 <div class="col l4">
                    <input type="text" name="fpersonality" id="fpersonality" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" style="height: 1rem;">
                 </div>
               </div>
             </div>
             <ul class="collapsible" data-collapsible="accordion">
              <li>
                <div class="collapsible-header"><i class="fa fa-pencil" aria-hidden="true"></i>Recommendation</div>
                <div class="collapsible-body" style="padding: 10px;">
                  <textarea name="recommend" class="materialize-textarea" placeholder="Write your recommendation here..."></textarea>


                </div>
              </li>
             </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                  </div>
              </div>
            </div>


      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
    <script type="text/javascript">
        $("#second").click(function(e){
            e.preventDefault();
            $("#second").addClass("active");
            $("#third").removeClass("active");
            $("#fourth").removeClass("active");
            $("#personal-information").show();
            $("#family-information").show();
            $("#company-information").hide();
            $("#evaluations").hide();
        });
        $("#third").click(function(e){
            e.preventDefault;
            $("#second").removeClass("active");
            $("#fourth").removeClass("active");
            $("#third").addClass("active");
            $("#company-information").show();
            $("#personal-information").hide();
            $("#family-information").hide();
        });
        $("#fourth").click(function(e){
            e.preventDefault();
            $("#fourth").addClass("active");
            $("#second").removeClass("active");
            $("#third").removeClass("active");
            $("#evaluations").show();
            $("#personal-information").hide();
            $("#company-information").hide();
            $("#family-information").hide();
        });

    </script>
    <script type="text/javascript">
    $("#cancelBrowse").click(function(){
        $(".saveCancel").css("display","none");
        
    });

     $(".show-profilepic-options").click(function(e){
        e.preventDefault();
        $(".change-photo").slideToggle();
   
    });
</script>
<script type="text/javascript">
    $("#cancels").click(function(){
        $(".family-info").removeClass("showBorder");
        $(".family-info").prop("readonly",true);
        $(".bts").css("display","none");
    });
    $('.click-photo').click(function(){
        $('.browse-photo').trigger('click');
    });
    function previewFile() {
     var preview = document.querySelector('#img_preview');
     var file    = document.querySelector('input[type=file]').files[0];
     var reader  = new FileReader();
     reader.addEventListener("load", function () {
       preview.src = reader.result;
       $('#img_preview').show();
       $('.fa-user-circle:last').hide();
       $(".saveCancel").css("display","block");
    }, false);
    if (file) {
     reader.readAsDataURL(file);
     alert(reader.readAsDataURL(file));
    }
}
</script>
<script type="text/javascript">
    $(".btn-edit-personal").click(function(){
        $(".personal-info").addClass("showBorder");
        $(".personal-info").prop("readonly",false);
        $(".bt").css("display","inline-block");
    });

    $('#save-personal-details').click(function(){
       var data = $('#personal-details-user').serialize();
        
        $.ajax({
            url: 'editProfilePersonal',
            method: 'POST',
            data:data,
            success: function(data){
                location.reload();
            }
        })
    });
</script>
<script type="text/javascript">
    $("#cancel").click(function(){
        $(".personal-info").removeClass("showBorder");
        $(".personal-info").prop("readonly",true);
        $(".bt").css("display","none");
    });
</script>
<script type="text/javascript">
    $("#btn-edit1").click(function(){
         $(".family-info").addClass("showBorder");
         $(".family-info").prop("readonly",false);
         $(".bts").css("display","inline-block"); 


    });

    $('#save-family-details').click(function(){

        var data = $('#family-details-user').serialize();

        $.ajax({
            url: 'editProfileFamily',
            method: 'POST',
            data: data,
            success: function(data){
                location.reload();
            }
        })
    });
</script>
<script type="text/javascript">
    $("#btn-edit2").click(function(){
         $(".company-info").addClass("showBorder");
         $(".company-info").prop("readonly",false);
         $('input[type=checkbox]').prop('disabled',false);
         $('input[type=radio]').prop('disabled',false);
         $(".btss").css("display","inline-block"); 
    });
</script>
<script type="text/javascript">
    $("#cancelss").click(function(){
        $(".company-info").removeClass("showBorder");
        $(".company-info").prop("readonly",true);
         $('input[type=checkbox]').prop('disabled',true);
         $('input[type=radio]').prop('disabled',true);
        $(".btss").css("display","none");

    });

    $('#other').click(function(){
        $('#other_classification').toggle();
    })

        $('#save-company-information').click(function(e){

            e.preventDefault();
            var data = $('#company-information-user').serialize();
            
             // Get checked values
         var classification=[];
        $('input[type="checkbox"]').each(function(){
             if($(this).is(":checked")==true){
                classification.push($(this).val());
            }
        });
        var other_classification = $('#other_classification').val();
        if(!$.trim(other_classification)){

        }else{
            classification.push(other_classification);
        }


        $.ajax({
            url: 'editProfileCompany',
            method: 'POST',
            data: data + "&classification="+classification,
            success: function(data){
               location.reload();
            }
        });


        });
</script>
  </html>













