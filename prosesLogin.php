<?php
// session_start();
include "config/koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

 $login = "SELECT * from user WHERE username = '$username' AND password = '$password'";
 $perintah = mysql_query($login);
 $hasil = mysql_fetch_assoc($perintah);
 if ($hasil['username'] == $username AND $hasil['password'] == $password AND $hasil['level'] == "1") {
	session_start(); // memulai fungsi session
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	header("location:dataGangguan.php");
 }elseif($hasil['username'] == $username AND $hasil['password'] == $password AND $hasil['level'] == "2") {
	session_start(); // memulai fungsi session
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	header("location:darahMember.php");
 }else {
	header("location:homeUTD.html");
 }
 ?>