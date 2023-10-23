<?php
require "./check-login-client.php";
require "./connect-db.php";

date_default_timezone_set('Asia/Ho_Chi_Minh');
$time = date("h:i:s A, d-m-Y",time());
$userid = $_SESSION['user']['id'];
$sqlorder = "insert into orders (user_id, status_id, created_at, updated_at) values ('$userid', '1', '$time', '$time')";
mysqli_query($connect, $sqlorder);
$sqlSelectOrder = "select * from orders where user_id = '$userid' and created_at = '$time'";
$selectOrder = mysqli_query($connect, $sqlSelectOrder);
$selectOrder = mysqli_fetch_assoc($selectOrder);
$orderid = $selectOrder['id'];
foreach ($_SESSION['product'] as $key => $value){
    $sqlorderdetail = "insert into order_details (order_id, product_id, qty, created_at, updated_at) values('$orderid', '$key', '$value[buyQty]','$time', '$time')";
    mysqli_query($connect, $sqlorderdetail);
    $sql = "select od.id as order_detailsId, od.order_id as orderId, od.product_id, od.qty as orderQty, p.id as productId, p.qty as productQty from order_details od inner join products p on od.product_id = p.id where od.product_id = '$value[id]' and od.order_id = '$orderid'";
    $product = mysqli_query($connect, $sql);
    $product = mysqli_fetch_assoc($product);
    $productQty = $product['productQty']-$product['orderQty'];
    $sqlupdate = "update products set qty = '$productQty' where id = '$value[id]'";
    mysqli_query($connect, $sqlupdate);
}
unset($_SESSION['product']);
header("location: ../homepage.php?id=1");
