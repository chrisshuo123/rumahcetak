<?php
	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con,'rumah_cetak_2');
	
	// File properties

	if(isset($_POST['submit'])){
		$file = $_FILES['image']['tmp_name'];
	}

	if(!isset($file)){
		echo "testtt";
	}
	else{
		@$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name = addslashes($_FILES['image']['name']);
		@$image_size = getimagesize($_FILES['image']['tmp_name']); //@ -> utk menyembunyikan error
							
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$kategori = $_POST['produkdd'];
							
		if($image_size==FALSE){
			
			//echo "That's not an image.";
			$query = "UPDATE produk SET Judul='$judul',Isi='$isi',name_image='$_POST[namaGambar]', kategori='$kategori' WHERE idProduk='$_POST[ID]'";
			
			if(mysqli_query($con, $query)){
				header("refresh:1; url=produkEdit2.php");
			}
			else{
				echo "Not Update!";
			}
		}
		else{
			//Update Data	
			$query = "UPDATE produk SET Judul='$judul',Isi='$isi',name_image='$_POST[namaGambar]', kategori='$kategori', image='$image' WHERE idProduk='$_POST[ID]'";
																			//$namaGambar = $_POST['namaGambar'];
			if(mysqli_query($con, $query)){
				header("refresh:1; url=produkEdit2.php");
			}
			else{
				echo "Not Update!";
			}
		}
	}
	
	
?>