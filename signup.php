<?php 

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

	<section class="container grey-text">
		<h4 class="center blue-grey-text text-darken-3 padding-top"><b>SIGN UP</b></h4>
		<div class="center red-text">

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
				} elseif($_GET['error'] == "passwordcheck"){
					echo 'Passwords do not match !';
				} elseif($_GET['error'] == "usertaken"){
					echo 'This user is already registered !';
				}
			} elseif($_GET['signup'] == "success"){
				echo 'Successfully registered !';
			}
			?>
		</div>
		<form action="signup.inc.php" method="POST" class="white">
			<label for="" class="blue-grey-text text-darken-3">Name:</label>
			<input type="text" name="name">
			<label for="" class="blue-grey-text text-darken-3">Email Address:</label>
			<input type="text" name="email">
			<label for="" class="blue-grey-text text-darken-3">Password:</label>
			<input type="password" name="password">
			<label for="" class="blue-grey-text text-darken-3">Repeat password:</label>
			<input type="password" name="reppass">
			<div class="center">
				<button class="btn waves-effect waves-light teal accent-4" type="submit" name="cnfsign">Confirm</button>

				<?php
//include('templates/footer.php');
				?>
</html>