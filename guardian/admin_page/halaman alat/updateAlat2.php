<?php
	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con,'rumah_cetak_2');
								
	//Update Data	
	$query = "UPDATE alat SET Judul='$_POST[judul]',Isi='$_POST[isi]',name_image='$_POST[namaGambar]' WHERE idAlat='$_POST[ID]'";
								
	if(mysqli_query($con, $query)){
		header("refresh:1; url=alat-ubah.php");
	}
	else{
		echo "Not Update!";
	}
?>