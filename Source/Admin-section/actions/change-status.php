<?php

include "../../Handler/connect-db.php";
date_default_timezone_set('Asia/Ho_Chi_Minh');
$ptime = date("h:i:s A, d-m-Y",time());
$shiftData = array_shift($_REQUEST);
$update_sql = "UPDATE orders SET updated_at = '$ptime', ";
foreach ($_REQUEST as $key => $value) {
    $update_values[] = "$key = '$value'";
}
$update_sql .= implode(", ", $update_values);
$update_sql .= " WHERE id = '$shiftData';";
var_dump($update_sql);
mysqli_query($connect, $update_sql);
header("location: ../orders.php");