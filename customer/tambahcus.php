<!DOCTYPE html>
<html>
<head>
	<title> Tambah pembeli </title>
</head>
<body>
	<center>
		<h1> Tambah Pembeli</h1>
		<form method="post" action="addcus.php">
		<table>
			<tr>
				<td>Kode Pembeli</td>
				<td> <input type="number" name="kode" placeholder="kode barang"/> </td>
			</tr>

			<tr>
				<td>Nama pembeli</td>
				<td><input type="text" name="pembeli" placeholder="masukan nama pembeli"/></td>
			</tr>

			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jenkel" placeholder="jenis kelamin"/></td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" placeholder="masukan alamat"/></td>
			</tr>

			<tr>
				<td>Kota</td>
				<td><input type="text" name="kota" placeholder="masukan kota"/></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="tambah data"/></td>
			</tr>
		</table>
		</form>

	</center>

</body>
</html>