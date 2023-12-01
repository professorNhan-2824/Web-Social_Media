<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/png" href="image/icons8-xing-squared-57.png" sizes="50x50">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="dangnhap.css">

</head>
<body>

    

  <div class="container flex">
      <div class="facebook-page flex">
        <div class="text">
          <h1>THÔNG TIN CÁ NHÂN</h1>
        </div>
        <form method="POST" >
        <?php
    $conn = mysqli_connect("localhost","root","","db_web_da");
    $sql1 = "SELECT * FROM dangky WHERE email ='".$_SESSION['email']."'";
    $ketqua1= mysqli_query($conn, $sql1);
    while ($row = mysqli_fetch_array($ketqua1)) 
    { 
        $length = strlen($row['mk1']);
        $maskedPassword = str_repeat('***********', $length); 
        echo"<b>Tài Khoản:</b> ". $row['taikhoan'] ."<br>"; 
        echo"<b>Điện thoại: </b>". $row['dienthoai'] ."<br>"; 
        echo"<b>Email: </b>". $row['email'] ."<br>"; 
        echo"<b>Mật Khẩu: </b>". $maskedPassword ."<br>"; 
        echo"<div class='d-flex'>";
        echo "<a class='ms-5' href='./quenmatkhau/nhapmail.php'>Cập Nhật Mật Khẩu</a>";
        echo "<a class='ms-5' href='./gopy.php'>Góp Ý</a>";
        echo "</div>";
        // echo "<td><a href='Formcapnhat.php?ID=".$_SESSION['id']."'>Cập Nhật</a></td>";
        // setcookie("dem", $row['ID'], time() + 1, "/");
        echo "<button style='width: 100px;' type='submit'><a href='index.php'>Quay lại</a></button>";
    }

    mysqli_close($conn);
    ?>
          <!-- <input type="text" id="tk" name="taikhoan" placeholder="Username" required>
          <input type="password" id="mk1" name="mk1" placeholder="Password" required>
          <div class="link">
            <button type="submit" class="login">Login</button>
            <a href="./quenmatkhau/nhapmail.php" class="forgot">Forgot password?</a>
          </div>
          <hr>
          <div class="button">
            <a href="dangky.php">Create new account</a>
          </div> -->
        </form>
      </div>
    </div>
</body>
</html>