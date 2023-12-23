
<?php
require_once('D:\xampp\htdocs\doAn_1\web\admin\config\db.php');
if(isset($_POST['submit'])){
  $target_file = "image/" . basename($_FILES["fileToUpload"]["name"]);
  $target_file_trangchu = "../trangChu/image/" . basename($_FILES["fileToUpload"]["name"]);

  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file_trangchu);

  $name = $_POST['name1'];
  $gia = $_POST['gia'];
  $img = basename($_FILES["fileToUpload"]["name"]);
  $soluong = $_POST['soluong'];
  $iddm = $_POST['iddm'];
  $idhang = $_POST['idhang'];
  $mota = $_POST['moTa'];

  $insert = "INSERT INTO `sanph1`(`name`, `gia`, `img`, `soluong`,`moTaSp`, `iddanhmuc`, `id_hang`) 
             VALUES ('$name', '$gia', '$img', '$soluong','$mota', '$iddm', '$idhang')";
  mysqli_query($conn, $insert);
  header('location: product.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
</head>
<body>

    <div class="container" style="padding-top:50px;">
    <h2 style="padding: 40px 40px 70px 450px;">Thêm Sản Phẩm</h2>
    <form method="post" action="" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
    <input type="text" class="form-control" name="name1" placeholder="Nhập tên sản phẩm">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Giá sản phẩm</label>
    <input type="text" class="form-control" name="gia" placeholder="Nhập giá sản phẩm">
    
    <div class="mb-3">
  <label for="formFile" class="form-label">Ảnh sản phẩm</label>
  <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Số lượng</label>
    <input type="text" class="form-control" name="soluong" placeholder="Nhập số lượng sản phẩm">
    </div>
    <div class="mb-3">
    <br>  Danh mục <br>
    <select name="iddm">
    <?php
    try {
      $sql = "select * from `danhmuc1`";
      $result = mysqli_query($conn,$sql);
      if (!$result) {
         die("invalid query!");
      } 
      while ( $row = mysqli_fetch_assoc($result)) {                              
          $id=$row['id'];
          $name=$row['tendanhmuc'];
          echo'<option value="'.$id.'">'.$name.'</option>'; 
      }
  } catch (\Throwable $th) {
  }   
      
     ?>
    </select>
    


<div class="mb-3">
    <br> Hãng <br>
    <select name="idhang">
    <?php
    try {
      $sql = "select * from `hang`";
      $result = mysqli_query($conn,$sql);
      if (!$result) {
         die("invalid query!");
      } 
      while ( $row = mysqli_fetch_assoc($result)) {                              
          $id=$row['id'];
          $name=$row['tenhang'];
          echo'<option value="'.$id.'">'.$name.'</option>'; 
      }
  } catch (\Throwable $th) {
  }   
      
     ?>
    </select>
  </div>
  <br> 
    <div class="mb-3">
    <label for="" class="form-label">Mô tả sản phẩm </label><br> 
    <textarea class="ckeditor" id="textarea" name="moTa" cols="100" rows="14"> 
    </textarea>
    </div>
  <br><br>
  <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
</form>
    </div>


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