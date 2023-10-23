<?php 
session_start();
include "./Require-content/top-content.php";
include "./Require-content/first-header.php";
include "./Require-content/second-header.php";
include "./Require-content/nav-side-bar.php";
include "./Handler/connect-db.php";
$sql = "select * from products where category_id = '$_REQUEST[id]'";
$sqlProdct = mysqli_query($connect, $sql);
$products = mysqli_fetch_all($sqlProdct);
?>
<main>
    <div class="container d-flex">
        <?php foreach($products as $key => $value):?>
            <a href="./product.php?id=<?php echo $value[0]?>">
                <div class="feature-item fi<?php echo $value[0]?> col-6 col-md-3 col-sm-6 position-relative">
                    <div class="position-relative">
                        <img class="" width="100%" src="./asset/productImg/<?php echo $value[8]?>" alt="">
                        <a href="./product.php?id=<?php echo $value[0]?>">
                            <div class="quick-view-button qvb<?php echo $value[0]?> position-absolute d-flex justify-content-center align-items-center">
                                QUICK VIEW
                            </div>
                        </a>
                    </div>
                    <div>
                        <div class="feature-name">
                            <?php echo $value[1]?>
                        </div>
                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star unchecked"></span>
                        </div>
                        <div class="feature-price d-flex justify-content-start">
                            <div class="price-after"><?php echo $value[7]?>$</div>
                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach?>
    </div>
</main>
<?php require "./Require-content/footer.php"?>