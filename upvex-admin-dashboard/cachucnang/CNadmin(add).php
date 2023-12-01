<?php
$email = $_POST['email'];
$conn = mysqli_connect("localhost","root","","db_web_da");
$sql1 = "UPDATE `dangky` SET `admin`='1' WHERE email ='$email' OR taikhoan='$email'";
$result1 = mysqli_query($conn, $sql1); 
// if(isset($result1)){
//   echo '<tr>
//                <td><button type="button" id="remote" class="btn btn-danger add">REMOTE</button></td>
//               </tr>';
// }

?>
