$(document).ready(function() {
    $('.search').keyup(function () {
        var searcher = $(this).val();
         $.ajax({
                    url: 'core/ajax_db/search.php',
                    method: 'POST',
                    dataType: 'text',
                    data: {
                        search: searcher,
                    }, success: function (response) {
                        $(".search-result").html(response);
                        // console.log(response);
                    }
                });
    });
});