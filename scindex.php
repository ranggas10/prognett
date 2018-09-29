<xmp><!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Mahasiswa</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  	
 	<div class="container">
 		<center><h1>SISTEM INPUT MAHASISWA</h1></center>
 		<div class="row">
      <div class="col-sm">
    			<a href="form-daftar.php"><button type="button" class="btn btn-primary btn-lg btn-block">Form Daftar Mahasiswa</button></a><br>
      </div>
      <div class="col-sm">
    			<a href="list-siswa.php"><button type="button" class="btn btn-secondary btn-lg btn-block">Daftar List Mahasiswa</button></a><br>
      </div>
      <div class="col-sm">
    			<div class="dropdown">
          <button class="btn btn-success dropdown-toggle btn-lg" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <a href="scfdaftar.php"><button class="dropdown-item" type="button">Form Daftar</button></a>
            <a href="scfedit.php"><button class="dropdown-item" type="button">Form Edit</button></a>
            <a href="scphapus.php"><button class="dropdown-item" type="button">Proses Hapus</button></a>
            <a href="scpedit.php"><button class="dropdown-item" type="button">Proses Edit</button></a>
            <a href="scppendaftaran.php"><button class="dropdown-item" type="button">Proses Pendaftaran</button></a>
            <a href="scindex.php"><button class="dropdown-item" type="button">Index</button></a>
            <a href="scmahasiswa.php"><button class="dropdown-item" type="button">List Mahasiswa</button></a>
          </div>
        </div>	
    	</div>
	   </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Penginputan Mahasiswa Berhasil!";
			} else {
				echo "Penginputan Gagal !!";
			}
		?>
	</p>
	<?php endif; ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html></xmp>