<!DOCTYPE html><!--
	Copyright (c) 2014-2023, CKSource Holding sp. z o.o. All rights reserved.
	This file is licensed under the terms of the MIT License (see LICENSE.md).
-->

<html lang="en" dir="ltr">
	<head>
		<title>CKEditor 5 BalloonEditor build</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel="icon" type="image/png" href="https://c.cksource.com/a/1/logos/ckeditor5.png"> -->
		<link rel="stylesheet" type="text/css" href="/DOAN/inclue_credictor/sample/styles.css">
	</head>
	<body >
	<section>
            <div class="row" style="clear: both;">
                <diV class="col-md-9 col-lg-10 col-xl-10 mt-3  d-flex justify-content-center">
                    <div class="formtaotin row d-flex justify-content-center w-50">
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
                                <input style="  border-radius: 15px;" class="ms-3 mt-2 taotin" id="open-popup-button" type="text" placeholder="Tạo Tin Mới">
                    
                                
                                <div id="overlay" class="overlay">
                                    <!-- thêm bình luận vào đây  -->
                                <div id="popup" class="popup col-6">
                                    <div class="row ">
                                        <div class="col-8 col-md-10 col-lg-11 tentin" ><p class="chutaobai ps-4 justify-content-center d-flex "><b>Tạo Tin Mới</b></p></div>
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
                                        <div class="col-6 col-sm-2 mt-2">
                                            <b><?php echo $_SESSION['taikhoan']?></b>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                          <!-- <textarea style="border: 1px solid white;font-size:20px" class="form-control" name="" id="" rows="3" placeholder="<?php echo $_SESSION['taikhoan'] ?> ơi bạn đang nghĩ gì thế">
                                          </textarea> -->
                                          <form id="submitForm" action="dangtin.php" method="POST">
                                                <!-- <div class="editor " style="width: 150px;">
                                                            
                                                </div> -->
                                                    <textarea style="border: 1px solid white;font-size:20px" class=" form-control" name="tin" id="tin" rows="3" placeholder="<?php echo $_SESSION['taikhoan'] ?> ơi bạn đang nghĩ gì thế"></textarea>                                                <div class="file-upload">
                                                    <label for="file-input">
                                                    <img src="./image/icons8-upload-image-60.png" alt="Choose a file">
                                                    </label>
                                                    <input type="file" id="file-input" accept="image/*" name="avatar1" style="display: none;">
                                        
                                                <div class="d-flex justify-content-center align-content-center fixed-bottom w-100">
                                                    <a  href="dangtin.php"><button type="submit" class="btn btn-success">Đăng Tin</button></a>  
                                                </div>
                                                <script>
                                                BalloonEditor
                                                    .create(document.querySelector('#editor'))
                                                    .catch(error => {
                                                        console.error(error);
                                                    });
                                                </script>
                                            </form>
                                        </div>
                                    </div>   
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
                        </div>
                    <?php
                    // $sonn = mysqli_connect('localhost','root','','db_web_da');
                    // $sql = "SELECT * FROM `dangtin`";
                    // $ketqua = mysqli_query($conn, $sql);
                    // while($row=mysqli_fetch_array( $ketqua)){
                    //     echo'<image style="width: 70px; /* Điều chỉnh kích thước theo ý muốn */
                    //                 height: 70px; /* Điều chỉnh kích thước theo ý muốn */
                    //                 border-radius: 50%; /* Làm cho ảnh trở thành hình tròn */
                    //                 object-fit: cove;padding-top:5px;" src='.$_SESSION['anh'].'> </image>';
                    //                 echo"<b>".$_SESSION['taikhoan']."</b> <br>";
                    //                 echo"<p style='margin-top:20px;margin-left:30px'>".$row["noidung"]."</p> <br>";
                    //                 echo'<div style="display: flex;
                    //                 justify-content: center; /* Canh giữa theo chiều ngang */
                    //                 align-items: center; /* Canh giữa theo chiều dọc */
                    //                 height: 100vh;"><image style="max-width: 100%; /* Để đảm bảo hình ảnh không vượt quá kích thước của màn hình */
                    //                 max-height: 100%;" src='.$row["file"].'></image></div> <br>' ;
                    //                 include('cacnut.php');
                    //                 echo"<br> <hr>";
                    // }
                    ?>
                <div style="height: 50px;"></div>
                </div>
                <div class="chu col-lg-2 position-sticky">
                <?php
                    include("/DoAn/menu/menugioithieu.php");
                   ?>
                </div>
                

        </section>
	</body>
</html>