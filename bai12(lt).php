<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cách khai báo mảng trong C++ (mảng một chiều và nhiều chiều)</title>
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
                    <b style="font-size: 55px;">Cách khai báo mảng trong C++ (mảng một chiều và nhiều chiều)</b>
                    <div style="height: 20px;"></div>
                    <hr>
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Trong bài này mình sẽ hướng dẫn cách khai báo mảng trong C++, đó là khai báo mảng một chiều và khai báo mảng nhiều chiều trong C++.                    </p>
                    <p style="font-size: 25px;">
                        Ở các bài học trước chúng ta đã cùng tìm hiểu về biến được dùng để lưu trữ giá trị trong bộ nhớ. Giả sử chúng ta cần lưu trữ 1000 số nguyên trong bộ nhớ, thì chúng ta sẽ khai báo đúng 1000 tên biến khác nhau. Điều này rất là kinh khủng, chúng ta phải suy nghĩ làm sao cho 1000 tên biến phải có nghĩa, chương trình của chúng ta sẽ trở nên rất dài và nhìn rất lộn xộn.         </p>             
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Trong C++ hổ trợ cấu trúc mảng giúp chúng ta giải quyết khó khăn trên, chỉ cần khai báo 1 mảng có 1000 phần tử là được. Và trước khi tìm hiểu về cách <b>khai báo mảng trong C++ </b> thì hãy cùng mình lướt qua một chút về ưu điểm và nhược điểm khi sử dụng mảng đã nhé.
                    </p>
                    <div style="height: 20px;"></div>
                    <div style="background-color: rgb(214, 209, 209);">
                        <p style="padding-left: 10px;">MỤC LỤC</p>
                        <ul id="menu-bai1">
                            <li><a href="#div-bai1-1">1. Ưu và nhược điểm của mảng trong C++</a></li>
                            <li><a href="#div-bai1-2">2. Cách khai báo mảng một chiều trong C++</a>
                                <li style="padding-left: 25px;"><a href="#div-bai1-2-1">Khai báo mảng một chiều</a></li>
                                <li style="padding-left: 25px;"><a href="#div-bai1-2-2">Khởi tạo giá trị mảng một chiều</a></li>
                                <li style="padding-left: 25px;"><a href="#div-bai1-2-3">Truy xuất các phần tử mảng một chiều</a></li>
                                <li style="padding-left: 25px;"><a href="#div-bai1-2-4">Ví dụ mảng một chiều</a></li>
                            </li>
                            <li><a href="#div-bai1-3">3. Cách khai báo mảng nhiều chiều trong C++</a>
                                <li style="padding-left: 25px;"><a href="#div-bai1-3-1">Cú pháp mảng nhiều chiều</a></li>
                            </li>
                            <li><a href="#div-bai1-4">4. Cách khai báo mảng hai chiều trong C++</a>
                                <li style="padding-left: 25px;"><a href="#div-bai1-4-1">Khai báo mảng 2 chiều</a></li>
                                <li style="padding-left: 25px;"><a href="#div-bai1-4-2">Khởi tạo giá trị mảng hai chiều</a></li>
                                <li style="padding-left: 25px;"><a href="#div-bai1-4-3">Truy xuất phần tử mảng hai chiều
                                </a></li>
                                <li style="padding-left: 25px;"><a href="#div-bai1-4-4">Ví dụ mảng hai chiều</a></li>
                            </li>
                            <li><a href="#div-bai1-5">5. Kết luận</a></li>
                        </ul>
                    </div>
                    <div style="height: 50px;"></div>
                    <!-- Phần 1 bài 1 -->
                   <div>
                        <div id="div-bai1-1" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">1. Ưu và nhược điểm của mảng trong C++</h1></div>
                        
                        <div style="height: 20px;"></div>
                        <div>
                            <p style="font-size: 25px;">
                                Cũng như các ngôn ngữ lập trình khác, mảng trong C++ là tập hợp các phần tử cùng kiểu liên tiếp nhau trong bộ nhớ.                            </p>                        
                                <div style="height: 20px;"></div>
                                Mảng trong C++ có độ dài cố định, được đánh theo chỉ số từ 0 đến độ dài mảng -1. Như hình dưới đây:
                                <div style="height: 20px;"></div>
                                <div style="justify-content: center;display: flex;">
                                    <img class="w-75" src="./image12/1.jpg" alt="">
                                </div>
                                <div style="height: 20px;"></div>
                                Ưu điểm
                                <div style="height: 20px;"></div>
                                <ul>
                                    <li>Truy xuất phần tử mảng ngẩu nhiên, dựa vào chỉ số (index) của mảng.</li>
                                    <li>Tối ưu code (chương trình chúng ta sẽ ít code hơn).</li>
                                    <li>Dễ dàng duyệt qua từng phần tử mảng.</li>
                                    <li>Dễ dàng thao tác dữ liệu.</li>
                                    <li>Dễ dàng sắp xếp dữ liệu.</li>
                                </ul>
                                <div style="height: 20px;"></div>
                                Nhược điểm
                                <div style="height: 20px;"></div>
                                <ul>
                                    <li>Mảng có độ dài cố định.</li>
                                    <p style="font-size: 25px;">Trong C++ có 2 loại mảng đó là mảng một chiều và mảng nhiều chiều. Tuy nhiên trong phạm vi bài này mình chỉ hướng dẫn các nội dung gồm:</p>
                                    <li>Khai báo mảng C++ môt chiều.</li>
                                    <li>Khai báo mảng C++ hai chiều</li>
                                </ul>
                            <div style="height: 20px;"></div>
                        <div style="height: 50px;"></div>
                   <!-- Phần 2 bài 1 -->
                   <div>
                        <div id="div-bai1-2" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">2. Cách khai báo mảng một chiều trong C++</h1></div>
                        <div style="height: 20px;"></div>
                        <div>
                            Mình đã có một bài viết về cấu trúc mảng trong C++, trong bài đó mình đã hướng dẫn cách khai báo mảng một chiều rồi. Tuy nhiên, để bạn dễ theo dõi và so sánh với mảng nhiều chiều thì mình sẽ nhắc lại một chút nhé.                     <div style="height: 20px;"></div>
                        <div style="height: 20px;"></div>
                        <h3 id="div-bai1-2-1" style="color: #0b7ae9;">Khai báo mảng một chiều</h3>
                        <div style="height: 20px;"></div>
                        Để khai báo một mảng một chiều trong C++, chúng ta cần chỉ rõ kiểu dữ liệu của mảng, tên mảng và số lượng phần tử của mảng. Cú pháp khai báo mảng một chiều trong C++ như sau:
                        <div style="height: 20px;"></div>
                        <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="2">
