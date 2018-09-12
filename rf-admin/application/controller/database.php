<?php
error_reporting(0);

date_default_timezone_set('Asia/Jakarta');

$title_page = "BLOG";

$host 	= 'localhost'; 
$user 	= 'root';
$pass	= '';
$db 	= 'blog';
 
// melakukan koneksi ke database
$mysqli = new mysqli($host,$user,$pass,$db);
 
// cek koneksi yang kita lakukan berhasil atau tidak
if ($mysqli->connect_error) {
   die($mysqli->connect_error);
}
?>
