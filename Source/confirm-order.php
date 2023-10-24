<?php
require "./Handler/connect-db.php";
require "./Handler/check-login-client.php";
foreach ($_REQUEST as $key => $value){
    $_SESSION['product'][$key]['buyQty'] = $value;
}
$sql = "select * from users where id ='". $_SESSION['user']['id']."'";
$user = mysqli_query($connect, $sql);
$user = mysqli_fetch_assoc($user);
include "./Require-content/top-content.php";
include "./Require-content/first-header.php";
include "./Require-content/second-header.php";
include "./Require-content/nav-side-bar.php";
?>

<main>
    <div class="container d-flex">
        <div class="col-lg-6 col-md-6">
            <div class="text-light">Order</div>
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
                    <?php foreach($_SESSION['product'] as $key => $value):?>
                        <tr>
                            <td><img height="200px" width="100%" src="./asset/productImg/<?php echo $value['productImg']?>" alt=""></td>
                            <td><?php echo $value['name']?></td>
                            <td><?php echo $value['price']?>$</td>
                            <td><?php echo $value['buyQty']?></td>
                        </tr>
                    <?php endforeach?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2">Total</td>
                        <td colspan="2">
                            <?php
                                $total = 0;
                                foreach($_SESSION['product'] as $key => $value){
                                    $sum = $value['buyQty']*$value['price'];
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
            <div class="text-light">User Infomation</div>
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
            <a href="./Handler/place-order.php">Place your order</a>
            </div>
        </div>
    </div>
</main>

<?php require "./Require-content/footer.php"?>


