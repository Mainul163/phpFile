<?php

$file=fopen("simple.txt","r") or die ("operation failed");

echo fread($file,filesize("simple.txt"));
fclose($file);






?>