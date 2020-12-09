<?php

require('pdo.php');

$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');
$birthday = filter_input(INPUT_POST, 'birthday');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');


if (strlen($password)>= 8) {
    echo "First Name: $firstName <br>";
    echo "Last Name: $lastName <br>";
    echo "Birthday: $birthday <br>";
    echo "Email: $email <br>";
    echo "Password: $password <br>";

    // SQL Query
    $query = 'INSERT INTO accounts
                (fname, lname, birthday, email, password)
              VALUES 
                (:fname, :lname, :birthday, :email, :password)';

    //PDO Statement

    $statement = $db->prepare($query);

    // Bind Form Values to SQL

    $statement->bindValue(':fname', $firstName);
    $statement->bindValue(':lname', $lastName);
    $statement->bindValue(':birthday', $birthday);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);

    // Execute SQL Query

    $statement->execute();

    // Close the Database

    $statement->closeCursor();
} else {
    echo "form is invalid";
}




