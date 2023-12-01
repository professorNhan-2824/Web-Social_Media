<?php
session_start();

// Hủy bỏ tất cả các session
session_unset();

// Hủy session
session_destroy();

// Chuyển hướng người dùng về trang đăng nhập hoặc trang chính
header("Location: index.php"); // Thay thế 'login.php' bằng trang đăng nhập của bạn
exit();
?>
