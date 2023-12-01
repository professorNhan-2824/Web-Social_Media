<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cách khai báo biến trong C++</title>
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
                    <b style="font-size: 55px;">Cách khai báo biến trong C++</b>
                    <div style="height: 20px;"></div>
                    <hr>
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Giới thiệu về biến và cách khai báo biến trong C++, giúp bạn hiểu được khái niệm biến trong C++ là gì? Và cú pháp khai báo biến như thế nào?   </p>                 
                    <p style="font-size: 25px;">
                        C++ là một ngôn ngữ bậc trung nằm giữa bậc cao và bậc thấp, nó là ngôn ngữ có tính minh bạch, rõ ràng trong việc khai báo và sử dụng biến, nghĩa là nếu bạn khai báo một biến kiểu chuỗi thì bạn không thể gán cho nó là kiểu số được. Vì vậy bạn cần nắm rõ cú pháp khai báo để sử dụng cho đúng.
                    </p>             
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Trong bài này chúng ta sẽ tìm hiểu về biến và cách khai báo biến trong C++ và sử dụng hai lệnh <b style="color: #0b7ae9;">cin và cout</b>  để lấy dữ liệu nhập từ bàn phím và in dữ liệu lên màn hình.            </p>
                    <div style="height: 20px;"></div>
                       Trong bài này chúng ta tìm hiểu hai lệnh thường sử dụng nhất để nhập xuất đó là cin và cout. Trước tiên ta tìm hiểu về <b>cout.</b>                 </p>
                    <div style="height: 20px;"></div>
                    <div style="background-color: rgb(214, 209, 209);">
                        <p style="padding-left: 10px;">MỤC LỤC</p>
                        <ul id="menu-bai1">
                            <li><a href="#div-bai1-1">1. Khai báo biến trong C++ là gì?</a></li>
                            <li><a href="#div-bai1-2">2. Cú pháp khai báo biến trong C++</a></li>
                            <li><a href="#div-bai1-3">3. Quy tắc đặt tên biến trong C++</a></li>
                            <li><a href="#div-bai1-4">4. Gán giá trị cho biến C++</a></li>
                            <li><a href="#div-bai1-5">5. In giá trị của biến C++ ra màn hình</a></li>
                            <li><a href="#div-bai1-6">6. Thao tác nhập xuất với biến</a></li>
                            <li><a href="#div-bai1-7">7. Lời kết</a></li>
                        </ul>
                    </div>
                    <div style="height: 50px;"></div>
                    <!-- Phần 1 bài 1 -->
                   <div>
                        <div id="div-bai1-1" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">1. Khai báo biến trong C++ là gì?</h1></div>
                        
                        <div style="height: 20px;"></div>
                        <div>
                            <p style="font-size: 25px;">
                                Biến trong C++ được dùng để lưu trữ một giá trị nào đó, có thể là một chuỗi, một con số, hoặc một danh sách.                            <div style="height: 20px;"></div>
                             Giả sử bạn có một cái bao và bạn có thể sử dụng cái bao đó với nhiều mục đích khác nhau như dùng để chứa gạo, chưa ngô, chứa khoai, ... thì lúc này cái bao đó được ví như là một biến trong C++.                      </i>
                            <div style="height: 20px;"></div>
                            <div>
                                Đó là ví dụ trong thực tế còn trong lập trình thì biến sẽ được lưu trữ tại một vị trí nào đó trong bộ nhớ của máy tính. Khi muốn sử biến nào thì hệ thống sẽ tìm trong bộ nhớ xem có tồn tại biến đó không? Nếu tồn tại thì sử dụng bình thường, ngược lại thì chương trình sẽ báo lỗi vì bạn đã sử dụng một biến chưa được khởi tạo.
                            </div>
                            
                   <div style="height: 50px;"></div>
                   <!-- Phần 2 bài 1 -->
                   <div>
                        <div id="div-bai1-2" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">2. Cú pháp khai báo biến trong C++</h1></div>
                        <div style="height: 20px;"></div>
                        <div>
                            Vì chúng ta chưa học <b style="color: #0b7ae9;"> các kiểu dữ liệu trong C++</b> nên nếu bạn không hiểu các ví dụ dưới đây thì hãy đọc sơ lược bài tiếp theo rồi quay lại bài này nhé. Còn không thì mình sẽ nói một chút để giúp bạn hiểu nhanh hơn.                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <p style="font-size: 25px;">Trong C++ có các kiểu dữ liệu cơ bản như:</p>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <ul>
                                <li><b>Chuỗi - string:</b>  Là một chuỗi ký tự text, được bao quanh bởi dấu nháy đơn hoặc nháy kép.</li>
                                <li><b>Số thực - float:</b>  Là kiểu số thực, tức là số lẻ (có dấu chấm phẩy động) như: 0.1, 2.4, ...</li>
                                <li><b>Số nguyên - int:</b>  Là kiểu số không lẻ như: 0, 1, 2, 3, 4 ...</li>
                            </ul>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            Khi bạn khai báo biến thì phải khai báo luôn kiểu dữ liệu cho nó nhé.
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            Cú pháp khai báo biến trong C++ như sau:                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="2">
kieu_du_lieu  ten_bien;
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            Muốn khai báo nhiều biến cùng lúc và cùng kiểu dữ liệu thì làm như sau:                        </div>
                            <div style="height: 20px;"></div>
                            <div>
                                <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="2">
