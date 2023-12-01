<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm độ dài của chuỗi trong C++</title>
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
                <b style="font-size: 55px;">Tìm độ dài của chuỗi trong C++</b>
                <div style="height: 20px;"></div>
                <hr>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    <strong>Trong bài tập này chúng ta sẽ thực hiện chương trình để tìm độ dài của chuỗi trong C++. Qua bài này giúp các bạn biết thêm một hàm có sẵn được sử dụng rất phổ biến trong chuỗi là hàm strlen()</strong>
                </p>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    Trong chương trình C++ này chúng ta sẽ tại một chương trình yêu cầu người dùng nhập vào một chuỗi rồi thực hiện công việc đếm độ dài của chuỗi. Hãy cùng xem ví dụ dưới đây để có thể hiểu rõ hơn.
                </p>
                <div style="height: 20px;"></div>

                <!-- <div style="height: 20px;"></div> -->
                <div style="height: 20px;"></div>
                <div style="background-color: rgb(214, 209, 209);">
                    <p style="padding-left: 10px;">MỤC LỤC</p>
                    <ul id="menu-bai1">
                        <li><a href="#div-bai1-1">Ví dụ: Chương trình để tìm độ dài của chuỗi.</a></li>
                    </ul>
                </div>
                <div style="height: 50px;"></div>
                <!-- Phần 1 bài 1 -->
               <div>
                    <div id="div-bai1-1" style="background-color:  #0b7ae9;"><h1 style="color: white;padding:10px;">Ví dụ: Chương trình để tìm độ dài của chuỗi.</h1></div>
                    <!-- <div style="height: 20px;"></div> -->
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Trong ví dụ này chúng ta sử dụng hàm <b>strlen()</b> vậy nên cần import thư viện <b>include&lt;string.h&gt;</b> vào trước khi sử dụng nó.
                    </p>
                    <div>
                        <div style="justify-content: center; display: flex;">
                            <textarea name="" id="" cols="75" rows="19" style="background-color: #222f3c; color: white; font-size: 20px;padding-left: 10px;padding-top: 15px;">
#include &lt;iostream&gt;
#include &lt;string.h&gt;
using namespace std;
int main()
{
    // khai báo biến chứa độ dài của chuỗi
    int length;
    // tạo một mảng str gồm 100 phần tử
    char str[100],i;
    // yêu cầu người dùng nhập vào một chuỗi
    cout&lt;&lt;"Nhập vào một chuỗi: ";
    cin&gt;&gt;str;
    // sử dụng hàm strlen() để đếm ký tự trong chuỗi rồi gán cho biến length
    length = strlen(str);
    // hiển thị độ dài của chuỗi ra màn hình
    cout&lt;&lt;"Độ dài của chuỗi là: "&lt;&lt;length;
    cout&lt;&lt;"\n----------------------------------\n";
    cout&lt;&lt;"Chương trình này được đăng tại Freetuts.net";
}</textarea>
                        </div>
                        
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;"><strong>Giải thích code:</strong></p>
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">Đầu tiên chúng ta sẽ tạo một biến <strong>length </strong>để chứa độ dài của chuỗi, tạo một mảng <strong>str[]</strong> để chứa các phần tử trong chuỗi.</p>
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">Tiếp đến sẽ yêu cầu người dùng nhập vào chuỗi bằng cách sử dụng câu lệnh <strong>cout </strong>và <strong>cin.</strong></p>
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">Sử dụng hàm <strong>strlen()</strong> để đếm độ dài của chuỗi <strong>str[] </strong>rồi gán giá trị vừa đếm được vào biến <strong>length.</strong></p>
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">Cuối cùng hiển thị kết quả ra màn hình.</p>
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;"><strong>Kết quả:</strong></p>
                        <div style="height: 20px;"></div>
                        <div>
                            <img class="w-100" src="imageBai_6_TH/dem-chuoi.jfif" alt="">
                        </div>
                        
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">Như vậy là chúng ta đã thực hiện xong chương trình để tìm độ dài của một chuỗi. Chúc các bạn thực hiện thành công!!!</p>
                    </div>
               </div>
                <div style="height: 20px;"></div>
                <hr>
                <div style="height: 50px;"></div>
                <div style="float: left;width: 100%;display: flex;">
                    <p id="bt" ><a href="bai5(TH).php">⇦ Bài trước </a></p>
                    <p id="bs"><a href="bai7(TH).php">Bài tiếp theo ⇨</a></p>
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