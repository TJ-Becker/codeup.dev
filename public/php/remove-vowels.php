<?php
$alphabet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'];

    function removeVowels(&$array) {
        foreach ($array as $index => $letter) {
            if ($letter == 'a' || $letter == 'e' || $letter =='i' || $letter == 'o' || $letter == 'u') {
                unset($array[$index]);
            }
        }
    }

    print_r($alphabet);
    removeVowels($alphabet);
    print_r($alphabet);

