$(document).ready(function () {
    var win = $(window);
    var offset = 10;

    win.scroll(function () {
        if ($(document).height() <= (win.height() + win.scrollTop())) {
            offset += 10;
            $('#loader').show();

            $.ajax({
                url: 'core/ajax_db/fetchPost.php',
                method: 'POST',
                dataType: 'text',
                data: {
                    fetchPost: offset,
                }, success: function (response) {
                    $('.posted').html(response);
                    $('#loader').hide();

                }
            });
        }

    })

});
