<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuyển chữ thường thành chữ hoa trong C++</title>
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
                <b style="font-size: 55px;">Chuyển chữ thường thành chữ hoa trong C++</b>
                <div style="height: 20px;"></div>
                <hr>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    <strong>Trong bài tập này chúng ta sẽ thực hiện chương trình C++ để chuyển đổi chữ thường thành chữ hoa. Đây là một bài tập thường gặp khi bắt đầu học các ngôn ngữ lập trình, vì nó là bài tập căn bản để luyện tập.</strong>
                </p>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    Trong chương trình sau, người dùng sẽ được yêu cầu nhập Chuỗi chữ thường và chương trình sẽ chuyển đổi nó thành Chuỗi chữ hoa.
                </p>
                <div style="height: 20px;"></div>

                <!-- <div style="height: 20px;"></div> -->
                <div style="height: 20px;"></div>
                <div style="background-color: rgb(214, 209, 209);">
                    <p style="padding-left: 10px;">MỤC LỤC</p>
                    <ul id="menu-bai1">
                        <li><a href="#div-bai1-1">Ví dụ: Chương trình C++ để chuyển đổi chữ thường thành chữ hoa.</a></li>
                    </ul>
                </div>
                <div style="height: 50px;"></div>
                <!-- Phần 1 bài 1 -->
               <div>
                    <div id="div-bai1-1" style="background-color:  #0b7ae9;"><h1 style="color: white;padding:10px;">Ví dụ: Chương trình C++ để chuyển đổi chữ thường thành chữ hoa.</h1></div>
                    <!-- <div style="height: 20px;"></div> -->
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Logic theo sau trong chương trình:
                    </p>
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Tất cả các ký tự chữ thường (a đến z) có các giá trị ASCII nằm trong khoảng từ 97 đến 122 và các ký tự chữ hoa tương ứng (A đến Z) có giá trị ASCII thấp hơn 32. Ví dụ, ’một người có giá trị ASCII 97 và’ Một người có giá trị ASCII 65 (97-32). Áp dụng tương tự cho các bảng chữ cái khác. Dựa trên logic này, mình đã viết chương trình C dưới đây để chuyển đổi.
                    </p>
                    <div>
                        <div style="justify-content: center; display: flex;">
                            <textarea name="" id="" cols="75" rows="16" style="background-color: #222f3c; color: white; font-size: 20px;padding-left: 10px;padding-top: 15px;">
#include &lt;iostream&gt;
#include&lt;string.h&gt;
using namespace std;
int main(){
char str[25];
int i;
cout&lt;&lt;"Nhập vào một chuỗi: ";
cin&gt;&gt;str;
for(i=0;i&lt;=strlen(str);i++){
    if(str[i]&gt;=97&amp;&amp;str[i]&lt;=122)
        str[i]=str[i]-32;
}
cout&lt;&lt;"Chuỗi sau khi được chuyển thành chữ hoa là "&lt;&lt;str;
cout&lt;&lt;"\n------------------------------\n";
cout&lt;&lt;"Chương trình này được đăng tại Freetuts.net";
}                           </textarea>
                        </div>
                        
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;"><strong>Kết quả:</strong></p>
                        <img class="w-100" src="imageBai_8_TH/chuoi-chu-hoa.jfif" alt="">
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">Như vậy là chúng ta đã thực hiện xong chương trình C++ để chuyển đổi chữ thường thành chữ hoa. Chúc các bạn thực hiện thành công!!!</p>
                    </div>
               </div>
                <div style="height: 20px;"></div>
                <hr>
                <div style="height: 50px;"></div>
                <div style="float: left;width: 100%;display: flex;">
                    <p id="bt" ><a href="bai7(TH).php">⇦ Bài trước </a></p>
                    <p id="bs"><a href="bai9(TH).php">Bài tiếp theo ⇨</a></p>
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