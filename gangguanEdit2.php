<?php
    include 'config/koneksi.php';
    $id_gangguan = $_POST['id_gangguan'];
    $nama_gangguan = $_POST['nama_gangguan'];
    $keterangan_gangguan = $_POST['keterangan_gangguan'];

    $gangguan =  mysql_query("update gangguancabai set nama_gangguan='$nama_gangguan', keterangan_gangguan='$keterangan_gangguan' where id_gangguan='$id_gangguan'");
    header('location:dataGangguan.php');
?>