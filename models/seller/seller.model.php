<?php

    function createMovie(string $title, string $description, string $language , string $releastDate, string $duration , string $picture ) : bool
    {
        global $connection;
        $statement = $connection->prepare("INSERT INTO movies(title, description,language, releast_date, duration,picture) VALUES (:title, :description,:language,:releastDate,:duration,:picture)");
        $statement->execute([
            ':title' => $title,
            ':description' => $description,
            'language' => $language,
            ':releastDate' => $releastDate,
            ':duration' => $duration,
            ':picture' => $picture

        ]);
        return $statement->rowCount() > 0;
    }
    

