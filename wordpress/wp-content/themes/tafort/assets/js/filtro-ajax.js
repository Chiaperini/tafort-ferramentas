jQuery(document).ready(function($) {
    $('#testar-ajax').on('click', function() {
        $.ajax({
            url: myAjax.ajaxurl,
            method: 'POST',
            data: {
                action: 'testar_ajax',
            },
            success: function(response) {
                alert('Resposta do servidor: ' + response);
            }
        });
    });
});
