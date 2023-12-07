<?php  
$email = $_POST['email'];
$id = $_POST['id'];
$conn = mysqli_connect('localhost','root','','db_web_da');
$sql="DELETE FROM `binhluan` WHERE email = '$email' and id = '$id '";
$ketqua = mysqli_query($conn,$sql);
?>