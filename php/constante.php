<?php

$KOERS = round(40.3399);
$belg_fr = 84613.29;
$euro = $belg_fr/$KOERS;

echo "De koers is: $KOERS<br>";
echo "De waarde in belgische frank bedraagt: $belg_fr<br>";
echo "Omgerekend naar euro is dat dan: $euro";

?>