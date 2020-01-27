<?php
require "db.php";
session_start();
if(isset($_SESSION['admin'])){
    header("location:main.php");
    exit();
}
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../w3.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <title>index dashboard</title>
    <style>
        body {

            text-decoration-color: darkslateblue;
            font-family: 'Ubuntu', sans-serif;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            color: blue;
        }
    </style>
</head>
<body>
       <div class="w3-row">
           <div class="w3-third w3-padding"></div>
           <div class="w3-third w3-padding">
               <div class="w3-card w3-padding ">
                    <h1 class="w3-text-pink w3-center">Admin Login</h1>
                    <form action="checkAdmin.php" method="post">
                        <label for="" class="w3-text-indigo  w3-padding">Username : </label><br>
                        <input class="w3-panel w3-padding w3-text-blue" type="text" name="uname"><br>
                        <label for="" class="w3-text-indigo  w3-padding">Password : </label><br>
                        <input type="password" name="pass" class="w3-panel w3-padding w3-text-blue"><br><br>
                        <input type="submit" name="login" value="Login"class="w3-text-white w3-round-large w3-blue w3-button w3-hover-red"><br>
                    </form>
               </div>
           </div>
           <div class="w3-third w3-padding"></div>
       </div>
</body>
</html> 