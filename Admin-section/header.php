<nav class="sticky-top navbar navbar-dark bg-dark justify-content-between">
    <a class="logo">Admin Section</a>
    <div class="d-flex">
        <form action="../Handler/logout.php">
            <button class="login-btn" type="submit">Logout</button>
        </form>
        <a href="../homepage.php"><button class="login-btn" form="#">Homepage</button></a>
    </div>
</nav>
<nav>
        <div id="my-side-bar" class="sidebar d-flex flex-column">
            <ul>
                <li>
                    <a href="./overall.php">
                        <div class="sidebar-item d-flex">
                            <div class="d-flex justify-content-center align-items-center sidebar-icon"><i class="fa-solid fa-globe"></i></div>
                            <div class="d-flex justify-content-center align-items-center sidebar-content">Overall</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="./product.php">
                        <div class="sidebar-item d-flex">
                            <div class="d-flex justify-content-center align-items-center sidebar-icon"><i class="fa-solid fa-bell-concierge"></i></div>
                            <div class="d-flex justify-content-center align-items-center sidebar-content">Product</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="./Orders.php">
                        <div class="sidebar-item d-flex">
                            <div class="d-flex justify-content-center align-items-center sidebar-icon"><i class="fa-solid fa-people-group"></i></div>
                            <div class="d-flex justify-content-center align-items-center sidebar-content">Orders</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="./user.php">
                        <div class="sidebar-item d-flex">
                            <div class="d-flex justify-content-center align-items-center sidebar-icon"><i class="fa-solid fa-phone"></i></div>
                            <div class="d-flex justify-content-center align-items-center sidebar-content">User</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>