<?php
    session_start();
    ?>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sosial media</title>
        <link rel="icon" type="image/png" href="image/icons8-xing-squared-57.png" sizes="50x50">
        <style>
            *{
                padding: 0;
                margin: 0;
            }
            .anhC{
                border-radius: 5px;
            }
            header{
                /* background-color: rgb(83, 163, 255); */
                background-color: aliceblue;
            }
            nav{
                background-color: rgb(87, 88, 88);
                border-radius: 10px;
            }
            section{
                font-size: 25px;
            }
            .table-c,td{
                border: 1px solid rgb(6, 6, 6);
                border-collapse: collapse;
                font-size: 22px;
            }
            th{
                height: 50px;
                background-color: gray;
            }
            td{
                height: 35px;
                padding-left: 20px;
            }
            #td2,a{
                color: rgb(86, 86, 228);
                text-decoration: none;
            }
            .menu-ngang{
                background-color: rgb(243, 245, 246);
            }
            .anhdau1{
                display: block;
            }
            .chu{
                font-size: 20px;
            }
            #div-w{
                background-color: #f25d3c;
                width: 150px;
                height: 30px;
                text-align: center;
                border-radius: 10px;
               
            }
            #menu-bai1{
                list-style: none;
                padding-left: 10px;
            }
            #menu-bai1>li>a{
                text-decoration: none;
                color: rgb(49, 44, 26);
                padding-left: 30px;
            }
            #menu-bai1>li>a:hover{
                color: rgb(15, 186, 237);
            }
            #bt{
                    width: 80%;
            }
            #bs{
                    width: 20%;
            }
            @media only screen  and (max-width: 280px){
                .anhC{
                    display: none;
                }
                .chu{
                    display: none;
                }
                footer{
                    padding-bottom: 40px;
                }
                #bt{
                    width: 50%;
                }
                #bs{
                    width: 50%;
                }
            }
            @media only screen  and (max-width: 380px){
                .chutaobai{
                font-size: 3px;
            }
                .h1logo{
                    font-size: 17px;
                }
                .taotin{
                    width: 200px;
                }
                .profile-picture {
                    background-size: cover;
                    background-position: center;
                    width: 2.5px;
                    height: 2.5px;
                    border-radius: 2.5%;
                    /* border: 2.5px solid #fff; */
                    /* margin: -15px auto 5px; */
                    display: block;
                }
    
            }
            @media only screen  and (max-width: 409px){
                .tentin{
                    font-size: 2px;
                }
                .chutaobai{
                font-size: 7px;
            }
                .h1logo{
                    font-size: 17px;
                }
                .taotin{
                    width: 260px;
                }
    
            }
            /* màn hình cho mobile dưới 640px */
            @media only screen  and (max-width: 768px){
                .chutaobai{
                font-size: 17px;
            }
                .anhdau1{
                    display: none;
                }
                .chu{
                    display: none;
                }
                #bt{
                    width: 50%;
                }
                #bs{
                    width: 50%;
                }
            }
            @media only screen  and (max-width: 1200px){
                .chu{
                    display: none;
                }
            }
            .form{
        margin-top: 10px;
        display: flex;
        justify-content: center;
    }
    .profile-picture {
        background-size: cover;
        background-position: center;
        width: 40px;
        height: 40px;
        border-radius: 10%;
        border: 5px solid #fff;
        margin: -60px auto 20px;
        display: block;
    }
    
            .custom-file-input::-webkit-file-upload-button,
            .custom-file-input::before {
                content: none !important;
                display: none;
            }
    
            /* Hiển thị kiểu tùy chỉnh của nút */
            .custom-file-input::after {
                content: 'file'; /* Thay đổi nội dung tùy ý */
            }
            /* CSS để tùy chỉnh cửa sổ đối tượng (popup window) */
            .popup {
                width: 700px;
                height: 400px;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                border: 1px solid #000;
                background: #fff;
                z-index: 1000;
                display: none;
            }
    
            /* CSS để tạo mờ phần nền */
            .overlay {
                width: 100%;
                height: 100%;
                position: fixed;
                top: 0;
                left: 0;
                background: rgba(0, 0, 0, 0.5);
                z-index: 999;
                display: none;
            }
            .popup{
                border-radius: 10px;
            }
            .chutaobai{
                font-size: 27px;
            }
            .taotin{
                width:80%;
            }
            .formtaotin{
                border-radius: 20px ;
                height: 80px;
                padding-top:10px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
           /* Định dạng file upload container */
            .file-upload {
            display: inline-block;
            position: relative;
            }
    
            /* Định dạng hình ảnh (nút) */
            .file-upload label img {
            width: 100px; /* Điều chỉnh kích thước hình ảnh theo ý muốn */
            cursor: pointer; /* Biến con trỏ thành "hand" khi di chuột qua hình ảnh */
            }
    
            /* Định dạng khi label (nút) được nhấn */
            .file-upload input[type="file"]:focus + label {
            /* Định dạng khi nút được nhấn */
            }
    
    
    
        </style>
        <link rel="stylesheet" type="text/css" href="./congdong.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
        <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->
        <!-- Liên kết tệp JavaScript của Bootstrap (tuỳ chọn) -->
       
    </head>
    <body style="background-color: #f2f2f2;">
        <div class="container-fluid" > 
        <div class="row mt-5">
                <?php
                require 'menu/menu.php';
            ?>
            </div>
            <div class="mt-5" style="clear: both;">
            <section style="background-color: #f2f2f2;">
                <div class="row">
                    <div class="col-md-9 col-lg-10 col-xl-10 " >
                        <div class="row mt-3 ">
                            <div class="col-12 d-flex justify-content-center" >
                                <div class="formtaotin w-50 d-flex" style="background-color: #ffffff;">
                                        <div class="col-4 col-md-3 col-sm-2">
                                        <?php
                                        echo ' <img class="profile-picture" style="background-size: cover;
                                    
                                        width: 70px;
                                        height: 70px;
                                        border-radius: 50%;
                                        border: 5px solid #fff;
                                        margin: -5px auto 20px;
                                        display: block;" src="'.$_SESSION['anh'].'" alt="Ảnh đại diện">'
                                        ?> 
                                    </div>
                                    <div class="col-8 col-md-9 col-sm-10">
                                        <input style="  border-radius: 15px;" class=" mt-2 ps-3 taotin" id="open-popup-button" type="text" placeholder="Tạo Tin Mới">
                                
                                            
                                        <div id="overlay" class="overlay">
                                            <form id="submitForm" action="dangtin.php" method="POST" enctype="multipart/form-data">
                                            <div id="popup" class="popup col-6">
                                                <div class="row ">
                                                    <div class="col-8 col-md-10 col-lg-11 tentin " ><p class="chutaobai ps-4 justify-content-center d-flex "><b>Tạo Tin Mới</b></p></div>
                                                    <div class="col-4 col-md-2 col-lg-1"><img class="" id="close-popup-button" src="/DOAN/image/icons8-x-32.png" alt=""></div>
                                                    <!-- <button id="close-popup-button">Đóng</button> -->
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-6 col-sm-2" >
                                                        <?php
                                                        echo ' <img class="profile-picture" style="background-size: cover;
                                                        margin-left:20px;
                                                        width: 70px;
                                                        height: 70px;
                                                        border-radius: 50%;
                                                        border: 5px solid #fff;
                                                        margin: -5px auto 20px;
                                                        display: block;" src="'.$_SESSION['anh'].'" alt="Ảnh đại diện">'
                                                        ?> 
                                                    </div>
                                                    <div class="col-4 col-sm-2 mt-2">
                                                        <h3><b><?php echo $_SESSION['taikhoan']?></b></h3>
                                                        
                                                    </div>
                                                    <div class="col-2 col-sm-6 mt-2">
                                                    <select name="ngonngu" id="ngonngu" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                        <!-- <option selected>Ngôn ngữ lập trình</option> -->
                                                        <option value="C++">C++</option>
                                                        <option value="C">C</option>
                                                        <option value="Python">Python</option>
                                                    </select>
                                                    </div>
                                                    <div class="row">
                                                            <div class="mb-3">
                                                            <form id="submitForm" action="dangtin.php" method="post" enctype="multipart/form-data">
                                                                        <!-- <div class="editor " style="width: 150px;">-->
                                                                            <textarea style="border: 1px solid white;font-size:20px" class=" form-control" name="tin" id="tin" rows="3" placeholder="<?php echo $_SESSION['taikhoan'] ?> ơi bạn đang nghĩ gì thế"></textarea>                                                <div class="file-upload">
                                                                            <label for="file-input">
                                                                                <img src="./image/icons8-upload-image-60.png" alt="Choose a file">
                                                                            </label>
                                                                            <input type="file" id="file-input" accept="image/*" name="file-input" style="display: none;">
    
                                                                
                                                                        <div class="d-flex justify-content-center align-content-center fixed-bottom w-100">
                                                                        <button type="submit" class="btn btn-success">Đăng Tin</button>    
                                                                        <!-- <a  href="dangtin.php"><button type="submit" class="btn btn-success">Đăng Tin</button></a>   -->
                                                                        </div>
                                                                        </form>
                                                                    
                                                                        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
                                                                    
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="row me-2 ms-2 mt-3 ">
                                    <div class="col-12">
                                        <?php
                                        $conn = mysqli_connect('localhost','root','','db_web_da');
                                        $sql = "SELECT dangtin.noidung , dangtin.file, dangtin.time ,dangtin.ngongu, dangky.anh, dangky.taikhoan, dangtin.email FROM dangtin INNER JOIN dangky ON dangtin.email = dangky.email WHERE ngongu='Python' ORDER BY time DESC";
                                        $ketqua = mysqli_query($conn, $sql);
                                        while($row=mysqli_fetch_array( $ketqua)){
                                            echo"<div style='margin-bottpm: 20px; background-color: #ffffff;border-radius:20px;padding-left:20px '>";
                                                echo'<image style="width: 68px; /* Điều chỉnh kích thước theo ý muốn */
                                                    height: 70px; /* Điều chỉnh kích thước theo ý muốn */
                                                    border-radius: 50%; /* Làm cho ảnh trở thành hình tròn */
                                                    object-fit: cove;padding-top:5px;" src='.$row['anh'].'> </image>';
                                                echo"<b>".$row['taikhoan']."</b>";
                                                echo"<i style='padding-left:10px'>".$row["ngongu"]." (".$row["time"].")</i> <br>";
                                                echo"<h3 style='margin-top:20px;margin-left:30px'>".$row["noidung"]."</h3> <br>";
                                                echo'<div style="display: flex;border:1px solid black;width: 90% ; 
                                                
                                                    "><image style="max-width: 100%;  /* Để đảm bảo hình ảnh không vượt quá kích thước của màn hình */
                                                    max-height: 90%;" src="'.$row["file"].'"></image></div> <br>' ;
                                                ?>
                                               <div class="container w-75">
                                                <hr>
                                            
                                                <div class='row d-flex justify-content-center align-content-center'>
                                                    <div class="col-4">
                                                        <button type="button" class="btn btn-default w-100"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACR0lEQVR4nO2ZO2sUURiGH2MUoigq+A+8hKAoKFgpdjaCkiJlSitFRby0iqCtElAINl5A8B+4q40xqCCEoCg2lvECgmwKo7KvHDyBZXJ2Mmd2duZbmBce2GLn2/dhrnsG6tSpU6eO5Qh2Cy4LmoIPgkXBkmBB8FxwVbAvYt5+wTW/7YKftehnNwSXBLuKFDgoeCZQRl4IjqTMOyqYiZjXFBzoRWCdYErQjvjRZdw2dwUjHfNGBNM5ZsnPuy0YjpXY6ne5emTWz9omeFXAvKZgS8yeKEJimZdeqKh5zUx7xh9OMs6tLCd2nnOibNqpF4DIq1PVNLpJjBoop0hW3mcEVwwUUyQXQyINA8UUydOQyCcDxRTJx5BIy0AxRdIKiSwZKKZIfoVEvhsopki+hkTmDRRTJHMhkccGiimSRyGRCwaKKZJzIZE9BoopktEVIl7mnYFyysh8UMKLnDVQUBk5kyay0V3SDJTUKnwTbOoq4mXOGyiqVTidKuFFhgVvDZRVF+YyL0II9vo1Jhmj5a6umSQ6ZMaN/e1tCyaiJDpkbhgQkOd6Lgkvslbw0IDEfcFQbhEvMyS4V6HEdM8SCZk7FUhMCdYUIpEQOiX4U4LAX7fyX7hAQuaY4EcfJX4KjvdVokNmp+BNHyReC3aUIpF4AnAvfn4XIOAO15uC9aVKJIQO9biU9FlwGAsRbHAr5DnvD+lPsVVEcFLwJYOA+84JLEf/31A9SJF4ItjOoEQwmXiCdp8nGcQIxgTvPWMMcgSbHVX3qEPJ+QeyOJ3W5c13TQAAAABJRU5ErkJggg=="> Like </button>
                                                    </div>
                                                    <div class="col-4">
                                                        <button type="button" class="btn btn-default w-100"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50">
                                                        <path d="M 25 4.0625 C 12.414063 4.0625 2.0625 12.925781 2.0625 24 C 2.0625 30.425781 5.625 36.09375 11 39.71875 C 10.992188 39.933594 11 40.265625 10.71875 41.3125 C 10.371094 42.605469 9.683594 44.4375 8.25 46.46875 L 7.21875 47.90625 L 9 47.9375 C 15.175781 47.964844 18.753906 43.90625 19.3125 43.25 C 21.136719 43.65625 23.035156 43.9375 25 43.9375 C 37.582031 43.9375 47.9375 35.074219 47.9375 24 C 47.9375 12.925781 37.582031 4.0625 25 4.0625 Z M 25 5.9375 C 36.714844 5.9375 46.0625 14.089844 46.0625 24 C 46.0625 33.910156 36.714844 42.0625 25 42.0625 C 22.996094 42.0625 21.050781 41.820313 19.21875 41.375 L 18.65625 41.25 L 18.28125 41.71875 C 18.28125 41.71875 15.390625 44.976563 10.78125 45.75 C 11.613281 44.257813 12.246094 42.871094 12.53125 41.8125 C 12.929688 40.332031 12.9375 39.3125 12.9375 39.3125 L 12.9375 38.8125 L 12.5 38.53125 C 7.273438 35.21875 3.9375 29.941406 3.9375 24 C 3.9375 14.089844 13.28125 5.9375 25 5.9375 Z"></path>
                                                        </svg> Bình Luận </button>
                                                    </div>
                                                    <div class="col-4">
                                                        <form action="CNxau.php" method="POST">
                                                            <input type="hidden" value='<?php echo $row['email']; ?>' name='email' id='email'>
                                                            <input type="hidden" value='<?php echo $row['repost']; ?>' name='repost' id='repost'>
                                                            <button type="submit" class="btn btn-default w-100"><img width="48" height="48" src="https://img.icons8.com/color/48/general-warning-sign.png" alt="general-warning-sign"/> Báo Xấu </button>
                                                        </form>
                                                    </div>
                                                </div>
                                                </div>
                                                <?php
                                                echo"<br> <hr>";
                                                echo "</div>";
                                            }
                                         ?> 
                                    </div>
                                </div>
                    </div>
                    
                    <div class="chu col-lg-2 position-sticky">
                    <?php
                         require 'menu/loitat.php';
                        ?>
                    </div>
                </div>
                <!-- <div class="row"> -->
                    
                <!-- </div> -->
            </section>
            <footer style="color: aliceblue;background-color: #2c3e50;">
                <?php
                include('D:/xampp/htdocs/DoAn/menu/footer.php');
                ?>
            </footer>
        </div>
    </body>
    <script>
        const openPopupButton = document.getElementById("open-popup-button");
        const closePopupButton = document.getElementById("close-popup-button");
        const popup = document.getElementById("popup");
        const overlay = document.getElementById("overlay");
    
        openPopupButton.addEventListener("click", function() {
            popup.style.display = "block";
            overlay.style.display = "block";
        });
    
        closePopupButton.addEventListener("click", function() {
            popup.style.display = "none";
            overlay.style.display = "none";
        });
    </script>
    </html> -->
    