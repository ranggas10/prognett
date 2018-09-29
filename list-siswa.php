<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
  	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/r-2.2.2/datatables.min.css"/>
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
	<header>
		<h3>Data Mahasiswa</h3>
	</header>
	
	<nav>
		<a href="form-daftar.php">[+] Tambah Baru</a>
	</nav>
	
	<br>
	
	<table border="1" id="example">
		<thead>
			<tr>
				<th>No</th>
				<th>Nim</th>
				<th>Nama</th>
				<th>Tanggal Lahir</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
				<th>Agama</th>
	            <th>Hobi</th>
	            <th>Opsi</th>
			</tr>
		</thead>

		<tbody>
			<?php
			$sql = "SELECT * FROM calon_siswa";
			$query = mysqli_query($db, $sql);
			
			while($siswa = mysqli_fetch_array($query)){
				echo "<tr>";
				
				echo "<td>".$siswa['id']."</td>";
				echo "<td>".$siswa['nim']."</td>";
				echo "<td>".$siswa['nama']."</td>";
				echo "<td>".$siswa['tgl']."</td>";
				echo "<td>".$siswa['alamat']."</td>";
				echo "<td>".$siswa['jenis_kelamin']."</td>";
				echo "<td>".$siswa['agama']."</td>";
				echo "<td>".$siswa['hobi']."</td>";
				
				echo "<td>";
				echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
				echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
				echo "</td>";
				
				echo "</tr>";
			}		
			?>
			
		</tbody>
	</table>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/r-2.2.2/datatables.min.js"></script>
	<script>
    	$(document).ready(function() {
    		$('#example').DataTable();
		} );
    </script>
	</body>
</html>
