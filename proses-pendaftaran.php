<?php

include("config.php");
// apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
	
	// ambil data dari formulir
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$tgl = $_POST['tgl'];
	$alamat = $_POST['alamat'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$hobi = implode(', ', $_POST['hobi']);
	
	// buat query
	$sql = "INSERT INTO calon_siswa (nim, nama, tgl, alamat, jenis_kelamin, agama, hobi) VALUE ('$nim', '$nama', '$tgl', '$alamat', '$jenis_kelamin', '$agama', '$hobi')";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: index.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: index.php?status=gagal');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
