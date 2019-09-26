<?php 
	$_UP['pasta'] = 'produtos/';
	$_UP['tamanho'] = 1024 * 1024 * 10;
	$_UP['extensoes'] = array('jpg', 'png', 'gif');
	$_UP['renomeia'] = true;
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite de 2Mb';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
	if ($_FILES['arquivo']['error'] != 0) {
  include "anterior.php";
  die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo']['error']]);
  exit; // Para a execução do 
}
// Caso  chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
// Faz a verificação da extensão do arquivo
$extensao = explode('.', $_FILES['arquivo']['name']);
$extensao = strtolower(end($extensao));
//onclick="javascript:location.href='exercicio3.html';"
if (array_search($extensao, $_UP['extensoes']) === false) {
  echo "Por favor, envie arquivos com as seguintes extensões: png ou jpg ou gif";
  exit;
}
// Faz a verificação do tamanho do arquivo
if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
  echo "O arquivo enviado é muito grande, envie arquivos de até 10Mb.";
  exit;
}
// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
// Primeiro verifica se deve trocar o nome do arquivo
if ($_UP['renomeia'] == true) {
  $produto= $_POST['produto'];
  $detalhes = $_POST['detalhes'];
  $preco = $_POST['preco'];
  $tipo=$_POST['tipo'];
  

  include "banco.php";
  $sql = "insert into produtos(produto, descricao, preco, tipo) values('$produto', '$detalhes', '$preco', '$tipo')";
  mysqli_query($con, $sql);

  $sql = "select * from produtos order by id desc limit 1";
  $query = mysqli_query($con, $sql);
  while($produt = mysqli_fetch_array($query)){
  	$id = $produt['id'];
  }

  $nome_final = "$id.$extensao";
  
} else {
  // Mantém o nome original do arquivo
  $nome_final = $_FILES['arquivo']['name'];
}
  
// Depois verifica se é possível mover o arquivo para a pasta escolhida
if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
  //Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
  header("Refresh:3, url=cadastrar.php");
  echo "Upload efetuado com sucesso!";
  
} else {
  // Não foi possível fazer o upload, provavelmente a pasta está incorreta
  echo "Não foi possível enviar o arquivo, tente novamente";
}
include "posterior.php";

 ?>