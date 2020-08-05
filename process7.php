<?php
require_once('config.php');

?>
<?php

if(isset($_POST)){

/*
try{
		$sql =" CREATE TABLE result as SELECT * from marks_obtained join courses on courses.courseno = marks_obtained.course_no";
    $db->exec($sql);
		echo "Successfully created.";
	}
	catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
*/
/*
try{
		$sql ="  ALTER TABLE result ADD credit_points FLOAT AS (grade_points*credit)";
		$db->query($sql);

		echo "Successfully created.";
	}
	catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
*/

$roll_no 		= $_POST['roll_no'];
try{
	
	$sql =" CREATE TABLE result as SELECT * from marks_obtained join courses on courses.courseno = marks_obtained.course_no WHERE marks_obtained.roll_no='$roll_no'";
	$db->exec($sql);

	$sql ="  ALTER TABLE result ADD credit_points FLOAT AS (grade_points*credit)";
	$db->query($sql);


		$cps =$db->prepare("SELECT sum(credit_points) AS value_sum FROM result WHERE sem=1");
		$cps->execute();
		$row = $cps->fetchObject();
		$sum1 = $row->value_sum;

		$cps =$db->prepare("SELECT sum(credit_points) AS value_sum FROM result WHERE sem=2");
		$cps->execute();
		$row = $cps->fetchObject();
		$sum2 = $row->value_sum;

		$cps =$db->prepare("SELECT sum(credit_points) AS value_sum FROM result WHERE sem=3");
		$cps->execute();
		$row = $cps->fetchObject();
		$sum3 = $row->value_sum;

		$cps =$db->prepare("SELECT sum(credit_points) AS value_sum FROM result WHERE sem=4");
		$cps->execute();
		$row = $cps->fetchObject();
		$sum4 = $row->value_sum;

		$cps =$db->prepare("SELECT sum(credit_points) AS value_sum FROM result WHERE sem=5");
		$cps->execute();
		$row = $cps->fetchObject();
		$sum5 = $row->value_sum;


		$cps =$db->prepare("SELECT sum(credit) AS value_sum FROM result WHERE sem=1");
		$cps->execute();
		$row = $cps->fetchObject();
		$cre1 = $row->value_sum;


		$cps =$db->prepare("SELECT sum(credit) AS value_sum FROM result WHERE sem=2");
		$cps->execute();
		$row = $cps->fetchObject();
		$cre2 = $row->value_sum;


		$cps =$db->prepare("SELECT sum(credit) AS value_sum FROM result WHERE sem=3");
		$cps->execute();
		$row = $cps->fetchObject();
		$cre3 = $row->value_sum;


		$cps =$db->prepare("SELECT sum(credit) AS value_sum FROM result WHERE sem=4");
		$cps->execute();
		$row = $cps->fetchObject();
		$cre4 = $row->value_sum;


		$cps =$db->prepare("SELECT sum(credit) AS value_sum FROM result WHERE sem=5");
		$cps->execute();
		$row = $cps->fetchObject();
		$cre5 = $row->value_sum;


 $sgpa1 = $sum1/$cre1;
 $sgpa2 = $sum2/$cre2;
 $sgpa3 = $sum3/$cre3;
 $sgpa4 = $sum4/$cre4;
 $sgpa5 = $sum5/$cre5;

 $ogpa1 = $sgpa1;
 $ogpa2 = ($sum1 + $sum2)/($cre1 + $cre2);
$ogpa3 = ($sum1 + $sum2 + $sum3)/($cre1 + $cre2 + $cre3);
$ogpa4 = ($sum1 + $sum2 + $sum3 + $sum4)/($cre1 + $cre2 + $cre3 + $cre4);
$ogpa5 = ($sum1 + $sum2 + $sum3 + $sum4 + $sum5)/($cre1 + $cre2 + $cre3 + $cre4 +$cre5);

	$sql = "INSERT INTO student_result (Roll_no,Sem_no,SGPA,OGPA) VALUES(?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$roll_no, '1', $sgpa1, $ogpa1]);

		$sql = "INSERT INTO student_result (Roll_no,Sem_no,SGPA,OGPA) VALUES(?,?,?,?)";
			$stmtinsert = $db->prepare($sql);
			$result = $stmtinsert->execute([$roll_no, '2', $sgpa2, $ogpa2]);

			$sql = "INSERT INTO student_result (Roll_no,Sem_no,SGPA,OGPA) VALUES(?,?,?,?)";
				$stmtinsert = $db->prepare($sql);
				$result = $stmtinsert->execute([$roll_no, '3', $sgpa3, $ogpa3]);

				$sql = "INSERT INTO student_result (Roll_no,Sem_no,SGPA,OGPA) VALUES(?,?,?,?)";
					$stmtinsert = $db->prepare($sql);
					$result = $stmtinsert->execute([$roll_no, '4', $sgpa4, $ogpa4]);

					$sql = "INSERT INTO student_result (Roll_no,Sem_no,SGPA,OGPA) VALUES(?,?,?,?)";
						$stmtinsert = $db->prepare($sql);
						$result = $stmtinsert->execute([$roll_no, '5', $sgpa5, $ogpa5]);


		echo "Successfully created.";
		
	}
	catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

/*
		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute(['1', '2017', '5', 'CS-311', $cs311mid, $cs311th, $cs311pr, 'No', $cs311gp, $cs311grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute(['1', '2017', '5', 'CS-312', $cs312mid, $cs312th, $cs312pr, 'No', $cs312gp, $cs312grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute(['1', '2017', '5', 'CS-313', $cs313mid, $cs313th, $cs313pr, 'No', $cs313gp, $cs313grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute(['1', '2017', '5', 'CS-314', $cs314mid, $cs314th, $cs314pr, 'No', $cs314gp, $cs314grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute(['1', '2017', '5', 'CS-315', $cs315mid, $cs315th, $cs315pr, 'No', $cs315gp, $cs315grade]);

		$sql = "INSERT INTO marks_obtained (roll_no,batch_no,SEM,course_no,midterm_marks,theory_marks, practical_marks, backlog,gp, grade_points)
		VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute(['1', '2017', '5', 'EC-319', $ec319mid, $ec319th, $ec319pr, 'No', $ec319gp, $ec319grade]);


*/

	//	$sql = "SELECT * FROM users";
  //  $res = $db->query($sql);
  //  foreach ($res as $row) {
  //      $id = $row["id"];
    }
	/*	if($result){
			echo 'Successfully entered. click OK. ' ;
		}else{
			echo 'There were erros while saving the data. Try Again';
		}
*/

$db=null;
?>
