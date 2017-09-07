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
				<?php $email = $_GET['email']?>
				<?php $hash = $_GET['hash']?>
					<?php
						$query = $this->db->query("SELECT email_address, hash FROM email WHERE email_address = '$email' AND hash ='$hash'")->result_array();
					

						foreach ($query as $result) {
							if(in_array($email, $result) && in_array($hash, $result)){
								 $this->db->query("UPDATE email SET status = 1 WHERE email_address = '$email' AND hash = '$hash'");
							}else{
								echo 'false';	
							}
						}
					?>
	
					<div class="well" style="text-align: center;">
						
							<h3>Your email has been verified succesfully! You can now continue to your profile</h3>

							<a href="dashboard" class="btn btn-success">Continue to dashboard</a>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>