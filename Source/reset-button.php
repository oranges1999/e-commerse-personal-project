<?php
require "./Handler/connect-db.php";
session_start();
// session_unset();
echo "<pre>";
var_dump($_SESSION);
session_start();
include "./Handler/connect-db.php";
$sql = "SELECT * FROM `products` INNER JOIN categories ON products.category_id = categories.id limit 4";
$sQLProducts = mysqli_query($connect, $sql);
$products = mysqli_fetch_all($sQLProducts);
var_dump($products);