kieu_du_lieu  ten_bien1, ten_bien2, ten_bien3;
                                </textarea>
                            </div>
                        <div>
                            <b>Ví dụ:</b>  Khai báo biến kiểu number (tức là kiểu int, int là viết tắt của interger)                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="2">
int namsinh;
                            </textarea>
                        </div>
                       
                        <div>
                             Khai báo nhiều biến cùng lúc:
                            <div style="height: 20px;"></div>
                            <div>
                                <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="2">
int so1, so2, so3, so4;
                                </textarea>
                            </div>
                        <div>
                        <div style="height: 20px;"></div>
                        <div>
                            Tùy vào mục đích lưu trữ mà bạn chọn kiểu dữ liệu cho phù hợp. Ví dụ:                         </div>
                         <div style="height: 20px;"></div>
                        <div>
                            <ul>
                                <li>Bạn cần lưu trữ thông tin năm sinh của sinh viên thì phải chọn kiểu int, vì thực tế năm sinh là các số nguyên.</li>
                                <li>Cần lưu kết quả của phép chia thì phải khai báo kiểu số thực, vì kết quả phép chia có thể dư phần lẻ</li>
                                <li>Cần lưu một lời chúc mừng sinh nhật thì phải sử dụng kiểu chuỗi.</li>
                            </ul>
                        </div>
                        <div style="height: 20px;"></div>
                    </div>
                   <div style="height: 50px;"></div>
                   <!-- Phần 3 bài 2 -->
                    <div>
                        <div id="div-bai1-3" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">3. Quy tắc đặt tên biến trong C++</h1></div>

                        <div style="height: 20px;"></div>
                        Tên biến rất quan trọng, vì vậy bạn không được đặt nó một cách quá chủ quan mà phải tuân theo những quy tắc sau:                        
                        <div style="height: 20px;"></div>
                        <div>
                            <ul style="padding-left: 40px;">
                                <li>Tên biến là các chữ cái in thường hoặc in hoa và không có dấu</li>
                                <div style="height: 20px;"></div>
                                <li>Không được sử dụng các ký tự đặc biệt, ngoại trừ ký tự gạch dưới <b style="background-color: rgb(206, 204, 204);width: 50px;"> _ </b> .</li>
                                <div style="height: 20px;"></div>
                                <li>Có thể sử dụng số, nhưng nó không được đứng ở vị trí đầu tiên.</li>
                                <div style="height: 20px;"></div>
                            </ul>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <b> Ví dụ:</b> Một số cách khai báo biến đúng / sai.                    <div style="height: 50px;">
                        </div>
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="10">
int main()
{
    int nhan; // Dung
    int _nhan; // Dung
    int nhan9; // Dung
    int nhan*do; // Sai - vi ky tu dac biet
    int 9nhan; // Sai vi chu so dung o vi tri so 1
    return 1;
}
                            </textarea>
                        </div>
                    <!-- Phần 4 bài 2 -->
                    <div>
                        <div id="div-bai1-4" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">4. Gán giá trị cho biến C++</h1></div>

                        <div style="height: 20px;"></div>
                        Để gán giá trị cho biến thì ta sử dụng toán tử gán =. Mình sẽ viết một bài chi tiết hơn về các toán tử này.                       
                        <div style="height: 20px;"></div>
                        <b> Ví dụ:</b> Gán giá trị <b>1990</b>  cho biến namsinh.
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="3">
int namsinh;
namsinh = 1990;
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            Ngoài ra ta cũng có thể gán giá trị cho biến ngay lúc khởi tạo. Với ví dụ trên thì ta viết lại như sau:                 <div style="height: 50px;">
                        </div>
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="2">
int namsinh = 1990;
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                    <!-- Phần 5 -->
                    <div>
                        <div id="div-bai1-5" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">5. In giá trị của biến C++ ra màn hình</h1></div>
                        <div style="height: 20px;"></div>
                        Biến sẽ được lưu trữ tại một vị trí trong bộ nhớ máy tính nên để lấy giá trị của biến ta chỉ cần thông qua tên biến là được. Ta sử dụng hàm <b style="color: #0b7ae9;">cout</b>  để in.                    
                        <div style="height: 20px;"></div>
                        <b> Ví dụ:</b> In ra giá trị của biến
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="10">
#include <iostream.h>
using namespace std;
                                     
