<?php

include '../controller/database.php';

if (isset($_POST['tambah_user'])) {			

	$id_user 		= $mysqli->real_escape_string($_POST['tambah_user']);

	$username		= $mysqli->real_escape_string($_POST['username']);
	$password		= $mysqli->real_escape_string(password_hash($_POST['password'],PASSWORD_DEFAULT));
	$nama_lengkap	= $mysqli->real_escape_string($_POST['nama_lengkap']);
	$email 			= $mysqli->real_escape_string($_POST['email']);

	
	$q_input_user 	= $mysqli->query("INSERT INTO tbl_user VALUES ('','$username', '$password', '$nama_lengkap', '$email')");

	if ($q_input_user) {
		header('location:../../rf-admin.php?view=data-user&alert=sukses-add');
	} else {
		header('location:../../rf-admin.php?view=data-user&alert=gagal-add');
	}
					
} else {
	header('location:../../index.php');
}