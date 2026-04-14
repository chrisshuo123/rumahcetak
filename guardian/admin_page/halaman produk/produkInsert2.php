<html>
<head>
	<title>Upload an Image</title>
</head>
<body>

<form action="produkInsert2.php" method="POST" enctype="multipart/form-data">
	Judul:
	<input type="text" name="judul" /> <br><br>
	Isi:
	<input type="text" name="isi" /> <br><br>
	Kategori:
	<!-- DROPDOWN -->
	<table>
	<tr>
	<td>Pilih Kategori Produk</td>
	<td><select name="produkdd" <!--onChange="change_produk()-->">
	<option>Pilih</option>
	<?php
	$link = mysqli_connect("localhost","root","");
	mysqli_select_db($link,"rumah_cetak_2");
	
	$res = mysqli_query($link,"select * from header_produk");
	while($row=mysqli_fetch_array($res)){
	?>
	<option value="<?php echo $row["idHeader"]; ?>"><?php echo $row["judulHeader"]; ?></option>
	<?php
	}
	?>
	</select>
	</td>
	</tr>
	</table> <br><br>
	<!-- END DROPDOWN -->
	File:
	<input type="file" name="image"/>
	<input type="submit" name="submit" /> <br>
	
	
</form>

<?php

// Connect to database
$con = mysqli_connect("localhost", "root", "") or die(mysqli_error());
mysqli_select_db($con, "rumah_cetak_2") or die(mysqli_error());

// File properties

if(isset($_POST['submit'])){
	$file = $_FILES['image']['tmp_name'];
}

if(!isset($file))
	echo "Please select an image.";
else{
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name = addslashes($_FILES['image']['name']);
	$image_size = getimagesize($_FILES['image']['tmp_name']);
	
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	$kategori = $_POST['produkdd'];
	
	if($image_size==FALSE){
		echo "That's not an image.";
	}
	else{
		if(!$insert = mysqli_query($con, "INSERT INTO produk VALUES ('','$judul','$isi','$image','$image_name','$kategori')")){
			//echo "Problem uploading image";
			trigger_error(E_USER_ERROR);
		}
		else{
			$lastid = mysqli_insert_id($con);
			echo "Image uploaded.<p>Your Image:</p><img src=get.php?idProduk=$lastid>";
		}
	}
}

?>

</body>
</html>