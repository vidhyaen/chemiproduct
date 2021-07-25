<?php
$total = 0;
session_start();
require 'db.php';
if (!isset($_SESSION['id'])) {
    header("location:index.php");
    exit();
} else {
    $sql = "SELECT * from cart where uid=$_SESSION[id]";
    $res = mysqli_query($con, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">

    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c330d3c861.js" crossorigin="anonymous"></script>

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_SESSION['fname']; ?> - Cart </title>
    <style>
        body {
            background-color: indigo;
            text-decoration-color: darkslateblue;
            font-family: 'Baloo Bhai', cursive;
        }

        a {
            text-decoration: none;
            color: red;
            float: right;
            padding: 8px;
        }
    </style>
</head>

<body class="w3-indigo">
    <?php
    require "header.php"; ?>
    <?php
    $pname = "";
    $quan = "";
    if (mysqli_num_rows($res)) {
        while ($rows = mysqli_fetch_assoc($res)) {
            $q = $rows['q'];
            $quan .= $q." - ";
            $sql1 = "select * from productlist where id=$rows[pid]";
            $res1 = mysqli_query($con, $sql1);
            
            while ($rows = mysqli_fetch_assoc($res1)) {
                $pname .= $rows['pname']." - ";
    ?>
                <div class="w3-center w3-row w3-indigo w3-border-yellow ">
                    <div class="w3-padding w3-third">
                        <h2 class="w3-text-white w3-panel"><?php echo $rows['pname']; ?></h2>
                        <img src="img/<?php echo $rows['pimg']; ?>" width="50%" height="50%" class="w3-border w3-border-yellow "><br>
                        <h3 class="w3-text-green w3-padding w3-tag w3-round-large w3-panel w3-large w3-white">Price : <?php $total += $rows['price'] * $q;
                                                                                                                        echo $rows['price'] * $q; ?></h3>

                    </div>
                    <div class="w3-padding-64 w3-twothird w3-center"><br>
                        <div class="w3-row w3-panel w3-padding-16 w3-border w3-border">

                            <form class="w3-indigo w3-panel w3-padding w3-third" method="post" action="addrem.php?id=<?php echo $rows['id']; ?>&q=<?php echo $q; ?>">
                                <input class="w3-button w3-right w3-red w3-hover-green w3-round w3-red w3-panel w3-padding " type="submit" name="rem" value="remove">
                            </form>
                            <div class="  w3-panel w3-third w3-padding">

                                <h3 class="w3-panel w3-tag w3-white w3-text-pink w3-round-large"><?php echo $q; ?></h3>
                            </div>
                            <form class="w3-indigo w3-padding w3-third w3-panel" method="post" action="addrem.php?id=<?php echo $rows['id']; ?>&q=<?php echo $q; ?>">
                                <input class="w3-button w3-red w3-left w3-hover-green w3-round w3-red w3-panel w3-padding " type="submit" name="add" value="add">
                            </form>

                        </div>
                    </div>
                </div>

        <?php
            }
        }
        ?>
        <center>
            <?php $_SESSION['pname'] = $pname;  $_SESSION['quan'] = $quan; $_SESSION['amt'] = $total;?>
            <div class="w3-panel w3-center w3-padding w3-tag w3-text-whit w3-yellow w3-round">
                <p class="w3-panel w3-padding w3-large">Amount to be paid : Rs <?php echo $total; ?></p>
                <p class="w3-panel w3-padding">Cash on Delivery only*</p>

                <form class="w3-hover-yellow w3-yellow w3-center" action="cash.php" method="post">
                    <input type="submit" value="Checkout" class="w3-center w3-padding w3-text-red w3-hover-red w3-hover-text-white w3-button w3-yellow w3-float-center" name="checkout">
                </form>
            </div>

        </center>
    <?php
    } else {
    ?>
        <br><br><br>
        <div class="w3-center">
            <p class="w3-panel w3-padding w3-txt-pink">No Product In Cart</p>
        </div>
    <?php
    } ?>
    <div>

    </div>
</body>

</html>