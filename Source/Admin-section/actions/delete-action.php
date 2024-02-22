<?php
require "../../Handler/connect-db.php";
$sql = "select productImg from products where id = '$_REQUEST[id]'";
$Sqlproduct = mysqli_query($connect, $sql);
$productImg = mysqli_fetch_assoc($Sqlproduct);
$img = $productImg['productImg'];
$deleteSQL = "delete from products where id = '$_REQUEST[id]'";
var_dump($deleteSQL);
if (file_exists($img)){
    unlink($img);
}
mysqli_query($connect, $deleteSQL);
header("location: ../product.php");