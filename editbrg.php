<?php

 include_once ("con.php");
$id=$_GET['id'];

$query="SELECT * FROM barang WHERE kd_barang=". $id;

$hasil=mysqli_query ($conn,$query);


?>

<h1>EDIT BARANG</h1>
<form method="post" action="ubahbrg.php">

	<?php while ($data=mysqli_fetch_array($hasil)) { ?>
		<table>

			<tr>
				<td>Nama barang</td>
				<td><input type="text" name="barang" value="<?php echo $data['nm_brg']?>" /></td>
			</tr>

			<tr>
				<td>Merk</td>
				<td><input type="text" name="merk" value="<?php echo $data['merk']?>" /></td>
			</tr>

			<tr>
				<td>Type</td>
				<td><input type="text" name="type" value="<?php echo $data['type']?>" /></td>
			</tr>

			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" value="<?php echo $data['harga']?>" /></td>
			</tr>

			<tr>
				<td>Stok</td>
				<td><input type="number" name="stok" value="<?php echo $data['stok']?>" /></td>
			</tr>

			<tr>
				<td></td>
				<td>
					<input type="hidden" name="kode" value="<?php echo $data['kd_barang']?>">
					<input type="submit" value="edit data"/>

				</td>
			</tr>
		</table>

	<?php } ?>

		</form>
