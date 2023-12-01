<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chương trình Hello World trong C++</title>
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
                font-size: 25px;
            }
            textarea{
                width: 100%;
            }
        }
        @media only screen  and (max-width: 530px){
            .h1logo{
                font-size: 20px;
            }
            textarea{
                width: 100%;
            }
        }
        @media only screen  and (max-width: 640px){
            .h1logo{
                font-size: 20px;
            }
            textarea{
                width: 100%;
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
            textarea{
                width: 100%;
            }
        }
        @media only screen  and (max-width: 1200px){
            .chu{
                display: none;
            }
        }
        @media only screen  and (max-width: 1440px){
            textarea{
                width: 100%;
            }
        }
        @media only screen  and (min-width: 1440px){
            textarea{
                width: 100%;
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
                <b style="font-size: 55px;">Chương trình Hello World trong C++</b>
                <div style="height: 20px;"></div>
                <hr>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    <b>Trong bài tập này chúng ta sẽ thực hiện chương trình Hello World trong C++. Đây là một bài tập căn bản khi bắt đầu học ngôn ngữ lập trình nói chung và C++ nói riêng.</b>
                </p>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    Ở đây mình sẽ viết hai chương trình để thực hiện công việc hiển thị. Chương trình thứ nhất sẽ sử dụng chức năng Cout để in, chương trình thứ hai sẽ tạo một hàm in tên là hello() để in.
                </p>
                <div style="height: 20px;"></div>
               
                <div style="height: 20px;"></div>
                <div style="background-color: rgb(214, 209, 209);">
                    <p style="padding-left: 10px;">MỤC LỤC</p>
                    <ul id="menu-bai1">
                        <li><a href="#div-bai1-1">Ví dụ 1: Chương trình Hello World trong C++</a></li>
                        <li><a href="#div-bai1-2">Ví dụ 2: Chương trình Hello World trong C++ sử dụng hàm in.</a></li>
                    </ul>
                </div>
                <div style="height: 50px;"></div>
                <!-- Phần 1 bài 1 -->
               <div>
                    <div id="div-bai1-1" style="background-color:  #0b7ae9;"><h1 style="color: white;padding:10px;">Ví dụ 1: Chương trình Hello World trong C++</h1></div>
                    <div style="height: 20px;"></div>
                    <div>
                        <p style="font-size: 25px;">
                            <strong>#include < iostream ></strong>  - Câu lệnh này báo cho trình biên dịch đưa tệp iostream này vào chương trình. Đây là một tệp đầu ra đầu vào tiêu chuẩn có chứa các định nghĩa về các hàm đầu ra đầu vào phổ biến như cout, cin. Trong chương trình trên, chúng tôi đang sử dụng hàm cout ().                        </p>
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">
                            <strong>int main ()</strong> - Ở đây main () là tên hàm và int là kiểu trả về của hàm này. Mọi chương trình C++ phải có chức năng này vì việc thực hiện chương trình bắt đầu bằng hàm main (). Giá trị trả về 0 của hàm này thể hiện việc thực hiện chương trình thành công trong khi giá trị trả về 1 thể hiện việc thực hiện chương trình không thành công.                        </p>
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">
                            <strong>cout << "Hello World!\n";</strong> - Chức năng này hiển thị nội dung bên trong dâu ngoặc kép "" như ví dụ dưới đây.                        </p>
                        <div style="height: 20px;"></div> 
                        <p style="font-size: 25px;">
                            <strong>\n -</strong> sau khi in nội dung sẽ xuống dòng
                        </p>
                        <div style="height: 20px;"></div> 
                        <p style="font-size: 25px;">
                            <strong>*Lưu ý: </strong> Ở cuối mỗi dòng lệnh cần có dấu " ; " để kết thúc dòng.
                        </p>
                        <!--  -->
                        <!-- Cả đây nữa  -->
                        <!--  -->
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="8">
    #include &lt;iostream&gt;
    using namespace std;
    int main() {
        cout &lt;&lt; "Hello World!\n";
        cout&lt;&lt;"--------------------------\n";
        cout&lt;&lt;"This code is belong to LIEMLEE\n Hope you will learning from it";
    }
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <p style="font-size: 25px;">
                                <strong>Kết quả:</strong>
                            </p>
                        </div>
                        <div style="height: 20px;"></div>
                        <!-- Đã Sửa ở đây sửa lại ảnh nhớ lấy cả div, dm làm đưa cái tâm vào làm ăn như cc -->
                        <div style="justify-content: center;display: flex;">
                            <img class="w-100" src="imageBai_1_TH/HelloWorldpng.png" alt="">
                         </div>
                    </div>
               </div>
               <div style="height: 50px;"></div>
               <!-- Phần 2 bài 1 -->
               <div>
                    <div id="div-bai1-2" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">Ví dụ 2: Chương trình Hello World trong C++ sử dụng hàm in.</h1></div>
                    <div style="height: 20px;"></div>
                    <div>
                        <p style="font-size: 25px;">
                            Ở ví dụ này mình sẽ tạo một hàm in tên là hello(), khi người dùng nhập nội dung vào hàm này, chương trình sẽ nhận và hiển thị ra màn hình.
                        </p>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <textarea name="" id="" cols="80" rows="11" style="background-color: #222f3c; color: white; font-size: 20px;padding-left: 10px;padding-top: 15px;">
#include &lt;iostream&gt;
    using namespace std;
    void hello(){
        cout << "Hello World!\n";
    }
    int main() {
        hello();
    cout<<"--------------------------\n";
    cout<<"This code is belong to LIEMLEE\n Hope you will learning from it";
    }
                        </textarea>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <p style="font-size: 25px;">
                            <strong>Kết quả:</strong>
                        </p>
                    </div>
                    <div style="height: 20px;"></div>
                    <div style="justify-content: center;display: flex;">
                        <img class="w-100" src="imageBai_1_TH/HelloWorldpng.png" alt="">
                     </div>

                    <div style="height: 15px;"></div>
                    <p style="font-size: 25px;">
                        Như vậy là chúng ta đã thực hiện xong chương trình Hello World trong C++. Chúc các bạn thực hiện thành công!!!
                    </p>
               </div>
               <div style="height: 50px;"></div>
                <hr>
                <div style="height: 50px;"></div>
                <div style="float: left;width: 100%;display: flex;">
                    <p id="bt" ><a href="bai12(TH).php">⇦ Bài trước </a></p>
                    <p id="bs"><a href="bai2(TH).php">Bài tiếp theo ⇨</a></p>
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