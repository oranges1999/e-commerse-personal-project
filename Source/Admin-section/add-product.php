<?php
include "../Handler/check-login-admin.php"; 
require "../Handler/connect-db.php";
$sql = "SELECT * FROM `categories`";
$sQLCategories = mysqli_query($connect, $sql);
$categories = mysqli_fetch_all($sQLCategories);
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
            <h4>Add Product</h4>
        </div>
        <div>
            <form action="./actions/add-action.php" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>Product name</td>
                        <td><input type="text" name="name" required></td>
                    </tr>
                    <tr>
                        <td>Product Price</td>
                        <td><input type="number" name="price" required></td>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td>
                            <select name="category_id">
                                <option value="#"></option>
                                <?php foreach ($categories as $key => $value):?>
                                    <option value="<?php echo $value[0]?>"><?php echo $value[1]?></option>
                                    <?php var_dump($key);?>
                                <?php endforeach?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Quantity</td>
                        <td><input type="number" name="qty"></td>
                    </tr>
                    <tr style="display: none">
                        <td>Created By</td>
                        <td><input type="number" name="created_by" value="<?php echo $_SESSION['user']['id']?>"></td>
                    </tr>
                    <tr>
                        <td>Product Image</td>
                        <td><input type="file" name="productImg" required></td>
                    </tr>
                    <tr>
                        <td><button type="submit">Add</button></form></td>
                        <td><form action="./product.php"><button type="submit">Cancel</button></form></td>
                    </tr>
                </table>
        </div>
    </main>
    <?php require_once "./script.php"?>
</body>
</html>