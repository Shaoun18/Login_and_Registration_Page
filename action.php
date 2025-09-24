<?php
require_once 'vendor/autoload.php';

if (isset($_GET['page'])) {

    if ($_GET['page'] == 'home') {
        include "pages/home.php";
    } elseif($_GET['page'] == 'registration'){
        include "pages/Reg.php";
    }elseif($_GET['page'] == 'registration_db'){
        include "pages/registration.php";
    }
}
