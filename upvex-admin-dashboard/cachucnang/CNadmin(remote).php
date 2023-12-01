<?php
$email = $_POST['email'];
$conn = mysqli_connect("localhost","root","","db_web_da");
$sql1 = "UPDATE `dangky` SET `admin`='0' WHERE email ='$email' OR taikhoan='$email'";
$result1 = mysqli_query($conn, $sql1); 
// if(isset($result1)){
//   echo '<tr>
//                 <td><button type="button" id="add" class="btn btn-success add">ADD</button></td>
//               </tr>';
// }

?>