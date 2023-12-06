
$(document).ready(function() {
    var likedStatus = {};

    $('.like-button').click(function() {
        var tin = $(this).data('tin');

        if (!likedStatus[tin]) {
            var email = $('#soluong<?php echo $tin; ?>').val();

            $.ajax({
                method: "POST",
                url: 'CNlike.php',
                data: {
                    email: email,
                    tin: tin
                },
                success: function(data) {
                    $('#like<?php echo $tin; ?>').text(data);
                    location.reload();
                    likedStatus[tin] = true;
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('AJAX request failed: ' + textStatus, errorThrown);
                }
            });
        }
    });
});