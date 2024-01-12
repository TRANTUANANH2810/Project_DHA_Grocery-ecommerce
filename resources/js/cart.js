

$(document).ready(function() {
    $('#AddCart').on('click', function() {
        var pid = $(this).data('pid');
        var url = $(this).data('url');
        $.ajax({
            url: url,
            type: 'GET',
        }).done(function(response) {
            RenderCart(response);
        });
    });
});

$(document).ready(function(){
    $("#change-item-cart").on("click", ".cart-preview-item__close button", function(){
        $.ajax({
            url: 'Delete-Item-Cart/'+$(this).data("id"),
            type: 'GET',
        }).done(function(response) {
            RenderCart(response);
            alertify.success('Thêm sản phẩm thành công');
        });
      
    });
});

function RenderCart(response){
    $("#change-item-cart").empty();
    $("#change-item-cart").html(response);
    $("#total-quanty-show").text($("#total-quanty-cart").val());
}
