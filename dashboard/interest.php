<?php
require "db.php";
session_start();
$sql = "select * from productlist";
$res = mysqli_query($con, $sql);
$sql1 = "select * from account";
$res1 = mysqli_query($con, $sql1);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../w3.css">
  <title>interest</title>
</head>

<body>
  <?php
    require "header.php";
  ?>
  <div class="w3-container">
    <h1>User interest</h1>
    <div class="w3-responsive">
      <table class="w3-table-all">
        <tr>
          <th class="w3-text-green">Name</th>
          <?php
          while ($rows = mysqli_fetch_assoc($res)) {
          ?>
            <th class="w3-text-blue"><?php echo $rows['pname']; ?></th>
          <?php
          }
          ?>
        </tr>
          <?php
          while ($rows = mysqli_fetch_assoc($res1)) {
          ?>
        <tr>
          <td class="w3-text-green"><?php echo $rows['fname']." ".$rows['lname']; ?></td>
          <?php 
            $sql2 = "SELECT * from productview where uid=$rows[id]";
            $res2 = mysqli_query($con,$sql2);
            while($row = mysqli_fetch_assoc($res2)){
              for($i=1;$i<=40;$i++){
                ?>  
              <td class="w3-text-red">
               <?php  echo $row['p'.$i];?>
              </td>
              <?php
              }
            }
          ?>
        </tr>
          <?php
          }
          ?>
      </table>
    </div>
  </div>
</body>

</html>