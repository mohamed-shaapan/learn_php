<?php
	
	//01-Attempt Connection
	require "serverConnect.php";
	echo "Server Connection Successfull!<br>";
	
	//Attempt to rename
	$old_name="Jetta.jpg";
	$new_name="Volkswagen.jpg";
	$rename_attempt=@ftp_rename($server_connection, $old_name, $new_name);
	
	if($rename_attempt){
		echo "File Renamed Successfully!<br>";
	}else{
		echo "File Rename Failed??????????<br>";
	}

	//Dont Forget to close connection
	ftp_close($server_connection);
	echo "Server Connection Closed";

?>