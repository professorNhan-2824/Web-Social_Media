<?php
$severname = "localhost";
$username  = "root";
$password = "";
$database = "db_web_da";

// Kết nối đến cơ sở dữ liệu
$conn = mysqli_connect($severname, $username, $password, $database);

if (!$conn) {
    die("Kết nối không thành công: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra tồn tại của biến POST
    if (isset($_POST["taikhoan"]) && isset($_POST["mk1"]) && isset($_POST["mk2"]) && isset($_POST["dienthoai"]) && isset($_POST["email"])) {
        $taikhoan = $_POST["taikhoan"];
        $mk1 = $_POST["mk1"];
        $mk2 = $_POST["mk2"];
        $dienthoai = $_POST["dienthoai"];
        $email = $_POST["email"];
        $anh = 'uploads/z4814434415535_4898f94347d96faf26af0c99f3ff8379.jpg';
        
        // Kiểm tra các trường nhập liệu
        if (empty($taikhoan) || empty($mk1) || empty($mk2) || empty($dienthoai) || empty($email)) {
            echo "<script>alert('Vui lòng nhập đầy đủ thông tin');
            window.location.href = 'CREATE_NEW_ACCTOR';</script>";
        } else {
            // Kiểm tra mật khẩu xác minh
            if ($mk1 == $mk2) {
                // Kiểm tra xem số điện thoại hoặc email đã tồn tại
                $sql1 = "SELECT * FROM `dangky` WHERE dienthoai = ? OR email = ?";
                $stmt = mysqli_prepare($conn, $sql1);
                mysqli_stmt_bind_param($stmt, "ss", $dienthoai, $email);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                
                if ($row = mysqli_fetch_assoc($result)) {
                    echo "<script>alert('Số điện thoại hoặc email đã tồn tại'); window.location.href = 'CREATE_NEW_ACCTOR';</script>";

                } else {
                    // Sử dụng Prepared Statement cho INSERT INTO
                    $sql = "INSERT INTO dangky (taikhoan, mk1, mk2, dienthoai, email, anh) VALUES (?, ?, ?, ?, ?, ?)";
                    $stmt = mysqli_prepare($conn, $sql);
                    mysqli_stmt_bind_param($stmt, "ssssss", $taikhoan, $mk1, $mk2, $dienthoai, $email, $anh);
                    if (mysqli_stmt_execute($stmt)) {
                        echo "<script>alert('Thêm thành công');window.location.href = 'LOGIN';</script>";
                    } else {
                        echo "<script>alert('Lỗi: " . mysqli_error($conn) . "');</script>";
                    }
                }
            } else {
                echo "<script>alert('Mật khẩu xác minh không đúng');window.location.href = 'CREATE_NEW_ACCTOR';</script>";
            }
        }
    }
}

// Đóng kết nối
mysqli_close($conn);
?>
