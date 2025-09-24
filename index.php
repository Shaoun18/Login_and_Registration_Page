<?php
require_once "vendor/autoload.php";

use App\classes\HomeController;

$web = new HomeController();
$web->index();
