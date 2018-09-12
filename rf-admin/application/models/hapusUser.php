<?php

include '../controller/database.php';


if (isset($_GET['id_user']) != NULL) {

	$id_user 		= $mysqli->real_escape_string($_GET['id_user']);

	$q_result		= $mysqli->query("DELETE FROM tbl_user WHERE id_user = '$id_user'");

	if ($q_result) {
		header('location:../../rf-admin.php?view=data-user&alert=sukses');
	} else {
		header('location:../../rf-admin.php?view=data-user&alert=gagal');
	}

} else {

	//ANTI INJECT
	header('location:../../rf-admin.php?view=data-user&id_user=&alert=hapus');

}

