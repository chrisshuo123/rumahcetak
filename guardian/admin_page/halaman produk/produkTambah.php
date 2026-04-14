<?php
	ini_set('mysql.connect_timeout',300);
	ini_set('default_socket_timeout',300);

	// Connect to database
	$con = mysqli_connect("localhost", "root", "") or die(mysqli_error());
	mysqli_select_db($con, "rumah_cetak_2") or die(mysqli_error());
	
	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
	// File properties

	if(isset($_POST['submit'])){
		$file = $_FILES['image']['tmp_name'];
		header("refresh:1; url=produkInsert.php");
	}
	
	if(!isset($file)){
		echo "<script>alert('Gambar harus diupload, dan ingat file yang harus diupload harus file jpg saja.')</script>";
		header("refresh:1; url=produkInsert.php");
	}
	else{
		@$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		@$image_size = getimagesize($_FILES['image']['tmp_name']);
		
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$kategori = $_POST['produkdd'];
		
		if($image_size==FALSE){
			echo "<script>alert('Gambar dan Kategori harus diisi, dan catatlah bahwa ukuran gambar maksimum adalah 2.09MB')</script>";
			header("refresh:1; url=produkInsert.php");
		}
		else{
			if(!$insert = mysqli_query($con, "INSERT INTO produk VALUES ('','$judul','$isi','$image','$kategori')")){
				echo "<script>alert('Gambar harus dibawah 2.09MB, dan jangan lupa kategori harus diisi juga')</script>";
				header("refresh:1; url=produkInsert.php");
			}
			else{
				$lastid = mysqli_insert_id($con);
				echo "<script>alert('Informasi dan Gambar berhasil diunggah.')</script>";
				header("refresh:1; url=produkInsert.php");
			}
		}
	}

?>