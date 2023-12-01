<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="icon" type="image/png" href="image/icons8-c++-32.png" sizes="16x16">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            justify-content: center;
        }
    </style>
</head>
<body>
    <label for="exampleDataList" class="form-label">Datalist example</label>
    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
    <datalist id="datalistOptions">
        <?php
            $conn = mysqli_connect("localhost","root","","thigk");
            $mysql = "SELECT * FROM Customers
            WHERE CustomerName LIKE 'Alfreds Futterkiste%';";

        ?>
    </datalist>
</body>
</html>