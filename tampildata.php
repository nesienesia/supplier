<html>
<body background="cute-wallpapers-for-iphone-6s.jpg">
<?php 
include 'database.php';
$db = new database();
?>
<center>
<font face="comic sans">
<h1>Sistem Perangkat Lunak</h1>
<h2>Tabel Supplier</h2>
<h3>Database Supply Chain</h3>
<a href="input.php">Input Data</a>

<br>
</br>
<table border="2">
	<tr>
		<th>id_supplier</th>
		<th>nama_supplier</th>
		<th>alamat_supplier</th>
		<th>contact_person</th>
		<th>no_telp</th>
	</tr>
	<?php
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td><?php echo $x['id_supplier']; ?></td>
		<td><?php echo $x['nama_supplier']; ?></td>
		<td><?php echo $x['alamat_supplier']; ?></td>
		<td><?php echo $x['contact_person']; ?></td>
		<td><?php echo $x['no_telp']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $x['id_supplier']; ?>&aksi=edit">Edit</a>
			<a href="proses.php?id=<?php echo $x['id_supplier']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
</table>
</center>
</font>
</body>
</html>