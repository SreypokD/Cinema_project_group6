<?php 
 require "database/database.php";
function updateMovie(string $title, string $description, string $language , string $releastDate, string $duration , string $picture, string $start_date, string $end_date,string $sub_title, int $movie_id) :bool
{
    global $connection;
    $statement = $connection->prepare("UPDATE movies SET title=:title, 	description=:description,language=:language, release_date=:release_date, duration=:duration,picture=:picture, start_date=:start_date, end_date=:end_date, sub_title=:sub_title WHERE movie_id=:movie_id");
    $statement->execute([
        ':title' => $title,
        ':description' => $description,
        'language' => $language,
        ':release_date' => $releastDate,
        ':duration' => $duration,
        ':picture' => $picture,
        ':start_date'=>$start_date,
        ':end_date'=>$end_date,
        ':sub_title'=>$sub_title,
        ':movie_id' => $movie_id 

    ]);
    return $statement->rowCount() > 0;
}