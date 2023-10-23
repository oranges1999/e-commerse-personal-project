<?php
require "./connect-db.php";
date_default_timezone_set('Asia/Ho_Chi_Minh');
$ptime = date("h:i:s A, d-m-Y",time());
$username = $_REQUEST['username'];
$password = md5($_REQUEST['password']);
$status = $_REQUEST['status'];
$insert_sql = "INSERT INTO users (username, password, created_at, updated_at, role, status) VALUES ('$username','$password', '$ptime', '$ptime', '0', '$status')" ;
mysqli_query($connect, $insert_sql);
$sql="SELECT u.id FROM users u WHERE u.username = '$username' and u.password= '$password'";
$userid = mysqli_query($connect, $sql);
$userid = mysqli_fetch_assoc($userid);
header("location: ../infomation.php?id=$userid[id]");