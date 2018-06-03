<?php
    include 'config/koneksi.php';
    $id_gejala = $_POST['id_gejala'];
    $gangguan=mysql_query("delete from gejalacabai where id_gejala='$id_gejala'");
    header('location:dataGejala.php');
?>
