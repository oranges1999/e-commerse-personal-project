<div class="dropdown-menu dropdown-menu-right" aria-labelledby="personal-space">
   <table>
        <tr>
            <td><a href="./Infomation.php?id=<?php echo $_SESSION['user']['id']?>">Infomation</a></td>
            <td><a href="">Other option</a></td>
        </tr>
   </table>
   <form action="./Handler/logout.php">
        <button class="login-btn" type="submit">Logout</button>
    </form>
</div>