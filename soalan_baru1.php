<?php
require 'sambung.php';
require 'keselamatan.php';
?>
<?php
if (isset($_POST['submit'])){
if ($_FILES['gambar']['name']==NULL){
$newnamepic="";
}else{
$gambar=$_FILES['gambar']['name'];
//PROSES GAMBAR
$imageArr=explode('.',$gambar);
$random=rand(10000,99999);
$newnamepic=$imageArr[0].$random.'.'.$imageArr[1];
$uploadPath="gambar/".$newnamepic;
$isUploaded=move_uploaded_file($_FILES["gambar"]["tmp_name"],$uploadPath);
}
$nom_soalan = $_POST['nom_soalan'];
$idtopik = $_POST['idtopik'];
$soalan = $_POST['paparan_soalan'];
$jawapan_betul = $_POST['jawapan_betul'];
$pilihan = array();
$pilihan[1] = $_POST['pilih1'];
$pilihan[2] = $_POST['pilih2'];
$pilihan[3] = $_POST['pilih3'];
$pilihan[4] = $_POST['pilih4'];
//TAMBAH SOALAN
$query="INSERT INTO soalan (nom_soalan,soalan,gambarajah,jenis,idtopik)
values
('$nom_soalan','$soalan','$newnamepic','1','$idtopik')";
$insert_row=mysqli_query($hubung,$query);
$last_id = mysqli_insert_id($hubung);
echo "<script>alert('Soalan baru telah berjaya ditambah');
window.location='soalan_baru1.php?idtopik=$idtopik'
</script>";
//VALIDATE INSERT
if($insert_row){
foreach($pilihan as $pilihan_jawapan => $pilih){
if($pilih != ''){
if($jawapan_betul == $pilihan_jawapan){
$jawapan = 1;
} else {
$jawapan = 0;
}
$query="INSERT INTO pilihan (nom_soalan,jawapan,pilihan_jawapan,idsoalan)
values
('$nom_soalan','$jawapan','$pilih','$last_id')";
$insert_row=mysqli_query($hubung,$query);
}
}
}
}
$topik_pilihan = $_GET['idtopik'];
$_SESSION['topik_semasa'] = $topik_pilihan;
//JUMLAH SOALAN
$query = "SELECT * FROM soalan WHERE
idtopik='$topik_pilihan' AND jenis='1'";
$soalan = mysqli_query($hubung,$query);
$total=mysqli_num_rows($soalan);
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
  float: center;
}

input[type=text ], select {
  font-family: poppins;
  width: 80%;
  padding: 7px 13px;
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
  float: center;
}

input[type=submit]:hover {
  background-color: #252522;
}

.button:hover {
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
						<center><p style='font-size: 42px; font-family: poppins;'>Tambah Soalan Baru</p></center>
            <main>
              <center>
<table width="70%" border="0" align="center" style='background-color: #DCD9CD; border: 25px solid #DCD9CD; border-radius: 25px;'>
<tr>
<td>
<table width="100%" style="border: 25px solid #F1F0EA; border-radius: 25px; background-color: #F1F0EA;">
<tr>
<td>
<form method="post" enctype="multipart/form-data">
<input style="visibility: hidden; position: absolute;" type="text" value="<?php echo $next; ?>" name="nom_soalan" size="5" readonly />
<input style="visibility: hidden; position: absolute;" type="text" value="<?php echo $topik_pilihan; ?>" name="idtopik" hidden />
<label style="font-size: 25px; font-family: poppins; ">Bilangan Soalan: <?php echo $next; ?></label>

<p><label>Soalan :<br></label><textarea style="max-width: 80%; max-height: 250px;" id="paparan_soalan" name="paparan_soalan" rows="7" cols="105" required>
</textarea><br>


<label>Gambar :<br></label><input type="file" name="gambar"/><br><small style="color:red;">*Jika perlu </small></p>
</p>
</td>
</tr>
</table>
<tr style="visibility: hidden;"><td>d</td></tr>
</td>
</tr>
<tr>
<td>
<table style="border: 25px solid #F1F0EA; border-radius: 25px; background-color: #F1F0EA;" width="70%">
  <tr>
  <td>
    <label style="font-family: poppins;">Pilihan Jawapan:</label><BR>
    <small style="font-family: poppins;">*Letak nombor <b>ANTARA 1 HINGGA 4 SAHAJA</b> bagi jawapan yang betul</small></span><br>
  </td>
  </tr>
<tr><td>
<p>
<label>Pilihan 1 : </label><input type="text" name="pilih1" size="50"/><br>
<label>Pilihan 2: </label><input type="text" name="pilih2" size="50"/><br>
<label>Pilihan 3: </label><input type="text" name="pilih3" size="50"/><br>
<label>Pilihan 4: </label><input type="text" name="pilih4" size="50"/><br>
<label>Pilihan Jawapan [1-4] :</label><input type="text" name="jawapan_betul" size="20" style="width: 10%; text-align: center;" required />
</p>
</td></tr>
</table>
</td>
</tr>
<tr style="visibility: hidden;"><td>d</td></tr>
<tr><td>
<CENTER>
<input type="submit" name="submit" value="CIPTA" style="width: 25%" />
<button class="button" style="width: 25%" onclick="window.location.href='papar_topik.php'">KEMBALI</button>
</CENTER>
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
