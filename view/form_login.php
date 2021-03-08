<div class="screen-login">
	<div id="container"></div>
	<div id="screen-bg">
	</div>
	<div class="bar">
		<div class="bar-component">
			<div class="container-fluid">
				<div class="container text-center" style="margin-top: 85px">
					<img src="img/logoCrawler2.png" style="width: 200px;">
				</div>
				<form method="post" action="/controller/login.php">
					<!-- Email input -->
					<div class="form-outline mb-4" style="margin-top: 20px">
						<label class="form-label" for="f_email">Endereço de e-mail</label>
						<input type="email" id="f_email" class="form-control" name="email" />
					</div>

					<!-- Password input -->
					<div class="form-outline mb-4">
						<label class="form-label" for="f_senha">Senha</label>
						<input type="password" id="f_senha" class="form-control" name="password" />
					</div>

					<!-- 2 column grid layout for inline styling -->
					<div class="row mb-4">
						<div class="col d-flex justify-content-center">
							<!-- Checkbox -->
							<div class="form-check">
								<input
								class="form-check-input"
								type="checkbox"
								value=""
								id="f_remember"
								checked
								/>
								<label class="form-check-label" for="f_remember">Lembre de mim</label>
							</div>
						</div>

						<div class="col">
							<!-- Simple link -->
							<a href="#!">Esqueceu a senha?</a>
						</div>
					</div>

					<!-- Submit button -->
					<button type="submit" class="btn btn-dk-green btn-block">Entrar</button>
				</form>
			</div>
			<div class="container text-center mt-4">
				<a href="cadastro.php">Cadastre-se</a>
			</div>			
		</div>
	</div>
	<div class="with">
		<h1 class="font-weight-bold title-dk-green">Participe ativamente na coleta seletiva</h1>
		<h5>O Crawler ajuda você a encontrar e compartilhar materiais recicláveis​ com as pessoas que trabalham para um mundo mais sustentável.</h5>
	</div>
</div>