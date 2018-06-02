<?php
sleep(1);
$messagelist = array(
    '死鬼，还不快来',
    '真坏',
    '讨厌',
	);
$randomKey = array_rand($messagelist,1);
echo $messagelist[$randomKey];
?>