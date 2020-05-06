
<?php
    error_reporting(0);
    include_once ("con.php");


?>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
	<h1>hallo</h1>
<div class="pc-tab">
	<input checked="checked" id="tab0" type="radio" name="pct">
	<input id="tab1" type="radio" name="pct"/>
	<input id="tab2" type="radio" name="pct"/>
	<input id="tab3" type="radio" name="pct"/>
	<nav>
		<ul>
			<li class="tab0">
				<label for="tab0"> home </label>
			</li>

			<li class="tab1">
				<label for="tab1"> Product </label>
			</li>
						<li class="tab2">
				<label for="tab2"> Customer </label>
			</li>
						<li class="tab3">
				<label for="tab3"> transaksi</label>
			</li>

		</ul>

	</nav>
	<section>

		<div class="tab0">
			<h2>
				<p> ake ashabsh </p>
			</h2>
		</div>

		<div class="tab1">
			<h3> Daftar Product kami</h3>
			<br>
			<form action="" method="post" > 
				<input type="text" name="key" size= "40" autofocus placeholder="masukan pencarian...">
				<button type="submit" name="cari"  > cari</button>
			</form>
				<a href="tambah.php"> tambah</a>
			</br>

			<table border = "1" width="700px">

				 <tr>
			<th>No.id</th>
            <th>Nama barang</th>
            <th>Merk</th>
            <th>Type</th>
            <th>Harga</th>
            <th>stok</th>
            <th>aksi</th>
                 </tr>
            <?php
            $no=1;

            $query=$_POST['key'];
            if ($query != '') {
            	$hasil = mysqli_query($conn,"SELECT * FROM barang where nm_brg LIKE '".$query."' ");
            } else{
            	$hasil = mysqli_query($conn,"SELECT * FROM barang");
            } 
              while ($data=mysqli_fetch_array($hasil)) { ?>
             <tr>
             	<td> <?php echo $data['kd_barang'];?></td>
             	<td> <?php echo $data['nm_brg'];?></td>
             	<td> <?php echo $data['merk'];?></td>
             	<td> <?php echo $data['type'];?></td>
             	<td> <?php echo $data['harga'];?></td>
             	<td> <?php echo $data['stok'];?></td>
             	<td><a href="editbrg.php?id=<?php echo $data['kd_barang'] ?>">Edit</a>
             		<a href="hapusbrg.php?id=<?php echo $data['kd_barang'] ?>">hapus</a>
             	</td> 
             </tr> 
       
            <?php } ?>
			</table>


		</div>

		<div class="tab2">
			<h3> Daftar Product Customer</h3>
			<br>
			<form action="" method="post" > 
				<input type="text" name="key1" size= "40" autofocus placeholder="masukan pencarian...">
				<button type="submit" name="cari"  > cari</button>
			</form>
				<a href="customer/tambahcus.php"> tambah</a>
			</br>
			<table border = "1" width="700px" m>

				 <tr>
			<th>No.id pembeli</th>
			<th>Nama pembeli</th>
            <th>Jeni kelamin</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Aksi</th>
                 </tr>

                 <?php
            $no=1;

            $query1=$_POST['key1'];
            if ($query1 != '') {
            	$hasil1 = mysqli_query($conn,"SELECT * FROM pembeli where nm_pembeli LIKE '".$query1."' ");
            } else{
            	$hasil1 = mysqli_query($conn,"SELECT * FROM pembeli");
            } 

             while ($data=mysqli_fetch_array($hasil1)) { ?>
             <tr>
             	<td> <?php echo $data['kd_pembeli'];?></td>
             	<td> <?php echo $data['nm_pembeli'];?></td>
             	<td> <?php echo $data['jenis_kelamin'];?></td>
             	<td> <?php echo $data['alamat'];?></td>
             	<td> <?php echo $data['kota'];?></td>
             	<td><a href="customer/editcus.php?id=<?php echo $data['kd_pembeli'] ?>">Edit</a>
             		<a href="customer/hapuscus.php?id=<?php echo $data['kd_pembeli'] ?>">hapus</a>
             		
             	</td> 
             </tr>    
            <?php } ?>
			</table>


		</div>



		<div class="tab3">
			<br>
			<form action="" method="post" > 
				<input type="text" name="key2" size= "40" autofocus placeholder="masukan pencarian...">
				<button type="submit" name="cari"  > cari</button>
			</form>
				<a href="transaksi/tambahtrx.php?id=<?php echo $data['kd_trx'] ?>"> tambah</a>
			</br>
			<table border = "1" width="700px">
				<tr>
				<th>No.Transaksi</th>
				<th>Detail barang</th>
            	<th>Detail pembeli</th>
            	<th>Tanggal</th>
            	<th>Aksi</th>
				</tr>

				 <?php
            $no=1;

            $query2=$_POST['key2'];
            if ($query2 != '') {
            	$hasil2 = mysqli_query($conn,"SELECT * FROM transaksi where kd_trx LIKE '".$query2."' ");
            } else{
            	$hasil2 = mysqli_query($conn,"SELECT * FROM transaksi");
            } 

				while ($data=mysqli_fetch_array($hasil2)) { ?>
             <tr>
             	<td> <?php echo $data['kd_trx'];?></td>
             	<td> <?php echo $data['kd_brg'];?></td>
             	<td> <?php echo $data['kd_pembeli'];?></td>
             	<td> <?php echo $data['tgl_beli'];?></td>
             	<td><a href="transaksi/edittrx.php?id=<?php echo $data['kd_trx'] ?>">Edit</a>
             		<a href="customer/hapuscus.php?id=<?php echo $data['kd_pembeli'] ?>">hapus</a>
             	</td> 
             </tr>    
            <?php } ?>
			</table>
		</div>


	</section>
</div>

</body>
</html>