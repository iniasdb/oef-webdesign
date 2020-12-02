<?php

if (isset($_POST['submit'])) {
    $fname = $_POST['txtVoornaam'];
    $lname = $_POST['txtAchternaam'];

    echo "welkom $fname $lname";
} else {
    echo "moogde ni zien kut";
}

?>