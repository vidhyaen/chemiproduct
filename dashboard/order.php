<?php
require 'db.php';
$sql = "select * from orders where status='false'";
$res = mysqli_query($con, $sql);
$sql1 = "select * from orders where status='true'";
$res1 = mysqli_query($con, $sql1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../w3.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>order</title>
</head>

<body>
    <?php
    require("header.php");
    ?>
    <center>
        <h1 class="w3-black w3-tag-">Order views </h1>
    </center>
    <p>Order Pending</p>
    <table style=" border-style:solid blue 5px" class="w3-yellow">

        <tr class="w3-padding">
            <th class="w3-padding">Id</th>
            <th class="w3-padding">Name</th>
            <th class="w3-padding">Product Name
            </th>
            <th class="w3-padding">Quantity
            </th>
            <th class="w3-padding">Amount
            </th>
            <th class="w3-padding">Address
            </th>
            <th class="w3-padding">Mobile no
            </th>
            <th class="w3-padding">Created
            </th>
            <th class="w3-padding">Status
            </th>
            <th class="w3-padding">Delete
            </th>
        </tr>
        <?php
        while ($rows = mysqli_fetch_assoc($res)) {
        ?>
            <tr class="w3-padding">
                <td class="w3-padding"> <?php echo $rows['id']; ?> </td>
                <td class="w3-padding"><?php echo $rows['name']; ?> </td>
                <td class="w3-padding"> <?php echo $rows['pname']; ?> </td>
                <td class="w3-padding"><?php echo $rows['qua']; ?> </td>
                <td class="w3-padding"><?php echo $rows['amt']; ?> </td>
                <td class="w3-padding"><?php echo $rows['address']; ?> </td>
                <td class="w3-padding"><?php echo $rows['mno']; ?> </td>
                <td class="w3-padding"><?php echo date("d.m.Y g:i A", strtotime($rows['created'])); ?> </td>
                <td class="w3-padding">
                    <?php
                    if ($rows['status'] == "false") {
                    ?>
                        <form action="changeStatus.php?id=<?php echo $rows['id']; ?>" method="post">
                            <input type="submit" class="w3-button w3-yellow w3-hover-green w3-text-red" value="Check Order" name="place">
                        </form>
                    <?php
                    }
                    ?>
                </td>
                <td class="w3-padding">
                    <form action="deleteOrder.php?id=<?php echo $rows['id']; ?>" method="post">
                        <input type="submit" class="w3-button w3-yellow w3-hover-green w3-text-red" value="Delete Order" name="delete">
                    </form>
                </td>


            </tr>
        <?php
        }
        ?>
    </table>

    <p>Order Processed</p>
    <table style=" border-style:solid blue 5px" class="w3-yellow">

        <tr class="w3-padding">
            <th class="w3-padding">Id</th>
            <th class="w3-padding">Name</th>
            <th class="w3-padding">Product Name
            </th>
            <th class="w3-padding">Quantity
            </th>
            <th class="w3-padding">Address
            </th>
            <th class="w3-padding">Mobile no
            </th>
            <th class="w3-padding">Created
            </th>
            <th class="w3-padding">Status
            </th>
            <th class="w3-padding">Payment
            </th>
        </tr>
        <?php
        while ($rows = mysqli_fetch_assoc($res1)) {
        ?>
            <tr class="w3-padding">
                <td class="w3-padding"> <?php echo $rows['id']; ?> </td>
                <td class="w3-padding"><?php echo $rows['name']; ?> </td>
                <td class="w3-padding"> <?php echo $rows['pname']; ?> </td>
                <td class="w3-padding"><?php echo $rows['qua']; ?> </td>
                <td class="w3-padding"><?php echo $rows['address']; ?> </td>
                <td class="w3-padding"><?php echo $rows['mno']; ?> </td>
                <td class="w3-padding"><?php echo date("d.m.Y g:i A", strtotime($rows['created'])); ?> </td>
                <td class="w3-padding">
                    <?php
                    if ($rows['status'] == "true") {
                    ?>
                        <form action="changeStatus.php?id=<?php echo $rows['id']; ?>" method="post">
                            <input type="submit" class="w3-button w3-green w3-hover-red w3-text-white" value="Order Checked" name="cancel">
                        </form>
                    <?php
                    }
                    ?>
                </td>
                <td class="w3-padding">
                    <?php
                    if ($rows['payment'] == "false") {
                    ?>
                        <form action="payment.php?id=<?php echo $rows['id']; ?>" method="post">
                            <input type="submit" class="w3-button w3-yellow w3-hover-green w3-text-red" value="Payment Not Paid" name="pay">
                        </form>
                    <?php
                    } else {
                    ?>
                        <form action="payment.php?id=<?php echo $rows['id']; ?>" method="post">
                            <input type="submit" class="w3-button w3-green w3-hover-red w3-text-white" value="Payment Paid" name="paid">
                        </form>
                    <?php
                    }
                    ?>
                </td>


            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>