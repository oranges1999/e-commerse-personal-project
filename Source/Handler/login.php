<?php

session_start();
require_once "./connect-db.php";
$username = $_REQUEST['username'];
$password = md5($_REQUEST['password']);
$sql = "select * from users where username = '$username' and password = '$password' and status = '1'";
$user = mysqli_query($connect, $sql);
if (!$user -> num_rows >= 1){
    header("location: ../homepage.php?id=0");
    die;
}
$user = mysqli_fetch_assoc($user);
$_SESSION['user']=$user;
$_SESSION['login']=true;
header("location: ../homepage.php?id=$_REQUEST[id]");
