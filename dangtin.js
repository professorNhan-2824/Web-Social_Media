$(document).ready(function () {
            $("#submitForm").on("submit", function (e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "dangtin.php",
                    data: $(this).serialize(),
                    success: function (response) {
                        alert(response); // Hiển thị thông báo từ máy chủ
                        location.reload(); // Tải lại trang web
                    }
                });
            });
        });