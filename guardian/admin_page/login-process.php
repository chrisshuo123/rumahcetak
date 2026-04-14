<?php
	session_start();
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	//Dihubungkan ke server MySQL yang sesuai
	$con = mysqli_connect("localhost", "root", "");
	mysqli_select_db($con, "rumah_cetak_2");
	
	// untuk menghindari masalah injeksi MySQL
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysqli_real_escape_string($con, $username);
	$password = mysqli_real_escape_string($con, $password);
	
	//Pilih query tabel akun admin
	$query = "SELECT * FROM admin WHERE username = '{$username}' AND password = '{$password}'";
	$result = mysqli_query($con, $query);
	
	$row = mysqli_fetch_array($result);
	
	if($username == "" || $password == ""){
		echo "<script>alert('Maaf, username atau password harus diisi')</script>";
		header("refresh:0; url=index.php");
	}
	else if($row['username'] == $username && $row['password'] == $password){
		//echo "selamat datang, ".$row['username']."";
		$_SESSION['username'] = $row['username'];
		$_SESSION['nama'] = $row['nama'];
		header("refresh:1; url=home.php");
	}
	else{
		echo "<script>alert('Maaf, username atau password salah')</script>";
		header("refresh:0; url=index.php");
	}
?>