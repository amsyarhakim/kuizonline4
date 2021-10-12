<?php
if(isset($_POST['idpengguna'])) {
    //Pembolehubah untuk memegang data yang dihantar
    $idpengguna = $_POST['idpengguna'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $jantina = $_POST['jantina'];
    $daftar = "INSERT INTO pengguna(idpengguna,password,nama,jantina,aras)
    VALUES ('$idpengguna','$password','$nama','$jantina','PELAJAR')";
    $hasil = mysqli_query($hubung, $daftar);
    if ($hasil) {
        echo "<script>alert('Pendaftaran berjaya');
        window.location='login.php'</script>";
    }else{
        echo "<script>alert('Pendaftaran gagal');
        window.location='daftar_baru.php'</script>";
    }
}
?>

<style>
html {
  scroll-behavior: smooth;
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
input[type=password ], select {
  font-family: poppins;
  width: 80%;
  padding: 12px 20px;
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
}

div login{
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
input[type=submit]:hover {
  background-color: #252522;
}

</style>

<div class="login" style="background-color: #DCD9CD; border: 25px solid #DCD9CD; border-radius: 25px; padding: 20px;">
  <form method="post">

    <label style="font-family: poppins;" for="fname">KAD PENGENALAN:<br></label>
    <input onblur="checklenght(this)" type="text" name="idpengguna"
    placeholder="Tanpa tanda -" maxlength='12' size="25"
    onkeypress='return event.charCode >= 48 &&
    event.charCode <= 57' required autofocus />

    <script>
    function checkLength(el) {
        if(el.value.length != 12){
            alert("Nombor KP mesti 12 digit")
        }
        }
    </script>

    <br><label style="font-family: poppins;" for="lname">KATALALUAN:<br></label>
    <input type="password" name="password" id="password" placeholder="4 digit sahaja"
    maxlength='4' onkeypress='return event.charCode >= 48 &&
    event.charCode <= 57'required><br>

    <label style="font-family: poppins;" for="fname">NAMA PENUH:<br></label>
    <input  type="text" size="50" style='text-transform:uppercase' name="nama" placeholder="Nama Penuh Anda"
    required ><br>

    <label style="font-family: poppins;">JANTINA:</label><br>
    <select style="border-radius: 25px;" name="jantina">
    <option value="">---Pilih---</option>
    <option value="LELAKI">LELAKI</option>
    <option value="PEREMPUAN">PEREMPUAN</option>

    <input type="submit" value="Daftar Sekarang"><br>
    <font style="font-family: poppins;">*Sudah mempunyai akaun,
    <a href="login.php">daftar masuk</a></font>

    </select>
  </form>
</div>
