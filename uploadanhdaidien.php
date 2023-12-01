<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "uploads/"; // Thư mục lưu trữ ảnh đại diện
    $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Kiểm tra kiểu tệp và kích thước tệp...

    // Nếu không có lỗi, tiến hành tải lên
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
            // Lưu đường dẫn tới ảnh vào cơ sở dữ liệu tại đây
            $imagePath = $target_file;

            // Kết nối và lưu trữ đường dẫn vào cơ sở dữ liệu
            $conn = mysqli_connect("localhost","root","","db_web_da");
            if ($conn->connect_error) {
                die("Kết nối thất bại: " . $conn->connect_error);
            }
            $_SESSION['anh'] =  $imagePath;
            $sql = "UPDATE `dangky` SET `anh`='$imagePath' WHERE email = '" . $_SESSION['email'] . "'";
            if ($conn->query($sql) === TRUE) {
                echo "Tải lên ảnh và lưu vào cơ sở dữ liệu thành công.";
                echo '<div class="d-flex justify-content-center align-content-center fixed-bottom">
                <a href="index.php"><button type="button" class="btn btn-primary">quay lại</button></a>  
            </div>';
            } else {
                echo "Có lỗi xảy ra khi lưu vào cơ sở dữ liệu: " . $conn->error;
            }

            $conn->close();
        } else {
            echo "Có lỗi xảy ra khi tải lên ảnh đại diện.";
        }
    }
}

?>