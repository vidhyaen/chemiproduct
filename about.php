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
 <link rel="stylesheet" href="w3.css">

<style>
body{ 



	background-image:url("Y.jpg");
    animation:top;
	background-repeat:no-repeat;
    background-position: top left;


 
    text-shadow:1px 1px 0 #444;
}
p{
    width:100;
    height:100;
    
}
h1
        {
            color:darkgreen;
        }
        a
            {
                text-decoration: none;
                color:red;
                float: right;
                padding: 8px;
               
            }
            
</style>
</head>
<script src="https://kit.fontawesome.com/c330d3c861.js" crossorigin="anonymous"></script>
<body>
<?php
require('header.php');
?>
<h1 class="w3-padding w3-text-darkgreen w3-center w3-animate-top">About us  <i class="fas fa-heart w3-xlarge"></i></h1>
</div>
<div>
<div class="w3-container"><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
  <div class="w3-container w3-xlarge w3-text-blue w3-padding w3-border-white w3-animate-top">

     This is the company website of Sabharies Scientific laboratory.<br> 
      In this customer can view the products in 3 categories that is physic ,chemistry ,biology.<br>
       If you need anymore apparatus or chemical products you can contact us throug Mobile no <b class="w3-text-red">9443497967.</b><br>
       If you need delivery we will send material with my staff but you should sent the clear address to us.
        </div>
		
		</p>
        </div>
</body>
</html>