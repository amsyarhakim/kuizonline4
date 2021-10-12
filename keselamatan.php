<?php
session_start();
//mulakan sesi login
if(!isset($_SESSION['idpengguna'])){
//jika belum login, lencongan ke fail ini
header('Location: index.php');
exit();  }
?>
