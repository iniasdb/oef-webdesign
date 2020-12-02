<!DOCTYPE html>
<html>

<head>
    <title>Form - POST</title>
</head>

<body>
    <form id="formget" name="formget" action="" method="POST">
        <fieldset>
            <legend>Formulier met GET:</legend>
            Vul volgende gegevens in:<br>
            voornaam:<br>
            <input type="text" name="txtVoornaam" id="txtVoornaam"><br>
            achternaam:<br>
            <input type="text" name="txtAchternaam" id="txtAchternaam"><br>
            <input type="submit">
        </fieldset>
    </form>

    <?php

    if(!empty($_POST)) {

        $fname = htmlspecialchars(stripslashes(trim(strip_tags($_POST['txtVoornaam']))));
        $lname = htmlspecialchars(stripslashes(trim(strip_tags($_POST['txtAchternaam']))));

        echo "welkom $fname $lname";
    }

    ?>
</body>

</html>