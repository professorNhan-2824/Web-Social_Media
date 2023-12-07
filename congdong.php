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
                .anhbinhluan{
                    width: 20;
                    
                }
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
            .popup1 {
                display: none; /* Ẩn lớp popup1 ban đầu */
            }
            .modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.7);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

    
    
    
        </style>
        <!-- <link rel="stylesheet" type="text/css" href="/congdong.css"> -->
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
                                                        <option value="C#">C#</option>
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
                                        $sql = "SELECT dangtin.IDTin, dangtin.noidung , dangtin.file, dangtin.time ,dangtin.ngongu, dangky.anh, dangky.taikhoan, dangtin.email FROM dangtin INNER JOIN dangky ON dangtin.email = dangky.email ORDER BY time DESC";
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
                                                    $sql1 = "SELECT COUNT(likepage.idtin) as luonglike FROM likepage INNER JOIN dangtin on likepage.idtin = dangtin.IDTin where dangtin.IDTin='".$row['IDTin']."'";
                                                    $sql3 = "SELECT COUNT(idbai) as ketqua  FROM binhluan where idbai ='".$row['IDTin']."'";
                                                   $ketqua1 = mysqli_query($conn, $sql1);
                                                   $ketqua2 = mysqli_query($conn, $sql3);
                                                   $row1=mysqli_fetch_assoc( $ketqua1);
                                                   $row2=mysqli_fetch_assoc( $ketqua2);
                                                   $dem1 = $row2['ketqua'];
                                                   $dem =$row1['luonglike'];
                                                   $tin = $row['IDTin'];
                                                //    $sql7 = "SELECT COUNT(email) as ketqua FROM likepage WHERE idtin ='$tin'  AND email = '".$_SESSION['email']."'";
                                                //    $ketqua7 = mysqli_query($conn, $sql7);
                                                //    $row7=mysqli_fetch_assoc( $ketqua7);
                                                //    if($row7['ketqua'] ===1){}
                                                   echo "<div class='col-4 d-flex'>";
                                                        echo "<div id='sllike' class='d-flex'>";
                                                            echo '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAABXUlEQVR4nO2UTyuEURTGf5qFxMZGJEmxkGGFKFZCsuUjsPEF7NU0+QLMhK2yUmzFR7CxYqNBNjb+Z8ro1DN143i9875jxVOnbu/znOfc995zD/wjAXqAAlACysAVsAX0Bpo+YFtcWdpN5UZiFngAKk68AUvAstae5h6Yidp51fwAGAGagaz+yL6/K2xdBAalMe1hUKTbK1AIzD2sBAVs7aFaZMMjSyKHI45wVfEdRuVx6ZGvIu2Xk6JFHi8eeSFyIEWBrDzOPXJHZC5Fgbw8rK2/YEykdVJnAvMu4FFNYHfhYk9FjoBMDeamPVbubpSwDbiR0F5mHDToTVjOLdD+U8Ik8KyEtRgFctJazkSsLQHTQdvmtUtv5+vBGJmnRiwGM6f46U4ywbGYZoGEmArm0z7QBDQGzfAEzJES48CdDE8UFX0zri7o13ypjuVrYIg6owM4Bc70qH4FrYo/hA9B9W0lCbw6NQAAAABJRU5ErkJggg==">';
                                                            // '. $dem.'
                                                            echo '<div id="like'.$tin.'">'. $dem.'</div>';
                                                        echo"</div>";
                                                       
                                                        echo "<div id='slcomment'>";
                                                        echo '<img  class="ps-3" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAXklEQVR4nO2UsQ2AMAwEbzwyFawK3gPTfIMgQhC7wie5snKvfGEoXtAAA3xwTK4La4DcNdtdwK7lKN7zVMAPKvIKEFXR94os+9g1LSLk0/NHz49mEkiVky0HWDLlYRxfuoOzN/WtOgAAAABJRU5ErkJggg==">';
                                                            echo $dem1;
                                                        echo"</div>";
                                                   echo "</div>";
                                                   
                                                   
                                                        ?>
                                               <div class="container w-75">
                                                <hr>
                                                <div class='row d-flex justify-content-center align-content-center'>
                                                <div class="col-4">
                                                    <input id='taikhoan<?php echo $tin; ?>' type="hidden" value="<?php echo $_SESSION['taikhoan']; ?>">
                                                    <input id='soluong<?php echo $tin; ?>' type="hidden" value="<?php echo $_SESSION['email']; ?>">
                                                    <input id='bai<?php echo $tin; ?>' type="hidden" value="<?php echo  $tin;?>">
                                                    <button type="submit" class="btn btn-default w-100 like-button" data-tin="<?php echo $tin; ?>">
                                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACR0lEQVR4nO2ZO2sUURiGH2MUoigq+A+8hKAoKFgpdjaCkiJlSitFRby0iqCtElAINl5A8B+4q40xqCCEoCg2lvECgmwKo7KvHDyBZXJ2Mmd2duZbmBce2GLn2/dhrnsG6tSpU6eO5Qh2Cy4LmoIPgkXBkmBB8FxwVbAvYt5+wTW/7YKftehnNwSXBLuKFDgoeCZQRl4IjqTMOyqYiZjXFBzoRWCdYErQjvjRZdw2dwUjHfNGBNM5ZsnPuy0YjpXY6ne5emTWz9omeFXAvKZgS8yeKEJimZdeqKh5zUx7xh9OMs6tLCd2nnOibNqpF4DIq1PVNLpJjBoop0hW3mcEVwwUUyQXQyINA8UUydOQyCcDxRTJx5BIy0AxRdIKiSwZKKZIfoVEvhsopki+hkTmDRRTJHMhkccGiimSRyGRCwaKKZJzIZE9BoopktEVIl7mnYFyysh8UMKLnDVQUBk5kyay0V3SDJTUKnwTbOoq4mXOGyiqVTidKuFFhgVvDZRVF+YyL0II9vo1Jhmj5a6umSQ6ZMaN/e1tCyaiJDpkbhgQkOd6Lgkvslbw0IDEfcFQbhEvMyS4V6HEdM8SCZk7FUhMCdYUIpEQOiX4U4LAX7fyX7hAQuaY4EcfJX4KjvdVokNmp+BNHyReC3aUIpF4AnAvfn4XIOAO15uC9aVKJIQO9biU9FlwGAsRbHAr5DnvD+lPsVVEcFLwJYOA+84JLEf/31A9SJF4ItjOoEQwmXiCdp8nGcQIxgTvPWMMcgSbHVX3qEPJ+QeyOJ3W5c13TQAAAABJRU5ErkJggg=="> Like
                                                    </button>
                                                </div>

                                                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                                                <script>
                                                            $(document).ready(function() {
                                                        var likedStatus = {};

                                                        $('.like-button').click(function() {
                                                            var tin = $(this).data('tin');

                                                            if (!likedStatus[tin]) {
                                                                var email = $('#soluong<?php echo $tin; ?>').val();

                                                                $.ajax({
                                                                    method: "POST",
                                                                    url: 'CNlike.php',
                                                                    data: {
                                                                        email: email,
                                                                        tin: tin
                                                                    },
                                                                    success: function(data) {
                                                                        $('#like<?php echo $tin; ?>').text(data);
                                                                        
                                                                        likedStatus[tin] = true;
                                                                        location.reload();
                                                                    },
                                                                    error: function(jqXHR, textStatus, errorThrown) {
                                                                        console.log('AJAX request failed: ' + textStatus, errorThrown);
                                                                    }
                                                                });
                                                            }
                                                        });
                                                    });
                                                        </script>



                                                    <div class="col-4">
                                                        <button type="button" id="binhluanButton<?php echo $tin; ?>" class="btn btn-default w-100">
                                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAADTUlEQVR4nO2a/WtOYRjHP4wxw2aSKMS8DaGIElLKH4DGzOYn5SWNyMuI+E2iRfwkWVqIhkXyMpGXKHkfm9cotlh+MbaRTXd9T53WeR7P9jznOfep51OnVtd9rvt7P+d+ue7rGqRIkSJZDAeWAPuAc8BT4B3QqMf8/QSoVJt8YBiWMBrYA7wA2iM8P/REsj8DdgO5QQxgDnAZ+OsSZH7tg0AhMB3I8XgvR7blwCF9Ned94+sSMCsZA8hVZ07n74FtwMg4fI4CSoEPLr9VcfqMSDdgPfBTHdVpPXRPYB/GVwHwWn00AesS6J++wBk5b9YX6IF/9AS2Ay3q8xSQGa9TM6fvy6H5pSaRPCYDb9T3PSC7q476AY/k6CaQRfLJBm5Jw0PNjk6Rpl3JOLgKZBAcfYBqabkobTGzQy+a7bE/wZMFPJemrbG+NAX4rUNsDPYwTrtma6xr9bpGvgb7KJG2K/9rOE8Na3zeYuPZml9J49xoDSvVyIQZtlIsjaejbXVmbXwF0rGXXoqmWyNtRPka6THs57i0LvYylsm4FPtZJq0HvIzOoZOH/UyU1mtexjoZbV4fDr2ltRYPGoBfhIdmoN7LUK/QOSy0AF+8DDX6XCZIC/XUqpbRxDShXux7ZSzCfgqjbb8LZTyK/ZRL6yIvY6Yu/N8VBti8Phq12M0t1pOKEASNK6TxZLRG04A2HY62hvG1Gsjs/zU+r4bmEmMbG6TN5BNiyvw16ZQfjz3kSVOLtt+YWKuRm+T0AIIn23Vgb+5sirTcldMK8rTPlAaj5UJX0rTprtPeZPoGEsyXuC0ND+JJnWYoKeakTE1JIFlMBd6q7zuJyHSaLe+wHJo7/Rb8JR3Y6UpiVyQiie2mQI5NcsIPzLlVpBKdU+la5VeRx5mriS7fmRTtJ/lvUw1yBD5HnEci2EtVTlsJzAAGe8Rsg2Qr1nSt6VB6qwJm4jNOyW2Bx5RwMjBeT7MO2Ej2x8Auv0ptHRkC/AE+dkjrjwVuSFCDynHmwDoB3AVe6gr9TXPf1FvO6u5jQvChJJkyiV3tmiL7le1rVz7WpnDGkwkSbKbHRgWVzgCccDrivcAW0nQYec1tUxKbT0go0Y3xs/5DwcQ6m0KSjUxBkPwDzwIGrMKmHgUAAAAASUVORK5CYII="> Bình Luận
                                                        </button>

                                                    
                                                        <div id="binhluanModal<?php echo $tin; ?>" class="modal">
                                                            <div class="modal-content w-75">
                                                                <div class="row">
                                                                    <div class="col-10 d-flex justify-content-center">
                                                                        <h3><i>BÌNH LUẬN</i></h3>
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <span class="close" id="closeBinhluan<?php echo $tin; ?>">&times;</span>
                                                                    </div>
                                                                </div>
                                                                <?PHP
                                                                INCLUDE('test2.php');
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <script>
                                                            const binhluanButton<?php echo $tin; ?> = document.getElementById("binhluanButton<?php echo $tin; ?>");
                                                    const binhluanModal<?php echo $tin; ?> = document.getElementById("binhluanModal<?php echo $tin; ?>");
                                                    const closeBinhluan<?php echo $tin; ?> = document.getElementById("closeBinhluan<?php echo $tin; ?>");

                                                    binhluanButton<?php echo $tin; ?>.addEventListener("click", function() {
                                                        binhluanModal<?php echo $tin; ?>.style.display = "block";
                                                    });

                                                    closeBinhluan<?php echo $tin; ?>.addEventListener("click", function() {
                                                        binhluanModal<?php echo $tin; ?>.style.display = "none";
                                                    });

                                                    window.addEventListener("click", function(event) {
                                                        if (event.target == binhluanModal<?php echo $tin; ?>) {
                                                            binhluanModal<?php echo $tin; ?>.style.display = "none";
                                                        }
                                                    });

                                                        </script>
                                                   
                                                    

                                                    
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
    
    </html> 
    