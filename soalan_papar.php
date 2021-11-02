<?php
require 'sambung.php';
require 'keselamatan.php';
require 'css.php'
?>
<?php
$topik_pilihan=$_SESSION['pilih_topik'];
$jenis=$_SESSION['jenis_soalan'];

$dataTopik=mysqli_query($hubung,"SELECT * FROM topik WHERE idtopik=$topik_pilihan");
$getTopik=mysqli_fetch_array($dataTopik);

//JUMLAH SOALAN
$query = "SELECT * FROM soalan WHERE idtopik=$topik_pilihan"; //AND jenis = $jenis
$results = mysqli_query($hubung,$query);
$total=mysqli_num_rows($results);
//NOM SOALAN
$number = (int) $_GET['n'];
// SOALAN
$query = "SELECT * FROM soalan WHERE nom_soalan = $number AND idtopik=$topik_pilihan "; //AND jenis = $jenis
//JAWAPAN
$result = mysqli_query($hubung,$query);
$question = mysqli_fetch_assoc($result);
// PILIHAN
$query = "SELECT * FROM pilihan WHERE nom_soalan = $number
AND idsoalan='$question[idsoalan]'";
//DAPAT JAWAPAN
$choices = mysqli_query($hubung,$query);
?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 <style>

.button {
   font-family: poppins;
   background-color: #5A5954;
   color: white;
   padding: 5px 13px;
   font-size: 12px;
   border: none;
   border-radius: 25px;
   cursor: pointer;
   transition: 0.5s;
   float: center;
 }

 .button:hover {
   background-color: #252522;
 }

 .print-area {
  margin: auto;
  height: -220px;
  width: 100%;
  padding: 10px;
  border: 0px;
 }
 * {
 	margin: 0;
 	padding: 0;
 }

 body {
 	text-align: center;
 }
 .wrapper {
 	width: 1170px;
 	margin: 0 auto;
 }
 header {
 	height: 100px;
 	background: #262626;
 	width: 100%;
 	z-index: 10;
 	position: fixed;
 }
 .logo {
 	width: 30%;
 	float: left;
 	line-height: 100px;
 }
 .logo a {
 	text-decoration: none;
 	font-size: 30px;
 	font-family: poppins;
 	color: #fff;
 	letter-spacing: 5px;
 }
 nav {
 	float: right;
 	line-height: 100px;
 }
 nav a {
 	text-decoration: none;
 	font-family: poppins;
 	letter-spacing: 4px;
 	font-size: 20px;
 	margin: 0 10px;
 	color: #fff;
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
 <head>
 	<style>

.outter-table {
  border: 25px solid #DCD9CD;
  background-color: #DCD9CD;
  border-radius: 25px;
  width: fixed;
  align: center;
}

.inner-table {
  background-color: #F1F0EA;
  border: 25px solid #F1F0EA;
  border-radius: 25px;
}

.title {
  font-family: poppins;
  font-size: 42px;
}

.title1 {
  font-family: 'Action Man', sans-serif;
  font-size: 42px;
}

.font {
  font-family: poppins;
  font-size: 18px;
}

.font1 {
  font-family: 'Action Man', sans-serif;
  font-size: 18px;
}

.hidden {
  visibility: hidden;
}

</style>
<head>
<?php include "pelengkap.php"; ?>
 <!-- HEADER: LOCK FROM USER COPY TEXT -->
 <body>
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
   <body style="background-color: #ebebeb">
     <div style="width: 100%; height: 250px;"></div>
     <div class="print-area" style="min-height: 400px;">
       <center>
         <table class="outter-table" width="60%" border="0">
           <tr><td><center><p class="title">


             Sila baca soalan dengan teliti             <br><p class="title" style="font-size: 22px;">
             Soalan 1 dari 2             <br>
             </p>

           </p></center></td></tr>

             <tr><td class="hidden">Hidden</td></tr>
           <tr><td>
             <table class="inner-table" width="100%">
               <tr class="font">
                 <td>
                   adakah benar 1 tambah 1 adalah tiga                   <tr>
                   <td>
                                      </p>
                   <form method="post" action="soalan_semak.php">
                                      <ul>
                                      <li><input name="choice" type="radio"
                   value="30" required />
                   Betul                   </li>

                                      <li><input name="choice" type="radio"
                   value="31" required />
                   Salah                   </li>

                                      </ul>
                                      <input type="hidden" name="number" value="1" />
                   <input type="hidden" name="jenis_soalan" value="1" />
                   <input type="hidden" name="idsoalan" value="14"
                   </td>
                   </tr>

                 </td>
               </tr>
             </table>
           </td></tr>
           <tr><td class="hidden">Hidden</td></tr>
           <tr>
             <td colspan="4" valign="middle" align="right"><b>
               <button class="button" style="float: left; padding: 10px 30px;" type="submit" value="HANTAR">HANTAR</button>
             </tr>
         </table>
         </form>
</center><br><br>
   </div>
 </div>
</body>
<footer>

  <div style='position: absolute; bottom: fixed; left: 0px; width: 100%; height: 150px; background: #262626;'>
    <p style="padding: 10px; margin: 20px;"><?php include 'footer.php'; ?></p>
  </div>
</footer>

 </html>
