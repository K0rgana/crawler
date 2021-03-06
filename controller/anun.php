<?php require_once 'bd.php'; 

$id_anun = $_GET['d'];

$stmt = $pdo->prepare('SELECT * FROM cwl_anuncio WHERE anu_id = ?');
$stmt->execute([$id_anun]);

$anun = $stmt->fetchAll(PDO::FETCH_ASSOC);


 ?>