<?php session_start();

if ($_GET['u'] === $_SESSION['user_id']) {
	require_once 'bd.php';
	$stmt = $pdo->prepare('DELETE FROM cwl_anuncio WHERE anu_id =?');
	if ($stmt->execute([$_GET['a']])) {
		unlink('../view/'.$_GET['f']);
	}


}

header('Location:/');

 ?>