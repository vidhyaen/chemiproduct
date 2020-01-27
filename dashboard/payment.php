<?php
require "db.php";
if (isset($_POST['pay'])) {
    $id = $_GET['id'];
    $sql =  "update orders SET payment='true' where id = $id";
    mysqli_query($con, $sql);
    header("location:order.php?success");
    exit();
} else if (isset($_POST['paid'])) {
    $id = $_GET['id'];
    $sql =  "update orders SET payment='false' where id = $id";
    mysqli_query($con, $sql);
    header("location:order.php?success");
    exit();
} else {
    header("location:main.php");
    exit();
}
