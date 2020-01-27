<?php
session_start();
if(isset($_SESSION['id']))
{
    header("Location:main.php");
    exit();
}


$fname = "";
$lname="";
$email="";
$phno="";
$add="";
    if(isset($_GET['error'])){
        $email = $_GET['email'];
        $fname = $_GET['fname'];
        $lname = $_GET['lname'];
        $phno = $_GET['phno'];
        $add=$_GET['add'];
    }//link
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="w3.css">
        <title>Register</title>
    <style>
        body
        {
            background-image:url(b.jpg);
                background-size:cover;
                background-attachment:scroll;
                background-position:center;
                text-shadow:1px 1px 0 #444;
            color:blue;

        }
    </style>
        </head>
    <body>
        <div class="w3-row">
            <div class="w3-quarter w3-padding"></div>
             <div class="w3-half w3-center w3-padding">
            
        <h1 class="w3-center w3-text-teal">REGISTER</h1><br>
        
        <form method="post" action="regph.php">
            <b>
        <label>First Name</label><br><br>
            <input  type="text" value="<?php echo $fname; ?>" name="fname"><br><br>
            <label>Last Name</label><br><br>
            <input  type="text" value="<?php echo $lname; ?>" name="lname"><br><br>
            <label>Email id</label><br><br>
            <input type="text" value="<?php echo $email; ?>" name="email"><br><br>
             <label>Password</label><br><br>
            <input  type="password" name="pass1"><br><br>
             <label>Confirm password</label><br><br>
            <input type="password" name="pass2"><br><br>
            <label>Mobile no</label><br><br>
            <input  type="text" value="<?php echo $phno; ?>" name="phno"><br><br>
            <label>Address</label><br><br>
            <input  type="text" value="<?php echo $add; ?>" name="add"><br><br>
            <input type="submit" value="Register" name="register" class="w3-button w3-round-xlarge w3-pink">  <br>  <br>

           <a class="w3-text-black" href="index.php">Already register?->Back to login!</a><br>                    
            </b>
            
        </form>
        <?php
        if(isset($_GET['error']))
        { ?>
        <div class="w3-container w3-panel w3-padding  w3-tag w3-red">
        <?php
            if($_GET['error']=="emptyfields")
            echo "Fill all the feilds";
            else if($_GET['error']=="invalidUserEmail")
            echo "Enter your valid email";
            else if($_GET['error']=="invalidUserName")
            echo "Enter your valid username";
            else if($_GET['error']=="invalidNum")
            echo "Enter your invalid number";
            else if($_GET['error']=="invalidPass")
            echo "Enter your valid password";
            else if($_GET['error']=="passwordMissMatch")
            echo "password missmatched";
            else if($_GET['error']=="sqlerror")
            echo "sql error";
            else if($_GET['error']=="emailAlreadyTaken")
            echo "Already email is existing";
        }//err msg
        ?></div>
    </div><div class="w3-quarter w3-padding"></div>
            </div>
    </body>
</html>