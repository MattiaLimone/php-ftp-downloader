<?php
//FTP Username
$ftp_user_name = "username";
//FTP Password
$ftp_user_pass = "password";
//FTP Server
$ftp_server = "ftp.example.com";
//Path to work on
$path = "path";
//FTP stream on success or FALSE on error
$conn_id = ftp_connect($ftp_server) or die("Couldn't connect to $ftp_server"); 
//Login to FTP Server
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
	// Now Login 
	if (!$login_result)
		echo "Could not Connect";
?>