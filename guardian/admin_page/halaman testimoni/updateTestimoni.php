<?php
    ini_set('mysql.connect_timeout',300);
	ini_set('default_socket_timeout',300);

	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con,'rumah_cetak_2');
	
	// File properties

	if(isset($_POST['submit'])){
		$file = $_FILES['image']['tmp_name'];
		header("refresh:1; url=halaman-utama-testimoni-ubah.php");
	}

	if(!isset($file)){
		echo "<script>alert('File selain gambar tidak dapat diupload.')</script>";
		header("refresh:1; url=halaman-utama-testimoni-ubah.php");
	}
	else{
		@$image = addslashes(file_get_contents($file));
		@$image_size = getimagesize($file); //@ -> utk menyembunyikan error
							
		$nama = $_POST['nama'];
		$testimoni = $_POST['testimoni'];
							
		if($image_size==FALSE){
			// Tanpa gambar yang diupdate
			$query = "UPDATE testimoni SET nama='$nama',testimoni='$testimoni' WHERE idTestimoni='$_POST[ID]'";
			
			if(mysqli_query($con, $query)){
				header("refresh:1; url=halaman-utama-testimoni-ubah.php");
			}
			else{
				echo "Not Update!";
			}
		}
		else{
			//Update dengan gambar
			$query = "UPDATE testimoni SET nama='$nama',testimoni='$testimoni', foto='$image' WHERE idTestimoni='$_POST[ID]'";
			// Bila gambar berhasil dirubahkan.
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