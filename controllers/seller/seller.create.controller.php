<?php
require "database/database.php";
require("models/seller/seller.model.php"); 
$id = "";
$title = $_POST['title'];
$description = $_POST['description'];
$language = $_POST['language'];
$releastDate = $_POST['releastDate'];
$duration = $_POST['duration'];
$picture = $_POST['picture'];
// $start_date = $_POST['start_date'];
// $end_date = $_POST['end_date'];
// $format = $_POST['format'];
// $subtitle = $_POST['subtitle'];
echo $title ."<br>",$description."<br>" ,$language ."<br>"  , $releastDate ."<br>", $duration."<br>" ,$picture;
if(isset($_GET['id'])){
    $id = $_GET['id']; 
    $update = updateMovie($title, $description, $language, $releastDate, $duration, $picture, $id);
    header("Location: /seller");
}
else {
    if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['language']) && !empty($_POST['releastDate']) && !empty($_POST['duration']) && !empty($_POST['picture'])){
        
        createMovie($title , $description , $language , $releastDate, $duration ,$picture);
        // header("Location: /seller");
    }
}



// if($_SERVER['REQUEST_METHOD'] == 'POST') 
// {
//     $title = $_POST['title'];
//     $description = $_POST['description'];
//         $language = $_POST['language'];
//         $releastDate = $_POST['releastDate'];
//         $duration = $_POST['duration'];
//         $picture = $_POST['picture'];
//         // $start_date = $_POST['start_date'];
//         // $end_date = $_POST['end_date'];
//         // $format = $_POST['format'];
//         // $subtitle = $_POST['subtitle'];
//         echo $title ."<br>",$description."<br>" ,$language ."<br>"  , $releastDate ."<br>", $duration."<br>" ,$picture;
//         if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['language']) && !empty($_POST['releastDate']) && !empty($_POST['duration']) && !empty($_POST['picture'])){
//             require("models/seller/seller.model.php"); 
//             createMovie($title , $description , $language , $releastDate, $duration ,$picture);
//             // header("Location: /seller");
//         }
// }
