<?php

$hash = trim(strtolower(readline("Do you want to hash your phrase with md5 or sha1? ")));

if ($hash == "md5" || $hash == "sha1") {
    $input = trim(readline("Enter your phrase: "));
    if ($hash == "md5") {
        $input = md5($input);
    } else if ($hash == "sha1") {
        $input = sha1($input);
    }
    echo "Hashed! Here it is: " . $input;
} else {
    echo "You must enter either 'md5' or 'sha1'.";
}

?>