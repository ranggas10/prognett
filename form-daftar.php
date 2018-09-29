<!DOCTYPE html>

<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Mahasiswa</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Input Data Mahasiswa</title>
</head>
<body>
	<header>
		<h3>Input Data Mahasiswa</h3>
	</header>
	<form action="proses-pendaftaran.php" method="POST">
		<div class="form-group mx-sm-3 mb-2">
		    	<label for="nim">NIM</label>
		    	<input type="number" class="form-control " name="nim" id="nim" placeholder="NIM" autocomplete="off" required>
		</div>
		<div class="form-group mx-sm-3 mb-2">
		    	<label for="nama">Nama</label>
		    	<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" autocomplete="off" required>
		</div>
		<div class="form-group mx-sm-3 mb-2">
		    	<label for="tanggal">Tanggal Lahir</label>
		    	<input type="date" class="form-control" name="tgl" id="tanggal" required>
		</div>
		<div class="form-group mx-sm-3 mb-2">
		    	<label for="alamat">Alamat</label>
		    	<input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" autocomplete="off" required>
		</div>

		<div class="form-group mx-sm-3 mb-2">
		    	<label>Jenis Kelamin</label>
		<div class="form-check form-check-inline mx-sm-3 mb-2">
				<input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="Laki-Laki">
				<label class="form-check-label" for="inlineRadio1">Laki-laki</label>
		</div>
		<div class="form-check form-check-inline mx-sm-3 mb-2">
		  		<input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="Perempuan">
		  		<label class="form-check-label" for="inlineRadio2">Perempuan</label>
		</div>
		</div>

		<div class="input-group mx-sm-3 mb-3">
		<div class="input-group-append">
		    <label class="input-group-text" for="inputGroupSelect02">Agama</label>
		</div>
		  <select class="custom-select" id="inputGroupSelect02" name="agama" required>
		    <option name="hobi[]" value="Islam" selected>Islam</option>
		    <option name="hobi[]" value="Kristen">Kristen</option>
		    <option name="hobi[]" value="Hindu">Hindu</option>
		    <option name="hobi[]" value="Budha">Budha</option>
		    <option name="hobi[]" value="Atheis">Atheis</option>
		  </select>  
		</div>

		<div class="form-group mx-sm-3 mb-2">
		    	<label>Hobi</label>
		<div class="form-check mx-sm-3 mb-3">
		<div class="form-check form-check-inline">
		  	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="hobi[]" value="Makan">
		  	<label class="form-check-label" for="inlineCheckbox1">Makan</label>
		</div>

		<div class="form-check form-check-inline">
		  	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="hobi[]" value="Membaca">
		  	<label class="form-check-label" for="inlineCheckbox2">Membaca</label>
		</div>

		<div class="form-check form-check-inline">
		  	<input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="hobi[]" value="Touring">
		  	<label class="form-check-label" for="inlineCheckbox3">Touring</label>
		</div>

		<div class="form-check form-check-inline">
		  	<input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="hobi[]" value="Tidur">
		  	<label class="form-check-label" for="inlineCheckbox4">Tidur</label>
		</div>

		<div class="form-check form-check-inline">
		  	<input class="form-check-input" type="checkbox" id="inlineCheckbox5" name="hobi[]" value="Lainnya">
		  	<label class="form-check-label" for="inlineCheckbox5">Lainnya</label>
		</div>
		</div>
		</div>

			<input class="btn btn-primary" type="submit" value="Input Data" name="daftar">
</form>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
	
</html>
