<?php

$conn = mysqli_connect("localhost","root","","db_web_da");
$sql = "SELECT * FROM `dangky` WHERE email = '' OR taikhoan = ''";
$result = mysqli_query($conn, $sql);
?>