<?php

namespace app\classes;

class HomeController
{
    public function index()
    {
        header("Location:action.php?page=home");
    }
}
