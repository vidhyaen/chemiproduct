<?php
require("db.php");
$sql1="select * from productlist where pcat='Chemistry'";
$sql2="select * from productlist where pcat='Physics'";
$sql3="select * from productlist where pcat='Biology'";
$res1=mysqli_query($con,$sql1);
$res2=mysqli_query($con,$sql2);
$res3=mysqli_query($con,$sql3);

?>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">

    <style>
    body{
        font-family: 'Alata', sans-serif;
    
    }
        
        a
            {
                text-decoration: none;
                color:red;
                float: right;
                padding: 8px;
            }
        h2
        {
            color:darkgreen;
        }
        p{
            color: blueviolet;
        }
        img{
           width:250px;
            height:250px;

        }
        img:hover{
            width:270px;
            height:270px;
        }
        .about
		{
			font-size: 30px;
			color:black;
		}
        .contact
		{
			font-size: 30px;
			color:black;
		}
    </style>
        </head>
    <body class="w3-padding">
    <div class="w3-center w3-yellow w3-padding-16 w3-text-black"><b>Chemical product</b></div>
        
<?php
require('header.php');
?>

<div class="w3-center">
    <h5 class="w3-card w3-round-small w3-padding w3-text-indigo  w3-pink"><b>Chemistry</b></h5>
</div>
<div class="w3-row">
    <?php
        while($rows=mysqli_fetch_assoc($res1))
        {    
        ?>
    <div class="w3-quarter w3-padding w3-center">
        <div class="w3-panel w3-padding w3-card-4"> 
        <h4 class="w3-text-red w3-padding w3-center w3-black" title="<?php echo $rows['pdes']; ?>"><?php echo $rows['pname']; ?></h4>
        <img class=" w3-padding" src="img/<?php echo $rows['pimg']; ?>">
        <p class="w3-panel w3-padding"><b>Price : <?php echo $rows['pmrp']; ?></b></p>
        </div>   
    </div>
    <?php 
        }
        ?> 
</div>  
        <div class="w3-center">
    <h5 class="w3-card w3-round-small w3-padding  w3-text-indigo  w3-pink"><b>Physics</b></h5>
</div>
<div class="w3-row">
    <?php
        while($rows=mysqli_fetch_assoc($res2))
        {    
        ?>
    <div class="w3-quarter w3-padding w3-center">
        <div class="w3-panel w3-padding w3-card-4"> 
        <h4 class="w3-text-red w3-padding w3-center w3-black" title="<?php echo $rows['pdes']; ?>"><?php echo $rows['pname']; ?></h4>
        <img class=" w3-padding" src="img/<?php echo $rows['pimg']; ?>">
        <p class="w3-panel w3-padding"><b>Price : <?php echo $rows['pmrp']; ?></b></p>
        </div>   
    </div>
    <?php 
        }
        ?> 
</div>
<div class="w3-center">
    <h5 class="w3-card w3-round-small w3-padding  w3-text-indigo  w3-pink"><b>Biology</b></h5>
</div>
<div class="w3-row">
    <?php
        while($rows=mysqli_fetch_assoc($res3))
        {    
        ?>
    <div class="w3-quarter w3-padding w3-center">
        <div class="w3-panel w3-padding w3-card-4"> 
        <h4 class="w3-text-red w3-padding w3-center w3-black" title="<?php echo $rows['pdes']; ?>"><?php echo $rows['pname']; ?></h4>
        <img class=" w3-padding" src="img/<?php echo $rows['pimg']; ?>">
        <p class="w3-panel w3-padding"><b>Price : <?php echo $rows['pmrp']; ?></b></p>
        </div>   
    </div>
    <?php 
        }
        ?> 
</div>


    </body>
</html>