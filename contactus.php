<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <title>contactus</title>

 <style>
 body{
     
    background: #ff5f6d; /* fallback for old browsers */
  background: -webkit-linear-gradient(to bottom, #ff5f6d, #ffc371); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to bottom, #ff5f6d, #ffc371);
  font-size:18px;

    padding:10px;
 }
 </style>
 </head>

<body>
<form method="post"action="contactinc.php">
<b>
<h1 class=" w3-text-white">Contact Us</h1><br><br>
<label>Full Name</label><br><br>
<input type="text" name="fname" value=""><br><br>
<label>Email</label><br><br>
<input type="email" name="email" value=""><br><br>
<label>Message</label><br><br>
<textarea rows="15" cols="100" name="msg"> </textarea><br><br>

<input class="w3-round-xxlarge w3-border-red w3-black" style="width:8%" type="submit" name="submit" value="submit">
</b>
</form>
</body>
</html>