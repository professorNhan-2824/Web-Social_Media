<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra năm nhuận trong C++</title>
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
                <b style="font-size: 55px;">Kiểm tra năm nhuận trong C++</b>
                <div style="height: 20px;"></div>
                <hr>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    <strong>Trong bài tập này chúng ta sẽ thực hiện chương trình để kiểm tra năm nhuận trong C++. Đây là một bài tập khá phổ biến khi bắt đầu học các ngôn ngữ lập trình, vì đây là một bài tập căn bản.</strong>
                </p>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    Ở đây chúng ta sẽ viết một chương trình C++ để kiểm tra xem năm người dùng nhập vào có phải là năm nhuận hay không.
                </p>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    Trước khi xem chương trình, hãy xem cách xác định một năm có phải là năm nhuận hay không.
                </p>
                <ol style="padding-left: 100px;">
                    <li>Năm nhuận là năm chia hết cho 400.</li>
                    <li>Năm nhuận là năm chia hết cho 4 nhưng không chia hết cho 100.</li>
                </ol>

                <!-- <div style="height: 20px;"></div> -->
                <div style="height: 20px;"></div>
                <div style="background-color: rgb(214, 209, 209);">
                    <p style="padding-left: 10px;">MỤC LỤC</p>
                    <ul id="menu-bai1">
                        <li><a href="#div-bai1-1">Ví dụ: Chương trình để kiểm tra năm nhuận trong C++.</a></li>
                    </ul>
                </div>
                <div style="height: 50px;"></div>
                <!-- Phần 1 bài 1 -->
               <div>
                    <div id="div-bai1-1" style="background-color:  #0b7ae9;"><h1 style="color: white;padding:10px;">Ví dụ: Chương trình để kiểm tra năm nhuận trong C++.</h1></div>
                    <!-- <div style="height: 20px;"></div> -->
                    <div style="height: 20px;"></div>
                    <div>
                        <div style="justify-content: center; display: flex;">
                            <textarea name="" id="" cols="75" rows="24" style="background-color: #222f3c; color: white; font-size: 20px;padding-left: 10px;padding-top: 15px;">
#include &lt;iostream&gt;
using namespace std;
int main()
{
        int y;
    cout&lt;&lt;"Nhập vào năm bạn cần kiểm tra: ";
    cin&gt;&gt;y;
    if(y % 4 == 0)
    {
        if( y % 100 == 0)
        {
            if ( y % 400 == 0)
                cout&lt;&lt;y&lt;&lt;" là năm nhuận";
            else
                cout&lt;&lt;y&lt;&lt;" không phải là năm nhuận";
        }
        else
            cout&lt;&lt;y&lt;&lt;" là năm nhuận";
    }
    else
        cout&lt;&lt;y&lt;&lt;" không phải là năm nhuận";
    cout&lt;&lt;"\n-----------------------------------\n";
    cout&lt;&lt;"Chương trình này được đăng tại Freetuts.net";
}                           </textarea>
                        </div>
                        
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">
                            <strong>Kết quả 1:</strong>
                        </p>
                        <div style="justify-content: center; display: flex;">
                            <img class="w-100" src="imageBai_5_TH/kiem-tra-nam-nhuan.jfif" alt="">
                        </div>
                        
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">
                            <strong>Kết quả 2:</strong>
                        </p>
                        <div style="justify-content: center; display: flex;">
                            <img class="w-100" src="imageBai_5_TH/kiem-tra-nam-nhuan1.jfif" alt="">
                        </div>
                        
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">
                            Như vậy là chúng ta đã thực hiện xong chương trình kiểm tra năm nhuận trong C++. Chúc các bạn thực hiện thành công!!!
                        </p>
                    </div>
               </div>
                <div style="height: 20px;"></div>
                <hr>
                <div style="height: 50px;"></div>
                <div style="float: left;width: 100%;display: flex;">
                    <p id="bt" ><a href="bai4(TH).php">⇦ Bài trước </a></p>
                    <p id="bs"><a href="bai6(TH).php">Bài tiếp theo ⇨</a></p>
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