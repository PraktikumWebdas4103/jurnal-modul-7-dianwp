<!DOCTYPE html>

<html>

<head>

	<title>	Input Mahasiswa Baru</title>

</head>

<body>

<form action="proses.php" method="POST">

	<center>

		<h2>INPUT DATA MAHASISWA</h2>

	<table cellpadding="2" border="2">

		<tr>

			<td>Nama</td>

			<td>: <input type="text" name="nama"></td>

		</tr>

		<tr>

			<td>NIM</td>

			<td>: <input type="text" name="nim"></td>

		</tr>

			<td>Jenis Kelamin</td>

			<td>: 	<input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-Laki</input>

					<input type="radio" name="jeniskelamin" value="Perempuan">Perempuan</input>

			</td>
			<tr>

			<td>Program Studi</td>

			<td>: <select name="prodi">

				<option value="Sistem Infromasi">Sistem Informasi</option>

				<option value="Manajemen Bisnis Telekomunikasi">Manajemen Bisnis Telekomunikasi</option>

				<option value="Ilmu Komunikasi"> Ilmu Komunikasi</option>

				<option value="Teknik Elektro">Teknik Elektro</option>

				<option value="Teknik Informatika">Teknik Informatika</option>

				<option value="Teknik Industri">Teknik Industri</option>

				<option value="DKV">DKV</option>

				</select>

			</td>

		</tr>

		<tr>

			<td>Fakultas</td>

			<td>: <select name="fakultas">

				<option value="Ilmu Terapan">Ilmu Terapan</option>

				<option value="Ekonomi dan Bisnis">Ekonomi dan Bisnis</option>

				<option value="Komunikasi dan Bisnis">Komunikasi dan Bisnis</option>

				<option value="Teknik Elektro">Teknik Elektro</option>

				<option value="Informatika">Informatika</option>

				<option value="Rekayasa Industri">Rekayasa Industri</option>

				<option value="Industri Kreatif">Industri Kreatif</option>

				</select>

			</td>

		</tr>

		<tr>

			<td>Asal</td>

			<td>: <input type="text" name="asal"></td>

		</tr>
		<tr>
			<td>Moto Hidup</td>
			<td> : <input type="text" name="motohidup">
		</td>
	</tr>
		<tr>

			<td><input type="submit" name="simpan" value="submit">
				<a href="prosess.php"> Search Data</a>
</td>

		</tr>

	</table>

	</center>

</form>

</body>

</html>

<?php
	if(isset($_POST['submit'])){
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		$jeniskel=$_POST['jeniskelamin'];
		$prod=$_POST['prodi'];
		$fakultas=$_POST['fakultas'];
		$asal=$_POST['asal'];
		$moto=$_POST['motohidup'];

		}
?>