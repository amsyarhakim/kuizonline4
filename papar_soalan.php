<?php
require 'sambung.php';
require 'keselamatan.php';
//DAPATKAN ID TOPIK
$topik_pilihan = $_GET['idtopik'];
$_SESSION['pilihan'] = $topik_pilihan;
//SAMBUNG KE TABLE
$result = mysqli_query($hubung, "SELECT * FROM topik WHERE idtopik='$topik_pilihan'");
while($res = mysqli_fetch_array($result))
{
//Paparkan nilai asal
$papartopik = $res['topik'];
$paparmarkah = $res['markah'];
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

.outter-table {
  background-color: #DCD9CD;
  border: 35px solid #DCD9CD;
  border-radius: 25px;
  width: fixed;
  align-content: center;
}

.inner-table {
  background-color: #F1F0EA;
  border: 25px solid #F1F0EA;
  border-radius: 25px;
}

.font {
  font-family: poppins;
  font-size: 18px;
}

</style>


<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "pelengkap.php"; ?>
</head>
<body onmousedown="return false" onselectstart="return false">
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
						<center><p style='font-size: 42px; font-family: courier new'>SENARAI SOALAN BAGI TOPIK:</p></center>
            <main>
              <center>
                <table width="70%" border="0" align="center" style="border: 25px solid #DCD9CD; border-radius: 25px; width: fixed; align-content: center;background-color: #DCD9CD;">
                  <tr>
                    <td colspan="4" valign="middle" align="center">
                      <a style='font-size: 32px; font-family: poppins;'><?php echo $papartopik; ?></a>
                    </td>
                  </tr>
                  <tr>
                    <td style="visibility: hidden;">Hidden</td></tr>
                    <tr class="font">
                      <td width="1%"><b>Bil.</b></td>
                      <td width="41%"><b>Soalan</b></td>
                      <td width="11%" align="center"><b>Jenis</b></td>
                      <td width="16%" align="center"><b>Tindakan</b></td>
                    </tr>
                    <?php
                    $no=1;
                    $data1=mysqli_query($hubung,"SELECT * FROM soalan AS q INNER JOIN pilihan AS a ON q.idsoalan = a.idsoalan
                    WHERE idtopik='$topik_pilihan'");
                    while ($info1=mysqli_fetch_array($data1))
                    {
                      $bil_rekod=mysqli_num_rows($data1);
                      ?>
                      <tr class="font">
                        <td><?php echo $no; ?></td>
                        <td><?php echo $info1['soalan']; ?></td>
                        <td>
                          <center>
                            <?php
                            if ($info1['jawapan']==1){
                              echo "MCQ / TF";
                            }else{
                              echo "FIB";
                            }?>
                          </center>
                        </td>
                        <td>
                          <center>
                            <a href="edit_soalan.php?idsoalan=<?php echo $info1['idsoalan'];?>"><button class="button">EDIT</button></a>
                            <a href="hapus_soalan.php?idsoalan=<?php echo $info1['idsoalan'];?>"><button class="button">HAPUS</button></a>
                          </center>
                        </td>
                      </tr>
                      <?php $no++; } ?>
                    </table>
                  </center>
                </main>
                <center>
                  <font style='font-size: 14px; font-family: poppins;'>* Senaraikan Tamat *<br />Jumlah Rekod:<?php echo $no-1; ?></font>
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
