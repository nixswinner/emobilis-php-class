<?php

//Store subjects and their marks , to find average mark and show large mark - Grade the mark 
//Total of Values/number of values
// 1,3,4,5,6  ==1+3+4+5+6 =(19/5)

$subjects = array("Math"=>89,"English"=>72,"Biology"=>80,"Chemistry"=>98,"Physics"=>76);
//echo "First subject ".$subjects[67]."<br>";

//echo count($subjects)."<br>";
$no_subjects = count($subjects); //5
$totalmarks=0;
foreach ($subjects as $subject_name => $mark) {
	$totalmarks+=$mark; // $totalmarks=$totalmarks+$mark
	echo "$subject_name --- $mark <br>";

}
echo "<br> Total = $totalmarks";
//
$average = $totalmarks/$no_subjects;
echo "<br> Average Mark: $average";

?>