<?php

// $heading = "Movie Page";

// require 'models/movie.model.php';

// $posts = getPosts();
require "views/register/register.view.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email'])&&!empty($_POST['password'])){
        $statment = $connection -> prepare("INSERT INTO users(first_name,last_name,email,password) VALUES (:first_name,:last_name,:email,:password)");
        $statment -> execute([
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ]);
}
}