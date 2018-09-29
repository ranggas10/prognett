<pre><code><span><!DOCTYPE html>
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
    			<a href="form-daftar.php"><button type="button" class="btn btn-primary btn-lg">Form Daftar Mahasiswa</button></a><br>
    			<a href="list-siswa.php"><button type="button" class="btn btn-secondary btn-lg">Daftar List Mahasiswa</button></a><br>
          <a href="perkalian.php"><button type="button" class="btn btn-secondary btn-lg">Perkalian</button></a><br>
    			<a href="https://github.com/ranggas10/prognett"><button type="button" class="btn btn-success btn-lg">Source Code</button></a>			
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
</html></span></code></pre>