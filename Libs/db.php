<?php

	$conn=new mysqli("localhost", "root", "");

	// Create database
	if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    } 
    

	mysqli_select_db($conn, "icms");


		
		function AllJury(){
		global $conn;

		$sql = "SELECT * FROM jury";
		$result = $conn->query($sql)or die($conn->error);;

		return $result;

		}
		
		
		function ListID(){
		global $conn;

		$sql = "SELECT * FROM participant";
		$result = $conn->query($sql)or die($conn->error);

		return $result;
		}
		
		function AddEvaluation($pid,$jid,$mark,$remark){
			global $conn;
			$insert = "INSERT INTO `evaluation` (`Mark`,`Remark`,`ParticipantID`,`JuryID`)VALUES('$mark','$remark','$pid','$jid')";
			$result = mysqli_query($conn, $insert);
			return $result;
		}

		function AllResult(){
		global $conn;

		$sql = "SELECT evaluation.Mark, evaluation.Remark, evaluation.ParticipantID, participant.GroupName, participant.InnovationProduct, login.Username FROM evaluation JOIN participant ON evaluation.ParticipantID=participant.ParticipantID JOIN login ON evaluation.JuryID=login.User_Id ORDER BY evaluation.Mark DESC;";
		$result = $conn->query($sql)or die($conn->error);

		return $result;

		}

		function AllHistory(){
		global $conn;

		$sql = "SELECT evaluation.EvaluationID, evaluation.Mark, evaluation.Remark, evaluation.ParticipantID, participant.GroupName, participant.InnovationProduct, login.Username FROM evaluation JOIN participant ON evaluation.ParticipantID=participant.ParticipantID JOIN login ON evaluation.JuryID=login.User_Id ORDER BY evaluation.EvaluationID ASC;";
		$result = $conn->query($sql)or die($conn->error);

		return $result;

		}


		function deleteJury($dlt_id){
		global $conn;
		
		$sql = "DELETE jury, login, evaluation FROM jury INNER JOIN login ON login.Username = jury.Name INNER JOIN evaluation ON evaluation.JuryID = login.User_Id WHERE jury.Jury_ID= '$dlt_id'";
	
		$result = $conn->query($sql)or die($conn->error);

		return $result;
		}
	
?>

 <?php
	class user
	{
		public $table = 'system_administrator';

		public $name;
		public $password;
		public $email;
		public $gender;
		public $category;


		public function validate()
		{
			if (isset($_POST['submit'])) {
				$username = $_POST['username'];
				$password = $_POST['password'];
				$email = $_POST['email'];
				$category = $_POST['category'];
				$query = "SELECT * FROM login WHERE Username='" . $username . "' and Password = '" . $password . "' and Email = '" . $email . "' and Category='" . $category . "'";
				$result = DB::run($query);
				if (mysqli_num_rows($result)) {
					$row = mysqli_fetch_assoc($result);
					if (empty($row['Username'])) {
						?>
 				<script>
 					window.location.href = '<?php echo base_url('Example/Home_View/login.php?err'); ?>';
 				</script>
 				<?php
					exit();
				}
				$_SESSION['User_Id']  = $row['User_Id'];
				$_SESSION['Username'] = $row['Username'];
				$_SESSION['Email'] = $row['Email'];
				$_SESSION['Category'] = $row['Category'];

				if ($username == $row['Username'] && $password == $row['Password']) {
					echo '<script type="text/javascript">alert("you are login successfully and you are logined as ' . $row['Category'] . '")</script>';
				}
				if (($category == $_POST['category']) && ($category == "participant")) {
					?>
 				<script>
 					window.location.href = "../Participant_View/participant.php"
 				</script>
 			<?php

			} else if (($category == $_POST['category']) && ($category == "committee")) {
				?>
 				<script>
 					window.location.href = "../Committee_View/committee.php"
 				</script>
 			<?php
			} else if (($category == $_POST['category']) && ($category == "jury")) {
				?>
 				<script>
 					window.location.href = "../Jury_View/jury.php"
 				</script>
 			<?php
			} else if (($category == $_POST['category']) && ($category == "sa")) {
				?>
 				<script>
 					window.location.href = "../SA_View/sa.php"
 				</script>
 			<?php
			}
		}else{
			// end if result

			echo '<script type="text/javascript">alert("Wrong Account!!")</script>';?>
			<script>
				window.location.href = '<?php echo base_url('Example/Home_View/login.php?err'); ?>';
			</script>
			<?php
		} 
	}
}



public function save()
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "icms";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "INSERT INTO system_administrator (Name, Password, Email, Gender, Category, Status) VALUES ('$_POST[name]','$_POST[password]','$_POST[email]','$_POST[gender]','$_POST[category]', 0)";

	if (mysqli_query($conn, $sql)) {
		echo "Your Account has Registered Successfully, Please Wait for SA to Approve";
	} else {
		echo "Failed to Register Account" . $sql . "<br>" . mysqli_error($conn);
	}
}

}

