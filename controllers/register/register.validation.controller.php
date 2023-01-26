<?php
// if(isset($_POST['first_name']) &&
//     isset($_POST['last_name'])&& 
//     isset($_POST['password']) && 
//     isset($_POST['verify_pass']))
//     {
//     $first_name = $_POST['first_name'];
//     $last_name = $_POST['last_name'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $verify_pass = $_POST['verify_pass'];


//     if (empty($first_name)){
//         $errors  = "please enter first name"; 
//         header("Location: views/register/register.view.php?error=$errors");
//         exit();
//     }else if (empty($last_name)){
//         $errors = "please enter last name"; 
//         header("Location: views/register/register.view.php?error=$errors");
//         exit();
//     }else if (empty($email)){
//         $errors = "please enter email address";  
//         header("Location: views/register/register.view.php?error=$errors");
//         exit();
//     }else if(empty($password)){
//         $errors = "please enter password";  
//         header("Location: views/register/register.view.php?error=$errors");
//         exit();
//     }else if($verify_pass !== $password){
//         $errors = "please enter re password";  
//         header("Location: views/register/register.view.php?error=$errors");
//         exit();
//     }else{
//         echo "success";
//     }

// }