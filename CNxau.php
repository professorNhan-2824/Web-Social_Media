<?php
$xau = $_POST['repost'];
$bai = $_POST['email'];
    $conn=mysqli_connect("localhost","root","","db_web_da");
    $sql = "SELECT * FROM `dangtin` WHERE email='$bai'";
    // $sql = "UPDATE `dangtin` SET `repost`='$xau' WHERE `email`='$bai'";
    $result = mysqli_query($conn,$sql);
    if($result){
        $row = mysqli_fetch_array($result);
    
        if($row['repost'] == 0){
            $tong = $row['repost']+1;
            $sql1 = "UPDATE `dangtin` SET `repost`='1' WHERE `email`='$bai'";
            $result1 = mysqli_query($conn,$sql1);
            echo "<script>alert('cảm ơn bạn đã đóng góp cộng đồng sạch hơn');
            window.location.href = 'congdong.php'</script>";
            include("congdong.php");
        }
        else if($row['repost'] == 1){
            $tong1 = $row['repost']+1;
            $sql2 = "UPDATE `dangtin` SET `repost`='2' WHERE `email`='$bai'";
            $result2 = mysqli_query($conn,$sql2);
            echo "<script>alert('cảm ơn bạn đã đóng góp cộng đồng sạch hơn');
            window.location.href = 'congdong.php'</script>";
        }else if($row['repost'] == 2){
            // $tong2 = $row['repost']+1;
            $sql3 = "UPDATE `dangtin` SET `repost`='3' WHERE `email`='$bai'";
            $result3 = mysqli_query($conn,$sql3);
            // echo "<script>alert('cảm ơn bạn đã đóng góp cộng đồng sạch hơn')</script>";
            $sql4 = "INSERT INTO `dsden`(`email`) VALUES ('$bai')";
            $result4 = mysqli_query($conn,$sql4);
            echo "<script>alert('USER này có tình trạng xấu bị báo cáo nhiều lần sẽ bị kháo acc 3245 ngày')
            window.location.href = 'congdong.php'</script>";
        }
        // else if($row['repost'] == 3){
        //     $sql4 = "INSERT INTO `dsden`(`email`) VALUES ('$bai')";
        //     $result4 = mysqli_query($conn,$sql4);
        //     echo "<script>alert('USER này có tình trạng xấu bị báo cáo nhiều lần sẽ bị kháo acc 3245 ngày')</script>";
        //     include("congdong.php");
        // }
        
    }
?>


