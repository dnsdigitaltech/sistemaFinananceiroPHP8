<?php 
    require_once('../conexao.php');
    require_once("verificar.php");
    $pagina = 'niveis';
?>
<div class="col-md-12 my-3">
    <a type="button" class="btn btn-dark">Novo Nível</a>    
</div>
<div style="margin-right:40px">
    <table id="example" class="table table-hover my-4" style="width:100%">
        <thead>
            <tr>
                <th>Nome</th>						
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>01</td>
                    <td>02</td>
                </tr>
        </tbody>
    </table>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable({
            "ordering": false
        });
    } );
</script>