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
    <title>Facebook Login Page | CodingNepal</title>
    <link rel="stylesheet" href="nhapmail.css">
  </head>
  <body>
    <div class="container flex">
      <div class="facebook-page flex">
        <div class="text">
            <h1>Change Password</h1>
        </div>
      
        <form method="POST" action="xacnhan.php">
        <input type="password" id="mk1" name="mk1" placeholder="Password" required>
          <input type="password" id="mk2" name="mk2" placeholder="Check Password" required>
          <div class="link">
            <button type="submit" class="login">Change Password</button>
            <a href="../dangky" class="forgot">Create new account</a>
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
                