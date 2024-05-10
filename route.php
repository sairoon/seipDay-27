<?php
require_once 'vendor/autoload.php';
use App\classes\HomePage;

if ($_GET['page'] == 'home'){
    $homePage = new HomePage();
    $students = $homePage->getstudents();
    include "pages/home.php";
}
