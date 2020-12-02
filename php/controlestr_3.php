<?php

$aankoop = 18;
$verkoop = array(20, 100, 150, 240);

echo "Aankoop - verkoop: <hr>";

foreach ($verkoop as $a) {
    echo "De aankoopwaarde = $aankoop <br>De verkoopwaarde = $a<br>";
    if ($a <= $aankoop) {
        echo "Opgelet: er is geen winst of de aankoopwaarde ligt hoger dan de verkoopwaarde!";
    } else if (($a - $aankoop) <= 100) {
        echo "De winst ligt lager dan of is gelijk aan 100";
    } else if (($a - $aankoop) < 200) {
        echo "De winst ligt tussen 100 en 200";
    } else {
        echo "De winst ligt hoger of is gelijk aan 200";
    }
    echo "<hr>";
}

?>