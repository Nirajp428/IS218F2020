<?php

//Get Values of text inputs
$email = filter_input(INPUT_POST,'email');
$password = filter_input(INPUT_POST, 'password');

$passwordlength =(strlen($password));

if (empty($password)){
    echo "Form is invalid";
}
if ($passwordlength > 8) {
    echo "Email: $email <br>";
    echo "Password: $password <br>";

} else {
    echo "form is invalid";
}





//if (strlen($email) < 0) {
//  echo "form is invalid";
//} else if (strlen($password) >= 8) {
//    echo "Email: $email <br>";
//    echo "Password: $password <br>";

//} else {
//  echo "form is invalid";
//}




