<?php
	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con,'rumah_cetak_2');
								
	//fetching data	
	$query = "DELETE FROM produk WHERE idProduk='$_GET[id]'";

	if(mysqli_query($con, $query)){
		header("refresh:1; url=produkDelete.php");
	}
	else{
		echo "Not Deleted due to database connection";
		header("refresh:1; url=produkDelete.php");
	}
?>