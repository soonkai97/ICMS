<?php

require_once __DIR__ . '/../../Libs/db.php';
/**
 * 
 */
class newUserController
{


	public function add()
	{
		$user1 = new user();

		$user1->name = $_POST['name'];
		$user1->password = $_POST['password'];
		$user1->email = $_POST['email'];
		$user1->gender = $_POST['gender'];
		$user1->category = $_POST['category'];
		$user1->save();
	}
}
