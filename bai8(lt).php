<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cấu trúc lệnh if else trong C++ (có bài tập thực hành)</title>
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
                <div class="col-0 col-md-3 col-lg-2 col-xl-2">
                    <?php
                                             require 'menu/menubai.php';

                    ?>
                </div>
                <div class="col-md-9 col-lg-8 col-xl-8">
                    <div style="height: 20px;"></div>
                    <b style="font-size: 55px;">Cấu trúc lệnh if else trong C++ (có bài tập thực hành)</b>
                    <div style="height: 20px;"></div>
                    <hr>
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Trong bài này chúng ta sẽ học cách sử dụng lệnh if else trong C++, đây là một lệnh điều khiển rẻ nhánh chương trình rất thông dụng trong lập trình C++.                    
                    </p>
                    <p style="font-size: 25px;">
                        Trong ngôn ngữ C++ cũng như các ngôn ngữ lập trình khác như JAVA, C#, Ruby, PHP, Javascript, đó là chương trình sẽ được biên dịch và thực thi các câu lệnh theo thứ tự từ trên xuống dưới. Vậy trong một số trường hợp chúng ta muốn đoạn code của mình chỉ được thực thi khi thõa mãn một số điều kiện nào đó thì phải làm như thế nào? Trong C++ có hỗ trợ cho chúng ta thực hiện điều trên bằng cấu trúc điều khiển như  <strong style="background-color: rgb(206, 204, 204);">if else</strong> ,  <strong style="background-color: rgb(206, 204, 204);">switch case</strong> .                    </p>             
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Trong bài học hôm nay chúng ta chỉ tìm hiều cấu trúc điều khiển  <strong style="background-color: rgb(206, 204, 204);">if else</strong>   trong C++, còn cấu trúc điều khiển   <strong style="background-color: rgb(206, 204, 204);">switch case</strong>chúng ta sẽ tìm hiểu trong bài kế tiếp.             
                    </p>
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Vậy cấu trúc điều khiển  <b>if else</b>  trong C++ là gì? Có mấy loại cấu trúc điều khiển <b>if else</b> thì chúng ta sẽ cùng tìm hiểu nhé.                 
                    </p>
                    <div style="height: 20px;"></div>
                    <div style="background-color: rgb(214, 209, 209);">
                        <p style="padding-left: 10px;">MỤC LỤC</p>
                        <ul id="menu-bai1">
                            <li><a href="#div-bai1-1">1. Câu lệnh if else trong C++</a></li>
                            <li><a href="#div-bai1-2">2. Cấu trúc lệnh if trong C++</a></li>
                            <li><a href="#div-bai1-3">3. Cấu trúc lệnh if else trong C++</a></li>
                            <li><a href="#div-bai1-4">4. Lệnh if else lồng nhau trong C++</a></li>
                            <li><a href="#div-bai1-5">5. Tìm hiểu lệnh if else if ladder</a></li>
                            <li><a href="#div-bai1-6">6. Câu lệnh if rút gon C++</a></li>
                            <li><a href="#div-bai1-7">7. Kết luận</a></li>
                        </ul>
                    </div>
                    <div style="height: 50px;"></div>
                    <!-- Phần 1 bài 1 -->
                   <div>
                        <div id="div-bai1-1" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">1. Câu lệnh if else trong C++</h1></div>
                        
                        <div style="height: 20px;"></div>
                        <div>
                            <p style="font-size: 25px;">
                                Câu lệnh if else trong C++ được dùng để điều khiển đoạn code được thực thi khi thõa mãn được điều kiện. Trong C++ có các loại cấu trúc điều khiển <b>if else</b>  như sau:
                            </p>
                            <div style="height: 20px;"></div>
                            <ul>
                                <li>if statement (Câu lệnh if)</li>
                                <div style="height: 10px;"></div>
                                <li>if else statement (Câu lệnh if else)</li>
                                <div style="height: 10px;"></div>
                                <li>nested if statement (Câu lệnh if lồng nhau)</li>
                                <div style="height: 10px;"></div>
                                <li>if else if ladder (Câu lệnh else if)</li>
                            </ul>
                            <div style="height: 20px;"></div>
                        <div>Trước khi tìm hiểu sâu hơn thì mình muốn nói một chút về <b> mệnh đề</b>.</div>
                        <div style="height: 20px;"></div>
                        <div>Thực tế thì lệnh if else rất giống với mệnh đề, nó gồm hai thành phần, thứ nhất là điều kiện của mệnh đề và thứ hai là nội dung thực hiện của mệnh đề.</div>
                        <div style="height: 20px;"></div>
                        <div>Ví dụ mình có mệnh đề sau: "Nếu tôi thi được 10 điểm thì được bố mẹ cho đi Đà Lạt chơi".</div>
                        <div style="height: 20px;"></div>
                        <ul>
                            <li>Điều kiện là phải thi 10 điểm</li>
                            <div style="height: 10px;"></div>
                            <li>Nội dung thực hiện là đi Đà Lạt chơi</li>
                        </ul>
                        <div style="height: 20px;"></div>
                        <div>Trong lập trình cũng vậy, chúng ta có thể viết một ứng dụng như vậy bằng cách sử dụng lệnh  <b> if else</b>.</div>
                   <div style="height: 50px;"></div>
                   <!-- Phần 2 bài 1 -->
                   <div>
                        <div id="div-bai1-2" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">2. Cấu trúc lệnh if trong C++</h1></div>
                        <div style="height: 20px;"></div>
                        <div>
                            Câu lệnh  <strong style="background-color: rgb(206, 204, 204);">if</strong> là cấu trúc điều khiển đơn giản nhất, nó quyết định đoạn code được thi hay không. Nếu điều kiện đúng thì đoạn code bên trong lệnh if được thực thi, ngược lại thì đoạn code đó sẽ không được thực thi.                        <div style="height: 20px;"></div>
                        <div>
                            <p style="font-size: 25px;">Trước hết chúng ta hãy xem cú pháp của nó đã nhé.</p>
                        </div>
                        <div style="height: 20px;"></div>
                        <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="5">
    if(condition) 
    {
    // Doan code se duoc thuc thi neu condition đúng
    }
                        </textarea>
                        <div>
                           <b>Lưu ý</b> : Nếu chúng ta không cung cấp dấu "{" sau câu lệnh if thì mặc định nó chỉ thực thi một dòng lệnh duy nhất theo sau if.
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            Nếu condition có giá trị <strong style="background-color: rgb(206, 204, 204);">TRUE </strong> thì đoạn code <b>statement</b>  sẽ thực thi, ngược lại nếu
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            condition có giá trị <strong style="background-color: rgb(206, 204, 204);">FALSE </strong>  nó sẽ bỏ qua. Hãy xem lưu đồ hoạt động của lệnh if dưới đây.                      </div>
                        <div style="height: 20px;"></div>
                        <div style="justify-content: center;display: flex;">
                            <img   src="./image_8/if_2.png" alt="">
                        </div>
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="22">
    #include<iostream> 
    using namespace std; 
    
    int main() 
        { 
            int i = 5; 
        
            if (i > 5) 
            { 
            cout << i << " lon hon 5" << "\n"; 
            }     
            if (i = 5) 
            { 
            cout << i << " bang 5" << "\n"; 
            } 
            if (i < 5) 
            { 
            cout << i << " nho hon 5" << "\n"; 
            } 
            cout << "cau lenh o ngoai if"; 
    }
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            Và kết quả sau khi thực thi đoạn code trên:                      
                         </div>
                            <div style="height: 20px;"></div>
                            <div>
                                <img class="w-100" style="border: 1px solid black;" src="./image_8/if_4.png" alt="">
                            </div>
                            <div style="height: 20px;"></div>
                            <div>
                                Như các bạn thấy, vì biến <strong style="background-color: rgb(206, 204, 204);">i</strong> có giá trị là 5 nên lệnh <strong style="background-color: rgb(206, 204, 204);">if</strong> thứ hai sẽ được thực hiện, nên màn hình sẽ in ra kết quả là "5 bằng 5". Tiếp theo nó sẽ chạy các đoạn code bên ngoài lệnh if, tức là nó sẽ in ra dòng "Cau lenh o ngoai if".
                            </div>
                        
                   <div style="height: 50px;"></div>
                   <!-- Phần 3 bài 2 -->
                    <div>
                        <div id="div-bai1-3" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">3. Cấu trúc lệnh if else trong C++</h1></div>

                        <div style="height: 20px;"></div>
                        Câu lệnh <b>if else</b>  sẽ thực thi đoạn code sau <b> if</b> nếu điều kiện đúng, ngược lại sẽ thực thi đoạn code sau <b>else</b> . Nếu xét theo lời văn chúng ta sử dụng trong cuộc sống hằng ngày thì chúng ta có ví dụ sau: Nếu bạn An đi học thì không bị phạt, ngược lại bạn An sẽ bị phạt.                       
                        <div style="height: 20px;"></div>
                        <div>
                            Tương tự, bạn cần phải xem cú pháp và lưu đồ hoạt động của nó trước khi làm ví dụ.
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="10">
    if (condition)
    {
        // Doan code se duoc thuc thi neu condition dung
    }
    else
    {
    // Doan code se duoc thi thi neu condition sai
    }
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            Lưu đồ hoạt động.
                        </div>
                        <div style="height: 20px;"></div>
                        <div style="justify-content: center; display: flex;">
                            <img src="./image_8/h.png" alt="">
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="18">
    #include<iostream> 
    using namespace std; 
    
    int main() 
        { 
            int i = 5; 
        
            if (i > 5) 
            { 
            cout << i << " lon hon 5" << "\n"; 
            } else { 
            cout << i << " nho hon hoac bang 5" << "\n"; 
            } 
            cout << "Cau lenh o ngoai if"; 
            return 0;
    }
                            </textarea>
                        <div style="height: 20px;"></div>
                        <div>Và kết quả sau khi thực thi đoạn code trên:</div>
                        <div style="height: 20px;"></div>
                        <div style="justify-content: center;display: flex;">
                            <img class="w-75" src="./image_8/im2k3wu7.png" alt="">
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            Trong ví dụ này thì rõ ràng biến i = 5 nên điều kiện (i > 5) = FALSE, chính vì vậy nội dung bên trong lệnh else sẽ được thực hiện, sau đó chạy tiếp các dòng lệnh bên ngoài nên kết quả chúng ta thu được như hình trên.
                        </div>
                        <div style="height: 50px;"></div>
                    <!-- Phần 4 bài 2 -->
                    <div>
                        <div id="div-bai1-4" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">4. Lệnh if else lồng nhau trong C++</h1></div>

                        <div style="height: 20px;"></div>
                        Câu lệnh if ở bên trong một câu lệnh if khác, chúng ta gọi đó là câu lệnh if else lồng nhau. Lệnh if else lồng nhau được sư dụng khá nhiều trong thực tế, nó giúp chúng ta rẻ nhánh những chương trình phức tạp.                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="10">
    if (condition1) 
    {
    // doan code se duoc thuc thi khi condition1 dung
    if (condition2) 
    {
        // doan code se duoc thuc thi khi condition2 dung
    }
    }
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="22">
    #include<iostream> 
    using namespace std; 
    
    int main() 
        { 
            int i = 15; 
        
            if (i > 5) 
            { 
            cout << i << " lon hon 5" << "\n"; 
            if (i > 15) {
                cout << i << " lon hon 15" << "\n"; 
            } else {
                cout << i << " nho hon hoac bang 15" << "\n";
            }
            } else { 
            cout << i << " nho hon hoac bang 5" << "\n"; 
            } 
            cout << "cau lenh o ngoai if"; 
            return 0;
    }
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            Các bạn cứ chạy từ trên xuống và từ trái qua phải. Vì biến i = 15 nên nội dung bên trọng lệnh if đầu tiên sẽ được chạy. Lúc này bên trong lại có thêm lệnh if else khác nên quy trình hoạt động cứ áp dụng nguyên tắc mà chúng ta đã học ở trên, và kết quả sẽ thu về là "15 nhỏ hơn hoặc bằng 15".                        </div>
                        <div style="height: 50px;"></div>
                    <!-- Phần 5 -->
                    <div>
                        <div id="div-bai1-5" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">5. Tìm hiểu lệnh if else if ladder</h1></div>
                        <div style="height: 20px;"></div>
                        Câu lệnh if else if cho phép so sánh với nhiều điều kiện, chương trình sẽ chạy từ trên xuống dưới, nếu gặp điều kiện nào đúng thì sẽ thực thi đoạn code bên trong điều kiện đó. Ví vậy đối với cấu trúc điều khiển if else if chúng ta có thể thực thi nhiều đoạn code khác nhau.                        <div style="height: 20px;"></div>
                        <b> Ví dụ:</b> In ra giá trị của biến
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="10">
    if (condition)
        statement;
    else if (condition)
        statement;
    .
    .
    else
        statement;
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            Lưu đồ hoạt động.                        
                        </div>
                        <div style="height: 20px;"></div>
                        <div style="justify-content: center;display: flex;">
                            <img src="./image_8/t1.png" alt="">
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="26">
   #include<iostream> 
    using namespace std; 
    
    int main() 
        { 
            int i = 15; 
        
            if (i == 5) 
            { 
            cout << i << " bang 5" << "\n";
            } else if (i == 10)  { 
            cout << i << " bang 10" << "\n"; 
            } else if (i == 15) {
                cout << i << " bang 15" << "\n"; 
            } else if (i == 20) {
                cout << i << " bang 20" << "\n"; 
            } else if (i == 25) {
                cout << i << " bang 25" << "\n"; 
            } else {
                cout << i << " gia tri khac" << "\n"; 
            }
            cout << "cau lenh o ngoai if"; 
            return 0;
        }
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            Cách dùng này có thể thay thế cho lệnh if else lồng nhau trong một số trường hợp, chính vì vậy trong thực tế cách này được sử dụng nhiều nhất.                      
                        </div>
                        <div style="height: 10px;"></div>
                        <div>
                            Mình sẽ không giải thích kết quả nữa, bạn hãy tự chạy và tự tìm hiểu nhé.
                        </div>
                        <div style="height: 50px;"></div>
                        <!-- Phần 6 -->
                        <div>
                            <div id="div-bai1-6" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">6. Câu lệnh if rút gon C++</h1></div>
                            <div style="height: 20px;"></div>
                            Trong C++ có một cách để viết rút gọn lệnh if đó là sử dụng toán tử ba ngôi. Đây là toán tử khá đơn giản, chỉ sử dụng trong trường hợp bạn muốn lấy một giá trị nào đó dựa vào một điều kiện đơn giản.                         
                            <div style="height: 20px;"></div>
                            <div></div>
                            Cú pháp của nó như sau:
                            <div style="height: 20px;"></div>
                            <div>
                                <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="3">
