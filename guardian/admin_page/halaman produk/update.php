<?php
	ini_set('mysql.connection_timeout',300);
	ini_set('default_socket_timeout',300);

	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con,'rumah_cetak_2');
	
	// File properties

	if(isset($_POST['submit'])){
		$file = $_FILES['image']['tmp_name'];
		header("refresh:1; url=produkEdit.php");
	}

	if(isset($file)){
		@$image = addslashes(file_get_contents($file));
		@$image_size = getimagesize($file); //@ -> utk menyembunyikan error
							
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$kategori = $_POST['alatdd'];
							
		if($image_size==FALSE){
			// Update Data tanpa Gambar
			if($kategori == 'pilih'){
				//Kategori tidak ada yang dirubah
				$query = "UPDATE produk SET Judul='$judul',Isi='$isi' WHERE idProduk='$_POST[ID]'";
				//echo "$query";
			}
			else{
				//Kategori ada yang dirubah
				$query = "UPDATE produk SET Judul='$judul',Isi='$isi', header_produk_idHeader = '$kategori' WHERE idProduk='$_POST[ID]'";
				//echo "$query";
			}
			//Jika database berhasil terupdate
			if(mysqli_query($con, $query)){
				header("refresh:1; url=produkEdit.php");
			}
			//Dan jika database tidak bisa terupdate
			else{
				echo "<script>alert('Database tidak bisa mengupdate!')</script>";
			}
		}
		else{
			//Update Data dengan Gambar
			if($kategori == 'pilih'){
				//Kategori tidak ada yang dirubah
				$query = "UPDATE produk SET Judul='$judul',Isi='$isi', image='$image' WHERE idProduk='$_POST[ID]'";
				//echo "$query";
			}
			else{
				//Kategori ada yang dirubah
				$query = "UPDATE produk SET Judul='$judul',Isi='$isi', image='$image', header_produk_idHeader = '$kategori' WHERE idProduk='$_POST[ID]'";
				//echo "$query";										  //$namaGambar = $_POST['namaGambar'];
			}
			if(mysqli_query($con, $query)){
				echo "<script>alert('Gambar berhasil diupload.')</script>";
				header("refresh:1; url=produkEdit.php");
			}
			else{
				echo "<script>alert('File gambar harus dibawah 2.1MB.')</script>";
			}
		}
	}
?>