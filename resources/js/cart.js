$(document).ready(function() {
    $('#AddCart').on('click', function() {
        var pid = $(this).data('pid');
        var url = $(this).data('url');
        console.log(url);
        $.ajax({
            url: url,
            type: 'GET',
        }).done(function(response) {
            console.log(response);
            $("#change-item-cart").empty();
            $("#change-item-cart").html(response);
        });
    });
});