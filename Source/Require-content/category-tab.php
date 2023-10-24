<?php
    require "./handler/connect-db.php";
    $sql = "select * from categories";
    $sqlcategories = mysqli_query($connect, $sql);
    $categories = mysqli_fetch_all($sqlcategories);
?>

<?php foreach ($categories as $key => $value):?>
<div class="recent container">
    <div class="recent-header d-flex justify-content-between align-items-center">
        <div class="feature-title">
            <?php echo $value[1]?>
        </div>
        <div class="feture-view">
            <a href="./category.php?id=<?php echo $value[0]?>">VIEW ALL PRODUCT <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div> 
    
    <div class="recent-item d-flex flex-wrap">
        <?php
            require "./handler/connect-db.php";
            $sql = "select * from products where category_id = '$value[0]'";
            $sqlproducts = mysqli_query($connect, $sql);
            $products = mysqli_fetch_all($sqlproducts);
        ?>
        <!-- sản phẩm -->
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
                        <?php if($value[3]==0):?>
                        <div class="outOfStock position-absolute d-flex justify-content-center">
                            Out Of Stock :(
                        </div>
                        <?php endif?>
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
</div>
<?php endforeach?>
