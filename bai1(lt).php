<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngôn ngữ C++ là gì? Dùng làm gì trong công nghệ thông tin?</title>
    <link rel="icon" type="image/png" href="image/icons8-xing-squared-57.png" sizes="50x50">
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        p{
            font-size: 22px;
        }
        .anhC{
            border-radius: 5px;
        }
        header{
            /* background-color: rgb(83, 163, 255); */
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
            .tieude{
                font-size: 25px;
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
                <div class="col-0 col-md-3 col-lg-4 col-xl-2 ">
                    <?php
                     require 'menu/menubai.php';
                    ?>
                </div>
                <div class="col-md-9 col-lg-8 col-xl-8">
                    <div style="height: 20px;"></div>
                <b class="tieude" style="font-size: 55px;">Ngôn ngữ C++ là gì? Dùng làm gì trong công nghệ thông tin?</b>
                <div style="height: 20px;"></div>
                <hr>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    Trong bài này chúng ta sẽ tìm hiểu khái niệm <b> C++ là gì</b> và làm thế nào để học C++ một cách hiệu quả nhất? Bài viết này không chú trọng vào phần khái niệm mà sẽ chú trọng vào phần thảo luận cách học C++ và các tính chất quan trọng của nó.
                </p>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    Nói đến ngành công nghệ thông tin thì ai cũng phải học qua ngôn ngữ này, vì nó được đánh giá là có cấu trúc hiện đại, giúp sinh viên dễ dàng tiếp thu trong quá trình học.
                </p>
                <div style="height: 20px;"></div>
                <p style="font-size: 25px;">
                    Hiện nay bộ giáo dục đang dự tính đưa C++ hoặc Python vào thay thế cho Pascal trong chương trình giáo dục phổ thông. Điều này cho thấy C++ được đánh giá rất quan trọng trong ngành công nghệ thông tin.
                </p>
                <div style="height: 20px;"></div>
                <div style="background-color: rgb(214, 209, 209);">
                    <p style="padding-left: 10px;">MỤC LỤC</p>
                    <ul id="menu-bai1">
                        <li><a href="#div-bai1-1">1. Ngôn ngữ C++ là gì?</a></li>
                        <li><a href="#div-bai1-2">2. Điểm mạnh của C++ là gì?</a></li>
                        <li><a href="#div-bai1-3">3. Microsoft Visual C++ là gì?</a></li>
                        <li><a href="#div-bai1-4">4. Cách học C++ hiệu quả</a></li>
                        <li><a href="#div-bai1-5">5. Lời kết</a></li>
                    </ul>
                </div>
                <div style="height: 50px;"></div>
                <!-- Phần 1 bài 1 -->
               <div>
                    <div id="div-bai1-1" style="background-color:  #0b7ae9;"><h1 style="color: white;padding:10px;">1. Ngôn ngữ C++ là gì?</h1></div>
                    <div style="height: 20px;"></div>
                    <div>
                        <img src="./image/c++main.png" alt="bai1-1" style="width: 100%;">
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <p style="font-size: 25px;">
                            C++ là một ngôn ngữ lập trình phổ biến và mạnh mẽ có kiểu dữ liệu tĩnh và hỗ trợ hầu hết các phương pháp lập trình như lập trình hướng thủ tục, lập trình hướng module, lập trình hướng đối tượng. Vào những năm 1990 thì C++ trở thành một ngôn ngữ thương mại phổ biến tại thời điểm đó.
                        </p>
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">
                            Ngôn ngữ lập trình C++ được xuất hiện vào năm 1983 do <b>Bjarne Stroustrup </b>phát triển từ ngôn ngữ lập trình C. Do được phát triển từ C nên C++ gần như kế thừa toàn bộ các thuộc tính của C, và bên cạnh đó C++ được nâng cấp và bổ xung nhiều chức năng mới so với ngôn ngữ cơ bản C.
                        </p>
                        <div style="height: 20px;"></div>
                        <p style="font-size: 25px;">
                            Tại Việt Nam thì C++ rất ít được sử dụng trong các công ty bởi số lượng công ty sử dụng ngôn ngữ này rất hiếm. Tuy nhiên C++ lại trở thành một bộ môn khá quan trọng trong chương trình giảng dạy ở các trường đại học và cao đẳng, từ C++ sẽ mở rộng thêm các môn như kỹ thuật lập trình, lập trình hướng đối tượng, cấu trúc dữ liệu. Từ đó ta thấy rõ ràng C++ không thể thiếu trong quá trình nghiên cứu và học tập của các lập trình viên.
                        </p>
                    </div>
               </div>
               <div style="height: 50px;"></div>
               <!-- Phần 2 bài 1 -->
               <div>
                    <div id="div-bai1-2" style="background-color: #0b7ae9;"><h1 style="color: white;padding:10px;">2. Điểm mạnh của C++ là gì?</h1></div>
                    <div style="height: 20px;"></div>
                    <div>
                        <p style="font-size: 25px;">Nói đến C++ thì không thể không nhắc đến những điểm mạnh của nó dưới đây:</p>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <ul style="padding-left: 40px;">
                            <li><b>Tính phổ biến :</b>  C++ là một trong những ngôn ngữ lập trình phổ biết trên thế giới.</li>
                            <div style="height: 20px;"></div>
                            <li><b>Tính thực thi nhanh:</b> Nếu bạn rành C++ thì bạn có thể lập trình nhanh. Một trong những mục tiêu của C++ là khả năng thực thi. Và nếu bạn cần thêm các tính năng cho chương trình, C++ cho phép bạn dùng ngôn ngữ Assembly (Hợp ngữ) – Ngôn ngữ lập trình bậc thấp nhất – để giao tiếp trực tiếp với phần cứng của máy tính.</li>
                            <div style="height: 20px;"></div>
                            <li><b>Thư viện đầy đủ:</b> Có rất nhiều tài nguyên cho người lập trình bằng C++, bao gồm cả đồ hoạ API, 2D, 3D, vật lý các thiết bị âm thanh hỗ trợ giúp cho lập trình viên dễ dàng thực thi.</li>
                            <div style="height: 20px;"></div>
                            <li><b>Đa mô hình: </b> C++ cho phép bạn lập trình theo cấu trúc tuyến tính, hướng chức năng, hướng đối tượng đa dạng tuỳ theo yêu cầu của người lập trình</li>
                        </ul>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        Theo bản thân mình nghĩ C++  <b>đáng để học</b> và  <b>cần phải học</b> khi bắt đầu muốn trở thành một lập trình viên đúng nghĩa. C++ là căn bản và là nền tảng định hướng cho việc tiếp cận sau này với các ngôn ngữ lập trình khác. Vậy còn chần chừ gì nữa, chúng ta cùng bắt tay vào học lập trình C++?
                    </div>
               </div>
               <div style="height: 50px;"></div>
               <!-- Phần 3 bài 1 -->
               <div>
                    <div id="div-bai1-3" style="background-color:  #0b7ae9;"><h1 style="color: white;padding:10px;">3. Microsoft Visual C++ là gì?</h1></div>
                    <div style="height: 20px;"></div>
                    <div>
                        <p style="font-size: 25px;">
                            Microsoft Visual C++ (còn được gọi là MSVC) là một môi trường phát triển tích hợp (IDE) được sử dụng để tạo các ứng dụng Windows trong các ngôn ngữ lập trình C, C++ và C++ / CLI.
                        </p>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <p style="font-size: 25px;">
                            Ban đầu đây là một ứng dụng độc lâp, tuy nhiên bây giờ nó đã được tích hợp vào bộ Visual Studio của Microsoft. Vì vậy khi cài đặt công cụ Visual Studio thì bạn hoàn toàn có thể code mã nguỗn C hoặc C++.
                        </p>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <p style="font-size: 25px;">
                            Khi bạn cài đặt hệ điều hành Windows mới thì mặc định nó sẽ có những phiên bản Visual C++ Redistributable khác nhau. Mình nghĩ bạn không nên quan tâm nó quá nhiều, cũng không nên xóa nó đi bởi sẽ gây ra lỗi cho những phần mềm đang sử dụng thư viện này.
                        </p>
                    </div>
               </div>
               <div style="height: 50px;"></div>
               <!-- Phần 4 bài 1 -->
               <div>
                    <div id="div-bai1-4" style="background-color:  #0b7ae9;"><h1 style="color: white;padding:10px;">4. Cách học C++ hiệu quả</h1></div>
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Vì bài viêt này mình không chú trọng vào khái niệm  <b>C++ là gì</b> nên về phần định nghĩa rất ngắn. Bây giờ chúng ta sẽ thảo luận cách học C++ như thế nào cho hiệu quả.
                    </p>
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Việc học C++ rất khó khăn với những bạn mới tiếp cận lập trình bởi lúc đó bạn chưa hiểu các nguyên lý hoạt động của một chương trình. Nhưng nếu bạn đã từng học qua một ngôn ngữ lập trình khác như Pascal thì sẽ là một lợi thế rất lớn.
                    </p>
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Bản thân mình là một PHP developer nhưng trước đây mình không học PHP mà học C++ và C# là chủ yếu. Nhưng khi đi thực tập mình đã làm cho một công ty sử dụng PHP nên mình đã bắt tay vào nghiên cứu PHP tư đó. Và điều kỳ diệu là mình đã tiệp cận PHP một cách dễ dàng bởi kỹ năng lập trình của mình lúc đó là tương đối ổn. Vì vậy mình khuyên các bạn nên nắm vững kỹ thuật lập trình bởi vì nó là nền tảng để bạn tiếp cận ngôn ngữ lập trình mới.
                    </p>
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Vậy cách học thế nào để hiệu quả? Mình nghĩ các bạn nên lưu ý những vấn đề sau sẽ rất có lợi cho việc học:
                    </p>
                    <div>
                        <ul style="padding-left: 40px;">
                            <div style="height: 20px;"></div>
                            <li>Tìm nhiều nguồn học khác nhau và tuyển chọn một nguồn học chất lượng, có hướng dẫn cụ thể từng bước step by step.</li>
                            <div style="height: 20px;"></div>
                            <li>Trong mỗi bài học nên đọc thật kỹ, xem phần giải thích và ghi chú thật kỹ và đặc biệt là phải thực hành code theo.</li>
                            <div style="height: 20px;"></div>
                            <li>Sau khi hoàn thành bài học này và làm bài tập nhuần nhuyễn rồi hãy chuyển sang bài tập mới. Tuy nhiên lâu lâu cũng nên ôn lại các bài tập cũ để rèn luyện khả năng phản xạ.</li>
                            <div style="height: 20px;"></div>
                            <li>Tìm kiếm nhiều bài tập thực hành hơn nữa với phương châm càng nhiều càng ít.</li>
                            <div style="height: 20px;"></div>
                            <li>Tham gia thảo luận ở các group, forum hoặc diễn đàn về C++, đặt câu hỏi nếu có thắc mắc.</li>
                        </ul>
                    </div>
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Trên là những lưu ý mà mình nghĩ rất cần thiết trong quá trình học C++. Mỗi người có một cách nhìn nhận khác nhau nên có gì sai sót mong các bạn bỏ qua.
                    </p>
               </div>
               <div style="height: 50px;"></div>
               <!-- Phần 5 bài 1 -->
                <div>
                    <div id="div-bai1-5" style="background-color:  #0b7ae9;"><h1 style="color: white;padding:10px;">5. Lời kết</h1></div>
                    <div style="height: 20px;"></div>
                    <p style="font-size: 25px;">
                        Như vậy trong bài này mình đã giới thiệu sơ lược về khái niệm C++ là gì và cách học C++ như thế nào để đạt hiệu quả. Vì bài viết trình bày ngắn gọn và đơn giản nên có rất nhiều thiếu sót. Nhưng mình đảm bảo trong series này bạn sẽ được hướng dẫn học step by step rất cụ thể và kèm nhiều bài tập thực hành nên việc theo dõi series này là một sự lựa chọn sáng suốt.
                    </p>
                    <div style="height: 20px;"></div>
                </div>
                <div style="height: 20px;"></div>
                <hr>
                <div style="height: 50px;"></div>
                <div style="float: left;width: 100%;display: flex;">
                    <p id="bt" ><a href="">⇦ Bài trước </a></p>
                    <p id="bs"><a href="./bai2(lt).php">Bài tiếp theo ⇨</a></p>
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