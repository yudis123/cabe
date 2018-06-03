<?php
    include 'config/koneksi.php';
    $id_jenis = $_POST['id_jenis'];
    $nama_cabai = $_POST['nama_cabai'];
    $karakteristik = $_POST['karakteristik'];
    
    mysql_query("insert into jeniscabai (id_jenis, nama_cabai, karakteristik) values ('$id_jenis', '$nama_cabai', '$karakteristik')");
    header('location:dataCabai.php');
?>