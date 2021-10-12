<?php
require 'sambung.php';
require 'keselamatan.php';
?>

<style>

.button {
  font-family: poppins;
  background-color: #5A5954;
  color: white;
  padding: 5px 13px;
  font-size: 13px;
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
            <main>
              <center>
                <table class="outter-table" width="70%" border="0" align="center">
                  <tr><td>
                    <center><p class="title">PRESTASI PELAJAR BERDASARKAN TOPIK</p></center></td></tr>
                    <tr class="hidden"><td>Hidden</td></tr>
                    <tr><td>
                      <table class="inner-table" width="95%">
                        <tr class='font'>
                          <td width="5%" ><b>Bil.</b></td>
                          <td width="30%"><b>Topik</b></td>
                          <td width="10%"><b>Bil. Menjawab</b></td>
                          <td width="5%"><b>Laporan</b></td>
                        </tr>
                        <?php
                        $no=1;
                        $topik=mysqli_query($hubung,"SELECT * FROM topik");
                        while ($infoTopik=mysqli_fetch_array($topik))
                        {
                          $rekod=mysqli_query($hubung,"SELECT idtopik,COUNT(idtopik) as 'bil' FROM perekodan WHERE idtopik='$infoTopik[idtopik]'");
                          $infoJawab=mysqli_fetch_array($rekod);
                          ?>
                          <tr class='font'>
                            <td align="center"><?php echo $no; ?></td>
                            <td><?php echo $infoTopik['topik']; ?></td>
                            <td><?php echo $infoJawab['bil']; ?></td>
                            <td><a onclick="window.open('laporan_guru.php?idtopik=<?php echo $infoTopik['idtopik'];?>');"><button class="button">buka</button></a></td>
                          </tr>
                          <?php
                          $no++;
                        }
                        ?>
                      </table>
                    </td></tr>
                    <tr><td>
                      <center>
                        <font style='font-size: 14px; font-family: poppins;'>* Senaraikan Tamat *<br />Jumlah Rekod:<?php echo $no-1; ?></font>
                      </center>
                    </td></tr>
                  </table>
                </center>
              </main>
            </div>
          </div>
          <div style='position: absolute; bottom: -250px; left: 0px; width: 100%; height: 250px; background: #262626;'>
            <p style="padding: 10px; margin: 20px;"><?php include 'footer.php'; ?></p>
          </div>
        </div>
      </div>
		</div>
	</div>
</body>
</html>
