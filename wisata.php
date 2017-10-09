<?php
	    include "Koneksi.php";
	    
	    $id_kabupaten = $_GET['id_kabupaten'];
	    
	    $sql = "SELECT * FROM tb_wisata where id_kabupaten='$id_kabupaten'";
    	$res = mysqli_query($koneksi,$sql);
	    $result = array();
        $url = "https://banyu.center/reactnative/img/";
 
        while($row = mysqli_fetch_assoc($res))
        {
        
            $temp = array(
            "id"=>$row['id'],
            "nama_wisata"=>$row['nama_wisata'],
            "foto"=>$url.$row['foto'],
            "alamat"=>$row['alamat'],
            );
            array_push($result,$temp);
        }
        $data = json_encode($result);
        echo $data;
?>