class Member
{
	public $username;
	public $password;
	public $email;
	public $gender;
	public $category;
	public $status;

	public function approve()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "icms";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
if (isset($_POST['approve'])) {
    if (isset($_POST['check'])) {
        foreach ($_POST['check'] as $value) {
            $sql = "UPDATE system_administrator SET Status = 1 WHERE UserId = $value"; //write this query according to your table schema
            if (mysqli_query($link, $sql)) {
    echo "This account has been approved<br>";
}
else {
    echo "" . $sql . "<br>" . mysqli_error($link);
    }  
}
} 
}
if (isset($_POST['approve'])) {
    if (isset($_POST['check'])) {
        foreach ($_POST['check'] as $value) {
           $query = "INSERT INTO login (Username, Email, Category) SELECT Name, Email, Category FROM  system_administrator WHERE Status = 1"; //write this query according to your table schema
            if (mysqli_query($link, $query)) {
    echo "This account has been inserted into login list<br>";
}
else {
    echo "" . $query . "<br>" . mysqli_error($link);
    }  
}
} 
}

if (isset($_POST['approve'])) {
    if (isset($_POST['check'])) {
        foreach ($_POST['check'] as $value) {
           $query = "INSERT INTO jury (Name) SELECT Name FROM  system_administrator WHERE Status = 1 AND Category = 'jury'"; //write this query according to your table schema
            if (mysqli_query($link, $query)) {
    echo "";
}
else {
    echo "" . $query . "<br>" . mysqli_error($link);
    }  
}
} 
}

if (isset($_POST['approve'])) {
    if (isset($_POST['check'])) {
        foreach ($_POST['check'] as $value) {
           $query = "DELETE FROM system_administrator WHERE Status = 1"; //write this query according to your table schema
            if (mysqli_query($link, $query)) {
    echo "";
}
else {
    echo "" . $query . "<br>" . mysqli_error($link);
    }  
}
} 
}
	}
	Public function reject()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "icms";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		if(isset($_POST['reject'])){
    if (isset($_POST['check'])){
    foreach ($_POST['check'] as $value){
        $sql = "DELETE FROM system_administrator WHERE UserId = $value";//modify it
        if (mysqli_query($link, $sql)) {
    echo "This account has been rejected";
} else {
    echo "" . $sql . "<br>" . mysqli_error($link);
}
    }
}
}
	}
	
public function approveregistration()
{
	$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

	mysqli_select_db($link, "icms") or die(mysqli_error());

	if (isset($_POST['approveregistration'])) {
		if (isset($_POST['check'])) {
			foreach ($_POST['check'] as $value) {
				$sql = "UPDATE participant SET RegistrationStatus = 1 WHERE ParticipantId = $value";
				if (mysqli_query($link, $sql)) {
					echo "This account has been approved<br>";
				}
				else {
					echo "" . $sql . "<br>" . mysqli_error($link);
				}  
			}
		} 
	}
}	

public function rejectregistration()
{
	$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

	mysqli_select_db($link, "icms") or die(mysqli_error());
	
	if(isset($_POST['rejectregistration'])){
		if (isset($_POST['check'])){
			foreach ($_POST['check'] as $value){
				$sql = "DELETE FROM participant WHERE ParticipantId = $value";
				if (mysqli_query($link, $sql)) {
					echo "This account has been rejected";
				}
				else {
					echo "" . $sql . "<br>" . mysqli_error($link);
				}
			}
		}
	}
}

}

