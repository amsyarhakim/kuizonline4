<?php require 'sambung.php'; ?>
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
				<div><br><br>
					<div style="position: absolute; left: 0px; width: 100%; height: 1300px; border: 0px;"><br><br>
						<center>
							<table width='70%' border="0" align="center">
								<tr>
									<td width="10%">
										<img style="width: 250px; height: 250px;" src="http://wvtlab.com/wp-content/uploads/2021/02/free-covid-testing-icon.png">
									</td>
									<td width="60%">
										<p>
											<center>
											<a style='text-decoration: none; font-size: 45px; font-family: poppins; color: black;' href="#">SOALAN TERKINI:</a>
											<?php include 'soalan_terkini.php'; ?>
											</center>
										</p>
									</td>
								</tr>
							</table>
						</center><br><br><br>
						<div style="width: 100%; height: 400px; background-color: #DCD9CD; border: 0px;">
							<center>
								<table width='70%' border="0" align="center" style="padding: 50px; margin: 20px;">
									<tr>
										<td width="60%">
											<p>
												<center>
													<a style='text-decoration: none; font-size: 50px; font-family: poppins; color: black;' href="#">SEKOLAH:</a>
													<p style='font-size: 25px; font-family: poppins; color: black; background-color: #DCD9CD;'>
													<?php echo $nama_sekolah; ?></p>
												</center>
											</p>
										</td>
										<td width="60%">
											<p>
												<table width='70%' border="0" align="center">
													<tr>
														<td width="10%">
															<img style="width: 250px; height: 250px;" src="<?php echo $lencana; ?>">
														</td>
													</tr>
												</table>
											</center>
											</p>
									</tr>
								</table>
							</center>
						</div>
						<div><br><br><br><br>
							<center>
								<table width='70%' border="0" align="center">
									<tr>
										<td width="10%">
											<img style="width: 250px; height: 250px;" src="https://ioadvisory.com/wp-content/uploads/2019/03/mature-professionals.png">
										</td>
										<td width="60%">
											<p>
												<center>
												<a style='text-decoration: none; font-size: 40px; font-family: poppins; color: black;' href="#">USAHA TANGGA KEJAYAAN</a>
												<p style='font-size: 25px; font-family: poppins; color: black;background-color: #DCD9CD; border: 25px solid #DCD9CD; border-radius: 25px;'>
													Maksud peribahasa usaha tangga kejayaan ialah seseorang yang inginkan kejayaan perlulah berusaha gigih sehingga mencapai kejayaan yang diinginkan.</p>
												</center>
											</p>
										</td>
									</tr>
								</table>
							</center>
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
