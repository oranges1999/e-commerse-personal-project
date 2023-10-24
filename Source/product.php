<?php 
session_start();
include "./Require-content/top-content.php";
include "./Require-content/first-header.php";
include "./Require-content/second-header.php";
include "./Require-content/nav-side-bar.php";
include "./Handler/connect-db.php";
$sql = "SELECT * FROM `products` WHERE id = $_REQUEST[id]";
$sQLProducts = mysqli_query($connect, $sql);
$products = mysqli_fetch_assoc($sQLProducts);
?>

<main>
    <div class="container d-flex">
        <div class="col-md-4">
            <img width="100%" src="./asset/productImg/<?php echo $products['productImg']?>" alt="">
        </div>
        <div class="col-md-8 text-light">
            <h1><?php echo $products['name']?></h1>
            <h4><?php echo $products['price']?>$</h4>
            <h4>
                <?php if($products['qty']<=0):?>
                    <?php echo "Out of stock :("?>
                <?php else:?>
                    <form action="./Handler/cart-add.php">
                        <input type="text" name="id" value="<?php echo $products['id']?>" hidden>
                        <button>Add to cart</button>
                    </form>
                <?php endif?>
            </h4>
        </div>
    </div>
</main>

<?php include "./Require-content/footer.php"?>