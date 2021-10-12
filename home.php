<center>
  <table class="outter-table" style="border: 10px solid #DCD9CD;" width='70%' align="center">
    <tr>
      <td width="10%">
        <img style="width: 250px; height: 250px;" src="<?php echo $lencana; ?>">
      </td>
      <td width="10%">
      </td>
      <td width="60%">
        <p class="font">
          <center style="text-decoration: none; color: black; font-family: poppins; font-size: 50px;"><?php echo $pengguna; ?></center>
          <?php
          //Paparkan maklumat lengkap pengguna login
          $dataA=mysqli_query($hubung,"SELECT * FROM pengguna WHERE idpengguna='$nokp'");
          $infoA=mysqli_fetch_array($dataA);
          ?>
          <p class="inner-table" style="border: 10px solid #F1F0EA;">
            <font class="font" style="font-size: 38px;">SELAMAT DATANG:</font><br><br>
            Nama Anda: <?php echo $infoA['nama']; ?><br>
            Nombor KP: <?php echo $infoA['idpengguna']; ?><br>
          </p>
        </p>
      </td>
    </tr>
  </table>
</center>
