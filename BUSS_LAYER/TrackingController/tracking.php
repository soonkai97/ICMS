<?php
	session_start();
	
	if(isset($_POST["track"])){
		
		require('C:/xampp/htdocs/ICMS/Libs/db.php');
		
		$track = new participant();
		
		$track->report();
		
		header("location:/ICMS/Example/Participant_View/trackingreport.php");
		
	}

?>