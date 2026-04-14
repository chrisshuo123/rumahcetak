<?php
	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con,'rumah_cetak_2');
								
	//Update Data	
	$query = "UPDATE pengumuman SET Judul='$_POST[judul]',Isi='$_POST[isi]',nama_gambar='$_POST[namaGambar]' WHERE idPengumuman='$_POST[ID]'";
								
	if(mysqli_query($con, $query)){
		header("refresh:1; url=halaman-utama-pengumuman-ubah.php");
	}
	else{
		echo "Not Update!";
	}
?>