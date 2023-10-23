<?php 
session_start();
include "./Require-content/top-content.php";
include "./Require-content/first-header.php";
include "./Require-content/second-header.php";
include "./Require-content/nav-side-bar.php";
include "./Handler/connect-db.php";
$sql = "SELECT * FROM `products` INNER JOIN categories ON products.category_id = categories.id limit 4";
$sQLProducts = mysqli_query($connect, $sql);
$products = mysqli_fetch_all($sQLProducts);
?>

    <main>
        <div class="banner container"> 
            <div id="carouselExampleIndicators" class="main-banner col-md-8 carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                </ol>
                <div class="carousel-inner position-relative">
                  <div class="carousel-item active">
                    <img class="banner-item d-block w-100" src="./asset/banner/shop29_home_banner1.jpg" alt="First slide">
                    <div class="main-content position-absolute d-flex flex-column align-items-end">
                        <div class="discount">
                            50% OFF
                        </div>
                        <div class="title">
                            DISHONORED 2
                        </div>
                        <div class="d-flex align-items-end">
                            <div class="price-before">100$</div>
                            <div class="price-after">50$</div>
                        </div>
                    </div>
                    <div class="position-absolute buy-btn">
                        <button>SHOP NOW</button>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev font-icon" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon font-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next font-icon" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon font-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="sub-banner col-md-4">
                <div class="top-sub-banner">
                    <div class="top-content d-flex position-relative">
                        <img class="w-50" src="./asset/side-banner/shop29_home_banner2.png" alt="">
                        <div class="console-content position-absolute d-flex flex-column align-items-end">
                            <div class="top-row">
                                FLASH SALE ON
                            </div>
                            <div class="title">
                                CONSOLE
                            </div>
                        </div>
                        
                        <div class="buy-btn-right position-absolute">
                            <button>SHOP NOW</button>
                        </div>
                    </div>
                </div>
                <div class="bottom-sub-banner position-relative">
                    <img class="w-100" src="./asset/side-banner/shop29_home_banner3.jpg" alt="">
                    <div class="controller-content position-absolute d-flex flex-column align-items-start">
                        <div class="top-row">
                            CHECK OUT NEW WIRELESS
                        </div>
                        <div class="title">
                            CONTROLLER
                        </div>
                        <div class="discount">
                            50% OFF
                        </div>
                    </div>
                    
                    <div class="buy-btn-right position-absolute">
                        <button>SHOP NOW</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="policy-main container">
            <div class="policy d-flex justify-content-center align-items-center">
                <div>
                    <i class="policy-icon fa-solid fa-truck"></i>
                </div>
                <div class="policy-content">
                    <div class="top">
                        FREE SHIPPING AND RETURN
                    </div>
                    <div class="bottom">
                        Free shipping on all order over $99
                    </div>
                </div>
            </div>
            <div class="policy d-flex justify-content-center align-items-center">
                <div>
                    <i class="policy-icon fa-solid fa-truck"></i>
                </div>
                <div class="policy-content">
                    <div class="top">
                        FREE SHIPPING AND RETURN
                    </div>
                    <div class="bottom">
                        Free shipping on all order over $99
                    </div>
                </div>
            </div>
            <div class="policy d-flex justify-content-center align-items-center">
                <div>
                    <i class="policy-icon fa-solid fa-truck"></i>
                </div>
                <div class="policy-content">
                    <div class="top">
                        FREE SHIPPING AND RETURN
                    </div>
                    <div class="bottom">
                        Free shipping on all order over $99
                    </div>
                </div>
            </div>
        </div>

        <div class="feature">
            <div class="container">
                <div class="feature-header d-flex justify-content-between">
                    <div class="feature-title">
                        Feature Product and Offer
                    </div>
                    <div class="feture-view">
                        <a href="">VIEW ALL PRODUCT <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="feature-items container-fluid d-flex flex-wrap">
                    <?php foreach($products as $key => $value):?>
                        <a href="./product.php?id=<?php echo $value[0]?>">
                            <div class="feature-item fi<?php echo $value[0]?> col-6 col-md-3 col-sm-6 position-relative">
                                <div class="position-relative">
                                    <img class="productImg" src="./asset/productImg/<?php echo $value[8]?>" alt="">
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
        </div>

        <div class="mid-banner container">
            <div class="left-mid-banner col-md-5">
                <img src="./asset/mid-banner/shop29_shop_banner.jpg" alt="">
            </div>
            <div class="mid-mid-banner col-md-4 d-flex justify-content-center flex-column">
                <div class="mid-banner-title">
                    NINTENDO SWITCH
                </div>
                <div class="mid-banner-subtitle">
                    NOW AVAILABLE FOR PRE-ORDER
                </div>
            </div>
            <div class="right-mid-banner col-md-3 d-flex justify-content-center align-items-center">
                <button>PRE-ORDER NOW</button>
            </div>
        </div>

        <?php require "./Require-content/category-tab.php"?>

        <div class="bottom-banner container">
            <div class="left-bottom-banner col-md-6 position-relative">
                <img class="w-100" src="./asset/bottom-banner/shop29_home_banner4.jpg" alt="">
                <div class="bottom-content position-absolute d-flex flex-column align-items-end">
                    <div class="bc-top-content">
                        FEEL LIKE A PLAYER
                    </div>
                    <div>
                        <i class="bc-bottom-content">PROBALL 2019</i>
                    </div>
                    <div class="price">
                        $29
                    </div>
                </div>
                <div class="buy-btn position-absolute" id="bottom-btn-right">
                    <button>SHOP NOW</button>
                </div>
            </div>
            <div class="left-bottom-banner col-md-6 position-relative">
                <img class="w-100" src="./asset/bottom-banner/shop29_home_banner5.jpg" alt="">
                <div class="bottom-content-left position-absolute d-flex flex-column align-items-start">
                    <div class="bc-top-content-left">
                        FEEL LIKE A WARRIOR
                    </div>
                    <div>
                        <i class="bc-bottom-content-left">PROWARRIOR</i>
                    </div>
                    <div class="price-left">
                        $29
                    </div>
                </div>
                <div class="buy-btn position-absolute" id="bottom-btn-left">
                    <button>SHOP NOW</button>
                </div>
            </div>
        </div>
    </main>

<?php include "./Require-content/footer.php"?>
<script>
<?php if(isset($_REQUEST['id'])):?>
<?php switch($_REQUEST['id']): case 0:?>
    alert("Wrong Username or Password, please check again")
<?php break; ?>
<?php case 1:?>
    alert("Order placed succesfully!")
<?php break; ?>
<?php case 2:?>
    alert("Update info succesfully!")
<?php break; ?>
<?php endswitch; ?>
<?php endif?>
</script>
