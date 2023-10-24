<?php
include "./Handler/connect-db.php";
$sqlcategory = "SELECT * FROM `categories`";
$sQLcategories = mysqli_query($connect, $sqlcategory);
$categories = mysqli_fetch_all($sQLcategories);
?>

<div class="second-header">
            <div class="nav-main container d-flex align-items-center">
                <nav class="navbar navbar-light bg-light ">
                    <div class="nav-item nav-tag d-flex align-items-center justify-content-between">
                        <a class="col-md-2" href="./homepage.php"><img width="100%" class="" src="./asset/img/steamLogo.png" alt=""></a>
                        <div class="col-md-8 d-flex position-relative" id="middle-nav">
                            <a class="tab col-md-3 games-tab" href="">  
                                <div class="tag text-white d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-gamepad"></i>
                                    <P class="tag-text">GAMES</P>
                                    <i class="fa-solid fa-caret-down"></i>
                                </div>
                            </a>
                            <div class="sub-menu d-flex position-absolute" id="games">
                                <div class="variation">
                                    <ul>
                                        <h6>Variation 1</h6>
                                        <?php foreach($categories as $key => $value):?>
                                            <li><a href="./category.php?id=<?php echo $value[0]?>"><?php echo $value[1]?></a></li>
                                        <?php endforeach?>
                                    </ul>
                                </div>
                            </div>
                            <a class="tab col-md-3 products-tab" href="">    
                                <div class="tag text-white d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-layer-group"></i>
                                    <P class="tag-text">PRODUCTS</P>
                                    <i class="fa-solid fa-caret-down"></i>
                                </div>
                            </a>
                            <div class="sub-menu d-flex position-absolute" id="products">
                                <div class="variation">
                                    <ul>
                                        <h6>Variation 2</h6>
                                        <li><a href="">RPG Games</a></li>
                                        <li><a href="">RPG Games</a></li>
                                        <li><a href="">RPG Games</a></li>
                                        <li><a href="">RPG Games</a></li>
                                        <li><a href="">RPG Games</a></li>
                                    </ul>
                                </div>
                                <div class="variation">
                                    <ul>
                                        <h6>Variation 2</h6>
                                        <li><a href="">RPG Games</a></li>
                                        <li><a href="">RPG Games</a></li>
                                        <li><a href="">RPG Games</a></li>
                                        <li><a href="">RPG Games</a></li>
                                        <li><a href="">RPG Games</a></li>
                                    </ul>
                                </div>
                            </div>
                            <a class="tab col-md-3 merchandise-tab" href="">
                                <div class="normal-item tag text-white d-flex justify-content-center align-items-center">
                                    <i class="fa-regular fa-star"></i>
                                    <P class="tag-text">MERCHANDISES</P>
                                </div>
                            </a>
                            <a class="tab col-md-3 deals-tab" href="">
                                <div class="normal-item tag text-white d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-percent"></i>
                                    <P class="tag-text">DEALS</P>
                                </div>
                            </a>
                        </div>
                        <div class="d-flex">
                            <div class="dropdown">
                                <a class=" nav-link text-white" href="#" id="personal-space" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="nav-icon text-white fa-solid fa-user"></i>
                                </a>
                                <?php
                                    if(!array_key_exists('login',$_SESSION)){
                                        include "./Require-content/login-form.php";
                                    }elseif($_SESSION['login']==true){
                                        if ($_SESSION['user']['role']==1){
                                            require "./Admin-section/admin-section.php";
                                        }else{
                                            require "./Client-section/client-section.php";
                                        }
                                    }
                                ?>
                            </div>
                            <div class="dropdown">
                                <a class="nav-link text-white" href="#" id="search" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="nav-icon text-white fa-solid fa-magnifying-glass"></i>
                                </a>
                                <div class="search-form dropdown-menu dropdown-menu-right" aria-labelledby="search">
                                    <form class="form-inline">
                                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="nav-link text-white" href="#" id="dont-know-yet" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="nav-icon text-white fa-regular fa-heart"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dont-know-yet">
                                    dont know what this do
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="nav-link text-white" href="#" id="shopping-cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="nav-icon text-white fa-solid fa-basket-shopping"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="shopping-cart">
                                    <?php if(!isset($_SESSION['product']) || $_SESSION['product'] == [] ):?>
                                        This place is so empty :(
                                    <?php else:?>
                                        <div class="">
                                            <?php foreach($_SESSION['product'] as $key => $value):?>
                                                <div class="d-flex">
                                                    <div class="">
                                                        <img height="80px" src="./asset/productImg/<?php echo $value['productImg']?>" alt="">
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <?php echo $value['name']?>
                                                        </div>
                                                        <div>
                                                            Qty: <?php echo $value['buyQty']?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach?>
                                            <a href="./cart.php">Go to cart</a>
                                        </div>
                                    <?php endif?>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>