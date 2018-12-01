<?php 
include 'database.php';
$db = new database();
$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input($_POST['id_supplier'],$_POST['nama_supplier'],$_POST['alamat_supplier'],$_POST['contact_person'],$_POST['no_telp']);
 	header("location:tampildata.php");
 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id_supplier']);
	header("location:tampildata.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['id_supplier'],$_POST['nama_supplier'],$_POST['alamat_supplier'],$_POST['contact_person'],$_POST['no_telp']);
 	header("location:tampildata.php");
 }
?>