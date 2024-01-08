$(document).ready(function() {
    $('#category-select').on('change', function() {
        fetchDataAttribute();
    });
    
    $('#category-select').trigger('change');
});

function fetchDataAttribute() {
    var selectedCategoryId = $('#category-select').val();
    var idPro = $('#url-fetch-data-attribute').data('id');
    var urlFetchDataAttribute = idPro ? $('#url-fetch-data-attribute').data('url').replace('editText', selectedCategoryId).replace('NULL', idPro) : $('#url-fetch-data-attribute').data('url').replace('editText', selectedCategoryId);
    var elHtmlAttribute = $('#attribute');

    $.ajax({
        type: 'GET',
        url: urlFetchDataAttribute,
        success: function(response) {
            elHtmlAttribute.append(response);
        },
        error: function(error) {
            console.error('Error:', error);
        }
    });
}