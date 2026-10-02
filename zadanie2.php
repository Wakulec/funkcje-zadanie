<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dziennik ocen</title>
</head>
<body>

    <h1>Dziennik ocen</h1>

    <form method="POST">
        <p>Imię i nazwisko ucznia:</p>
        <input type="text" name="uczen">
        <br><br>

        <p>Ocena:</p>
        <select name="ocena">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
        <br><br>

        <p>Przedmiot:</p>
        <input type="text" name="przedmiot">
        <br><br>

        <input type="submit" value="Zapisz ocenę">
    </form>

    <?php

    if (isset($_POST["uczen"]))
    {
        $uczen = $_POST["uczen"];
        $ocena = $_POST["ocena"];
        $przedmiot = $_POST["przedmiot"];

        if (!file_exists("oceny.txt"))
        {
            $plik = fopen("oceny.txt", "w");
            fclose($plik);
        }

        $plik = fopen("oceny.txt", "a");

        $text = $uczen . " | " . $przedmiot . " | ocena: " . $ocena . "\n";

        fwrite($plik, $text);

        fclose($plik);
    }


    echo "<h2>Zapisane oceny</h2>";

    if (file_exists("oceny.txt"))
    {
        $plik = fopen("oceny.txt", "r");

        while (!feof($plik))
        {
            $zawartosc = fgets($plik);

            if ($zawartosc != "")
            {
                echo $zawartosc;
                echo "<br>";
            }
        }

        fclose($plik);
    }

    ?>

</body>
</html>
