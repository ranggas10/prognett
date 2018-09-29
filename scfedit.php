<xmp>
<?php 

include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
	<header>
		<h3>Edit Data Mahasiswa</h3>
	</header>

	<form action="proses-edit.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
		<div class="form-group mx-sm-3 mb-2">
		    	<label for="nim">NIM</label>
		    	<input type="number" class="form-control " name="nim" id="nim" placeholder="NIM" autocomplete="off" value="<?php echo $siswa['nim'] ?>" required>
		</div>
		<div class="form-group mx-sm-3 mb-2">
		    	<label for="nama">Nama</label>
		    	<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" autocomplete="off" value="<?php echo $siswa['nama'] ?>" required >
		</div>
		<div class="form-group mx-sm-3 mb-2">
		    	<label for="tanggal">Tanggal Lahir</label>
		    	<?php $tgl = $siswa['tgl']; ?>
		    	<input type="date" class="form-control" name="tgl" id="tanggal" value="<?php echo $siswa['tgl']?>" required>
		</div>
		<div class="form-group mx-sm-3 mb-2">
		    	<label for="alamat">Alamat</label>
		    	<?php $tgl = $siswa['alamat']; ?>
		    	<input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" autocomplete="off" value="<?php echo $siswa['alamat'] ?>"required>
		</div>

		<div class="form-group mx-sm-3 mb-2">
		    	<label>Jenis Kelamin</label>
		    	<?php $jenis_kelamin = $siswa['jenis_kelamin']; ?>
		<div class="form-check form-check-inline mx-sm-3 mb-2">
				<input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="Laki-Laki" <?php echo ($jenis_kelamin == 'Laki-Laki')?"checked": ""?>>
				<label class="form-check-label" for="inlineRadio1">Laki-laki</label>
		</div>
		<div class="form-check form-check-inline mx-sm-3 mb-2">
		  		<input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="Perempuan" <?php echo ($jenis_kelamin == 'Perempuan')?"checked": ""?>>
		  		<label class="form-check-label" for="inlineRadio2">Perempuan</label>
		</div>
		</div>

		<div class="input-group mx-sm-3 mb-3">
		<div class="input-group-append">
		    <label class="input-group-text" for="inputGroupSelect02">Agama</label>
		</div>
		  <select class="custom-select" id="inputGroupSelect02" name="agama" required>
		  	<?php $agama = $siswa['agama']; ?>
		    <option name="hobi[]" value="Islam" <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
		    <option name="hobi[]" value="Kristen" <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
		    <option name="hobi[]" value="Hindu" <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
		    <option name="hobi[]" value="Budha" <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
		    <option name="hobi[]" value="Atheis" <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
		  </select>  
		</div>

		<div class="form-group mx-sm-3 mb-2">
		    	<label>Hobi</label>
		    	<?php $hobi = $siswa['hobi']; ?>
		<div class="form-check mx-sm-3 mb-3">
			
		<div class="form-check form-check-inline">
		  	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="hobi[]" value="Makan" <?php echo ($hobi == 'Makan')?"checked": ""?>>
		  	<label class="form-check-label" for="inlineCheckbox1">Makan</label>
		</div>

		<div class="form-check form-check-inline">
		  	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="hobi[]" value="Membaca" <?php echo ($hobi == 'Membaca')?"checked": ""?>>
		  	<label class="form-check-label" for="inlineCheckbox2">Membaca</label>
		</div>

		<div class="form-check form-check-inline">
		  	<input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="hobi[]" value="Touring" <?php echo ($hobi == 'Touring')?"checked": ""?>>
		  	<label class="form-check-label" for="inlineCheckbox3">Touring</label>
		</div>

		<div class="form-check form-check-inline">
		  	<input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="hobi[]" value="Tidur" <?php echo ($hobi == 'Tidur')?"checked": ""?>>
		  	<label class="form-check-label" for="inlineCheckbox4">Tidur</label>
		</div>

		<div class="form-check form-check-inline">
		  	<input class="form-check-input" type="checkbox" id="inlineCheckbox5" name="hobi[]" value="Lainnya" <?php echo ($hobi == 'Lainnya')?"checked": ""?>>
		  	<label class="form-check-label" for="inlineCheckbox5">Lainnya</label>
		</div>
		</div>
		</div>
	</form>

			<input class="btn btn-primary" type="submit" value="Simpan Data" name="simpan">
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
</xmp>