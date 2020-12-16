<?php

function get_db_connection() :PDO
{
    return new PDO('mysql:host=localhost;dbname=tutoriels_videos;charset=utf8', 'root', '');
}

function get_videos() :array
{
    $dbh = get_db_connection();
    $stmt = $dbh->prepare('SELECT `name`, `id` FROM `video` ORDER BY created_at ASC;');
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function get_video(int $id): ?array
{
    $dbh = get_db_connection();
    $stmt = $dbh->prepare('SELECT * FROM `video` WHERE id = :id LIMIT 1;');
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result === false)
    {
        return null;
    }
    return $result;
}
