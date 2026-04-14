<?php
	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con,'rumah_cetak_2');
	
	// File properties

	if(isset($_POST['submit'])){
		$file = $_FILES['image']['tmp_name'];
		header("refresh:1; url=halaman-utama-pengumuman-ubah.php");
	}

	if(!isset($file)){
		echo "<script>alert('File selain gambar tidak dapat diupload.')</script>";
		header("refresh:1; url=halaman-utama-testimoni-ubah.php");
	}
	else{
		@$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		//$image_name = addslashes($_FILES['image']['name']);
		@$image_size = getimagesize($_FILES['image']['tmp_name']); //@ -> utk menyembunyikan error
							
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
							
		if($image_size==FALSE){
			// Ini yang diupload tanpa gambar.
			$query = "UPDATE pengumuman SET Judul='$judul',Isi='$isi' WHERE idPengumuman='$_POST[ID]'";
			
			if(mysqli_query($con, $query)){
				header("refresh:1; url=halaman-utama-pengumuman-ubah.php");
			}
			else{
				echo "Not Update!";
			}
		}
		else{
			//Update Data	
			$query = "UPDATE pengumuman SET Judul='$judul',Isi='$isi', image='$image' WHERE idPengumuman='$_POST[ID]'";
			//$namaGambar = $_POST['namaGambar'];
			if(mysqli_query($con, $query)){
				echo "<script>alert('Gambar berhasil dirubahkan.')</script>";
			}
			else{
				echo "<script>alert('Gambar maksimal harus 2.1MB.')</script>";
			}
		}
	}
?>