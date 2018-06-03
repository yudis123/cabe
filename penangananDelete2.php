<?php
    include 'config/koneksi.php';
    $id_penanganan = $_POST['id_penanganan'];
    $penanganan =mysql_query("delete from penanganancabai where id_penanganan='$id_penanganan'");
    header('location:dataPenanganan.php');
?>
