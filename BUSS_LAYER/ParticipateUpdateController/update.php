<?php

require_once __DIR__ . '/../../Libs/db.php';
/**
 * 
 */
class partici
{
	public function update()
	{
		$usr1 = new participant();
		$usr1->approve=isset($_POST['update']);
		$usr1->update();
	}
}
