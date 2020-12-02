<?php

$tafel = 4;

echo "De tafel van $tafel<hr>";

for ($i=1; $i <= 10; $i++) { 
    $result = $i*$tafel;
    echo "$i X $tafel = $result<br>";
}

?>