<?php 

include "config/config.php";
if  (isset($_POST['save'])){
	$nabar = $_POST['nabar'];
	$kategori = $_POST['kategori'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];
	$keterangan = $_POST['ket'];

	$sql = mysqli_query($conn, "INSERT INTO tb_barang (nama_barang,id_kategori,harga,stok,keterangan) VALUES ('".$nabar."', '".$kategori."', '".$harga."', '".$stok."', '".$keterangan."')");

	if($sql){
		echo "<script> alert('success');document.location.href = 'data_barang.php'; </script>";
	}
}
	
 ?>