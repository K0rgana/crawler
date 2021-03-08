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
		

		<?php

		if (isset($_SESSION['logged'])) {
			include 'feed.php';
		} else {
			include 'form_login.php';
		}

		?>

		
		
	</main>
	<?php include 'temp/footer.php'; ?>
</body>
</html>