<?php
 
include 'Koneksi.php';

$json = file_get_contents('php://input');
$decode = json_decode($json,true);
$email = $decode['email'];
$password = $decode['password'];


$query = "select * from tb_user where email = '$email' and password = '$password' ";
$check = mysqli_fetch_array(mysqli_query($koneksi,$query));


if(isset($check)){
$PesanSuksesLogin = 'Data Matched';
$LoginJsonSukses = json_encode($PesanSuksesLogin);
echo $LoginJsonSukses; 

}
else{
$PesanKesalahan = 'Invalid Username or Password Please Try Again' ;
$PesanKesalahanJson = json_encode($PesanKesalahan);

echo $PesanKesalahanJson ;
 
}
 
mysqli_close($koneksi);
?>