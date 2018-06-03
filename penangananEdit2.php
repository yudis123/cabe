<?php
    include 'config/koneksi.php';
    $id_penanganan = $_POST['id_penanganan'];
    $jenis_penanganan = $_POST['jenis_penanganan'];
    $keterangan = $_POST['keterangan'];

    $jadwal=  mysql_query("update penanganancabai set jenis_penanganan='$jenis_penanganan', keterangan='$keterangan' where id_penanganan='$id_penanganan'");
    header('location:dataPenanganan.php');
?>