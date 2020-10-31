<?php
$yourName = filter_input(INPUT_POST,'yourName');
$fullBody = filter_input(INPUT_POST,'fullBody');
$fullBody = htmlspecialchars($fullBody);
$skills = filter_input(INPUT_POST,'skills',FITLER_SANITZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);


if (strlen($yourName) >= 3) {
    echo "Your Name: $yourName <br>";
} else {
    echo "form is invalid";
}


echo "Skills: ($skills) <br>";

if (strlen($fullBody) <= 500) {
    echo "Body: $fullBody <br>";

} else {
    echo "form is invalid";
}


