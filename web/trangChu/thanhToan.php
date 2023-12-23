<?php 
require('D:\xampp\htdocs\doAn_1\web\admin\config\db.php');
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Thanh toán</title>
    <script src="//code.tidio.co/zeboamphee7kpin3fkjaec57il5fcyjn.js" async></script>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="js/bootstrap.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="thanhchuyenhuong.css">
  
</head>
<body>
  <?php include("menu.php"); ?>
<br>
    <div class="container" style="width: 420px; height: 50px">
    <ul class="progress" style="height: 22px">
      <li class="beforeactive"><a href="cart.php">Giỏ hàng</a></li>
      <li class="active"><a href="thanhToan.php">Thanh toán</a></li>
      <li><a href="gioHang1.php">Đơn hàng</a></li>
      <!-- <li><a href=""></a></li> -->
    </ul>
  </div><br>  
<?php
      
      if (!empty($_SESSION['cart'])) {
        if(isset($_POST['thanhtoan'])){
            $ten=$_POST['hoten'];
            $code = rand(0,9999);
            $sdt=$_POST['sdt'];
            $diaChi=$_POST['diaChi'];
            $pptt=$_POST['thanhToan'];
            $ghiChu=$_POST['ghiChu'];
            $ngay=date('Y-m-d H:i:s');
            $id_user=$_SESSION['id_us'];

            $insert_cart="INSERT INTO `order`(`userid`,`tenNguoiNhan`,`sdtNguoiNhan`,`diaChi`,`ghiChu`,`ppThanhToan`,`ngayDat`,`code_ord`,`trangThai`) 
            VALUES ('$id_user','$ten','$sdt','$diaChi','$ghiChu','$pptt','$ngay','$code', '1')";
            $result = mysqli_query($conn,$insert_cart);
            if ($insert_cart) {
              $cart = $_SESSION['cart'];
              foreach($cart as $key=>$value){
                $id_sanpham = $key;
                $insert_order_product = "INSERT INTO `cart_detail`(`code_ord`, `sanpham_id`,`soLuongMua`) 
                VALUES ('$code', '$id_sanpham','$value')";
                mysqli_query($conn, $insert_order_product);
                unset($_SESSION['cart']);

                // trừ số lượng sản phẩm
                $select_data= "SELECT * FROM `sanph1` WHERE sanPh_id = $id_sanpham";
                $result = mysqli_query($conn,$select_data);
                $row = mysqli_fetch_assoc($result);  
                  $soluong1=$row['soluong'];
                  $soluong=$soluong1-$value;
                    $insert = "UPDATE `sanph1` 
                    SET `soluong`='$soluong'
                     WHERE sanPh_id=$id_sanpham";
                      mysqli_query($conn, $insert);  
                header("location:gioHang1.php");
              }
            }
        }
   echo'  
<br><br><br>
      <form id="form1">  
      <div id="dvContents" >
      <div class="container">      
            <div class="row">
              <div class="col-sm-4">
         </div>
              </div>
            </div>
        </div>          
    </form>
    <br>
    <form method="POST" action="">
<div class="container">
  <div class="row">
    <div class="col-sm-3">

    </div>
    <div id="cot6Thanhtoan" class="col-sm-6">
      <div class="td">
        <br>
       </div>
         <h4>Thông tin người nhận</h4>
        <div><br>
      <div id="ttkh" class="col-sm-12">
           <div class="row">
             <div class="col-sm-4">
               <label for="fname">Họ Và Tên:</label>
             </div>
             <div class="col-sm-8 form-group">
               <input class="form-control" name="hoten" placeholder="nhập họ và tên" required>
             </div>
                   <div class="col-sm-4">
               <label for="fname">Số Điện Thoại:</label>
             </div>
             <div class="col-sm-8 form-group">
               <input class="form-control"  name="sdt" placeholder="nhập số điện thoại" required>
             </div>
            

           </div>
         </div>
       </div>     
     <hr>
       <div class="td">
         <h4>Địa chỉ giao hàng</h4>
        </div>
        <div class="container">
          <div class="adress">
            <div class="col-sm-12">
              <div class="row">
                <div class="col-sm-4">
                  <label for="fname">Địa chỉ:</label>
                </div>
                <div class="col-sm-8 form-group">
                  <input class="form-control" placeholder="nhập địa chỉ:" name="diaChi" required>
                </div>
              </div>                          
            </div>
            </div></div>

            <hr>
       <div class="td">
         <h4>Phương thức thanh toán</h4>
        </div>
        <div class="container">
        <div class="adress">
            <div class="col-sm-12">
              <div class="row">
                <div class="col-sm-4">
                <label for="gender">Thanh toán bằng:</label>
                </div>
                <div class="col-sm-8">
                <div class="form-group">
                    <input type="radio" id="thanhToanNhan" name="thanhToan" value="Thanh toán khi nhận hàng" checked>
                    <label for="thanhToanNhan">Thanh toán khi nhận hàng</label><br>

                    <input type="radio" id="viMomo" name="thanhToan" value="Ví Momo">
                    <label for="viMomo">Ví Momo</label><br>  

                    <input type="radio" id="thanhToanTaiCua" name="thanhToan" value="Thanh toán tại cửa hàng">
                    <label for="thanhToanTaiCua">Thanh toán tại cửa hàng</label>  
                </div>
                </div>
              </div>                          
            </div>
            </div>               
            </div>

            <hr>
            <div class="td">
         <h4>Ghi chú</h4>
        </div>
        <div class="container">
          <div class="adress">
            <div class="col-sm-12">
              <div class="row">
                <div class="col-sm-4">
                  
                </div>
                <div class="col-sm-8 form-group">
                  <!-- <input class="form-control"  name="ghiChu"> -->
                  <textarea id="ghiChu" name="ghiChu" rows="4" cols="50"></textarea>
                </div>
              </div>                          
            </div>
            </div></div>


        <br><br>
        <center>
        <button id="thanhtoan" name="thanhtoan" class="btn btn-outline-success">Thanh toán</button>
      </center>
        <br>

    </div>
    
    <div class="col-sm-3">
    </div>
  </div>
</div>
</div>
</form>
';}else {
}
?>

