<?php 

 require ("database/database.php");

    function createMovie(string $title, string $description, string $language , string $releastDate, string $duration , string $picture ,string $startDate, string $endDate , string $subtitle) : bool
    {
        global $connection;
        $statement = $connection->prepare("INSERT INTO movies(title, description,language, release_date, duration,picture ,start_date,end_date,sub_title) VALUES (:title, :description,:language,:releastDate,:duration,:picture ,:start_date,:end_date,:subtitle)");
        $statement->execute([
            ':title' => $title,
            ':description' => $description,
            'language' => $language,
            ':releastDate' => $releastDate,
            ':duration' => $duration,
            ':picture' => $picture,
            ':start_date' => $startDate,
            ':end_date' => $endDate,
            ':subtitle' => $subtitle
            
        ]);
        
        return $statement->rowCount() > 0;
    }
    
