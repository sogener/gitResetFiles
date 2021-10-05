<?php

$inputFile = fopen('../input', 'r+');
$newFile = fopen('../result', 'r+');

while (!feof($inputFile)) {
    $lineOfText = fgets($inputFile);
//    Чистка пробелов в начале и конце строки
    $lineOfText = trim($lineOfText);

    if(!empty($lineOfText)) {
        $lineOfText = 'rm ' . $lineOfText;
    }
    fwrite($newFile, $lineOfText . PHP_EOL);
}
return fclose($inputFile);
