<?php

$phrase = "";

for ($i = 1; $i < 100; $i++) {
    if ($i % 3 == 0) {
        $phrase .= 'Fizz';
    }

    if ($i % 5 == 0) {
        $phrase .= 'Buzz';
    }

    if (strlen($phrase) > 1) {
        echo "$i -> $phrase" . PHP_EOL;
    }

    $phrase = "";
}
