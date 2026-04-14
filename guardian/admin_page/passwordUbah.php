
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Guardian &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- CAROUSEL BOOTSTRAP -->
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	
	<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->
	
	<style>
	  <!-- Make the image fully responsive */ -->
	  .carousel-inner img {
		  width: 50%;
		  height: 100%;
	  }
	</style>
	
	<!-- END -->
	
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container" style="margin-bottom:1%;">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<img id="fh5co-logo" src="images/logo rumah cetak.jpg" style="width:25%;"></img>
					</div>
				</div>
			</header>
		</div>
		<div id="fh5co-services-section" class="fh5co-section-gray">
			<div class="container" style="margin-top:5%;">
				<div class="row-2">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Perubahan Akun Admin</h3>
						<p>Silahkan merubahkan username atau password akun anda yang sesuai</p>
					</div>
					<div class="col-md-8 col-md-offset-2 text-center animate-box" style="background:black; padding:1%; width:45%; margin-left:27%; padding-top:2.5%; border-radius:1%;">
						<?php
						
						session_start();
						
						$user = $_SESSION['username'];
						
						if($user){
							// Username telah login
							
							if(@$_POST['submit']){
								$passwordLama = $_POST['password-lama'];
								$passwordBaru = $_POST['password-baru'];
								$passKonfirmasi = $_POST['pass-konfirmasi'];
								
								// Check password against db
								
								// Connect db
								$con = mysqli_connect("localhost", "root", "");
								mysqli_select_db($con, "rumah_cetak_2");
								
								$query = "SELECT * FROM admin WHERE username='$user'";
								$result = mysqli_query($con, $query);
								
								$row = mysqli_fetch_array($result);
								
								$passwordLamaDB = $row['password'];
								
								//cek apakah password lama sama dengan password yang ada di database
								if($passwordLama == "" || $passwordBaru == "" || $passKonfirmasi == ""){
									echo "<script>alert('Password Baru, Password Lama, dan Password Konfirmasi harus diisi dengan lengkap.')</script>";
								}
								
								else if($passwordLama == $passwordLamaDB){
									//cek apakah password baru dan konfirmasi sama
									if($passwordBaru == $passKonfirmasi){
										//berhasil masuk, dan password akan segera dirubahkan
										echo "<script>alert('Password berhasil dirubah, silahkan melakukan login kembali')</script>";
										//Update Data	
										$query = "UPDATE admin SET password = '$passwordBaru' WHERE username = '$user'";
										// Cek jika terupdate apa tidak
										if(mysqli_query($con, $query)){
											header("refresh:0; url=index.php");
										}
										else{
											echo "Password tidak berhasil dirubah...";
										}
									}
									else{
										echo "<script>alert('password baru dan konfirmasi tidak sama')</script>";
									}
								}
								else{
									echo "<script>alert('password lama tidak sesuai dengan password yang sesungguhnya')</script>";
								}
							}
							else{
								echo "";
							}
						}
						else{
							echo "<script>alert('maaf terdapat permasalahan dalam membaca username, silahkan login ulang.')</script>";;
							header("refresh:0; url=index.php");
						}
						
						?>
						<form action="passwordUbah.php" method="POST">
							<p style="color:white;">
								<label>Password Lama :</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<input type="password" name="password-lama" style="color:black;"/>
							</p>
							<p style="color:white;">
								<label>Password Baru :</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<input type="password" name="password-baru" style="color:black;"/>
							</p>
							<p style="color:white;">
								<label>Konfirmasi Password :</label> 
								<input type="password" name="pass-konfirmasi" style="color:black;"/>
							</p>
							<br><br>
							<input type="submit" name="submit" value="ganti password" class="btn" style="font-size:160%; width:40%;"/>
							<br><br>
							<input type="button" name="kembali" value="kembali" class="btn" style="font-size:160%; width:40%;" onclick="javascript:document.location='home.php'" />
						</form>						
					</div>
				</div>
			</div>
		</div>
		<!-- FOOTER -->
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row-footer">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p>Copyright Perusahaan Rumah Cetak <br>Menjadi provider dan market leader terbaik</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->

	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

