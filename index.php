<?php
include('objs.php');

 
echo "<h1> SGCS testing ground</h1>";


$newfleet = new fleet('First Fleet','me');
$newfleet->location = 'here';
echo $newfleet->location;

?>