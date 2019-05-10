
$(document).ready(function (e) {

    $('#post_form').submit(function (event) {
        event.preventDefault();
        var id = $('#id_posts').val();
        var image_name = $('#file').val();
        var textarea = $('#status').val();

        
        if (image_name == '') {
        
            if (textarea != '') {
                $.ajax({
                    url: "core/ajax_db/message_posts.php",
                    method: "POST",
                    data: {
                        key: 'textarea',
                        id: id,
                        status: textarea,
                    },
                    success: function (response) {
                        $("#response-posts").html(response);
                        setInterval(function () {
                            $("#response-posts").fadeOut();
                        }, 1000);
                        setInterval(function () {
                            location.reload();
                        }, 1100);
                    }, error: function (response) {
                        $("#response-posts").html(response);
                        setInterval(function () {
                            $("#response-posts").fadeOut();
                        }, 3000);
                    }
                });

            }else{
                $("#empty-posts").html('Type or choose image to post').fadeIn();
                setInterval(function() {
                    $("#empty-posts").fadeOut();
                    }, 6000);
            }
        }else {
            var extensions = $('#file').val().split('.').pop().toLowerCase();
            if (jQuery.inArray(extensions, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                $("#response-posts").html('Invalid Image File').fadeIn();
                setInterval(function () {
                    $("#response-posts").fadeOut();
                }, 4000);
                $('#file').val('');
                return false;
            } else {
                $.ajax({
                    url: "core/ajax_db/message_posts.php",
                    method: "POST",
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        $("#response-posts").html(response).fadeIn();
                        setInterval(function () {
                            $("#response-posts").fadeOut();
                        }, 1000);
                        setInterval(function () {
                            location.reload();
                        }, 1100);
                    }, error: function (response) {
                        $("#response-posts").html(response).fadeIn();
                        setInterval(function () {
                            $("#response-posts").fadeOut();
                        }, 3000);
                   }
              });
            }
        }
    });

});
