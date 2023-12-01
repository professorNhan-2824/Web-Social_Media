<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cách sử dụng vòng lặp while trong C++</title>
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
                    <b style="font-size: 55px;">Cách sử dụng vòng lặp while trong C++</b>
                    <div style="height: 20px;"></div>
                    <hr>
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Trong bài này mình sẽ hướng dẫn các bạn cách sử dụng vòng lặp while trong C++, sau đó sẽ đính kèm một số bài tập thực hành sau khi học xong bài vòng lặp while này.                    </p>
                    <p style="font-size: 25px;">
                        Ở bài học trước chúng ta đã tìm hiểu một loại vòng lặp trong C++ đó là vòng lặp for. Trong bài hôm nay chúng ta sẽ tiếp tục tìm hiểu một loại vòng lặp khác nữa trong C++ đó là vòng lặp while. Đây là vòng lặp được dùng trong trường hợp không biết trước tổng số lần lặp. .                    </p>             
                    <div style="height: 20px;"></div>
                    <div style="background-color: rgb(214, 209, 209);">
                        <p style="padding-left: 10px;">MỤC LỤC</p>
                        <ul id="menu-bai1">
                            <li><a href="#div-bai1-1">1. Câu lệnh if else trong C++</a>
                                <li style="padding-left: 25px;"><a href="#div-bai1-1-1">Cú pháp</a></li>
                                <li style="padding-left: 25px;"><a href="#div-bai1-1-2">Lưu đồ hoạt động</a></li>
                            </li>
                            <li><a href="#div-bai1-2">2. Ví dụ vòng lặp while trong C++</a></li>
                            <li><a href="#div-bai1-3">3. Vòng lặp while C++ lồng nhau</a></li>
                            <li><a href="#div-bai1-4">4. Vòng lặp while C++ bị lặp vô hạn</a></li>
                            <li><a href="#div-bai1-5">5. So sánh vòng lặp for và vòng lặp while C++</a>
                                <li style="padding-left: 25px;"><a href="#div-bai1-5-1">Giống nhau</a></li>
                                <li style="padding-left: 25px;"><a href="#div-bai1-5-2">Khác nhau</a></li>
                            </li>
                            <li><a href="#div-bai1-6">6. Kết luận</a></li>
                        </ul>
                    </div>
                    <div style="height: 50px;"></div>
                    <!-- Phần 1 bài 1 -->
                   <div>
                        <div id="div-bai1-1" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">1. Cú pháp vòng lặp while trong C++
                        </h1></div>
                        
                        <div style="height: 20px;"></div>
                        <div>
                        <p style="font-size: 25px;">
                            Cũng giống như vòng lặp for, vòng lặp while dùng để lặp lại đoạn code nào đó khi điều kiện lặp là đúng. Đây là vòng lặp dễ dẫn tới trường hợp lặp vô hạn nhất trong tất cả các loại vòng lặp.
                        </p>
                        <div style="height: 20px;"></div>
                        <h3 style="color: #0b7ae9;" id="div-bai1-1-1">Cú pháp</h3>
                        <div style="height: 20px;"></div>
                        <div>Cú pháp của vòng lặp while trong C++ như sau:</div>
                        <div style="height: 20px;"></div>
                        <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="4">
    while(condition) {
        statement(s);
    }
                        </textarea>
                        <div style="height: 20px;"></div>
                        <div>Trong đó:</div>
                        <div style="height: 20px;"></div>
                        <ul>
                            <li><strong style="background-color: rgb(206, 204, 204);">condition</strong>: Là điều kiện để quyết định tiếp tục vòng lặp hay không. Nếu điều kiện đúng thì tiếp tục vòng lặp, ngược lại sẽ thoát khỏi vòng lặp</li>
                            <li><strong style="background-color: rgb(206, 204, 204);">statement(s)</strong>: Các câu lệnh sẽ được thực thi khi điều kiện đúng.</li>
                        </ul>
                        <div style="height: 20px;"></div>
                        <div>Vòng lặp while là một dạng của vòng lặp for bị khuyết tham số thứ nhất và tham số thứ 3 như sau:</div>
                        <div style="height: 20px;"></div>
                        <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="4">
    for(;condition;) {
        statement(s);
    }
                        </textarea>
                        <div style="height: 20px;"></div>
                        <h3 style="color: #0b7ae9;" id="div-bai1-1-2">Lưu đồ hoạt động</h3>
                        <div style="height: 20px;"></div>
                        <div>Sau đây là lưu đồ hoạt động của vòng lặp <b>while</b>  trong C++.</div>
                        <div style="height: 20px;"></div>
                        <div style="justify-content: center;display: flex;">
                           <img class="w-50 " src="./image_9/rrr1hfkc.png" alt=""> 
                        </div>
                        <div style="height: 20px;"></div>
                        <div><b>Lưu ý:</b>  Một điểm các bạn cần lưu ý ở vòng lặp  <strong style="background-color: rgb(206, 204, 204);">while</strong>  cũng như vòng lặp  <strong style="background-color: rgb(206, 204, 204);">for</strong> , đó là các câu lệnh bên trong vòng lặp có thể sẽ không bao giờ được thực hiện nếu điều kiện không bao giờ đúng. Điều này khác hoàn toàn với vòng lặp do while mà chúng ta sẽ học ở bài tiếp theo.</div>
                   <div style="height: 50px;"></div>
                   <!-- Phần 2 bài 1 -->
                   <div>
                        <div id="div-bai1-2" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">2. Ví dụ vòng lặp while trong C++</h1></div>
                        <div style="height: 20px;"></div>
                        <div>
                            Giả sử chúng ta có một bài toán đơn giản đó là in ra màn hình số chẳn hoặc số lẻ từ 1 đến 10. Sử dụng vòng lặp while trong C++ để giải quyết bài toán trên như sau:
                        <div style="height: 20px;"></div>
                        <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="16">
    #include <iostream>
    using namespace std;
    
    int main () {
        int i = 1;
        while(i <= 10 ) {
            if (i%2 == 0) {
                cout << i << ": la so chan" << endl;
            } else {
                cout << i << ": la so le"  << endl;
            }
            i++;
        }
        return 0;
    }
                        </textarea>
                        <div>
                            Và sau đây là kết quả sau khi thực thi đoạn code trên:                       
                         </div>
                        <div style="height: 20px;"></div>
                        <div style="justify-content: center;display: flex;">
                            <img class="w-75" src="./image_9/rwcqim7l.png" alt="">
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            Mình xin được giải thích kết quả của đoạn code trên như sau:                        <div style="height: 20px;"></div>
                        <div >
                            <ul>
                                <li>Trước tiên gán biến i = 1, bắt đầu vô vòng lặp <b>while</b> , kiểm tra điều kiện 1 < 10 là đúng, thực thi đoạn code bên trong vòng lặp <b>while</b> </li>
                                <div style="height: 10px;"></div>
                                <li>Trong vòng lặp <b>while</b>  có sử dụng lệnh <b>if else</b>  để in số chẳn lẻ ra màn hình, chúng ta dùng toán tử % dùng để chia lấy phần dư, nếu là số chẳn thì chia hết cho 2 và phần dư bằng 0, ngược lại số lẻ thì không chia hết cho 2 và phần dư sẽ khác 0.</li>
                                <div style="height: 10px;"></div>
                                <li>Tiếp đến dòng code i++ sẽ tăng biến i lên 1 (trong đó i++ tương đương với i = i + 1), sau đó quay lại kiểm tra điều kiện, lúc này biến i = 2, điều kiện 2 < 10 vẫn đúng, tiếp tục thực thi đoạn code bên trong vòng lặp while, sau đó tăng biến i lên 1, kiểm tra điều đúng và thực thi đoạn code bên trong vòng lặp... cứ thế lặp lại vòng lặp (kiểm ta điều kiện đúng, thực thi đoạn code bên trong, tăng biến i, kiểm tra điều kiện...).</li>
                                <div style="height: 10px;"></div>
                                <li>Đến khi biến i có giá trị là 11, bây giờ điều kiện 11 <= 10 là sai, kết thúc vòng lặp while.</li>
                            </ul>
                        </div>
                        </div>
                   <div style="height: 50px;"></div>
                   <!-- Phần 3 bài 2 -->
                    <div>
                        <div id="div-bai1-3" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">3. Vòng lặp while C++ lồng nhau</h1></div>

                        <div style="height: 20px;"></div>
                        Cũng giống như vòng lặp for, vòng lặp while cũng có vòng lặp while lồng nhau.                        
                        <div style="height: 20px;"></div>
                        <div>
                            Một vòng lặp while nằm trong một vòng lặp while khác ta gọi đó là vòng lặp while lồng nhau. Chúng ta cũng hạn chế sử dụng vòng lặp while lồng nhau vì nó sẽ làm cho chương trình của chúng ta chậm hơn.                        </div>
                        <div style="height: 20px;"></div>
                        Chúng ta cùng xem một ví dụ đơn giản về vòng lặp while lồng nhau như sau:
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="18">
    #include <iostream>  
    using namespace std;  
    int main () { 
        int i=1;    
        while(i<=3) {  
            int j = 1; 
            cout << endl;
            while (j <= 3)  
            {  
                cout << "Gia tri i = " << i << ", j = " << j << endl;  
                j++;  
            }  
            i++;  
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
                            <img class="w-75" src="./image_9/jdm5px66.png" alt="">
                        </div>
                        
                        <div style="height: 50px;"></div>
                    <!-- Phần 4 bài 2 -->
                    <div>
                        <div id="div-bai1-4" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">4. Vòng lặp while C++ bị lặp vô hạn</h1></div>

                        <div style="height: 20px;"></div>
                        Khi điều kiện trong vòng lặp <strong style="background-color: rgb(206, 204, 204);">while</strong> luôn đúng thì vòng lặp <strong style="background-color: rgb(206, 204, 204);">while</strong> sẽ chạy vô tận. Vì vậy các bạn nên xem xét kỹ lưỡng điều kiện trong vòng lặp <strong style="background-color: rgb(206, 204, 204);">while</strong>, hãy chắc chắn rằng sau một số vòng lặp nhất định điều kiện trong vòng lặp <strong style="background-color: rgb(206, 204, 204);">while</strong> sẽ sai và kết thúc vòng lặp.                        
                        <div style="height: 20px;"></div>
                        Các bạn nên tránh có vòng lặp <strong style="background-color: rgb(206, 204, 204);">while</strong> vô hạn trong chương trình của mình. Ví nó làm cho chương trình chúng ta chạy mãi mãi dẫn đến bị treo, rất là quy hiểm.
                        <div style="height: 20px;"></div>
                        Chúng ta cùng xem một ví dụ đơn giản về vòng lặp <strong style="background-color: rgb(206, 204, 204);">while</strong> vô hạn trong C++ như sau:
                        <div style="height: 20px;"></div>
                        <div>
                            <textarea style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="12">
    #include <iostream>  
    using namespace std;  
        
    int main () { 
        int i;
        while(i=1) {
        cout << "vong lap while vo han" << endl;
        } 
        return 0;
    }
                            </textarea>
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            Và kết quả sau khi thực thi đoạn code trên là chương trình chúng ta sẽ chạy vô hạn.
                        </div>
                        <div style="height: 20px;"></div>
                        <div style="justify-content: center;display: flex;">
                            <img class="w-75" src="./image_9/ifkugv9v.png" alt="">
                        </div>
                        <div style="height: 20px;"></div>
                        Lý do vòng lặp while trên chạy vô hạn là vì chúng ta gán biến i = 1 và trong thân hàm không có thay đổi giá trị của biến i, nên biến i lúc nào cũng bằng 1. Trong C++, một số khác 0 là true.
                        <div style="height: 20px;"></div>
                        Từ ví dụ trên các bạn hãy rút cho mình một bài học nhé, vì nhiều bạn thường bị lỗi này, thay vì so sánh 2 giá trị chúng ta sử dụng 2 dấu =, nhưng lại gõ thiếu 1 dấu =, chương trình chúng ta hiểu đó là phép gán giá trị cho biến, không phải là phép so sánh giữa 2 giá trị nữa.
                        <div style="height: 50px;"></div>
                    <!-- Phần 5 -->
                    <div>
                        <div id="div-bai1-5" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">5. So sánh vòng lặp for và vòng lặp while C++</h1></div>
                        <div style="height: 20px;"></div>
                        Vòng lặp for và vòng lặp while có những điểm giống và khác nhau như sau:     
                         <div style="height: 20px;"></div>
                        <h3 style="color: #0b7ae9;" id="div-bai1-5-1">Giống nhau</h3>
                        <div style="height: 20px;"></div>
                        <div>
                            Cả 2 vòng lặp đều sử dụng để lặp lại môđoạn code nào đó khi điều kiện đúng. Nếu điều kiện sai sẽ không có đoạn code nào bên trong thân vòng lặp được thực hiện
                        </div>
                        <div style="height: 20px;"></div>
                        <h3 style="color: #0b7ae9;" id="div-bai1-5-1">Khác nhau</h3>
                        <div style="height: 20px;"></div>
                        <div>
                            Một số điểm khác nhau giữa vòng lặp for và vòng lặp while trong C++ như sau:                     
                        </div>
                        <div style="height: 20px;"></div>
                        <table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td style="border: 1px solid black;"><strong>Điểm khác nhau</strong></td>
                                    <td style="border: 1px solid black;"><strong>Vòng lặp for</strong></td>
                                    <td style="border: 1px solid black;"><strong>Vòng lặp while</strong></td>
                                </tr>
                                <tr>
                                    <td  style="width: 10%;border: 1px solid black;">Cú pháp</td>
                                    <td style="border: 1px solid black;">for ( init; condition; increment ) {<br />
                                    statement(s);<br />
                                    }</td>
                                    <td style="border: 1px solid black;">while(condition) {<br />
                                    statement(s);<br />
                                    }</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black;">Nên sử dụng</td>
                                    <td style="border: 1px solid black;">Vòng lặp <code>for</code> chỉ nên được sử dụng khi chúng ta đã biết trước số lần lặp.</td>
                                    <td style="border: 1px solid black;">Vòng lặp <code>while</code> chỉ nên được sử dụng khi số lần lặp không được biết chính xác.</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black;">Điều kiện (condition)</td>
                                    <td style="border: 1px solid black;">Nếu điều kiện không được đưa vào vòng lặp <code>for</code>, thì vòng lặp lặp lại vô số lần.</td>
                                    <td style="border: 1px solid black;">Nếu điều kiện không được đưa vào vòng lặp <code>while</code>, nó sẽ cung cấp lỗi biên dịch.</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black;">init</td>
                                    <td style="border: 1px solid black;">Trong vòng lặp for, bước khởi tạo (init) được thực hiện duy nhất một lần</td>
                                    <td style="border: 1px solid black;">Trong vòng lặp while nếu việc khởi tạo được thực hiện trong quá trình kiểm tra điều kiện, thì việc khởi tạo được thực hiện mỗi lần lặp lại vòng lặp.</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black;">increment</td>
                                    <td style="border: 1px solid black;">Câu lệnh lặp trong <code>for</code> được viết ở trên cùng, do đó, chỉ thực hiện sau khi tất cả các câu lệnh trong vòng lặp được thực thi.</td>
                                    <td style="border: 1px solid black;">Trong vòng lặp <code>while</code>, câu lệnh lặp có thể được viết ở bất cứ đâu trong vòng lặp.</td>
                                </tr>
                            </tbody>
                        </table>
                        <div style="height: 50px;"></div>
                        <!-- Phần 6 -->
                        <div>
                            <div id="div-bai1-6" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">6. Kết luận</h1></div>
                            <div style="height: 20px;"></div>
                            Như vậy là chúng ta đã tìm hiểu xong về vòng lặp while trong C++. Vòng lặp while căn bản về ý nghĩa là giống với vòng lặp for, nó chỉ khác nhau về cú pháp và trường hợp sử dụng. Tùy vào mục đích sử dụng của mình mà các bạn lựa chọn vòng lặp while hoặc vòng lặp for cho phù hợp.
                            <div style="height: 20px;"></div>
                            <div></div>
                            Một điều cần lưu ý cho các bạn khi sử dụng vòng lặp while đó là hạn chế sử dụng vòng lặp while lồng nhau và nên tránh vòng lặp while vô hạn trong chương trình của mình.
                            <div style="height: 20px;"></div>
                            Vậy mình sẽ kết thúc bài học này ở đây. Trong bài tiếp theo chúng ta sẽ cùng tìm hiểu về một vòng lặp khác nữa trong C++ đó là vòng lặp do while. Các bạn nhớ xem tiếp nhé.
                            <div style="height: 50px;"></div>
                        </div>
                    <div style="float: left;width: 100%;display: flex;">
                        <p style="width: 80%;"><a href="./bai8(lt).php">⇦ Bài trước </a></p>
                        <p style="width: 20%;"><a href="./bai10(lt).php">Bài tiếp theo ⇨</a></p>
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