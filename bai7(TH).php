<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sắp xếp chuỗi theo Alphabet trong C++</title>
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
                <b style="font-size: 55px;">Sắp xếp chuỗi theo Alphabet trong C++</b>
                <div style="height: 20px;"></div>
                <hr>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    <strong>Trong bài tập này chúng ta sẽ thực hiện chương trình C++ sắp xếp các chuỗi theo thứ tự Alphabet. Đây là bài tập khá đơn giản giúp các bạn thực hành với các vòng lặp basic.</strong>
                </p>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    Trong chương trình sau, người dùng sẽ được yêu cầu nhập một bộ gồm các chuỗi và chương trình sẽ sắp xếp và hiển thị chúng theo thứ tự bảng chữ cái tăng dần.
                </p>
                <div style="height: 20px;"></div>

                <!-- <div style="height: 20px;"></div> -->
                <div style="height: 20px;"></div>
                <div style="background-color: rgb(214, 209, 209);">
                    <p style="padding-left: 10px;">MỤC LỤC</p>
                    <ul id="menu-bai1">
                        <li><a href="#div-bai1-1">Ví dụ: Chương trình C++ sắp xếp các chuỗi theo thứ tự Alphabet.</a></li>
                    </ul>
                </div>
                <div style="height: 50px;"></div>
                <!-- Phần 1 bài 1 -->
               <div>
                    <div id="div-bai1-1" style="background-color:  #0b7ae9;"><h1 style="color: white;padding:10px;">Ví dụ: Chương trình C++ sắp xếp các chuỗi theo thứ tự Alphabet.</h1></div>
                    <!-- <div style="height: 20px;"></div> -->
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Ở ví dụ này chúng ta cần có một mảng để chứa các chuỗi người dùng nhập vào, sau đó sẽ yêu cầu người dùng nhập vào số lượng các chuỗi và tạo một vòng lặp for để nhập nội dung cho từng chuỗi.
                    </p>
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Sau khi đã có được dữ liệu từ người dùng thì tạo thêm một vòng lặp for để sắp xếp dữ liệu người dùng vừa nhập rồi hiển thị ra màn hình.
                    </p>
                    <div>
                        <div style="justify-content: center; display: flex;">
                            <textarea name="" id="" cols="75" rows="26" style="background-color: #222f3c; color: white; font-size: 20px;padding-left: 10px;padding-top: 15px;">
#include &lt;iostream&gt;
#include&lt;string.h&gt;
using namespace std;
int main(){
    int i,j,count;
    char str[25][25],temp[25];
    puts("bạn muốn nhập bao nhiêu chuỗi: ");
    cin&gt;&gt;count;

    puts("Nhập vào chuỗi đầu tiên: ");
    for(i=0;i&lt;count;i++)
        cin&gt;&gt;(str[i]);
    for(i=0;i&lt;count;i++)
        for(j=i+1;j&lt;count;j++){
            if(strcmp(str[i],str[j])&gt;0){
            strcpy(temp,str[i]);
            strcpy(str[i],str[j]);
            strcpy(str[j],temp);
            }
        }
    printf("Các chuỗi sau khi sắp xếp là:\n");
    for(i=0;i&lt;=count;i++)
        puts(str[i]);
    cout&lt;&lt;"\n------------------------------\n";
    cout&lt;&lt;"Chương trình này được đăng tại Freetuts.net";
}                           </textarea>
                        </div>
                        
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;"><strong>Kết quả:</strong></p>
                        <img src="imageBai_7_TH/sap-xep-chuoi.jfif" alt="" class="w-100">
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">Như vậy là chúng ta đã thực hiện xong chương trình C++ sắp xếp các chuỗi theo thứ tự Alphabet. Chúc các bạn thực hiện thành công!!!</p>
                    </div>
               </div>
                <div style="height: 20px;"></div>
                <hr>
                <div style="height: 50px;"></div>
                <div style="float: left;width: 100%;display: flex;">
                    <p id="bt" ><a href="bai6(TH).php">⇦ Bài trước </a></p>
                    <p id="bs"><a href="bai8(TH).php">Bài tiếp theo ⇨</a></p>
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