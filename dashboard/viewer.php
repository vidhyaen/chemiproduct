
<?php
require "db.php";
$sql="select * from visitor";
$res=mysqli_query($con,$sql);
while($rows=mysqli_fetch_assoc($res))
{
    $visitors=$rows['no'];
    $fname=$rows['fname'];
    $lname=$rows['lname'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/c330d3c861.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Viewers</title>
</head>
<body>
    <?php
    require "header.php";
    
    
    ?><br><br><br><br><br>
    <div class="w3-border-blue "style=" border-width:5px; border-style:groove; border:solid 16px;"> 
        <center>
        <h1 class="w3-text-teal">Viewers</h1>
        <h1 class="w3-text-teal">No of viewers  <i class="far fa-eye w3-text-pink w3-xxlarge"></i></h1>
        <h3 class="w3-text-pink">Visitor No : <?php echo $visitors; ?> </h3>
        </center>
    </div><br><br>
    <div class="w3-border-blue "style=" border-width:5px; border-style:groove; border:solid 16px;"> 
        <center>
        <h1 class="w3-text-teal">Last visitor  <i class="fas fa-street-view w3-text-pink w3-xxlarge"></i></h1>
        <h2 class="w3-text-teal">First name : <?php echo $fname; ?></h2>
        <h2 class="w3-text-teal">Last name  : <?php echo $lname; ?> </h2>
        </center>
    </div>
    <div class="w3-red w3-bottom w3-padding-16"> </div>
</body>
</html>