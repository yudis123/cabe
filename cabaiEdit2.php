<?php
    include 'config/koneksi.php';
    $id_jenis = $_POST['id_jenis'];
    $nama_cabai = $_POST['nama_cabai'];
    $karakteristik = $_POST['karakteristik'];

    $jeniscabai =  mysql_query("update jeniscabai set nama_cabai='$nama_cabai', karakteristik='$karakteristik' where id_jenis='$id_jenis'");
    header('location:dataCabai.php');
?>