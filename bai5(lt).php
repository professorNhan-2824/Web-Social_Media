<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Các kiểu dữ liệu trong C++ và cách khai báo</title>
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
        #menu-bai1>li>li>a:hover{
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
                    <b style="font-size: 55px;">Các kiểu dữ liệu trong C++ và cách khai báo</b>
                    <div style="height: 20px;"></div>
                    <hr>
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Trong bài này mình sẽ giới thiệu danh sách các kiểu dữ liệu trong C++, qua đó bạn cũng sẽ biết được giới hạn các kiểu dữ liệu trong C++ luôn nhé.                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Thông thường chúng ta chia ra làm hai loại kiểu dữ liệu đó là chữ và số. Nhưng trong lập trình việc chia ra hai loại như vậy không rõ ràng và không phù hợp, vì đôi khi sẽ dẫn đến sử dụng không gian trong bộ nhớ một cách dư thừa. Để rõ hơn thì chúng ta sẽ xem danh sách các kiểu dữ liệu trong C++ ở bảng dưới đây.                    <div style="height: 20px;"></div>
                    <div style="height: 20px;"></div>
                    <div style="background-color: rgb(214, 209, 209);">
                        <p style="padding-left: 5px;">MỤC LỤC</p>
                        <ul id="menu-bai1">
                            <li><a href="#div-bai1-1">1. Danh sách các kiểu dữ liệu trong C++</a></li>
                            <li><a href="#div-bai1-2">2. Giới hạn các kiểu dữ liệu trong C++</a>     
                                            <li style="padding-left: 70px;"><a href="#div-bai1-2-1"> Kiểu ký tự:</a> </li>
                                            <li  style="padding-left: 70px;"><a href="#div-bai1-2-2">Kiểu số nguyên:</a> </li>
                                            <li  style="padding-left: 70px;"><a href="#div-bai1-2-3">Kiểu số thực:</a> </li>
                            </li>
                            <li><a href="#div-bai1-3">3. Định nghĩa kiểu dữ liệu bằng TYPEDEF trong C++</a></li>
                            <li><a href="#div-bai1-4">4. Khai báo kiểu dữ liệu cho biến C++</a></li>
                            <li><a href="#div-bai1-5">5. Xem kích thước của các kiểu dữ liệu C++</a></li>
                            <li><a href="#div-bai1-6">6. Lời kết</a></li>
                        </ul>
                    </div>
                    <div style="height: 50px;"></div>
                    <!-- Phần 1 bài 1 -->
                <div>
                        <div id="div-bai1-1" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">1. Danh sách các kiểu dữ liệu trong C++</h1></div>
                        
                        <div style="height: 20px;"></div>
                        <div>
                            <p style="font-size: 25px;">
                                Sau đây là danh sách các kiểu dữ liệu và độ lớn của từng kiểu dữ liệu được lưu trữ trong bộ nhớ máy tính.                   </p>
                            <div style="height: 20px;"></div>
                            <table  cellpadding="1" cellspacing="1" style="width:100%;">
                                <thead >
                                    <tr>
                                        <th style="border: 1px solid rgb(6, 6, 6);" scope="col">Loại dữ liệu</th>
                                        <th style="border: 1px solid rgb(6, 6, 6);" scope="col">Kiểu dữ liệu</th>
                                        <th style="border: 1px solid rgb(6, 6, 6);" scope="col">Số ô nhớ</th>
                                        <th style="border: 1px solid rgb(6, 6, 6);" scope="col">Miền giá trị</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid rgb(6, 6, 6);">Boolean</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">bool</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">1 byte</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">0 hoặc 1. Trong đó 0 =&gt; FALSE và 1 =&gt; TRUE</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid rgb(6, 6, 6);">Ký tự</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">char</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">1 byte</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">-128 ... 127 hoặc 0 ... 255</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid rgb(6, 6, 6);">-</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">unsign char</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">1 byte</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">0 ... 255</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid rgb(6, 6, 6);">-</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">sign char</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">1 byte</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">-128 ... 127</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid rgb(6, 6, 6);">Số nguyên</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">int</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">4 byte</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">-2147483648 ... 2147483647</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid rgb(6, 6, 6);">-</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">unsign int</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">4 byte</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">0 ... 4294967295</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid rgb(6, 6, 6);">-</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">sign int</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">4 byte</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">-2147483648 ... 2147483647</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid rgb(6, 6, 6);">-</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">short</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">2 byte</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">－32768 .. 32767</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid rgb(6, 6, 6);">-</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">long</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">4 byte</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">-2<sup>15</sup> ... 2<sup>15</sup> - 1</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid rgb(6, 6, 6);">Số thực</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">float</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">4 byte</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">±10<sup>-37</sup> ... ±10<sup>+38</sup></td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid rgb(6, 6, 6);">-</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">double</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">8 byte</td>
                                        <td style="border: 1px solid rgb(6, 6, 6);">±10<sup>-307</sup> ... ±10<sup>+308</sup></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div style="height: 20px;"></div>
                            <div>
                                Đây là các kiểu dữ liệu đơn giản có sẵn trong C++, còn các kiểu dữ liệu phức tạp như struct hoặc đối tượng do người dùng định nghĩa thì chúng ta sẽ tìm hiểu ở một bài khác.
                            </div>
                            <div style="height: 20px;"></div>
                            <p style="font-size: 25px;">
                                Trong các kiểu dữ liệu trên bạn thêm từ khóa sign để định nghĩa miền giá trị từ âm tới dương, bổ sung từ khóa unsign để định nghĩa miền giá trị chỉ số dương. Trường hợp chỉ số dương thì bắt đầu từ 0 và nhân đôi miền giá trị lên.                            </p>
                            <div style="height: 20px;"></div>
                            <div>
                                <b>Ví dụ:</b>
                            </div>
                            <div>
                                <ul>
                                    <li>Kiểu <b style="color: #0b7ae9;">char</b>  có miền giá trị từ -128 ... 127</li>
                                    <li>Kiểu <b style="color: #0b7ae9;">sign char</b>  có miền giá trị từ -128 ... 127 </li>
                                    <li> Kiểu <b style="color: #0b7ae9;">unsign char</b>  có miền giá trị từ 0 ... 255 (255 ~ 127x2, nhân đôi lên vì bắt đầu từ 0)</li>
                                </ul>
                            </div>
                            <div style="height: 20px;"></div>
                            <div>
                                Vì nhiều kiểu dữ liệu nên mình không liệt kê hết, bạn hãy tự tính toán để đưa ra miền giá trị cho các kiểu giá trị còn lại nhé.                            </div>
                        </div>
                        <div style="height: 20px;"></div>
                            <div>
                                Nhìn vào bảng này bạn sẽ trả lời được vấn đề mà mình nói ở phần mở đầu, đó là việc khai báo biến dư thừa không gian trong bộ nhớ. Mỗi kiểu dữ liệu sẽ có số byte khác nhau, tức là chúng sẽ chiếm bộ nhớ càng nhỏ nếu số byte càng nhỏ. Vì vậy, khi sử dụng các kiểu dữ liệu thì ta phải cân nhắc tính toán thật kỹ. Ví dụ để lưu trữ tên thì chúng ta sử dụng kiểu char là được.                        
                </div>
                <div style="height: 50px;"></div>
                <!-- Phần 2 bài 1 -->
                <div>
                        <div id="div-bai1-2" style="background-color:#0b7ae9;"><h1 style="color: white;padding:10px;">2. Giới hạn các kiểu dữ liệu trong C++
                        </h1></div>
                </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <p style="font-size: 25px;">Trước khi vào vấn đề thì bạn cần phải biết đơn vị byte và bit, hai đơn vị này se có công thức chuyển đổi như sau: <b>1 byte = 8 bit</b> . Mỗi bit sẽ là một ô nhớ trong bộ nhớ máy tính. Mình chỉ giải thích các kiểu dữ liệu chuẩn, còn các kiểu định nghĩa bởi <b style="color: #0b7ae9;">sign và unsign</b>  thì bạn tự tính toán nhé.</p>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            Bây giờ chúng ta sẽ tìm hiểu chi tiết cụ thể từng loại dữ liệu đã được đề cập ở bảng trên.
                        </div>
                        <div style="height: 20px;"></div>
                        <h2 id="div-bai1-2-1" style="color: #097ff6;">Kiểu ký tự:</h2>
                        <div>
                            Có hai kiểu dữ liệu thuộc loại dữ liệu ký tự đó là kiểu <b>char và unsign char</b> . Cả hai đều có chiều dài tối đa là 255 ký tự nhưng với <b>unsign char</b>  thì phạm vi biểu diễn sẽ bắt đầu từ 0.                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            Mỗi ký tự char sẽ chiếm 1 byte (8 bit) trong bộ nhớ và chúng được biểu diễn thông qua <i>bảng mã ASCII.</i> 
                        </div>
                        <div style="height: 20px;"></div>
                        <table border="1" cellpadding="1" cellspacing="1" style="width:100%;">
                            <thead>
                                <tr>
                                    <th style="border: 1px solid rgb(6, 6, 6);" scope="col">Kiểu dữ liệu</th>
                                    <th style="border: 1px solid rgb(6, 6, 6);" scope="col">Số ô nhớ</th>
                                    <th style="border: 1px solid rgb(6, 6, 6);" scope="col">Giới hạn</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="border: 1px solid rgb(6, 6, 6);">char</td>
                                    <td style="border: 1px solid rgb(6, 6, 6);">1 byte</td>
                                    <td style="border: 1px solid rgb(6, 6, 6);"><span style="line-height: 20.8px;">-128 ... 127</span></td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid rgb(6, 6, 6);">unsign char</td>
                                    <td style="border: 1px solid rgb(6, 6, 6);">1 byte</td>
                                    <td style="border: 1px solid rgb(6, 6, 6);"><span style="line-height: 20.8px;">0 ... 255</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <div style="height: 40px;"></div>
                        <h2 id="div-bai1-2-2" style="color: #097ff6;">Kiểu số nguyên:</h2>
                        <div>
                            Kiểu số nguyên là kiểu số mà khi chia cho 1 sẽ dư 0, nghĩa là đây là một số không có dấu phẩy động.                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            Chúng ta có các kiểu dữ liệu số nguyên đó là <b style="color: #0b7ae9;">int, unsign int, short, long, unsign long</b> . Phạm vi biểu diễn và kích thước của chúng sẽ tăng dần.
                        </div>
                        <div style="height: 20px;"></div>
                        <table border="1" cellpadding="1" cellspacing="1" style="width:100%;">
                            <thead>
                                <tr>
                                    <th style="border: 1px solid rgb(6, 6, 6);" scope="col">Kiểu dữ liệu</th>
                                    <th style="border: 1px solid rgb(6, 6, 6);" scope="col">Số ô nhớ</th>
                                    <th style="border: 1px solid rgb(6, 6, 6);" scope="col">Giới hạn</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="border: 1px solid rgb(6, 6, 6);">int</td>
                                    <td style="border: 1px solid rgb(6, 6, 6);">2 byte</td>
                                    <td style="border: 1px solid rgb(6, 6, 6);">－32768 .. 32767</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid rgb(6, 6, 6);">unsign int</td>
                                    <td style="border: 1px solid rgb(6, 6, 6);">2 byte</td>
                                    <td style="border: 1px solid rgb(6, 6, 6);">0 .. 65535</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid rgb(6, 6, 6);">short</td>
                                    <td style="border: 1px solid rgb(6, 6, 6);">2 byte</td>
                                    <td style="border: 1px solid rgb(6, 6, 6);">－32768 .. 32767</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid rgb(6, 6, 6);">long</td>
                                    <td style="border: 1px solid rgb(6, 6, 6);">4 byte</td>
                                    <td style="border: 1px solid rgb(6, 6, 6);">-2147483648 đến 2147483647</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid rgb(6, 6, 6);">unsign long</td>
                                    <td style="border: 1px solid rgb(6, 6, 6);">4 byte</td>
                                    <td style="border: 1px solid rgb(6, 6, 6);">0 đến 4294967295</td>
                                </tr>
                            </tbody>
                        </table>
                        <div style="height: 20px;"></div>
                        <div>
                            Kiểu ký tự cũng có thể được xem là kiểu số nguyên nếu biểu diễn thông qua bảng mã ASCII.                        </div>
                        <div style="height: 40px;"></div>
                        <h2 id="div-bai1-2-3" style="color: #097ff6;">Kiểu số thực:</h2>
                        <div style="height: 20px;"></div>
                        <div>
                            Kiểu số thực là kiểu có dấu phảy động, tức là khi chia số đó cho 1 thì sẽ có dư. Ví dụ 2,5 là kiểu số thực.
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            Chúng ta có hai kiểu dữ liệu biểu diễn cho số thực đó là <b>float và double và long double</b> .
                        </div>
                        <div style="height: 20px;"></div>
                        <table border="1" cellpadding="1" cellspacing="1" style="width:100%;">
                            <thead>
                                <tr>
                                    <th style="border: 1px solid rgb(6, 6, 6);" scope="col">Kiểu dữ liệu</th>
                                    <th style="border: 1px solid rgb(6, 6, 6);" scope="col">Số ô nhớ</th>
                                    <th style="border: 1px solid rgb(6, 6, 6);" scope="col">Giới hạn</th>
                                    <th style="border: 1px solid rgb(6, 6, 6);" scope="col">Chữ số có nghĩa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="border: 1px solid rgb(6, 6, 6);">float</td>
                                    <td style="border: 1px solid rgb(6, 6, 6);">4 byte</td>
                                    <td style="border: 1px solid rgb(6, 6, 6);">3.4E-38 đến 3.4E+38</td>
                                    <td style="border: 1px solid rgb(6, 6, 6);"> 7 đến 8</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid rgb(6, 6, 6);">double</td>
                                    <td style="border: 1px solid rgb(6, 6, 6);">8 byte</td>
                                    <td style="border: 1px solid rgb(6, 6, 6);">1.7E-308 đến 1.7E+308</td>
                                    <td style="border: 1px solid rgb(6, 6, 6);">15 đến 16</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid rgb(6, 6, 6);">long double</td>
                                    <td style="border: 1px solid rgb(6, 6, 6);">10 byte</td>
                                    <td style="border: 1px solid rgb(6, 6, 6);">3.4E-4932 đến 1.1E4932</td>
                                    <td style="border: 1px solid rgb(6, 6, 6);"> 17 đến 18</td>
                                </tr>
                            </tbody>
                        </table>
                         </div>
                <div style="height: 50px;"></div>
                <!-- Phần 3 bài 1 -->
                <div>
                        <div id="div-bai1-3" style="background-color:#0b7ae9;"><h1 style="color: white;padding:10px;">3. Định nghĩa kiểu dữ liệu bằng TYPEDEF trong C++</h1></div>
                        <div style="height: 20px;"></div>
                        <div>
                            <p style="font-size: 25px;">
                                Từ khóa <b>typedef </b> dùng để đặt tên lại hoặc đặt tên mới cho một kiểu dữ liệu.                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <p style="font-size: 25px;">
                                Ví dụ bạn muốn đặt một tên khác cho kiểu int thì làm như sau:                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-right: 50px;background-color:#222f3c;color: aliceblue;" name="code-1" id="code1" cols="70" rows="2">
    typedef int kieu_so_nguyen;
                            </textarea>
                        </div>
                        <div>
                            <p style="font-size: 25px;">
                                Đoạn code trên sẽ tạo một kiểu dữ liệu tên là kieu_so_nguyen và nó là một bản sao của kiểu int. Lúc này bạn có thể sử dụng bình thường như sau:                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-right: 50px;background-color:#222f3c;color: aliceblue;" name="code-1" id="code1" cols="70" rows="18">
    #include <iostream.h>
    using namespace std;
                                        
    int main ()
    {   
        typedef int kieu_so_nguyen;
                                                
        kieu_so_nguyen namsinh = 1990;
                                                
        cout << "Nam sinh cua toi la:";
        cout << endl;
        cout << namsinh;
        cout << endl;
                                                
        return 1;
    }
                            </textarea>
                         </div>
                            </p>
                        </div>
                        <div style="height: 20px;"></div> 
                        <div>
                            Chương trình này hoạt động bình thường.                       </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <img class="w-100" src="./image_5/typedef-c-plus-plus.jpg" alt="">
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            Ngoài ra bạn có thể định nghĩa một kiểu dữ liệu đã giới hạn ký tự như ví dụ dưới đây:
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-right: 50px;background-color:#222f3c;color: aliceblue;" name="code-1" id="code1" cols="70" rows="2">
    typedef char character[200];
                            </textarea>
                         </div>
                         <div style="height: 20px;"></div>
                        <div>
                            Đoạn code này tạo một kiểu dữ liệu <b>char </b> 200 ký tự và gán nó với cái tên là <b>character</b> . Bây giờ để khai báo một kiểu char 200 ký tự thì bạn sẽ thông qua kiểu <b>character</b> .                        
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-right: 50px;background-color:#222f3c;color: aliceblue;" name="code-1" id="code1" cols="70" rows="19">
    #include <iostream.h>
    using namespace std;
                                        
    int main ()
    {   
        typedef char character[200];
        character HoTen;
                                                
        cout << "Nhap ho ten cua ban:";
        cin >> HoTen;
        cout << endl;
        cout << "Ho ten cua ban la:";
        cout << HoTen;
        cout << endl;
                                                
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
                            <img class="w-100" src="./image_5/character.jpg" alt="">                        
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            Việc đặt lại tên nay sẽ rất hữu ích nếu trong chương trình sử dụng nhiều lần cùng một kiểu dữ liệu và cùng độ dài.                       
                        </div>
                <div style="height: 50px;"></div>
                <!-- Phần 4 bài 2 -->
                    <div>
                        <div id="div-bai1-4" style="background-color:#0b7ae9;"><h1 style="color: white;padding:10px;">4. Khai báo kiểu dữ liệu cho biến C++</h1></div>
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">
                            Khi <b>khai báo biến</b>  thì bắt buộc bạn phải chọn một trong các kiểu dữ liệu ở trên cho biến đó.                        </p>
                        <div style="height: 20px;"></div>
                        <div>
                           <b> Ví dụ:</b> Khai báo kiểu dữ liệu cho các biến
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                           <textarea style="font-size: 20px;padding-right: 50px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="30" rows="5">
    int namsinh;
    char ten[200];
    float diem_thi;
                           </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        <b>Giải thích:</b>
                        <div style="height: 20px;"></div>
                        <ul>
                            <li><b>namsinh: </b>Là một số nguyên nên mình chọn kiểu <i>int.</i> </li>
                            <li><b>ten: </b>là kiểu ký tự nên mình chọn kiểu <i> char.</i></li>
                            <li><b>diem: </b>điểm có dấu phẩy động nên mình chọn kiểu <i> float</i> .</li>
                        </ul>
                    </div>
                <!-- Phần 5 -->
                <div>
                    <div id="div-bai1-5" style="background-color:#0b7ae9;"><h1 style="color: white;padding:10px;">5. Xem kích thước của các kiểu dữ liệu C++</h1></div>
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Để xem kích cỡ của các kiểu dữ liệu thì ta dùng từ khóa <b>sizeof.</b>                      <div style="height: 20px;"></div>
                    <div>
                       <b> Ví dụ:</b>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                       <textarea style="font-size: 20px;padding-right: 50px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="30" rows="16">
    #include <iostream>
    using namespace std;
                                
    int main()
    {
        cout << "char la: " << sizeof(char) << endl;
        cout << "int la: " << sizeof(int) << endl;
        cout << "short int la: " << sizeof(short int) << endl;
        cout << "long int la: " << sizeof(long int) << endl;
        cout << "float la: " << sizeof(float) << endl;
        cout << "double la: " << sizeof(double) << endl;
                                        
        return 1;
    }
                       </textarea>
                    </div>
                    <div style="height: 20px;"></div>
                    <b>Kêt quả:</b>
                    <div style="height: 20px;"></div>
                   <div>
                    <img class="w-100" src="./image_5/sizeof.jpg" alt="">
                   </div>
                </div>
                    <div style="height: 20px;"></div>
                    <!-- Phần 6 -->
                    <div>
                        <div id="div-bai1-6" style="background-color:#0b7ae9;"><h1 style="color: white;padding:10px;">6. Lời kết</h1></div>
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">
                            Với các kiểu dữ liệu căn bản trên bạn có thể viết các chương trình căn bản, và từ các kiểu dữ liệu này sau này chúng ta sẽ xây dựng thành các kiểu dữ liệu phức tạp hơn.                        <div style="height: 20px;"></div>
                        <div>
                            Bài tiếp theo chúng ta sẽ tìm hiểu cách viết ghi chú trong C++.
                        </div>
                        <div style="height: 20px;"></div>
                     
                    </div>
                    <hr>
                    <div style="height: 50px;"></div>
                    <div style="float: left;width: 100%;display: flex;">
                        <p style="width: 80%;"><a href="./bai4(lt).php">⇦ Bài trước </a></p>
                        <p style="width: 20%;"><a href="./bai6(lt).php">Bài tiếp theo ⇨</a></p>
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