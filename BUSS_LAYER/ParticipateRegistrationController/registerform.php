<?php

require_once __DIR__ . '/../../Libs/db.php';

class form
{

	public function register_form()
	{
		$form1 = new participant();

		$form1->category = $_POST['category'];
		$form1->group_name = $_POST['group_name'];
		$form1->innovation_product = $_POST['innovation_product'];
		$form1->group_member_name1 = $_POST['group_member_name1'];
		$form1->age1 = $_POST['age1'];
		$form1->gender1 = $_POST['gender1'];
		$form1->contact1 = $_POST['contact1'];
		$form1->group_member_name2 = $_POST['group_member_name2'];
		$form1->age2 = $_POST['age2'];
		$form1->gender2 = $_POST['gender2'];
		$form1->contact2 = $_POST['contact2'];
		$form1->group_member_name3 = $_POST['group_member_name3'];
		$form1->age3 = $_POST['age3'];
		$form1->gender3 = $_POST['gender3'];
		$form1->contact3 = $_POST['contact3'];
		$form1->group_member_name4 = $_POST['group_member_name4'];
		$form1->age4 = $_POST['age4'];
		$form1->gender4 = $_POST['gender4'];
		$form1->contact4 = $_POST['contact4'];
		$form1->group_member_name5 = $_POST['group_member_name5'];
		$form1->age5 = $_POST['age5'];
		$form1->gender5 = $_POST['gender5'];
		$form1->contact5 = $_POST['contact5'];

		$form1->register();
	}
}
