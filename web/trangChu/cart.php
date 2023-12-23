<?php
 session_start();
//  print_r($_SESSION["cart"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="t.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
        }

        .footer {
            background-color: #f9f9f9;
            padding: 20px;
            text-align: center;
        }
    </style>
<body>
   <?php include("menu.php"); ?><br><br>
   <?php include("thanhchuyenhuong.php"); ?><br><br>
<div class="container"> 
                      <?php                  
                      if (!empty($_SESSION['cart'])) {
                        echo '
                        <table id="cart" class="table table-hover table-condensed"> 
                        <thead> 
                        <tr> 
                          <th style="width:50%">Tên sản phẩm</th> 
                          <th style="width:10%">Đơn giá</th> 
                          <th style="width:8%">Số lượng</th> 
                          <th style="width:22%" class="text-center">Thành tiền</th> 
                          <th style="width:10%">Action</th> 
                        </tr> 
                        </thead> 
                        ';
                        $cart = $_SESSION['cart'];
                          $total =0;        
                          foreach($cart as $key=>$value){
                            
                              // $item[]=$key;                       
                          //  $str=implode(",",$item);                   
                            // $id= $_SESSION['cart'];
                            $sql = "SELECT * FROM `sanph1` WHERE sanPh_id = $key";
                            $result = mysqli_query($conn,$sql); 
                            $row = mysqli_fetch_assoc($result);                                                                      
                                
   echo ' 
   <tbody>                    
<tr> 
   <td data-th="Product"> 
    <div class="row"> 
     <div class="col-sm-2 hidden-xs"><img src="../admin/image/'. $row['img'].'" class="img-responsive" width="100">
     </div> 
     <div class="col-sm-10"> 
      <h4 class="nomargin">'. $row['name'].'</h4> 
      <p>Mô tả của sản phẩm </p> 
     </div> 
    </div> 
   </td> 
   <td data-th="Price">'. number_format($row['gia']).' VND'.'</td> 
   <td data-th="Quantity"><input class="form-control text-center" value="'. $value .'" type="number"></td>
   <td data-th="Subtotal" class="text-center"> '.
    number_format($_SESSION['cart'][$row['sanPh_id']]*$row['gia']) ." VND".'</td> 
   <td class="actions" data-th=""> 
    <a href="deleteCart.php?id='. $row['sanPh_id'] .'"><button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i>
    </button></a>
   </td> 
</tr> 
       ';  
      $total += ($row['gia']* $value);
     } echo'
  </tbody><tfoot> 
   <tr class="visible-xs"> 
    <td class="text-center"><strong>Tổng 200
</strong>
    </td> 
   </tr> 
   <tr> 
    <td><a href="index.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
    </td> 
    <td colspan="2" class="hidden-xs"> </td> 
    <td class="hidden-xs text-center"><strong>Tổng: ';        
          echo number_format($total) . " VND";
   echo ' </strong>
    </td>              
    <td><a href="thanhToan.php" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
    </td> 
   </tr> 
  </tfoot> 
';
}else {
  echo'
  <div style="padding: 10px;
  border: 1px solid #ccc;
  background-color: #f9f9f9;
  text-align: center;">
  <img src="image/empty-cart.webp">
  <br><br>
  <a href="index.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
  </div><br><br>
  ';
}
?>
</table>
</div>
<div class="content">
        <!-- Nội dung trang web -->
</div>

    <footer class="footer">
    <div style="background-color: rgb(33, 37, 41); text-align: center; color: rgb(228, 228, 236); height: 127px;">
  <p style=" padding-top: 40px; padding-bottom: 40px;">© 2023. Công ty cổ phần Thế Giới Điện Tử. <br>
    Địa chỉ: Khu đô thị Đại học Đà Nẵng, 470 Đ.Trần Đại Nghĩa, P.Hòa Quý, Q. Ngũ Hành Sơn, TP Đà Nẵng. Điện thoại: 028 3343960. Email: cskh@tgdtpdt.com. Chịu trách nhiệm nội dung: Nguyễn Văn Phong.</p>
</div>
</footer>
</body> 
</html>