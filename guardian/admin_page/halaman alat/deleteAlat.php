<?php
	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con,'rumah_cetak_2');
								
	//fetching data	
	$query = "DELETE FROM alat WHERE idAlat='$_GET[id]'";

	if(mysqli_query($con, $query)){
		header("refresh:1; url=alat-delete.php");
	}
	else{
		echo "Not Deleted";
	}
?>