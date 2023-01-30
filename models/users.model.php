<?php 
function createUser(string $firstName, string $lastName, string $email, string $password) : bool
{
    global $connection;
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $statment = $connection -> prepare("INSERT INTO users(first_name,last_name,email,password) VALUES (:first_name,:last_name,:email,:password)");
        $statment -> execute([
            ':first_name' => $_POST['first_name'],
            ':last_name' => $_POST['last_name'],
            ':email' => $_POST['email'],
            ':password' => $password_hash
    ]);
    return $statment->rowCount() > 0;
}



