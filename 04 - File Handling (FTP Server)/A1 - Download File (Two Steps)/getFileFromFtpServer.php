<?php
	
	//01-Attempt FTP Server Connection
	require "ftpServerConnect.php";
	
	//Attempt to download file
	$file_server_dir="Ryan Lochte.mp4";
	$file_local_target_dir="tmpDownloads/Ryan Lochte.mp4";
	$download_attempt=@ftp_get($server_connection, $file_local_target_dir, $file_server_dir, FTP_BINARY);
	
	if(!$download_attempt){
		echo "Download Error??????????<br>";
	}
	
	//Dont Forget to close connection
	ftp_close($server_connection);

?>




