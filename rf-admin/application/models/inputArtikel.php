<?php

include '../controller/database.php';

session_start();
$session_id_user  = $_SESSION['id_user'];

if (!isset($session_id_user) == NULL ) {
	
	if (isset($_POST['tambah_artikel'])) {

		$judul_artikel			= $mysqli->real_escape_string($_POST['judul_artikel']);
		$isi_artikel			= $mysqli->real_escape_string($_POST['isi_artikel']);
		$tanggal_upload			= date('Y-m-d');


		$q_input_artikel = $mysqli->query("INSERT INTO tbl_artikel (id_artikel, title, content, tanggal) VALUES (NULL, '$judul_artikel', '$isi_artikel', '$tanggal_upload')");

		header('location:../../rf-admin.php?view=input-artikel&alert=sukses');

	} else {

		//GAGAL TOMBOL
		echo "FORBIDDEN";

	}

} else {
	header('location:../../index.php');
}