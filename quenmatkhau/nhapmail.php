<?php
    session_start();
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
      <div class="facebook-page  flex">
        <form method="POST" action="./OTP.php">
          <input type="email" id="taikhoan" name="taikhoan" placeholder="Email" required>
          <div class="link">
            <button type="submit" class="login">Confirm</button>
            <a href="../dangky.php" class="forgot">Create new account</a>
          </div>
          <hr>
          <div class="button">
            <a href="../dangnhap.php">LOGIN</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
                
