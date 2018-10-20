<form method="POST">

	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" length="35" placeholder="Nama"></td>
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
		<td><input type="submit" name="kirim" value="EDIT"></td>
		</tr>

	</table>
</form>

<?php 
	include 'koneksi.php';
	$nim 	= $_GET['nim'];
	$query	= mysqli_query($conn, "SELECT * FROM maba WHERE nim = $nim");
	$row2 = mysqli_fetch_array($query);


	foreach ($query as $row){
		echo "<tr align = 'center'>
		<td>".$row2['nim']."</td>
		<td>".$row2['nama']."</td>
		<td>".$row2['jk']."</td>
		<td>".$row2['prodi']."</td>
		<td>".$row2['fakultas']."</td>
		<td>".$row2['asal']."</td>
		<td>".$row2['motohidup']."</td>
		</td>";
	} 


	if (isset($_POST['kirim'])) {
		include 'koneksi.php' ;

		$nama 		= $_POST['nama'];
		$nim 		= $_POST['nama'];
		$jk 	 	= $_POST['jk'];
		$prodi		= $_POST['prodi'];
		$fakultas 	= $_POST['fakultas'];
		$asal		= $_POST['asal'];
		$motohidup	= $_POST['motohidup'];

		$qry2 	=mysqli_query($conn, "UPDATE maba SET nama='$nama',  WHERE nim= $_GET[nim]");

		echo "Pengeditan Anda Berhasil. <a href = 'lihat.php'>Klik disini </a> untuk melihat update";
	}



 ?>