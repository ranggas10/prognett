<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tabel Perkalian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <div class="row">
  <form action="" method="post">
    <br>
    <label>Baris:</label>
    <input required="" class="form-control" type="text" name="baris" value="<?=isset($_POST['baris']) ? $_POST['baris'] : ''?>"/>
    <label>Kolom:</label>
    <input required="" class="form-control" type="text" name="kolom" value="<?=isset($_POST['kolom']) ? $_POST['kolom'] : ''?>"/>
    <br>
    <input class="btn btn-primary" type="submit" name="submit" value="Hasil">

  </form>
  </div>
  <br>
  <div class="row">
  <?php
    if(isset($_POST['submit'])){
      $baris=$_POST['baris'];
      $kolom=$_POST['kolom'];
      echo "<h5>Hasil : </h5>";
      echo "<table width border=2 class='tabel'>";
      echo "<tbody>";
      echo"<tr>";
      for($i=0;$i<=$baris;$i++) {
    if($i==0) {
      echo"<td width='40' align='center'>X</td>";
    }
    else{
      echo"<td width='40' align='center'>$i</td>";
      }
    }
      echo"</tr>";
      for($j=1;$j<=$kolom;$j++) {
      if($j%2==0) {
      echo"<tr align='center'><td>$j</td>";
      }
    else {
      echo"<tr align='center'><td>$j</td>";
    }
      for($k=1;$k<$i;$k++) {
        $hasil=$j * $k;
        echo"<td>$hasil</td>";
      }
        echo"</tr>";
        }
      }
      echo "</tbody>";
      echo "</table>";
      ?>
    </div>
</div>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>