<?php
    // session_start();
    // $id=$_GET['id'];
    // if (empty($_SESSION['name'])) {
    //     header("location:taiKhoanTrong.php");
    //     header("location:sanPham.php?id=$id"); 
    // }else {
    //     if(isset($_SESSION['cart'][$id])) {
    //         $qty = $_SESSION['cart'][$id] + 1;
    //     }
    //     else {
    //         $qty=1;
    //     }
    //     $_SESSION['cart'][$id]=$qty;
    //     header("location:cart.php");
    //     echo '<pre>';
    //     print_r($_SESSION['cart']);
    //     echo '</pre>';
    // }
    
    session_start();
    if (empty($_SESSION['name'])) {
        header("location:taiKhoanTrong.php");
    }else {
        if(isset($_GET['id'])){
        
            if(isset($_GET['number'])){
                $qty = $_GET['number'];
            }else{
                $qty = 1;
            }
            $id = $_GET['id'];
        
        $_SESSION['cart'][$id] = $qty;
            header('location:cart.php');
        // echo '<pre>';
        // print_r($_SESSION['cart']);
        // echo '</pre>';
        }
    }
?>