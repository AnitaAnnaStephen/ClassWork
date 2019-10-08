<?php

require_once("header.php");

$results = Result::getAll($mysqli, $_GET['id']);
echo "<h2>All Results</h2>";
echo "<table>";
echo "<tr>";
echo "<td><b>Student Id</b></td>";
echo "<td><b>Score</b></td>";
echo "<td><b>Grade</b></td>";
echo "<td><b>Assessment Id</b></td>";
echo "</tr>";
foreach($results->getRecords() as $id => $result){
    echo "<tr>";
    echo "<td>".$result->getSId()."</td>";
    echo "<td>".$result->getScore()."</td>";
    echo "<td>".$result->getGrade()."</td>";
    echo "<td>".$result->getAssessmentId()."</td>";
    echo "</tr>";
}
echo "</table>";
echo "<p><a href=\"showAllStudents.php\">Show All Students</a></p>";

require_once("footer.php");

?>

