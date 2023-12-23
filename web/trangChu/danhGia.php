
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đánh giá</title>
    <script src="//code.tidio.co/zeboamphee7kpin3fkjaec57il5fcyjn.js" async></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  
</head>
<body>
      <?php 
      session_start();
      include("menu.php"); ?>
      <br>
      <br>
      <div class="container">
 
      <div class="row">
        <div class="col-sm-7">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12970.17124579575!2d108.24915692549772!3d15.98054587794776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108997dc971f%3A0x1295cb3d313469c9!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiB2w6AgVHJ1eeG7gW4gdGjDtG5nIFZp4buHdCAtIEjDoG4!5e0!3m2!1svi!2s!4v1681699012855!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <p>Trường Đại Học Công nghệ Thông tin và Truyền thông Việt Hàn, Đại học Đà Nẵng</p>
          <p>Khu đô thị Đại học Đà Nẵng, 470 Đ.Trần Đại Nghĩa, P.Hòa Quý, Q. Ngũ Hành Sơn, TP Đà Nẵng.</p>

          
        </div> 
       <div class="col-sm-5">
         <h1 style="font-size: 15px;color: red;">Bạn cần hỗ trợ? Hãy gửi thông tin cho chúng tôi</h1>

        <!-- <form action="" method="post"  > -->
         <input class="form-control" id="name" name="name" placeholder="Tên" type="text"  style="margin-bottom: 5px;" required>
            <textarea class="form-control" id="comment" name="comments" placeholder="Bình luận" rows="5" style="margin-bottom: 10px" required></textarea >
            <button type="submit" class="btn btn-danger" id="gui" ><i class="fa-regular fa-paper-plane"></i></button>
        <!-- </form> -->
    
                <br><br><hr>
                 
            <p><span  class='fas fa-phone' ></span>Phone:0336.703.230 </p>
            <p><span class='far fa-comment' ></span>Email: phongnv.22ns@vku.udn.vn</p>
       </div>
       </div>
  
        <hr>
     <?php
                      try {
                            $sql = "select * from `danhgia1`";
                            $result = mysqli_query($conn,$sql); 
                            while ( $row = mysqli_fetch_assoc($result)) {                              
                                $commen=$row['comment'];
                                $ten=$row['ten'];
                                echo '
                                <div class="comment" id="comment">
                                <br>
                                <h5><img style="width: 25px; height: 25px;" src="image/nguoiDug.png" alt="">'.$ten.'</h5>
                                <div id="danhGia" class="card">
                                <p>'.$commen.'</p>
                            <h6><i class="fa-regular fa-comment"></i> Trả Lời</h6>
                            <br>
                            </div>
                            <br>
                            </div>
                            
                                ';
                            }
                        } catch (\Throwable $th) {
                        }               
                        ?>
                       
</div>
<!-- footer -->
<footer class="site-footer">
  <div class="container">
    <hr>
    <div class="row">
      <div class="col-xs-4 col-md-4">
        <h5>Thông tin và chính sách</h5>
        <ul id="phong2" class="footer-links">
          <li><a href="index.html">Tra thông tin bảo hành</a></li>
          <li><a href="index.html">Chính sách bảo hành</a></li>
          <li><a href="index.html">Tìm hiểu về mua trả góp</a></li>
          <li><a href="index.html">Phản hồi</a></li>
          <li><a href="index.html">Liên hệ hợp tác kinh doanh</a></li>
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
  </div>
</footer>
<div class="mt-5 p-4 bg-dark text-white text-center container-fluid">
  <p>© 2023. Công ty cổ phần Thế Giới Điện Tử. <br>
    Địa chỉ: Khu đô thị Đại học Đà Nẵng, 470 Đ.Trần Đại Nghĩa, P.Hòa Quý, Q. Ngũ Hành Sơn, TP Đà Nẵng. Điện thoại: 028 3343960. Email: cskh@tgdtpdt.com. Chịu trách nhiệm nội dung: Nguyễn Văn Phong.</p>
  </div>

  <script> 
    $(document).ready(function() {
        $("#gui").click(function(event) {
            event.preventDefault(); 
            var name = $('#name').val();
            var comment = $('#comment').val();

            $.ajax({
                method: "POST",
                url: 'danhGiaAdd.php',
                data: { name: name, comments: comment }
            })
            .done(function(data) {
                $("#comment").append(
                    '<br><h5><img style="width: 25px; height: 25px;" src="image/nguoiDug.png" alt="">' + name + '</h5>' +
                    '<div id="danhGia" class="card">' +
                    '<p>' + comment + '</p>' +
                    '<h6><i class="fa-regular fa-comment"></i> Trả Lời</h6><br>'
                );
                $("#comment").val('');
                $("#name").val('');
            })
            .fail(function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus + ": " + errorThrown);
            });
        });
    });
</script>
</body>
</html>