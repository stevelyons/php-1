<?php
$x = 75;
$y = 25;
 
 // global variables are available in multiple scopes through out php
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;
?> 
