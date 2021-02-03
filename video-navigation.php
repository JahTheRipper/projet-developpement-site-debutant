<?php

$currentVideoId = get_asked_video_id();

// Si on a demandé une vidéo
if (is_video_asked()) {
    // On affiche le bouton précédent

    // On va récupérer la vidéo dite "d'avant"
    $previousVideoId = $currentVideoId - 1; // We want : 26
    $previousVideo = get_video($previousVideoId);
    if ($previousVideo === null) {
        display_video_navigation_link(null, 'Accueil');
    } else {
        display_video_navigation_link((int) $previousVideo['id'], $previousVideo['name']);
    }
}

// Bouton suivant
$nextVideoId = $currentVideoId + 1;
$nextVideo = get_video($nextVideoId);
if ($nextVideo !== null){
    display_video_navigation_link((int) $nextVideo['id'], $nextVideo['name']);
}
