<?php
include "../../Handler/connect-db.php";
date_default_timezone_set('Asia/Ho_Chi_Minh');
$ptime = date("h:i:s A, d-m-Y",time());
$insert_keys = [];
$insert_values = [];
$tmp_name = $_FILES["productImg"]["tmp_name"];
$fileName = time() . rand(1,9999) . $_FILES["productImg"]["name"];
$file = "../../asset/productImg/$fileName";
foreach ($_REQUEST as $key => $value) {
    $insert_keys[] = $key;
    $insert_values[] = "'$value'";
}
$insert_sql = "INSERT INTO products (".implode(", ", $insert_keys).", productImg, created_at, updated_at".") VALUES (".implode(",",$insert_values).",'$file','$ptime','$ptime'".")" ;
mysqli_query($connect, $insert_sql);
move_uploaded_file($tmp_name, $file);
header("location: ../product.php");