KieuDuLieu TenMang[KichCo];
                        </textarea>
                        <div>
                            Kích cở của mảng phải là một số nguyên lớn hơn 0, còn kiều dữ liệu có thể là bất cứ kiểu dữ liệu nào trong C++. Ví dụ chúng ta có mảng số nguyên gồm 1000 phần tử sẽ được khai báo như sau:
                        </div>
                        <div style="height: 20px;"></div>
                        <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="2">
Int Diem[1000];
                        </textarea>
                        <div style="height: 20px;"></div>
                        <h3 id="div-bai1-2-2" style="color: #0b7ae9;">Khởi tạo giá trị mảng một chiều</h3>
                        <div style="height: 20px;"></div>
                        Trong C++ cho phép chúng ta khởi tạo giá trị cho các phần tử mảng như sau:
                        <div style="height: 20px;"></div>
                        <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="2">
    Int Diem[7] = {2, 9, 8, 9, 1, 10, 5};
                        </textarea>
                        <div style="height: 20px;"></div>
                        Hoặc
                        <div style="height: 20px;"></div>
                        <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="2">
    Int Diem[7] = {2, 9, 8};
                        </textarea>
                        <div style="height: 20px;"></div>
                        Số phần tử ở giữa 2 dấu { và } không được lớn hơn số phần tử được khai báo trong dấu [].

