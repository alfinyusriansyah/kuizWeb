
<?php
    
    $conn = mysqli_connect("localhost", "root", "", "web");

    if (!$conn){

    	echo "koneksi gagal !!";
    	die();
    } 


function cari($keyword){
    	$query_cari = "SELECT * FROM barang where 
    					nm_brg='$keyword'";

    	return $data($query_cari);
    }

?>

