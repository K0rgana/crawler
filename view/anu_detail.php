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

			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="img/recycle.jpg" style="width: 100%;" /></div>
						  <div class="tab-pane" id="pic-2"><img src="img/slide1.jpg" /></div>
						  <div class="tab-pane" id="pic-3"><img src="img/slide2.jpg" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="img/recycle.jpg" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="img/slide1.jpg" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="img/slide2.jpg" /></a></li>
						</ul>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">titulo do anuncio</h3>
						
						<p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
						<h4 class="product-quant"> Quantidade: <span>2 Unidades</span></h4>

            <!--Google map-->
              <!--Card content-->
              <div class="card-body card-body-cascade text-center">

                <!--Google map-->
                <div id="map-container-google-9" class="z-depth-1-half map-container-5" style="width: 100%; height: 200px">
                  <iframe src="https://maps.google.com/maps?q=Igarassu&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                    style="border:0" allowfullscreen></iframe>
                </div>

              </div>
              <!--/.Card content-->

						<div class="action">
							<button class="btn btn-success btn-lg btn-block product-contact" type="button"> Entrar em contato</button>
						</div>
					</div>
				</div>
			</div>
		</div>

  </main>

<?php include 'temp/footer.php'; ?>
</body>
</html>