
<?php

include ("/xampp/htdocs/ICMS/Libs/db.php");

if(isset($_POST['method'])){
	
	if($_POST['method'] == "AddEvaluation"){
		$result = AddEvaluation($_POST['ParticipantID'],$_POST['JuryID'],$_POST['Mark'],$_POST['Remark']);
		if($result){
			echo "<script>alert('Add Evaluation Successful')</script>";
			echo "<script>window.location.assign('/ICMS/Example/Jury_View/EvaluationForm.php')</script>";
		}else{
			echo "<script>alert('Add Evaluation Fail, Please Try Again')</script>";
			echo "<script>window.location.assign('/ICMS/Example/Jury_View/EvaluationForm.php')</script>";
		}

	} 
}

if(isset($_GET['dlt_id'])){

	$result = deleteJury($_GET['dlt_id']);
	if($result){
			echo "<script>alert('Jury Deleted Successful')</script>";
			echo "<script>window.location.assign('/ICMS/Example/Committee_View/JuryListView.php')</script>";
		}else{
			echo "<script>alert('Jury Delete Fail, Please Try Again')</script>";
			echo "<script>window.location.assign('/ICMS/Example/Committee_View/JuryListView.php')</script>";
	}
}



	if($_SERVER['PHP_SELF'] == "/ICMS/Example/Committee_View/JuryListView.php"){

	$alljury = AllJury();

	}

	if($_SERVER['PHP_SELF'] == "/ICMS/Example/Jury_View/EvaluationForm.php"){

	$listid = ListID();

	}

	if($_SERVER['PHP_SELF'] == "/ICMS/Example/Committee_View/Result.php"){

	$allresult = AllResult();

	}

	if($_SERVER['PHP_SELF'] == "/ICMS/Example/Jury_View/History.php"){

	$allhistory = AllHistory();

	}
?>	
