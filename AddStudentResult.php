<?php

require_once("header.php");

$newResult = Result::create($mysqli, $_POST['studentId'], $_POST['title'], $_POST['score'], $_POST['grade']);

if (is_null($newResult)){
    "<h2>failed to add result</h2>";
} else {
    echo "<p>Results added</p>";
    echo "<p><a href=\"showallStudents.php\">show all students</a></p>";
    echo "<p><a href=\"showAllResults.php?id=".$_POST['studentId']."\">Show All Results</a></p>";
}


require_once("footer.php");

?>