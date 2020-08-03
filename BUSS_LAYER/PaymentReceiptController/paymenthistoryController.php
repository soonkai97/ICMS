<?php
require_once __DIR__ . '/../../Libs/db.php';

class paymenthistory
{

	public function history()
	{
		//GO TO PAYMENTHISTORYMODEL CLASS IN MODEL CALL HSTRY FUNCTION
		$details = new paymenthistorymodel();

		$resultset = $details->hstry();

		//RETURN RESULTSET
		return $resultset;
	}

}
?>
