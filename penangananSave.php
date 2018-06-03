<?php
    include 'config/koneksi.php';
    $id_penanganan = $_POST['id_penanganan'];
    $jenis_penanganan = $_POST['jenis_penanganan'];
    $keterangan = $_POST['keterangan'];
    
    mysql_query("insert into penanganancabai (id_penanganan, jenis_penanganan, keterangan) values ('$id_penanganan', '$jenis_penanganan', '$keterangan')");
    header('location:dataPenanganan.php');
?>