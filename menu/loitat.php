<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 100;
            margin-top: 20%; 
         
        }
        a{
            text-decoration:none;
            color: black;
        }
        a:hover{
            color: #cc66ff;
        }
    </style>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="sticky">
    <h4 style="color:  #8c8c8c;"><b>Được tài trợ</b></h4> 
    <hr>
    <div>
        <a href="https://vku.udn.vn/">
        <img class="w-75" src="https://vku.udn.vn/wp-content/uploads/2023/07/Rectangle-19765.png" alt="anh nền"><br>
        <b>Học gì tại VKU?</b><br><i style="color:  #b3b3b3;">vku.udn.vn</i>
        </a>
    </div>
    <div style="height: 8px;"></div>
    <h4 style="color:  #8c8c8c;"><b>Lối tắt cả bạn</b></h4> 
    <hr>
    <div>
        <a href="./congdongC++.php">
            <img src="data:image/png;base64,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">
            <b>Nhóm C++</b>
        </a>
    </div>
    <div style="height: 15px;"></div>
    <div>
        <a href="./congdongC.php">
            <img src="data:image/png;base64,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">
            <b>Nhóm C#</b>
        </a>
    </div>
    <div style="height: 15px;"></div>
    <div>
        <a href="./congdongPT.php">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFFklEQVR4nO2a3U9TdxyHz66dZheKQ+cQWtvZbe7FDYYWwaqsrNbZ0ooR5nwFiyVz0ekAN0XiXDIim9tINNFkyS6W4LywaGRCijRTL6Z4PZfMUP8AKNx4gc/ybSCyZELPi23P0id5bk7O5/P7ntOcpr/0KEqOHDly5MjxTFi4j7z8JtrzwwwtCjO+qAlSMsx4fpi7kn2xiQWKGXm5icCS/SSWhEGPL+1ndHEYv2ImChsJLG3k8dJGKGjkcsF+KhYeZE6qeTm3IMTaghAR6VgaYqIgZJKbULSPPEuIhDUElhDNevssIVqlyxpixGqGx8HWQLu9AWwNXDass56IdNrraVOyHcde7r1aD682UDF1rOUGnqODPGyNEW+JUaW6cw+uZOde7irZzordjK3YA45Gnp86duE68Qt9IJ7vY1htp30Xc6VzxR4SSrbz9m4Qpx8biBAf6AEx2qP+BjytNyt5dyeI04/93U3Vg27iD7oZHv4Vt1G9WUnpDhDN0ms4zu0gmqXXcCo+AtEsvYazrhZEs/QaTuU2EM3SazgfbAXRLL0p4asjz1tDu7eGIe8Wxr01oEdFAyl1b2F84xbuyqzuoEH7Bl+QgC9IwhcEo9Q4h7p1Aoxurta5gwwGCQQCPA4EIBDganU162prmadkgMkZZrx5dXXM8ftZGwgQkXOrq5mo1noT6nzkbfWT2OqHGh/HlQwjc4ipnl/jpzWZ8TES1PI41Ppor/WBHlUvOvM8qjtrfUQks82nYRu9fRP3Pv4Q9KgYiJbOHV5ckzn12+idXsZ2bYLG4JNtbSaRWUSVmbmS2enVsI2u3wiikgU0eFgss+zdyGjariPkgdlU0kTIQ/Pkmv0astpmbaqC2VSeMZ96WNxURXPYzSNZL/w+HrUdmmc94AZRdfBJ3nvATfQTN+NTXTpt1ziHtus4VAmilkUPVfLVVF6nY4cq6T+o4ZPXfR1HNoCoIeeV3OH1PDq8gcOfrWeR6sU1zjqTqktb1oGoNtfsIprMujiipImpWWdSdemXLhDV5r5wMSa5ljLylSxA63UoxytItFXAsXJ1P4QkIypZwDE385LzlKv//aCcXMPQyXI4uYa1qnKSKTf2Bkx16vCO6kVPOTnxdRmcKiOiJicZUfWCKXRq9VSZht3sd04WfONktMMJHU5aU81Nnp/RRwCF5zqctCdnWc1IRznzNRV1rsbfuYqJzlVwehWR06W4fpjlO0HOFZUM0FnOC9+uZkNnKb2Tc0x0lrJZV+mZEvxnShn5vhTUqGUttWvMZHLm9/ApRnB2JfO7SmjrKuZOVzFjXSUwm1rWSaV3Jn8sJpGcsYQ2mVnJBOeKQTRLr+GcfwdEs/Qazk8rQTRLr+H8/BaIZuk1nF/eBNEsvYbT/QaIZuk1nEuvg6gl2/I7ns9jPGz+j7fJ9PSmlcuvgagle7aP+Ll+EM/2//tlKj29aeWKg8QVB0Qd6v9P+K2H+PUrkHTa22RXrcyTzh6Hhm1turn2CkO9y+GaXd02WvjrElX3LxL/8yLD96e9TdbrwCWdvcs1bGvTTZ+dE3126LOp20bP0tkjndftmf+TdlYGrSyI2hgdsMHAstS30U8juoyjyS4bI1Fbhn7fqyW2DP+glYmYFWIWIjeKcKn5TpBzJROz0CMd0jVo0bmtTTe3ivDftDByywJ6lI6bRQZta9PNHzbm3yqk7XYhd24XMna7CFKykIRkJCsdmb6OHDly5Mih/E/5B0kGvQa+nk7zAAAAAElFTkSuQmCC">
            <b>Python</b>
        </a>
    </div>
    <div style="height: 15px;"></div>
        <div>
        <i style="color:  #b3b3b3;">INCLUDE © 2023</i>
        </div>
</body>
</html>