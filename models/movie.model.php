<?php
//database
require "database/database.php";

function getMovie() : array
{
    global $connection;
    $statement = $connection->query("SELECT * FROM movies");
    $movieItems = $statement->fetchAll();
    return $movieItems;
}

function getMovieItem(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM movies WHERE movie_id=:id");
    $statement->execute([':id' => $id]);
    return $statement->fetch();
}