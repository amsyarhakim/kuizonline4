<?php
//WAJIB FAIL INI
require 'sambung.php';
require 'keselamatan.php';
//Dapatkan ID dari URL
$pelajar_hapus = $_GET['idpengguna'];
//Hapus rekod pengguna semasa
$hapuskan1 = mysqli_query($hubung,"DELETE FROM pengguna WHERE idpengguna='$pelajar_hapus' ");
//Hapus rekod perekodan semasa
$hapuskan2 = mysqli_query($hubung,"DELETE FORM perekodan WHERE idpengguna='$pelajar_hapus' ");
//Papar mesej jika berjaya hapus
echo "<script>alert('Hapus Pelajar berjaya');
window.location='senarai_pelajar.php'</script>";
?>
