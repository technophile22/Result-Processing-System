<?php
require_once('config.php');

?>
<?php
$data =$db->prepare("SELECT  * FROM students  ORDER BY  Roll_no DESC LIMIT 1");
		$data->execute();
		$student = $data->fetch(PDO::FETCH_OBJ);
		$roll_no=$student->Roll_no;
if(isset($_POST)){
	

	$bs100Pmid 		= $_POST['bs100Pmid'];
	$bs100Pth  = $_POST['bs100Pth'];
	$bs100Ppr 	= $_POST['bs100Ppr'];
  $bs100Pgp = $bs100Pmid + $bs100Pth + $bs100Ppr;
	$bs100Pgrade = $bs100Pgp/10;

	$bs121mid 		= $_POST['bs121mid'];
	$bs121th  = $_POST['bs121th'];
	$bs121pr 	= $_POST['bs121pr'];
	$bs121gp = $bs121mid + $bs121th + $bs121pr;
	$bs121grade = $bs121gp/10;

	$ce100mid 		= $_POST['ce100mid'];
	$ce100th  = $_POST['ce100th'];
	$ce100pr 	= $_POST['ce100pr'];
	$ce100gp = $ce100mid + $ce100th + $ce100pr;
	$ce100grade = $ce100gp/10;

	$ce122mid 		= $_POST['ce122mid'];
	$ce122th  = $_POST['ce122th'];
	$ce122pr 	= $_POST['ce122pr'];
	$ce122gp = $ce122mid + $ce122th + $ce122pr;
	$ce122grade = $ce122gp/10;

	$ee100mid 		= $_POST['ee100mid'];
	$ee100th  = $_POST['ee100th'];
	$ee100pr 	= $_POST['ee100pr'];
	$ee100gp = $ee100mid + $ee100th + $ee100pr;
	$ee100grade = $ee100gp/10;

	$me123mid 		= $_POST['me123mid'];
	$me123th  = $_POST['me123th'];
	$me123pr 	= $_POST['me123pr'];
	$me123gp = $me123mid + $me123th + $me123pr;
	$me123grade = $me123gp/10;

	$me124mid 		= $_POST['me124mid'];
	$me124th  = $_POST['me124th'];
	$me124pr 	= $_POST['me124pr'];
	$me124gp = $me124mid + $me124th + $me124pr;
	$me124grade = $me124gp/10;

	$ree100mid 		= $_POST['ree100mid'];
	$ree100th  = $_POST['ree100th'];
	$ree100pr 	= $_POST['ree100pr'];
	$ree100gp = $ree100mid + $ree100th + $ree100pr;
	$ree100grade = $ree100gp/10;


		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '2', 'BS-100P', $bs100Pmid, $bs100Pth, $bs100Ppr, 'No', $bs100Pgp, $bs100Pgrade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '2', 'BS-121', $bs121mid, $bs121th, $bs121pr, 'No', $bs121gp, $bs121grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '2', 'CE-100', $ce100mid, $ce100th, $ce100pr, 'No', $ce100gp, $ce100grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '2', 'CE-122', $ce122mid, $ce122th, $ce122pr, 'No', $ce122gp, $ce122grade]);
		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '2', 'EE-100', $ee100mid, $ee100th, $ee100pr, 'No', $ee100gp, $ee100grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '2', 'ME-123', $me123mid, $me123th, $me123pr, 'No', $me123gp, $me123grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '2', 'ME-124', $me124mid, $me124th, $me124pr, 'No', $me124gp, $me124grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '2', 'REE-100', $ree100mid, $ree100th, $ree100pr, 'No', $ree100gp, $ree100grade]);

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
