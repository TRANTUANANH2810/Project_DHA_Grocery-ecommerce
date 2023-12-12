$(document).on('hide.bs.modal','.modal', function () {
    $('.name').val('');
    $('.image img').attr('src', $('.image img').data('init'));
    $('.link').val('');
    $('.error').hide();
    $('.status').prop('checked',false);
    $('#sortable').html(null);
});
$(function() {
    $('body').on('click', '.btn-destroy', function(event) {
        var action = $(this).attr('data-href');
        $('#delete-modal').modal('show');
        $('#form-destroy').attr('action', action);
    });
});