<?php

 include_once ("con.php");
$id= $_GET['id'];

$query="DELETE FROM `barang` WHERE `barang`.`kd_barang` = $id" ;

$hasil=mysqli_query ($conn,$query);

if($hasil){
	header('Location:welcome2.php');
}else{
	echo "hapus data gagal";
}

?>