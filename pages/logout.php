<?php
session_start();
session_destroy();

header('location:action.php?page=home');
