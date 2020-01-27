<?php
session_start();
require "db.php";
if(isset($_POST['cart']))
{
    $sql="select * from cart where uid=$_GET[uid] and pid=$_GET[pid]";
    $res=mysqli_query($con,$sql);
    $id = $_SESSION['pid'];
    $uid = $_GET['uid'];
    if(mysqli_num_rows($res))
    {
        $del="delete from cart where uid=$_GET[uid] and pid=$_GET[pid]";
        mysqli_query($con,$del);
        header("location:detail.php?id=".$id);
        exit();
    }else{
        
        $in = "insert into cart(uid,pid,q) values($uid,$id,1)";
        mysqli_query($con,$in);
        header("location:detail.php?id=".$id);
        exit();
    }

}
?>
