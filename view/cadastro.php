<?php include_once 'temp/header.php' ?>

<main style="width: 60%; margin: auto;">
	<form method="post" action="/controller/new_user.php" style="margin-top: 90px">
		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label d-flex justify-content-left align-items-center">
				<img style="width: 31px; height: 31px; margin-bottom: 10px;" src="./img/icon_coletor.png">
				<h1>Coletor</h1>
			</label>
			<div class="col-sm-4">
				<input name="flag" style="display: none" type="radio"  class="form-control" value="Coletor" name="tipo">
			</div>
			<label for="" class="col-sm-2 col-form-label d-flex justify-content-center align-items-center">
				<img style="width: 31px; height: 31px; margin-bottom: 10px" src="./img/ponto_de_coleta.png">
				<h1>Coleta</h1>
			</label>
			<div class="col-sm-4">
				<input name="flag" style="display: none" type="radio" class="form-control" value="Fornecedor" name="tipo">
			</div>
		</div>
		<div class="mb-3 row">
			<label for="f_name" class="col-sm-2 col-form-label">Nome</label>
			<div class="col-sm-4">
				<input name="f_name" type="text"  class="form-control" required>
			</div>
			<label for="l_name" class="col-sm-2 col-form-label">Sobrenome</label>
			<div class="col-sm-4">
				<input name="l_name" type="text" class="form-control" required >
			</div>
		</div>
		<div class="mb-3 row">
			<label for="email" class="col-sm-2 col-form-label">Email</label>
			<div class="col-sm-10">
				<input name="email" type="email"  class="form-control" placeholder="email@example.com" required>
			</div>
		</div>
		<div class="mb-3 row">
			<label for="phone" class="col-sm-2 col-form-label">Telefone</label>
			<div class="col-sm-10">
				<input name="phone" type="tel"  class="form-control" placeholder="(99) 99999-9999" required>
			</div>
		</div>

		<div class="mb-3 row">
			<label for="password" class="col-sm-2 col-form-label">senha</label>
			<div class="col-sm-10">
				<input name="password" type="password" class="form-control" required>
			</div>
		</div>
		<div class="mb-3 row">
			<label for="comfirm" class="col-sm-2 col-form-label">Confirme sua senha</label>
			<div class="col-sm-10">
				<input name="confirm" type="password" class="form-control" required>
			</div>
		</div>
		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label"></label>
			<div class="col-sm-10">
				<input name="" type="submit" class="form-control btn-dk-green" value="Cadastrar">
			</div>
		</div>

	</form>
</main>

<?php include_once 'temp/footer.php'; ?>
