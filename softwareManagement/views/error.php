<?php
session_start();
if (isset($_SESSION['err_msg']) & !empty($_SESSION['err_msg'])){
    echo $_SESSION['err_msg'];
    unset($_SESSION['err_msg']);
}