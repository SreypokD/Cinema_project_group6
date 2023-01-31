<?php 
function createUser(string $firstName, string $lastName, string $email, string $password) : bool
{
    global $connection;
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $statment = $connection -> prepare("INSERT INTO users(first_name,last_name,email,password) VALUES (:first_name,:last_name,:email,:passwords)");
    $statment -> execute([
        ':first_name' => $firstName,
        ':last_name' => $lastName,
        ':email' => $email,
        ':passwords' => $password_hash
    ]);
    return $statment->rowCount() > 0;
}

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
