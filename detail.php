<?php
require 'db.php';
session_start();
if (isset($_GET['id'])) {
    $_SESSION['pid'] = $_GET['id'];
    $sql = "SELECT * from productlist where id=$_GET[id]";
    $res = mysqli_query($con, $sql);
    $sql1 = "select * from productview where uid=$_SESSION[id]";
    $res1 = mysqli_query($con, $sql1);

    while ($rows = mysqli_fetch_assoc($res1)) {
        $v = $rows['p' . $_SESSION['pid']];
    }
    ++$v;
    $sql2 = "update productview set p" . $_SESSION['pid'] . "='$v' where uid=$_SESSION[id]";
    mysqli_query($con, $sql2);
} else {
    header("location:index.php");
}
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>detail</title>
    <style>
        p {
            width: 150px;
        }

        body {
            background: #40E0D0;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #FF0080, #FF8C00, #40E0D0);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #FF0080, #FF8C00, #40E0D0);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }

        a {
            text-decoration: none;
            color: red;
            float: right;
            padding: 8px;
        }

        a:hover {
            border-radius: 20px;
            background-color: #555;
            color: yellow;
            padding: 8px 16px;
        }
    </style>
</head>

<body class="w3-indigo">
    <?php
    require "header.php";
    ?>

    <center>
        <?php

        while ($rows = mysqli_fetch_assoc($res)) {
        ?>
            <h1 class="w3-tag w3-round w3-pink w3-center">Details</h1>
            <div class="w3-padding w3-row">
                <div class="w3-half w3-padding">
                    <p class="w3-green w3-padding w3-tag"> <span class="w3-text-white "><?php echo $rows['pname']; ?></span></p><br>
                    <img src="img/<?php echo $rows['pimg']; ?> " onclick="document.getElementById('modal01').style.display='block'" class="w3-padding w3-panel " style="height: 300px; width: 300px;">
                    <?php

                    $sql1 = "select * from cart where uid=$_SESSION[id]  and pid=$_GET[id]";
                    $res1 = mysqli_query($con, $sql1);
                    ?>
                    <form class="w3-red w3-hover-red" method="post" action="addcart.php?uid=<?php echo $_SESSION['id']; ?>&pid=<?php echo $_SESSION['pid']; ?>">
                        <input type="submit" name="cart" value="<?php if (mysqli_num_rows($res1)) {
                                                                    echo "Remove from cart";
                                                                } else {
                                                                    echo "Add to cart";
                                                                } ?>" class="w3-button w3-hover-red w3-large w3-black">
                    </form>
                </div>

                <div class="w3-half w3-padding ">
                    <br>
                    <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
                        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                        <div class="w3-modal-content w3-animate-zoom">
                            <img src="img/<?php echo $rows['pimg']; ?>" style="width:100%">
                        </div>
                    </div>

                    <p class="w3-green w3-padding w3-tag">Code : <?php echo $rows['code']; ?></p><br>
                    <p class="w3-green w3-padding w3-tag">HSN : <?php echo $rows['HSN']; ?></p><br>
                    <p class="w3-green w3-padding w3-tag">pack : <?php echo $rows['pack']; ?></p><br>
                    <p class="w3-green w3-padding w3-tag">Quantity : <?php echo $rows['Quantity']; ?></p><br>

                </div>
            </div>
        <?php
        }
        ?>
    </center>

</body>

</html>