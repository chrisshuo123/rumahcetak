<?php
	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con,'rumah_cetak_2');
								
	//Update Data	
	$query = "UPDATE kontak SET Alamat='$_POST[alamat]',Telpon='$_POST[telpon]',Email='$_POST[email]' WHERE idKontak='$_POST[ID]'";
	
	if(mysqli_query($con, $query)){
		header("refresh:1; url=kontakEdit.php");
	}
	else{
		echo "Not Update!";
	}
?>