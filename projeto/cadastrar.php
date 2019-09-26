<?php 
	include "anterior.php";
 ?>
 <form action="cadastrar2.php" method="post" enctype="multipart/form-data">
 <div class="container">
 	<div class="form-group">
		<label>Nome Produto</label>
		<input type="text" name="produto" class="form-control">
	</div>

	<div class="form-group">
	
		<label>Escolha o tipo :  </label>
		<select name="tipo">
			<option value="salgado">Salgados</option>
			<option value="massa">Massas</option>
			<option value="bebida">Bebidas</option>
			<option value="doce">Doces</option>

		</select>
	</div>


	<div class="form-group">
		<label>Preço do Produto</label>
		<input type="number" step="0.01" name="preco" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Detalhes do Produto</label>
		<textarea name="detalhes" class="form-control"></textarea> 
	</div>
	<div class="form-group">
		<label>imagem do Produto</label>
		<input type="file" required name="arquivo" accept="image/jpeg, image/png">
	</div>
	<button class="btn btn-outline-danger" type="submit">Cadastrar Produto</button>
</div>
 	
 </form>