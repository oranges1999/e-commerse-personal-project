<div class="dropdown-menu dropdown-menu-right" aria-labelledby="personal-space">
    <form class="px-4 py-3" action="./handler/login.php" method="post">
        <div class="form-group">
        <label for="exampleDropdownFormEmail1">Username</label>
        <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="Username" name="username" required>
        </div>
        <div class="form-group">
        <label for="exampleDropdownFormPassword1">Password</label>
        <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="./signup-client.php?id=1">New around here? Sign up</a>
</div>