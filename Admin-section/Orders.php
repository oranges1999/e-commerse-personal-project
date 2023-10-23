<?php 
include "../Handler/check-login-admin.php"; 
require "../Handler/connect-db.php";
$sql = "SELECT o.id, u.fullname, u.phone, u.address, u.created_at, u.updated_at, s.meaning FROM `orders` o INNER JOIN users u ON o.user_id = u.id INNER JOIN statuses s ON o.status_id = s.id ORDER BY o.id DESC";
$sQLOrder = mysqli_query($connect, $sql);
$orders = mysqli_fetch_all($sQLOrder);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once "./style.php"?>
</head>
<body>
    <?php require_once "./header.php"?>
    <main>
        <div>
            <h4>Orders tab</h4>
        </div>
        <div>
        <table border="1">
        <tr>
            <th>STT</th>
            <th>User</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Status</th>
            <th colspan="2">Actions</th>
        </tr>
        <?php foreach ($orders as $key => $value):?>
        <tr>
            <td><?= $key+1; ?></td>
            <td><?php echo $value[1]; ?></td>
            <td><?php echo $value[2]; ?></td>
            <td><?php echo $value[3]; ?></td>
            <td><?php echo $value[4]; ?></td>
            <td><?php echo $value[5]; ?></td>
            <td><?php echo $value[6]; ?></td>
            <td><a href="./order-details.php?id=<?php echo $value[0]?>">Details</a></td>
            <td><a href="./actions/delete-order.php?id=<?php echo $value[0]?>">Delete</a></td>
        </tr>
        <?php endforeach?>
     </table>
        </div>
    </main>
    <?php require_once "./script.php"?>
</body>
</html>