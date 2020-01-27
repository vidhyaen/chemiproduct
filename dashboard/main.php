<?php
require "db.php";
session_start();
if(!isset($_SESSION['admin'])){
    header("location:index.php");
    exit();
}
$sql = "select * from account";
$res = mysqli_query($con, $sql);

?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
<title>maindashboard</title>
    <style>
        body {
          
            text-decoration-color: darkslateblue;
            font-family: 'Ubuntu', sans-serif;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            color: blue;
        }
    </style>
</head>

<body>
    <?php
    require "header.php";

    ?>
    <div class="w3-padding">
        <p class="w3-text-pink"><b>List of Users details</b></p>
        
            <ol class="w3-border-black w3-border w3-yellow  ">
                <?php
                while($rows =mysqli_fetch_assoc($res))
                {


                
                ?>

                <li>
    
                    <ul>
                        <li class="w3-round-xxlarge"><p>First name : <?php echo $rows['fname']?></p></li>
                        <li class="w3-round-xxlarge " ><p>Last name : <?php echo $rows['lname']?></p></li>
                        <li ><p>Email : <?php echo $rows['email']?></p> </li>
                    </ul>
                </li><hr class="w3-yellow" style="border:dashed; border-color:white;">
<?php
                } 
?>
            </ol>
    
    </div>

</body>

</html>