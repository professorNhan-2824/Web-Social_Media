<?php
$email = $_POST['email'];
$conn = mysqli_connect("localhost","root","","db_web_da");
$sql = "SELECT * FROM `dangky` WHERE email = '".$_POST['email']."' OR taikhoan = '".$_POST['email']."'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    if ($row['admin'] == '1') {
        echo'<tr>';
        echo "<td>".$row['taikhoan']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['dienthoai']."</td>";
        echo '<input type="hidden" id="email" value="'.$row['email'].'">';
        echo '<td><button type="button" id="xoa"  class="btn btn-danger">REMOTE</button></td>';
        echo'</tr>';
//         echo  "
//         <script>
//         $(document).ready(function() {
//             var isClicked = false;
//             $('#xoa').click(function() {
//                 $.ajax({
//                     method: 'post',
//                     url: 'CNadmin(remote).php',
//                     data: {
//                         email: $('#email').val(),
//                     },
//                     dataType: 'html', // Thêm dòng này
//                     success: function(data) {
//                         $('#table1').append(data);
                        
//                         $('#add').removeClass('btn-danger').addClass('btn-success');
//                     },
//                     error: function(jqXHR, textStatus, errorThrown) {
//                         console.log('AJAX request failed: ' + textStatus, errorThrown);
//                     }
//                 });
//             });
//         });
// </script>
//         ";

    } else if ($row['admin'] == '0') {
        echo'<tr>';
        echo "<td>".$row['taikhoan']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['dienthoai']."</td>";
        echo '<input type="hidden" id="email" value="'.$row['email'].'">';
        echo '<td><button type="button" id="add"  class="btn btn-success">ADD</button></td>';
        echo'</tr>';
//         echo  "
//         <script>
//         $(document).ready(function() {
//             var isClicked = false;
//             $('#add').click(function() {
//                 $.ajax({
//                     method: 'post',
//                     url: 'CNadmin(add).php',
//                     data: {
//                         email: $('#email').val(),
//                     },
//                     dataType: 'html', // Thêm dòng này
//                     success: function(data) {
//                         $('#table1').append(data);
                        
//                         $('#add').removeClass('btn-success').addClass('btn-danger');
//                     },
//                     error: function(jqXHR, textStatus, errorThrown) {
//                         console.log('AJAX request failed: ' + textStatus, errorThrown);
//                     }
//                 });
//             });
//         });
// </script>
//         ";
    }
    
}
?>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
 <script>
        $(document).ready(function() {
            $('#add').click(function() {
                var i =0;
                $.ajax({
                    method: 'post',
                    url: 'CNadmin(add).php',
                    data: {
                        email: $('#email').val(),
                    },
                    dataType: 'html', // Thêm dòng này
                    success: function(data) {
                        $('#table1').val( );
                        $('#table1').append(data);
                        xoa();
                        $('#add').removeClass('btn-success').addClass('btn-danger').text('REMOTE');
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log('AJAX request failed: ' + textStatus, errorThrown);
                    }
                });
            });
            function xoa(){
                    $('#xoa').click(function() {
                    var i =0;
                    $.ajax({
                        method: 'post',
                        url: 'CNadmin(remote).php',
                        data: {
                            email: $('#email').val(),
                        },
                        dataType: 'html', // Thêm dòng này
                        success: function(data) {
                            $('#table1').val( );
                            $('#table1').append(data);
                            $('#xoa').removeClass('btn-danger').addClass('btn-success').text('ADD');
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log('AJAX request failed: ' + textStatus, errorThrown);
                        }
                    });
                });
                }
        });
</script>
<script>
        $(document).ready(function() {
            var isClicked = false;
            $('#xoa').click(function() {
                var i =0;
                $.ajax({
                    method: 'post',
                    url: 'CNadmin(remote).php',
                    data: {
                        email: $('#email').val(),
                    },
                    dataType: 'html', // Thêm dòng này
                    success: function(data) {
                        $('#table1').val( );
                        $('#table1').append(data);
                        console.log(i++);
                        $('#xoa').removeClass('btn-danger').addClass('btn-success').text('ADD');
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log('AJAX request failed: ' + textStatus, errorThrown);
                    }
                });
            });
            function add(){
                    $('#add').click(function() {
                    var i =0;
                    $.ajax({
                        method: 'post',
                        url: 'CNadmin(add).php',
                        data: {
                            email: $('#email').val(),
                        },
                        dataType: 'html', // Thêm dòng này
                        success: function(data) {
                            $('#table1').val( );
                            $('#table1').append(data);
                            $('#xoa').removeClass('btn-danger').addClass('btn-success').text('ADD');
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log('AJAX request failed: ' + textStatus, errorThrown);
                        }
                    });
                });
                }
        });
</script> 