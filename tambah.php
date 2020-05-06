<!DOCTYPE html>
<html>
<head>
	<title> Tambah barang </title>
</head>
<body>
	<center>
		<h1> Tambah buku</h1>
		<form method="post" action="addbrg.php">
		<table>
			<tr>
				<td>Kode barang</td>
				<td> <input type="number" name="kode" placeholder="kode barang"/> </td>
			</tr>

			<tr>
				<td>Nama barang</td>
				<td><input type="text" name="barang" placeholder="masukan nama barang"/></td>
			</tr>

			<tr>
				<td>Merk</td>
				<td><input type="text" name="merk" placeholder="masukan Merk barang"/></td>
			</tr>

			<tr>
				<td>Type</td>
				<td><input type="text" name="type" placeholder="masukan type barang"/></td>
			</tr>

			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" placeholder="masukan harga barang"/></td>
			</tr>

			<tr>
				<td>Stok</td>
				<td><input type="number" name="stok" placeholder="masukan stok barang"/></td>
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