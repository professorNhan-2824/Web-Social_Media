<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cấu trúc lệnh switch case trong C++ (có bài tập thực hành)</title>
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
                <b style="font-size: 55px;">Cấu trúc lệnh switch case trong C++ (có bài tập thực hành)</b>
                <div style="height: 20px;"></div>
                <hr>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    Trong bài này chúng ta sẽ tìm hiểu lệnh switch case trong C++, đây là cũng là một lệnh rẻ nhánh rất hữu ích. Cuối bài học mình có tổng hợp một số bài tập <b>switch case</b>  giúp bạn thực hành nữa nhé.                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    Ở bài học trước chúng ta đã cùng tìm hiểu về cấu trúc điều khiển if trong C++ là gì rồi. Trong bài học hôm nay chúng ta sẽ cùng tìm hiểu một cấu trúc điều khiển khác nữa đó là <b>switch case.</b>              </p>
                    <div style="height: 20px;"></div>
                    Vậy cấu trúc điều khiển switch case là gì? Chúng ta cùng tìm hiểu trong nội dung tiếp theo nhé.
                <div style="height: 20px;"></div>
                <div style="background-color: rgb(214, 209, 209);">
                    <p style="padding-left: 10px;">MỤC LỤC</p>
                    <ul id="menu-bai1">
                        <li><a href="#div-bai1-1">1. Cấu trúc lệnh switch case trong C++</a>
                            <li style="padding-left: 70px;"><a href="#div-bai1-1-1"> Cú pháp switch case </a> </li>
                            <li style="padding-left: 70px;"><a href="#div-bai1-1-2"> Lưu đồ hoạt động switch case </a> </li>
                        </li>
                        <li><a href="#div-bai1-2">2. Lưu ý khi sử dụng switch case C++</a></li>
                        <li><a href="#div-bai1-3">3. Ví dụ lệnh switch case trong C++</a></li>
                        <li><a href="#div-bai1-4">4. Kết luận</a></li>
                    </ul>
                </div>
                <div style="height: 50px;"></div>
                <!-- Phần 1 bài 1 -->
               <div>
                    <div id="div-bai1-1" style="background-color:  #0b7ae9;"><h1 style="color: white;padding:10px;">1. Cấu trúc lệnh switch case trong C++</h1></div>
                    <div style="height: 20px;"></div>
                    <div>
                        Lệnh <b>switch case</b>  cũng tương tự như lệnh <b>if else if</b> mà chúng ta đã được học ở bài trước. Nghĩa là nó có nhiều điều kiện, chương trình chúng ta duyệt từng điều khiện từ trên xuống dưới, nếu thõa điều kiện nào thì đoạn code bên trong điều kiện đó sẽ được thực thi.                   </div>
                    <div style="height: 20px;"></div>
                    <h3 style="color: #0b7ae9;" id="div-bai1-1-1">Cú pháp switch case</h3>
                    <div style="height: 20px;"></div>
                    Cú pháp của cấu trúc điều khiển switch case trong C++ như sau:
                    <div style="height: 20px;"></div>
                     <div>
                        <textarea class="w-100" style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="14">
    switch(expression) {
        case constant-expression:
            statement(s);
            break; //optional
        case constant-expression:
            statement(s);
            break; //optional
        
            
        default : //optional
            statement(s);
    }
                        </textarea>
                    </div>
                    <div style="height: 20px;"></div>
                    Trong đó:
                    <div style="height: 20px;"></div>
                    <ul>
                        <li><b style="color: #fe4444;"> expression:</b> Là giá trị được truyền vào để so sánh với các điều kiện constant-expression.</li>
                        <div style="height: 10px;"></div>
                        <li> <b style="color:  #fe4444;"> constant-expression:</b>  Là điều kiện để so sánh với giá trị của expression truyền vào.</li>
                        <div style="height: 10px;"></div>
                        <li> <b style="color:  #fe4444;"> break:</b> Là lệnh để thoát khỏi cấu trúc điều khiển <b>switch case</b> .</li>
                        <div style="height: 10px;"></div>
                        <li> <b style="color:  #fe4444;"> default:</b>  Đây là giá trị mặc định, khi không có giá trị của expression nào thõa điều kiện constant-expression thì đoạn code bên trong default sẽ được thực thi.</li>
                    </ul>
                     <div style="height: 20px;"></div>
                     <b>Ví dụ:</b>  In ra số chẵn và số lẻ.
                     <div style="height: 20px;"></div>
                     <div>
                        <textarea class="w-100" style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="20">
    #include <iostream>
    using namespace std;
    
    int main()
    {
        int number = 3;
    
        switch (number % 2){
            case 0:
                cout << "so chan";
                break;
            case 1:
                cout << "so le";
                break;
        }
        
        return 1;
    }
                        </textarea>
                    </div>
                     <div style="height: 20px;"></div>
                     Trong ví dụ này thì bạn thấy lệnh ở case 1 sẽ được chạy.
                     <div style="height: 20px;"></div>
                     <div>
                        <h2 style="color: #0b7ae9;" id="div-bai1-1-2">Lưu đồ hoạt động switch case</h2>
                     </div>
                     <div style="height: 20px;"></div>
                     <div>
                        Hãy xem lưu đồ hoạt động của cấu trúc điều khiển switch case đưới đây:                    
                    </div>
                    <div style="height: 20px;"></div>
                     <div style="justify-content: center;display: flex;">  
                        <img class="w-50" src="./image_10/lenh_switch_trong_cpp.jpg" alt="">
                    </div>
               </div>
               <div style="height: 50px;"></div>
               <!-- Phần 2 bài 1 -->
               <div>
                    <div id="div-bai1-2" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">2. Lưu ý khi sử dụng switch case C++</h1></div>
                    <div style="height: 20px;"></div>
                    <div>
                         Một số điểm mà các bạn cần lưu ý khi sử dụng lệnh switch case trong C++ như sau:     
                    </div>             
                    <div style="height: 20px;"></div>
                    <div>
                        <b>Thứ nhất.</b>  constant-expression phải cùng kiểu dữ liệu với expression và phải là một giá trị thực như 1, 2, 3, "Good", "Normal" ...                   </div>             
                   <div style="height: 20px;"></div>
                   <div>
                    <b>Thứ hai.</b> Lệnh break bên trong switch case dùng để thoát khỏi cấu trúc điều khiển switch case. Một cấu trúc điều khiển switch case không có break sẽ xét từng điều kiện một, ví dụ như nếu điều kiện 1 thõa thì sẽ thực thi đoạn code bên trong điều kiện 1, tiếp tục xét điều kiện 2 nếu thõa sẽ thực thi đoạn code bên trong điều kiện 2 và cứ tiếp tục cho đến khi kết thúc điều khiển switch case. Nếu switch case có sử dụng break, thì khi gặp break sẽ thoát khỏi cấu trúc điều khiển switch case và sẽ không xét tiếp điều kiện tiếp theo.               </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <b>Thứ ba.</b> Lệnh default trong cấu trúc điều khiển switch case là tùy chọn, tuy nhiên chúng ta nên sử dụng lệnh default bên trong switch case và đặt nó ở cuối của switch, khi không có điều kiện nào thõa thì đoạn code bên trong default sẽ được thực thi, và chúng ta cũng không cần sử dụng lệnh break bên trong default.
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <b>Thứ tư.</b> Không được sử dụng 2 case có giá trị constant-expression trùng nhau.                    
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <b>Thứ năm.</b> Cho phép switch case lồng nhau, tuy nhiên không khuyến khích các bạn sử dụng switch case trùng nhau vì nó làm cho chương trình chúng ta phức tạp và khó đọc hơn thôi.                                   
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <b>Thứ sáu.</b> Nếu có nhiều điều kiện để so sánh thì khuyến khích các bạn sử dụng cấu trúc điều khiển switch case hơn là if else if vì nó làm cho chương trình cùa chúng ta rõ ràng và dễ đọc hơn.                                                         
                    </div>
               </div>
               <div style="height: 50px;"></div>
               <!-- Phần 3 bài 1 -->
               <div>
                    <div id="div-bai1-3" style="background-color:  #0b7ae9;"><h1 style="color: white;padding:10px;">3. Ví dụ lệnh switch case trong C++</h1></div>
                    <div style="height: 20px;"></div>
                    <div>
                        Chúng ta cùng xét một ví dụ phân loại sinh viên dựa vào kết quả điểm học tập. Nếu điểm A thì phân loại là sinh viên xuất xắc, điểm B là sinh viên loại giỏi, điểm C là sinh viên loại khá, điểm D là sinh viên loại trung bình, điểm F là sinh viên loại yếu. Được viết bằng cấu trúc điều khiển switch case như sau:
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <textarea class="w-100" style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="32">
    #include <iostream>
    using namespace std;
    
    int main () {
        
    char diem = 'a';
        
    switch(diem) {
        case 'a':
            cout << "xuat xac" << endl; 
            break;
        case 'b':
            cout << "gioi" << endl; 
            break;
        case 'c':
            cout << "kha" << endl;
            break;
        case 'd':
            cout << "trung binh" << endl;
            break;
        case 'f':
            cout << "yeu" << endl;
            break;
        default:
            cout << "diem khong hop le" << endl;
    }
    cout << "diem cua ban la: " << diem << endl;
    
    return 0;
    }
                        </textarea>
                    </div>
                    <div style="height: 20px;"></div>
                    Và kết quả sau khi thực thi đoạn code trên:
                    <div style="height: 20px;"></div>
                    <div style="justify-content: center;display: flex;">
                        <img class="w-75" src="./image_10/g.png" alt="">
                    </div>
                    <div style="height: 20px;"></div>
                    Ngoài ra, bạn có thể làm thêm những bài tập phía dưới để nâng cao kỹ năng sử dụng lệnh này nhé.
               </div>
               <div style="height: 50px;"></div>
               <!-- Phần 4 bài 1 -->
               <div>
                    <div id="div-bai1-4" style="background-color:  #0b7ae9;"><h1 style="color: white;padding:10px;">4. Kết luận</h1></div>
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Như vậy là chúng ta đã cùng tìm hiểu cấu trúc điều khiển switch case trong C++ là gì rồi, và bạn cũng biết cú pháp và cách sử dụng lệnh switch case trong C++.                    </p>
                    <div style="height: 20px;"></div>
                    Bài này mình xin dừng tại đây, trong bài tiếp theo chúng ta sẽ cùng tìm hiểu về vòng lặp for trong C++. Các bạn nhớ theo dõi tiếp nhé.
                    <div style="height: 20px;"></div>
                    Đừng quên làm những bài tập thực hành dưới đây để nắm vững hơn nhé.
               </div>
                <div style="height: 50px;"></div>
                <div style="float: left;width: 100%;display: flex;">
                    <p id="bt" ><a href="./bai9(lt).php">⇦ Bài trước </a></p>
                    <p id="bs"><a href="./bai11(lt).php">Bài tiếp theo ⇨</a></p>
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