<?php

include '../controller/database.php';

session_start();
$session_id_user  = $_SESSION['id_user'];

if (!isset($session_id_user) == NULL ) {

	if (isset($_GET['id_artikel']) != NULL) {

		$id_artikel = $mysqli->real_escape_string($_GET['id_artikel']);

		$q_delete2		= $mysqli->query("DELETE FROM tbl_komentar WHERE id_artikel = '$id_artikel'");

		$q_delete		= $mysqli->query("DELETE FROM tbl_artikel WHERE id_artikel = '$id_artikel'");

		if ($q_delete === TRUE) {
			header('location:../../rf-admin.php?view=data-artikel&alert=sukses');
		} else {
			header('location:../../rf-admin.php?view=data-artikel&alert=gagal');
		}

	} else {

		//ANTI INJECT

	}

} else {
//ANTI SESSION
}