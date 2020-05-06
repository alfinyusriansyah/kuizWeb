<?php
    
    include_once ("con.php");

  $kode = $_POST['kode'];
  $pembeli = $_POST['pembeli'];
  $jenkel = $_POST['jenkel'];
  $alamat = $_POST['alamat'];
  $kota = $_POST['kota'];



  $query ="INSERT INTO pembeli(kd_pembeli,nm_pembeli,jenis_kelamin,alamat,kota) VALUE('$kode','$pembeli','$jenkel','$alamat','$kota')" ;

  $hasil= mysqli_query($conn,$query);

  if ($hasil) {
  	echo "data berhasil";
  } else {
  	echo "gagal";
  }



?>