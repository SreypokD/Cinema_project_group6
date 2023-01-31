<?php
session_start();
require 'database/database.php';
require 'models/login.model.php';

    // variable get post
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        // variable get post
        $email = $_POST['email'];
        $password = $_POST['password'];
        if(empty($password)) {
            $errors['password'] = 'Please enter a password';
        }
        if(empty($email)) {
            $errors['email'] = 'Please enter a email';
        }
        if (empty($errors)){
            $users = getUser();
            foreach($users as $user){
                $is_password = password_verify($password, $user['password']);
                if ($email == $user["email"] && $is_password){
                    $_SESSION['email'] = $user["email"];
                    $_SESSION['password'] = $user["password"];
                    header('Location:/');
                    break;
                }
                else if(!($email == $user['email'])){
                    $errors['email'] = 'Your email is not correct';
                }
                else if(!($is_password)){
                    $errors['password'] = 'Your password is not correct';
                }
            }
        }
}

require "views/login/login.view.php";