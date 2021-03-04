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

function get_asked_video_id() :int {
    if (!is_video_asked()) {
        return 0;
    }

    return (int) $_GET['video'];
}

function display_video_navigation_link(?int $videoId, string $videoName) :void {
    echo '<a href="?video=' . $videoId . '" class="btn btn-primary">' . $videoName . '</a>';
}

function login(string $email) :void {
    $_SESSION['email'] = $email;
    $_SESSION['isLoggedIn'] = true;
}

function logout() :void {
    session_destroy();
    session_start();
}

function is_logged_in() :bool {
    if (session_status() !== PHP_SESSION_ACTIVE || empty($_SESSION['isLoggedIn'])) {
        return false;
    }
    return true;
}
