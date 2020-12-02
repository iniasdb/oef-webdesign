<?php

$reeks = array( 'Mercedes-Benz', 'BMW', 'Audi' );
$reeks[] = 'jaguar';
$spaans = array( 'hand' => 'mano', 'been' => 'pierna', 'arm' => 'brazo' );
$spaans["voet"] = 'pie';
$t = 0;

echo '<h1>Geindiceerde arrays</h1>';
echo '<h2>met foreach:</h2>';

foreach ( $reeks as $a ) {
    echo "De waarde binnen de array op index $t is: $a. <br>";
    $t++;
}

echo '<h2>Met for: </h2>';

for ( $i = 0; $i < count( $reeks );
$i++ ) {
    echo "De waarde binnen de array op index {$i} is: $reeks[$i] <br>";
}

echo '<h2>associatieve arrays</h2>';

foreach($spaans as $taal => $taal_value) {
    echo "De waarde binnen de array \"\$spaans\" is: $taal_value voor $taal <br>";
}

?>