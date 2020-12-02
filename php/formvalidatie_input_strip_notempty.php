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

        .red {
            color: red;
        }

    </style>
</head>
<body>

    <?php

    $fname = $mail = $website = $comment = $geslacht = "";
    $fnameE = $mailE = $websiteE = $geslachtE = $fout = "";

    if (isset($_POST['submit'])) {


        if (empty($_POST['txtVoornaam'])) {
            $fnameE = "Voornaam mag niet leeg zijn";
            $fout = "Voornaam mag niet leeg zijn<br>";
        } else {
            $fname = checkInput($_POST['txtVoornaam']);
            if (!preg_match("/^[a-zA-Z]+[a-zA-Z ]*$/", $fname)) {
                $fnameE = "Voornaam mag enkel letters en spaties bevatten";
                $fout = "Voornaam mag enkel letters en spaties bevatten<br>";
            }
        }
        
        if (empty($_POST['txtEmail'])) {
            $mailE = "Mail mag niet leeg zijn";
            $fout .= "Mail mag niet leeg zijn<br>";
        } else {
            $mail = checkInput($_POST['txtEmail']);
            if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                $mailE = "Mail niet geldig";
                $fout .= "Mail niet geldig<br>";
            }
        }

        if (empty($_POST['txtWebsite'])) {
            $websiteE = "website mag niet leeg zijn";
            $fout .= "website mag niet leeg zijn<br>";
        } else {
            $website = checkInput($_POST['txtWebsite']);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteE = "adres niet geldig";
                $fout .= "adres niet geldig<br>";
            }
        }

        if (empty($_POST['geslacht'])) {
            $geslachtE = "geslacht mag niet leeg zijn";
            $fout .= "geslacht mag niet leeg zijn<br>";
        } else {
            $geslacht = checkInput($_POST['geslacht']);

        }

        $comment = checkInput($_POST['txtarea']);

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
            Naam: <input type="text" name="txtVoornaam"><span class="red">*</span><?php echo "<span class=\"red\">$fnameE</span>"; ?><br>
            E-mail: <input type="text" name="txtEmail"><span class="red">*</span><?php echo "<span class=\"red\">$mailE</span>"; ?><br>
            Website: <input type="text" name="txtWebsite"><span class="red">*</span><?php echo "<span class=\"red\">$websiteE</span>"; ?><br>
            Comment: <textarea name="txtarea"></textarea><br>
            Geslacht: <input type="radio" name="geslacht" value="Vrouw" id="radioV"><label for="radioV">Vrouw</label>
            <input type="radio" name="geslacht" value="man" checked id="radioM"><label for="radioM">Man</label><span class="red">*</span><br>
            <?php "<span class=\"red\">$geslachtE</span>"; ?>
            <input type="submit" name="submit">
        </fieldset>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        if (!$fout) {
            echo "voornaam: $fname<br>mail: $mail<br>website: $website<br>comment: $comment<br>geslacht: $geslacht";
        } else {
            echo "<span class=\"red\">$fout</span>";
        }

    }
    ?>
</body>
</html>