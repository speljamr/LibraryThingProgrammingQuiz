<?php
$paragraph = "That interviews should involve simple code is now common wisdom in programming circles. The story is that a high percentage of programmers, even people with impressive resumes, \"just can't code.\" Asked to do the simplest things � problems a good coders could solve as fast they could write � some spend ten or twenty minutes before they get an answer, or fail entirely. (See discussion by Jeff Attwood and Joel Spolsky.) I don't go as far as others here. I think a lot of \"slow coders\" are probably excellent employees, making up for it in other areas. Some projects don't need speed. Some people just need to spend more time programming; everyone was a slow programmer some time. But I know from experience that slow coders don't work at LibraryThing. They don't fit the LibraryThing development culture.";

$words = split(' ', $paragraph);
$count_bucket = array();
foreach ($words as $word){
	$word = preg_replace('/["\'\.;�()?]/', '', $word);
	$size = strlen($word);
	$count_bucket["$size"] = $count_bucket["$size"] + 1;
}
ksort($count_bucket);
foreach ($count_bucket as $key => $count){
	echo $count . " words with " . $key . " letters\n";
}
?>


