<?php

 include_once ("con.php");
$id=$_GET['id'];

$query="SELECT * FROM pembeli WHERE kd_pembeli=". $id;

$hasil=mysqli_query ($conn,$query);


?>

<h1>EDIT BARANG</h1>
<form method="post" action="ubahcus.php">

	<?php while ($data=mysqli_fetch_array($hasil)) { ?>
		<table>

			<tr>
				<td>Nama pembeli</td>
				<td><input type="text" name="pembeli" value="<?php echo $data['nm_pembeli']?>" /></td>
			</tr>

			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jenkel" value="<?php echo $data['jenis_kelamin']?>" /></td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat']?>" /></td>
			</tr>

			<tr>
				<td>Kota</td>
				<td><input type="text" name="kota" value="<?php echo $data['kota']?>" /></td>
			</tr>

			<tr>
				<td></td>
				<td>
					<input type="hidden" name="kode" value="<?php echo $data['kd_pembeli']?>">
					<input type="submit" onclick="" value="edit data"/>

				</td>
			</tr>
		</table>

	<?php } ?>

		</form>
