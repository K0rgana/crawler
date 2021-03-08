<?php require_once 'bd.php'; 

$id_anun = $_GET['d'];

$stmt = $pdo->prepare('SELECT * FROM cwl_anuncio WHERE anu_id = ?');
$stmt->execute([$id_anun]);

$anun = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $pdo->prepare('SELECT * FROM cwl_usuario WHERE usu_id = ?');
$stmt->execute([$anun[0]['anu_usu_id']]);

$usu = $stmt->fetchAll();

$stmt = $pdo->prepare('SELECT * FROM cwl_endereco WHERE end_id = ?');
$stmt->execute([$anun[0]['anu_end_id']]);

$end = $stmt->fetchAll();
                
 ?>
