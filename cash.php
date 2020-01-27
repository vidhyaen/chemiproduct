<?php
require "db.php";
session_start();

if (isset($_POST['checkout'])) {
    $name = $_SESSION['fname'] . " " . $_SESSION['lname'];
    $pname = $_SESSION['pname'];
    $quan = $_SESSION['quan'];
    $amt = $_SESSION['amt'];
    $add1 = $_SESSION['add'];
    $mno = $_SESSION['mno'];
    $sql = "INSERT INTO orders(name,pname,qua,amt,address,mno,status,payment) VALUES('$name','$pname','$quan','$amt','$add1','$mno','false','false')";
    mysqli_query($con, $sql);

    $sql = "DELETE FROM cart where uid = $_SESSION[id]";
    mysqli_query($con, $sql);

    header("location:main.php?order=success");
    exit();
}else{
    header("location:main.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
</head>

<body>
    <?php

    ?>
</body>

</html>