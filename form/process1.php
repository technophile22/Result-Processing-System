<?php
require_once('config.php');

?>
<?php

if(isset($_POST)){


	$Name 		= $_POST['Name'];
	$Fathers_Name  = $_POST['Fathers_Name'];
	$Mothers_Name 	= $_POST['Mothers_Name'];
	$Date_of_birth	= $_POST['Date_of_birth'];
	$Roll_Number = $_POST['Roll_Number'];


		$sql = "INSERT INTO students (Roll_no,Student_name,Father_name,Mother_name,dob,dno) VALUES(?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$Roll_Number, $Name, $Fathers_Name, $Mothers_Name, $Date_of_birth, '1']);
		

	//	$sql = "SELECT * FROM users";
  //  $res = $db->query($sql);
  //  foreach ($res as $row) {
  //      $id = $row["id"];
    }
		if($result){
			
			echo 'Successfully entered. click OK. ' ;
		}else{
			echo 'There were erros while saving the data. Try Again';
		}


$db=null;


?>
