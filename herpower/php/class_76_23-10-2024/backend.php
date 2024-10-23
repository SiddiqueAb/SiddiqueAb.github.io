<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Method is post </br>";

    // if (empty($_POST["fname"]) || empty($_POST["email"])) {
    //     echo "First Name or email is required </br>";
    // }

    if (empty($_POST["fname"])) {
        echo "First Name or email is required </br>";
    }
} else {
    echo "dont try to hack";
}
