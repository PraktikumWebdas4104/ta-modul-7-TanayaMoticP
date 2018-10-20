<h1><center> Lihat Data Mahasiswa </center></h1>

<?php 
include 'koneksi.php';
	echo "<form method = 'POST' align='center'>
					<table><tr> Cari (NIM):<input type='text' name='search' placeholder='Masukkan NIM'>
						<input type='submit' name='cari'>
					</tr>
				   </form></table><br><br>";

		$que2 = "SELECT * from maba";
		$qry2 = mysqli_query($conn,$que2);
		$row2 = mysqli_fetch_array($qry2);

			echo "<center>"; 
			echo "<table border='1'>
					<tr>
						<th>Nama</th>
						<th>Nim</th>
						<th>Jenis Kelamin</th>
						<th>Prodi</th>
						<th>Fakultas</th>
						<th>Asal</th>
						<th>Moti Hidup</th>
					</tr>";

					foreach ($qry2 as $row2) {
					echo"<tr>
						<td>".$row2['nama']."</td>
						<td>".$row2['nim']."</td> 
						<td>".$row2['jk']."</td>
						<td>".$row2['prodi']."</td> 
						<td>".$row2['fakultas']."</td>
						<td>".$row2['asal']."</td>
						<td>".$row2['motohidup']."</td>    
					</tr>";
				}
		
			if (isset($_POST['cari'])){
				include 'koneksi.php';
				$search=$_POST['search'];

				$qry = mysqli_query($conn, "SELECT nama, nim FROM maba WHERE nim='$search'");
				$row = mysqli_fetch_array($qry);
				echo "<table border = 1>
						<tr align ='center'>
								<th>Nama</th>
								<th>Nim</th>
								<th>Jenis Kelamin</th>
								<th>Program Studi</th>
								<th>Fakultas</th>
								<th>Asal</th>
								<th>Moto Hidup</th>
								<th>ACTION DELETE</th>
								<th>ACTION EDIT</th>
								</tr>";

					foreach ($qry as $row) {
					echo"<tr align ='center'>
								<td>".$row2['nama']."</td>
								<td>".$row2['nim']."</td>
								<td>".$row2['jk']."</td>
								<td>".$row2['prodi']."</td>
								<td>".$row2['fakultas']."</td>
								<td>".$row2['asal']."</td>
								<td>".$row2['motohidup']."</td>
								<td><a href = 'prosesdelete.php?nim=$row2[nim]'>Delete</a></td>
								<td><a href = 'edit.php?nim=$row2[nim]'>Edit</a></td>
						</tr>
						</table>";
					}
			}

 ?>