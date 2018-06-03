<?php
    include 'config/koneksi.php';

    $id_gejala = $_POST['id_gejala'];
    $gejala = $_POST['gejala'];


    mysql_query("insert into gejalacabai (id_gejala, gejala) values ('$id_gejala','$gejala')");
    header('location:dataGejala.php');
?>