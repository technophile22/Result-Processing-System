<?php
require_once('config.php');

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<meta name="viewport" content="width=device-width">
<script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
</head>

<body>

<div class="container-fluid">


  <h1 style="font-size:18px;">Result Processing System</h1>

<?php
$data =$db->prepare("SELECT distinct roll_no FROM result");
    $data->execute();
    $student = $data->fetch(PDO::FETCH_OBJ);
    $roll_no=$student->roll_no;
  try {

  
   $sql = "SELECT Sem_no,
                   SGPA,
                   OGPA
              FROM student_result
              where Roll_no='$roll_no'
             ";

   $data = $db->prepare($sql);
   $data->execute();
   $res=$data->fetchall(PDO::FETCH_OBJ);
} catch (PDOException $e) {
   die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>



           <h1>RESULT</h1>
           <table class="table table-bordered table-condensed" style="width:600px;" >
               <thead>
                   <tr>
                       <th>SEMESTER</th>
                       <th>SGPA</th>
                       <th>OGPA</th>
                       
                   </tr>
               </thead>
               <tbody>
                   <?php foreach($res as $row){ ?>
                       <tr>
                           <td><?php echo htmlspecialchars($row->Sem_no) ?></td>
                           <td><?php echo htmlspecialchars($row->SGPA); ?></td>
                           <td><?php echo htmlspecialchars($row->OGPA); ?></td>
                       </tr>
                   <?php } ?>
               </tbody>
           </table>

</div>



<div class="container-fluid">


<?php
  try {


   $sql = 'SELECT course_no,course_name, credit, midterm_marks, theory_marks, practical_marks, gp, grade_points, credit_points
              FROM result
             WHERE SEM = 1';

   $q = $db->query($sql);
   $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
   die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>



           <h1>SEMESTER 1 RESULT</h1>
           <table class="table table-bordered table-condensed" style="width:600px;" >
               <thead>
                   <tr>
                       <th>COURSE NO.</th>
                       <th>COURSE NAME</th>
                       <th>TOTAL CREDITS</th>
                       <th>MIDTERM MARKS</th>
                       <th>THEORY MARKS</th>
                       <th>PRACTICAL MARKS</th>
                       <th>TOTAL MARKS</th>
                       <th>GRADE POINTS</th>
                       <th>CREDIT POINTS</th>
                   </tr>
               </thead>
               <tbody>
                   <?php while ($row = $q->fetch()): ?>
                       <tr>
                           <td><?php echo htmlspecialchars($row['course_no']) ?></td>
                           <td><?php echo htmlspecialchars($row['course_name']); ?></td>
                           <td><?php echo htmlspecialchars($row['credit']); ?></td>
                           <td><?php echo htmlspecialchars($row['midterm_marks']); ?></td>
                           <td><?php echo htmlspecialchars($row['theory_marks']); ?></td>
                           <td><?php echo htmlspecialchars($row['practical_marks']); ?></td>
                           <td><?php echo htmlspecialchars($row['gp']); ?></td>
                           <td><?php echo htmlspecialchars($row['grade_points']); ?></td>
                           <td><?php echo htmlspecialchars($row['credit_points']); ?></td>

                       </tr>
                   <?php endwhile; ?>
               </tbody>
           </table>


                      <?php
                        try {


                         $sql = "SELECT *
                                    FROM student_result
                                   WHERE Sem_no = 1 AND Roll_no='$roll_no'";

                         $data = $db->prepare($sql);
                         $data->execute();
                        $res=$data->fetch(PDO::FETCH_OBJ); 
                      } catch (PDOException $e) {
                         die("Could not connect to the database $dbname :" . $e->getMessage());
                      } ?>
                  
                       <h3 style="color:white;">  SGPA = <?php echo htmlspecialchars($res->SGPA) ?></h3>
                       <h3 style="color:white;">  OGPA = <?php echo htmlspecialchars($res->OGPA) ?></h3>
                    
</div>


<div class="container-fluid">


<?php
  try {


   $sql = 'SELECT course_no,course_name, credit, midterm_marks, theory_marks, practical_marks, gp, grade_points, credit_points
              FROM result
             WHERE SEM = 2';

   $q = $db->query($sql);
   $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
   die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>



           <h1>SEMESTER 2 RESULT</h1>
           <table class="table table-bordered table-condensed" style="width:600px;" >
               <thead>
                   <tr>
                       <th>COURSE NO.</th>
                       <th>COURSE NAME</th>
                       <th>TOTAL CREDITS</th>
                       <th>MIDTERM MARKS</th>
                       <th>THEORY MARKS</th>
                       <th>PRACTICAL MARKS</th>
                       <th>TOTAL MARKS</th>
                       <th>GRADE POINTS</th>
                       <th>CREDIT POINTS</th>
                   </tr>
               </thead>
               <tbody>
                   <?php while ($row = $q->fetch()): ?>
                       <tr>
                           <td><?php echo htmlspecialchars($row['course_no']) ?></td>
                           <td><?php echo htmlspecialchars($row['course_name']); ?></td>
                           <td><?php echo htmlspecialchars($row['credit']); ?></td>
                           <td><?php echo htmlspecialchars($row['midterm_marks']); ?></td>
                           <td><?php echo htmlspecialchars($row['theory_marks']); ?></td>
                           <td><?php echo htmlspecialchars($row['practical_marks']); ?></td>
                           <td><?php echo htmlspecialchars($row['gp']); ?></td>
                           <td><?php echo htmlspecialchars($row['grade_points']); ?></td>
                           <td><?php echo htmlspecialchars($row['credit_points']); ?></td>

                       </tr>
                   <?php endwhile; ?>
               </tbody>
           </table>


                      <?php
                        try {


                         $sql = "SELECT *
                                    FROM student_result
                                   WHERE Sem_no = 2 AND Roll_no='$roll_no'";

                         $data = $db->prepare($sql);
                         $data->execute();
                        $res=$data->fetch(PDO::FETCH_OBJ); 
                      } catch (PDOException $e) {
                         die("Could not connect to the database $dbname :" . $e->getMessage());
                      } ?>
                  
                       <h3 style="color:white;">  SGPA = <?php echo htmlspecialchars($res->SGPA) ?></h3>
                       <h3 style="color:white;">  OGPA = <?php echo htmlspecialchars($res->OGPA) ?></h3>

</div>

<div class="container-fluid">


<?php
  try {


   $sql = 'SELECT course_no,course_name, credit, midterm_marks, theory_marks, practical_marks, gp, grade_points, credit_points
              FROM result
             WHERE SEM = 3';

   $q = $db->query($sql);
   $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
   die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>



           <h1>SEMESTER 3 RESULT</h1>
           <table class="table table-bordered table-condensed" style="width:600px;" >
               <thead>
                   <tr>
                       <th>COURSE NO.</th>
                       <th>COURSE NAME</th>
                       <th>TOTAL CREDITS</th>
                       <th>MIDTERM MARKS</th>
                       <th>THEORY MARKS</th>
                       <th>PRACTICAL MARKS</th>
                       <th>TOTAL MARKS</th>
                       <th>GRADE POINTS</th>
                       <th>CREDIT POINTS</th>
                   </tr>
               </thead>
               <tbody>
                   <?php while ($row = $q->fetch()): ?>
                       <tr>
                           <td><?php echo htmlspecialchars($row['course_no']) ?></td>
                           <td><?php echo htmlspecialchars($row['course_name']); ?></td>
                           <td><?php echo htmlspecialchars($row['credit']); ?></td>
                           <td><?php echo htmlspecialchars($row['midterm_marks']); ?></td>
                           <td><?php echo htmlspecialchars($row['theory_marks']); ?></td>
                           <td><?php echo htmlspecialchars($row['practical_marks']); ?></td>
                           <td><?php echo htmlspecialchars($row['gp']); ?></td>
                           <td><?php echo htmlspecialchars($row['grade_points']); ?></td>
                           <td><?php echo htmlspecialchars($row['credit_points']); ?></td>

                       </tr>
                   <?php endwhile; ?>
               </tbody>
           </table>


                     <?php
                        try {


                         $sql = "SELECT *
                                    FROM student_result
                                   WHERE Sem_no = 3 AND Roll_no='$roll_no'";

                         $data = $db->prepare($sql);
                         $data->execute();
                        $res=$data->fetch(PDO::FETCH_OBJ); 
                      } catch (PDOException $e) {
                         die("Could not connect to the database $dbname :" . $e->getMessage());
                      } ?>
                  
                       <h3 style="color:white;">  SGPA = <?php echo htmlspecialchars($res->SGPA) ?></h3>
                       <h3 style="color:white;">  OGPA = <?php echo htmlspecialchars($res->OGPA) ?></h3>

</div>

<div class="container-fluid">


<?php
  try {


   $sql = 'SELECT course_no,course_name, credit, midterm_marks, theory_marks, practical_marks, gp, grade_points, credit_points
              FROM result
             WHERE SEM = 4';

   $q = $db->query($sql);
   $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
   die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>



           <h1>SEMESTER 4 RESULT</h1>
           <table class="table table-bordered table-condensed" style="width:600px;" >
               <thead>
                   <tr>
                       <th>COURSE NO.</th>
                       <th>COURSE NAME</th>
                       <th>TOTAL CREDITS</th>
                       <th>MIDTERM MARKS</th>
                       <th>THEORY MARKS</th>
                       <th>PRACTICAL MARKS</th>
                       <th>TOTAL MARKS</th>
                       <th>GRADE POINTS</th>
                       <th>CREDIT POINTS</th>
                   </tr>
               </thead>
               <tbody>
                   <?php while ($row = $q->fetch()): ?>
                       <tr>
                           <td><?php echo htmlspecialchars($row['course_no']) ?></td>
                           <td><?php echo htmlspecialchars($row['course_name']); ?></td>
                           <td><?php echo htmlspecialchars($row['credit']); ?></td>
                           <td><?php echo htmlspecialchars($row['midterm_marks']); ?></td>
                           <td><?php echo htmlspecialchars($row['theory_marks']); ?></td>
                           <td><?php echo htmlspecialchars($row['practical_marks']); ?></td>
                           <td><?php echo htmlspecialchars($row['gp']); ?></td>
                           <td><?php echo htmlspecialchars($row['grade_points']); ?></td>
                           <td><?php echo htmlspecialchars($row['credit_points']); ?></td>

                       </tr>
                   <?php endwhile; ?>
               </tbody>
           </table>


                      <?php
                        try {


                         $sql = "SELECT *
                                    FROM student_result
                                   WHERE Sem_no = 4 AND Roll_no='$roll_no'";

                         $data = $db->prepare($sql);
                         $data->execute();
                        $res=$data->fetch(PDO::FETCH_OBJ); 
                      } catch (PDOException $e) {
                         die("Could not connect to the database $dbname :" . $e->getMessage());
                      } ?>
                  
                       <h3 style="color:white;">  SGPA = <?php echo htmlspecialchars($res->SGPA) ?></h3>
                       <h3 style="color:white;">  OGPA = <?php echo htmlspecialchars($res->OGPA) ?></h3>

</div>

<div class="container-fluid">


<?php
  try {


   $sql = 'SELECT course_no,course_name, credit, midterm_marks, theory_marks, practical_marks, gp, grade_points, credit_points
              FROM result
             WHERE SEM = 5';

   $q = $db->query($sql);
   $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
   die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>



           <h1>SEMESTER 5 RESULT</h1>
           <table class="table table-bordered table-condensed" style="width:600px;" >
               <thead>
                   <tr>
                       <th>COURSE NO.</th>
                       <th>COURSE NAME</th>
                       <th>TOTAL CREDITS</th>
                       <th>MIDTERM MARKS</th>
                       <th>THEORY MARKS</th>
                       <th>PRACTICAL MARKS</th>
                       <th>TOTAL MARKS</th>
                       <th>GRADE POINTS</th>
                       <th>CREDIT POINTS</th>
                   </tr>
               </thead>
               <tbody>
                   <?php while ($row = $q->fetch()): ?>
                       <tr>
                           <td><?php echo htmlspecialchars($row['course_no']) ?></td>
                           <td><?php echo htmlspecialchars($row['course_name']); ?></td>
                           <td><?php echo htmlspecialchars($row['credit']); ?></td>
                           <td><?php echo htmlspecialchars($row['midterm_marks']); ?></td>
                           <td><?php echo htmlspecialchars($row['theory_marks']); ?></td>
                           <td><?php echo htmlspecialchars($row['practical_marks']); ?></td>
                           <td><?php echo htmlspecialchars($row['gp']); ?></td>
                           <td><?php echo htmlspecialchars($row['grade_points']); ?></td>
                           <td><?php echo htmlspecialchars($row['credit_points']); ?></td>

                       </tr>
                   <?php endwhile; ?>
               </tbody>

           </table>



          <?php
                        try {


                         $sql = "SELECT *
                                    FROM student_result
                                   WHERE Sem_no = 5 AND Roll_no='$roll_no'";

                         $data = $db->prepare($sql);
                         $data->execute();
                        $res=$data->fetch(PDO::FETCH_OBJ); 
                      } catch (PDOException $e) {
                         die("Could not connect to the database $dbname :" . $e->getMessage());
                      } ?>
                  
                       <h3 style="color:white;">  SGPA = <?php echo htmlspecialchars($res->SGPA) ?></h3>
                       <h3 style="color:white;">  OGPA = <?php echo htmlspecialchars($res->OGPA) ?></h3>


</div>



<div class="container-fluid">


<?php
  try {


   $sql = 'SELECT course_no,course_name, credit, midterm_marks, theory_marks, practical_marks, gp, grade_points, credit_points
              FROM result
             WHERE grade_points < 4';

   $q = $db->query($sql);
   $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
   die("Could not connect to the database $dbname :" . $e->getMessage());
}
$table_delete = "DROP TABLE result";
$db->exec($table_delete);
?>



           <h1>BACKLOGS</h1>
           <table class="table table-bordered table-condensed" style="width:600px;" >
               <thead>
                   <tr>
                       <th>COURSE NO.</th>
                       <th>COURSE NAME</th>
                       <th>TOTAL CREDITS</th>
                       <th>MIDTERM MARKS</th>
                       <th>THEORY MARKS</th>
                       <th>PRACTICAL MARKS</th>
                       <th>TOTAL MARKS</th>
                       <th>GRADE POINTS</th>
                       <th>CREDIT POINTS</th>
                   </tr>
               </thead>
               <tbody>
                   <?php while ($row = $q->fetch()): ?>
                       <tr>
                           <td><?php echo htmlspecialchars($row['course_no']) ?></td>
                           <td><?php echo htmlspecialchars($row['course_name']); ?></td>
                           <td><?php echo htmlspecialchars($row['credit']); ?></td>
                           <td><?php echo htmlspecialchars($row['midterm_marks']); ?></td>
                           <td><?php echo htmlspecialchars($row['theory_marks']); ?></td>
                           <td><?php echo htmlspecialchars($row['practical_marks']); ?></td>
                           <td><?php echo htmlspecialchars($row['gp']); ?></td>
                           <td><?php echo htmlspecialchars($row['grade_points']); ?></td>
                           <td><?php echo htmlspecialchars($row['credit_points']); ?></td>

                       </tr>
                   <?php endwhile; ?>
               </tbody>
           </table>



</div>

<script>

var $input = $('.form-fieldset > input');

$input.blur(function (e) {
  $(this).toggleClass('filled', !!$(this).val());
});
</script>





<!---css----->
<style>

*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: black;

}

table {
  width: 100%;
  margin: 10px auto;
   border: 1px solid white;
}



thead th {
  font-weight: 300;
  background: #363e4a;
  color: #FFF;

}

tr {
  background: #708090;
  border-bottom: 1px solid #FFF;
  margin-bottom: 4px;
}

tr:nth-child(even) {
  background: #363e4a;
}

th, td {
  text-align: left;
  padding: 15px;
  font-weight: 300;
  border: 1px solid white;
  font-size: 15px;

}

@import "bourbon";
 body {
	 background-color: #363e4a;
	 font-family: "Avenir Next", "Avenir", "Helvetica Neue", Helvetica, Arial, sans-serif;
	 font-size: 16px;
	 color: #fff;
	 line-height: 1.5;
}
 h1 {
	 font-family: "Texta", "Avenir Next", "Avenir", "Helvetica Neue", Helvetica, Arial, sans-serif;
	 font-weight: 700;
	 text-transform: uppercase;
	 letter-spacing: 4px;
	 text-align: center;
}
 h2 {
	 font-weight: 400;
	 font-size: 24px;
	 color: rgba(255, 255, 255, .5);
   font-family: 'Roboto', sans-serif;
}
 .container-fluid {

	 margin: 0 auto;
	 padding: 20px 16px 40px 16px;
	 transform: translateZ(0);
	 text-align: center;

}
 .form-footer {
	 margin-top: 2em;
}
 .ui-input {
	 position: relative;
	 padding: 0;
	 border: 0;
}
 .ui-input input {
	 font-family: "Avenir Next", "Avenir", "Helvetica Neue", Helvetica, Arial, sans-serif;
	 border: 0;
	 background: none;
	 padding: 16px 0 16px 0;
	 font-size: 24px;
	 outline: 0;
	 width: 100%;
	 tap-highlight-color: rgba(0, 0, 0, 0);
	 touch-callout: none;
}
 .ui-input input + label {
	 position: relative;
	 display: block;
	 padding: 8px 0 8px 0;
	 text-transform: uppercase;
	 font-size: 14px;
	 letter-spacing: 0.0875em;
	 font-weight: 500;
	 text-align: left;
}
 .ui-input input + label::before, .ui-input input + label::after {
	 position: absolute;
	 top: 0;
	 left: 0;
	 content: "";
	 width: 100%;
	 height: 1px;
}
 .ui-input input + label::before {
	 background-color: rgba(255, 255, 255, .2);
}
 .ui-input input + label::after {
	 transform: scaleX(0);
	 transform-origin: left;
	 transition: transform 300ms cubic-bezier(0.215, 0.61, 0.355, 1);
	 background-color: #6eb1ff;
	 height: 2px;
}
 .ui-input input + label span {
	 position: absolute;
	 color: rgba(255, 255, 255, .2);
	 transition: color 300ms cubic-bezier(0.215, 0.61, 0.355, 1);
}
 .ui-input input + label span::after {
	 content: attr(data-text);
	 position: absolute;
	 overflow: hidden;
	 left: 0;
	 transform: scaleX(1);
	 white-space: nowrap;
	 color: #fff;
	 background-image: linear-gradient(to right, #4a90e2 50%, rgba(255, 255, 255, 0) 0%);
	 background-position: 100% 50%;
	 background-size: 200%;
	 -webkit-background-clip: text;
	 -webkit-text-fill-color: transparent;
	 backface-visibility: hidden;
	 perspective: 1000;
	 transform: translateZ(0);
	 transition: background-position 300ms cubic-bezier(0.215, 0.61, 0.355, 1);
}
 .ui-input input:focus + label::after, .ui-input input.error + label::after, .ui-input input:invalid + label::after, .ui-input input.filled + label::after {
	 transform: scaleX(1);
	 transform-origin: left;
}
 .ui-input input:focus + label span::after, .ui-input input.error + label span::after, .ui-input input:invalid + label span::after, .ui-input input.filled + label span::after {
	 background-image: linear-gradient(to right, rgba(255, 255, 255, 1) 50%, rgba(255, 255, 255, 0) 0%);
	 background-position: 0% 50%;
}
 .ui-input input.filled {
	 color: #fff;
}
 .ui-input input.filled + label::after {
	 background-color: #fff;
}
 .ui-input input.filled + label span::after {
	 background-image: linear-gradient(to right, #fff 50%, rgba(255, 255, 255, 0) 0%);
	 background-position: 0% 50%;
}
 .ui-input input:focus {
	 color: #6eb1ff;
}
 .ui-input input:focus + label::after {
	 background-color: #6eb1ff;
}
 .ui-input input:focus + label span::after {
	 background-image: linear-gradient(to right, #6eb1ff 50%, rgba(255, 255, 255, 0) 0%);
	 background-position: 0% 50%;
}
 .ui-input input.error, .ui-input input:invalid {
	 color: #e66161;
}
 .ui-input input.error + label::after, .ui-input input:invalid + label::after {
	 background-color: #e66161;
}
 .ui-input input.error + label span::after, .ui-input input:invalid + label span::after {
	 background-image: linear-gradient(to right, #e66161 50%, rgba(255, 255, 255, 0) 0%);
	 background-position: 0% 50%;
}
 .btn {
	 border: 0;
	 background-color: #50617a;
	 padding: 18px 30px;
	 font-size: 14px;
	 line-height: 1.5;
	 text-transform: uppercase;
	 letter-spacing: 0.0875em;
	 font-weight: 500;
	 color: #fff;
	 font-family: "Avenir Next", "Avenir", "Helvetica Neue", Helvetica, Arial, sans-serif;
	 border-radius: 100px;
	 outline: 0;
	 transition: background-color 300ms cubic-bezier(0.215, 0.61, 0.355, 1), color 300ms cubic-bezier(0.215, 0.61, 0.355, 1);
}
 .btn:focus, .btn:active, .btn:hover {
	 background-color: #6eb1ff;
	 color: white;
}
 .__first, .__second, .__third, .__fourth, .__fifth {
	 animation-name: fadeIn;
	 animation-duration: 180ms;
	 animation-fill-mode: both;
	 animation-iteration-count: 1;
}
 .__first {
	 animation-delay: 0;
}
 .__second {
	 animation-delay: 80ms;
}
 .__third {
	 animation-delay: 180ms;
}
 .__fourth {
	 animation-delay: 360ms;
}
.__fifth {
  animation-delay: 400ms;
}

 @keyframes fadeIn {
	 from {
		 opacity: 0;
		 transform: translate3d(0, -25%, 0);
	}
	 to {
		 opacity: 1;
		 transform: translate3d(0, 0, 0);
	}
}

</style>

</body>
</html>
