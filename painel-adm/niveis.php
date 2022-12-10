<?php 
    require_once('../conexao.php');
    require_once("verificar.php");
    $pagina = 'niveis';
?>
<div class="col-md-12 my-3">
    <a type="button" class="btn btn-dark">Novo Nível</a>    
</div>
<div class="tabela bg-light">
    <table id="example" class="table table-striped table-hover my-4 bg-light">
        <thead>
            <tr>
                <th>Nível</th>						
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
                <?php 
                    $query = $pdo->query("SELECT * FROM niveis ORDER BY id DESC");
                    $niveis = $query->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($niveis as $key => $nivel) {                        
                ?>
                <tr>                    
                    <td><?=$nivel['nivel'] ?></td>                    
                    <td>02</td>                    
                </tr>
                <?php }?>
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