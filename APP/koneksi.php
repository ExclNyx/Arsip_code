<?php
	$conn = mysqli_connect('localhost','root','','db_app') or die ('Gagal');	
	if (mysqli_connect_error()){
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}
	
?>