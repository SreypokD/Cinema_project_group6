<?php
require "database/database.php";
require "models/show.model.php";
// session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $movieInfo = getMovieInfo($id);
    // $_SESSION['id'] = $title['movie_id'];
}
// print_r ($title);
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // global $_SESSION['id'];
    $dateShow = $_POST['dateShow'];
    $cinema = $_POST['cinema'];
    $hall = $_POST['hall'];
    $time = $_POST['time'];
    $screen = $_POST['screen'];

    $errors = [];
    if(!empty($dateShow)){
        $date = date_create($dateShow);
        $formate = date_format($date,"Y-m-d");
        if($formate <= date("Y-m-d")){
            $errors['date'] = "Your date must be in future";
        }
    }else{
        $errors['date'] = "You need to put your date";
    }
    $shows = getShow();
    foreach($shows as $show){
        if ($show['format'] == $screen && $show['cinema'] == $cinema && $show['time'] == $time && $show['hall'] == $hall){
            $errors['show'] = "It have all ready show";
        }else if ($movieInfo['start_date'] == $formate){
            $errors['show'] = "You need to less than date start";
        }
    }
    if (empty($errors['date']) && empty($errors['show'])){
        createShow($screen,$cinema,$hall,$time,$movieInfo['movie_id'],$formate);
        header("Location: /seller");
    }

}

require "views/shows/shows.views.php"; 