
<?php

include ("/xampp/htdocs/ICMS/Libs/db.php");

if(isset($_POST['method'])){
	if($_POST['method'] == "insert"){
		$result = insert($_POST['EventID'],$_POST['Categories'],$_POST['EventLocation'],$_POST['EventTime'],$_POST['EventDate']);
		if($result){
			echo "<script>alert('Add Event Successful')</script>";
			echo "<script>window.location.assign('/ICMS/Example/Committee_View/EventList.php')</script>";
		}else{
			echo "<script>alert('Add Event Fail, Please Try Again')</script>";
			echo "<script>window.location.assign('/ICMS/Example/Committee_View/EventList.php')</script>";
		}	
	}
	else if($_POST['method'] == "update"){
		$result = update($_POST['EventID'],$_POST['Categories'],$_POST['EventLocation'],$_POST['EventTime'],$_POST['EventDate']);
		
		if($result){
			echo "<script>alert('Edit Event successful')</script>";
			echo "<script>window.location.assign('/ICMS/Example/Committee_View/EventList.php')</script>";
		}else{
			echo "<script>alert('Edit Event Fail, Please Try Again')</script>";
			echo "<script>window.location.assign('/ICMS/Example/Committee_View/EventList.php')</script>";
		}
	}
	
}

	


	if($_SERVER['PHP_SELF'] == "/ICMS/Example/Committee_View/EventList.php"){

	$AllEvent = AllEvent();

	}
	


	
	if(isset($_GET['delete'])){

	$result = remove($_GET['delete']);
	if($result){
			echo "<script>alert('Event Deleted Successfully')</script>";
			echo "<script>window.location.assign('/ICMS/Example/Committee_View/EventList.php')</script>";
		}else{
			echo "<script>alert('Event Delete Fail, Please Try Again')</script>";
			echo "<script>window.location.assign('/ICMS/Example/Committee_View/EventList.php')</script>";
	}
}

	/*if (isset($_GET['list'])){
		$result = AllParticipants($_GET['list']);
	if($result){
			echo "<script>alert('Success')</script>";
			echo "<script>window.location.assign('/EMS/Example/Committee_View/ParticipantList.php')</script>";
		}else{
			echo "<script>alert('Fail, Please Try Again')</script>";
			echo "<script>window.location.assign('/EMS/Example/Committee_View/EventList.php')</script>";
	}

	}*/


	if($_SERVER['PHP_SELF'] == "/ICMS/Example/Committee_View/ParticipantList.php"){

	$AllParticipants = AllParticipants();

	}

	if($_SERVER['PHP_SELF'] == "/ICMS/Example/Committee_View/EventList.php.php"){

	$ParticipantList = ParticipantList();

	}
?>	