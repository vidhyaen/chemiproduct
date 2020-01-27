<?php
session_start();

require("db.php");
if (!isset($_SESSION['id'])) {
    header("Location:index.php");
    exit();
} else {
    $sql = "select * from visitor where id='1'";
    $res = mysqli_query($con, $sql);
    while ($rows = mysqli_fetch_assoc($res)) {
        $visitors = $rows['no'];
    }
    $visitors++;
    $up = "update visitor set no=$visitors,fname='$_SESSION[fname]',lname='$_SESSION[lname]' where id='1'";
    mysqli_query($con, $up);
}

$sql1 = "select * from productlist where pcat='Chemistry'";
$sql2 = "select * from productlist where pcat='Physics'";
$sql3 = "select * from productlist where pcat='Biology'";
$res1 = mysqli_query($con, $sql1);
$res2 = mysqli_query($con, $sql2);
$res3 = mysqli_query($con, $sql3);

?>
<html>

<head>
    <title>main</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="https://kit.fontawesome.com/c330d3c861.js" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Alata', sans-serif;


        }

        form,
        a {
            text-decoration: none;
            color: red;
            float: right;
            padding: 8px;
        }

        h2 {
            color: darkgreen;
        }

        p {
            color: blueviolet;
        }

        img {
            width: 250px;
            height: 250px;
        }

        /* img:hover{
            width:270px;
            height:270px;
        } */
        .about {
            font-size: 30px;
            color: black;
        }

        .contact {
            font-size: 30px;
            color: black;
        }
    </style>
</head>

<body>
    <div class="w3-center w3-yellow w3-padding  w3-xlarge w3-text-black "><b>Chemical product</b></div>

    <?php
    require('header.php');
    ?>
    <?php
    if (isset($_GET['order'])) {
    ?>
        <div class="w3-panel w3-green w3-display-container">
            <span onclick="this.parentElement.style.display='none'" class="w3-button w3-large w3-display-topright">&times;</span>
            <h3>Order Processing!</h3>
            <p>We Received Your Order We Will Contact You Soon...</p>
        </div>
    <?php
    }
    ?>

    <div class="w3-center ">
        <h5 class="w3-card w3-round-small w3-padding w3-text-white w3-xlarge  w3-pink"><b>Chemistry</b></h5>
    </div>
    <div class="w3-row">
        <?php
        while ($rows = mysqli_fetch_assoc($res1)) {
        ?>
            <div class="w3-quarter w3-padding w3-center">
                <div class="w3-panel w3-padding w3-card-4">
                    <h4 class="w3-text-red w3-padding w3-center w3-black" title="<?php echo $rows['pdes']; ?>"><?php echo $rows['pname']; ?></h4>
                    <a href="detail.php?id=<?php echo $rows['id']; ?>"><img class="w3-padding" src="img/<?php echo $rows['pimg']; ?>"></a>

                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="w3-center">
        <h5 class="w3-card w3-round-small w3-padding  w3-xlarge w3-text-white  w3-pink"><b>Physics</b></h5>
    </div>
    <div class="w3-row">
        <?php
        while ($rows = mysqli_fetch_assoc($res2)) {
        ?>
            <div class="w3-quarter w3-padding w3-center">
                <div class="w3-panel w3-padding w3-card-4">
                    <h4 class="w3-text-red w3-padding w3-center w3-black" title="<?php echo $rows['pdes']; ?>"><?php echo $rows['pname']; ?></h4>
                    <a href="detail.php?id=<?php echo $rows['id']; ?>"><img class="w3-padding" src="img/<?php echo $rows['pimg']; ?>"></a>


                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="w3-center">
        <h5 class="w3-card w3-round-small w3-padding  w3-text-white w3-xlarge  w3-pink"><b>Biology</b></h5>
    </div>
    <div class="w3-row">
        <?php
        while ($rows = mysqli_fetch_assoc($res3)) {
        ?>
            <div class="w3-quarter w3-padding w3-center">
                <div class="w3-panel w3-padding w3-card-4">
                    <h4 class="w3-text-red w3-padding w3-center w3-black" title="<?php echo $rows['pdes']; ?>"><?php echo $rows['pname']; ?></h4>
                    <a href="detail.php?id=<?php echo $rows['id']; ?>"><img class="w3-padding" src="img/<?php echo $rows['pimg']; ?>"></a>

                </div>
            </div>
        <?php
        }
        ?>
    </div>



    <div class="w3-container w3-padding w3-yellow">
        <p>visitor No <i class="far fa-eye"></i> : <?php echo $visitors; ?></p>
    </div>
</body>

</html>