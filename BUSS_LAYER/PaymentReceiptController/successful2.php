<?php
require_once __DIR__ . '/../../Libs/db.php';

class success
{

	public function done()
	{
		//GO TO SUCCESSMODEL CLASS IN PAYMENTFILE TO CALL PAYPAL FUNCTION
		$payp = new successmodel();
 
		$data = $payp->paypal2();
		
		//RETURN DATA
		return $data;
	}

	public function insert()
	{
		//GO TO SUCCESSMODEL CLASS IN PAYMENTFILE TO CALL INSERT FUNCTION
		$payp = new successmodel();
 
		$last_insert_id= $payp->insert2();
		
		//RETURN LAST INSERT ID
		return $last_insert_id;
	}

}
?>
