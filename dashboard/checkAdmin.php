<?php

    if(isset($_POST['login'])){
        $uname = $_POST['uname'];
        $pass= $_POST['pass'];
        if(empty($uname) || empty($pass)){
            header("location:index.php?error=FillAll");
            exit();
        }else{
            if($uname == "Admin" && $pass = "vidhu"){
                session_start();
                $_SESSION['admin'] = $uname;
                header("location:main.php");
                exit();
            }
        }
    }