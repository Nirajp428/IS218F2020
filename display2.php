<?php

$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');
$birthday = filter_input(INPUT_POST, 'birthday');
$email = filter_input(INPUT_POST,  'email');
$password = filter_input(INPUT_POST, 'password');


if (strlen($password) >= 8) {
    echo "First Name: $firstName <br>";
    echo "Last Name: $lastName <br>";
    echo "Birthday: $birthday <br>";
    echo "Email: $email <br>";
    echo "Password: $password <br>";

} else {
    echo "form is invalid";
}



