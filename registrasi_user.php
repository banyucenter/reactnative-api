<?php

include 'Koneksi.php';
$json = file_get_contents('php://input');
$obj = json_decode($json,true);

$username = $obj['username'];
$email = $obj['email'];
$no_telp = $obj['no_telp'];
$password = $obj['password'];

$CekEmail = "SELECT * FROM tb_register WHERE email='$email'";
$check = mysqli_fetch_array(mysqli_query($koneksi,$CekEmail));

if(isset($check)){
    $EmailExistMSG ='Email sudah terdaftar, silahkan ulangi kembali !!!';
    $EmailExistJson =json_encode($EmailExistMSG);
    echo $EmailExistJson ; 
}
else{
    $query = "insert into tb_register (username,email,no_telp,password) values ('$username','$email','$no_telp','$password')";
    if(mysqli_query($koneksi,$query)){
    $Pesan ='User Sukses Terdaftar';
    $json =json_encode($Pesan);
    echo $json ;
    }
    else {
    $FMSG ='Gagal Terdaftar';
    $jsons =json_encode($FMSG);
    echo $jsons ;
    }
}
mysqli_close($koneksi);
?>