void main ()
{   
    int namsinh = 1990;
    cout << "Nam sinh cua ban la : " << namsinh << endl;
}
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            Bạn nhấn F5 để chạy chương trình. Giả sử mình nhập năm sinh 1989 thì màn hình sẽ như sau:                        
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <img class="w-100" src="./image_4/thao-tac-nhap-xuat-bien-trong-c++.png" alt="">
                        </div>
                        <div style="height: 50px;"></div>
                        <!-- Phần 6 -->
                        <div>
                            <div id="div-bai1-6" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">6. Thao tác nhập xuất với biến</h1></div>
                            <div style="height: 20px;"></div>
                            Bây giờ ta làm một ví dụ nhập xuất với biến.                            <div style="height: 20px;"></div>
                            <b> Ví dụ:</b>Viết chương trình nhập vào năm sinh của bạn và in năm sinh đó lên màn hình, trong đó năm sinh được nhập từ bàn phím.
                            <div style="height: 20px;"></div>
                            <div>
                                Để nhập năm sinh từ bàn phím thì ta sử dụng lệnh cin, còn để xuất năm sinh thì ta sử dụng lệnh <b style="color: #0b7ae9;">cout.</b> 
                            </div>
                            <div style="height: 20px;"></div>
                            <div>
                                <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="12">
#include <iostream.h>
using namespace std;
                                         
void main ()
{   
    int namsinh;
    cout << "Nhap nam sinh cua ban: ";
    cin >> namsinh;
    cout << "Nam sinh cua ban la : " << namsinh << endl;
}
                                </textarea>
                            </div>
                            <div style="height: 20px;"></div>
                            <div>
                                Bạn nhấn F5 để chạy chương trình. Giả sử mình nhập năm sinh 1989 thì màn hình sẽ như sau:                        
                            </div>
                            <div style="height: 20px;"></div>
                            <div>
                                <img class="w-100" src="./image_4/thao-tac-nhap-xuat-bien-trong-c++ (1).png" alt="">
                            </div>
                            <div style="height: 50px;"></div>
                        </div>
                        <!-- Phần 7 -->
                        <div>
                            <div id="div-bai1-7" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">7. Lời kết</h1></div>
                            <div style="height: 20px;"></div>
                            Như vậy là bạn đã nắm bắt được cách khai báo và sử dụng biến trong C++. Bạn hãy xem kỹ bài này vì ở các bài tiếp theo chúng ta sử dụng nó khá nhiều đấy.                            <div style="height: 20px;"></div>
                            <div style="height: 20px;"></div>
                            Trong bài này mình có sử dụng kiểu dữ liệu interter <b>(int)</b>  nhưng vấn đề này mình sẽ trình bày trong bài tiếp theo nên nếu bạn chưa hiểu thì hãy tới bài tiếp theo để học nhé.
                        </div>
                            <div style="height: 50px;"></div>
                    <div style="float: left;width: 100%;display: flex;">
                        <p style="width: 80%;"><a href="./bai3(lt).php">⇦ Bài trước </a></p>
                        <p style="width: 20%;"><a href="./bai5(lt).php">Bài tiếp theo ⇨</a></p>
                    </div>
                        </div>
                   <div style="height: 50px;"></div>
                   
                   
                   <!-- sửa tới đây -->
                    </div>
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