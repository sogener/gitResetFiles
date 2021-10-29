<?php

$inputFile = fopen('../input', 'r+');
$newFile = fopen('../result', 'r+');

$userInput = (int) readline("Выберите режим для очистки файлов: 1 - очистка git файлов. 2 - очистка веток git. ");

switch ($userInput) {
    case 1:
        while (!feof($inputFile)) {
            $lineOfText = fgets($inputFile);
//    Чистка пробелов в начале и конце строки
            $lineOfText = trim($lineOfText);

            if(!empty($lineOfText)) {
                $lineOfText = 'rm ' . $lineOfText;
            }
            fwrite($newFile, $lineOfText . PHP_EOL);
        }
        break;
    case 2:
        while (!feof($inputFile)) {
            $lineOfText = fgets($inputFile);
//    Чистка пробелов в начале и конце строки
            $lineOfText = trim($lineOfText);

            if(!empty($lineOfText)) {
                $lineOfText = 'git branch -d ' . $lineOfText;
            }
            fwrite($newFile, $lineOfText . PHP_EOL);
        }
}
return fclose($inputFile);



