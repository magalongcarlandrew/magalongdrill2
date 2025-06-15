<?php

include("functions.php"); // Includes functions for calculations

include("header.php"); // Includes header for common elements and styling

?>

<h1 style="color: rgb(141,2,31); font-family: Georgia">
    Analysis of My Scores
</h1>

<?php

$quiz1_raw = 15;
$quiz1_total = 20;
$quiz1_score = computePercentage($quiz1_raw, $quiz1_total);
echo "Quiz 1 (" . $quiz1_raw . "/" . $quiz1_total . "): " . $quiz1_score . "%<br>";

$quiz2_raw = 38;
$quiz2_total = 40;
$quiz2_score = computePercentage($quiz2_raw, $quiz2_total);
echo "Quiz 2 (" . $quiz2_raw . "/" . $quiz2_total . "): " . $quiz2_score . "%<br>";

$quiz3_raw = 92;
$quiz3_total = 100;
$quiz3_score = computePercentage($quiz3_raw, $quiz3_total);
echo "Quiz 3 (" . $quiz3_raw . "/" . $quiz3_total . "): " . $quiz3_score . "%<br>";

$overall_average = computeAverage($quiz1_score, $quiz2_score, $quiz3_score);
echo "<b>Overall Quiz Average: " . round($overall_average) . "%</b><br>";

echo "<br>";

echo "<p>This is just a sample. Try changing the raw scores to see the effect on percentages and average!</p>";

?>
    </main>
</body>
</html>
