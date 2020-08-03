<?php

require_once __DIR__ . '/../../Libs/db.php';

class index
{

	public function view()
	{
		//call static method All from user class
		$usr = user::validate();
	}
}
