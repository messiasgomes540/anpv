<?php


	functionDBClose($link){
		
		mysqli_close($link) or die(mysqli_error($link);
	}


	function DBConnect(){
		$link = mysql_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_PASSWORD) or die (mysqli_connect_error());
		mysqli_set_charset($link, DB_CHARSET) or die (mysqli_error());
		
		return $link;
		
		
	}





?>