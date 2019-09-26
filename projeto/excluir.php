<?php 
	$idc = $_GET['idc'];
	$idc = base64_decode($idc);
	include "banco.php";
	$sql = "delete from carrinho where idcarrinho = $idc";
	mysqli_query($con, $sql);
	header("Location: orcamento.php");
?>