<?php
require "database/database.php";


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
        $language = $_POST['language'];
        $releast_date = $_POST['releast_date'];
        $duration = $_POST['duration'];
        $picture = $_POST['picture'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $format = $_POST['format'];
        $subtitle = $_POST['subtitle'];
        if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['language']) && !empty($_POST['releast_date']) && !empty($_POST['duration']) && !empty($_POST['picture']) && !empty($_POST['start_date']) && !empty($_POST['end_date']) && !empty($_POST['format'])&& !empty($_POST['subtitle'])){
            require("models/seller/seller.model.php");
            CreateMovie($title , $description , $language , $releast_date, $duration ,$picture, $start_date, $end_date , $format , $subtitle);
            // echo $title ."<br>",$description."<br>" ,$language ."<br>"  , $releast_date ."<br>", $duration."<br>" ,$picture ."<br>" , $date_start ."<br>", $date_end."<br>" , $format."<br>" ,$sub_title;
            // header("Location: /seller");
            
            }
        }
