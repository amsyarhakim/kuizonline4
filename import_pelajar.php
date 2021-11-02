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
  font-size: 16px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: 0.5s;
  float: center;
}

input[type="file"] {
  font-family: poppins;
  background-color: #5A5954;
  color: white;
  padding: 5px 13px;
  font-size: 16px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: 0.5s;
  float: center;
}

.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
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
<!-- HEADER: LOCK FROM USER COPY TEXT -->
<body onmousedown="return false" onselectstart="return false">
  <div class="box-area">
    <header>
      <div class="wrapper">
        <div class="logo">
          <a href="#"><?php echo $subjek; ?></a>
				</div>
				<nav>
          <!-- NAVIGATION: lOGOUT -->
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
				<div>
          <br>
          <br>
          <div style="position: absolute; left: 0px; align-content: center; width: 100%; height: 1300px; border: 0px;">
            <?php include 'menu.php'; ?>
            <main>
              <center>
                <table class="outter-table" width="70%" border="0" align="center">
                  <tr><td><center><p class="title">IMPORT NAMA PELAJAR DARI FAIL CSV</p></center></td></tr>
                  <tr>
                    <td>
                      <!-- BAHAGIAN 1: UPLOAD FILE -->
                      <table class="inner-table" width="100%" align="center" border="0" >
                        <tr>
                          <td>
                            <label class='font'>Kemudahan untuk daftar nama pelajar secara berkelompok</label><br>
                            <label class='font'>Pilih lokasi fail CSV/Excel:</label>
                            <!-- PANGGIL FAIL CSV UNTUK LAKSANAKAN ARAHAN IMPORT -->
                            <form action="import_csv.php" method="post" name="upload_excel" enctype="multipart/form-data" >
                              <input type="file" name="file" id="file"><br>
                              <button class="button" type="submit" id="submit" name="import" >Upload</button><br>
                            </form>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </center><br>
                <tr>
                  <td>
                    <!-- ARAHAN -->
                    <a class='font'><font class="hidden"> - - - - - - - </font> *Cipta fail dalam Ms Excell dan save as csv mengikut aturan lajur seperti di bawah:</a><br><br>
                  </td>
                </tr>
                <tr>
                  <td>
                    <!-- BAHAGIAN 2: CONTOH JADUAL -->
                    <table class="inner-table" width="100%" align="center" border="0">
                      <tr class='font'>
                        <td width="5%"><b>Nombor IC</b></td>
                        <td width="10%"><b>Password</b></td>
                        <td width="20%"><b>Nama Pelajar</b></td>
                        <td width="5%"><b>Jantina</b></td>
                      </tr>
                      <!-- BAHAGIAN 2: CONTOH BAGI PELAJAR PEREMPUAN -->
                      <tr class='font'>
                        <td>111213031234</td>
                        <td>1234</td>
                        <td>ALEEYA MAISARAH BINTI JAMIL</td>
                        <td>PEREMPUAN</td>
                      </tr>
                      <!-- BAHAGIAN 2: CONTOH BAGI PELAJAR lELAKI -->
                      <tr class='font'>
                        <td>111213031234</td>
                        <td>2424</td>
                        <td>MUHAMMAD ISYRAF BIN MAEL</td>
                        <td>LELAKI</td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <!-- HIDDEN: MEMBERI RUANG SUPAYA NAMPAK KEMAS -->
                <tr class="hidden">
                  <td>Hidden</td>
                </tr>
              </table>
            </center>
          </main>
        </div>
      </div>
       <!-- FOOTER: HAK CIPTA -->
       <div style='position: absolute; bottom: -250px; left: 0px; width: 100%; height: 250px; background: #262626;'>
         <p style="padding: 10px; margin: 20px;"><?php include 'footer.php'; ?></p>
       </div>
     </div>
   </div>
 </div>
</body>
</html>
