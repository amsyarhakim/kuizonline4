<?php
require 'sambung.php';
require 'keselamatan.php';
$idpengguna = $_SESSION['idpengguna'];
?>

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
						<div>
							<center><p style="font-family: poppins; font-size: 60px;">REKOD MARKAH YANG DICAPAI</p></center>
							<main><br>
								<center>
<table width="80%" border="0.1" align="center" style="background-color: #DCD9CD; border: 25px solid #DCD9CD; border-radius: 25px; width: fixed; align-content: center;">
<tr>
<td width="2%"><b style="font-family: poppins; font-size: 15px;">Bil.</b></td>
<td width="45%"><b style="font-family: poppins; font-size: 15px;">Topik</b></td>
<td width="8%"><b style="font-family: poppins; font-size: 15px;">Jenis Soalan</b></td>
<td width="12%"><b style="font-family: poppins; font-size: 15px;">Tarikh/Masa</b></td>
<td width="4%"><b style="font-family: poppins; font-size: 15px;">Skor</b></td>
<td width="4%"><b style="font-family: poppins; font-size: 15px;">Markah</b></td>
</tr>
<?php
$no=1;
$data1 = mysqli_query($hubung,"SELECT * FROM perekodan WHERE idpengguna = '$idpengguna' ORDER BY catatan_masa DESC LIMIT 0,10");
while ($info1=mysqli_fetch_array($data1))
{
    $dataTopik = mysqli_query($hubung,"SELECT * FROM topik WHERE idtopik='$info1[idtopik]'");
    $getTopik = mysqli_fetch_array($dataTopik);
    $dataSoalan = mysqli_query($hubung,"SELECT jenis,COUNT(idtopik) as 'bil' FROM soalan WHERE idtopik='$info1[idtopik]' group by jenis");
    $infoSoalan = mysqli_fetch_array($dataSoalan);
    $jenisSoalan = $info1['jenis'];
    $bilSoalan = $infoSoalan['bil'];
    $markah_Topik = $getTopik['markah'];
    ?>
    <tr style="font-family: poppins; font-size: 15px;">
    <td><?php echo $no; ?></td>
    <td><?php echo $getTopik['topik']; ?></td>
    <td style="font-family: poppins; font-size: 15px;"><?php
    if($jenisSoalan==1){
        echo "MCQ/TF";
    }else{
        echo "FIB";
    }
    ?></td>
    <td style="font-family: poppins; font-size: 15px;" ><?php echo date('d-m-y:i A',strtotime($info1['catatan_masa'])); ?></td>
    <td style="font-family: poppins; font-size: 15px;"><?php echo $info1['skor']; ?></td>
    <td style="font-family: poppins; font-size: 15px;"><?php echo number_format(($info1['skor']/$bilSoalan)*$markah_Topik); ?>%</td>
    </tr>
    <?php $no++; } ?>
    </table>
	</center>
    </main>
    <center>
    <font style='font-size:14px'>
    * Rekod yang dipaparkan adalah 10 yang terkini *
    <br />Jumlah Rekod:<?php echo $no-1; ?></font></center>
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
