<?php

function get_db_connection() :PDO
{
    return new PDO('mysql:host=localhost;dbname=tutoriels_videos;charset=utf8', 'root', '');
}

function get_videos() :array
{
    $databaseHandler = get_db_connection();
    $statement = $databaseHandler->prepare('SELECT `name`, `id` FROM `video` ORDER BY created_at ASC;');
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function get_video(int $id): ?array
{
    $databaseHandler = get_db_connection();
    $statement = $databaseHandler->prepare('SELECT * FROM `video` WHERE id = :id;');
    $statement->bindParam(':id', $id);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);

    if ($result === false)
    {
        return null;
    }
    return $result;
}

function get_user_by_email(string $email): ?array
{
    $databaseHandler = get_db_connection();
    $statement = $databaseHandler->prepare('SELECT * FROM admin_user WHERE email LIKE :email;');
    $statement->bindParam(':email', $email);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    if ($result === false)
    {
        return null;
    }
    return $result;
}
