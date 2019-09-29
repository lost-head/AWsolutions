<?php

	include('config/dbh.inc.php');
	
	if(isset($_POST['action'])){
		require 'config/dbh.inc.php';
		
		$lemail = $_POST['lemail'];
		$password = $_POST['title'];
		
		if(empty($lemail) || empty($password)){
			header("Location: index.php?error=emptyfields");
			exit();
		} else {
			$sql = "SELECT * FROM Userstorage WHERE uidUsers=? OR emailUsers=?;";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt, $sql)){
				header("Location: index.php?error=sqlerror");
				exit();
			} else {
				mysqli_stmt_bind_param($stmt, "ss", $lemail, $lemail);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);
				if($row = mysqli_fetch_assoc($result)){
					$pwdCheck = password_verify($password, $row['pwdUsers']);
					if($pwdCheck == false){
						header("Location: index.php?error=wrongpassword");
						exit();
					} elseif($pwdCheck == true){
						session_start();
						$_SESSION['userid'] = $row['idUsers'];
						$_SESSION['useruid'] = $row['uidUsers'];
						header("Location: index.php?error=wrongpassword");
						exit();
					} else {
						header("Location: index.php?login=success");
						exit();
					}
				} else {
					header("Location: index.php?error=nouser");
					exit();
				}
			}
		}
		
	} else {
		header("Location: index.php");
		exit();
	}