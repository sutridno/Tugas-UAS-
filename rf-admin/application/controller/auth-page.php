<?php

$access_page = array("dashboard","data-artikel","input-artikel","edit-artikel","data-user","input-user","edit-user","profil-user","data-komentar");

if (isset($_GET['view'])) {
	if (!in_array($_GET['view'], $access_page)) {
		echo "<h1>FORBIDDEN</h1>";
		} else {
			include "application/view/" .$_GET['view']. ".php";
	}
} else {
	include "application/view/dashboard.php";
}