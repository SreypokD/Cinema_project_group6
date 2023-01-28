<?php
function getUser() : array
{
    global $connection;
    $statement = $connection -> prepare('select * from users');
    $statement -> execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getUserByemail(string $email)
{
    global $connection;
    $statement = $connection -> prepare('select email from users where email = :email');
    $statement -> execute([
        ":email" => $email
    ]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}
// function validateLogin(){
//     global $account_error;
//     if (!isset($emailInput)){
//         $account_error = 'You need to input email';
//         if(!isset($passwordInput)){
//             $account_error = 'You need to input password';
//             if(!($emailInput == $userEmail)){
//                 $account_error = 'Your email is not correct';
//                 if(!($passwordInput == $userPassword)){
//                     $account_error = 'Your email is not correct';
//                 }
//             }
//         }
//     }else{

//     }
// }