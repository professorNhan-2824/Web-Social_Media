<?php
session_start();
     $xacnhan = $_POST['xacnhan'];
    if( $xacnhan == $_SESSION['OTP'] ){
        echo "<script>alert('Mã OTP chính xác','Nhấn OK để tiếp tục');
        window.location.href = 'doipass.php';
        </script>";
        include('doipass.php');
    }else{
        echo "<script>alert('Mã OTP không chính xác');
        window.location.href = 'OTP.php';
        </script>";
    }
    ?>