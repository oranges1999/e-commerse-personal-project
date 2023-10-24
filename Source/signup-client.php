<?php 
session_start();
include "./Require-content/top-content.php";
include "./Require-content/first-header.php";
include "./Require-content/second-header.php";
include "./Require-content/nav-side-bar.php";
?>
<main>
    <div class="container d-flex flex-column align-items-center">
        <div class="text-light">
            Signup
        </div>
        <form action="./Handler/signup.php" method="post">
            <table>
                <tr>
                    <td class="text-light">Username</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td class="text-light">Password</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr style="display:none;">
                    <td><input type="text" name="status" value="1"></td>
                </tr>
                <tr>
                    <td><button type="submit">Sign up</button></td>
                </tr>
            </table>
        </form>
        <a href="./login-client.php?id=<?php echo $_REQUEST['id']?>"><button>Log in</button></a>
    </div>
</main>
<?php require "./Require-content/footer.php"?>