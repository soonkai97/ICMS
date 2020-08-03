<?php
require_once __DIR__ . '/../../Libs/db.php';

class paymentsuccess
{

	public function done()
	{
		//GO TO PAYMENTSUCCESSMODEL IN PAYMENTFILE TO CALL COMPLETE FUNCTION
		$details = new paymentsuccessmodel();

		$resultset = $details->complete();

		//RETURN RESULTSET
		return $resultset;
	}

}
?>
