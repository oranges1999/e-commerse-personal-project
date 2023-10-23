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
            Login
        </div>
        <form action="./Handler/login.php" method="post">
            <table>
                <tr>
                    <td class="text-light">Username</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td class="text-light">Password</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td><button type="submit">Log in</button></td>
                </tr>
            </table>
        </form>
        <a href="./signup-client.php"><button>Sign up</button></a>
    </div>
</main>
<?php require "./Require-content/footer.php"?>