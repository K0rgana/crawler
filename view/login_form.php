<div class="col-7 p-0">
	<div class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
				<div class="carousel-item active">
					 <img class="d-block w-100" src="img/slide1.jpg" alt="First slide" style="height: 600px; opacity: 0.3">
				</div>
				<div class="carousel-item">
					 <img class="d-block w-100" src="img/slide2.jpg" alt="Second slide" style="height: 600px; opacity: 0.3">
				</div>
				<div class="carousel-item">
					 <img class="d-block w-100" src="img/slide3.jpg" alt="Third slide" style="height: 600px; opacity: 0.3">
				</div>

				<div class="container-fluid" style="margin-top: 220px">
					<div class="row">
						<div class="col-2"></div>
							<div class="col-8">
								<h1 class="font-weight-bold title-dk-green">Crawler</h1>
								<h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores tempora quia dicta totam quos soluta, numquam cum nemo! Velit aliquid nisi voluptatum. Expedita tempore beatae ex, maiores autem itaque magni.</h5>
							</div>
						<div class="col-2"></div>
					</div>
				</div>

		</div>
	</div>
</div>

<div class="bg-green form-warpper col-5">
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