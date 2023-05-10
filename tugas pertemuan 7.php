<form action="submit.php" method="POST">
  <label for="nama">Nama Lengkap:</label><br>
  <input type="text" id="nama" name="nama"><br>

  <label for="tempat_lahir">Tempat Lahir:</label><br>
  <input type="text" id="tempat_lahir" name="tempat_lahir"><br>

  <label>Tanggal Lahir:</label><br>
  <select name="tanggal">
    <?php for ($i=1; $i<=31; $i++) {
      echo "<option value=\"$i\">$i</option>";
    } ?>
  </select>
  <select name="bulan">
    <?php for ($i=1; $i<=12; $i++) {
      echo "<option value=\"$i\">$i</option>";
    } ?>
  </select>
  <select name="tahun">
    <?php for ($i=1970; $i<=2004; $i++) {
      echo "<option value=\"$i\">$i</option>";
    } ?>
  </select><br>

  <label for="alamat_rumah">Alamat Rumah:</label><br>
  <textarea id="alamat_rumah" name="alamat_rumah"></textarea><br>

  <label>Jenis Kelamin:</label><br>
  <label for="pria"><input type="radio" id="pria" name="jenis_kelamin" value="Pria">Pria</label><br>
  <label for="wanita"><input type="radio" id="wanita" name="jenis_kelamin" value="Wanita">Wanita</label><br>

  <label for="asal_sekolah">Asal Sekolah:</label><br>
  <input type="text" id="asal_sekolah" name="asal_sekolah"><br>

  <label for="nilai_uan">Nilai UAN:</label><br>
  <input type="text" id="nilai_uan" name="nilai_uan"><br>

  <input type="submit" value="Submit">
  <input type="reset" value="Reset">
</form>