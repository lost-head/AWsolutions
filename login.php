<?php

session_start();

include('config/dbh.inc.php');

?>


<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<link href="css/main.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


 <style type="text/css">
 	.brand{
 		background: #cbb09c !important;
 	}
 	.brand-text{
 		color: #cbb09c !important;
 	}
 	form {
 		max-width: 460px;
 		margin: 20px auto;
 		padding: 20px;
 	} 	
	.margin-bot {
 		margin-bottom: 30px;
 	}
	
	.margin-right {
		margin-right: 50px;
	}
 	.padding-top {
		padding-top: 50px;
	
 	}



 </style>

 <body>

 <nav>
	<div class="nav-wrapper blue-grey darken-3">
		<a href="index.php" class="brand-logo valign-wrapper logo">Award Solutions</a>
	</div>
 </nav>
 
	<?php
		if(isset($_GET['error'])){
			if($_GET['error'] == "emptyfields"){
				echo 'Fill in all fields !';
			}	elseif($_GET['error'] == "invalidmailname"){
				echo 'Not correct name or e-mail!';
			} elseif($_GET['error'] == "invalidmail"){
				echo 'Not correct e-mail !';
			} elseif($_GET['error'] == "invalidname"){
				echo 'Not correct name !';
			} 
		} 
	?>
	</div>
	<section class="container grey-text">
		<h4 class="center blue-grey-text text-darken-3 padding-top"><b>LET'S GET STARTED!</b></h4>
	<form action="login.inc.php " method="POST" class="white">
		<h6 class="margin-bot blue-grey-text text-darken-3"><b>Please Login Below</b></h6>
		<label for="" class="blue-grey-text text-darken-3">Email Address:</label>
		<input type="text" name="email">
		<label for="" class="blue-grey-text text-darken-3">Password:</label>
		<input type="password" name="password">
		<div class="center">
								  <button class="btn waves-effect waves-light teal accent-4 margin-right" 		type="submit" name="action">LOG IN
				 						 <i class="material-icons right">send</i>
 									 </button>
				 					 <a href="signup.php" class="waves-effect waves-light btn teal accent-4 land">sign up<i class="material-icons right">landscape</i></a>
						</div>
			</form>
	</section>
<?php
//include('templates/footer.php');
?>
</html>