<?php

if (isset($_GET['btnVerzenden'])) {
    $voornaam = $_GET['txtVoornaam'];
    $achternaam = $_GET['txtAchternaam'];
    
    echo "welkom, $voornaam $achternaam";
} else {
    echo "niet welkom";
}


?>