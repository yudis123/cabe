<?php
    include 'config/koneksi.php';
    $id_jenis = $_POST['id_jenis'];
    $jeniscabai =mysql_query("delete from jeniscabai where id_jenis='$id_jenis'");
    header('location:dataCabai.php');
?>
