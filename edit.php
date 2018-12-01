<html>
<body background="cute-wallpapers-for-iphone-6s.jpg">
<?php 
include 'database.php';
$db = new database();
?>
<h1>Sistem Perangkat Lunak</h1>
<h2>Tabel Supplier</h2>
<h3>Edit Data Supplier</h3>
<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){
?>
<table>
	<tr>
		<td>Nama Supplier</td>
		<td>
			<input type="hidden" name="id_supplier" value="<?php echo $d['id_supplier'] ?>">
			<input type="text" name="nama_supplier" value="<?php echo $d['nama_supplier'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat supplier</td>
		<td><input type="text" name="alamat_supplier" value="<?php echo $d['alamat_supplier'] ?>"></td>
	</tr>
	<tr>
		<td>Contact Person</td>
		<td><input type="text" name="contact_person" value="<?php echo $d['contact_person'] ?>"></td>
	</tr>
	<tr>
		<td>No Telepon</td>
		<td><input type="text" name="no_telp" value="<?php echo $d['no_telp'] ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>
</body>
</html>