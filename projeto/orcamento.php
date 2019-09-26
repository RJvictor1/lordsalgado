<?php 
	if(isset($_GET['prod'])){
		$prod = $_GET['prod'];
		$prod = base64_decode($prod);

					if(empty($_COOKIE['mt'])){
				$mt = microtime();
				setcookie("mt", $mt, time()+60*60*24*90);
			}else{
				$mt = $_COOKIE['mt'];
			}
			$sql = "insert into carrinho(idproduto, quantidade, identificacao) values ('$prod', 1, '$mt')";
		
		include "banco.php";
		mysqli_query($con, $sql);
	}
	include "anterior.php";
	$sql = "";
	if(isset($_COOKIE['mt'])){
		$mt = $_COOKIE['mt'];
		$sql = "select * from carrinho where identificacao = '$mt'";
	}
	if($sql == ""){
		echo "Nenhum ítem no Orçamento";
	}else{
		include "banco.php";
		$query = mysqli_query($con, $sql);
		$vt = 0;
		echo "<table class='table'>
				<tr>
					<th>Produto</th><th>Valor Unitario</th><th>Quantidade</th><th>Valor Item</th>
				</tr>";
		while($carrinho = mysqli_fetch_array($query)){
			$idcarrinho = $carrinho['idcarrinho'];
			$idc=base64_encode($idcarrinho);
			$idproduto = $carrinho['idproduto'];
			$quantidade = $carrinho['quantidade'];
			$sql2 = "select * from produtos where id = $idproduto";
			$query2 = mysqli_query($con, $sql2);
			while($prod = mysqli_fetch_array($query2)){
				$produto = $prod['produto'];
				$tipo = $prod['tipo'];
				$preco= $prod['preco'];
				$prec=number_format($preco, 2, ',','.');
				$vi = $preco * $quantidade;
				$vt = $vt + $vi;
				$vi = number_format($vi, 2, ',','.');
				echo "<tr>
						<td>$produto</td>
						<td> R$: $prec</td>
						<td>";

						if($quantidade > 1){
							echo "<a href='alterar.php?idc=$idc&a=rem'>-</a>";
						}
						echo" $quantidade <a href='alterar.php?idc=$idc&a=add'>+</a> </td>
						
						<td> R$ $vi [<a href='excluir.php?idc=$idc'>x</a>]</td>
					  </tr>	";
			}
		}
		echo "</table>";
		$vt = number_format($vt, 2, ',','.');
		echo "Valor Total: R$ $vt";
	}
?>