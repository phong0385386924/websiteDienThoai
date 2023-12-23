<?php
session_start();
session_destroy();
require_once('D:\xampp\htdocs\doAn_1\web\admin\config\db.php');
header('location:index.php');
?>