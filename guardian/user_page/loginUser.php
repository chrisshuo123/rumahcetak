
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

	<!-- CAROUSEL BOOTSTRAP -->
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	
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
			<header id="fh5co-header-section" style="background:rgba(66, 64, 64, 0.9);">
				<div class="container" style="margin-bottom:2%;>
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.html">Rumah<span>cetak</span></a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li><a href="index.html">Kembali</a></li>
								<li><a href="index.html">Kembali Laman Utama</a></li>
								<li><a href="index.html">Profil Admin</a></li>
								<li><a href="about.html">Keluar</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
			
		</div>
		<!-- end:header-top -->
		
		<!-- PENGUMUMAN KAMI -->
		<div id="fh5co-services-section" class="fh5co-section-gray">
			<div class="container" style="margin-top: 6%;">
				<div class="row-2">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Perubahan Produk</h3>
						<p> Silahkan merubahkan isi produk yang akan ditampilkan </p>
					</div>
					<div class="col-md-8 col-md-offset-2 text-center animate-box">
						
						<table border='1'>
							<tr>
								<td>Judul</td>
								<td>Isi</td>
								<td>Nama Gambar</td>
								<td>Gambar</td>
								<td>Rubah Gambar</td>
								<td>Kategori</td>
								<td>Rubah</td>
							</tr>
							<?php
								$con = mysqli_connect('localhost', 'root', '');
								mysqli_select_db($con,'rumah_cetak_2');
								
								//fetching data	
								$query = 'SELECT * FROM produk JOIN header_produk ON header_produk.idHeader = produk.header_produk_idHeader';
								
								$result = mysqli_query($con, $query);
							?>
							<?php 
							while($row = mysqli_fetch_array($result)):
								
								echo "<tr><form action = update.php method=post>";
								echo "<td><input type=text name=judul value='".$row['Judul']."'></td>";
								echo "<td><input type=text name=isi value='".$row['Isi']."'></td>"; 
								echo "<td><input type=text name=namaGambar value='".$row['name_image']."'></td>"; ?>
								<td><?php echo'<img name=gambar src="data:images/jpg;base64,'.base64_encode($row['image']).'" width="250" height="250">'; ?></td>
								<!-- RUBAH GAMBAR -->
								<td>
								<input type="file" name="image"> 
								</td>
								<!-- END RUBAH GAMBAR -->
								<td><?php echo $row['kategori'] ?></td>
								<?php echo "<input type=hidden name=ID value='".$row['idProduk']."'>"; ?>
								<?php 
								echo "<td><input type=submit value=update></td>";
								echo "</form></tr>"; ?>
							
							<?php endwhile; 
							
							/* close connection */
							mysqli_close($con);
							
							?>
						</table>
						<br><br><br><br>
						<button type="button" class="btn" style="font-size:160%; width:35%;"><b>Selesai</b></button>
						
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