class Participant
{
	public function register()
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "icms";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "INSERT INTO participant (Username, Categories, GroupName, InnovationProduct, GroupMemberName1, GroupMemberAge1, GroupMemberGender1, GroupMemberNumber1, GroupMemberName2, GroupMemberAge2, GroupMemberGender2, GroupMemberNumber2, GroupMemberName3, GroupMemberAge3, GroupMemberGender3, GroupMemberNumber3, GroupMemberName4, GroupMemberAge4, GroupMemberGender4, GroupMemberNumber4, GroupMemberName5, GroupMemberAge5, GroupMemberGender5, GroupMemberNumber5, Total) 
	VALUES ('$_SESSION[Username]','$_POST[category]','$_POST[group_name]','$_POST[innovation_product]','$_POST[group_member_name1]','$_POST[age1]', '$_POST[gender1]', '$_POST[contact1]', '$_POST[group_member_name2]', '$_POST[age2]', '$_POST[gender2]', '$_POST[contact2]', '$_POST[group_member_name3]', '$_POST[age3]', '$_POST[gender3]', '$_POST[contact3]', '$_POST[group_member_name4]', '$_POST[age4]', '$_POST[gender4]', '$_POST[contact4]', '$_POST[group_member_name5]', '$_POST[age5]', '$_POST[gender5]', '$_POST[contact5]', 100.00)";

	if (mysqli_query($conn, $sql)) {
		echo "Register Successfully!!";
	} else {
		echo "Failed to Register" . $sql . "<br>" . mysqli_error($conn);
	}
}
	public function view()
	{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "icms";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT SELECT Categories, GroupName, InnovationProduct, GroupMemberName1, GroupMemberAge1, GroupMemberGender1, GroupMemberNumber1, GroupMemberName2, GroupMemberAge2, GroupMemberGender2, GroupMemberNumber2, GroupMemberName3, GroupMemberAge3, GroupMemberGender3, GroupMemberNumber3, GroupMemberName4, GroupMemberAge4, GroupMemberGender4, GroupMemberNumber4, GroupMemberName5, GroupMemberAge5, GroupMemberGender5, GroupMemberNumber5, Total FROM participant INNER JOIN login ON login.Username = participant.Username WHERE login.Username='$_SESSION[Username]'";

$rs = mysqli_query($link, $strSQL);
$i = 1;
while($row=mysqli_fetch_array($rs)){
  $Categories = $row["Categories"];
  $GroupName = $row["GroupName"];
  $InnovationProduct = $row["InnovationProduct"];
  $GroupMemberName1 = $row["GroupMemberName1"];
  $GroupMemberAge1 = $row["GroupMemberAge1"];
  $GroupMemberGender1 = $row["GroupMemberGender1"];
  $GroupMemberNumber1 = $row["GroupMemberNumber1"];
  $GroupMemberName2 = $row["GroupMemberName2"];
  $GroupMemberAge2 = $row["GroupMemberAge2"];
  $GroupMemberGender2 = $row["GroupMemberGender2"];
  $GroupMemberNumber2 = $row["GroupMemberNumber2"];
  $GroupMemberName3 = $row["GroupMemberName3"];
  $GroupMemberAge3 = $row["GroupMemberAge3"];
  $GroupMemberGender3 = $row["GroupMemberGender3"];
  $GroupMemberNumber3 = $row["GroupMemberNumber3"];
  $GroupMemberName4 = $row["GroupMemberName4"];
  $GroupMemberAge4 = $row["GroupMemberAge4"];
  $GroupMemberGender4 = $row["GroupMemberGender4"];
  $GroupMemberNumber4 = $row["GroupMemberNumber4"];
  $GroupMemberName5 = $row["GroupMemberName5"];
  $GroupMemberAge5 = $row["GroupMemberAge5"];
  $GroupMemberGender5 = $row["GroupMemberGender5"];
  $GroupMemberNumber5 = $row["GroupMemberNumber5"];
  $Total = $row["Total"];

echo'<tr><td></td><th align="center";>Category:</th>';
echo'<td align="center"; colspan="2"><input type="hidden" value="'.$Categories.'"/>'.$Categories.'</td>';
echo'<div><tr><th><p><b>Group Information</b></p></th></tr></div>';
echo'<tr><th>Group Name:</th>';
echo'<td><input type="hidden" value="'.$GroupName.'"/>'.$GroupName.'</td>';
echo'<th><th>Innovation Product:</th>';
echo'<td><input type="hidden" value="'.$InnovationProduct.'"/>'.$InnovationProduct.'</td></tr>';
echo'<th>No.</th>';
echo'<th>Group Member</th>';
echo'<th>Age</th>';
echo'<th>Gender</th>';
echo'<th>Contact Number</th>';
echo'</tr>';
echo'<tr><td>1</td>';
echo'<td><input type="hidden" value="'.$GroupMemberName1.'"/>'.$GroupMemberName1.'</td>';
echo'<td><input type="hidden" value="'.$GroupMemberAge1.'"/>'.$GroupMemberAge1.'</td>';
echo'<td><input type="hidden" value="'.$GroupMemberGender1.'"/>'.$GroupMemberGender1.'</td>';
echo'<td><input type="hidden" value="'.$GroupMemberNumber1.'"/>'.$GroupMemberNumber1.'</td></tr>';
echo'<tr><td>2</td>';
echo'<td><input type="hidden" value="'.$GroupMemberName2.'"/>'.$GroupMemberName2.'</td>';
echo'<td><input type="hidden" value="'.$GroupMemberAge2.'"/>'.$GroupMemberAge2.'</td>';
echo'<td><input type="hidden" value="'.$GroupMemberGender2.'"/>'.$GroupMemberGender2.'</td>';
echo'<td><input type="hidden" value="'.$GroupMemberNumber2.'"/>'.$GroupMemberNumber2.'</td></tr>';
echo'<tr><td>3</td>';
echo'<td><input type="hidden" value="'.$GroupMemberName3.'"/>'.$GroupMemberName3.'</td>';
echo'<td><input type="hidden" value="'.$GroupMemberAge3.'"/>'.$GroupMemberAge3.'</td>';
echo'<td><input type="hidden" value="'.$GroupMemberGender3.'"/>'.$GroupMemberGender3.'</td>';
echo'<td><input type="hidden" value="'.$GroupMemberNumber3.'"/>'.$GroupMemberNumber3.'</td></tr>';
echo'<tr><td>4</td>';
echo'<td><input type="hidden" value="'.$GroupMemberName4.'"/>'.$GroupMemberName4.'</td>';
echo'<td><input type="hidden" value="'.$GroupMemberAge4.'"/>'.$GroupMemberAge4.'</td>';
echo'<td><input type="hidden" value="'.$GroupMemberGender4.'"/>'.$GroupMemberGender4.'</td>';
echo'<td><input type="hidden" value="'.$GroupMemberNumber4.'"/>'.$GroupMemberNumber4.'</td></tr>';
echo'<tr><td>5</td>';
echo'<td><input type="hidden" value="'.$GroupMemberName5.'"/>'.$GroupMemberName5.'</td>';
echo'<td><input type="hidden" value="'.$GroupMemberAge5.'"/>'.$GroupMemberAge5.'</td>';
echo'<td><input type="hidden" value="'.$GroupMemberGender5.'"/>'.$GroupMemberGender5.'</td>';
echo'<td><input type="hidden" value="'.$GroupMemberNumber5.'"/>'.$GroupMemberNumber5.'</td></tr>';
echo'<tr><td>TOTAL (RM) to PAY:</td><td><input type="hidden" value="'.$Total.'"/>RM '.$Total.'.00</td>';
}
echo "<td><button type='submit' name='update' value='update'><a href='updateform.php'>Update</button></a></td>";
echo "<td><button type='submit' ><a href='participant.php'>Cancel</button></a></td></tr></table>";
echo "</form>";
mysqli_close($link);
	}
	public function update()
	{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "icms";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}

            $innovation_product= $_POST['innovation_product'];
			
	 $sql = "UPDATE participant SET InnovationProduct = '$innovation_product' WHERE Username='$_SESSION[Username]'" ;
	
	if (mysqli_query($conn, $sql)) {
		echo "";
	} 
	else {
    echo "" . mysqli_error($conn);
	}
	mysqli_close($conn);

}

