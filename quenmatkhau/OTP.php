<?php
  session_start();
  // $email = $_SESSION['email'];
  $_SESSION['email'] = $_POST['taikhoan'];
$conn = mysqli_connect("localhost", "root", "", "db_web_da");
$sql = "SELECT * FROM `dangky` WHERE email = '".$_SESSION['email']."'";
$ketqua = mysqli_query($conn, $sql);
if(mysqli_num_rows($ketqua) > 0 ){
  $randomNumber = mt_rand(100000, 999999);
  $_SESSION['OTP'] = $randomNumber;
      require("../PHPMailer-master/src/PHPMailer.php");
      require("../PHPMailer-master/src/SMTP.php");
      require("../PHPMailer-master/src/Exception.php");
  try {
      $mail = new PHPMailer\PHPMailer\PHPMailer();
      $mail->IsSMTP(); // enable SMTP

      $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
      $mail->SMTPAuth = true; // authentication enabled
      $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
      $mail->Host = "smtp.gmail.com";
      $mail->Port = 465; // or 587
      $mail->IsHTML(true);
      $mail->Username = "dohuunhan321@gmail.com";
      $mail->Password = "gavq jhud bohp oyti";
      $mail->SetFrom("dohuunhan321@gmail.com");
      $mail->Subject = "OTP OF IncludeC++";
      $mail->Body = "HELLO <br> <b>OTP <h1>".$_SESSION['OTP']."</h1></b>";
      $mail->AddAddress($_SESSION['email']);
      $mail->Send();
      echo "<script>alert('Mã OTP đã gửi tới mail');</script>";
  } catch (Exception $e) {
      echo "Mailer Error: " . $mail->ErrorInfo;
  }
}else{
  echo "<script>alert('Email không tồn tại');</script>";
  include('nhapmail.php');
}

?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Login Page | CodingNepal</title>
    <link rel="stylesheet" href="nhapmail.css">
  </head>
  <body>
    <div class="container flex">
      <div class="facebook-page flex">
        <form  action="kiemtraOTP.php" method="POST">
          <input type="text" id="xacnhan" name = "xacnhan" placeholder="VALUE" required>
          <div class="link">
            <button type="submit" class="login">Login</button>
            <a href="#" class="forgot">Forgot password?</a>
          </div>
          <hr>
          <div class="button">
            <a href="#">Create new account</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>