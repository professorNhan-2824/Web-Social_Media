<?php
    session_start();
?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Login Page | CodingNepal</title>
    <link rel="stylesheet" href="/DOAN/quenmatkhau/nhapmail.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <div class="container flex">
      <div class="facebook-page  flex">
        <form id='form' method="POST" >
            <div id='formnhap'>
                <input type="hidden" id="email" name="email" placeholder="<?php echo $_SESSION['email'] ?>" required>
          <!-- <input type="email" id="taikhoan" name="taikhoan" placeholder="Email" value="" disabled> -->
                <div  class="form-group shadow-textarea">
                <textarea class="form-control z-depth-1" id="noidung" rows="10" placeholder="Góp ý tại đây"></textarea>
                </div>
                <div class="link pt-3">
                    <button type="submit" id="add" class="login">Confirm</button>
                </div>
                <hr>
                <div class="button">
                    <a href="index.php">Quay lại</a>
                </div>
            </div>
        
        </form>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
 <script>
$(document).ready(function() {
        $('#add').click(function() {
            $.ajax({
                method: "post",
                url: 'CNgopy(index).php',
                data: {
                    email: $('#email').val(),
                    noidung: $('#noidung').val()
                },
                success: function(data) {
                    // $('#formnhap').val('<h1>Cảm ơn bạn đã góp ý</h1>');
                    $('#formnhap').append(data);
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
                
