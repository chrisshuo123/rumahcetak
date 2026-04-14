<?php

$con = mysqli_connect("localhost", "root", "") or die(mysqli_error());
mysqli_select_db($con, "rumah_cetak_2") or die(mysqli_error());

$id = addslashes($_REQUEST['idBestSeller']);

$image = mysqli_query($con, "SELECT * FROM bestseller WHERE idBestSeller=$id");
$image = mysqli_fetch_assoc($image);
$image = $image['image'];

header("Content-type: image/jpg");

echo $image;

?>