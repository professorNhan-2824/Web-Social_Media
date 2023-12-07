<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
     echo "<input type='hidden' id='email".$row7['id']."' value='".$row7["email"]."'>";
     echo "<input type='hidden' id='id".$row7['id']."' value='".$row7["id"]."'>";
                                                                
        if( $_SESSION['email'] === $row['email']){
            echo "<div class='col-2'>";
            echo '<button type="submit" id="ipgui'.$row7["id"].'" class="btn btn-danger">Xóa</button>';
            echo "</div>";
        } else    
        if($_SESSION['email'] === $row7['email']){
            echo "<div class='col-2'>";
            echo '<button id="ipgui'.$row7["id"].'" type="submit" class="btn btn-danger">Xóa</button>';
            echo "</div>";
        }                                                     
    ?>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
                $('#ipgui<?php echo $row7["id"]; ?>').click(function() {
                    $.ajax({
                        method: "post",
                        url: 'CNbinhluan/xoa1.php',
                        data: {
                            email: $('#email<?php echo $row7['id']; ?>').val(),
                            id: $('#id<?php echo $row7['id']; ?>').val()
                            
                        },
                        success: function(data) {
                            $('#dsbinhluan<?php echo $tin; ?>').text(data);
                            location.reload();
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            // console.log('AJAX request failed: ' + textStatus, errorThrown);
                        }
                    });
                });
            });
    </script>
</body>
</html>