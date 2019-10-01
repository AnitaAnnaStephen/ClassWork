<?php require_once("header.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enter Result</title>
     <?php $student = Student::find($mysqli, $_GET['id']);?> 
</head>
<body>

<h1>Enter Result</h1>

<form method="post" action="addStudentResult.php" enctype="application/x-www-form-urlencoded">
<p><label>Student Id</label><input name="studentId" type="text" value="<?php echo $student->getStudentId();?>"></p> 
<p><label>Title</label><input name="title" type="text"></p>
<p><label>Score</label><input name="score" type="text"></p>
<p><label>Grade</label><input name="grade" type="text"></p>
<p><input type="submit" value="Add Result"></p>
</form>

</body>
</html>