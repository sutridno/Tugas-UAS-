<?php

include '../controller/database.php';

if (isset($_POST['login'])) {
	
	$username      =	$mysqli->real_escape_string($_POST['username']);
	$password      =	$mysqli->real_escape_string($_POST['password']);
	
	// echo $username_admin.'- dan -'.$password_admin_encrypt.'- dan -'.$password_admin_asli;

  	$login_akses     = $mysqli->query("SELECT * FROM tbl_user WHERE username = '$username'");

  	$validasi_login  = $login_akses->fetch_array();

  	if ($validasi_login['username'] == $username AND password_verify($password , $validasi_login['password'])) {

    	session_start();

    	$_SESSION['id_user']       = $validasi_login['id_user'];

		header('location:../../rf-admin.php?view=data-artikel');

  	} else {

      header('location:../../login.php?alert=invalid');

  	}
    
}