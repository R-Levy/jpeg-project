<?php
$file = fopen("counter.txt", "r");
$counter = fread($file, filesize("counter.txt"));
fclose($file);
echo $counter;
?>