<?php

function computePercentage($rawscore, $totalscore) {
    $percentage = (($rawscore / $totalscore) * 50) + 50;
    return round($percentage, 0);
}

function computeAverage(&$score1, &$score2, &$score3) {
    $average = ($score1 + $score2 + $score3) / 3;
    return round($average, 0);
}

?>
