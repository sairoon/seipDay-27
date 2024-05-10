<?php
require_once 'vendor/autoload.php';

/*use App\classes\HelloWorld;


$helloWorld = new HelloWorld();
$helloWorld->index();*/

use App\classes\HomePage;

$home = new HomePage();
$home->index();