<?php
require_once('config.php');

?>
<?php
$data =$db->prepare("SELECT  * FROM students  ORDER BY  Roll_no DESC LIMIT 1");
		$data->execute();
		$student = $data->fetch(PDO::FETCH_OBJ);
		$roll_no=$student->Roll_no;
if(isset($_POST)){

	$bs222mid 		= $_POST['bs222mid'];
	$bs222th  = $_POST['bs222th'];
	$bs222pr 	= $_POST['bs222pr'];
  $bs222gp = $bs222mid + $bs222th + $bs222pr;
	$bs222grade = $bs222gp/10;

	$cs221mid 		= $_POST['cs221mid'];
	$cs221th  = $_POST['cs221th'];
	$cs221pr 	= $_POST['cs221pr'];
	$cs221gp = $cs221mid + $cs221th + $cs221pr;
	$cs221grade = $cs221gp/10;

	$cs222mid 		= $_POST['cs222mid'];
	$cs222th  = $_POST['cs222th'];
	$cs222pr 	= $_POST['cs222pr'];
	$cs222gp = $cs222mid + $cs222th + $cs222pr;
	$cs222grade = $cs222gp/10;

	$cs224mid 		= $_POST['cs224mid'];
	$cs224th  = $_POST['cs224th'];
	$cs224pr 	= $_POST['cs224pr'];
	$cs224gp = $cs224mid + $cs224th + $cs224pr;
	$cs224grade = $cs224gp/10;

	$cs225mid 		= $_POST['cs225mid'];
	$cs225th  = $_POST['cs225th'];
	$cs225pr 	= $_POST['cs225pr'];
	$cs225gp = $cs225mid + $cs225th + $cs225pr;
	$cs225grade = $cs225gp/10;

	$ec228mid 		= $_POST['ec228mid'];
	$ec228th  = $_POST['ec228th'];
	$ec228pr 	= $_POST['ec228pr'];
	$ec228gp = $ec228mid + $ec228th + $ec228pr;
	$ec228grade = $ec228gp/10;





		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '4', 'BS-222', $bs222mid, $bs222th, $bs222pr, 'No', $bs222gp, $bs222grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '4', 'CS-221', $cs221mid, $cs221th, $cs221pr, 'No', $cs221gp, $cs221grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '4', 'CS-222', $cs222mid, $cs222th, $cs222pr, 'No', $cs222gp, $cs222grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '4', 'CS-224', $cs224mid, $cs224th, $cs224pr, 'No', $cs224gp, $cs224grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '4', 'CS-225', $cs225mid, $cs225th, $cs225pr, 'No', $cs225gp, $cs225grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '2017', '4', 'EC-228', $ec228mid, $ec228th, $ec228pr, 'No', $ec228gp, $ec228grade]);




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
