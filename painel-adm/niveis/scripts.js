$(document).ready(function() {
    $('#example').DataTable({
        "ordering": false
    });
} );

// Ajax para inserir ou editar dados 
$("#form").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: pag+"/inserir.php",
        type: 'POST',
        data: formData,

        success: function (mensagem) {
            $('#mensagem').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                $('#btn-fechar').click();
                window.location = `./?pagina=${pag}`;

            } else {
                $('#mensagem').addClass('text-danger')
            }

            $('#mensagem').text(mensagem)

        },

        cache: false,
        contentType: false,
        processData: false,
        
    });

});