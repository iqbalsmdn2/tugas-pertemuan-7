<?php
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal'] . '-' . $_POST['bulan'] . '-' . $_POST['tahun'];
$alamat_rumah = $_POST['alamat_rumah'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$asal_sekolah = $_POST['asal_sekolah'];
$nilai_uan = $_POST['nilai_uan'];

echo "Terima kasih $nama sudah mengisi form pendaftaran.<br>";
echo "Nama Lengkap: $nama<br>";
echo "Tempat Lahir: $tempat_lahir<br>";
echo "Tanggal Lahir: $tanggal_lahir<br>";
echo "Alamat Rumah: $alamat_rumah<br>";
echo "Jenis Kelamin: $jenis_kelamin<br>";
echo "Asal Sekolah: $asal_sekolah<br>";
echo "Nilai UAN: $nilai_uan<br>";
?>
http://contoh.com/proses.php?nama=Joko&alamat=Jakarta
