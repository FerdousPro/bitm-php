<?php
include_once '../vendor/autoload.php';
use App\Soft;

$obj = new Soft();
//$_POST['id'] = $_SESSION['id'];
$obj->prepare($_GET)->trash();