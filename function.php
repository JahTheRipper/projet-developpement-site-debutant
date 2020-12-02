<?php

function get_tutorial_videos() :array {
    $files = scandir('videos');
    if ($files === false) {
        return [];
    }

    return $files;
}

function printEvenNumbers(int $start, int $end): void
{
    $found = false;
    for ($i = $start; $i <= $end; ++$i) {
        if ($i % 2 === 0) {
            if ($found === true) {
                echo ' - ';
            } else {
                $found = true;
            }

            echo $i;
        }
    }
}
