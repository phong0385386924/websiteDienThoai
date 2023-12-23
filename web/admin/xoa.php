<?php
require_once('D:\xampp\htdocs\doAn_1\web\admin\config\db.php');
try {
    if (isset($_GET['deleteid'])) {
        $id=$_GET['deleteid'];
        $sql= "DELETE FROM `sanph1` WHERE sanPh_id = $id";
        $result = mysqli_query($conn,$sql);
        if ($result) {
            header('location:product.php');
        }else {
            die(mysqli_error($conn));
        }
    }
} catch (\Throwable $th) {
    //throw $th;
}
?>