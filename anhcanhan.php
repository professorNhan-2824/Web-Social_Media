
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
        a {
    text-decoration: none;
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


    <!-- Liên kết tệp JavaScript của Bootstrap (tuỳ chọn) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="mt-5">
        <div >
            <img class="cover-photo" src="/DoAn/image.bakground/Thiết kế chưa có tên.png" alt="">
        </div>
        <div >
            <?php echo'<a href="/DoAn/uploadcanha.php"><img class="profile-picture" src="' .  $_SESSION['anh']. '" alt="Ảnh đại diện"></a>'; ?>
        </div>
        <div class="user-info">
            <h1> <?php echo "<h1>".$_SESSION['taikhoan']."</h1>" ?></h1>
            <?php 
                                            if ($_SESSION['admin'] == '1') {
                                                echo '<p><a style="text-decoration: none;color: black;" href="/DOAN/upvex-admin-dashboard/trangchu.php">Quản Lý Thông Tin </a></p>';
                                            }else if($_SESSION['admin'] == '0'){
                                                echo '<p><a style="text-decoration: none;color: black;" href="/DOAN/ttcanhan.php">Thông tin cá nhân</a></p>';
                                            }
                                    ?>
            <!-- <p><a style="text-decoration: none;color: black;" href="/DOAN/ttcanhan.php">Thông tin cá nhân</a></p> -->
        </div>
        <form style='padding-left:10px' method='POST' action='/DOAN/CNdangxuat.php'> <button class='green-button'>Đăng Xuất</button></form>
        <div style="height:10px"></div>
    </div>
</body>
</html>