<?php
require_once('config.php');


?>

<?php
$cps =$db->prepare("SELECT  * FROM students  ORDER BY  Roll_no DESC LIMIT 1");
		$cps->execute();
		$student = $cps->fetch(PDO::FETCH_OBJ);
		$roll_no=$student->Roll_no;
		
if(isset($_POST)){

	$bs100Cmid 		= $_POST['bs100Cmid'];
	$bs100Cth  = $_POST['bs100Cth'];
	$bs100Cpr 	= $_POST['bs100Cpr'];
  $bs100Cgp = $bs100Cmid + $bs100Cth + $bs100Cpr;
	$bs100Cgrade = $bs100Cgp/10;

	$bs100Emid 		= $_POST['bs100Emid'];
	$bs100Eth  = $_POST['bs100Eth'];
	$bs100Epr 	= $_POST['bs100Epr'];
	$bs100Egp = $bs100Emid + $bs100Eth + $bs100Epr;
	$bs100Egrade = $bs100Egp/10;

	$bs111mid 		= $_POST['bs111mid'];
	$bs111th  = $_POST['bs111th'];
	$bs111pr 	= $_POST['bs111pr'];
	$bs111gp = $bs111mid + $bs111th + $bs111pr;
	$bs111grade = $bs111gp/10;

	$ce115mid 		= $_POST['ce115mid'];
	$ce115th  = $_POST['ce115th'];
	$ce115pr 	= $_POST['ce115pr'];
	$ce115gp = $ce115mid + $ce115th + $ce115pr;
	$ce115grade = $ce115gp/10;

	$cs100mid 		= $_POST['cs100mid'];
	$cs100th  = $_POST['cs100th'];
	$cs100pr 	= $_POST['cs100pr'];
	$cs100gp = $cs100mid + $cs100th + $cs100pr;
	$cs100grade = $cs100gp/10;

	$ec100mid 		= $_POST['ec100mid'];
	$ec100th  = $_POST['ec100th'];
	$ec100pr 	= $_POST['ec100pr'];
	$ec100gp = $ec100mid + $ec100th + $ec100pr;
	$ec100grade = $ec100gp/10;

	$me113mid 		= $_POST['me113mid'];
	$me113th  = $_POST['me113th'];
	$me113pr 	= $_POST['me113pr'];
	$me113gp = $me113mid + $me113th + $me113pr;
	$me113grade = $me113gp/10;

	$me114mid 		= $_POST['me114mid'];
	$me114th  = $_POST['me114th'];
	$me114pr 	= $_POST['me114pr'];
	$me114gp = $me114mid + $me114th + $me114pr;
	$me114grade = $me114gp/10;


		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '1', 'BS-100C', $bs100Cmid, $bs100Cth, $bs100Cpr, 'No', $bs100Cgp, $bs100Cgrade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '1', 'BS-100E', $bs100Emid, $bs100Eth, $bs100Epr, 'No', $bs100Egp, $bs100Egrade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '1', 'BS-111', $bs111mid, $bs111th, $bs111pr, 'No', $bs111gp, $bs111grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '1', 'CE-115', $ce115mid, $ce115th, $ce115pr, 'No', $ce115gp, $ce115grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '1', 'CS-100', $cs100mid, $cs100th, $cs100pr, 'No', $cs100gp, $cs100grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '1', 'EC-100', $ec100mid, $ec100th, $ec100pr, 'No', $ec100gp, $ec100grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '1', 'ME-113', $me113mid, $me113th, $me113pr, 'No', $me113gp, $me113grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '1', 'ME-114', $me114mid, $me114th, $me114pr, 'No', $me114gp, $me114grade]);

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
