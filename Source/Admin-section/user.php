<?php 
include "../Handler/check-login-admin.php"; 
require "../Handler/connect-db.php";
$sql = "SELECT u.id, u.username, u.role, u.fullname, u.phone, u.address, u.created_at, u.updated_at, u.status FROM `users` u ORDER BY u.id DESC";
$users = mysqli_query($connect, $sql);
$users = mysqli_fetch_all($users);
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
            <h4>User tab</h4>
        </div>
        <div>
        <table border="1">
        <tr>
            <th>STT</th>
            <th>Username</th>
            <th>Role</th>
            <th>User Fullname</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Date Created</th>
            <th>Date Updated</th>
            <th>Status</th>
        </tr>
        <?php foreach ($users as $key => $value):?>
        <tr>
            <td><?= $key+1; ?></td>
            <td><?php echo $value[1]; ?></td>
            <td>
                <?php 
                if($value[2]==1){
                    echo "Admin";
                }else{
                    echo "Normal user";
                }
                ?>
            </td>
            <td><?php echo $value[3]; ?></td>
            <td><?php echo $value[4]; ?></td>
            <td><?php echo $value[5]; ?></td>
            <td><?php echo $value[6]; ?></td>
            <td><?php echo $value[7]; ?></td>
            <td>
                <?php 
                if($value[8]==1){
                    echo "Active";
                }else{
                    echo "Closed";
                }
                ?>
            </td>
        </tr>
        <?php endforeach?>
     </table>
        </div>
    </main>
    <?php require_once "./script.php"?>
</body>
</html>