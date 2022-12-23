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
        url: "inserir.php",
        type: 'POST',
        data: formData,

        success: function (mensagem) {
            $('#mensagem-perfil').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                $('#btn-fechar-perfil').click();
                window.location = "index.php?";

            } else {
                $('#mensagem-perfil').addClass('text-danger')
            }

            $('#mensagem-perfil').text(mensagem)

        },

        cache: false,
        contentType: false,
        processData: false,
        
    });

});