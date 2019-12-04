<?php 
	
	require 'db.php';	
	if (isset($_POST['register'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
        $email = $_POST['email'];
		$password1 = $_POST['pass1'];
		$password2 = $_POST['pass2'];
        	$number = $_POST['phno'];
		if ((empty($email) || empty($fname) || empty($lname) || empty($number) || empty($password1) || empty($password2))) {
			header("Location:register.php?error=emptyfields&email=".$email."&fname=".$fname."&phno=".$number."&lname=".$lname);
				exit();
		}else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("Location:register.php?error=invalidUserEmail&fname=".$fname."&phno=".$number."&lname=".$lname."&email");
			exit();
		}elseif (!preg_match("/^[a-zA-Z0-9]*$/",$fname) && !preg_match("/^[a-zA-Z0-9]*$/",$lname)) {
			header("Location:register.php?error=invalidUserName&fname&phno=".$number."&lname&email=".$email);
			exit();
		}
		elseif (strlen($number) < 10) {
			header("Location:register.php?error=invalidNum&fname=".$fname."&email=".$email."&phno&lname=".$lname);
			exit();
		}
		elseif (strlen($password1) < 8) {
			header("Location:register.php?error=invalidPass&email=".$email."&fname=".$fname."&phno=".$number."&lname=".$lname);
			exit();
		}
		elseif ($password1 !== $password2) {
			header("Location:register.php?error=passwordMissMatch&email=".$email."&fname=".$fname."&phno=".$number."&lname=".$lname);
			exit();
		}else{
			$sql="SELECT email FROM account WHERE email=? ";
			$stmt = mysqli_stmt_init($con);
			if(!mysqli_stmt_prepare($stmt,$sql)){
				header("Location:register.php?error=sqlerror&email=".$email."&fname=".$fname."&phno=".$number."&lname=".$lname);
				exit();
			}
			else{
				$stmt->bind_param("s",$email);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultCheck = mysqli_stmt_num_rows($stmt);
				if($resultCheck > 0){
					header("Location:register.php?error=emailAlreadyTaken&fname=".$fname."&phno=".$number."&email&lname=".$lname);
					exit();
				}
				else{
					$sql="INSERT INTO account (fname,lname,email,pass,mno)VALUES(?,?,?,?,?)";
					$stmt = mysqli_stmt_init($con);
					if(!mysqli_stmt_prepare($stmt,$sql)){
						header("Location:register.php?error=sqlerror&fname=".$fname."&phno=".$number."&email"."&lname=".$lname);
						exit();
					}
					else{
						$hashpwd = password_hash($password1, PASSWORD_DEFAULT);
						$stmt->bind_param("sssss",ucfirst($fname),ucfirst($lname),$email,$hashpwd,$number);
						mysqli_stmt_execute($stmt);
						header("Location:index.php?error=success&email=".$email);
						exit();
					}
				}
			}
		}
}
else {
		header("Location:index.php");
			exit();
	}
?>