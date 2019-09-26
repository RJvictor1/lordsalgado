<?php 
	$idc = $_GET['idc'];
	$idc = base64_decode($idc);
	$a = $_GET['a'];

	include "banco.php";

	if($a == "add"){
		$sql = "update carrinho set quantidade = quantidade + 1 where idcarrinho = $idc";
		mysqli_query($con, $sql);
		header("Location: orcamento.php");
	}
	if($a == "rem"){
		$sql = "update carrinho set quantidade = quantidade - 1 where idcarrinho = $idc";
		mysqli_query($con, $sql);
		header("Location: orcamento.php");
	}
?>