<?php

function get_tutorial_videos() :array {
    $files = scandir('videos');
    if ($files === false) {
        return [];
    }

    return $files;
}


