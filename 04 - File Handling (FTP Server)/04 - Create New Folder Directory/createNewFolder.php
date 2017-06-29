<?php
	
	//01-Attempt FTP Server Connection
	require "ftpServerConnect.php";
	echo "Connected To Server<br>";
	
	//Attempt to create new folder directory
	$new_folder_dir="profile_pics";
	$creation_attempt=@ftp_mkdir($server_connection, $new_folder_dir);
	
	if(!$creation_attempt){
		echo "Couldn't create such folder directory";
	}
	
	//Dont Forget to close connection
	ftp_close($server_connection);
	echo "Connection Closed<br>";

?>




