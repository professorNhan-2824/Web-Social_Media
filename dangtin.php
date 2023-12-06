<?php
session_start();

$ngongu = $_POST['ngonngu'];
$noidung = $_POST['tin'];

if (isset($ngongu) && isset($noidung)) {
    // Kiểm tra xem form đã được submit chưa
    // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //     // Đường dẫn thư mục lưu trữ ảnh
    //     $target_dir = "tin/";
    //     $target_file = $target_dir . basename($_FILES['file-input']['name']);

    //             if (move_uploaded_file($_FILES['file-input']['tmp_name'], $target_file)) {
    //                 $date = new DateTime();
    //                         $chuoiThoiGian = $date->format("Y-m-d H:i:s");
                
    //                         $conn = mysqli_connect("localhost", "root", "", "db_web_da");
                
    //                         $sql = "INSERT INTO `dangtin` (`email`, `noidung`, `file`, `ngongu`,`repost`,`time`) VALUES ('" . $_SESSION['email'] . "', '$noidung', '$target_file', '$ngongu', '0',' $chuoiThoiGian')";
                
    //                         if ($conn->query($sql) === TRUE) {
    //                             echo "<script>
    //                                 alert('Thành công');
    //                                 window.location.href = 'congdong.php';
    //                             </script>";
    //                         } else {
    //                             echo "<script>
    //                                 alert('Lỗi');
    //                                 window.location.href = 'congdong.php';
    //                             </script>";
    //                         }
    //             } else {
    //                 echo "Có lỗi khi tải ảnh lên.";
    //             }
    //         } else {
    //             echo "Kích thước file quá lớn.";
    //         }
    //     }
    // }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $target_dir = "tin/"; // Thư mục lưu trữ ảnh đại diện tin/
        $target_file = $target_dir . basename($_FILES['file-input']['name']);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Kiểm tra kích thước file và kiểu file (nếu cần)
        if ($_FILES['file-input']['size'] > 0) {
            if (move_uploaded_file($_FILES['file-input']['tmp_name'], $target_file)) {
                $imagePath = $target_file;
            } else {
                $uploadOk = 0; // Đặt cờ lỗi
                echo "<script>
                    alert('Lỗi khi tải ảnh lên');
                    window.location.href = 'congdong.php';
                </script>";
                exit; // Thoát khỏi script sau lỗi
            }
        } else {
            $imagePath = ''; // Không có ảnh
        }

        if ($uploadOk) { // Nếu không có lỗi trong quá trình tải ảnh lên
            // Lưu thời gian hiện tại
            $date = new DateTime();
            $chuoiThoiGian = $date->format("Y-m-d H:i:s");

            $conn = mysqli_connect("localhost", "root", "", "db_web_da");

            $sql = "INSERT INTO `dangtin` (`email`, `noidung`, `file`, `ngongu`,`repost`,`time`) VALUES ('" . $_SESSION['email'] . "', '$noidung', '$imagePath', '$ngongu', '0',' $chuoiThoiGian')";
            if ($conn->query($sql) === TRUE) {
                $sql2 = "SELECT MAX(IDTin) as maxid FROM `dangtin` WHERE 1";
                $ketqua = mysqli_query($conn,$sql2);
                $row = mysqli_fetch_assoc($ketqua);
                $dem = $row['maxid'];
                $sql1 = "INSERT INTO `likepage`(`id`, `idtin`, `email`) VALUES ('0',' $dem','" . $_SESSION['email'] . "')";
                $conn->query($sql1);
                echo "<script>
                    alert('Thành công');
                    window.location.href = 'congdong.php';
                </script>";
                
            } else {
                echo "<script>
                    alert('Lỗi');
                    window.location.href = 'congdong.php';
                </script>";
            }

            $conn->close();
        }
    }
}
?>
