
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
	
	<!-- CSS.CSS -->
	<link rel="stylesheet" href="css/css.css">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
	<!-- CAROUSEL BOOTSTRAP -->
	
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	
	<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->


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
						<img class="ukuran-logo" id="fh5co-logo" src="images/logo rumah cetak.jpg"></img>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li><a href="index.php">Halaman Utama</a></li>
								<li>
									<a href="produk.php" class="fh5co-sub-ddown">Produk</a> 
									 <ul class="fh5co-sub-menu"> 
									 	<li><a href="produkPackaging.php">Packaging</a></li>
									 	<li><a href="produkUndangan.php">Undangan</a></li>
										<li><a href="produkBrosur.php">Brosur</a></li>
									 	<li><a href="produkKartunama.php">Kartu Nama</a></li>
									</ul>
								</li> 
								<li>
									<a href="alat.php" class="fh5co-sub-ddown">Alat</a>
									 <ul class="fh5co-sub-menu">
									 	<li><a href="alatPrinterOffset.php">Printer Offset</a></li>
									 	<li><a href="alatMesinPlong.php">Mesin Plong</a></li>
										<li><a href="alatMesinCutter.php">Mesin Cutter</a></li>
									</ul>
								</li>
								<li><a href="about.php">Tentang Kami</a></li>
								<li class="active"><a href="contact.php">Kontak</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
		</div>
		
		<!-- BACKGROUND IMAGE -->
		<div class="fh5co-cover text-center">
			<div class="fh5co-hero" style="background: url(images/kontak.jpg); background-repeat: no-repeat; background-size: cover; " data-stellar-background-ratio="0.5">
				<div class="desc animate-box ukuran-header">
					<h2 style="z-index:1;">Kontak Rumah Cetak</h2>
					<span style="font-size:15px; z-index:1;" class="col-md-8 col-md-offset-2 text-center desc-2">Pelayanan kami merupakan prioritas bagi pelanggan kami tersetia</span>
				</div>
			</div>
		</div>
		<!-------- END -------->
		
		<!-- Alamat kami -->
		<div id="fh5co-contact" class="animate-box">
			<div class="container">
				<div>
					<div class="row">
						<div class="col-md-6">
							<h3 class="section-title"><b>Alamat Kami</b></h3>
							<p>Bila ada pertanyaan bisa langsung kirim pesan melalui box sebelah kanan ini, akan nanti kami balas melalui email, terima kasih</p>
							<ul class="contact-info">
							
								<?php
									$con = mysqli_connect('localhost', 'root', '', 'rumah_cetak_2');
									
									/* check connection */
									if (mysqli_connect_errno()) {
									printf("Connect failed: %s\n", mysqli_connect_error());
									exit();
									}
									//fetching data	
									$query = 'SELECT * FROM kontak';
										
									$result = mysqli_query($con, $query);
								?>
								<?php while($row = mysqli_fetch_array($result)): ?>
								<li><b>Alamat:</b> <br><?php  echo $row['Alamat']; ?></li>
								<li><b>Telpon:</b> <br><?php echo $row['Telpon']; ?></li>
								<li><b>Email:</b> <br> <?php echo $row['Email']; ?></li>
								<!--
								<i class="icon-location-pin"></i>
								<i class="icon-phone2"></i>
								<i class="icon-mail"></i>
								-->
								
								<?php endwhile; 
							
								/* close connection */
								mysqli_close($con);
									
								?>
							</ul>
						</div>
						<div class="col-md-6">
							<div class="row">
								<?php
								
								if(isset($_POST['sendmail'])){
									if(mail($_POST['email'], $_POST['subject'], $_POST['message'])){
										echo "<script>alert('Email berhasil dikirim ke alamat tujuan')</script>";
									}
									else{
										echo "<script>alert('Email gagal dikirim ke alamat tujuan')</script>";
									}
								}
								
								?>
								
								<form role="form" method="POST" enctype="multipart/form-data">
									<input type="hidden" name="email" value="ddolans111@gmail.com"/>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" name="subject" placeholder="Nama"/>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea type="textarea" name="message" class="form-control" id="" cols="30" rows="9" placeholder="Pesan"></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="submit" name="sendmail" value="Kirim" class="btn btn-primary" />
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END fh5co-contact -->
		<!--<div id="map" class="fh5co-map"></div>-->
		<!--<script src="https://apps.elfsight.com/p/platform.js" defer></script>
		<div class="elfsight-app-08720f4d-d05c-4c1c-b1da-04dfcd307de5"></div>
			
		<script src="js/google-map.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>-->
		<!-- END map -->
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row-footer">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p>Copyright Perusahaan Rumah Cetak <br> Menjadi provider dan market leader terbaik</p>
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
	<!-- Google Map -->
	<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>-->
	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

