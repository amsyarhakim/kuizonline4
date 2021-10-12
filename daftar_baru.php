<?php require 'sambung.php'; ?>
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
					<?php include 'menu1.php'; ?>
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
					<div class="main" id="section1" style="position: absolute; left: 0px; width: 100%; height: 1300px; border: 0px;"><br><br>
						<center>
							<table width='70%' border="0" align="center">
								<tr>
									<td width="60%">
										<p>
											<center>
											<a style='text-decoration: none; font-size: 45px; font-family: poppins; color: black;' href="#">DAFTAR MASUK PENGGUNA</a>
											<?php include 'daftar_baru_style.php'; ?>
											</center>
										</p>
									</td>
								</tr>
							</table>
						</center><br><br>
						<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					</div>
				</div>
				<div style='position: absolute; bottom: -250px; left: 0px; width: 100%; height: 250px; background: #262626;'>
					<p style="padding: 10px; margin: 20px;"><?php include 'footer.php'; ?></p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
