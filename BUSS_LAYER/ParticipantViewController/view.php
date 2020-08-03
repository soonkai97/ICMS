<?php

require_once __DIR__ . '/../../Libs/db.php';
/**
 * 
 */
class parti
{
	public function view()
	{
		$usr1 = new participant();
		$usr1->approve=isset($_POST['view']);
		$usr1->view();
	}
}
