<?php

	$con = mysqli_connect("localhost", "root", "", "rumah_cetak");
	//$con = mysqli_connect("localhost", "root", "", "rumah_cetak_2");
	
	if(!$con){
		echo "Not Connected To Server";
	}
	
	if(!mysqli_select_db($con, "rumah_cetak")){
		echo "Database Not Selected";
	}
	
	//mysqli_select_db($con, "rumah_cetak_2");
	/*if(!mysqli_select_db($con, "rumah_cetak_2")){
		echo "Database Not Selected";
	}*/

?>