<?php

function get_db_connection() :PDO
{
    return new PDO('mysql:host=localhost;dbname=tutoriels_videos;charset=utf8', 'root', '');
}

function get_videos() :array
{
    $dbh = get_db_connection();
    $stmt = $dbh->prepare('SELECT `name` FROM `video` ORDER BY created_at ASC;');
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
