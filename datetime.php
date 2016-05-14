<?php

// set the date and time with a certain date and time 
$raw = '22. 11. 2016';
$start = DateTime::createFromFormat('d. m. Y', $raw);

echo 'Start date: ' . $start->format('Y-m-d') . "\n";

?> 
