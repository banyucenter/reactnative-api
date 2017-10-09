<?php
	    include "Koneksi.php";
	    
	    $id = $_GET['id'];
	    
	    $sql = "SELECT * FROM tb_wisata where id='$id'";
    	$res = mysqli_query($koneksi,$sql);
	    $result = array();
        $url = "https://banyu.center/reactnative/img/";
 
        while($row = mysqli_fetch_assoc($res))
        {
        
            $temp = array(
            "id"=>$row['id'],
            "nama_wisata"=>$row['nama_wisata'],
            "email"=>$row['email'],
            "whatsapp"=>$row['whatsapp'],
            "no_telp"=>$row['no_telp'],
            "website"=>$row['website'],
            "alamat"=>$row['alamat'],
            "foto"=>$url.$row['foto']
            );
            array_push($result,$temp);
        }
        $data = json_encode($result);
        echo $data;
?>
