<?php
require_once('D:\xampp\htdocs\doAn_1\web\admin\config\db.php');
if (isset($_GET['idcapQuyen'])) {
    $id = $_GET['idcapQuyen'];

    $sql = "SELECT * FROM `users1` WHERE us_id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row['typeuser'] == 'admin') {
            $sql1 = "UPDATE `users1` SET `typeuser` = 'user' WHERE us_id = $id";
            mysqli_query($conn, $sql1);
        } else {
            $sql2 = "UPDATE `users1` SET `typeuser` = 'admin' WHERE us_id = $id";
            mysqli_query($conn, $sql2);
        }
        header('location: users.php');
    } else {
        echo "Không tìm thấy người dùng với ID: $id";
    }
} elseif (isset($_GET['code_sp'])) {
    $code=$_GET['code_sp'];
    $sql3 = "UPDATE `order`
    SET `trangThai`='0'
    WHERE `code_ord`=$code";
    $result2 = mysqli_query($conn, $sql3);
    header('location: order.php');
}
?>