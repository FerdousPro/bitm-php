<?php
include_once ('../vendor/autoload.php');
use App\Soft;

$obj = new Soft();
$obj->prepare($_GET)->restore();