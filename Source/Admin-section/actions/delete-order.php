<?php
require "../../Handler/connect-db.php";
$deleteSQL = "delete from order_details where order_id = '$_REQUEST[id]'";
mysqli_query($connect, $deleteSQL);

$deleteSQL = "delete from orders where id = '$_REQUEST[id]'";
mysqli_query($connect, $deleteSQL);

header("location: ../orders.php");