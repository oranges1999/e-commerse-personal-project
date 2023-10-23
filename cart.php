<?php 
session_start();
include "./Require-content/top-content.php";
include "./Require-content/first-header.php";
include "./Require-content/second-header.php";
include "./Require-content/nav-side-bar.php";
include "./Handler/connect-db.php";
?>

<main>
    <div class="container d-flex justify-content-center"> 
        <form action="./confirm-order.php" id="cart">
            <table border=1 style="background-color: white;">
                <thead>
                    <tr>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Qty</th>
                        <th>Action</th>
                    </tr>  
                </thead>
                <tbody>
                    <?php foreach($_SESSION['product'] as $key => $value):?>
                        <tr>
                            <td><img height="200px" width="100%" src="./asset/productImg/<?php echo $value['productImg']?>" alt=""></td>
                            <td><?php echo $value['name']?></td>
                            <td><?php echo $value['price']?>$</td>
                            <td>
                                <input type="number" name="<?php echo $key?>" id="" min="1" max="<?php echo $value['qty']?>" oninput="validity.valid||(value='');" value="<?php echo $value['buyQty']?>">
                                In stock: <?php echo $value['qty']?>
                            </td>
                            <td><a href="./Handler/delete-cart.php?id=<?php echo $key?>">Delete</a></td>
                        </tr>
                    <?php endforeach?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5"><button type="submit" form="cart">Check out</button></td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </div>
</main>

<?php include "./Require-content/footer.php"?>