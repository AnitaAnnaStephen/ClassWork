<?php

require_once("header.php");

$results = Result::getAll($mysqli, $_GET['id']);

echo "<table>";
echo "<tr>";
echo "<td>Student Id</td>";
echo "<td>Score</td>";
echo "<td>Grade</td>";
echo "<td>Assessment Id</td>";
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


require_once("footer.php");

?>

