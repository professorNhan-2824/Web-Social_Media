<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Các toán tử trong C++</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Liên kết tệp JavaScript của Bootstrap (tuỳ chọn) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
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
                <b style="font-size: 55px;">Các toán tử trong C++</b>
                <div style="height: 20px;"></div>
                <hr>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    Trong bài này mình sẽ giới thiệu một số toàn tử trong C++ thường dùng nhất như: Toán tử gán, toán tử toán học, toán tử so sánh, toán tử logic, và nhiều toán tử khác.                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    Toán tử đóng vai trò rất quan trọng trong lập trình, nó giúp chúng ta giải quyết các bài toán một cách nhuần nhuyễn và logic hơn. Bất kì một ứng dụng thực tế nào khi đưa vào lập trình đều phải sử dụng toán tử.                </p>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                   <b>Ví dụ:</b>  Khi viết chương trình tính tổng hai số thì ta phải sử dụng toán tử toán học (toán tử cộng).                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    Sau đây là danh sách các toán tử thường dùng nhất trong C++, bảng này vẫn chưa full nhưng về cơ bản thì đã đầy đủ cho bạn sử dụng trong quá trình luyện tư duy lập trình bằng C++ rồi đấy.                <div style="height: 20px;"></div>
                <div style="height: 20px;"></div>
                <div style="background-color: rgb(214, 209, 209);">
                    <p style="padding-left: 10px;">MỤC LỤC</p>
                    <ul id="menu-bai1">
                        <li><a href="#div-bai1-1">1. Toán tử toán học trong C++</a>
                            <li style="padding-left: 70px;"><a href="#div-bai1-2-1"> Sự khác nhau giữa ++x và x++ là gì?</a> </li>
                        </li>
                        <li><a href="#div-bai1-2">2. Toán tử gán trong C++</a></li>
                        <li><a href="#div-bai1-3">3. Toán tử so sánh trong C++</a></li>
                        <li><a href="#div-bai1-4">4. Toán tử logic trong C++</a></li>
                    </ul>
                </div>
                <div style="height: 50px;"></div>
                <!-- Phần 1 bài 1 -->
               <div>
                    <div id="div-bai1-1" style="background-color:  #0b7ae9;"><h1 style="color: white;padding:10px;">1. Toán tử toán học trong C++</h1></div>
                    <div style="height: 20px;"></div>
                    <div>
                        Toán tử toán học dùng để xử lý tính toán trong toán học như: Các phép toán cộng, trừ, nhân và chia,.. Hoặc những phép tính nâng cao hơn như chia lấy dư, chia lấy phần nguyên ...                    </div>
                    <div style="height: 20px;"></div>
                    <div style="height: 20px;"></div>
                    <div>
                        <i>Bảng sau đây là danh sách 7 toán tử toán học thường dùng nhất trong C++ (Giả sử x = 4, y = 2).</i> 
                     </div>
                    <div style="height: 20px;"></div>
                    <table border="1" cellpadding="1" cellspacing="1" style="width:100%;">
                        <thead>
                            <tr style="border: 1px solid rgb(6, 6, 6);">
                                <th style="border: 1px solid rgb(6, 6, 6);" scope="col">Toán tử</th>
                                <th style="border: 1px solid rgb(6, 6, 6);" scope="col">Ý nghĩa</th>
                                <th style="border: 1px solid rgb(6, 6, 6);" scope="col">Ví dụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="border: 1px solid rgb(6, 6, 6);">
                                <td style="border: 1px solid rgb(6, 6, 6);">+</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">Cộng hai số</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">x + y = 6</td>
                            </tr>
                            <tr style="border: 1px solid rgb(6, 6, 6);">
                                <td style="border: 1px solid rgb(6, 6, 6);">-</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">Trừ hai số</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">x - y = 2</td>
                            </tr>
                            <tr style="border: 1px solid rgb(6, 6, 6);">
                                <td style="border: 1px solid rgb(6, 6, 6);">*</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">Nhân hai số</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">x * y = 8</td>
                            </tr>
                            <tr style="border: 1px solid rgb(6, 6, 6);">
                                <td style="border: 1px solid rgb(6, 6, 6);">/</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">Chia hai số</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">x / y = 2</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(6, 6, 6);">%</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">Chia lấy dư</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">% y = 0</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(6, 6, 6);">++</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">Tăng lên một đơn vị</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">x++ = 5 / ++x = 5</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(6, 6, 6);">--</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">Giảm xuống một đơn vị</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">x-- = 4 / --x = 4</td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="height: 20px;"></div>
                    <div>
                        <b>Ví dụ:</b> Chạy lại demo các ví dụ ở bảng trên.
                     </div>
                     <div style="height: 20px;"></div>
                     <div>
                        <textarea class="w-100" style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="17">
    using namespace std;
    
    int main()
    {
        int x = 4, y = 2;
        cout << "x + y = " << x + y << endl;
        cout << "x - y = " << x - y << endl;
        cout << "x * y = " << x * y << endl;
        cout << "x / y = " << x / y << endl;
        cout << "x % y = " << x % y << endl;
        cout << "++x = " << ++x << endl;
        cout << "--x = " << --x << endl;
        
        return 1;
    }
                        </textarea>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        Kết quả:
                     </div>
                     <div style="height: 20px;"></div>
                    <div>
                        <img class="w-100" src="./image_7/toan-tu-toan-hoc.jpg" alt="">
                     </div>
                     <div style="height: 20px;"></div>
                     <div>
                        <h2 style="color: #0b7ae9;" id="div-bai1-2-1">Sự khác nhau giữa ++x và x++ là gì?</h2>
                     </div>
                     <div style="height: 20px;"></div>
                     <div>
                        Toán tử tăng ++ và giảm -- có hai cách dùng, thứ nhất là đặt trước toán hạng và thứ hai là đặt sau toán hạng.                     
                    </div>
                    <div style="height: 20px;"></div>
                     <div>
                        <ul>
                            <li><b>Nếu đặt sau: </b>Chương trình sẽ chạy hết dòng lệnh đó rồi mới tăng hoặc giảm giá trị.</li>
                            <li><b>Nếu đặt trước:</b> Chương trình sẽ tăng hoặc giảm rồi mới chạy dòng lệnh.</li>
                        </ul>
                    </div>
                    <div style="height: 20px;"></div>
                     <div>
                        Tức độ ưu tiên khi đặt trước sẽ cao hơn đặt sau.                    
                    </div>
                    <div style="height: 20px;"></div>
                     <div>
                        <b>Ví dụ:</b>  Phân biệt ++x và x++                    
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <textarea class="w-100 h-50" style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="17">
    #include <iostream>
    using namespace std;
    
    int main()
    {
        // Truong hop dat sau
        int x = 10;
        cout << x++ << endl; // in ra 10
        cout << x << endl; // in ra 11
        
        // Truong hop dat truoc
        x = 10;
        cout << ++x << endl; // in ra 11
        return 1;
    }
                        </textarea>
                    </div>
                    <div style="height: 20px;"></div>
                     <div>
                        Qua ví dụ này ta thấy đoạn code in ra <strong style="background-color: rgb(206, 204, 204);">x++</strong>  sẽ là 10, nhưng đoạn code in ra <strong style="background-color: rgb(206, 204, 204);">++x</strong>  lại là 11.                
                    </div>
               </div>
               <div style="height: 50px;"></div>
               <!-- Phần 2 bài 1 -->
               <div>
                    <div id="div-bai1-2" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">2. Toán tử gán trong C++</h1></div>
                    <div style="height: 20px;"></div>
                    <div>
                        Toán tử gán được dùng để gán giá trị vào một biến. Ta chỉ có một toán tử gán duy nhất đó là dấu bằng <strong style="background-color: rgb(206, 204, 204);">=</strong> . Tuy nhiên, khi kết hợp với những toán tử toán học thì sẽ tạo ra những phiên bản khác như bảng sau:                    <div style="height: 20px;"></div>
                    <div style="height: 20px;"></div>
                    <table border="1" cellpadding="1" cellspacing="1" style="width: 100%;">
                        <tbody>
                            <tr>
                                <td style="border: 1px solid rgb(6, 6, 6);"><strong>Toán tử</strong></td>
                                <td style="border: 1px solid rgb(6, 6, 6);"><strong>Ví dụ</strong></td>
                                <td style="border: 1px solid rgb(6, 6, 6);"><strong>Tương đương với</strong></td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(6, 6, 6);">=</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">x = 5</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">x = 5</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(6, 6, 6);">+=</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">x += 5</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">x = x + 5</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(6, 6, 6);">-=</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">x -= 5</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">x = x - 5</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(6, 6, 6);">/=</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">x /= 5</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">x = x / 5</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(6, 6, 6);">*=</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">x *= 5</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">x = x * 5</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(6, 6, 6);">%=</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">x %= 5</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">x = x % 5</td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="height: 20px;"></div>
                    <div>
                        <b>Ví dụ:</b>  Viết lại các ví dụ toán tử gán ở bảng trên.
                     </div>
                     <div style="height: 20px;"></div>
                    <div >
                        <textarea class="w-100" style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="24">
    #include <iostream>
    using namespace std;
    
    int main()
    {
        int x = 5;
        cout << "x += 5 => x = " << (x += 5) << endl;
    
        x = 5;
        cout << "x -= 5 => x = " << (x -= 5) << endl;  
        
        x = 5;
        cout << "x /= 5 => x = " << (x /= 5) << endl;
        
        x = 5;
        cout << "x *= 5 => x = " << (x *= 5) << endl;
        
        x = 5;
        cout << "x %= 5 => x = " << (x %= 5) << endl;
        
        return 1;
    }
                        </textarea>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        Kết quả:                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <img class="w-100" src="./image_7/toan-tu-gan.jpg" alt="">
                     </div>
                    </div>
               </div>
               <div style="height: 50px;"></div>
               <!-- Phần 3 bài 1 -->
               <div>
                    <div id="div-bai1-3" style="background-color:  #0b7ae9;"><h1 style="color: white;padding:10px;">3. Toán tử so sánh trong C++</h1></div>
                    <div style="height: 20px;"></div>
                    <div>
                        Toán tử so sánh dùng để so sánh hai biểu thức / toán hạng với nhau và trả về <b>true</b>  hoặc <b>false</b> . Đây là những toán tử rất quan trọng trong lập trình, nhất là khi sử dụng trong vòng lặp và các lệnh rẻ nhánh.
                    </div>
                    <div style="height: 20px;"></div>
                    <table border="1" cellpadding="1" cellspacing="1" style="width: 100%;">
                        <tbody>
                            <tr>
                                <td style="border: 1px solid rgb(6, 6, 6);"> <strong>Toán tử</strong></td>
                                <td style="border: 1px solid rgb(6, 6, 6);"><strong>Ví dụ</strong></td>
                                <td style="border: 1px solid rgb(6, 6, 6);"> <strong>Ý nghĩa</strong></td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(6, 6, 6);">==</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">x == y</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">Trả về <code>true</code> nếu x bằng y, ngược lại trả về <code>false</code></td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(6, 6, 6);">&gt;</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">x &gt; y</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">Trả về <code>true</code> nếu x lớn hơn y, ngược lại trả về <code>false</code></td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(6, 6, 6);">&lt;</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">x &lt; y</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">Trả về <code>true</code> nếu x bé hơn y, ngược lại trả về <code>false</code></td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(6, 6, 6);">&gt;=</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">x &gt;= y</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">Trả về <code>true</code> nếu x lớn hơn hoặc bằng y, ngược lại trả về <code>false</code></td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(6, 6, 6);">&lt;=</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">x &lt;= y</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">Trả về <code>true</code> nếu x bé hơn hoặc bằng y, ngược lại trả về <code>false</code></td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(6, 6, 6);">!=</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">x != y</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">Trả về <code>true</code> nếu x khác y, ngược lại trả về <code>false</code></td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="height: 20px;"></div>
                    <div>
                        Chúng ta sẽ thực hành toán tử so sánh nhiều hơn ở các bài nâng cao tiếp theo nhé.
                    </div>
               </div>
               <div style="height: 50px;"></div>
               <!-- Phần 4 bài 1 -->
               <div>
                    <div id="div-bai1-4" style="background-color:  #0b7ae9;"><h1 style="color: white;padding:10px;">4. Toán tử logic trong C++</h1></div>
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Để chứng minh là chương trình sẽ không biên dịch lệnh ghi chú thì bạn hãy xem ví dụ sau:                 
                    </p>
                    <div style="height: 20px;"></div>
                    <table border="1" cellpadding="1" cellspacing="1" style="width: 100%;">
                        <tbody>
                            <tr>
                                <td style="border: 1px solid rgb(6, 6, 6);"><strong>Toán tử</strong></td>
                                <td style="border: 1px solid rgb(6, 6, 6);"><strong>Ví dụ</strong></td>
                                <td style="border: 1px solid rgb(6, 6, 6);"><strong>Ý nghĩa</strong></td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(6, 6, 6);"> &amp;&amp;</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">A &amp;&amp; B</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">Trả về <code>true</code> nếu A và B đều bằng TRUE, ngược lại trả về <code>false</code></td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(6, 6, 6);">||</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">A || B</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">Trả về <code>true</code> nếu A hoặc B bằng <code>true</code>, ngược lại trả về <code>false</code></td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(6, 6, 6);">!=</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">!A</td>
                                <td style="border: 1px solid rgb(6, 6, 6);">Trả về <code>true</code> nếu A bằng <code>false</code>, ngược lại trả về <code>true</code></td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="font-size: 25px;">
                        Chúng ta sẽ thực hành kỹ hơn toán tử logic ở các bài nâng cao tiếp theo nhé.                  
                    </p>
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                       <b>Lời kết:</b>  Trên là tập hợp 4 nhóm toán tử thường dùng nhất trong C++. Tuy danh sách vẫn còn hạn chế nhưng với số lượng toán tử đó thì bạn có thể giải quyết được hầu hết các bài toán trong quá trình theo học series này. Hẹn gặp lại bạn ở bài tiếp theo.                    </p>
               </div>
                <div style="height: 50px;"></div>
                <div style="float: left;width: 100%;display: flex;">
                    <p id="bt" ><a href="./bai6(lt).php">⇦ Bài trước </a></p>
                    <p id="bs"><a href="./bai8(lt).php">Bài tiếp theo ⇨</a></p>
                </div>
               <div style="height: 50px;"></div>
                </div>
                <div class="chu col-lg-2">
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