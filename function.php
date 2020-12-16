<?php

function get_tutorial_videos() :array {
    $files = scandir('videos');
    if ($files === false) {
        return [];
    }

    return $files;
}

function is_video_asked() :bool {
    return array_key_exists('video', $_GET) && $_GET['video'] !== '';
}
