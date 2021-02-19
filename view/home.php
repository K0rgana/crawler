<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<?php include 'temp/header.php'; ?>
</head>
<body>
	<main>
		<div class="container-fluid">
			<div class="row">

				<?php

				if ($_SESSION['logged']) {
					include 'feed.php';
				} else {
					include 'login_form.php';
				}

				?>

			</div>
		</div>
	</main>
	<?php include 'temp/footer.php'; ?>
</body>
</html>