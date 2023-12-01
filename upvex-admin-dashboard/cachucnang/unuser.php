<?php
$email1 = $_POST['email1'];
                                                        $conn = mysqli_connect("localhost","root","","db_web_da");
                                                        $sql = "DELETE FROM `dsden` WHERE email='$email1'";
                                                        $result = mysqli_query($conn, $sql);
                                                        ?>