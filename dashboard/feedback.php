<?php
require "db.php";
$sql = "SELECT * from feedback";
 $res = mysqli_query($con, $sql);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>feedback</title>
    <style>
        
        body {
            background: #FC5C7D; 
background: -webkit-linear-gradient(to right, #6A82FB, #FC5C7D); 
background: linear-gradient(to right, #6A82FB, #FC5C7D); 



        }
    </style>
</head>

<body>
    <?php
    require "header.php";?>
     <?php
                while($rows =mysqli_fetch_assoc($res))
                {
                    ?>
    <div class="w3-border-white w3-padding" style=" border-width:5px; border-style:groove; border:solid 10px;"> 
    <p><?php echo $rows['id'];?></p>
     <p><?php echo $rows['name'];?></p>
     <p><?php echo $rows['msg']?></p>
     </div>
               <?php
             }
               ?>
</body>
</html>