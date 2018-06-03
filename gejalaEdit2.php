<?php
    include 'config/koneksi.php';
    $id_gejala = $_POST['id_gejala'];
    $gejala = $_POST['gejala'];

    $gejala =  mysql_query("update gejalacabai set gejala='$gejala' where id_gejala='$id_gejala'");
    header('location:dataGejala.php');
?>