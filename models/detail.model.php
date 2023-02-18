<?php
//database
require "database/database.php";


function getMovieItem(int $id)
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM movies  WHERE movie_id= :id");
    $statement->execute([':id' => $id]);
    return $statement->fetch();
}
function getMovieId(int $id)
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM shows INNER JOIN movies ON shows.movie_id = movies.movie_id  WHERE shows.movie_id= :id");
    $statement->execute([':id' => $id]);
    return $statement->fetch();
}

function getShow(int $id)
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM shows  WHERE movie_id= :id");
    $statement->execute([':id' => $id]);
    return $statement->fetchAll();
}

function listShow() : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM shows INNER JOIN movies ON shows.movie_id = movies.movie_id");
    $statement->execute();
    return $statement->fetchAll();
}