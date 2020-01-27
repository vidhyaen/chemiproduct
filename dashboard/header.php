<div class="w3-bar w3-red">
  <a href="index.php" class="w3-bar-item w3-button">Dashboard</a>
  <form class="w3-hide-small w3-right" action="logout.php" method="post">
    <input class="w3-bar-item w3-button" type="submit" value="Logout" name="logout">
  </form>
  <a href="feedback.php" class="w3-bar-item w3-button w3-hide-small w3-right">Feedback</a>
  <a href="viewer.php" class="w3-bar-item w3-button w3-hide-small w3-right">Viewers</a>
  <a href="order.php" class="w3-bar-item w3-button w3-hide-small w3-right">Order</a>
  <a href="productlist.php" class="w3-bar-item w3-button w3-hide-small w3-right">Product List</a>
  <a href="interest.php" class="w3-bar-item w3-button w3-hide-small w3-right">User interest</a>

  <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-right">Users</a>

  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
</div>

<div id="demo" class="w3-bar-block w3-red w3-hide w3-hide-large w3-hide-medium">
  <a href="index.php" class="w3-bar-item w3-button">Dashboard</a>
  <a href="feedback.php" class="w3-bar-item w3-button">Feedback</a>
  <a href="viewer.php" class="w3-bar-item w3-button">Viwers</a>
  <a href="order.php" class="w3-bar-item w3-button">Order</a>
  <a href="productlist.php" class="w3-bar-item w3-button">product List</a>
  <a href="interest.php" class="w3-bar-item w3-button">User interest</a>
  <a href="index.php" class="w3-bar-item w3-button">Users</a>
</div>


<script>
  function myFunction() {
    var x = document.getElementById("demo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }
</script>