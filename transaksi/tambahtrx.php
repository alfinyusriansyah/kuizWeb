<?php

 include_once ("con.php");
$id=$_GET['id'];

$query="SELECT * FROM transaksi WHERE kd_trx=". $id;

$hasil=mysqli_query ($conn,$query);


?>

<h1>Tamabah data</h1>
<form method="post" action="tambahtrx.php">

	<?php while ($data=mysqli_fetch_array($hasil)) { ?>
		<table>

			<tr>
				<td>Nama barang</td>
				<td><input type="text" name="barang" value="<?php echo $data['kd_brg']?>" /></td>
			</tr>

			<tr>
				<td>kode pembeli</td>
				<td><input type="text" name="merk" value="<?php echo $data['kd_pembeli']?>" /></td>
			</tr>

			<tr>
				<td>Typetanggal [yyyy-mm-dd hh:mm:ss]</td>
				<td><input type="text" name="type" placeholder="masukan tanggal" /></td>
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
