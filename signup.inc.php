<?php
if(isset($_POST['cnfsign'])){
	
	require 'config/dbh.inc.php';

	$username = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$reppass = $_POST['reppass'];
	
	if(empty($username) || empty($email) || empty($password) || empty($reppass)){
		header("Location: signup.php?error=emptyfields&name=".$username."&email=".$email);
		exit();
	} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: signup.php?error=invalidmailname");
		exit();
	} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: signup.php?error=invalidmail&name=".$username);
		exit();
	} elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: signup.php?error=invalidname&email=".$email);
		exit();
	} elseif($password !== $reppass){
		header("Location: signup.php?error=passwordcheck&name=".$username."&email=".$email);
		exit();
	} else {
		
		$sql = "SELECT uidUsers FROM Userstorage WHERE uidUsers=?";
		$stmt = mysqli_stmt_init($conn);
		
		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: signup.php?error=sqlerror");
			exit();
		} else {
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if($resultCheck > 0){
				header("Location: signup.php?error=usertaken&email=".$email);
				exit();
			} else {
				
				$sql = "INSERT INTO Userstorage (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt, $sql)){
					header("Location: signup.php?error=sqlerror");
					exit();
				} else {
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
					mysqli_stmt_execute($stmt);
					header("Location: signup.php?signup=success");
					exit();
				}
			}
		}	
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
else {
	header("Location: signup.php");
	exit();
}