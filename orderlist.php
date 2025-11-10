<?php
    include('config/koneksi.php');

    $CustomerID = $_GET['CustomerID'];

    $sql = "SELECT OrderID, OrderDate FROM orders WHERE CustomerID = '$CustomerID'";

    $result = mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
</head>
<body>
    <table>
        <tr>
            <th>OrderId</th>
            <th>OrderDate</th>
            <th>Link</th>
        </tr>
        <?php while($data = mysqli_fetch_assoc($result)):?>
            <tr>
            <td><?php echo $data['OrderID']?></td>
            <td><?php echo $data['OrderDate']?></td>
            <td><a href="orderdetail.php?OrderID=<?php echo $data['OrderID']?>">Order Details</a></td>
            </tr>
        <?php endwhile?>
    </table>
    <a href="customer.php">Kembali ke list Customer</a
</body>
</html>