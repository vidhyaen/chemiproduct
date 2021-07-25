<?php
session_start();
if (isset($_SESSION['id'])) {
    header("Location:main.php");
    exit();
}

$user = "";
if (isset($_GET['error'])) {
    $user = $_GET['email'];
}
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
    <script src="https://kit.fontawesome.com/c330d3c861.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url(b.jpg);
            background-size: cover;
            background-attachment: scroll;
            background-position: center;
            text-shadow: 1px 1px 0 #444;
        }

        a {
            text-decoration: none;
        }
    </style>
    <link rel="stylesheet" href="w3.css">
</head>

<body>
    <div class="w3-row">


        <center>
            <div class="w3-container w3-black">
                <h1>CHEMI PRODUCTS</h1>
            </div> <br><br><br>
            <h3 class="w3-large w3-card w3-center w3-blue w3-tag">LOGIN</h3>
            <form method="post" action="loginph.php">
                <br><br>
                <label>Username</label><br><br>
                <input type="email" name="email" value="<?php echo $user; ?>"><br><br>
                <label>Password</label><br><br><input type="password" name="pass" value=""><br><br><br>

                <input type="submit" value="login" name="login" class="w3-button w3-pink w3-round-xxlarge"><br><br>
                <a href="register.php">Do you have account?->register</a><br>
            </form>
            <?php
            if (isset($_GET['error'])) {
            ?>

                <div class="w3-container w3-panel w3-center w3-tag w3-padding w3-red">
                <?php
                if ($_GET['error'] == "emptyfields") {
                    echo "Fill all fields";
                } else if ($_GET['error'] == "sqlError") {
                    echo "Something went wrong";
                } else if ($_GET['error'] == "PasswordIncorrect") {
                    echo "password mismatched";
                } else if ($_GET['error'] == "nouser") {
                    echo "No user found create an account";
                }
            }

                ?></div>
                <div class="w3-container w3-bottom w3-padding w3-black"><i class="fab fa-apple w3-left w3-large w3-text-pink"></i><i class="far fa-copyright w3-text-yellow w3-right w3-large">copyright</i>
                </div>
    </div>
    </div>

</body>

</html>