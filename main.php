<?php
function isPalindrom(string $word) {
    for ($i = 0, $j = strlen($word) - 1; $i < strlen($word)/2; $i++, $j--) {
        if($word[$i] != $word[$j])
            return false;
    }
    return true;
}

echo isPalindrom("ANAK");