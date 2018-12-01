<?php 
class database{
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "supply_chain";
	function __construct(){
		$koneksi = mysql_connect($this->host, $this->uname, $this->pass);
		mysql_select_db($this->db);

		if($koneksi){
			echo "";
		}else{
			echo "";
		}
	}
	function tampil_data(){
	$data = mysql_query("select * from supplier");
	while($d = mysql_fetch_array($data)){
		$hasil[] = $d;
	}
	return $hasil;
}
function input($id_supplier,$nama_supplier,$alamat_supplier,$contact_person,$no_telp){
		mysql_query("insert into supplier values('$id_supplier','$nama_supplier','$alamat_supplier','$contact_person','$no_telp')");
	}
	function edit($id_supplier){
	$data = mysql_query("select * from supplier where id_supplier='$id_supplier'");
	while($d = mysql_fetch_array($data)){
		$hasil[] = $d;
	}
	return $hasil;
}
function update($id_supplier,$nama_supplier,$alamat_supplier,$contact_person,$no_telp) {
	mysql_query("update supplier set nama_supplier='$nama_supplier', alamat_supplier='$alamat_supplier', contact_person='$contact_person', no_telp='$no_telp' where id_supplier='$id_supplier'");
}
function hapus($id_supplier){
	mysql_query("delete from supplier where id_supplier='$id_supplier'");
}
} 
$supply_chain = new database();
?>