<?php 
include "../Handler/check-login-admin.php"; 
require "../Handler/connect-db.php";
$sql = "SELECT * FROM `products` INNER JOIN categories ON products.category_id = categories.id";
$sQLProducts = mysqli_query($connect, $sql);
$products = mysqli_fetch_all($sQLProducts);
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
            <h4>Product tab</h4>
            <a href="./add-product.php">Add product</a>
        </div>
        <div>
        <table border="1">
        <tr>
            <th>STT</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>QTY</th>
            <th>Image</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($products as $key => $value):?>
        <tr>
            <td><?= $key+1; ?></td>
            <td><?php echo $value[1]; ?></td>
            <td><?php echo $value[10]; ?></td>
            <td><?php echo $value[7]; ?></td>    
            <td><?php echo $value[3]; ?></td>
            <td><img width="300px" src="./image/<?php echo $value[8]?>" alt=""></td>
            <td><?php echo $value[5]; ?></td>
            <td><?php echo $value[6]; ?></td>
            <td>
                <a href="./change-product.php?id=<?php echo $value[0] ?>">Change</a>
                <a href="./actions/delete-action.php?id=<?php echo $value[0] ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach?>
     </table>
        </div>
    </main>
    <?php require_once "./script.php"?>
</body>
</html>