Chúng ta cũng có thể khởi tạo giá trị cho mảng bằng cách bỏ qua kích cở của mảng như sau:
                        <div style="height: 20px;"></div>   
                        <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="2">
    Int Diem[] = {3, 5, 8, 9, 1, 5, 7, 3};
                        </textarea>
                        <div style="height: 20px;"></div>
                        Chúng ta cũng có thể khởi tạo giá trị cho từng phần tử một trong mảng. Ví dụ chúng ta khởi tạo giá trị cho phần tử thứ 4.
                        <div style="height: 20px;"></div>
                        <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="3">
    Int Diem[5]; //Khai bao mang so nguyen gom co 5 phan tu
    Diem[3]= 8; //Khoi tao gia tri cho phan tu thu 4 la 8
                         </textarea>
                         <div style="height: 20px;"></div>
                         Bởi vì mảng có chỉ số (index) bắt đầu bằng 0 nên phần tử thứ 4 sẽ có chỉ số (index) là 3.
                         <div style="height: 20px;"></div>
                         <h3 id="div-bai1-2-3" style="color: #0b7ae9;">Truy xuất các phần tử mảng một chiều</h3>
                         <div style="height: 20px;"></div>
                         Chúng ta có thể truy xuất giá trị của bất kỳ phần tử nào trong mảng bằng cách gọi tên mảng và chỉ số (index). Cú pháp như sau:
                         <div style="height: 20px;"></div>
                         <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="2">
    TenMang[index]
                          </textarea>
                          <div style="height: 20px;"></div>
                          Ví dụ ta có mảng Diem gồm 10 phần tử như sau:
                          <div style="height: 20px;"></div>
                          <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="2">
