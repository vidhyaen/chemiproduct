<?php
session_start();
require "db.php";
if (isset($_POST['add'])) {
    $uid = $_SESSION['id'];
    $q = $_GET['q'];
    $pid = $_GET['id'];
    $q++;
    $sql = "update cart set q=$q where pid=$pid and uid=$uid";
    $res = mysqli_query($con, $sql);
    header("location:cart.php");
    exit();
} else {
    if (isset($_POST['rem'])) {
        $uid = $_SESSION['id'];
        $q = $_GET['q'];
        $pid = $_GET['id'];
        $q--;
        if ($q > 0) {
            $sql = "update cart set q=$q where pid=$pid and uid=$uid";
            $res = mysqli_query($con, $sql);
            header("location:cart.php");
            exit();
        } else {
            $del = "delete from cart where uid=$uid and pid=$pid";
            mysqli_query($con, $del);
            header("location:cart.php");
            exit();
        }
    }
}
