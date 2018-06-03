<?php
    require 'config/koneksi.php';
    
    function autonumber($tabel, $kolom, $lebar=0, $awalan=''){
        $query="select $kolom from $tabel order by $kolom desc limit 1";
        $hasil=mysql_query($query);
        $jumlahrecord = mysql_num_rows($hasil);
        if($jumlahrecord == 0)
            $nomor=1;
        else{
            $row=mysql_fetch_array($hasil);
            $nomor=intval(substr($row[0],strlen($awalan)))+1;
        }
        if($lebar>0)
            $angka = $awalan.str_pad($nomor,$lebar,"0",STR_PAD_LEFT);
        else
            $angka = $awalan.$nomor;
        return $angka;
      }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home UTD</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <<!-- CSS tambahan -->
    <link rel="stylesheet" type="text/css" href="tampilan.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

  <body>

    <div class="wrapper">
      <center><img src="image/chili.png" width="300" height="150"></center>

      <!--form untuk login-->
      <div class="login">
        <form class="form-inline" action="prosesLogin.php" method="POST">
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail3">Email address</label>
            <input type="text" class="form-control" name="username" placeholder="UserName">
          </div>
          <div class="form-group">
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
          <div class="tombolLogin">
            <button type="submit" class="btn btn-success">Sign in</button>
          </div>
        </form>
      </div>

      <!--tampilan navigasi bar-->
      <ul class="nav nav-tabs">
        <li role="presentation"><a href="homeCabai.html">Home</a></li>
        <li role="presentation" class="active"><a href="#">Gangguan Cabai</a></li>
        <li role="presentation"><a href="gejalaCabai.php">Gejala Cabai</a></li>
        <li role="presentation"><a href="penangananCabai.php">Penanganan Gangguan Cabai</a></li>
        <li role="presentation"><a href="jenisCabai.html">Jenis-Jenis Cabai</a></li>
        <li role="presentation"><a href="diagnosaCabai.php">Diagnosa Gangguan Cabai</a></li>
      </ul>

        <div class="container">
            <div class="row">
                <center><h3>Gangguan Tanaman Cabai</h3></center>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <td class="info"><center>No.</center></td>
                                <td class="info"><center>Gangguan Cabai</center></td>
                                <td class="info"><center>Keterangan Gangguan Cabai</center></td>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                $gangguan = mysql_query("select * from gangguancabai");
                                while ($data = mysql_fetch_array($gangguan)){
                            ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $data['nama_gangguan'] ?></td>
                                <td><?php echo $data['keterangan_gangguan'] ?></td>
                            </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
            </div>
        </div>
        

  </body>
</html>