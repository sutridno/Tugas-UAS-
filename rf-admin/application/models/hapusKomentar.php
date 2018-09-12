<?php

include '../controller/database.php';

session_start();
$session_id_user  = $_SESSION['id_user'];

if (!isset($session_id_user) == NULL ) {

	if (isset($_GET['id_komentar']) != NULL) {

		$id_komentar = $mysqli->real_escape_string($_GET['id_komentar']);

		$q_delete		= $mysqli->query("DELETE FROM tbl_komentar WHERE id = '$id_komentar'");

		if ($q_delete === TRUE) {
			header('location:../../rf-admin.php?view=data-komentar&alert=sukses');
		} else {
			header('location:../../rf-admin.php?view=data-artikel&alert=gagal');
		}

	} else {

		//ANTI INJECT

	}

} else {
//ANTI SESSION
}