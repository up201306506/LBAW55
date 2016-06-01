<?php

$filetype;
$filename;

header("Content-Type: text/$filetype;");
header("Content-Disposition: attachment; filename=$filename");

echo $content;

?>