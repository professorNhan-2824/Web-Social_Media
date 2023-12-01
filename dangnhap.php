<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="image/icons8-xing-squared-57.png" sizes="50x50">
    <title>INCLUDE Login Page | CodingNepal</title>
    <link rel="stylesheet" href="dangnhap.css">
  </head>
  <body>
    <div class="container flex">
      <div class="facebook-page flex">
        <div class="text">
          <h1>C++ INCLUDE</h1>
          <p>Connect with friends and the world </p>
          <p> around you on C++include.</p>
        </div>
        <form method="POST" action="./CNdangnhap.php">
          <input type="text" id="tk" name="taikhoan" placeholder="Username" required>
          <input type="password" id="mk1" name="mk1" placeholder="Password" required>
          <div class="link">
            <button type="submit" class="login">Login</button>
            <a href="./quenmatkhau/nhapmail.php" class="forgot">Forgot password?</a>
          </div>
          <hr>
          <div class="button">
            <a href="dangky.php">Create new account</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
                