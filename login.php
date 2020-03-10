<?php
	session_start();
	include 'koneksi.php';
	$username = $_POST['username'];
	$password = $_POST['password']; 

	$data = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");

	$cek = mysqli_num_rows($data);
	 
	if($cek > 0){
		$data_profil = mysqli_query($koneksi,"select * from profile where username='$username'");
		$row_akun = mysqli_fetch_array($data);
		$_SESSION['id'] = $row['id'];
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		$_SESSION["name"] = $row_akun["name"];
		$_SESSION["website"] = $row_akun["website"];
		$_SESSION["bio"] = $row_akun["bio"];
		$_SESSION["email"] = $row_akun["email"];
		$_SESSION["no_telp"] = $row_akun["no_telp"];
		$_SESSION["gender"] = $row_akun["gender"];
		header("location:feed.php");
	}else{
		header("location:index.php");
	}
?>