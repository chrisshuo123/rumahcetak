<?php

	ini_set('mysql.connect_timeout',300);
	ini_set('default_socket_timeout',300);

	// Connect to database
	$con = mysqli_connect("localhost", "root", "") or die(mysqli_error());
	mysqli_select_db($con, "rumah_cetak_2") or die(mysqli_error());

	// File properties

	if(isset($_POST['submit'])){
		$file = $_FILES['image']['tmp_name'];
		header("refresh:1; url=halaman-utama-bestseller-tambah.php");
	}

	if(!isset($file)){
		echo "<script>alert('Gambar harus diupload, dan ingat file yang harus diupload harus file jpg saja.')</script>";
		header("refresh:1; url=halaman-utama-bestseller-tambah.php");
	}
	else{
		@$image = addslashes(file_get_contents($file));
		@$image_size = getimagesize($file);
		
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		
		if($image_size==FALSE){
			echo "<script>alert('Gambar harus diisi, dan catatlah bahwan ukuran gambar maksimum adalah 2.09MB')</script>";
			header("refresh:1; url=halaman-utama-bestseller-tambah.php");
		}
		else{
			if(!$insert = mysqli_query($con, "INSERT INTO bestseller VALUES ('','$judul','$isi','$image')")){
				echo "<script>alert('ukuran gambar harus dibawah 2.09MB')</script>";
				header("refresh:1; url=halaman-utama-bestseller-tambah.php");
				//trigger_error(E_USER_ERROR);
			}
			else{
				$lastid = mysqli_insert_id($con);
				echo "<script>alert('Informasi dan Gambar berhasil diunggah.')</script>";
				header("refresh:1; url=halaman-utama-bestseller-tambah.php");
			}
		}
	}
?>