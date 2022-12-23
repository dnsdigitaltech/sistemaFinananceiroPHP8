<?php 
    require_once('../conexao.php');
    require_once("verificar.php");
    $pagina = 'niveis';
?>
<div class="col-md-12 my-3">
    <a data-bs-toggle="modal" data-bs-target="#modalForm" type="button" class="btn btn-dark">Novo Nível</a>    
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
                    <td>
                        <a href="" title="Editar Registro">
                            <i class="fa-solid fa-pen-to-square text-primary"></i>
                        </a>
                        <a href="" title="Excluir Registro">
                            <i class="fa-solid fa-trash-can text-danger"></i>
                        </a>
                    </td>                    
                </tr>
                <?php }?>
        </tbody>
    </table>
</div>

<!-- Modal Form-->
<div class="modal fade" id="modalForm" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5"><span id="tituloModal">Inserir Dados</span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form id="form-perfil">
        <div class="modal-body">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nível</label>
                    <input type="text" name="nivel" class="form-control" id="nivel" placeholder="Nível do Usuário">
                </div>
                
                <input type="text" name="id" id="id">
                <small><div id="mensagem" align="center"></div></small>             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-fechar-perfil">Cancelar</button>
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </form>
    </div>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable({
            "ordering": false
        });
    } );
</script>