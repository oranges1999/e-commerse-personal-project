<?php
include "../Handler/check-login-admin.php"; 
require "../Handler/connect-db.php";
$id = $_REQUEST["id"];
$sqlproduct = "Select p.id as productId, p.price, p.productImg, p.name, p.qty, c.id as categoryId, c.category  from products p inner join categories c on p.category_id = c.id where p.id = '$id';";
$sQLProducts = mysqli_query($connect, $sqlproduct);
$product = mysqli_fetch_assoc($sQLProducts);
$sqlcategory = "Select * from categories";
$sQlcategories = mysqli_query($connect, $sqlcategory);
$categories = mysqli_fetch_all($sQlcategories);
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
            <h4>Product Info Change</h4>
        </div>
        <div>
            <table>
                <form id="change" action="./actions/change-action.php" enctype="multipart/form-data" method="POST">
                    <img height="300px" src="./image/<?php echo $product["productImg"] ?>" alt="">
                    <table>
                    <input type="number" name="id" value="<?php echo $_REQUEST["id"] ?>" hidden>
                    
                    <tr>
                        <td>Product name</td>
                        <td><input type="text" name="name" value="<?php echo $product["name"] ?>"></td>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td>
                            <select name="category_id" required>
                                <option value="<?php echo $product['categoryId']?>"><?php echo $product['category']?></option>
                                <?php foreach ($categories as $key => $value):?>
                                    <option value="<?php echo $value[0]?>"><?php echo $value[1]?></option>
                                    <?php var_dump($key);?>
                                <?php endforeach?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Quantity</td>
                        <td><input type="number" name="qty" id="" value="<?php echo $product['qty']?>"></td>
                    </tr>
                    <tr>
                        <td>Product Price</td>
                        <td><input type="number" name="price" value="<?php echo $product["price"] ?>"></td>
                    </tr>
                    <tr>

                    </tr>
                    <tr>
                        <td><button form="change" type="submit" id="submit-btn">Change</button></td>
                        </form>
                        <td><form action="./product.php" id="back"><button form="back" id="back-btn">Cancel</button></form></td>
                    </tr> 
            </table>
        </div>
    </main>
    <?php require_once "./script.php"?>
</body>
</html>