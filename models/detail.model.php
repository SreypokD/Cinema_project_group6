<?php
//database
require "database/database.php";

function listShow() : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM shows INNER JOIN movies ON shows.movie_id = movies.movie_id");
    $statement->execute();
    return $statement->fetchAll();
}

