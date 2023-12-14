<?php 
$tin = $_POST['IDTin'];
$conn = mysqli_connect("localhost", "root", "", "db_web_da");

$sqlDeleteDangTin = "DELETE FROM `dangtin` WHERE IDTin = '$tin'";
$ketqua = mysqli_query($conn, $sqlDeleteDangTin);

if ($ketqua) {
    echo "<script>alert('Xóa thành công'); window.location.href = 'hoatdong.php';</script>";
} else {
    echo "<script>alert('Xóa thất bại');</script>";
}

mysqli_close($conn);

?>
