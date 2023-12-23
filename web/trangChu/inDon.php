<?php
session_start();
require_once('D:\xampp\htdocs\doAn_1\web\admin\config\db.php');
try {
    if (isset($_GET['code_sp'])) {
      $id_us=$_SESSION['id_us'];
      $code_sp=$_GET['code_sp'];
      $sql = "SELECT *
      FROM `cart_detail`, `order`, `sanph1`,`users1`
      WHERE `order`.code_ord = $code_sp
      AND `cart_detail`.code_ord = `order`.code_ord
      AND `order`.userid = $id_us
      AND `order`.userid = users1.us_id
      AND `cart_detail`.sanpham_id = sanph1.sanPh_id";
      $result=mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      $tongTien=0;
      $ghiChu=$row['ghiChu'];
      $pptt=$row['ppThanhToan'];
    }
} catch (\Throwable $th) {
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Hóa đơn</title>
  <link rel="stylesheet" href="indon.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
</head>
<body><br><br>
  <div class="invoice" id="myPrintInvoice">
    
    <div class="info">
      <div class="left">
        <p><strong>Cửa Hàng: </strong> Smart Point</p>
        <p><strong>Địa chỉ: </strong> Hòa Quý- Ngũ Hành Sơn- Tp.Đà Nẵng</p>
        <p><strong>Liên Hệ: </strong> 0301202004</p>
        <br><hr><br>
        <p><strong>Người nhận:</strong> <?php echo $row['tenNguoiNhan']; ?></p>
        <p><strong>Địa chỉ:</strong> <?php echo $row['diaChi']; ?></p>
        <p><strong>Liên hệ:</strong> <?php echo $row['sdtNguoiNhan']; ?></p>
        <p><strong>Ngày đặt:</strong> <?php echo $row['ngayDat']; ?></p>
      </div>

      <div class="right" style="margin-top: 33px; margin-right: 10px;">
        <div class="header">
            <h1 style="font-size: 25px;">Hóa đơn bán hàng</h1>
            <p style="margin-top: -2px; font-size: 14px;">Số hóa đơn: <?php echo $code_sp; ?></p>
        </div>       
      </div>

      <div style="clear:both;"></div>
    </div>

    <div class="container">
    <table>
      <thead>
        <tr>
          <th>Sản phẩm</th>
          <th>Đơn giá</th>
          <th>Thành tiền</th>
        </tr>
      </thead>
      <?php 
          $result2=mysqli_query($conn, $sql);
          while ($row2 = mysqli_fetch_array($result2)) {
            $thanhTien = $row2['gia']*$row2['soLuongMua'];
            $tongTien+=$thanhTien;
          ?>
      <tbody>
        <tr>
          <td><?php echo $row2['name'] . '<b> x ' . $row2['soLuongMua']; '</b>'?></td>
          <td style="text-align: center;"><?php echo number_format($row2['gia']);?> VND</td>
          <td style="text-align: center;"><?php echo number_format($thanhTien);?> VND</td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="2"><b>Hình thức thanh toán:</b></td>
            <td style="text-align: center;"><?php echo $pptt; ?></td>
        </tr>
        <tr>
            <td colspan="2"><b>Tổng cộng:</b></td>
            <td style="text-align: center;"><?php echo number_format($tongTien);?> VND</td>
        </tr>
      </tbody>
    </table>
        <div style="margin-top: 12px; margin-right: 500px;">
        <p><i>Ghi chú: <?php echo $ghiChu;?></i></p>
        </div>
</div>

    <div class="note">
      <p>Xin cảm ơn quý khách đã mua hàng!</p>
    </div>
  </div>
  <button style="margin-left: 1150px;margin-top: 20px;" onclick="printInvoice()"><i class="fa-solid fa-print"></i></i></button>
</body>
<script>
    function printInvoice() {
        var divContent = document.getElementById('myPrintInvoice').innerHTML;
        var a = window.open('', '', 'height=500, width=500');
        a.document.write('<html><body>');
        a.document.write(divContent);
        a.document.write('</body></html>');
        a.document.close();
        a.print();
    }
</script>
</html>