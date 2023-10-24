<?php 
include "../Handler/check-login-admin.php"; 
require "../Handler/connect-db.php";
$sql = "SELECT o.id, productImg, name, price, od.qty FROM `order_details` od INNER JOIN orders o ON od.order_id = o.id INNER JOIN products p ON od.product_id = p.id WHERE o.id = '$_REQUEST[id]'";
$sQLOrder = mysqli_query($connect, $sql);
$order = mysqli_fetch_all($sQLOrder);
// echo "<pre>";
// var_dump($order);
// die;
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
    <div class="col-lg-6 col-md-6">
        <div class="text-dark">Order</div>
        <table border=1 style="background-color: white;">
            <thead>
                <tr>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Qty</th>
                </tr>  
            </thead>
            <tbody>
                <?php foreach($order as $key => $value):?>
                    <tr>
                        <td><img height="200px" width="100%" src="../asset/productImg/<?php echo $value[1]?>" alt=""></td>
                        <td><?php echo $value[2]?></td>
                        <td><?php echo $value[3]?>$</td>
                        <td><?php echo $value[4]?></td>
                    </tr>
                <?php endforeach?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">Total</td>
                    <td colspan="2">
                        <?php
                            $total = 0;
                            foreach($order as $key => $value){
                                $sum = $value[3]*$value[4];
                                $total += $sum;
                            }
                            echo $total."$";
                        ?>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="col-lg-6 col-md-6">
        <?php 
        require "../Handler/connect-db.php";
        $sql = "SELECT o.id, u.fullname, u.phone, u.address FROM orders o INNER JOIN users u ON o.user_id = u.id WHERE o.id = '$_REQUEST[id]'";
        $sQLuser = mysqli_query($connect, $sql);
        $user = mysqli_fetch_assoc($sQLuser);
        ?>
        <div class="text-dark">User Infomation</div>
        <div>
        <table border=1 style="background-color: white;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                </tr>  
            </thead>
            <tbody>
                    <tr>
                        <td><?php echo $user['fullname']?></td>
                        <td><?php echo $user['phone']?></td>
                        <td><?php echo $user['address']?></td>
                    </tr>
            </tbody>
        </table>
            <!-- <a href="./Handler/place-order.php">Place your order</a> -->
        </div>
    </div>
    <div class="col-lg-6 col-md-6">
        <?php 
        require "../Handler/connect-db.php";
        $sql = "SELECT id,meaning FROM statuses";
        $sQLstatus = mysqli_query($connect, $sql);
        $status = mysqli_fetch_all($sQLstatus);
        ?>
        <form action="./actions/change-status.php?">
            <input type="text" name="order_id" value="<?php echo $user['id']?>" hidden>
            <select name="status_id">
                <option value="#"></option>
                <?php foreach ($status as $key => $value):?>
                    <option value="<?php echo $value[0]?>"><?php echo $value[1]?></option>
                <?php endforeach?>
            </select>
            <button type="submit">Confirm</button>
        </form>
    </div>
    </main>
    <?php require_once "./script.php"?>
</body>
</html>