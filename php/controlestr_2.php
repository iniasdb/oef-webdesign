<?php

$dagen = array(1 => "maandag", 2 => "dinsdag", 3 => "woensdag", 4 => "donderdag", 5 => "vrijdag", 6 => "zaterdag", 7 => "zondag");

echo "De dagen van de week <hr>";

foreach ($dagen as $dag => $dag_naam) {
    echo "dag $dag van de week is $dag_naam<br>";
}

?>