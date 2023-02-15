<?php
require "database/database.php";
require "models/seller/seller.model.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
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
}

require "views/shows/shows.views.php"; 