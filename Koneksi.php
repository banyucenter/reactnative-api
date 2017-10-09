<?php

	$server		= "localhost"; // sesuaikan alamat server anda
	$user		= "u9801493_centeru"; // sesuaikan user web server anda
	$password	= "Allahmahakaya9900"; // sesuaikan password web server anda
	$database	= "u9801493_reactnative"; // sesuaikan database web server anda

	$koneksi = mysqli_connect($server, $user, $password, $database);
 
    if(mysqli_connect_errno()){
    	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
    }
    
?>
