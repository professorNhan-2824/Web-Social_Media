<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang cá nhân</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        .cover-photo {
            /* background-image: url('cover.jpg'); Ảnh nền bìa */
            background-size: cover;
            background-position: center;
            height: 200px;
        }

        .profile-picture {
            /* background-image: url('profile.jpg'); Ảnh đại diện  */
            background-size: cover;
            background-position: center;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid #fff;
            margin: -75px auto 20px;
            display: block;
        }

        .user-info {
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
            margin: 10px 0;
        }

        p {
            font-size: 16px;
            margin: 5px 0;
        }
    </style>
</head>
<body>


    <form action="uploadanhdaidien.php" method="POST" enctype="multipart/form-data">
    <div >
        <img class="cover-photo" src="./image.bakground/Thiết kế chưa có tên.png" alt="">
    </div>
    <div >
        <?php echo'<img class="profile-picture" src="' .  $_SESSION['anh']. '" alt="Ảnh đại diện">'; ?>
    </div>
    <div class="user-info">
        <h1>Tên người dùng</h1>
        <p>Thông tin cá nhân</p>
    </div>
        <input type="file" name="avatar" accept="image/*">
        <input type="submit" value="Tải lên ảnh đại diện">
    </form>
    
</body>
</html>
