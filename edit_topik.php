
<?php
require 'sambung.php';
require 'keselamatan.php';
?>

<?php
if (isset($_POST['update'])){
$idtopik = $_POST['idtopik'];
$topikBaru=$_POST['paparan_topik'];
$markahBaru=$_POST['markah'];
//KEMASKINI DENGAN REKOD BARU
$result = mysqli_query($hubung,"UPDATE topik SET topik='$topikBaru',markah='$markahBaru'
WHERE idtopik='$idtopik'");
//MESEJ POP UP
echo "<script>alert('Kemaskini rekod telah berjaya');
window.location='papar_topik.php'</script>";
}
?>
<?php
//DPTKAN DATA LAMA
$topikEdit = $_GET['idtopik'];
$pilihTopik = mysqli_query($hubung, "SELECT * FROM topik WHERE idtopik=$topikEdit");
while($dataTopik = mysqli_fetch_array($pilihTopik))
{
$idTOPIK = $topikEdit;
$editTOPIK = $dataTopik['topik'];
$editMARKAH= $dataTopik['markah'];
}
?>

<style>
.button {
  font-family: poppins;
  width: 100%;
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

.button:hover {
  background-color: #B0AEA4;
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
						<?php include 'menu.php'; ?>
						<center><p style='font-size: 42px; font-family: poppins;'>Kemaskini Topik</p></center>
            <main>
            <center>
<table width="70%" border="0" align="center"
style='font-size:18px; background-color: #DCD9CD; border: 25px solid #DCD9CD; border-radius: 25px;' >
<tr>
<td>
<form method="post" action="edit_topik.php">
<p>
<center>
<label style="font-family: poppins;">Nama Topik:</label><br>
<input type="text" name="paparan_topik"
size="60%" value="<?php echo $editTOPIK; ?>" style="font-family: poppins;"/>
<br>
<label style="font-family: poppins;">Markah :</label><br>
<input type="text" name="markah" size="5%"
value="<?php echo $editMARKAH; ?>" />
<br><br>
<input type="hidden" name="idtopik" value="<?php echo $idTOPIK; ?>" />
<tr>

<td><center><table border="0" width="50%">
<td width="50%">
<input class="button" type="submit" name="update" value="KEMASKINI"/>
</td>
<td width="50%">
<input class="button" type="button" value="KEMBALI" onclick="history.back()"/>
</td>
</table></center></td>

</tr>
</center>
</p>
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
</html
