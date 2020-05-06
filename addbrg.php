<?php
    
    include_once ("con.php");

  $kode = $_POST['kode'];
  $barang = $_POST['barang'];
  $merk = $_POST['merk'];
  $type = $_POST['type'];
  $harga = $_POST['harga'];
  $stok = $_POST['stok'];


  $query ="INSERT INTO barang(kd_barang,nm_brg,merk,type,harga, stok) VALUE('$kode','$barang','$merk','$type','$harga','$stok')" ;

  $hasil= mysqli_query($conn,$query);

  if ($hasil) {
  	header("Location:welcome2.php") ;
  } else {
  	echo "gagal";
  }



?>