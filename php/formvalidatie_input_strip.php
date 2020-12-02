<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            width: 400px;
        }

    </style>
</head>
<body>

    <?php

    $fname = $mail = $website = $comment = $geslacht = "";
    $fnameE = $mailE = $websiteE = $geslachtE = "";

    if (isset($_POST['submit'])) {
        
        $fname = checkInput($_POST['txtVoornaam']);
        $mail = checkInput($_POST['txtEmail']);
        $website = checkInput($_POST['txtWebsite']);
        $comment = checkInput($_POST['txtarea']);
        $geslacht = checkInput($_POST['geslacht']);

    }

    function checkInput($input) {
        $input = trim($input);
        $input = strip_tags($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

    ?>

    <form method="POST">
        <fieldset>
            <legend>PHP Formulier - Validatievoorbeeld</legend>
            Naam: <input type="text" name="txtVoornaam"><?php echo $fnameE; ?><br>
            E-mail: <input type="text" name="txtEmail"><?php echo $mailE; ?><br>
            Website: <input type="text" name="txtWebsite"><?php echo $websiteE; ?><br>
            Comment: <textarea name="txtarea"></textarea><br>
            Geslacht: <input type="radio" name="geslacht" value="Vrouw" id="radioV"><label for="radioV">Vrouw</label>
            <input type="radio" name="geslacht" value="man" checked id="radioM"><label for="radioM">Man</label><br>
            <?php echo $geslachtE; ?>
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