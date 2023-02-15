<?php
require "database/database.php";
// require "models/seller/seller.model.php"; 
require "models/movies/movie.create.model.php";


function validationDate(string $date, $format = 'Y-m-d'): bool
{
    $dateTime = DateTime::createFromFormat($format, $date);
    return $dateTime && $dateTime->format($format) === $date;
}
$id = "";
$title = $_POST['title'];
$description = $_POST['description'];
$language = $_POST['language'];
$releastDate = $_POST['releastDate'];
// $duration = $_POST['duration'];
$picture = $_POST['picture'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$subtitle = $_POST['subtitle'];
$hour = $_POST['h'];
$min = $_POST['mn'];
$massageEorror = [];
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    // validation 

    if(empty($title)){
        $massageEorror['title'] = "Please enter a title";
    }
    if(empty($description)){
        $massageEorror['description'] = "Please enter a description";
    }
    if(empty($language)){
        $massageEorror['language'] = "Please enter a language";
    }
    if(empty($releastDate)){
        $massageEorror['releastDate'] = "Please enter a releastDate";
    }
    if(!empty($hour)){
        if(strlen($hour) == 1 && $hour <= 4){
            $hour = true;
        }else{
            $massageEorror['h'] = "We need at least five hours or four hours";
        }
    }
    if(empty($hour)){
        $massageEorror['h'] = "Please enter a hour";
    }
    if(!empty($min)){
        if($min < 60){
            $minute = true;
        }else{
            $massageEorror['min'] = "We need at least 60 minutes";
        }
        if(strlen($min)==1){
            $timeMin = "0".$min;
        }
    }
    if(empty($min)){
        $massageEorror['min'] = "Please enter a minute";
    }
    if(empty($picture)){
        $massageEorror['picture'] = "Please enter a picture";
    }
    if(!empty($startDate)){
        $date = date_create($startDate);
        $formate = date_format($date,"Y-m-d");
        if(validationDate($formate) && $formate >= date("Y-m-d") && $releastDate <= $startDate){
            $date_valid = true;
        }else if($releastDate >= $startDate){
            $massageEorror['startDate'] = "Your date releast and start aren't much";
        }
        else{
            $massageEorror['startDate'] = "Your date today or in the future";
        }
    }else{
        $massageEorror['startDate'] = "Please enter a start date";
    }
    if(!empty($endDate)){
        $date = date_create($endDate);
        $formate = date_format($date,"Y-m-d");
        if(validationDate($formate) && $formate > date("Y-m-d") && $startDate <= $endDate){
            $date_valid = true;
        }else if($startDate >= $endDate){
            $massageEorror['endDate'] = "Your end date more than start Date";
        }
        else{
            $massageEorror['endDate'] = "Your date must be in the future";
        }
    }else{
        $massageEorror['endDate'] = "Please enter a end date";
    }

    if(empty($subtitle)){
        $massageEorror['subtitle'] = "Please enter a subtitle";
    }  

}
//  insert data to database 
if (empty($massageEorror['title']) && empty($massageEorror['subtitle']) && empty($massageEorror['endDate']) && empty($massageEorror['startDate']) && empty($massageEorror['releastDate']) && empty($massageEorror['picture']) && empty($massageEorror['h']) && empty($massageEorror['mn'])){
    $time = "0" . $hour . ":" . $timeMin . ":00";
    createMovie($title , $description , $language , $releastDate, $time ,$picture ,$startDate, $endDate, $subtitle);
    header("Location: /seller");
}
require "views/seller/seller.form.view.php";