<?php

 include_once ("con.php");

  $id = $_POST['kode'];
  $pembeli = $_POST['pembeli'];
  $jenkel = $_POST['jenkel'];
  $alamat = $_POST['alamat'];
  $kota = $_POST['kota'];
  

  $query ="UPDATE pembeli SET nm_pembeli='$pembeli',jenis_kelamin='$jenkel',alamat='$alamat',kota='$kota' WHERE kd_pembeli=$id" ;

  $hasil=mysqli_query ($conn,$query);

  if ($hasil) {
  	echo "berhasil di edit";;
  }else {
  	echo "update data gagal";
  }

?>