

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

// checkout
$("#continueToCheckout").on("click", function (e) {
    e.preventDefault();
    var csrfToken = $('meta[name="csrf-token"]').attr('content');
    var url = $(this).data('url');
    var userName = $('input[name="user_name"]').val();
    var userPhone = $('input[name="user_phone"]').val();
    var userAddress = $('#user_address').val();
    var dataRequest = {
        userName: userName,
        userPhone: userPhone,
        userAddress: userAddress
    }
    $.ajax({
        url: url,
        method: "POST",
        data: dataRequest,
        headers: {
            'X-CSRF-TOKEN': csrfToken
        },
        success: function (response) {
            window.location.href = response;
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });
});

$("#SaveListItemCart").on("click", function (e) {
    e.preventDefault();
    var pid = $(this).data('pid');
    var qty = $('#quanty-item-'+pid).val();
    var url = $(this).data('url').replace('NULL', qty);
    
    $.ajax({
        url: url,
        method: "GET",
        success: function (response) {
            location.reload();
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });
});

$("#DeleteListItemCart").on("click", function (e) {
    e.preventDefault();
    var url = $(this).data('url');
    
    $.ajax({
        url: url,
        method: "GET",
        success: function (response) {
            location.reload();
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });
});

function RenderCart(response){
    $("#change-item-cart").empty();
    $("#change-item-cart").html(response);
    $("#total-quanty-show").text($("#total-quanty-cart").val());
}
