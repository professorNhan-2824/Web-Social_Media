<?php
session_start();
$mk1 = $_POST['mk1'];
$mk2 = $_POST['mk2'];
$conn = mysqli_connect("localhost","root","","db_web_da");
if($mk1==" " || $mk2==" "){
    echo "<script>alert('Vui lòng nhập đủ dữ liệu');</script>";
    include('doipass.php');
}else{
    if($mk1 === $mk2){
        $email = $_SESSION['email'];
        
        // Sử dụng câu lệnh SQL để cập nhật mật khẩu
        $sql = "UPDATE `dangky` SET `mk1` = '$mk1', `mk2` = '$mk2' WHERE email = '$email'";
       $ketqua = mysqli_query($conn, $sql);
       if ($ketqua) {
        echo "<script>alert('Cập nhật mật khẩu thành công'); window.location.href = '../dangnhap.php';</script>";
    } else {
        echo "<script>alert('Có lỗi xảy ra khi cập nhật mật khẩu');</script>";
        include('doipass.php');
    }
    }else{
        echo "<script>alert('Dữ liệu sai');</script>";
        include('doipass.php');
    }
}


?>