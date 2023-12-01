<?php
// Kết nối tới cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$database = "web_test";

$conn = mysqli_connect($servername, $username, $password, $database);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// Xử lý dữ liệu biểu mẫu
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $taikhoan = $_POST["taikhoan"];
    $mk1 = $_POST["mk1"];
    $dienthoai = $_POST["dienthoai"];
    $email = $_POST["email"];

    // Chuẩn bị câu lệnh INSERT INTO
    $sql = "INSERT INTO dangky (taikhoan, mk1, dienthoai, email) VALUES ('$taikhoan', '$mk1', '$dienthoai', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
}

// Đóng kết nối
mysqli_close($conn);
?>
