<?php

include '../controller/database.php';

session_start();
$session_id_user  = $_SESSION['id_user'];

if (!isset($session_id_user) == NULL ) {

	if (isset($_POST['edit_artikel'])) {

		$id_artikel 			= $mysqli->real_escape_string($_POST['edit_artikel']);

		$judul_artikel			= $mysqli->real_escape_string($_POST['judul_artikel']);
		$isi_artikel			= $mysqli->real_escape_string($_POST['isi_artikel']);
		$tanggal_upload			= date('Y-m-d');

		$proses_db = $mysqli->query("UPDATE tbl_artikel SET title = '$judul_artikel', content = '$isi_artikel' WHERE id_artikel = '$id_artikel'");

		header('location:../../rf-admin.php?view=edit-artikel&id_artikel='.$id_artikel.'&alert=sukses');


	} else {
		header('location:../../rf-admin.php?view=edit-artikel&id_artikel='.$id_artikel);
	}

} else {
	header('location:../../index.php');
}