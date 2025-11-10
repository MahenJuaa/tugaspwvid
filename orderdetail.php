<?php
    include('config/koneksi.php');

    $OrderID = $_GET['OrderID'];

    $sql = "SELECT o.OrderID, p.ProductName, o.UnitPrice, o.Quantity, o.Discount, 
            (o.UnitPrice * o.Quantity - o.Discount) AS SubTotal
            FROM orderdetails o
            JOIN products p ON o.ProductID = p.ProductID
            WHERE OrderID = '$OrderID'";

    $result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
</head>
<body>
    <table>
         <tr>
            <th>OrderId</th>
            <th>ProductName</th>
            <th>UnitPrice</th>
            <th>Quantity</th>
            <th>Discount</th>
            <th>Sub Total</th>
        </tr>
        <?php $total =0?>
        <?php while($data = mysqli_fetch_assoc($result)):
            $total +=$data['SubTotal']?>
        <tr>
            <td><?php echo $data['OrderID']?></td>
            <td><?php echo $data['ProductName']?></td>
            <td><?php echo $data['UnitPrice']?></td>
            <td><?php echo $data['Quantity']?></td>
            <td><?php echo $data['Discount']?></td>
            <td><?php echo $data['SubTotal']?></td>
        </tr>
        <?php endwhile?>
    </table>
    <p>Total: <?php echo $total ?></p>
    <a href="customer.php">Kembali ke list Customer</a>
</body>
</html>