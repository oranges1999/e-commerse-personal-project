<?php

session_start();
unset($_SESSION['product'][$_REQUEST['id']]);
header("location: ../cart.php");