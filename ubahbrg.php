<?php

 include_once ("con.php");

  $id = $_POST['kode'];
  $barang = $_POST['barang'];
  $merk = $_POST['merk'];
  $type = $_POST['type'];
  $harga = $_POST['harga'];
  $stok = $_POST['stok'];

  $query ="UPDATE barang SET nm_brg='$barang',merk='$merk',type='$type',harga='$harga', stok=$stok WHERE kd_barang=$id" ;

  $hasil=mysqli_query ($conn,$query);

  if ($hasil) {
  	header('Location:welcome2.php');
  }else {
  	echo "update data gagal";
  }

?>