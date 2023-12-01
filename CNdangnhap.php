<?php
session_start();
$severname = "localhost";
$username  = "root";
$password = "";
$database = "db_web_da";

$conn = mysqli_connect($severname, $username, $password, $database);

if (!$conn) {
    die("Kết nối không thành công: " . mysqli_connect_error());
}

$taikhoan = $_POST["taikhoan"];
$mk1 = $_POST["mk1"];

// Sử dụng prepared statements để tránh tấn công SQL injection
$sql = "SELECT * FROM `dangky` WHERE taikhoan = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $taikhoan);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (empty($taikhoan) || empty($mk1)) {
    echo "<script>alert('Vui lòng nhập đầy đủ thông tin');
    window.location.href = 'LOGIN';
    </script>";
} else {
    if ($row = mysqli_fetch_assoc($result)) {
        // Kiểm tra việc kiểm tra vi phạm ở đây
        $sql2 = "SELECT * FROM `dsden` WHERE email = ?";
        $stmt2 = mysqli_prepare($conn, $sql2);
        mysqli_stmt_bind_param($stmt2, "s", $row['email']);
        mysqli_stmt_execute($stmt2);
        $result2 = mysqli_stmt_get_result($stmt2);
        
        if (mysqli_num_rows($result2) > 0) {
            echo "<script>alert('Tài khoản của bạn đã vi phạm và bị ban 3295 ngày');
                window.location.href = 'LOGIN';
                </script>";
        } else {
            if ($mk1 == $row['mk1']) {
                $_SESSION['taikhoan'] = $taikhoan;
                $_SESSION['email'] = $row['email'];
                $_SESSION['anh'] = $row['anh'];
                $_SESSION['mk1'] = $row['mk1'];
                $_SESSION['admin'] = $row['admin'];
                echo "<script>alert('Đăng nhập thành công');
                window.location.href = 'HOME';
                </script>";
            } else {
                echo "<script>alert('Sai mật khẩu');
                window.location.href = 'LOGIN'</script>";
            }
        }
        mysqli_stmt_close($stmt2);
    } else {
        echo "<script>alert('Tài khoản không tồn tại');
        window.location.href = 'LOGIN'</script>";
    }
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
