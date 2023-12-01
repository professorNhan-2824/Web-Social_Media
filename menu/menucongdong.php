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
    <style>
        @media only screen  and (max-width: 768px){
        .sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 0; 
            z-index: 100; 
       
        }
        }
    </style>
    <link rel="icon" type="image/png" href="image/icons8-c++-32.png" sizes="16x16">

<!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-sm navbar-light sticky" style="font-family: Arial;">
              <div class="container ">
              <a class="navbar-brand" style="color: #131313;" href="#"><b><i>MENU</i></b></a>
              <button class="navbar-toggler d-lg-none" type="button" style="border: 2px solid  #D9EEE1;border-radius: 5px;" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="./image.bakground/icons8-list-32.png" alt="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse  " id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link active" href="/DOAN/index.php" aria-current="page"><img src="/DOAN/image/icons8-home-page-16.png" alt=""> <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-light " href="./bai1(lt).php"  >Lập Trình</a>
                        </li>

                        <li class="nav-item ">
                        <a class="nav-link text-light" href="
                        <?php 
                                    if (isset($_SESSION['taikhoan'])) {
                                        echo"/DOAN/congdong.php";
                                    }else{
                                        echo "/DOAN/dangnhap.php";
                                    }
                                    ?>
                        "  >Cộng Đồng<a>
                            
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Hỗ Trợ</a>
                        </li>
                    </ul>
                    <form class="d-flex my-2 my-lg-0 ps-1">
                        <input class="form-control me-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0 " type="submit"><img src="./image/icons8-search-32 (2).png" alt=""></button>
                    </form>
                </div>
          </div>
          
        </nav>   
</body>
</html>