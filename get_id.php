<?php
 
include 'Koneksi.php';
$json = file_get_contents('php://input');
$decode = json_decode($json,true);

$id = $_GET['id'];


$query = "select * from tb_kabupaten where id = '$id'";
$check = mysqli_fetch_array(mysqli_query($koneksi,$query));


if(isset($check)){
$PesanSukses = 'Data Matched';
$JsonSukses = json_encode($PesanSukses);
echo $JsonSukses; 

}
else{
$PesanKesalahan = 'Tidak Ditemukan Data' ;
$PesanKesalahanJson = json_encode($PesanKesalahan);

echo $PesanKesalahanJson ;
 
}
 
mysqli_close($koneksi);
?>