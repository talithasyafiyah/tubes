<?php
session_start();

include('../includes/koneksi.php');

if(isset($_POST['submit'])) {
	$username = $_POST['username'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$level = $_POST['level'];
	$usernamecheck = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'"));
	$pesan_error = "";

		if ($usernamecheck > 0) {
			header("location:register.php?pesan=gagal");
		} else {
			$sql = "INSERT INTO user (username,password,nama,email,level) VALUES ('$username','$password','$nama','$email','$level')";
																									
			if($koneksi->query($sql)===TRUE){
				header("Location: selamat.php");
			} else {
				echo "Terjadi kesalahan:".$sql."<br/>".$koneksi->error;
			}
		}
																
	$koneksi->close();				
}

?>