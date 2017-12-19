
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
	<title></title>
	<style type="text/css">
		body{
			padding-top: 100px;
		}
		.well{
			padding-top: 50px;
			padding-bottom: 50px;
		}
		h3{
			color: #000;
		}
	</style>		
</head>
<body>
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				
				<?php $email = $_GET['email'];?>
			
					<?php
						$query = $this->db->query("SELECT email_address FROM email WHERE email_address = '$email'")->result_array();
						

						foreach ($query as $result) {
							if(in_array($email, $result)){
								 	
									echo "osu!";

								}	
									
							else{
								echo "false";	
							}
						}
					?>
					<div class="well" style="text-align: center;"><h3>Password reset is successful.<br>You can now change your password</h3>
								<form method="POST" action="<?php echo base_url();?>main/resetpassword">
								<input type="hidden" value="<?php echo $email; ?>" name="reset_email">
								<input type="submit" class="btn btn-success" value="Click to Change Password">
								</form>
							<!-- <a href="" class="btn btn-success">Click to Change Password</a> -->
					</div>

							
						
					
				
				</div>
			</div>
		</div>
	</div>
</body>
</html>