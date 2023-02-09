<?php

    function CreateMovie(string $title, string $description, string $language , string $releast_date , string $duration , string $picture ) : bool
    {
        global $connection;
        $statement = $connection->prepare("INSERT INTO movies(title, description,language, releast_date, duration,picture) VALUES (:title, :description,:language,:releast_date,:duration,:picture)");
        $statement->execute([
            ':title' => $title,
            ':description' => $description,
            'language' => $language,
            ':releast_date' => $releast_date,
            ':duration' => $duration,
            ':picture' => $picture

        ]);
    }

    

