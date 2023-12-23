<?php
require_once('D:\xampp\htdocs\doAn_1\web\admin\config\db.php');
try {
    if (isset($_GET['updateid'])) {
        $id=$_GET['updateid'];
        $select_data= "SELECT * FROM `sanph1` WHERE sanPh_id = $id";
        $select_data_query = mysqli_query($conn,$select_data);
        $select_fetch_data = mysqli_fetch_assoc($select_data_query);
        if(isset($_POST['submit'])){
          $nameu=$_POST['name'];
          $giau=$_POST['gia'];
          $imgu=$_POST['img'];
          $soluong=$_POST['soluong'];
          $moTa = $_POST['moTa'];

              $insert = "UPDATE `sanph1` 
              SET `name`='$nameu',`gia`='$giau',`img`='$imgu',`soluong`='$soluong' ,`moTaSp`='$moTa'
              WHERE sanPh_id=$id";
              mysqli_query($conn, $insert);                 
              header('location:product.php');
        }
       
       };

} catch (\Throwable $th) {
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container" style="padding-top:50px;">
    <h2 style="padding: 40px 40px 70px 450px;">Chỉnh Sửa</h2>
    <form method="post" action="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
    <input type="text" class="form-control" name="name" value="<?php echo $select_fetch_data['name'] ?>">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Giá sản phẩm</label>
    <input type="text" class="form-control" name="gia" value="<?php echo $select_fetch_data['gia']?>">
    
    <div class="mb-3">
  <label for="formFile" class="form-label">Ảnh sản phẩm</label>
  <input class="form-control" autocomplete="off" type="file" name="img" value=""><br><img style="height: 10%; width: 10%;" src='image/<?php echo $select_fetch_data['img']?>'>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Số lượng</label>
    <input type="text" class="form-control" name="soluong" value="<?php echo $select_fetch_data['soluong'] ?>">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Mô tả sản phẩm </label><br> 
    <textarea class="ckeditor" id="textarea" name="moTa" cols="100" rows="14"><?php echo $select_fetch_data['moTaSp']; ?></textarea>
  </div>
  <br><br>
  <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
</form>
    

<!-- script -->

<script>
    ClassicEditor
      .create(document.querySelector('#textarea'))
      .catch(error => {
        console.error(error);
      });
  </script>
</body>
</html>