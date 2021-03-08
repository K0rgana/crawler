<?php session_start(); include_once 'bd.php';

// chmod('/view/img_anun/', 0777);
preg_match('/image\/.*/', $_FILES['userfile']['type'],$type);

if (sizeof($type) > 0) {
$uploaddir = './img_anun/';
$uploadfile = $uploaddir . time() . preg_replace('/.*\//', '.',$_FILES['userfile']['type'] );
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], "../view/".$uploadfile)) {

		$titulo = strip_tags($_POST['title']);
		$desc = strip_tags($_POST['desc']);
		$cat = strip_tags($_POST['cat']);
		$quant = strip_tags($_POST['quant']);



		$stmt = $pdo->prepare('INSERT INTO cwl_anuncio(anu_usu_id,anu_imagem,anu_titulo,anu_descricao,anu_quantidade,anu_data,anu_cat_id,anu_end_id,anu_status) values (?,?,?,?,?,?,?,?,?)');
		$stmt->execute([$_SESSION['user_id'],$uploadfile,$titulo,$desc,$quant,date('d-m-y'),$cat,1,1]);


		header('Location:/');
	} else {

	}
	
}




 ?>