<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Quản Trị Thông Tin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <!-- <link rel="shortcut icon" href="assets\images\favicon.ico"> -->
        <link rel="icon" type="image/png" href="/DOAN/image/icons8-xing-squared-57.png" sizes="50x50">
        <!-- third party css -->
        <link href="assets\libs\datatables\dataTables.bootstrap4.css" rel="stylesheet" type="text/css">
        <link href="assets\libs\datatables\responsive.bootstrap4.css" rel="stylesheet" type="text/css">
        <!-- third party css end -->

        <!-- App css -->
        <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\icons.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\app.min.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    </head>

    <body>

        <!-- Begin page -->
      
        <?php
            include ("./header1.php");
            // include ("./menu1.php");
            ?>
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <div class="content">
                <div class="content">

                    <!-- Start Content-->
                         <div class="container-fluid">
                                <div class="app-search-box mt-3">
                                    <div class="input-group">
                                    <a href="../congdong.php" style='color:white'><button type="button" class="btn btn-primary" >Quay lại</button></a>
                                    </div>
                             </div>
                             <table class="table table-hover" id='table'>
                                
                                <tbody id='table1'>
                                    
                                
                                </tbody>
                            </table>
                            <h2>Danh sách</h2>
                            <div class="container-fluid" style="background-color: #808080;border-radius: 20px;">

<table class="table table-hover" id='table2'>
<thead>
    <tr>
        <th>Nội Dung</th>
        <th>Ngôn Ngữ</th>
        <th>Thời Gian</th>
        <th>Lượng Like</th>
        <th>Lượng comment</th>
    </tr>
</thead>
<tbody id='table3'>
<?php
                                $conn = mysqli_connect("localhost","root","","db_web_da");
                                $sql = "SELECT * FROM `dangtin` WHERE email = '".$_SESSION['email']."'";
                                $result = mysqli_query($conn, $sql);
                                while( $row = mysqli_fetch_array($result) ){
                                    echo'<tr>';
                                    echo "<td><a style='color:white;' href='../chitietcongdong.php?IDTin=".$row['IDTin']."'>".$row['noidung']."</a></td>";
                                    echo "<td>".$row['ngongu']."</td>";
                                    echo "<td>".$row['time']."</td>";
                                    $sql1 = "SELECT count(IDTin) as ketqua FROM `likepage` WHERE IDTin = '".$row['IDTin']."'";
                                    $sql2 = "SELECT count(idbai) as ketqua1 FROM `binhluan` WHERE idbai = '".$row['IDTin']."'";
                                    $result1 = mysqli_query($conn, $sql1);
                                    $row1 = mysqli_fetch_array($result1);
                                    $result2 = mysqli_query($conn, $sql2);
                                    $row2 = mysqli_fetch_array($result2);
                                    $dem = $row1['ketqua'];
                                    $dem2 = $row2['ketqua1'];
                                    echo "<td>".$dem."</td>";
                                    echo "<td>".$dem2."</td>";
                                    // echo '<input type="hidden" id="email1" value="'.$row['email'].'">';
                                    // echo '<td><button type="button" id="xoa"  class="btn btn-danger">REMOTE</button></td>';
                                    echo'</tr>';
                                }
                                ?>

</tbody>
</table>

</div>
                        <!-- <div class="container-fluid" style="background-color: #808080;border-radius: 20px;">
                                
                                <table class="table table-hover" id='table2'>
                                <thead>
                                    <tr>
                                        <th>Tài Khoản</th>
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id='table3'>
                                <?php
                                $conn = mysqli_connect("localhost","root","","db_web_da");
                                $sql = "SELECT * FROM `dangky` WHERE admin = '1'";
                                $result = mysqli_query($conn, $sql);
                                while( $row = mysqli_fetch_array($result) ){
                                    echo'<tr>';
                                    echo "<td>".$row['taikhoan']."</td>";
                                    echo "<td>".$row['email']."</td>";
                                    echo "<td>".$row['dienthoai']."</td>";
                                    echo '<input type="hidden" id="email1" value="'.$row['email'].'">';
                                    // echo '<td><button type="button" id="xoa"  class="btn btn-danger">REMOTE</button></td>';
                                    echo'</tr>';
                                }
                                ?>
                                
                                </tbody>
                            </table>
                       
                        </div> -->
                        </div> <!-- end container-fluid -->
                        
                </div> <!-- content -->

            </div> <!-- content-page -->
            <!-- ============================================================== -->

            <div class="content-page">
                

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2019 &copy; Upvex theme by <a href="">Coderthemes</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h5 class="m-0 text-white">Settings</h5>
            </div>
            <div class="slimscroll-menu">
                <!-- User box -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="assets\images\users\user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                    </div>
            
                    <h5><a href="javascript: void(0);">Marcia J. Melia</a> </h5>
                    <p class="text-muted mb-0"><small>Product Owner</small></p>
                </div>

                <!-- Settings -->
                <hr class="mt-0">
                <div class="row">
                    <div class="col-6 text-center">
                        <h4 class="mb-1 mt-0">8,504</h4>
                        <p class="m-0">Balance</p>
                    </div>
                    <div class="col-6 text-center">
                        <h4 class="mb-1 mt-0">8,504</h4>
                        <p class="m-0">Balance</p>
                    </div>
                </div>
                <hr class="mb-0">

                <div class="p-3">
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" checked="">
                        <label class="custom-control-label" for="customSwitch1">Notifications</label>
                    </div>
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch2">
                        <label class="custom-control-label" for="customSwitch2">API Access</label>
                    </div>
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch3" checked="">
                        <label class="custom-control-label" for="customSwitch3">Auto Updates</label>
                    </div>
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch4" checked="">
                        <label class="custom-control-label" for="customSwitch4">Online Status</label>
                    </div>
                </div>

                <!-- Timeline -->
                <hr class="mt-0">
                <h5 class="pl-3 pr-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
                <hr class="mb-0">
                <div class="p-3">
                    <div class="inbox-widget">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets\images\users\user-2.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets\images\users\user-3.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets\images\users\user-4.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                            <p class="inbox-item-text">Nice to meet you</p>
                        </div>

                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets\images\users\user-5.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets\images\users\user-6.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                    </div> <!-- end inbox-widget -->
                </div> <!-- end .p-3-->

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets\js\vendor.min.js"></script>

        <!-- Third Party js-->
        <script src="assets\libs\jquery-knob\jquery.knob.min.js"></script>
        <script src="assets\libs\peity\jquery.peity.min.js"></script>
        <script src="assets\libs\apexcharts\apexcharts.min.js"></script>
        <script src="assets\libs\datatables\jquery.dataTables.min.js"></script>
        <script src="assets\libs\datatables\dataTables.bootstrap4.js"></script>
        <script src="assets\libs\datatables\dataTables.responsive.min.js"></script>
        <script src="assets\libs\datatables\responsive.bootstrap4.min.js"></script>
        <!-- third party js ends -->

        <!-- Dashboard init -->
        <script src="assets\js\pages\dashboard-2.init.js"></script>

        <!-- App js -->
        <script src="assets\js\app.min.js"></script>
        <script>
            $(document).ready(function() {
                var isClicked = false;
                $('#ipgui').click(function() {
                    $.ajax({
                        method: "post",
                        url: 'CNadmin.php',
                        data: {
                            email: $('#email').val(),
                        },
                        dataType: 'html', // Thêm dòng này
                        success: function(data) {
                            $('#table1').append(data);
                             
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log('AJAX request failed: ' + textStatus, errorThrown);
                        }
                    });
                });
            });
</script>

    </body>
</html>