<?php
session_start();
$email = $_POST ["email"];
$noidung = $_POST ["noidung"];
$conn = mysqli_connect("localhost","root","","db_web_da");
$date = new DateTime();
$chuoiThoiGian = $date->format("Y-m-d H:i:s");
// $sql = "SELECT * FROM `gopy` WHERE  email = '$email'";
// $result = mysqli_query($conn, $sql);
// if(mysqli_num_rows($result) > 0) {
//     $sql1 = "UPDATE `gopy` SET `noidung`='$noidung' WHERE email = '$email'";
// $result1 = mysqli_query($conn, $sql1);
// echo"Cảm ơn bạn đã phản hồi !";
// }else{
    $sql = "INSERT INTO `gopy`(`email`, `noidung`, `time`) VALUES ('".$_SESSION['email']."','$noidung','$chuoiThoiGian')";
    $result = mysqli_query($conn, $sql);
    echo"Cảm ơn bạn đã phản hồi !";

// }
?>