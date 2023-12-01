<!DOCTYPE html>
<html lang="en">
<head>
    <style>
       body{
            font-family:verdana
        }
    </style>
    <!-- Các thẻ meta, title, và các thứ khác -->
</head>
<body>
    <button id="openWindowButton">Bình Luận</button>

    <script>
        // Lấy tham chiếu đến button
        const openWindowButton = document.getElementById("openWindowButton");

        // Sử dụng sự kiện click để mở cửa sổ khi button được nhấn
        openWindowButton.addEventListener("click", function() {
            // Các tùy chọn cho cửa sổ mới
            const windowOptions = {
                width: 500, // Chiều rộng
                height: 500, // Chiều cao
                top: (window.innerHeight - 480) / 2, // Vị trí top giữa màn hình
                left: (window.innerWidth - 440) / 2, // Vị trí left giữa màn hình
                resizable: false, // Không cho phép điều chỉnh kích thước
            };

            // Mở cửa sổ mới với đường dẫn "index2.html" và các tùy chọn
            const newWindow = window.open("test1.php", "NewWindow", stringifyWindowOptions(windowOptions));

            // Kiểm tra nếu cửa sổ mới đã được mở và cho phép điều chỉnh kích thước
            if (newWindow) {
                newWindow.focus();
            }
        });

        // Hàm này chuyển các tùy chọn cửa sổ thành chuỗi
        function stringifyWindowOptions(options) {
            return Object.entries(options)
                .map(([key, value]) => `${key}=${value}`)
                .join(",");
        }
    </script>
</body>
</html>
