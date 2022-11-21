<?php 
    require_once('../conexao.php');
    require_once("verificar.php");
    $pagina = 'niveis';
?>
<div class="col-md-12 mt-3">
    <a type="button" class="btn btn-dark">Novo Nível</a>    
</div>

<table id="example" class="table table-hover my-4" style="width:100%">
				<thead>
					<tr>
						<th>Status</th>
						<th>Valor</th>
						<th>Data</th>
						<th>Hora</th>
						<th>Operador</th>
						<th>Pagamento</th>						
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
</table>


<script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable({
				"ordering": false
			});
		} );
</script>