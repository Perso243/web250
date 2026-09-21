<?php

include 'autoload.php';

$flycatcher = new Bird(['commonName'=>'Acadian Flycatcher', 'latinName'=>'Turdus migratorius']);
echo $flycatcher->description() . "<br>";

?>