condition ? true_value : false_value;
                                </textarea>
                            </div>
                            <div style="height: 20px;"></div>
                            <div>Trong đó:</div>
                            <ul>
                                <li>Condition là điều kiện kiểm tra</li>
                                <li>true_valua là giá trị sẽ được lấy nếu condition = true</li>
                                <li>false_value là giá trị sẽ được lấy nếu condition = false</li>
                            </ul>
                            <div style="height: 20px;"></div>
                            <div><b> Ví dụ:</b> In ra "số 1" hoặc "khác 1" dựa vào giá trị mà người dùng nhập vào.</div>
                            <div style="height: 20px;"></div>
                            <div>
                                <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="19">
#include <iostream>
using namespace std;
 
int main()
{
    int number;
    string message;
     
    cout << "nhap so vao: ";
    cin >> number;
     
    message = (number == 1) ? "so 1" : "khac 1";
     
    cout << message;
     
    return 1;
}
                                </textarea>
                            </div>
                            <div style="height: 50px;"></div>
                        </div>
                        <!-- Phần 7 -->
                        <div>
                            <div id="div-bai1-7" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">7. Kết luận</h1></div>
                            <div style="height: 20px;"></div>
                            Như vậy chúng ta đã tìm hiểu xong 4 loại cấu trúc điều khiển <strong style="background-color: rgb(206, 204, 204);">if</strong> trong C++ đó là câu lệnh <strong style="background-color: rgb(206, 204, 204);">if</strong>, câu lệnh <strong style="background-color: rgb(206, 204, 204);">if-else</strong>>, câu lệnh <strong style="background-color: rgb(206, 204, 204);">if</strong> lồng nhau, câu lệnh <strong style="background-color: rgb(206, 204, 204);">if-else-if</strong>
                            <div style="height: 20px;"></div>
                            Trong bài này chúng ta chỉ cần nhớ một số điểm cần lưu ý đó là câu lệnh <strong style="background-color: rgb(206, 204, 204);">if</strong>  chỉ có một điều kiện, nếu điều kiện đúng thì thực thi đoạn code, ngược lại đoạn code sẽ không được thực thi.                        </div>
                            <div style="height: 20px;"></div>
                            Câu lệnh <strong style="background-color: rgb(206, 204, 204);">if-else</strong>nếu điều kiện đúng sẽ thực thi đoạn code bên trong <strong style="background-color: rgb(206, 204, 204);">if</strong>, ngược lại sẽ thực thi đoạn code bên trong <strong style="background-color: rgb(206, 204, 204);">else</strong>, câu lệnh <strong style="background-color: rgb(206, 204, 204);">if-else-if</strong> cho phép so sánh nhiều điều kiện, đi từ trên xuống dưới, nếu điều kiện nào đúng thì thực thi đoạn code bên trong điều kiện đó.
                            <div style="height: 20px;"></div>
                            Tùy theo yêu cầu bài toán của mình mà áp dụng cấu trúc điều khiển if cho phù hợp. Trong bài học tiếp theo chúng ta sẽ cùng tìm hiểu một cú pháp điều khiển nữa trong C++ đó là <strong style="background-color: rgb(206, 204, 204);">switch-case</strong>.
                            <div style="height: 50px;"></div>
                    <div style="float: left;width: 100%;display: flex;">
                        <p style="width: 80%;"><a href="./bai7(lt).php">⇦ Bài trước </a></p>
                        <p style="width: 20%;"><a href="./bai9(lt).php">Bài tiếp theo ⇨</a></p>
                    </div>
                        </div>
                   <div style="height: 50px;"></div>
                   
                   
                   <!-- sửa tới đây -->
                    </div>
                    </div>
                    </p>
                    </div>
                   </div>
                </div>
                 </div>
                </div>
                </div>
                
                <div class="chu col-lg-2 col-xl-2">
                <?php
                     require 'menu/menugioithieu.php';
                    ?>
                </div>
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