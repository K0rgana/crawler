
	<div class="container">
	<form class="new_anun" enctype="multipart/form-data" method="POST" action="/controller/new_anun.php">
		<button class="button_anun button1" type="reset">
			<img class="close" src="https://i.ibb.co/dQ7JgfS/exit-removebg-preview.png">
		</button>
		<h1 class="new_anun_h1"> Novo Anúncio </h1>

		<div class="mb-3">
			<label for="formFileMultiple" class="form-label">Selecione ou faça upload de uma imagem</label>
			<input class="form-control" type="file" id="formFileMultiple" name="userfile" multiple>
		</div>

		<div class="mb-3">
			<label for="title" class="col-sm-2 col-form-label">Título</label>
				<input name="title" type="text"  class="form-control">
		</div>

		<div class="mb-3">
			<label for="desc" class="form-label">Descrição</label>
			<textarea class="form-control" name="desc" id="desc" placeholder="Adicione uma descrição"></textarea>
		</div>

		<div class="input-group mb-3">
			<label class="input-group-text" for="cat">Categoria</label>
			<select class="form-select" name="cat" id="cat">
				<option selected>Selecione...</option>
				<option value="1">Eletrônicos</option>
				<option value="2">Metal</option>
				<option value="3">Papel</option>
				<option value="4">Plástico</option>
				<option value="5">Vidro</option>
			</select>
		</div>
		
		<div class="mb-3">
			<label for="quant" class="col-sm-2 col-form-label">Quantidade</label>
			<input name="quant" type="number"  class="form-control">
		</div>

		<button class="btn btn-dk-green "type="submit">Publicar</button>

	</form>
<script type="text/javascript"></script>

</div>
