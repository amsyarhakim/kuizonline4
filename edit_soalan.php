<?php
require 'sambung.php';
require 'keselamatan.php';
?>

<?php
//DAPATKAN ID SAOALN
$soalan_terpilih = $_GET['idsoalan'];
//PILIH DATA BERDASARKAN PADA ID REKOD
$pilihSoalan = mysqli_query($hubung, "SELECT * FROM soalan
WHERE idsoalan=$soalan_terpilih");
while($dataSoalan = mysqli_fetch_array($pilihSoalan))
{
//Paparkan nilai asal
$nom_soalan = $dataSoalan['nom_soalan'];
$soalan= $dataSoalan['soalan'];
$gambarajah = $dataSoalan['gambarajah'];
}
?>

<style>


.button {
  font-family: poppins;
  background-color: #5A5954;
  color: white;
  padding: 5px 13px;
  font-size: 16px;
  border: none;
  border-radius: 25px;
  cursor: pointer;
  transition: 0.5s;
  float: center;
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

						<center><p style='font-size: 42px; font-family: poppins;'>Kemaskini Soalan</p></center>
            <main>
              <center style='font-family: poppins;'>
                <table width="70%" border="0" align="center"  style="border: 25px solid #DCD9CD; border-radius: 25px; width: fixed; align-content: center; background-color: #DCD9CD;">
                  <tr>
                  <td>
                  <p>
                  <label style="font-size: 20px;">Soalan ke-<?php echo $nom_soalan; ?>
                  </label>
                  </p>
                  <table style="border: 25px solid #F1F0EA; border-radius: 25px; background-color: #F1F0EA; width: 100%">
                    <input style="position: absolute;" type="text" name="idsoalan" value="<?php echo $soalan_terpilih; ?>"
                    readonly hidden>
                    <tr>
                      <td>
                        <p style="font-size: 20px;"> Soalan:<br>
                          <font style="border: 3px solid #DCD9CD; background-color: #DCD9CD; border-radius: 7px; width: 100%;"><?php echo $soalan; ?></font><br>
                  <label style="font-size: 20px;">Gambar:<br></label>
                  <?php
                  if ($gambarajah==NULL){
                  echo "<font style='border: 3px solid #DCD9CD; background-color: #DCD9CD; border-radius: 7px; width: 100%;'>-Tiada-</font>";
                  }else{
                  echo "<img src='gambar/".$gambarajah."' width='30%' height='30%'/>";
                  }
                  ?>
                  </p>
                  <a href="edit_soalan1.php?idsoalan=<?php echo $soalan_terpilih;?>">
                  <button class="button">EDIT</button></a>
                  <input class="button" type="button" value="BATAL" onclick="history.back()"/>
                </td>
                  </tr>
                </table>
                <br>
                  <tr><td>
                    <table style="border: 25px solid #F1F0EA; border-radius: 25px; background-color: #F1F0EA; width: 100%">
                      <td>
                        <p>
                        <label style="font-size: 20px;">Jawapan:<br>
                        </label>
                        <?php
                        $terpilih = $_GET['idsoalan'];
                        $no=1;
                        $pilihan = mysqli_query($hubung,"SELECT * FROM pilihan AS a INNER JOIN soalan AS q ON q.idsoalan = a.idsoalan WHERE q.idsoalan=$terpilih");
                        while($dataPilihan = mysqli_fetch_array($pilihan))
                        {
                        //TENTUKAN JENIS SOALAN
                        if($dataPilihan['jenis']==1){
                        ?>
                        <font style="font-size: 20px; border: 3px solid #DCD9CD; background-color: #DCD9CD; border-radius: 7px; width: 100%;">Pilihan <?php echo $no;?> :
                        <?php echo $dataPilihan['pilihan_jawapan'];?><br></font>


                        <?php
                        if($dataPilihan['jawapan']==1){
                        echo "*Jawapan<br>";
                        }
                        $no++;

                        }else{
                        ?>

                        <font style="font-size: 20px; border: 3px solid #DCD9CD; background-color: #DCD9CD; border-radius: 7px; width: 100%;">Cadangan Jawapan <?php echo $no;?> :
                        <?php echo $dataPilihan['pilihan_jawapan'];?></font><br>

                        <?php
                        $no++; }

                        }
                        ?>
                        </p>
                    </td>
                      </tr>
                    </table>
                  </td></tr>
                </table>
                  </center>
                </main>
                <center>
                  <font style='font-size: 14px; font-family: poppins;'>* Kemaskini Soalan *<br />ID Soalan :<?php echo $soalan_terpilih; ?></font>
                </center>
              </div>
            </div>
            <div style='position: absolute; bottom: -250px; left: 0px; width: 100%; height: 250px; background: #262626;'>
              <p style="padding: 10px; margin: 20px;"><?php include 'footer.php'; ?><p>
              </div>
            </div>
          </div>
        </div>
      </body>
</html>
