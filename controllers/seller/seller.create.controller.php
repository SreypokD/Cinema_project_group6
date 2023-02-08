<?php
require "database/database.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $language = $_POST['language'];
        $releast_date = $_POST['releast_date'];
        $duration = $_POST['duration'];
        $picture = $_POST['picture'];
        echo $title ;
    // if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['language']) && !empty($_POST['releast_date']) && !empty($_POST['duration']) && !empty($_POST['picture'])){
    //     require("models/seller/seller.model.php");
    //     CreateMovie($_POST['title'], $_POST['description'] , $_POST['language'], $_POST['releast_date'], $_POST['duration'], $_POST['picture']);
     
        
    // }
}
