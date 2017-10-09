<?php
	    include "Koneksi.php";
	    
	    $sql = "SELECT * FROM tb_kabupaten";
	
    	$res = mysqli_query($koneksi,$sql);
	
	    $result = array();
 
        $url = "https://banyu.center/reactnative/img/";
 
        while($row = mysqli_fetch_assoc($res))
        {
        
            $temp = array(
            "id"=>$row['id'],
            "nama_kabupaten"=>$row['nama_kabupaten'],
            "foto"=>$url.$row['foto'],
            "keterangan"=>$row['keterangan'],
            );
            array_push($result,$temp);
        }
        $data = json_encode($result);
        echo $data;
?>