<!-- footer -->
      <footer class="site-footer">
        <div class="container">
          <hr>
          <div class="row">
            <div class="col-xs-4 col-md-4">
              <h5>Thông tin và chính sách</h5>
              <ul id="phong2" class="footer-links">
                <li><a href="index.php">Tra thông tin bảo hành</a></li>
                <li><a href="index.php">Chính sách bảo hành</a></li>
                <li><a href="index.php">Tìm hiểu về mua trả góp</a></li>
                <li><a href="index.php">Phản hồi</a></li>
                <li><a href="index.php">Liên hệ hợp tác kinh doanh</a></li>
              </ul>
            </div>
    
            <div class="col-xs-5 col-md-5">
              <h5>Tổng đài hỗ trợ miễn phí</h5>
              <ul class="footer-links">
                <li>Gọi mua hàng : <b>1800.2030</b>(7h30-22h00)</li>
                <li>Gọi khiếu nại: <b>1800.2131</b>(8h00-21h30)</li>
                <li>Gọi bảo hành : <b>1800.2001</b>(7h30-21h30)</li>
              </ul>
            </div>
            <div class="col-xs-3 col-md-3">
              <h5>Kết nối với chúng tôi</h5>
              <ul class="card-footer">
                <li><a href="https://www.facebook.com/profile.php?id=100042451724218"><img style="height: 50px; width: 50px;" src="image/faceb.jpg" alt=""></a></li>
                <li><a href="https://www.instagram.com/phongnguyen8761/" ><img style="height: 40px; width: 40px;" src="image/insta.jpg" alt=""></a></li>
              </ul>
            </div>
          </div>
          <hr>
        </div></div>
    </footer>
    <div class="mt-5 p-4 bg-dark text-white text-center">
      <p>© 2023. Công ty cổ phần Thế Giới Điện Tử. <br>
        Địa chỉ: Khu đô thị Đại học Đà Nẵng, 470 Đ.Trần Đại Nghĩa, P.Hòa Quý, Q. Ngũ Hành Sơn, TP Đà Nẵng. Điện thoại: 028 3343960. Email: cskh@tgdtpdt.com. Chịu trách nhiệm nội dung: Nguyễn Văn Phong.</p>
    </div>
</body>
</html>