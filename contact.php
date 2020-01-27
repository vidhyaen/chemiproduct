<?php
session_start();
if(!isset($_SESSION['id']))
{
    header("Location:index.php");
    exit();
}?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>contact</title>
    <script src="https://kit.fontawesome.com/c330d3c861.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-image:url(c.jpg);
                background-size:cover;
                background-attachment:scroll;
                background-position:center;
            text-shadow:1px 1px 0 #444;
            

        }

        p {
            width: 100;
            height: 100;
            padding: 10px;

        }

        h1 {
            color: darkgreen;
        }

        a {
            text-decoration: none;
            color: red;
            float: right;
            padding: 8px;
            
  padding: 8px 16px;
        }
    </style>
</head>

<body>
    <?php
    require('header.php');
    ?>
    
    <div class="w3-container">
        <h1 class="w3-padding w3-text-darkgreen w3-center">Contact  <i class="far fa-address-card w3-padding w3-xxlarge"></i></h1>
        <div class="w3-container w3-xlarge w3-center w3-padding w3-panel  w3-border-red" style=" border-style:dotted;">
            VIDHYA<br>
            ADDRESS:53,DEVAKI ILLAM,<br>
            VINAYAKAR KOVIL 7TH STREET,<br>
            MOOLAPALAYAM<br>
            ERODE-638002<br>
            MOBNO:9080729874</div>
            <div class="w3-container">
        <h1 class="w3-padding w3-text-darkgreen  w3-center">Comments <i class="fas fa-comment-dots w3-xxlarge"></i></h1></h1>
        <div class="w3-container w3-padding w3-panel w3-xlarge w3-center  w3-border-red" style=" border-style:dotted;">
            If you have any queries <br> you give your feedback in contact us form<a href="contactus.php" class="green">clickhere-></a> </div>
           
    </div>
</body>

</html>