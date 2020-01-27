<?php
    require "db.php";
    if(isset($_POST['place'])){
       $id = $_GET['id'];
        $sql =  "update orders SET status='true' where id = $id";
        mysqli_query($con,$sql);
        header("location:order.php?success");
        exit();
    }
    else if(isset($_POST['cancel'])){
        $id = $_GET['id'];
         $sql =  "update orders SET status='false' where id = $id";
         mysqli_query($con,$sql);
         header("location:order.php?success");
         exit();
    }
    else{
        header("location:main.php");
        exit();
    }