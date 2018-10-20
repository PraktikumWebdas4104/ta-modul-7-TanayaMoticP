<h1><center>Input Data Mahasiswa Baru</center></h1>
<form method="POST">
<center>
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" length="35" placeholder="Nama"></td>
		</tr>

		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="number" name="nim" length="10" placeholder="Nim"></td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki<br>
			<input type="radio" name="jk" value="Perempuan">Perempuan<br></td>
		</tr>

		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td><select name ="prodi">
			<option value="1">Pilih Program Studi</option>
				<option value="Manajemen Infomatika">Manajemen Informatika</option>
				<option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
				<option value="Desain Interior">Desain interior</option>
			</select>
			</td>
		</tr>

		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
			<option value="1">Pilih Fakultas</option>
				<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
				<option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
				<option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option>
			</select>
			</td>
		</tr>

		<tr>
			<td>Asal</td>
			<td>:</td>
			<td><textarea name="asal" placeholder="Asal"></textarea></td>
		</tr>

		<tr>
			<td>Moto Hidup</td>
			<td>:</td>
			<td><textarea name="motohidup" placeholder="Moto Hidup"></textarea>
			</td>
		</tr>

		<tr>
		<td><input type="submit" name="kirim" value="kirim"></td>
		</tr>
	</center>
	</table>
</form>

<?php 
error_reporting(0);
if (isset($_POST['kirim'])) {
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "mahasiswa";
	$conn = mysqli_connect($host,$user,$pass,$db);

	$nama    	= $_POST['nama'];
	$nim     	= $_POST['nim'];
	$jk 	 	= $_POST['jk'];
	$prodi		= $_POST['prodi'];
	$fakultas 	= $_POST['fakultas'];
	$asal		= $_POST['asal'];
	$motohidup	= $_POST['motohidup'];
	

	$sql = $conn->query("INSERT INTO maba
						 VALUES ('$nama','$nim','$jk','$prodi','$fakultas','$asal','$motohidup')");

	echo "Berhasil Registrasi"."<br>";
	echo "<a href = 'lihat.php'>Klik</a> untuk lanjut";
}
 ?>