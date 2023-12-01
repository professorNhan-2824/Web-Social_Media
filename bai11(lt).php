<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vòng lặp for trong C++ (có bài tập thực hành)</title>
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
                    <b style="font-size: 55px;">Vòng lặp for trong C++ (có bài tập thực hành)</b>
                    <div style="height: 20px;"></div>
                    <hr>
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Trong bài này chúng ta sẽ cùng tìm hiểu về <b>vòng lặp for</b>  trong C++, kết thúc bài học mình cũng có soạn một số bài tập vòng lặp for trong C++ có lời giải nhé..                    
                    </p>
                    <p style="font-size: 25px;">
                        Vòng lặp là một khái niệm khá trừu tượng, nó thể hiện cho một hành động được lặp đi lặp lại nhiều lần và sẽ có một số lần lặp cụ thể.         </p>             
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Ví dụ hằng ngày các em học sinh sẽ đi học, đó là một hành động được lặp đi lặp lại nhiều lần trong 9 tháng, và điều kiện dừng vòng lặp là khi đến mùa hè. Đó là thực tế, còn trong lập trình C++ thì như thế nào? Chúng ta cùng tìm hiểu ngay nhé.
                    </p>
                    <div style="height: 20px;"></div>
                    <div style="background-color: rgb(214, 209, 209);">
                        <p style="padding-left: 10px;">MỤC LỤC</p>
                        <ul id="menu-bai1">
                            <li><a href="#div-bai1-1">1. Cấu trúc vòng lặp for trong C++</a>
                                <li style="padding-left: 25px;"><a href="div-bai1-1-1">Cú pháp vòng lặp for</a></li>
                                <li style="padding-left: 25px;"><a href="div-bai1-1-2">Lưu đồ hoạt động</a></li>
                            </li>
                            <li><a href="#div-bai1-2">2. Ví dụ vòng lặp for trong C++</a></li>
                            <li><a href="#div-bai1-3">3. Vòng lặp for lồng nhau trong C++</a></li>
                            <li><a href="#div-bai1-4">4. Vòng lặp for bị lặp vô hạn</a></li>
                            <li><a href="#div-bai1-5">5. Khởi tạo nhiều biến điều khiển trong vòng lặp for</a></li>
                            <li><a href="#div-bai1-6">6. Vòng lặp for bị khuyết các tham số</a></li>
                            <li><a href="#div-bai1-7">7. Lặp qua các phần tử mảng bằng vòng lặp for C++</a></li>
                        </ul>
                    </div>
                    <div style="height: 50px;"></div>
                    <!-- Phần 1 bài 1 -->
                   <div>
                        <div id="div-bai1-1" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">1. Cấu trúc vòng lặp for trong C++</h1></div>
                        
                        <div style="height: 20px;"></div>
                        <div>
                            <p style="font-size: 25px;">
                                Vòng lặp for trong C++ dùng để lặp lại một đoạn code nào đó theo số lần lặp nhất định. Thường thì ta sẽ biết trước được tổng số lần lặp, và giá trị lặp sẽ là tăng dần hoặc giảm dần theo một bước nhảy xác định.    
                            </p>                        
                            
                            <div style="height: 20px;"></div>
                        <h2><b id="div-bai1-1-1" style="color: #0b7ae9;"> Cú pháp vòng lặp for</b></h2>
                        <div style="height: 20px;"></div>
                        <div>Cú pháp của vòng lặp for trong C++ như sau:</div>
                        <div style="height: 20px;"></div>
                        <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="4">
    for ( init; condition; increment ) {
    statement(s);
    }
                        </textarea>
                        <div style="height: 20px;"></div>
                        <div>Trong đó:</div>
                        <div style="height: 20px;"></div>
                        <ul>
                            <li><b>init:</b>  là tham số dùng để khai báo và khởi tạo biến điều khiển và chỉ được chạy một lần duy nhất trong vòng lặp for.</li>
                            <div style="height: 10px;"></div>
                            <li><b>condition:</b>  là điều kiện để quyết định vòng lặp tiếp tục hay kết thúc.</li>
                            <div style="height: 10px;"></div>
                            <li><b> increment:</b> biến dùng để tăng số đếm vòng lặp.</li>
                            <div style="height: 10px;"></div>
                            <li><b>statement:</b>  Các câu lệnh bên trong vòng lặp for sẽ được thực thi khi điều kiện đúng.</li>
                        </ul>
                        <div style="height: 20px;"></div>
                        <div>Cả 3 tham số này là không bắt buộc, chúng ta có thể bỏ trống bất cứ tham số nào. Tuy nhiên chúng ta không được bỏ dấu <strong style="background-color: rgb(206, 204, 204);"> ;</strong> trong cú pháp của vòng lặp <strong style="background-color: rgb(206, 204, 204);">for</strong>  .</div>
                        <div style="height: 20px;"></div>
                        <div>Trước khi đi vào các ví dụ cụ thể chúng ta cùng tìm hiểu về luồng điều khiển của vòng lặp for trong cú pháp trên như sau:</div>
                        <div style="height: 20px;"></div>
                        <ul>
                            <li>Bước init được thực hiện trước tiên và chỉ được thực hiện đúng duy nhất một lần. Bước này cho phép bạn khai báo và khởi tạo giá trị cho biến điều khiển trong vòng lặp <strong style="background-color: rgb(206, 204, 204);">for</strong> .</li>
                            <li>Tiếp theo, kiểm tra condition. Nếu condition là đúng, phần thân của vòng lặp <strong style="background-color: rgb(206, 204, 204);">for</strong>  sẽ được thực thi. Nếu condition là sai, phần thân của vòng lặp <strong style="background-color: rgb(206, 204, 204);">for</strong>  sẽ không được thực thi và vòng lặp <strong style="background-color: rgb(206, 204, 204);">for</strong>  kết thúc.</li>
                            <li>Sau khi phần thân của vòng lặp <strong style="background-color: rgb(206, 204, 204);">for</strong>  được thực thi, thì luồng điều khiển sẽ nhảy trở lại câu lệnh increment.</li>
                            <li>Kiểm tra condition lại lần nữa. Nếu condition là đúng, thực thi đoạn code bên trong vòng lặp và quá trình lặp lại cứ tiếp tục (phần thân của vòng lặp, sau đó đến increment, và sau đó lại kiểm tra condition). Sau khi condition trở thành sai, vòng lặp <strong style="background-color: rgb(206, 204, 204);">for</strong>  chấm dứt.</li>
                        </ul>
                        <div style="height: 20px;"></div>
                        <div>Để hiểu rõ hơn về luồng điều kiển của vòng lặp for trong C++. Chúng ta cùng xem lưu đồ hoạt động của nó trong phần tiếp theo nhé.</div>
                        <div style="height: 20px;"></div>
                        <h2><b id="div-bai1-1-1" style="color: #0b7ae9;"> Lưu đồ hoạt động</b></h2>
                        <div style="height: 20px;"></div>
                        <div>Sau đây là lưu đồ hoạt động của vòng lặp for trong C++.</div>
                        <div style="height: 20px;"></div>
                        <div style="justify-content: center;display: flex;"><img class="w-75" src="./image_11/for.png" alt=""></div>
                   <div style="height: 50px;"></div>
                   <!-- Phần 2 bài 1 -->
                   <div>
                        <div id="div-bai1-2" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">2. Ví dụ vòng lặp for trong C++</h1></div>
                        <div style="height: 20px;"></div>
                        <div>
                           <b> Ví dụ 1</b>: Mình sẽ lấy một ví dụ về vòng lặp for đơn giản nhất đó là in các giá trị từ 1 đến 4 ra màn hình.                       <div style="height: 20px;"></div>
                        <div style="height: 20px;"></div>
                        <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="12">
    #include <iostream>
    using namespace std;
    
    int main () {
    
        for( int i = 1; i < 5; i = i + 1 ) {
        cout << "Gia tri cua bien i: " << i << endl;
        }
    
        return 0;
    }
                        </textarea>
                        <div>
                            Và kết quả sau khi thực thi đoạn code trên:
                        </div>
                        <div style="height: 20px;"></div>
                        <div style="justify-content: center;display: flex;"><img class="w-75" src="./image_11/ex_for.jpg" alt=""></div>
                        <div style="height: 20px;"></div>
                        <div>
                            Mình xin được giải thích kết quả trên như sau:                        </div>
                        <div style="height: 20px;"></div>
                        <ul>
                            <li>Khởi tạo biến i = 1, kiểm tra điều kiện 1 < 5, điều kiện đúng nên thực thi đoạn code bên trong vòng lặp for</li>
                            <div style="height: 10px;"></div>
                            <li>Tăng biến i lên 1, lúc này i = 2, kiểm tra điều kiện 2 < 5, điều kiện vẫn còn đúng nên tiếp tục thực thi đoạn code bên trong vòng lặp for</li>
                            <div style="height: 10px;"></div>
                            <li>Tương tự tiếp tục tăng biến i lên 1, lúc này i = 3, 4, kiểm tra điều kiện 3, 4 < 5, điều kiện vẫn còn đúng nên tiếp tục thực thi đoạn code bên trong vòng lặp for</li>
                            <div style="height: 10px;"></div>
                            <li>Khi biến i tăng lên bằng 5, kiểm tra điều kiện 5 < 5 là sai, nên kết thúc vòng lặp for.</li>
                        </ul>
                   <div style="height: 50px;"></div>
                   <!-- Phần 3 bài 2 -->
                    <div>
                        <div id="div-bai1-3" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">3. Vòng lặp for lồng nhau trong C++</h1></div>

                        <div style="height: 20px;"></div>
                        Một vòng lặp for nằm trong một vòng lặp for khác, chúng ta gọi đó là lồng lặp for lồng nhau. Chúng ta cùng xem ví dụ về vòng lặp for lồng nhau sau đây:                        
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="13">
    #include <iostream>  
    using namespace std;  
        
    int main () {  
        for(int i=1;i<=3;i++) {      
            for(int j=1;j<=3;j++) {      
                cout << "Gia tri i = " << i << " , j = " << j<< "\n";      
            }     
        } 
        return 0;
    }
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            Và kết quả sau khi thực thi đoạn code trên:
                        </div>
                        <div style="height: 20px;"></div>
                        <div style="justify-content: center; display: flex;">
                            <img class="w-75" src="./image_11/for_long_nhau.jpg" alt="">
                        </div>
                        <div style="height: 20px;"></div>
                        Các bạn có thể có 3, 4 hoặc nhiều hơn vòng lặp for lồng nhau như sau:
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="20">
    #include <iostream>  
    using namespace std;  
        
    int main () {  
        for(int i=1;i<=3;i++) {   
            cout << "Vong lap for cap 1" << "\n";
            for(int j=1;j<=3;j++) {      
                cout << "Vong lap for cap 2" << "\n";
                for(int j=1;j<=3;j++) {      
                    cout << "Vong lap for cap 3" << "\n";   
                    for(int j=1;j<=3;j++) {      
                        cout << "Vong lap for cap 4" << "\n";      
                    }  
                }  
            }     
        } 
        return 0;
    }
                            </textarea>
                        <div style="height: 20px;"></div>
                        <div>Và kết quả sau khi thực thi đoạn code trên:Tuy nhiên trong thực tế các bạn nên hạn chế dùng vòng lặp for lồng nhau vì nó làm chậm chương trình của các bạn.</div>
                        <div style="height: 50px;"></div>
                    <!-- Phần 4 bài 2 -->
                    <div>
                        <div id="div-bai1-4" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">4. Vòng lặp for bị lặp vô hạn</h1></div>

                        <div style="height: 20px;"></div>
                        Nếu chúng ta sử dụng dấu chấm phẩy kép trong vòng lặp for, nó sẽ được thực hiện vô hạn lần. Chúng ta cùng xem ví dụ đơn giản sau:
                        <div style="height: 20px;"></div> 
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="10">
    #include <iostream>  
    using namespace std;  
        
    int main () {  
        for (; ;) {    
            cout << "vong lap vo han";    
        }    
    }
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        Chúng ta cùng xem một ví dụ khác về vòng lặp for vô hạn nữa, đó là điều kiện luôn luôn đúng, ví dụ như sau:
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="10">
    #include <iostream>  
    using namespace std;  
        
    int main () {
        for(int i=5;i>0;i++){      
            cout << "vong lap for vo han"; 
        }  
    }
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                           <b>Lưu ý</b> : Các bạn không nên sử dụng vòng lặp for vô hạn trong chương trình nhé, rất là quy hiểm. Để tránh vòng lặp for chạy vô hạn các bạn nên xem xét kỹ lưởng điều kiện dừng của vòng lặp, hãy chắc chắn rằng sau một số vòng lặp nhất định điều kiện dừng của các bạn đưa ra sẽ sai và kết thúc vòng lặp.
                        </div>
                        <div style="height: 50px;"></div>
                    <!-- Phần 5 -->
                    <div>
                        <div id="div-bai1-5" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">5. Khởi tạo nhiều biến điều khiển trong vòng lặp for</h1></div>
                        <div style="height: 20px;"></div>
                        Chúng ta có thể khởi tạo giá trị cho nhiều biến điều khiển của vòng lặp for, các biến ngăn cách nhau bởi dấu phẩy như ví dụ sau đây:                        <b> Ví dụ:</b> In ra giá trị của biến
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="10">
    #include <iostream>  
    using namespace std;  
        
    int main () {
        for(int i = 1, j = 5, z = 1; i < 5; i++, j++, z++) {      
            cout << "gia tri i = " << i << ", j = " << j << ", z = " << z <<endl;
        }  
    }
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            Và kết quả sau khi thực thi đoạn code trên:                        
                        </div>
                        <div style="height: 20px;"></div>
                        <div style="justify-content: center;display: flex;">
                            <img class="w-75" src="./image_11/for_init.jpg" alt="">
                        </div>
                        <div style="height: 50px;"></div>
                        <!-- Phần 6 -->
                        <div>
                            <div id="div-bai1-6" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">6. Vòng lặp for bị khuyết các tham số</h1></div>
                            <div style="height: 20px;"></div>
                            Chúng ta cùng xem một ví dụ đơn giản về vòng lặp for bị khuyết các tham số trong C++ như sau:                            
                            <div style="height: 20px;"></div>
                            <div>
                                <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="27">           
    #include <iostream>  
    using namespace std; 
    
    int main() { 
        int i = 1;
        cout << "vong lap for thieu tham so thu nhat: " << endl; 
        for(;i<=3;i++){      
        cout << "gia tri bien i = " << i << "\n";      
        } 
        
        cout << "vong lap for thieu tham so thu ba: " << endl; 
        for(int j = 1;j <= 3;) {      
            cout << "gia tri bien j = " << j << "\n"; 
            j++;
        }
        
        cout << "vong lap for thieu tham so thu nhat va thu 3: " << endl; 
        int z = 1;
        for(;z <= 3;) {      
            cout << "gia tri bien z = " << z << "\n";
            z++;
        } 
    }                           

                                </textarea>
                            </div>
                            <div style="height: 20px;"></div>
                            <div>Và kết quả của đoạn code trên:
                            </div>
                            <div style="height: 20px;"></div>
                            <div style="justify-content: center;display: flex;">
                                <img class="w-75" src="./image_11/6.jpg" alt="">
                            </div>
                            <div style="height: 20px;"></div>
                            <b>Lưu ý:</b>  Nếu vòng lặp for thiếu tham số thứ hai sẽ trở thành vòng lặp vô hạn như ở ví dụ 3.
                            <div style="height: 50px;"></div>
                        </div>
                        <!-- Phần 7 -->
                        <div>
                            <div id="div-bai1-7" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">7. Lặp qua các phần tử mảng bằng vòng lặp for C++</h1></div>
                            <div style="height: 20px;"></div>
                            Mảng là một kiểu dữ liệu có nhiều phần tử, mỗi phần tử có một số chỉ mục duy nhất và được sắp xếp thứ tự tăng dần và bắt đầu từ 0. Vì vậy ta có thể sử dụng vòng lặp for để duyệt qua các phần tử một cách dễ dàng.   
                            <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="13">
    #include <iostream>
    using namespace std;
    
    int main()
    {
        int numbers[6] = {1, 3, 5, 7, 9, 11};
        for (int i = 0; i < 6; i++){
        cout << numbers[i] << endl;     
        }
        return 1;
    }
                            </textarea>
                        </div>                         
                            <div style="height: 20px;"></div>
                            Kết quả:
                            <div style="height: 20px;"></div>
                            <div style="justify-content: center;display: flex;">
                                <img class="w-75" src="./image_11/7.jpg" alt="">
                            </div>
                            <div style="height: 20px;"></div>
                            <b>Kết luận:</b>  Như vậy chúng ta đã tìm hiểu xong về vòng lặp for trong C++. Ý nghĩa, cấu trúc và cách sử dụng của vòng lặp for trong C++ thì khá đơn giản như mình đã giải thích ở trên. Vì vậy các bạn không cần phải lo lắng khi mới tiếp cận nhé. Một điểm cần lưu ý khi các bạn sử dụng vòng lặp for đó là các bạn hạn chế sử dụng vòng lặp for lồng nhau, và nên tránh vòng lặp for vô hạn nhé.
                            <div style="height: 50px;"></div>
                    <div style="float: left;width: 100%;display: flex;">
                        <p style="width: 80%;"><a href="./bai10(lt).php">⇦ Bài trước </a></p>
                        <p style="width: 20%;"><a href="./bai12(lt).php">Bài tiếp theo ⇨</a></p>
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