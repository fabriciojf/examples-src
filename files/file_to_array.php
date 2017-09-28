<?php

$ddl = file('./inputs/file_to_array.in');
$content = '';

foreach($ddl as $line)
{
    if (strpos(strtoupper($line), 'CREATE TABLE') !== false) {
        $content .= $line;
    }
}

file_put_contents('file_to_array.out', $content);

?>