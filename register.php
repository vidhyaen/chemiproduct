
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body
        {
            background-color: #8c52ce;
            font-family: sans-serif;
            color:yellow;

        }
    </style>
        </head>
    <body>
        <div class="w3-row">
            <div class="w3-quarter w3-padding"></div>
             <div class="w3-half w3-center w3-padding">
            
        <h1 class="w3-center w3-tag w3-blue">REGISTER</h1><br>
        
        <form method="post" action="regph.php">
            <b>
        <label>First Name</label><br><br>
    
            <input  type="text" name="fname"><br><br>
            <label>Last Name</label><br><br>
            <input  type="text" name="lname"><br><br>
            <label>Email id</label><br><br>
            <input type="text" name="email"><br><br>
             <label>Password</label><br><br>
            <input  type="password" name="pass1"><br><br>
             <label>Confirm password</label><br><br>
            <input type="password" name="pass2"><br><br>
            <label>Mobile no</label><br><br>
            <input  type="text" name="phno"><br><br>
            <input type="submit" value="Register" name="register" class="w3-button w3-round-xlarge w3-pink">                        
            </b>
            
        </form></div><div class="w3-quarter w3-padding"></div>
            </div>
    </body>
</html>