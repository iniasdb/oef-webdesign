<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            width: 450px;
        }

    </style>
</head>
<body>

    <?php

    $fname = $mail = $website = $comment = $geslacht = "";

    if (isset($_POST['submit'])) {

        $fname = $_POST['txtVoornaam'];
        $mail = $_POST['txtEmail'];
        $website = $_POST['txtWebsite'];
        $comment = $_POST['txtarea'];
        $geslacht = $_POST['geslacht'];

    }
    ?>

    <form method="POST">
        <fieldset>
            <legend>PHP Formulier - Validatievoorbeeld</legend>
            Naam: <input type="text" name="txtVoornaam"><br>
            E-mail: <input type="text" name="txtEmail"><br>
            Website: <input type="text" name="txtWebsite"><br>
            Comment: <textarea name="txtarea"></textarea><br>
            Geslacht: <input type="radio" name="geslacht" value="Vrouw" id="radioV"><label for="radioV">Vrouw</label>
            <input type="radio" name="geslacht" value="man" checked id="radioM"><label for="radioM">Man</label><br>
            <input type="submit" name="submit">
        </fieldset>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        echo "voornaam: $fname<br>mail: $mail<br>website: $website<br>comment: $comment<br>geslacht: $geslacht";
    }
    ?>
</body>
</html>