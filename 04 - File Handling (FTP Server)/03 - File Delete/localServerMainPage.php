<?php
	
	//01-Attempt Connection
	require "serverConnect.php";
	echo "Server Connection Successfull!<br>";

	//Attempt to delete file
	$file_dir="Volkswagen.jpg";
	$delete_attempt=@ftp_delete($server_connection, $file_dir);
	
	if($delete_attempt){
		echo "File Delete Successfull!<br>";
	}else{
		echo "File Delete Failed??????????<br>";
	}

	//Dont Forget to close connection
	ftp_close($server_connection);
	echo "Server Connection Closed";

?>