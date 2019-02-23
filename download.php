<?php
	include 'config.php';
	//File Path passed by index.php
	$file_path = $_POST['path'];
	//Get File Size
	$size = ftp_size($conn_id, $file_path);
	//Set file Header
	header("Content-Type: application/octet-stream");
	header("Content-Disposition: attachment; filename=" . basename($file_path));
	header("Content-Length: $size"); 
	//Direct stream output to user
	ftp_get($conn_id, "php://output", $file_path, FTP_BINARY);
?>