<?php
	ini_set('mysql.connect_timeout',300);
	ini_set('default_socket_timeout',300);

	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con,'rumah_cetak_2');
	
	// File properties

	if(isset($_POST['submit'])){
		$file = $_FILES['image']['tmp_name'];
		header("refresh:1; url=halaman-utama-bestseller-ubah.php");
	}

	if(!isset($file)){
		echo "<script>alert('File selain gambar tidak dapat diupload.')</script>";
		header("refresh:1; url=halaman-utama-bestseller-ubah.php");
	}
	else{
		@$image = addslashes(file_get_contents($file));
		@$image_size = getimagesize($file); //@ -> utk menyembunyikan error
							
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		//$kategori = $_POST['produkdd'];
							
		if($image_size==FALSE){
			// Tanpa gambar yang diupdate
			$query = "UPDATE bestseller SET Judul='$judul',Isi='$isi' WHERE idBestSeller='$_POST[ID]'";
			
			if(mysqli_query($con, $query)){
				header("refresh:1; url=halaman-utama-bestseller-ubah.php");
			}
			else{
				echo "Not Update!";
			}
		}
		else{
			//Update dengan gambar
			$query = "UPDATE bestseller SET Judul='$judul',Isi='$isi', Gambar='$image' WHERE idBestSeller='$_POST[ID]'";
			//$namaGambar = $_POST['namaGambar'];
			if(mysqli_query($con, $query)){
				echo "<script>alert('Gambar berhasil dirubahkan.')</script>";
			}
			else{
				/* memanggil fungsi timeout my_ini karena gambar lebih dari 2.1MB */
				echo "<script>alert('Gambar maksimal harus 2.1MB.')</script>";
			}
		}
	}
?>