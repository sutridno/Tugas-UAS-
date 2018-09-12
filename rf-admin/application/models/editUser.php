<?php

include '../controller/database.php';

if (isset($_POST['edit_user'])) {					

	$id 					= $mysqli->real_escape_string($_POST['edit_user']);
	$username			    = $mysqli->real_escape_string($_POST['username']);
	$password				= $mysqli->real_escape_string(password_hash($_POST['password'],PASSWORD_DEFAULT));
	$nama_lengkap			= $mysqli->real_escape_string($_POST['nama_lengkap']);
	$email 				 	= $mysqli->real_escape_string($_POST['email']);

	
	$q_edit_user = $mysqli->query("UPDATE tbl_user SET username='$username', password='$password', nama_lengkap='$nama_lengkap', email='$email' WHERE id_user='$id'");

	if ($q_edit_user) {
		header('location:../../rf-admin.php?view=edit-user&id_user='.$id.'=&alert=sukses');
	} else {
		header('location:../../rf-admin.php?view=edit-user&id_user='.$id.'=&alert=gagal');
	}

} else {
	header('location:../../index.php');
}