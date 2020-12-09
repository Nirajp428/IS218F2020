<?php
$yourName = filter_input(INPUT_POST,'yourName');
$fullBody = filter_input(INPUT_POST,'fullBody');
$skills = (filter_input(INPUT_POST,'skills', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY));





$yourNameLength = strlen($yourName);

$fullBodyLength = strlen($fullBody);

if (empty($yourName)){
    echo "Form is invalid <br>";
}

elseif (empty($fullBody)) {
    echo "Form is invalid <br>";
}
elseif ($fullBodyLength > 500) {
    echo "Form is invalid <br>";
}
elseif ($yourNameLength < 3) {
    echo "Form is invalid";
}
else {
    echo "Your Name: $yourName <br>";
    echo "Body: $fullBody <br>";
    echo "Skills Array: "; print_r($skills);

}


