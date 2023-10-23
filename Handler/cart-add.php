<?php
session_start();
require "./connect-db.php";
$sql = "select * from products where id = '$_REQUEST[id]'";
$product = mysqli_query($connect, $sql);
$product = mysqli_fetch_assoc($product);
if(isset($_SESSION['product'][$product['id']])){
    $_SESSION['product'][$product['id']]['buyQty'] += 1;
}else{
    $_SESSION['product'][$product['id']] = $product;
    $_SESSION['product'][$product['id']]['buyQty'] = 1;
}
header("location: ../product.php?id=$_REQUEST[id]&confirm=1");
