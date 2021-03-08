<?php require_once 'bd.php';


$stmt = $pdo->prepare('INSERT INTO cwl_usuario (usu_nome,usu_telefone,usu_email,usu_senha,usu_flag) VALUES (?,?,?,?,?)');
	$stmt->execute(['user','999999999','email@email.com','123',1]);

//seed categorias

$titulos = ['Eletrônicos', 'Metal', 'Papel', 'Plástico', 'Vidro'];

foreach ($titulos as $value) {
	$stmt = $pdo->prepare('INSERT INTO cwl_categoria(cat_nome) values (?)');
	$stmt->execute([$value]);
}

//seed endereço
$stmt = $pdo->prepare('INSERT INTO cwl_endereco(end_cep,end_rua,end_numero,end_complemento) values (?,?,?,?)');
	$stmt->execute(['53650-766','campo alegre','35','rua tres coracoes']);

for ($i=1; $i <= 8 ; $i++) { 
	for ($j=1; $j <=5 ; $j++) { 
		$stmt = $pdo->prepare('INSERT INTO cwl_anuncio(anu_usu_id,anu_imagem,anu_titulo,anu_descricao,anu_quantidade,anu_data,anu_cat_id,anu_end_id,anu_status) values (?,?,?,?,?,?,?,?,?)');
		$stmt->execute([1,'./img_anun/test_'.$i.'.jpg','titulo','descricao produto',1,date('d/m/y'),$j,1,1]);
		
	}
}


 ?>