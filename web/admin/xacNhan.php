<?php
    require('D:\xampp\htdocs\doAn_1\web\admin\config\db.php');
    require('D:\xampp\htdocs\test_doan\carbon\autoload.php');
    use Carbon\Carbon;
    use Carbon\CarbonInterval;
    $ngay=Carbon::now("Asia/Ho_Chi_Minh")->toDateString();
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

        $sql5 = "SELECT * FROM `cart_detail`,`sanph1`
                WHERE cart_detail.sanpham_id = sanph1.sanPh_id 
                AND cart_detail.code_ord=$code 
                ORDER BY cart_detail.id_detail DESC";
        $result3 = mysqli_query($conn, $sql5);

        $sql6 = "SELECT * FROM `thongke` WHERE ngaydat = '$ngay'";
        $result4 = mysqli_query($conn, $sql6);

        $soluongMua=0;
        $doanhThu=0;

        while ($row= mysqli_fetch_array($result3)) {
           $soluongMua += $row['soLuongMua'];
           $tongTien = $row['soLuongMua'] * $row['gia'];
           $doanhThu += $tongTien;
        }
        if (mysqli_num_rows($result4) == 0) {
            $soLuongBan = $soluongMua;
            $doanhThu = $doanhThu;
            $donhang = 1;
            $sql_insert = mysqli_query($conn,"INSERT INTO thongke (ngaydat,doanhThu,soLuongBan,donHang)
                                            VALUES ('$ngay','$doanhThu','$soLuongBan','$donhang')");
        }else if (mysqli_num_rows($result4) != 0){
            while ($rowTk = mysqli_fetch_array($result4)) {
                $soLuongBan = $rowTk['soLuongBan'] + $soluongMua;
                $doanhThu = $rowTk['doanhThu'] + $doanhThu;
                $donhang = $rowTk['donHang'] + 1;
                // echo $soLuongBan.'<br>'.$doanhThu.'<br>'.$donhang;
            $sql_update = mysqli_query($conn,"UPDATE thongke SET doanhThu = '$doanhThu',soLuongBan = '$soLuongBan',donHang = '$donhang'
                                            WHERE ngaydat = '$ngay'");
            }
        }
        header('location: order.php');
    }
?>