public function report()
{	
	$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
	
		mysqli_select_db($link, "icms") or die(mysqli_error());
			
	$sql="UPDATE participant INNER JOIN receipt ON receipt.ParticipantID = participant.ParticipantID SET PaymentStatus = 1
		  WHERE receipt.Status = 'Completed'";
			  
	$result = mysqli_query($link, $sql);
		
		mysqli_fetch_assoc($result);
		
		return $track;
			
		mysqli_close($link);			  
}
}

class model
{
	public function pp2()
	{
		//DECLARATION OF DATABASE
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "icms";

 		//CREATE CONNECTION
		$conn = new mysqli($servername, $username, $password, $dbname);
		//CHECK CONNECTION
		if ($conn->connect_error)
		{
    	die("Connection failed: " . $conn->connect_error);
		} 

			// SELECT QUERY 
			$sql = "SELECT event.EventID, participant.GroupName, participant.Total, participant.ParticipantID FROM event INNER JOIN participant";
			$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
			while( $row = mysqli_fetch_assoc($resultset) ) 
			{
				
			}
	//RETURN THE RESULT TO CONTROLLER
	return $resultset;
	}
}

class paymenthistorymodel
{

	public function hstry()
	{
		//DECLARATION OF DATABASE
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "icms";

 		//CREATE CONNECTION
		$conn = new mysqli($servername, $username, $password, $dbname);
		// CHECK CONNECTION
		if ($conn->connect_error)
		 {
    	die("Connection failed: " . $conn->connect_error);
		} 
		  
  $sql = "SELECT * FROM receipt";
  $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)); 
  while( $row = mysqli_fetch_assoc($resultset) ) 
  {
	return $resultset;
  }
	}
}
class paymentsuccessmodel
{

