<?php
	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con,'rumah_cetak_2');
								
	//fetching data	
	$query = "DELETE FROM testimoni WHERE idTestimoni='$_GET[id]'";

	if(mysqli_query($con, $query)){
		header("refresh:1; url=halaman-utama-testimoni-delete.php");
	}
	else{
		echo "Not Deleted";
	}
?>