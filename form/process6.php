<?php
require_once('config.php');

?>
<?php
$data =$db->prepare("SELECT  * FROM students  ORDER BY  Roll_no DESC LIMIT 1");
		$data->execute();
		$student = $data->fetch(PDO::FETCH_OBJ);
		$roll_no=$student->Roll_no;
if(isset($_POST)){

	$cs311mid 		= $_POST['cs311mid'];
	$cs311th  = $_POST['cs311th'];
	$cs311pr 	= $_POST['cs311pr'];
  $cs311gp = $cs311mid + $cs311th + $cs311pr;
	$cs311grade = $cs311gp/10;

	$cs312mid 		= $_POST['cs312mid'];
	$cs312th  = $_POST['cs312th'];
	$cs312pr 	= $_POST['cs312pr'];
	$cs312gp = $cs312mid + $cs312th + $cs312pr;
	$cs312grade = $cs312gp/10;

	$cs313mid 		= $_POST['cs313mid'];
	$cs313th  = $_POST['cs313th'];
	$cs313pr 	= $_POST['cs313pr'];
	$cs313gp = $cs313mid + $cs313th + $cs313pr;
	$cs313grade = $cs313gp/10;

	$cs314mid 		= $_POST['cs314mid'];
	$cs314th  = $_POST['cs314th'];
	$cs314pr 	= $_POST['cs314pr'];
	$cs314gp = $cs314mid + $cs314th + $cs314pr;
	$cs314grade = $cs314gp/10;

	$cs315mid 		= $_POST['cs315mid'];
	$cs315th  = $_POST['cs315th'];
	$cs315pr 	= $_POST['cs315pr'];
	$cs315gp = $cs315mid + $cs315th + $cs315pr;
	$cs315grade = $cs315gp/10;

	$ec319mid 		= $_POST['ec319mid'];
	$ec319th  = $_POST['ec319th'];
	$ec319pr 	= $_POST['ec319pr'];
	$ec319gp = $ec319mid + $ec319th + $ec319pr;
	$ec319grade = $ec319gp/10;





		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '5', 'CS-311', $cs311mid, $cs311th, $cs311pr, 'No', $cs311gp, $cs311grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '5', 'CS-312', $cs312mid, $cs312th, $cs312pr, 'No', $cs312gp, $cs312grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '5', 'CS-313', $cs313mid, $cs313th, $cs313pr, 'No', $cs313gp, $cs313grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '5', 'CS-314', $cs314mid, $cs314th, $cs314pr, 'No', $cs314gp, $cs314grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '5', 'CS-315', $cs315mid, $cs315th, $cs315pr, 'No', $cs315gp, $cs315grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '5', 'EC-319', $ec319mid, $ec319th, $ec319pr, 'No', $ec319gp, $ec319grade]);




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
