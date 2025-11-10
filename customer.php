<?php
    include("config/koneksi.php");

    $sql = "SELECT CustomerID, CompanyName FROM customers";

    $result = mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Customer</title>
</head>
<body>
    <table>
        <tr>
            <th>CustomerID</th>
            <th>CompanyName</th>
            <th>Link</th>
        </tr>
    <?php while($data = mysqli_fetch_assoc($result)):?>
        <tr>
            <td><?php echo $data['CustomerID']?></td>
            <td><?php echo $data['CompanyName']?></td>
            <td><a href="orderlist.php?CustomerID=<?php echo $data['CustomerID']?>">Order List</a></td>
        </tr>
    <?php endwhile?>
    </table>
</body>
</html>