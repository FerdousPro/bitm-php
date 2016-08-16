<?php
include_once '../vendor/autoload.php';
use App\Soft;

$obj = new Soft();
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $obj->prepare($_POST)->store();
}else{
    $_SESSION['err_msg'] = 'You are not authorised to access this page';
    header('location: error.php');
}
