<?php 
$noidung = $_POST['noidung'];
$email = $_POST['email'];
$tin = $_POST['tin'];
$taikhoan = $_POST['taikhoan'];
$conn = mysqli_connect("localhost", "root", "", "db_web_da");
$sql = "INSERT INTO `binhluan`(`idbai`, `email`, `noidung1`, `taikhoan`) VALUES ('$tin','$email','$noidung','$taikhoan')";
$kq = mysqli_query($conn,$sql);

$response = array(); 

if ($kq == true) {
    $comment = array(
        'taikhoan' => $_POST['taikhoan'],
        'noidung' => $_POST['noidung']
    );

    $response['success'] = true;
    $response['comment'] = $comment;
} else {
    $response['success'] = false;
    $response['message'] = 'Không thể thêm bình luận.';
}

// Trả về phản hồi dưới dạng JSON
header('Content-Type: application/json');
echo json_encode($response);

mysqli_close($conn);
?>
