<?php
require_once('config.php');

?>
<?php
$data =$db->prepare("SELECT  * FROM students  ORDER BY  Roll_no DESC LIMIT 1");
		$data->execute();
		$student = $data->fetch(PDO::FETCH_OBJ);
		$roll_no=$student->Roll_no;
if(isset($_POST)){

	$bs211mid 		= $_POST['bs211mid'];
	$bs211th  = $_POST['bs211th'];
	$bs211pr 	= $_POST['bs211pr'];
  $bs211gp = $bs211mid + $bs211th + $bs211pr;
	$bs211grade = $bs211gp/10;

	$cs211mid 		= $_POST['cs211mid'];
	$cs211th  = $_POST['cs211th'];
	$cs211pr 	= $_POST['cs211pr'];
	$cs211gp = $cs211mid + $cs211th + $cs211pr;
	$cs211grade = $cs211gp/10;

	$cs212mid 		= $_POST['cs212mid'];
	$cs212th  = $_POST['cs212th'];
	$cs212pr 	= $_POST['cs212pr'];
	$cs212gp = $cs212mid + $cs212th + $cs212pr;
	$cs212grade = $cs212gp/10;

	$cs213mid 		= $_POST['cs213mid'];
	$cs213th  = $_POST['cs213th'];
	$cs213pr 	= $_POST['cs213pr'];
	$cs213gp = $cs213mid + $cs213th + $cs213pr;
	$cs213grade = $cs213gp/10;

	$cs214mid 		= $_POST['cs214mid'];
	$cs214th  = $_POST['cs214th'];
	$cs214pr 	= $_POST['cs214pr'];
	$cs214gp = $cs214mid + $cs214th + $cs214pr;
	$cs214grade = $cs214gp/10;

	$ec219mid 		= $_POST['ec219mid'];
	$ec219th  = $_POST['ec219th'];
	$ec219pr 	= $_POST['ec219pr'];
	$ec219gp = $ec219mid + $ec219th + $ec219pr;
	$ec219grade = $ec219gp/10;

	$ee212mid 		= $_POST['ee212mid'];
	$ee212th  = $_POST['ee212th'];
	$ee212pr 	= $_POST['ee212pr'];
	$ee212gp = $ee212mid + $ee212th + $ee212pr;
	$ee212grade = $ee212gp/10;




		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '3', 'BS - 211', $bs211mid, $bs211th, $bs211pr, 'No', $bs211gp, $bs211grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '3', 'CS-211', $cs211mid, $cs211th, $cs211pr, 'No', $cs211gp, $cs211grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '3', 'CS-212', $cs212mid, $cs212th, $cs212pr, 'No', $cs212gp, $cs212grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '3', 'CS-213', $cs213mid, $cs213th, $cs213pr, 'No', $cs213gp, $cs213grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '3', 'CS-214', $cs214mid, $cs214th, $cs214pr, 'No', $cs214gp, $cs214grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '3', 'EC-219', $ec219mid, $ec219th, $ec219pr, 'No', $ec219gp, $ec219grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
			$result = $stmtinsert->execute([$roll_no, '2017', '3', 'EE-212', $ee212mid, $ee212th, $ee212pr, 'No', $ee212gp, $ee212grade]);



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
