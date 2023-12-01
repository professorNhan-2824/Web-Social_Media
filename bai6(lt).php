<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cách viết ghi chú trong C++</title>
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
                <b style="font-size: 55px;">Cách viết ghi chú trong C++</b>
                <div style="height: 20px;"></div>
                <hr>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    Trong bài này chúng ta sẽ tìm hiểu cách viết ghi chú trong C++, qua đó bạn sẽ biết các tạo ghi chú một dòng và ghi chú trên nhiều dòng.                </p>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    Hầu hết các ngôn ngữ lập trình đều hỗ trợ chức năng ghi chú (hay còn gọi là comment) nhằm giúp ta diễn giải một số đoạn code nào đó để khi đọc vào có thể hiểu ý nghĩa của chúng.                
                </p>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    Giả sử mình và bạn cùng viết một ứng dụng giải phương trình bậc hai, mình viết một đoạn và bạn cũng viết một đoạn nhưng cả hai đều không giải thích gì thì rất khó để hiểu nhau. Vì vậy chúng ta phải sử dụng cú pháp <b>tạo ghi chú</b>  trong C++ để mô tả.                </p>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    Trong C++ hỗ trợ hai loại ghi chú, đó là ghi chú đơn dòng và ghi chú đa dòng. Và trước khi bắt đầu thì bạn phải hiểu quy trình biên dịch mã C++ của trình biên dịch đã nhé.                </p>
                <div style="height: 20px;"></div>
                <div>
                    <p style="background-color: rgb(196, 196, 196);border: 1px solid rgb(196, 196, 196);height: 250px;padding-top: 20px; padding-left: 20px; " name="" id="" cols="78" rows="6">
    Quy trình biên dịch của một chương trình C++ như sau: Nó sẽ biên dịch từ <b>trên xuống dưới</b>  và từ <b>trái qua phải</b>  cho tới khi gặp <b style="color: #0b7ae9;">hàm main</b> . Sau khi gặp hàm main thì nó sẽ biên dịch những đoạn code trong hàm đó. Lúc này nếu hàm main có sử dụng những biến khai báo ở phía dưới nó thì sẽ bị báo lỗi vì những đoạn code đó chưa được biên dịch. Vì vậy tất cả những khai báo đều phải đặt ở trên hàm main.
                    </p>
                </div>
                <div style="height: 20px;"></div>
                <div style="background-color: rgb(214, 209, 209);">
                    <p style="padding-left: 10px;">MỤC LỤC</p>
                    <ul id="menu-bai1">
                        <li><a href="#div-bai1-1">1. Ghi chú (chú thích) trong C++ là gì?</a></li>
                        <li><a href="#div-bai1-2">2. Ghi chú một dòng trong C++</a></li>
                        <li><a href="#div-bai1-3">3. Ghi chú nhiều dòng trong C++</a></li>
                        <li><a href="#div-bai1-4">4. Cách học C++ hiệu quả</a></li>
                        <li><a href="#div-bai1-5">5. Lời kết</a></li>
                    </ul>
                </div>
                <div style="height: 50px;"></div>
                <!-- Phần 1 bài 1 -->
               <div>
                    <div id="div-bai1-1" style="background-color:  #0b7ae9;"><h1 style="color: white;padding:10px;">1. Ghi chú (chú thích) trong C++ là gì?</h1></div>
                    <div style="height: 20px;"></div>
                    <div>
                        <p style="font-size: 25px;">
                            Chú thích là những đoạn text được dùng để giải thích ý nghĩa của một đoạn code nào đó. Chúng ta thường dùng để ghi lại những lưu ý, giải thích quy trình chạy, ý nghĩa của biến ... để sau này khi xem lại sẽ dễ hiểu hơn.                        </p>
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">
                            Khi trình biên dịch gặp ghi chú thì nó sẽ bỏ qua và không biên dịch những đoạn ghi chú đó, vì vậy sẽ không có lỗi về cú pháp, và bạn thoải mái trong việc viết nội dung trong phạm vi của ghi chú.                        </p>
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">
                            Có hai loại ghi chú, thứ nhất là ghi chú đơn trên một dòng, thứ hai là ghi chú đa dòng <i>(tức là viết ghi chú trên nhiều dòng bằng một cú pháp tạo ghi chú duy nhất). </i>                        </p>
                    </div>
               </div>
               <div style="height: 50px;"></div>
               <!-- Phần 2 bài 1 -->
               <div>
                    <div id="div-bai1-2" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">2. Ghi chú một dòng trong C++</h1></div>
                    <div style="height: 20px;"></div>
                    <div>
                        <p style="font-size: 25px;">Chúng ta sử dụng hau dấu xoẹt <strong style="background-color: rgb(206, 204, 204);">\\</strong>  để tạo ghi chú đơn dòng.</p>
                    </div>
                    <div style="height: 20px;"></div>
                    <div style="height: 20px;"></div>
                    <div>
                        <b>Ví dụ:</b>Ghi chú trên một hàng.
                     </div>
                    <div >
                        <textarea class="w-100" style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="15">
    #include <iostream>
    using namespace std;
                                
        int main()
        {
        // Khai bao va gan gia tri cho bien tuoi
        int tuoi = 20;
                                            
        // In gia tri bien tuoi ra man hinh
        cout << tuoi;
                                            
        retuur 1;
    }   
                        </textarea>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        Khi chương trình biên dịch nó sẽ bỏ qua dòng bắt đầu tự vị trí hai dấu xoẹt  <strong style="background-color: rgb(206, 204, 204);">\\</strong>.
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <b>Ví dụ:</b> Ghi chú một đoạn nhỏ trên một hàng
                     </div>
                     <div style="height: 20px;"></div>
                     <div>
                        <textarea class="w-100" style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="13">
    #include <iostream>
    using namespace std;
                                    
    int main()
    {
        int tuoi = 20;  // Khai bao va gan gia tri cho bien tuoi
                                            
        cout << tuoi; // In gia tri bien tuoi ra man hinh
                                            
        return 1;
    }
                        </textarea>
                    </div>
               </div>
               <div style="height: 50px;"></div>
               <!-- Phần 3 bài 1 -->
               <div>
                    <div id="div-bai1-3" style="background-color:  #0b7ae9;"><h1 style="color: white;padding:10px;">3. Ghi chú nhiều dòng trong C++</h1></div>
                    <div style="height: 20px;"></div>
                    <div>
                        <p style="font-size: 25px;">
                            Ghi chú đa dòng là ghi chú trên nhiều dòng. Chúng ta sử dụng cú pháp sau để tạo ghi chú đa dòng:                        </p>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <textarea class="w-100" style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="4">
    /*
    Noi dung ghi chu
    */
                        </textarea>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <p style="font-size: 25px;">
                            Bên trong nội dung ghi chú bạn có thể sử dụng bao nhiêu dòng cũng được.                        </p>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <p style="font-size: 25px;">
                            <b>Ví dụ:</b>  Ghi chú đa dòng                        </p>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <textarea class="w-100" style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="14">
    #include <iostream>
    using namespace std;
    
    
    /*
    Day la ham main cua chuong trinh
    Ham nay se chay dau tien trong chuong trinh
    Cho du ban dat no o vi tri nao
    */
    void main()
    {
        // Code
    }
                        </textarea>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <p style="font-size: 25px;">
                            Ta cũng có thể sử dụng ghi chú đơn dòng nhiều lần để tạo ghi chú đa dòng nhưng như vậy sẽ không đẹp cho lắm.   </p>                 
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <p style="font-size: 25px;">
                            <b>Ví dụ:</b> Tạo ghi chú đa dòng từ nhiều ghi chú đơn dòng.                        
                        </p>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <textarea class="w-100" style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="12">
    #include <iostream>
    using namespace std;
                                    
                                    
    // Day la ham main cua chuong trinh
    // Ham nay se chay dau tien trong chuong trinh
    // Cho du ban dat no o vi tri nao
    int main()
    {
        // Code
    }
                        </textarea>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <p style="font-size: 25px;">
                            Cũng tùy vào thói quen của mỗi người mà chọn cách ghi chú phù hợp.
                        </p>
                    </div>
               </div>
               <div style="height: 50px;"></div>
               <!-- Phần 4 bài 1 -->
               <div>
                    <div id="div-bai1-4" style="background-color:  #0b7ae9;"><h1 style="color: white;padding:10px;">4. C++ không biên dịch các lệnh trong ghi chú</h1></div>
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Để chứng minh là chương trình sẽ không biên dịch lệnh ghi chú thì bạn hãy xem ví dụ sau:                    </p>
                    <div style="height: 20px;"></div>
                    <div>
                        <textarea class="w-100" style="font-size: 20px;padding-left: 10px;padding-top: 15px;background-color:#222f3c;color: aliceblue;" name="" id="" cols="73" rows="10">
    #include <iostream>
    using namespace std;
    
    int main()
    {
        // cout << "Chao mung ban den voi freetuts.net";
        // cout << "Mot website hoc lap trih mien phi";
            return 1;
    }
                        </textarea>
                    </div>
                    <p style="font-size: 25px;">
                        Chạy chương trình lên bạn sẽ thấy như hình sau:                    
                    </p>
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        <img class="w-100" src="./image_6/ghi-chu-trong-c++.png" alt="">
                    </p>
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Kết quả sẽ không có gì => chương trình đã không chạy hai đoạn code <strong style="background-color: rgb(206, 204, 204);">cout</strong>  ở trên.                    
                    </p>
               </div>
               <div style="height: 50px;"></div>
               <!-- Phần 5 bài 1 -->
                <div>
                    <div id="div-bai1-5" style="background-color:  #0b7ae9;"><h1 style="color: white;padding:10px;">5. Lời kết</h1></div>
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Trong một chương trình có thể lên tới hàng trăm và hàng ngàn dòng code, lúc này nếu bạn không sử dụng ghi chú thì bạn không thể nhớ hết là bạn đã code những gì, chưa tính đến khi bạn làm việc nhóm thì bạn đồng nghiệp sẽ rất khó biết được ý tưởng mà bạn đã code chương trình đó. Vì vậy giải pháp là hãy sử dụng ghi chú nếu có thể nhé.                    </p>
                    <div style="height: 20px;"></div>
                </div>
                <div style="height: 20px;"></div>
                <hr>
                <div style="height: 50px;"></div>
                <div style="float: left;width: 100%;display: flex;">
                    <p id="bt" ><a href="./bai5(lt).php">⇦ Bài trước </a></p>
                    <p id="bs"><a href="./bai7(lt).php">Bài tiếp theo ⇨</a></p>
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