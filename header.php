 <html>

 <head>
   <style>
     form:hover,a:hover {
       border-radius: 20px;
       background-color: #555;
       color: yellow;
       padding: 8px 16px;
     }

     form,a
            {
                text-decoration: none;
                color:red;
                float: right;
                padding: 8px;
            }
     form,input {
       color: red;
       float: right;
       background-color: black;
       border: 0;
       transform: 1s;
     }

     form:hover,input:hover{
       background-color: #555;
       color: yellow;
       border-radius: 20px;
     }
   </style>
 </head>

 </html>


 <div class="w3-container w3-card w3-round-small w3-padding w3-black">

   <form action="logout.php" method="post">
     <input type="submit" value="Logout" name="logout">
   </form>
   <a href="about.php">About</a>
   <a href="contact.php">Contact</a>
   <a href="cart.php">Cart</a>
   <a href="main.php">Home</a>

 </div>