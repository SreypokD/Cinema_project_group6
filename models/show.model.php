<?php
    require "database/database.php";
    function getMovieInfo(int $id){

        global $connection;
        $statement = $connection->prepare("SELECT movie_id,title,start_date FROM movies WHERE movie_id= :id");
        $statement->execute([':id' => $id]);
        return $statement->fetch();

    }
    function createShow(string $format, string $cinema, string $hall, string $time, int $id, string $date){

        global $connection;
        $statement = $connection -> prepare("INSERT INTO shows(format, cinema, hall, time, movie_id, date) VALUES (:format, :cinema, :hall, :time, :movie_id, :date)");
        $statement->execute([
            ':format' => $format ,
            ':cinema' => $cinema ,
            ':hall' => $hall ,
            ':time' => $time ,
            ':movie_id' => $id ,
            ':date' => $date,
        ]);
        return $statement->rowCount() > 0;
    }
    function getShows(){
        global $connection;
        $statement = $connection -> prepare('SELECT * FROM shows');
        $statement -> execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    function getShowById($id){
        global $connection;
        $statement = $connection -> prepare('SELECT * FROM shows WHERE movie_id = :id');
        $statement -> execute([':id' => $id]);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
