<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khai báo thư viện và hàm main trong C++</title>
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
            /* background-color: rgb(83, 163, 255);
             */  background-color: aliceblue;
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
                <div class="col-0 col-md-3 col-lg-4 col-xl-2 ">
                    <?php
                     require 'menu/menubai.php';
                    ?>
                </div>
                <div class="col-md-9 col-lg-8 col-xl-8">
                    <div style="height: 20px;"></div>
                    <b style="font-size: 55px;">Khai báo thư viện và hàm main trong C++</b>
                    <div style="height: 20px;"></div>
                    <hr>
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Trong bài này mình sẽ hướng dẫn các bạn cách khai báo thư viện trong C++, qua đó bạn sẽ hiểu được khái niệm hàm main là gì, cũng như các bước để viết một chương trình Hello World bằng C++.                </p>
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Để bắt đầu tìm hiểu C++ thì bắt buộc bạn phải hiểu hai khái niệm thư viện và hàm main vì trong chương trình đầu tiên mà bạn học sẽ phải khai báo sử dụng thư viện và viết những đoạn code chính trong hàm main.                </p>
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Trước khi vào tìm hiểu thì ta sẽ viết một chương trình Hello World trước.              </p>
                    <div style="height: 20px;"></div>
                    <div style="background-color: rgb(214, 209, 209);">
                        <p style="padding-left: 10px;">MỤC LỤC</p>
                        <ul id="menu-bai1">
                            <li><a href="#div-bai1-1">1. Chương trình Hello World</a></li>
                            <li><a href="#div-bai1-2">2. Khai báo thư viện trong C++</a></li>
                            <li><a href="#div-bai1-3">3. Hàm main() là gì?</a></li>
                            <li><a href="#div-bai1-4">4. Lời kết</a></li>
                        </ul>
                    </div>
                    <div style="height: 50px;"></div>
                    <!-- Phần 1 bài 1 -->
                <div>
                        <div id="div-bai1-1" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">1. Chương trình Hello World</h1></div>
                        
                        <div style="height: 20px;"></div>
                        <div>
                            <p style="font-size: 25px;">
                                Đầu tiên bạn tạo một file HelloWorld.cpp sau đó nhập đoạn code sau:                        </p>
                            <div style="height: 20px;"></div>
                            <i>
                                Bài viết này được đăng tại [DACS1 .net]                        </i>
                            <div style="height: 20px;"></div>
                            <div>
                                <textarea style="font-size: 20px;padding-right: 50px;background-color:#222f3c;color: aliceblue;" name="code-1" id="code1" cols="70" rows="8">
    #include <iostream.h>

    void main()
    {
        cout &#60;&#60; "Hello World!"&#60;&#60; endl;
        }
                                </textarea>
                            </div>
                            <div style="height: 20px;"></div>
                            <p style="font-size: 25px;">
                                Sau đó bạn nhấn F5 thì thì chương trình sẽ được chạy và bạn sẽ thấy kết quả như hình dưới đây:
                            </p>
                            <div style="height: 20px;"></div>
                            <div>
                                <img style="width: 100%;" src="./image_2.html/chuong-trinh-hello-world-c++.png" alt="">
                            </div>
                            <div style="height: 20px;"></div>
                            <div>
                                Như vậy đoạn code trên sẽ in ra màn hình dòng chữ Hello World!. Và trong đoạn code trên thì dòng đầu tiên  <b style="background-color: rgb(187, 186, 186);">#include &#60; iostream.h&#62;</b>  ta gọi là khai báo sử dụng <b>thư viện</b>  và các dòng còn lại phía dưới ta gọi là <b>hàm main.</b> 
                            </div>
                        </div>
                </div>
                <div style="height: 50px;"></div>
                <!-- Phần 2 bài 1 -->
                <div>
                        <div id="div-bai1-2" style="background-color:#0b7ae9;"><h1 style="color: white;padding:10px;">2. Khai báo thư viện trong C++</h1></div>
                        <div style="height: 20px;"></div>
                        <div>
                            <p style="font-size: 25px;">Khi chúng ta lập trình một phần mềm hoặc một chương trình dù nhỏ hay lớn thì đều phải thao tác với các thiết bị của máy tính như bàn phím, chuột, màn hình ... để nhận dữ liệu nhập vào và in kết quả trả về.</p>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <p style="font-size: 25px;">Vấn đề đặt ra là để thao tác được với các thiết bị đó thì chúng ta sẽ phải lập trình thì máy tính mới giao tiếp được, nhưng công việc đó không hề đơn giản và mất thời gian. Vì vậy người ta đã viết sẵn ra các thư viện để khi muốn sử dụng thì chỉ cần khai báo.</p>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <p style="font-size: 25px;">Thư viện trong lập trình là một khái niệm mà mọi người sẽ bắt gặp rất nhiều ở hầu hết các ngôn ngữ lập trình. Ta có thể định nghĩa nôm na như sau:</p>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color: rgb(239, 233, 233);" name="" id="" cols="73" rows="8">
    Thư viện trong lập trình là nơi cung cấp sẵn cho chúng ta những hàm những phương thức có thể sử dụng được ở nhiều chương trình giúp rút ngắn thời gian lập trình lại. Hiện nay hầu hết các trình soạn thảo C++ luôn cung cấp đầy đủ các thư viện cần thiết giúp lập trình viên có thể khai thác được một cách dễ dàng. Các thư viện luôn được tích hợp sẵn trong các trình soạn thảo code nhưng khi chúng ta bắt đầu viết code vẫn phải có thao tác đó là khai báo những thư viện nào cần cho chúng ta khi code.
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <p style="font-size: 25px;">Để khai báo sử dụng thư viện trong C++ thì ta sử dụng cú pháp sau:</p>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="2">
    #include &#60;Tên thư viện&#62;
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <p style="font-size: 25px;">Từ khoá <b>#include</b> chỉ cho trình biên dịch biết rằng chúng ta cần sử dụng thư viện được khai báo và nó sẽ tự động thêm vào cho chúng ta.</p>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <p style="font-size: 25px;">Tôi xin giới thiệu một số thư viện thường gặp trong lập trình C++:</p>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <ul style="padding-left: 40px;">
                                <li><b>iostream.h</b>  ( thư viện này chứa hàm xuất nhập cout và cin)</li>
                                <div style="height: 20px;"></div>
                                <li><b>Tstdio.h</b> ( nó chứa hàm scanf, printf...)</li>
                                <div style="height: 20px;"></div>
                                <li><b>conio.h</b>  ( nó chứa hàm clrscr, getch...)</li>
                                <div style="height: 20px;"></div>
                                <li><b>math.h </b> ( nó chứa hàm toán học như sqrt, abs, pow)</li>
                                <div style="height: 20px;"></div>
                                <li><b>string.h </b>  (nó chứa các hàm về chuỗi )</li>
                            </ul>
                        </div>
                        <div style="height: 20px;"></div>
                        
                        <div>
                            Đối với một chương C++ trình nhập xuất căn bản thì bắt buộc ta phải sử dụng thư viện <b>iostream.h. </b>                   </div>
                </div>
                <div style="height: 50px;"></div>
                <!-- Phần 3 bài 1 -->
                <div>
                        <div id="div-bai1-3" style="background-color:#0b7ae9;"><h1 style="color: white;padding:10px;">3. Hàm main() là gì?</h1></div>
                        <div style="height: 20px;"></div>
                        <div>
                            <p style="font-size: 25px;">
                                Sau khi các bạn đã hiểu thế nào là thư viện và cách khai báo sử dụng một thư viện như thế nào thì chúng ta sẽ bắt đầu vào phần tiếp theo cần tìm hiểu đó là <b>hàm main(). </b>                       </p>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <p style="font-size: 25px;">
                                Theo tiếng Anh main dịch ra có nghĩa là chính, quan trọng, vậy trong C++ nó cũng có ý nghĩa như tên gọi đó. Trong lập trình thì trình biên dịch sẽ xử lý code từ trên xuống dưới và từ trái qua phải. Nhưng với hàm main thì hơi đặc biệt chút, hàm main là nơi chứa những đoạn code sẽ được chạy đầu tiên, nghĩa là khi biên dịch chương trình thì nội dung trong <b>hàm main</b>  sẽ được chạy đầu tiên mà không quan trọng vị trí của nó trong file.                        </p>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <p style="font-size: 25px;">
                                <b>Ví dụ:</b> Viết chương trình in ra màn hình dòng chữ "Hello C++.net".                        </p>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-right: 50px;background-color:#222f3c;color: aliceblue;" name="code-1" id="code1" cols="70" rows="8">
    #include <iostream.h>

    void main()
    {
    cout &#60;&#60; "Hello C++.net !"&#60;&#60; endl;
    }
                            </textarea>
                        </div>
                        <div>
                            <p style="font-size: 25px;">
                                Ở ví dụ này mình có sử dụng hàm xuất <b>cout</b> , hàm này sẽ in ra màn hình một dòng chữ nào đó. Chúng ta sẽ tìm hiểu nó ở các bài tiếp theo.                    </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <p style="font-size: 25px;">
                                Trong một chương trình C+ thì bắt buộc phải có hàm main và bạn không thể viết nội dung trong hàm main ở bên ngoài được vì như vậy sẽ bị báo lỗi ngay.                    <div style="height: 20px;"></div>
                </div>
                <div style="height: 50px;"></div>
                <!-- Phần 4 bài 2 -->
                    <div>
                        <div id="div-bai1-4" style="background-color:#0b7ae9;"><h1 style="color: white;padding:10px;">4. Lời kết</h1></div>
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">
                            Như vậy là mình đã giới thiệu xong khái niệm về thư viện và hàm main() trong lập trình C++. Bạn phải chắc chắc chắn rằng hiểu những gì mình đã trình bày ở trên để có thể học bài tiếp theo. Bài tiêp theo mình sẽ giới thiệu hai hàm thường sử dụng đó là hàm  <b>cin</b> và <b>cout.</b> 
                        </p>
                        <div style="height: 20px;"></div>
                    </div>
                    <div style="height: 20px;"></div>
                    <hr>
                    <div style="height: 50px;"></div>
                    <div style="float: left;width: 100%;display: flex;">
                        <p style="width: 80%;"><a href="./bai1(lt).php">⇦ Bài trước </a></p>
                        <p style="width: 20%;"><a href="./bai3(lt).php">Bài tiếp theo ⇨</a></p>
                    </div>
                <div style="height: 50px;"></div>
                </div>
                </div>
                <div class="chu col-lg-2 col-xl-2">
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