<?php
	$hostname  = "localhost";
	$username = "root";
	$pass     = "";
	$db       = "datamhs";
	$con     = new mysqli($hostname, $username, $pass, $db);

	if($con==false){
		die("koneksi gagal". $con->connect_error);
	}
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		print_r($_POST['nim']);
		$jeniskel=$_POST['jeniskelamin'];
		print_r($_POST['jeniskelamin']);
		$prod=$_POST['prodi'];
		$fakultas=$_POST['fakultas'];
		$asal=$_POST['asal'];
		$moto=$_POST['motohidup'];
	$sql="INSERT INTO maba(nama,nim,jeniskelamin,prodi,fakultas,asal,motohidup) 
	VALUES ('$nama','$nim','$jeniskel','$prod','$fakultas','$asal','$moto')";

	//echo "$sql";
	if(mysqli_query($con,$sql)){
		echo "Database done";
	}else{
		echo "eror";;
	}
?>