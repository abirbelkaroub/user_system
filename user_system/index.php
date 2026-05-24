<?php

require_once('classes/Controller.php');
$controller = new Controller();
$controller->handleRequest();

$page = $_GET['page'] ?? 'login';

if ($page == 'login') {
    include('views/login.php');
} elseif ($page == 'register') {
    include('views/registration.php');
} elseif ($page == 'dashboard') {
    include('views/dashboard.php');
} elseif ($page == 'logout') {
    include('views/logout.php');
}
