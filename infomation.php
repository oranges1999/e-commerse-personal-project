<?php 
session_start();
include "./Require-content/top-content.php";
include "./Require-content/first-header.php";
include "./Require-content/second-header.php";
include "./Require-content/nav-side-bar.php";
include "./Handler/connect-db.php";
$sql = "SELECT u.fullname, u.phone, u.address FROM users u WHERE id = '$_REQUEST[id]'";
$sQLUser = mysqli_query($connect, $sql);
$user = mysqli_fetch_assoc($sQLUser);
?>

    <main>
        <div class="container d-flex flex-column align-items-center">
            <form action="./Client-section/Actions/change-info.php">
                <input type="text" name="id" value="<?php echo $_REQUEST['id']?>" hidden>
                <table style="background-color: white;">
                    <thead>
                        <td colspan="2">User Infomation</td>
                    </thead>
                    <tr>
                        <td>Full Name</td>
                        <td><input type="text" name="fullname" value="<?php echo $user['fullname']?>" required></td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td><input type="text" name="phone" value="<?php echo $user['phone']?>" required></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><input type="text" name="address" value="<?php echo $user['address']?>" required></td> 
                    </tr>
                    <tr>
                        <td colspan="2"><button type="submit">Change</button></td>
                    </tr>
                </table>
            </form>
            <a href="./homepage.php"><button type="#">Cancel</button></a>
        </div> 
    </main>

<?php include "./Require-content/footer.php"?>

