<?php
require "db.php";
$sql="select * from productlist";
$res=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../w3.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
</head>
<body>
    <?php
    require "header.php";
    ?>
    <div class="w3-card-4 ">
    <h1 class="w3-black-8 w3-center">Product List</h1>
    <?php
    while($rows=mysqli_fetch_assoc($res))
    {
      
    ?>
    <p class="w3-panel  w3-text-white">  <p class=" w3-padding  w3-light-green ">Product name : <?php echo $rows['pname']; ?> </p> <br>
     <p class=" w3-light-blue w3-padding" >  Product Category :  <?php echo $rows['pcat'];?></p></p>
    <?php
    }?>
    </div>
    <div class="w3-black w3-padding-16"> </div>
</body>
</html>