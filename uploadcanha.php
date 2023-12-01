<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            margin: 0px auto 20px;
            display: block;
        }

        .user-info {
            text-align: center;
            padding: 10px;
        }

        h1 {
            font-size: 24px;
            margin: 10px 0;
        }

        p {
            font-size: 16px;
            margin: 5px 0;
        }
                           .green-button {
                               display: inline-block;
                               padding: 10px 20px;
                               background-color: #4CAF50; /* Màu xanh đậm */
                               color: white; /* Màu chữ trắng */
                               text-align: center;
                               text-decoration: none;
                               border: none;
                               border-radius: 5px; /* Bo tròn góc */
                               cursor: pointer;
                           }
                   
                           /* Khi rê chuột vào nút */
                           .green-button:hover {
                               background-color: #45a049; /* Màu xanh nhạt */
                           }
                       </style>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="icon" type="image/png" href="image/icons8-xing-squared-57.png" sizes="50x50">
    <!-- Liên kết tệp JavaScript của Bootstrap (tuỳ chọn) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <form action="uploadanhdaidien.php" method="POST" enctype="multipart/form-data">
    <div >
        <?php echo'<a href="uploadanhdaidien.php"><img class="profile-picture" src="' .  $_SESSION['anh']. '" alt="Ảnh đại diện"></a>'; ?>
    </div>
    <div class="user-info">
        <h1> <?php echo "<h1>".$_SESSION['taikhoan']."</h1>" ?></h1>
        <p>Thông tin cá nhân</p>
    </div>
        <input type="file" name="avatar" accept="image/*">
        <input type="submit" value="Tải lên ảnh đại diện">
    </form>
    <div class="d-flex justify-content-center align-content-center fixed-bottom">
        <a href="index.php"><button type="button" class="btn btn-primary">quay lại</button></a>  
    </div>
                     
</body>
</html>