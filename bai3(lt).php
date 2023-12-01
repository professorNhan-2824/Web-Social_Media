<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lệnh cin và cout trong C++</title>
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
                <b style="font-size: 55px;">Lệnh cin và cout trong C++</b>
                <div style="height: 20px;"></div>
                <hr>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    Trong bài học này chúng ta sẽ học lệnh cin và cout trong C++, đây là hai lệnh nằm trong thư viện <b>iostream.h</b>  và nó rất quan trọng khi học lập trình C++ cơ bản.                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    Thư viện nhập xuất trong C cũng như trong C++ có tên là <b>iostream.h</b> , vì vậy khi viết chương trình ta phải khai báo sử dụng thư viện này. Ngoài ra, với C++ thì bạn nên khai báo sử dụng <i>namespace std</i>  bằng cú pháp <u style="color: rgb(104, 104, 241);">using namespace std </u> để sau này goi đến các hàm đơn giản hơn.                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    Trước khi vào tìm hiểu thì ta sẽ viết một chương trình Hello World trước.              </p>
                <div style="height: 20px;"></div>
                <div>
                    <textarea style="font-size: 20px;padding-right: 50px;background-color:#222f3c;color: aliceblue;" name="code-1" id="code1" cols="70" rows="8">
 #include <iostream.h>
 using namespace std;
                             
 void main ()
 {   
    // Chuong Trinh Chinh
 }
                    </textarea>
                </div>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    Trong bài này chúng ta tìm hiểu hai lệnh thường sử dụng nhất để nhập xuất đó là cin và cout. Trước tiên ta tìm hiểu về <b>cout.</b>                 </p>
                <div style="height: 20px;"></div>
                <div style="background-color: rgb(214, 209, 209);">
                    <p style="padding-left: 10px;">MỤC LỤC</p>
                    <ul id="menu-bai1">
                        <li><a href="#div-bai1-1">1. cout trong C++</a></li>
                        <li><a href="#div-bai1-2">2. cin trong C++</a></li>
                        <li><a href="#div-bai1-3">3. Lời kết</a></li>
                    </ul>
                </div>
                <div style="height: 50px;"></div>
                <!-- Phần 1 bài 1 -->
               <div>
                    <div id="div-bai1-1" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">1. cout trong C++</h1></div>
                    
                    <div style="height: 20px;"></div>
                    <div>
                        <p style="font-size: 25px;">
                            Lệnh <b>cout</b> được dùng để xuất (hiển thị) một giá trị ra ngoài màn hình của các thiết bị như máy tính.                     </p>
                        <div style="height: 20px;"></div>
                        <i>
                            Bài viết này được đăng tại [DACS1 .net]                        </i>
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-top: 10px;padding-right: 50px;background-color:#222f3c;color: aliceblue;" name="code-1" id="code1" cols="70" rows="2  ">
 cout &#60;&#60; "Gia tri"&#60;&#60; endl;
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">
                            Như vậy, ta sử dụng toán tử <b>&#60;&#60;</b>  đằng sau <b>cout</b>  để ngăn cách giữa các giá trị. Nếu bạn muốn in nhiều giá trị thì sử dụng cú pháp sau:
                        </p>
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-top: 10px;padding-right: 50px;background-color:#222f3c;color: aliceblue;" name="code-1" id="code1" cols="70" rows="2  ">
 cout &#60;&#60; "Gia tri1"&#60;&#60; "Gia tri2"&#60;&#60; "Gia tri3";
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            Trong các chương trình căn bản thì ta thường phải xuống dòng để dễ nhìn hơn. Để xuống dòng thì ta sử dụng một trong hai cú pháp sau:                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-top: 10px;padding-right: 50px;background-color:#222f3c;color: aliceblue;" name="code-1" id="code1" cols="70" rows="3  ">
 cout &#60;&#60; endl; 
 cout &#60;&#60;"\n";
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">
                            Trong đó endl là cú pháp của C++, còn <b>"\n" </b> là cú pháp của C, vì C++ được phát triển dựa trên C nên nó vẫn sử dụng được hầu hết các cú pháp và thư viện trong C.                        
                        </p>
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-top: 10px;padding-right: 50px;background-color:#222f3c;color: aliceblue;" name="code-1" id="code1" cols="70" rows="11  ">
 #include <iostream.h>
 using namespace std;
                                     
 void main ()
 {   
    cout &#60;&#60;"Chao mung ban den voi freetuts.net";
    cout &#60;&#60; endl;
    cout &#60;&#60; "Ban dang hoc series C++ can ban";
    cout &#60;&#60; endl;
 }
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">
                            Bạn nhấn F5 để chạy và kết quả sẽ như sau:                        
                        </p>
                        <div style="height: 20px;"></div>
                        <div>
                            <img style="width: 100%;" src="./image_3/cout-trong-c++.png" alt="">
                        </div>
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">
                            Hoặc bạn có thể viết rút gọn như sau và kết quả tương đương.         
                        </p>
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-top: 10px;padding-right: 50px;background-color:#222f3c;color: aliceblue;" name="code-1" id="code1" cols="70" rows="9  ">
 #include <iostream.h>
 using namespace std;
                                     
 void main ()
 {   
    cout &#60;&#60; "Chao mung ban den voi freetuts.net" &#60;&#60; endl;
    cout &#60;&#60; "Ban dang hoc series C++ can ban" &#60;&#60; endl;
 }
                            </textarea>
                        </div>
                    </div>
                    
               </div>
               <div style="height: 50px;"></div>
               <!-- Phần 2 bài 1 -->
               <div>
                    <div id="div-bai1-2" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">2. cin trong C++</h1></div>
                    <div style="height: 20px;"></div>
                    <div>
                        <p style="font-size: 25px;">Ngược với <b>cout, cin</b> dùng để nhập dữ liệu từ bàn phím hoặc file. Thông thường khi bạn học C++ căn bản thì sẽ nhập dữ liệu từ bàn phím để giải các bài toán căn bản.</p>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <p style="font-size: 25px;">Để nhập dữ liệu từ bàn phím ta dùng cú pháp sau:</p>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <textarea style="font-size: 20px;padding-top: 10px;padding-right: 50px;background-color:#222f3c;color: aliceblue;" name="code-1" id="code1" cols="70" rows="2  ">
 cin >> variable;
                        </textarea>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <p style="font-size: 25px;">Trong đó <b>variable</b>  ta gọi là biến.</p>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <p style="font-size: 25px;">Trường hợp bạn muốn nhập nhiều giá trị cùng một lênh cin thì sử dụng cú pháp sau:</p>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="2">
