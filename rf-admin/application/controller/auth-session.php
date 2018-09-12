<?php

include 'application/controller/database.php';
session_start();
$session_id_user  = $_SESSION['id_user'];
if (isset($session_id_user) != NULL ) {
    if (empty($session_id_user)){
        header('location:logout.php');
    } else {
        $profil_user    = $mysqli->query("SELECT * FROM tbl_user WHERE id_user = '$session_id_user'");
        $result_profil  = $profil_user->fetch_array();
    }
} else {
    header('location:logout.php');
}