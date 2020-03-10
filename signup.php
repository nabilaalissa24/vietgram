<?php
	include "koneksi.php";
	$query = mysqli_query($conn, "INSERT INTO account(email,username,fullname,password) 
		VALUES (
		'".$_POST["email"]."',
		'".$_POST["username"]."',
		'".$_POST["fullname"]."',
		'".$_POST["password"]."')");

	if ($query) echo "Data berhasil diinput";
	else echo "Data gagal diinput";
	echo "<br /><br /><a href='index.html'>Kembali</a>";
	/*if ($query) ('Location: index.html');
	else ('Location: signup.html');*/
?>
