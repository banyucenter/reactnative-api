<?php
include 'Koneksi.php';
$id = $_GET['id'];

$query = "select * from tb_produk where id = '$id'";
$result = $koneksi->query($query);

if ($result->num_rows >0) {
 while($row[] = $result->fetch_assoc()) {
 $tem = $row;
 $json = json_encode($tem);
 }
 
} else {
 echo "No Results Found.";
}
echo $json;
$koneksi->close();
?>