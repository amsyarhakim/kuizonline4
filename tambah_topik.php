<?php
require 'sambung.php';
require 'keselamatan.php';
?>
<?php
if (isset($_POST['submit'])){
    //dapatkan nilai variable yang di POST
    $nom_soalan = $_POST['nom_soalan'];
    $topik = $_POST['paparan_topik'];
    $jenis_soalan = $_POST['jenis'];
    $markah = $_POST['markah'];
    //query topik
    $query="INSERT INTO topik (idtopik,topik,markah)
    values(NULL,'$topik','$markah')";
    $insert_row=$hubung->query($query);
    $last_id = mysqli_insert_id($hubung);
if($jenis_soalan=="mcq"){
echo "<script>alert('Topik baru telah ditambah');
window.location='soalan_baru1.php?idtopik=$last_id'
</script>";
}else{
    echo "<script>alert('Topik baru telah ditambah');
    window.location='soalan_baru2.php?idtopik=$last_id'</script>";
}
}
//JUMLAH TOPIK Spilih
$query = "SELECT * FROM topik";
$topik = mysqli_query($hubung, $query);
$total = mysqli_num_rows($topik);
$next=$total+1;
?>

<style>
.button {
  font-family: poppins;
  width: 80%;
  background-color: #5A5954;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 25px;
  cursor: pointer;
  transition: 0.5s;
}

.button:hover {
  background-color: #252522;
}

input[type=text ], select {
  font-family: poppins;
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 25px;
  box-sizing: border-box;
}

input[type=submit] {
  font-family: poppins;
  width: 80%;
  background-color: #5A5954;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 25px;
  cursor: pointer;
  transition: 0.5s;
}

input[type=submit]:hover {
  background-color: #252522;
}

</style>



<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "pelengkap.php"; ?>
</head>
<body>
	<div class="box-area">
		<header>
			<div class="wrapper">
				<div class="logo">
					<a href="#"><?php echo $subjek; ?></a>
				</div>
				<nav>
					<a href="logout.php">LOGOUT</a>
				</nav>
			</div>
		</header>
		<div class="banner-area">
			<h2><?php echo $nama_sistem; ?></h2>
		</div>
		<div class="content-area">
			<div class="wrapper">
				<h4><?php echo $motto_sistem; ?></h4>
				<div><br><br>
					<div style="position: absolute; left: 0px; align-content: center; width: 100%; height: 1300px; border: 0px;">
						<center><p style='font-size: 42px; font-family: poppins;'>Tambah Topik Baru</p></center>
            <main>
            	<center>
            <table width="70%" border="0" align="center" style="max-width: 70%; background-color: #DCD9CD; border: 25px solid #DCD9CD; border-radius: 25px;">
              <tr>
<td>
<form method="post" action="tambah_topik.php">
<center><p style="font-size: 30px;"><label>Topik ke-</label><?php echo $next; ?></p>
<p>
<label>Topik :</label><br><input type="text" name="paparan_topik" size="60" placeholder="TAIP DI SINI" required />
<br>
<label>Jenis Soalan :</label><br>
<select name="jenis" required>
<option hidden selected>PILIH</option>
<option value='mcq'>Pelbagai Jawapan / Benar-Palsu
</option><option value='fib'>Isi Tempat Kosong</option>
</select><br>
<label>Markah :</label><br><input type="text" name="markah" placeholder="1-100" maxlength='3' size="7" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required />
<tr>
<td><center><table border="0" width="50%">
<td width="50%">
<input style="width: 100%" class="button" type="submit" name="submit" value="TAMBAH TOPIK" />
</td>
<td width="50%">
<input style="width: 100%" class="button" type="button" value="KEMBALI" onclick="history.back()"/>
</td>
</table></center></td></tr>
</center>
</form>
</td>
</tr>
            </table>
            </center>
            </main>
          </div>
				</div>
				<div style='position: absolute; bottom: -250px; left: 0px; width: 100%; height: 250px; background: #262626;'>
					<p style="padding: 10px; margin: 20px;"><?php include 'footer.php'; ?><p>
			</div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>
