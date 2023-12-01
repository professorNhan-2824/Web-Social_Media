<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tổng các phần tử trong mảng C++ sử dụng hàm và con trỏ</title>
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
                <b style="font-size: 55px;">Tính tổng các phần tử trong mảng C++ sử dụng hàm và con trỏ</b>
                <div style="height: 20px;"></div>
                <hr>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    <strong>Trong bài tập này chúng ta sẽ viết chương trình C++ để tính tổng các phần tử trong mảng sử dụng hàm và con trỏ. Với bài tập này các bạn sẽ làm quen được với con trỏ, và tìm hiểu xem cách hoạt động của nó như thế nào.</strong>
                </p>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    Trong hướng dẫn này, chúng ta sẽ tìm hiểu hai cách sau để tìm ra tổng các phần tử mảng
                    <ol>
                        <li>Sử dụng đệ quy</li>
                        <li>Sử dụng con trỏ</li>
                    </ol>
                </p>
                <div style="height: 20px;"></div>

                <!-- <div style="height: 20px;"></div> -->
                <div style="height: 20px;"></div>
                <div style="background-color: rgb(214, 209, 209);">
                    <p style="padding-left: 10px;">MỤC LỤC</p>
                    <ul id="menu-bai1">
                        <li><a href="#div-bai1-1">Tính tổng các phần tử trong mảng C++ sử dụng hàm</a></li>
                        <li><a href="#div-bai1-2">Tính tổng các phần tử trong mảng C++ sử dụng con trỏ</a></li>
                    </ul>
                </div>
                <div style="height: 50px;"></div>
                <!-- Phần 1 bài 1 -->
               <div>
                    <div id="div-bai1-1" style="background-color:  #0b7ae9;"><h1 style="color: white;padding:10px;">Tính tổng các phần tử trong mảng C++ sử dụng hàm</h1></div>
                    <!-- <div style="height: 20px;"></div> -->
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Chương trình này gọi hàm do người dùng định nghĩa sum_array_elements () và hàm gọi chính nó theo cách đệ quy. Ở đây mình đã mã hóa các phần tử mảng nhưng nếu bạn muốn người dùng nhập các giá trị, bạn có thể sử dụng hàm for loop và cin, giống như cách mình đã làm trong phần tiếp theo (Cách 2: Sử dụng con trỏ) của bài đăng này.
                    </p>
                    <div style="height: 20px;"></div>
                    <div>
                        <div style="justify-content: center; display: flex;">
                            <textarea name="" id="" cols="70" rows="18" style="background-color: #222f3c; color: white; font-size: 20px;padding-left: 10px;padding-top: 15px;">
#include &lt;iostream&gt;
using namespace std;
int sum_array_elements( int arr[], int n ) {
    if (n &lt; 0) {
        return 0;
    } else{
        return arr[n] + sum_array_elements(arr, n-1);
    }
}
int main()
{
    int array[] = {1,2,3,4,5,6,7};
    int sum;
    sum = sum_array_elements(array,6);
    cout&lt;&lt;"Tổng các phần tử trong mảng là: "&lt;&lt;sum;
    cout&lt;&lt;"\n------------------------------\n";
    cout&lt;&lt;"Chương trình này được đăng tại Freetuts.net";
}</textarea>
                        </div>
                        
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;"><strong>Kết quả:</strong> </p>
                        <div>
                            <img src="imageBai_11_TH/tong-ptu-trong-mang.jfif" alt="" class="w-100">
                        </div>
                        
                        <div style="height: 20px;"></div>
                    </div>
               </div>

               <!-- Phần 2 -->
               <div>
                <div id="div-bai1-2 " style="background-color:  #0b7ae9;"><h1 style="color: white;padding:10px;">Tính tổng các phần tử trong mảng C++ sử dụng con trỏ</h1></div>
                <!-- <div style="height: 20px;"></div> -->
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    Ở đây mình đã thiết lập con trỏ đến địa chỉ cơ sở của mảng và sau đó chúng tôi sẽ tăng con trỏ và sử dụng toán tử * để lấy và tổng hợp các giá trị của tất cả các phần tử mảng.
                </p>
                <div style="height: 20px;"></div>
                <div>
                    <div style="justify-content: center; display: flex;">
                        <textarea name="" id="" cols="70" rows="20" style="background-color: #222f3c; color: white; font-size: 20px;padding-left: 10px;padding-top: 15px;">
#include &lt;iostream&gt;
using namespace std;
int main()
{
int array[5];
int i,sum=0;
int *ptr;
cout&lt;&lt;"Nhập vào giá trị phần tử trong mảng (gồm 5 giá trị nguyên) : \n";
for(i=0;i&lt;5;i++)
    cin&gt;&gt;array[i];
ptr = array;
for(i=0;i&lt;5;i++) 
{
    sum = sum + *ptr;
    ptr++;
}
cout&lt;&lt;"Tổng của các phần tử: "&lt;&lt;sum;
cout&lt;&lt;"\n------------------------------\n";
cout&lt;&lt;"Chương trình này được đăng tại Freetuts.net";
}                       </textarea>
                    </div>
                    
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;"><strong>Kết quả:</strong> </p>
                    <div>
                        <img src="imageBai_11_TH/tong-ptu-trong-mang1.jfif" alt="" class="w-100">
                    </div>
                    
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Như vậy là chúng ta đã thực hiện xong chương trình để tính tổng các phần tử trong mảng. Chúc các bạn thực hiện thành công!!!
                    </p>
                </div>
           </div>
                <div style="height: 20px;"></div>
                <hr>
                <div style="height: 50px;"></div>
                <div style="float: left;width: 100%;display: flex;">
                    <p id="bt" ><a href="bai10(TH).php">⇦ Bài trước </a></p>
                    <p id="bs"><a href="bai12(TH).php">Bài tiếp theo ⇨</a></p>
                </div>
               <div style="height: 50px;"></div>
                </div>
                <div class="chu col-lg-2 position-sticky">
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