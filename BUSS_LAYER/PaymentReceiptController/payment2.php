<?php
require_once __DIR__ . '/../../Libs/db.php';

class payment
{

	public function view()
	{

		// GO TO MODEL CLASS IN MODEL CALL PP FUNCTION
		$details = new model();

		$resultset = $details->pp2();
		// RETURN THE RESULT TO VIEW
		return $resultset;
	}

}
?>
