<?php
// Hiển thị lỗi PHP (nếu có)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Kết nối đến cơ sở dữ liệu
$conn = mysqli_connect('localhost', 'root', '', 'tuan3_hoc');

// Kiểm tra kết nối
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Lấy ID bài viết từ yêu cầu Ajax
$postId = $_POST['post_id'];

// Tăng số lượng like trong cơ sở dữ liệu
$updateQuery = "UPDATE posts SET likes = likes + 1 WHERE id = $postId";
if (mysqli_query($conn, $updateQuery)) {
    echo "Update successful";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

// Đóng kết nối
mysqli_close($conn);
?>
