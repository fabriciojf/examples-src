<?php

$handle = fopen('./inputs/read-csv.in', "r");

while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
    var_dump($data);
}

fclose($handle);
?>