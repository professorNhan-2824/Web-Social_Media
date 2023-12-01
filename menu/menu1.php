<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .anhnencanhan{
            border-radius: 5px;
        }
        #logo{
                width: 300px;
                height: 100px;
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
        .anhfbin{
            display: flex;
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
        @media only screen  and (max-width: 330px){
            #logo{
                width: 80px;
            }
            .anhfb{
                padding-left:15px;

            }
        }
        @media only screen  and (max-width: 409px){
            .h1logo{
                font-size: 17px;
            }
            
        }
        @media only screen  and (max-width: 465px){
            #logo{
                width: 230px;
                height: 100px;
            }
            .bt-tong{
                display: none;
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
            /* .sticky {
            position: -webkit-sticky; 
            position: fixed;
            top: 0; 
             z-index: 100; 
           
        } */
        }
    </style>
    <link rel="icon" type="image/png" href="image/icons8-c++-32.png" sizes="16x16">

<!-- Latest compiled JavaScript -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script> -->

</head>
<body>
    <nav class="navbar navbar-light  fixed-top "  style="background-color: #E4E2DD;">
      <div class="container-fluid">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <nav class="navbar navbar-expand-sm " style="background-color: #E4E2DD;">
              <div class="container">
                <div  ><img style="height: 50px;" id="logo" src="/DOAN/imageIndex/INCLUDE1.png" alt="LOGO">

                </div>
           
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="bai1(lt).php">Lập Trình</a>
                        </li>
                        <li class="nav-item dropdown">
                            
                            <a class="nav-link" href="<?php
                                if (isset($_SESSION['taikhoan'])) {
                                    echo "congdong.php";
                                }else{
                                    echo "dangnhap.php";
                                }
                                ?>">Cộng Đồng</a>
                        </li>
                        
                    </ul>
                    <div class="d-flex my-2 my-lg-0">
                            <input class="form-control" list="datalistOptions" id="searchProduct" placeholder="Type to search...">
                    
                            <datalist id="datalistOptions">
                                <?php
                                $conn = mysqli_connect("localhost", "root", "", "db_web_da");
                                $sql1 = "SELECT * FROM `dsbai` WHERE `tenbai` like '%_%'  ";
                                $ketqua1 = mysqli_query($conn, $sql1);
                                while ($row = mysqli_fetch_array($ketqua1)) {
                                    ?>
                                    <option value='<?php echo  " ".$row['tenbai']." ";?>' data-url='<?php echo "./". $row['idbai']; ?>'>
                                    <?php
                                
                                }
                                ?>
                            </datalist>
                            <script>
                                document.getElementById("searchProduct").addEventListener("input", function() {
                                var inputValue = this.value.toLowerCase();
                                var dataListOptions = document.getElementById("datalistOptions").options;

                                for (var i = 0; i < dataListOptions.length; i++) {
                                    if (dataListOptions[i].value.toLowerCase() === inputValue) {
                                        // Lấy giá trị URL từ thuộc tính data-url
                                        var url = dataListOptions[i].getAttribute("data-url");

                                        // Chuyển hướng đến URL khi người dùng chọn tùy chọn
                                        window.location.href = url;

                                        // Dừng việc kiểm tra các tùy chọn còn lại
                                        break;
                                    }
                                }
                            });
                            </script>
                        </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABtklEQVR4nO2ZPShFYRjHf5dEsriSrAwWGViUkiQMRh8Li7JZZVDko5QySBYGCzIZZRZyDcrHjUSxiluyuK7u0VvnLqeLc895OM/N+dV/fHuf3zmn932f80JISEhQ1ABDwBywAiwBE0ALECEP6ASOAeubHABRFDMPpH+QyOQBWAUaUMaoSwFn3oFhlFAOvHgUMUkB9Shg0IdEJmsoYFNA5BoFxAREPoDioEVuBERMyoIWuRUSKQ1a5EhAwqx6gbMjIHKKAqYFRJZRQI+ASC8KaBQQaUIBewIiuyjgUkDkAgVsCYhsoICOHPqQbDFj21FCtw+RLpRx50HCHG/UsehBxIxRRy2QzLEzrEMps/n+NjJEXO4r90Ahyom5EImTB5y4ELkiD4i7/EGnmiLg0YXIK1CCYqZyWLUWUEgUWPdw5jL/xCpRQBUw6fJz+ipPwAxQHYRAq/0033wIOJMEtoG2375DKbB76zPB4r/KOdBvzylK8x8JWFmEzNwijNgHPCugpOwafDHgs/uTShro83OB86xAwrKTACq8iIwrKN5yZMyLyKGCwi1H9r2IJBQUbmXZPENCQv4rn6Ej5y2yxDtPAAAAAElFTkSuQmCC"></button>
                            </div>
                    </div>
                    </nav>
                    <!-- button cần chỉnh  -->
                    <button class="navbar-toggler bt-tong" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABtklEQVR4nO2ZPShFYRjHf5dEsriSrAwWGViUkiQMRh8Li7JZZVDko5QySBYGCzIZZRZyDcrHjUSxiluyuK7u0VvnLqeLc895OM/N+dV/fHuf3zmn932f80JISEhQ1ABDwBywAiwBE0ALECEP6ASOAeubHABRFDMPpH+QyOQBWAUaUMaoSwFn3oFhlFAOvHgUMUkB9Shg0IdEJmsoYFNA5BoFxAREPoDioEVuBERMyoIWuRUSKQ1a5EhAwqx6gbMjIHKKAqYFRJZRQI+ASC8KaBQQaUIBewIiuyjgUkDkAgVsCYhsoICOHPqQbDFj21FCtw+RLpRx50HCHG/UsehBxIxRRy2QzLEzrEMps/n+NjJEXO4r90Ahyom5EImTB5y4ELkiD4i7/EGnmiLg0YXIK1CCYqZyWLUWUEgUWPdw5jL/xCpRQBUw6fJz+ipPwAxQHYRAq/0033wIOJMEtoG2375DKbB76zPB4r/KOdBvzylK8x8JWFmEzNwijNgHPCugpOwafDHgs/uTShro83OB86xAwrKTACq8iIwrKN5yZMyLyKGCwi1H9r2IJBQUbmXZPENCQv4rn6Ej5y2yxDtPAAAAAElFTkSuQmCC">
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><b>Cá Nhân</b></h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                    <?php 
                                                    if (isset($_SESSION['taikhoan'])) {
                                                        include('anhcanhan.php');
                                                    }else{
                                                        echo "<a href='dangnhap.php'>Vui lòng đăng nhập</a>";
                                                    }
                                            ?>
                    </div>
                </div>
            </div>
        </nav>
        
        
    </div>   
</body>
</html>
