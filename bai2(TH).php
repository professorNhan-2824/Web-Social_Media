<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra số âm hay số dương trong C++</title>
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
                font-size: 35px;
        }
        #bs{
                width: 35%;
                font-size: 35px;
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
        @media only screen  and (max-width: 409px){
            .h1logo{
                font-size: 17px;
            }
        }
        /* màn hình cho mobile dưới 640px */
        @media only screen  and (max-width: 768px){
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
    </style>
 
    
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-5">
            <?php
            // require 'menu/menu.php';
            require 'menu/menu1.php';
        ?>
        </div>
        <div style="clear: both;"></div>
        <section class="mt-5">
            <div class="row" style="clear: both;">
                <div class="col-0 col-md-3 col-lg-4 col-xl-2">
                <?php
                     require 'menu/menubai.php';
                    ?>
                </div>
                <div class="col-md-9 col-lg-8 col-xl-8">
                    <div style="height: 20px;"></div>
                <b style="font-size: 55px;">Kiểm tra số âm hay số dương trong C++</b>
                <div style="height: 20px;"></div>
                <hr>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    <strong>Trong bài tập này chúng ta sẽ thực hiện chương trình kiểm tra số âm hay số dương trong C++. Đây là một dạng bài tập căn bản, giúp các bạn luyện tập về câu lệnh If, Else.</strong>
                </p>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    Số âm là các số < 0.
                    <br>
                    <br>
                    Số dương là các số > 0.
                    <div style="height: 20px;"></div>
                    Số 0 là một số đặt biệt, nó không phải là số âm cũng không phải là số dương.
                </p>
                <!-- <div style="height: 20px;"></div> -->
                <div style="height: 20px;"></div>
                <div style="background-color: rgb(214, 209, 209);">
                    <p style="padding-left: 10px;">MỤC LỤC</p>
                    <ul id="menu-bai1">
                        <li><a href="#div-bai1-1">Ví dụ: chương trình kiểm tra số âm hay số dương trong C++</a></li>
                    </ul>
                </div>
                <div style="height: 50px;"></div>
                <!-- Phần 1 bài 1 -->
               <div>
                    <div id="div-bai1-1" style="background-color:  #0b7ae9;"><h1 style="color: white;padding:10px;">Ví dụ: chương trình kiểm tra số âm hay số dương trong C++</h1></div>
                    <!-- <div style="height: 20px;"></div> -->
                    <div style="height: 20px;"></div>
                    <div>
                        <p style="font-size: 25px;">
                            Trong ví dụ này chúng ta sẽ nhận một số num từ người dùng, sau đó xét điều kiện cho nó:
                        </p>
                        <div style="height: 20px;"></div>
                        <div>
                            <ul style="padding-left: 40px;">
                                <li>Nếu num < 0 thì trả về đây là số âm.</li>
                                <!-- <div style="height: 20px;"></div> -->
                                <li>Nếu num < 0 thì trả về đây là số âm.</li>
                                <!-- <div style="height: 20px;"></div> -->
                                <li>Và cuối cùng nếu không phải hai trường hợp trên thì trả về số đó không phải là số âm cũng không phải là số dương.</li>
                            </ul>
                        </div>
                        <div style="height: 20px;"></div>

                        <div style="justify-content: center; display: flex;">
<textarea name="" id="" cols="75" rows="15" style="background-color: #222f3c; color: white; font-size: 20px;padding-left: 10px;padding-top: 15px;">
#include &lt;iostream&gt;
using namespace std;
int main() {
    int num;
    cout&lt;&lt;"Nhập vào số num: ";
    cin&gt;&gt;num;
    if (num &gt; 0)
        cout&lt;&lt;num&lt;&lt;" là số dương \n";
    else if (num &lt; 0)
        cout&lt;&lt; num&lt;&lt;" là số âm \n";
    else
        cout&lt;&lt;num&lt;&lt;" không phải là số âm cũng không phải là số dương \n";
    cout&lt;&lt;"---------------------- \n";
    cout&lt;&lt;"chương trình này được đăng tại Freetuts.net";
}</textarea>
                        </div>
                        
                    </div>
                    <div>
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">
                            <strong>Kết quả 1:</strong>
                        </p>
                        <div style="height: 20px;"></div>
                        <div style="justify-content: center; display: flex;">
                            <img class="w-100" src="imageBai_2_TH/kiem-tra-so-am-1.jfif" alt="">
                        </div>
                        
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">
                            <strong>Kết quả 2:</strong>
                        </p>
                        <div style="justify-content: center; display: flex;">
                            <img class="w-100" src="imageBai_2_TH/kiem-tra-so-am-2.jfif" alt="">
                        </div>
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">
                            <strong>Kết quả 3:</strong>
                        </p>
                        <div style="justify-content: center; display: flex;">
                            <img class="w-100" src="imageBai_2_TH/kiem-tra-so-am-3.jfif" alt="">
                        </div>

                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">
                            Như vậy là chúng ta đã thực hiện xong chương trình kiểm tra số âm hay số dương trong C++. Chúc các bạn thực hiện thành công!!!
                        </p>
                    </div>
               </div>
               <div style="height: 50px;"></div>
                <div style="height: 20px;"></div>
                <hr>
                <div style="height: 50px;"></div>
                <div style="float: left;width: 100%;display: flex;">
                    <p id="bt" ><a href="bai1(TH).php">⇦ Bài trước </a></p>
                    <p id="bs"><a href="bai3(TH).php">Bài tiếp theo ⇨</a></p>
                </div>
               <div style="height: 50px;"></div>
                </div>
                <div class="chu col-lg-2 position-sticky">
                <?php
                     require 'menu/menugioithieu.php';
                    ?>
                </div>
            </div>
        </section>
        <footer style="color: aliceblue;background-color: #2c3e50;">
            <?php
                     require 'menu/footer.php';
                    ?>
        </footer>
    </div>
</body>
</html>