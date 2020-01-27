<?php
    require "db.php";
    if(isset($_POST['delete'])){
       $id = $_GET['id'];
        $sql =  "delete from orders where id = $id";
        mysqli_query($con,$sql);
        header("location:order.php?success");
        exit();
    }else{
        header("location:main.php");
        exit();
    }