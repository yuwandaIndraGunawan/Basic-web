<?php
  $sumber = "data.json";
  $konten = file_get_contents($sumber);
  $data   = json_decode($konten, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Diajarin array biasa, tugasnya ko pake json, ngitung umur pula</title>
</head>
<body>
 
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th >Nama</th>
        <th>Kelas</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>umur</th>
        <th>Nilai</th>
        <th>Hasil</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      for ($a = 0; $a < count($data); $a++){
        $tgl = new DateTime($data[$a]['tanggal_lahir']);
        $today = new DateTime();
        $usia = $today->diff($tgl);
        $data[$a]['umur'] = $usia->y;
        print "<tr>";
        print "<td>".$a."</td>";
        print "<td>".$data[$a]['nama']."</td>";
        print "<td>".$data[$a]['kelas']."</td>";
        print "<td>".$data[$a]['alamat']."</td>";
        print "<td>".$data[$a]['tanggal_lahir']."</td>";
        print "<td>".$data[$a]['umur']."</td>";
        print "<td>".$data[$a]['nilai']."</td>";
        print "<td>".$data[$a]['hasil']."</td>";
        print "<tr>";
      }
    ?>
    </tbody>
  </table>
</body>
</html>