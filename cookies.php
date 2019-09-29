<?php

session_start();

	if(isset($_POST['submit'])){ //if the form has been submitted

		//cookie for gender
		setcookie('gender', $_POST['gender'], time() + 86400); 

		session_start();
		
		$_SESSION['email'] = $_POST['email'];
		
		header('Location: index.php');
		
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>php tuts</title>
</head>
<body>

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<input type="text" name="email">
		<select name="gender" id="">
			<option value="male">male</option>
			<option value="female">female</option>
		</select>
		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>