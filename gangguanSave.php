<?php
    include 'config/koneksi.php';

    $id_gangguan = $_POST['id_gangguan'];
    $nama_gangguan = $_POST['nama_gangguan'];
    $keterangan_gangguan = $_POST['keterangan_gangguan'];


    mysql_query("insert into gangguancabai (id_gangguan, nama_gangguan, keterangan_gangguan) values ('$id_gangguan','$nama_gangguan','$keterangan_gangguan')");
    header('location:dataGangguan.php');
?>