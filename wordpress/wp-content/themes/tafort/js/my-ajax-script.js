jQuery(document).ready(function($) {
    // Faz uma solicitação AJAX quando o botão é clicado
    $('#my-button').on('click', function() {
        $.ajax({
            url: ajax_object.ajax_url,
            type: 'POST',
            data: {
                action: 'my_ajax_action',
                // Adicione quaisquer dados adicionais que você precise passar para a função de manipulação
            },
            success: function(response) {
                // Manipula a resposta da solicitação AJAX
            }
        });
    });
});
