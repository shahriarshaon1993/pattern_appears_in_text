<?php

function patternFind($text, $pattern) {
    $count = 0;
    $patternLen = strlen($pattern);
    $text_len = strlen($text);
    for ($i = 0; $i <= $text_len - $patternLen; $i++) {
        if (substr($text, $i, $patternLen) == $pattern) {
            $count++;
        }
    }
    return $count;
}

$text = "tadadattaetadadadafa";
$pattern = "dada";
$count = patternFind($text, $pattern);
echo "The pattern $pattern appears $count";