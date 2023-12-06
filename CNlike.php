<?php
$email = $_POST['email'];
$tin = $_POST['tin'];
$conn = mysqli_connect('localhost', 'root', '', 'db_web_da');

// Sử dụng câu lệnh chuẩn bị để ngăn chặn SQL injection
$sql = "SELECT COUNT(email) as ketqua FROM likepage WHERE idtin = ? AND email = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ss", $tin, $email);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

if ($row['ketqua'] == 0) {
    // Sử dụng INSERT IGNORE để chỉ chèn nếu kết hợp của idtin và email chưa tồn tại
    $sql1 = "INSERT IGNORE INTO `likepage`(`idtin`, `email`) VALUES (?, ?)";
    $stmt1 = mysqli_prepare($conn, $sql1);
    mysqli_stmt_bind_param($stmt1, "ss", $tin, $email);
    mysqli_stmt_execute($stmt1);

    if (mysqli_affected_rows($conn) > 0) {
        echo "Đã thích";
        
    }
} else {
    $sql2 = "DELETE FROM `likepage` WHERE idtin = ? AND email = ?";
    $stmt2 = mysqli_prepare($conn, $sql2);
    mysqli_stmt_bind_param($stmt2, "ss", $tin, $email);
    mysqli_stmt_execute($stmt2);

    if (mysqli_affected_rows($conn) > 0) {
        echo "Bỏ thích"; return 0;
    } 
    
}

mysqli_close($conn);
?>
