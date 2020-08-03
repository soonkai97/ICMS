<?php

require_once __DIR__ . '/../../Libs/db.php';
/**
 * 
 */
class account
{
	public function approve()
	{
		$usr1 = new member();
		$usr1->approve=isset($_POST['submit']);
		$usr1->check = isset($_POST['check']);
		$usr1->approve();
	}
	public function reject()
	{
		$usr1 = new member();
		$usr1->reject=isset($_POST['submit']);
		$usr1->check = isset($_POST['check']);
		$usr1->reject();
	}
}
