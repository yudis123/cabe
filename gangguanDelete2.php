<?php
    include 'config/koneksi.php';
    $id_gangguan = $_POST['id_gangguan'];
    $gangguan=mysql_query("delete from gangguancabai where id_gangguan='$id_gangguan'");
    header('location:dataGangguan.php');
?>
