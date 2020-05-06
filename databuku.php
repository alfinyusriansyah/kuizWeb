<?php
    
    include_once ("con.php");

    $query= "SELECT * FROM barang";

    $hasil = mysqli_query($conn,$query);

    while ($data=mysqli_fetch_array($hasil)) {
    	echo $data['nm_brg']. "<br>"; 
    	 
    }

?>