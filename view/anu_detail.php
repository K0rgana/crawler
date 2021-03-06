<?php include_once '../controller/anun.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detalhe</title>
	<?php include 'temp/header.php'; ?>
</head>
<body>
	<main>
		<div class="container">

			<a href="home.php"> <i class="fas fa-chevron-left"></i> Voltar</a>

			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
							<div class="tab-pane active" id="pic-1"><img src="<?= $anun[0]['anu_imagem'] ?>" style="width: 100%;" /></div>
							<div class="tab-pane" id="pic-2"><img src="img/slide1.jpg" /></div>
							<div class="tab-pane" id="pic-3"><img src="img/slide2.jpg" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
							<li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="<?= $anun[0]['anu_imagem'] ?>" /></a></li>
							<li><a data-target="#pic-2" data-toggle="tab"><img src="<?= $anun[0]['anu_imagem'] ?>" /></a></li>
							<li><a data-target="#pic-3" data-toggle="tab"><img src="<?= $anun[0]['anu_imagem'] ?>" /></a></li>
						</ul>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title"><?= $anun[0]['anu_titulo'] ?> </h3>
						
						<p class="product-description"><?= $anun[0]['anu_descricao'] ?></p>
						<h4 class="product-quant"> Quantidade: <span><?= $anun[0]['anu_quantidade'] ?> Unidades</span></h4>

						<!--Google map-->
						<!--Card content-->
						<div class="card-body card-body-cascade text-center">

							<!--Google map-->
							<div id="map-container-google-9" class="z-depth-1-half map-container-5" style="width: 100%; height: 200px">
								<iframe src="https://maps.google.com/maps?q=<?= $end[0]['end_cep'] ?>+<?= $end[0]['end_rua'] ?>+<?= $end[0]['end_numero'] ?>&t=&z=18&ie=UTF8&iwloc=&output=embed" frameborder="0"
									style="border:0" allowfullscreen></iframe>
								</div>

							</div>
							<!--/.Card content-->
							<?php if ($anun[0]['anu_usu_id'] !== $_SESSION['user_id']): ?>

								<div class="action">
									<a href="https://api.whatsapp.com/send?phone=55<?= $usu[0]['usu_telefone'] ?>&text=Olá,%20tenho%20interesse%20no%20seu%20anúncio%20<?= $anun[0]['anu_titulo'] ?>%20do%20site%20Crawler.">
										<button class="btn btn-dk-green btn-lg btn-block product-contact" type="button"> <i class="fab fa-whatsapp"></i> Entrar em contato pelo WhatsApp</button>
									</a>
								</div>
							<?php else: ?>
								<div class="action">
									<a href="/controller/remove.php?a=<?= $anun[0]['anu_id'] ?>&u=<?= $_SESSION['user_id'] ?>&f=<?=$anun[0]['anu_imagem'] ?>">
										<button class="btn btn-dk-green btn-lg btn-block product-contact" type="button"><i class="fas fa-trash-alt"></i> Remover este anúncio</button>
									</a>
								</div>
							<?php endif ?>
							</div>
						</div>
					</div>
				</div>

			</main>

			<?php include 'temp/footer.php'; ?>
		</body>
		</html>
