<?php include "anterior.php"; ?>
<div class="container text-center" >
	 <div class="row"><div style="height:30px;color: #f00; " class="col-sm-12">Atenção:este site e fictício</div></div>
<?php 
include "banco.php";
$sql="select * from produtos where tipo='massa' ";
$query=mysqli_query($con, $sql);
while ($produtos=mysqli_fetch_array($query)){
		
		$id=$produtos['id'];
		$idproduto=base64_encode($id);
						
if(file_exists("produtos/$id.jpg")){
	$img = "$id.jpg";
}

if(file_exists("produtos/$id.png")){
	$img = "$id.png";
	}
?>
	<img class="img-fluid"  width="350"  style="padding: 10px;"  src="produtos/<?php echo $img; ?>"  onclick="javascript:location.href='orcamento.php?prod=<?php echo $idproduto; ?>'";  />
	<div class="middle">
    	<div class="text">Orçamento</div>
  	</div>

<?php
}
?>

</div>


<?php include "posterior.php"; ?>