	public function complete()
	{
		////DECLARATION OF DATABASE
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "icms";

 		//CREATE CONNECTION
		$conn = new mysqli($servername, $username, $password, $dbname);
		// CHECK CONNECTION
		if ($conn->connect_error)
		 {
    	die("Connection failed: " . $conn->connect_error);
		} 
		  
  $sql = "SELECT * FROM receipt INNER JOIN event ";
  $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)); 
  while( $row = mysqli_fetch_assoc($resultset) ) 
  {
	return $resultset;
  }
	}
}

class successmodel
{

public function paypal2()
	{
		//DECLARATION OF DATABASE
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "icms";

 		//CREATE CONNECTION
		$conn = new mysqli($servername, $username, $password, $dbname);
		// CHECK CONNECTION
		if ($conn->connect_error) 
		{
    	die("Connection failed: " . $conn->connect_error);
		} 
		//STORE TRANSACTION INFROMATION FROM PAYPAL INTO DATABASE
		$ParticipantID =  $_GET['item_number'];  
		$EventInfo =  $_GET['item_name']; 
		$ReferenceNumber = $_GET['tx'];
		$PaymentAmount = $_GET['amt'];
		$CURRENCYCODE = $_GET['cc'];
		$Status = $_GET['st'];
		
		//GET PRODUCT PRICE TO STORE INTO DATABASE
		$sql = "SELECT * FROM receipt";
		$result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
		$row = mysqli_fetch_assoc($result);
   
		return $result;
	}



	public function insert2()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "icms";

 		//Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) 
		{
    	die("Connection failed: " . $conn->connect_error);
		} 
		//Store transaction information into database from PayPal
		$ParticipantID =  $_GET['item_number']; 
		$EventInfo =  $_GET['item_name']; 		
		$ReferenceNumber = $_GET['tx'];
		$PaymentAmount = $_GET['amt'];
		$CURRENCYCODE = $_GET['cc'];
		$Status = $_GET['st'];
    		//Insert tansaction data into the database
		$data= "INSERT INTO receipt (ParticipantID, EventInfo, ReferenceNumber ,PaymentAmount,Status) VALUES('".$ParticipantID."','".$EventInfo."','".$ReferenceNumber."','".$PaymentAmount."','".$Status."')";

    		 mysqli_query($conn, $data);
			 
		$last_insert_id = mysqli_insert_id($conn);  

		return $last_insert_id; 
		
	}

}

	$conn=new mysqli("localhost", "root", "");

	// Create database
	if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    } 
    

	mysqli_select_db($conn, "icms");
		
		
		
		function insert($EventID,$Categories,$EventLocation,$EventTime,$EventDate){
			global $conn;
			$add = "INSERT INTO `event` (`EventID`,`Categories`,`EventLocation`,`EventTime`,`EventDate`)VALUES('$EventID','$Categories','$EventLocation','$EventTime','$EventDate')";
			$result = mysqli_query($conn, $add);
			return $result;
		
		}
		
		
		function AllEvent(){
		global $conn;

		$sql = "SELECT * FROM event";
		$result = $conn->query($sql);

		return $result;

		}
		
		function remove($delete){
		global $conn;
		$sql = "DELETE FROM event WHERE EventID = '$delete'";
		$result = $conn->query($sql)or die($conn->error);

		return $result;
		}
		
		function update($EventID,$Categories,$EventLocation,$EventTime,$EventDate){
		global $conn;
		$sql = "UPDATE event SET Categories = '$Categories', EventLocation = '$EventLocation', EventTime = '$EventTime', EventDate = '$EventDate' WHERE EventID = '$EventID'";
		$result = $conn->query($sql);

		return $result;
		}
		
	

		function AllParticipants(){
		global $conn;

		$sql = "SELECT event.EventID, event.Categories, participant.ParticipantID, participant.GroupName, participant.Username FROM event JOIN participant ON event.Categories=participant.Categories";
		$result = $conn->query($sql)or die($conn->error);

		return $result;

		}

		
		function ParticipantList(){
			global $conn;

		$sql = "SELECT * FROM participant";
		$result = $conn->query($sql)or die($conn->error);

		return $result;
		}
		
	
?>