cin >> variable1 >> variable2 >> variable3;
                        </textarea>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <p style="font-size: 25px;">Trong bài này có lẽ bạn chưa hiểu khái niệm biến là gì, nếu vậy thì bạn hãy xem sơ lược qua ví dụ rồi ở bài tiếp theo chúng ta sẽ tìm hiểu đến nó.</p>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <p style="font-size: 25px;"> <b>Ví dụ:</b> Viết chương trình cho người dùng nhập vào một chuỗi rồi in chuỗi đó ra màn hình.</p>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="12">
 #include <iostream.h>
 using namespace std;
                                 
 void main ()
 {   
    char Ten[200];
    cout &#60;&#60;"Nhap ten cua ban: ";
    cin >> Ten;
    cout &#60;&#60; endl;
    cout &#60;&#60; "Ten ban vua nhap la: " &#60;&#60; Ten &#60;&#60;endl;
 }
                        </textarea>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        Giả sử mình nhập chuỗi <i>"NguyễnVănCường-Freetuts.net"</i>  thì kết quả sẽ như sau:                 
                     </div>
                     <div style="height: 20px;"></div>
                    <div>
                        <img style="width: 100%;" src="./image_3/cout-trong-c++-1.png" alt="">
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        Nếu bạn nhập ký tự khoảng trắng thì nó sẽ bị thiếu một số từ đằng sau. Lý do tại sao thì trong các bài tiếp theo chúng ta sẽ tìm hiểu nhé                     </div>
               </div>
               <div style="height: 50px;"></div>
               <!-- Phần 3 bài 2 -->
                <div>
                    <div id="div-bai1-3" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">3. Lời kết</h1></div>
                    <div style="height: 20px;"></div>
                    <div>
                            Có một điều mà nhiều bạn nhầm lẫn đó là dấu <b>>></b>  và <b>&#60;&#60;</b> . Bạn phải nhớ rằng:  
                    </div>
                    <div style="height: 20px;"></div>
                    rong một chương trình C+ thì bắt buộc phải có hàm main và bạn không thể viết nội dung trong hàm main ở bên ngoài được vì như vậy sẽ bị báo lỗi ngay.                    
                    <div style="height: 20px;"></div>
                    <div>
                        <ul style="padding-left: 40px;">
                            <li>Dấu <b> >> </b> dùng cho lệnh cin</li>
                            <div style="height: 20px;"></div>
                            <li>Dấu <b>&#60;&#60;</b>   dùng cho lệnh cout</li>
                            <div style="height: 20px;"></div>
                        </ul>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        Như vậy mình đã giới thiệu sơ lược cách sư dụng lệnh <b>cin và cout trong C++</b> , đây là bài đầu tiên để bạn làm quen với ngôn ngữ C++ nên nếu bạn vẫn còn bở ngỡ thì ở các bài sau chúng ta tiếp tục chiến đấu để bạn làm quen dần. Bài tiếp theo chúng ta tìm hiểu về biến và khai báo biến.                    </div>
                <div style="height: 50px;"></div>
                <div style="float: left;width: 100%;display: flex;">
                    <p style="width: 80%;"><a href="./bai2(lt).php">⇦ Bài trước </a></p>
                    <p style="width: 20%;"><a href="./bai4(lt).php">Bài tiếp theo ⇨</a></p>
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