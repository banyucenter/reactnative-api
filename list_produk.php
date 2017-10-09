<?php
include 'Koneksi.php';
$sql = "SELECT * FROM tb_produk";
$result = $koneksi->query($sql);
 
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