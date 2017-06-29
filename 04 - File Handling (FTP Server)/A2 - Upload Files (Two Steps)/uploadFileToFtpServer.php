<?php
	
	//01-Attempt FTP Server Connection
	require "ftpServerConnect.php";
	echo "Connected To Server<br>";
	
	//Attempt to download file
	$local_dir="tmpUploads/Ryan Lochte.mp4";
	$server_target_dir="Ryan Lochte.mp4";
	$upload_attempt=ftp_put($server_connection, $server_target_dir, $local_dir, FTP_BINARY);
	
	if(!$upload_attempt){
		echo "Upload Error??????????<br>";
	}
	
	//Dont Forget to close connection
	ftp_close($server_connection);
	echo "Connection Closed<br>";

?>




