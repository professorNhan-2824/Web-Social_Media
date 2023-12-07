
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
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
        }.formtaotin{
                border-radius: 20px ;
                height: 80px;
                padding-top:10px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            .taotin{
                width:80%;
            }
            .modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.7);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.7);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
.binhluan_form {
    /* Thiết lập div này để giữ ở dưới cùng và không cuộn */
    position: fixed;
    bottom: 0;
    /* width: 100%; */
    background-color: #f0f0f0;
    /* padding: 10px; */
    border-top: 1px solid #ccc;
}

    </style>
    <link rel="icon" type="image/png" href="image/icons8-c++-32.png" sizes="16x16">

<!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body >
                                                                <hr>
                                                                <div class="row h-100" >
                                                                    <select class="w-25 mb-3 ms-4" style="border-radius: 10px">
                                                                        <option value="Phổ biến">Phổ biến</option>
                                                                        <option value="Tất cả">Tất cả</option>
                                                                    </select>
                                                                    <?php
                                                                    $sql5="SELECT binhluan.email,binhluan.id, binhluan.noidung1, dangky.taikhoan, dangky.anh
                                                                    FROM binhluan INNER JOIN dangky
                                                                    on binhluan.email = dangky.email
                                                                    WHERE binhluan.idbai = '$tin' order by id desc";
                                                                    $ketqua6 = mysqli_query($conn,$sql5);
                                                                    echo "<div class='dsbinhluan$tin row '>";
                                                                    while($row7 = mysqli_fetch_array($ketqua6)){
                                                                        echo"<div  class='col-10 d-flex '>";
                                                                            echo "<div class='row pe-3'>";
                                                                                    echo'<image style="width: 68px; /* Điều chỉnh kích thước theo ý muốn */
                                                                                    height: 50px; /* Điều chỉnh kích thước theo ý muốn */
                                                                                    border-radius: 50%; /* Làm cho ảnh trở thành hình tròn */
                                                                                    object-fit: cove;padding-top:5px;" src='.$row7['anh'].'> </image>';
                                                                            echo "</div>";
                                                                            echo"<div style='background:#b3b3b3;border-radius: 25px;' class='row '>";
                                                                                echo"<div class='col-12'>";
                                                                                        echo "<b class='h5'>".$row7['taikhoan']." </b>";
                                                                                echo"</div>";
                                                                                echo"<div class='col-12>";
                                                                                    echo "<p class='pt-2 ps-3'> ".$row7['noidung1']."</p>";
                                                                                echo"</div>";
                                                                            echo "</div>";
                                                                        echo "</div>";
                                                                        
                                                                            include('CNbinhluan/xoabinhluan.php');
                                                                        echo "<div style='height:10px'></div>";
                                                                    }
                                                                    echo "</div>";
                    
                                                                        ?>
                                                                </div>
                                                                
                                                                <div class="row binhluan_form w-75 " style='border-radius:20px'>
                                                                    <div class="col-1">
                                                                        <?php
                                                                       
                                                                         echo'<image class="anhbinhluan" style="width: 68px; /* Điều chỉnh kích thước theo ý muốn */
                                                                            height: 70px; /* Điều chỉnh kích thước theo ý muốn */
                                                                            border-radius: 50%; /* Làm cho ảnh trở thành hình tròn */
                                                                            object-fit: cove;padding-top:5px;" src=./'.$_SESSION['anh'].'> </image>';
                                                                        
                                                                      ?>
                                                                    </div>
                                                                    <div class="col-9 d-flex justify-content-center ps-5">
                                                                        <input type="text" id="binhluan<?php echo $tin; ?>" class="form-control h-75 mt-3" >
                                                                        <!-- <textarea name="binhluan" id="binhluan" cols="80" placeholder="Nhập bình luận"  rows="2"></textarea> -->
                                                                    <div class="col-2">
                                                                    <button type="submit" id="button-bl<?php echo $tin; ?>" class="btn btn-success mt-4 ms-3" data-tin="<?php echo $tin; ?>">
                                                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAABEUlEQVR4nO3UsS4FQRjF8Q1RSDwB4gUkGoVGiyfQ3cQjKCgVWlEpFZp9hHsr8QQSCYWCSkUh0QgJEfnJ5k6xNjN7197ViNNM5pvN+c93ZvNl2b9Kwiy2cZJ1JUxjEwN8GGpnXNMJrOIYz77rE3NtjRexjztpnbbN9SJhWMRyU9r32uYa01Po6D3sXzDTJteYbrGBx1Itr7t1rrkGxUPiulJfHxXLWQPzI0yhX6nfY7JJ9inIG7bCdweR88ORj1sDecBKOO8lLrDUCBCBXGIh1JfxGjG/amxegewVa9jPh05i2v0xIAI7T5i3Hw0lQNFJN6Ohxd/VGxtQA0mPho4geWfmCcha9hsyhBSzq340/Al9AZHHBW9fwOz7AAAAAElFTkSuQmCC">
                                                                    </button>


                                                                    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                                                                    <script>
                                                                        $(document).ready(function() {
                                                                            $('#button-bl<?php echo $tin; ?>').click(function() {
                                                                                var tin = $('#bai<?php echo $tin; ?>').val();
                                                                                var email = $('#soluong<?php echo $tin; ?>').val();
                                                                                var noidung = $('#binhluan<?php echo $tin; ?>').val();
                                                                                var taikhoan = $('#taikhoan<?php echo $tin; ?>').val();

                                                                                $.ajax({
                                                                                    method: "POST",
                                                                                    url: 'CNcomment.php',
                                                                                    data: {
                                                                                        email: email,
                                                                                        tin: tin,
                                                                                        noidung: noidung,
                                                                                        taikhoan: taikhoan
                                                                                    },
                                                                                    dataType: 'json', 
                                                                                })
                                                                                .done(function(response) {
                                                                                    if (response.success) {
                                                                                        var commentText = response.comment.taikhoan + ': ' + response.comment.noidung;
                                                                                        $('#dsbinhluan<?php echo $tin; ?>').append('<p>' + commentText + '</p>');
                                                                                        
                                                                                        $('#binhluan<?php echo $tin; ?>').val('');
                                                                                        location.reload();
                                                                                    } else {
                                                                                        alert(response.message);
                                                                                    }
                                                                                })
                                                                                .fail(function(jqXHR, textStatus, errorThrown) {
                                                                                    console.log('AJAX request failed: ' + textStatus, errorThrown);
                                                                                });
                                                                            });
                                                                        });
                                                                    </script>




                                                                    </div> 
                                                                </div>
                                                                </div>

    </body>
</html>
 
        