int Diem[10] = {1, 3, 4, 5, 6, 1, 9, 4, 10, 5};
                            </textarea>
                            <div style="height: 20px;"></div>
                            Chúng ta sẽ lấy giá trị của phần tử thứ 3, thứ 6, thứ 10 lần lượt như sau:
                            <div style="height: 20px;"></div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="14">
    #include <iostream>  
    using namespace std;  
    int main()  
    {  
        int Diem[10] = {1, 3, 4, 5, 6, 1, 9, 4, 10, 5};
        int a3 = Diem[2];
        cout << "Phan tu thu 3 = " << a3 << endl;
        int a6 = Diem[6];
        cout << "Phan tu thu 6 = " << a6 << endl;
        int a10 = Diem[9];
        cout << "Phan tu thu 10 = " << a10 << endl;
    }
                             </textarea>
                             <div style="height: 20px;"></div>
                             Kết quả của chương trình trên là:
                             <div style="height: 20px;"></div>
                             <div style="justify-content: center;display: flex;">
                                <img class="w-75" src="./image12/2.jpg" alt="">
                             </div>
                             <div style="height: 20px;"></div>
                             Chúng ta muốn truy xuất lần lượt tất cả các phần tử của mảng chúng ta có thể sử dụng vòng lặp trong c++ như while, for, do while. Bắt đầu từ 0 đến kích cở mảng -1.
                             <div style="height: 20px;"></div>
                             <h3 id="div-bai1-2-4" style="color: #0b7ae9;">Ví dụ mảng một chiều</h3>
                             <div style="height: 20px;"></div>
                             Chúng ta cùng xem một ví dụ đơn giản về mảng một chiều trong C++ như sau:
                             <div style="height: 20px;"></div>
                             <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="13">
    #include <iostream>  
    using namespace std;  
    int main()  
    {  
        int arr[8] = {3, 5, 1, 3, 5, 6, 8, 12}; 
        cout << "Danh sach cac phan tu cua mang arr nhu sau: " << endl;
        for (int i = 0; i < 8; i++)    
        {    
                cout << "   arr[" << i + 1 << "] = " << arr[i] << endl;    
        }    
    }
                              </textarea>
                              <div style="height: 20px;"></div>
                              Và kết quả sau khi thực thi đoạn code trên:
                              <div style="height: 20px;"></div>
                              <div style="justify-content: center;display: flex;">
                                <img class="w-75" src="./image12/3.jpg" alt="">
                              </div>
                              <div style="height: 20px;"></div>
                              Chúng ta thử truy xuất phần tử ở ngoài phạm vi khai báo của mảng như sau:
                              <div style="height: 20px;"></div>
                              <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="13">
    #include <iostream>  
    using namespace std;  
    int main()  
    {  
        int Diem[10] = {1, 3, 4, 5, 6, 1, 9, 4, 10, 5};
        int a11 = Diem[10];
        cout << "Phan tu thu 11 = " << a11 << endl;
        int a = Diem[-5];
        cout << "Phan tu thu -1 = " << a << endl;
    }
                              </textarea>
                              <div style="height: 20px;"></div>
                              Và kết quả sau khi thực thi đoạn code trên:
                              <div style="height: 20px;"></div>
                              <div style="justify-content: center;display: flex;">
                                <img class="w-75" src="./image12/4.jpg" alt="">
                              </div>
                              <div style="height: 20px;"></div>
                              Như vậy trong C++ không có báo lỗi biên dịch khi truy xuất phần tử mảng ra khỏi phạm vi khai báo của mảng, tuy nhiên khi thực thi thì kết quả không như chúng ta mong đợi.
                             <div style="height: 50px;"></div>
                   <!-- Phần 3 bài 2 -->
                    <div>
                        <div id="div-bai1-3" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">3. Cách khai báo mảng nhiều chiều trong C++</h1></div>

                        <div style="height: 20px;"></div>
                        Cũng giống như mảng một chiều, mảng nhiều chiều cũng bao gồm nhiều phần tử, tuy nhiên mỗi phần tử là một mảng 1 chiều. Và trong phạm vi bài học này chúng ta chỉ tìm hiểu đến mảng hai chiều thôi nhé, vì việc xử lý mảng 3 hay 4 chiều là rất phức tạp.
                        <div style="height: 20px;"></div>
                        <h3 id="div-bai1-3-1" style="color: #0b7ae9;">Cú pháp mảng nhiều chiều</h3>
                        <div style="height: 20px;"></div>
                        Cú pháp của mảng nhiều chiều trong C++ như sau:
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="2">
   type name[size1][size2]...[sizeN];
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            Ví dụ chúng ta có mảng 4 chiều có các kích cở lần lượt là 3, 4, 2, 7 sẽ được khai báo như sau:
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="2">
    int ToaDo[3][4][2][7]
                            </textarea>
                        </div>
                        <div style="height: 50px;"></div>
                    <!-- Phần 4 bài 2 -->
                    <div>
                        <div id="div-bai1-4" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">4. Cách khai báo mảng hai chiều trong C++</h1></div>

                        <div style="height: 20px;"></div>
                        Trong bài học hôm nay chúng ta chỉ tìm hiểu mảng 2 chiều trong C++ thôi nhé. Mảng nhiều hơn 2 chiều thực tế rất ít sử dụng, các bạn có thể tìm hiểu thêm trên mạng nhé.
                        <div style="height: 20px;"></div> 
                        <h3 id="div-bai1-4-1" style="color: #0b7ae9;">Khai báo mảng 2 chiều</h3>
                        <div style="height: 20px;"></div> 
                        Cấu trúc của mảng 2 chiều giống như một ma trận, nó có chiều dài và chiều rông, và số phần tử của mảng chính là tích của chiều dài nhân với chiều rộng.
                        <div style="height: 20px;"></div> 
                        Mảng 2 chiều là một hình thức đơn giản nhất của mảng nhiều chiều, bản chất của mảng 2 chiều là 2 mảng 1 chiều.
                        <div style="height: 20px;"></div> 
                        Mảng 2 chiều trong C++ được khai báo theo cú pháp như sau:
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="2">
   kieudulieu  tenmang[kichco1][kichco2];
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        Trong đó:
                        <div style="height: 20px;"></div>
                        <ul>
                            <li>KieuDuLieu: Là kiểu dữ liệu của phần tử trong mảng, kiểu dữ liệu có thể là một trong các kiểu dữ liệu được hổ trợ trong C++.</li>
                            <div style="height: 10px;"></div>
                            <li>TenMang: Là tên hợp lệ trong C++.</li>
                        </ul>
                        <div style="height: 20px;"></div>
                        Giả sử chúng ta có mảng a có 3 dòng và 4 cột được minh họa như hình dưới đây:
                        <div style="height: 20px;"></div>
                        <div style="justify-content: center;display: flex;">
                            <img class="w-75" src="./image12/5.jpg" alt="">
                        </div>
                        <div style="height: 20px;"></div>
                        <h3 id="div-bai1-4-2" style="color: #0b7ae9;">Khởi tạo giá trị mảng hai chiều</h3>
                        <div style="height: 20px;"></div>
                        Giả sử chúng ta khỏi tạo giá trị cho mảng a có 3 dòng và 4 cột như sau:
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="6">
    int a[3][4] = {  
        {0, 1, 2, 3} ,  
        {4, 5, 6, 7} ,  
        {8, 9, 10, 11}
    };
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            Hoặc chúng ta cũng có thể khởi tạo giá trị trên như sau:
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="2">
   int a[3][4] = {0,1,2,3,4,5,6,7,8,9,10,11};
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        <h3 id="div-bai1-4-3" style="color: #0b7ae9;"> Truy xuất phần tử mảng hai chiều</h3>
                        <div style="height: 20px;"></div>
                        Trong C++, để truy xuất phần tử mảng thông qua chỉ số của dòng và chỉ số của cột như sau:
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="2">
    int test = a[2][3];
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        <h3 id="div-bai1-4-4" style="color: #0b7ae9;">Ví dụ mảng hai chiều</h3>
                        <div style="height: 20px;"></div>
                        Chúng ta cùng xem xét một ví dụ đơn giản về mảng 2 chiều trong C++ như sau:
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="20">
    #include <iostream>
    using namespace std;
    
    int main () {
        int a[3][2] = { {0,0}, {2,2}, {5,5}}; //khai bao va khoi tao gia tri cho mang a gom 3 dong va 2 cot
            
        cout << "danh sach cac phan tu trong mang a nhu sau: " << endl;
        
        // duyet qua tung phan tu cua mang a
        for ( int i = 0; i < 3; i++ ) {
            for ( int j = 0; j < 2; j++ ) {
                cout << "   a[" << i << "][" << j << "] =  " << a[i][j] << endl;
            }
         }   
    
        return 0;
    }
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        Và kết quả sau khi thực thi đoạn code trên như sau:
                        <div style="height: 20px;"></div>
                        <div style="justify-content: center;display: flex;">
                            <img class="w-75" src="./image12/6.1.jpg" alt="">
                        </div>
                        <div style="height: 50px;"></div>
                    <!-- Phần 5 -->
                    <div>
                        <div id="div-bai1-5" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">5. Kết luận</h1></div>
                        <div style="height: 20px;"></div>
                        Như vậy là chúng ta đã tìm hiểu xong về cách khai báo mảng trong C++ rồi. Trong bài này chúng ta chỉ cần nhớ cách khai báo mảng, khởi tạo giá trị cho phần tử mảng và truy xuất phần tử mảng như thế nào. Vì màng trong C++ rất thường xuyên được sử dụng, các bạn nhớ ghi nhớ nhé.
                        <div style="height: 20px;"></div>
                        Vậy chúng ta kết thúc bài học này ở đây.
                        <div style="height: 50px;"></div>
                    <div style="float: left;width: 100%;display: flex;">
                        <p style="width: 80%;"><a href="./bai11(lt).php">⇦ Bài trước </a></p>
                        <p style="width: 20%;"><a href="./index.php">END</a></p>
                    </div>
                        </div>
                   <div style="height: 50px;"></div>
                    </div>
                    </div>
                    </iostream>
                    </textarea>
                    </div>
                   <!-- sửa tới đây -->
                    </p>
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