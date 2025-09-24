<?php
require_once 'vendor/autoload.php';

if (isset($_GET['page'])) {

    if ($_GET['page'] == 'home') {
        include "pages/home.php";
    } elseif ($_GET['page'] == 'registration') {
        include "pages/Reg.php";
    } elseif ($_GET['page'] == 'registration_db') {
        include "pages/registration.php";
    } elseif ($_GET['page'] == 'login_db') {
        include "pages/login.php";
    } elseif ($_GET['page'] == 'dashboard') {
        include "pages/dashboard.php";
    } elseif ($_GET['page'] == 'logout') {
        include "pages/logout.php";
    }
}
