<?php
	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con,'rumah_cetak_2');
	
	if('$_POST[old-password]' != '$_POST[password]'){
		echo "Maaf, password lama salah";
	}
	else{
		//Update Username & Password
		$query = "UPDATE admin SET username='$_POST[username]', password='$_POST[password]' WHERE idAdmin = '$_POST[ID]'";
		
		if(mysqli_query($con, $query)){
			echo "done";
			header("refresh:1; url=loginRubah.php");
		}
		else{
			echo "Sorry, username or password unable to update";
		}
	}
	
	
	
?>