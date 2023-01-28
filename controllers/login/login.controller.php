<?php
session_start();
require 'database/database.php';
require 'models/login.model.php';
// require "views/partials/nav.php";

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
                if ($email == $user["email"] && $password == $user["password"] && $is_password){
                    $_SESSION['email'] = $user["email"];
                    $_SESSION['password'] = $user["password"];
                    header('Location:/');
                    break;
                }
                else if(!($email == $user['email'])){
                    $errors['email'] = 'Your email is not correct';
                }
                else if(!($password == $user['password'])){
                    $errors['password'] = 'Your password is not correct';
                }
            }
        }
}
        
// $account_error ="";
// if (isset($_POST['submit'])){
//     $users = getUser();
//     $password=$_POST['loginPassword'];
//     if (!isset($_POST['loginEmail'])){
//         // echo 'Hello';
//         $account_error = 'You need to input email';
//         if(!isset($_POST['loginPassword'])){
//             $account_error = 'You need to input password';
//             foreach($users as $user){
//                 if(!($_POST['loginEmail'] == $user['email'])){
//                     $account_error = 'Your email is not correct';
//                     if(!($_POST['loginPassword'] == $user['password'])){
//                         $account_error = 'Your password is not correct';
//                     }
//                 }
//             }
//         }
//     }else{
        // foreach ($users as $user){
        //     if ($_POST['loginEmail'] == $user["email"] && $_POST['loginPassword'] == $user["password"] ){
        //         $_SESSION['email'] = $user["email"];
        //         $_SESSION['password'] = $user["password"];
        //         $isUser = true;
        //         header('Location:/');
        //         break;
        //     }
        // }
//     }
// }
// require "views/partials/nav.php";
require "views/login/login.view.php";