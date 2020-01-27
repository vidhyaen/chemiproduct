<?php 
	
	require 'db.php';	
	if (isset($_POST['register'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
        $email = $_POST['email'];
		$password1 = $_POST['pass1'];
		$password2 = $_POST['pass2'];
		$number = $_POST['phno'];
		$add=$_POST['add'];
		if ((empty($email) || empty($fname) || empty($lname) || empty($number) || empty($password1) || empty($password2)||empty($add))) {
			header("Location:register.php?error=emptyfields&email=".$email."&fname=".$fname."&phno=".$number."&lname=".$lname."&add=".$add);
				exit();
		}else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("Location:register.php?error=invalidUserEmail&fname=".$fname."&phno=".$number."&lname=".$lname."&email&add=".$add);
			exit();
		}elseif (!preg_match("/^[a-zA-Z0-9]*$/",$fname) && !preg_match("/^[a-zA-Z0-9]*$/",$lname)) {
			header("Location:register.php?error=invalidUserName&fname&phno=".$number."&lname&email=".$email."&add=".$add);
			exit();
		}
		elseif (strlen($number) < 10) {
			header("Location:register.php?error=invalidNum&fname=".$fname."&email=".$email."&phno&lname=".$lname."&add=".$add);
			exit();
		}
		elseif (strlen($password1) < 8) {
			header("Location:register.php?error=invalidPass&email=".$email."&fname=".$fname."&phno=".$number."&lname=".$lname."&add=".$add);
			exit();
		}
		elseif ($password1 !== $password2) {
			header("Location:register.php?error=passwordMissMatch&email=".$email."&fname=".$fname."&phno=".$number."&lname=".$lname."&add=".$add);
			exit();
			
		}else{
			$sql="SELECT email FROM account WHERE email=? ";
			$stmt = mysqli_stmt_init($con);//sql injection
			if(!mysqli_stmt_prepare($stmt,$sql)){
				header("Location:register.php?error=sqlerror1&email=".$email."&fname=".$fname."&phno=".$number."&lname=".$lname."&add=".$add);
				exit();
			}
			else{
				$stmt->bind_param("s",$email);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultCheck = mysqli_stmt_num_rows($stmt);
				if($resultCheck > 0){
					header("Location:register.php?error=emailAlreadyTaken&fname=".$fname."&phno=".$number."&email&lname=".$lname."&add=".$add);
					exit();
				}
				else{
					$sql="INSERT INTO account(fname,lname,email,pass,mno,address) VALUES(?,?,?,?,?,?)";
					$stmt = mysqli_stmt_init($con);
					if(!mysqli_stmt_prepare($stmt,$sql)){
						header("Location:register.php?error=sqlerror2&fname=".$fname."&phno=".$number."&email"."&lname=".$lname."&add=".$add);
						exit();
					}
					else{
						$hashpwd = password_hash($password1, PASSWORD_DEFAULT);
						$stmt->bind_param("ssssss",ucfirst($fname),ucfirst($lname),$email,$hashpwd,$number,$add);
						mysqli_stmt_execute($stmt);
						$id = "Select * from account where email='$email'";//product view
						$resid=mysqli_query($con,$id);
						while($rows=mysqli_fetch_assoc($resid))
						{
							$uid=$rows['id'];

						}
						$sql1="Insert into productview(uid) Values($uid)";
						mysqli_query($con,$sql1);
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