<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <img src="funkcje.png">
   <?php

// Zadanie 1
function SUMA($a, $b) {
    echo $a + $b;
}
echo "Zadanie 1: ";
SUMA(5, 3);


// Zadanie 2
function PODSTAWY($a, $b) {
    echo "Różnica: " . ($a - $b) . "<br>";
    echo "Iloczyn: " . ($a * $b) . "<br>";
    echo "Iloraz: " . ($a / $b);
}
echo "<br>Zadanie 2: ";
PODSTAWY(10, 2);


// Zadanie 3
function KALKULATOR($a, $b, $dzialanie) {
    if ($dzialanie == "+") {
        echo $a + $b;
    }

    if ($dzialanie == "-") {
        echo $a - $b;
    }

    if ($dzialanie == "*") {
        echo $a * $b;
    }

    if ($dzialanie == "/") {
        echo $a / $b;
    }
}
echo "<br>Zadanie 3: ";
KALKULATOR(10, 5, "+");


// Zadanie 4
function MAKS($a, $b, $c) {
    echo max($a, $b, $c);
}
echo "<br>Zadanie 4: ";
MAKS(5, 8, 3);


// Zadanie 5
function WZROST($wzrost) {
    if ($wzrost < 150) {
        echo "Niski";
    } elseif ($wzrost > 180) {
        echo "Wysoki";
    } else {
        echo "Średni";
    }
}
echo "<br>Zadanie 5: ";
WZROST(175);


// Zadanie 6
function BMI($wzrost, $waga) {
    $wzrost = $wzrost / 100;
    $bmi = $waga / ($wzrost * $wzrost);

    echo $bmi . "<br>";

    if ($bmi < 18.5) {
        echo "Za mało!";
    } elseif ($bmi > 25) {
        echo "Za dużo!";
    } else {
        echo "OK!";
    }
}
echo "<br>Zadanie 6: ";
BMI(180, 75);


// Zadanie 7
function STARSZY($data1, $data2) {
    if ($data1 < $data2) {
        echo "Osoba 1 jest starsza";
    } elseif ($data2 < $data1) {
        echo "Osoba 2 jest starsza";
    } else {
        echo "Osoby są w tym samym wieku";
    }
}
echo "<br>Zadanie 7: ";
STARSZY("2005-05-10", "2007-03-20");


// Zadanie 8
function PRZESTEPNY($rok) {
    if ($rok % 4 == 0) {
        echo "Rok jest przestępny";
    } else {
        echo "Rok nie jest przestępny";
    }
}
echo "<br>Zadanie 8: ";
PRZESTEPNY(2024);


// Zadanie 9
function SILA($haslo) {
    if (strlen($haslo) <= 4) {
        echo "Hasło słabe";
    } elseif (strlen($haslo) <= 8) {
        echo "Hasło średnie";
    } else {
        echo "Hasło mocne";
    }
}
echo "<br>Zadanie 9: ";
SILA("Haslo123!");


// Zadanie 10
function TROJKAT($a, $b, $c) {
    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        echo "Można utworzyć trójkąt";
    } else {
        echo "Nie można utworzyć trójkąta";
    }
}
echo "<br>Zadanie 10: ";
TROJKAT(3, 4, 5);


// Zadanie 11
function SZYFR($tekst) {

    $wynik = "";

    for ($i = 0; $i < strlen($tekst); $i++) {

        $znak = $tekst[$i];

        if ($znak >= 'a' && $znak <= 'z') {

            $kod = ord($znak) + 2;

            if ($kod > ord('z')) {
                $kod = $kod - 26;
            }

            $wynik = $wynik . chr($kod);
        }
        else {
            $wynik = $wynik . $znak;
        }
    }

    echo $wynik;
}
echo "<br>Zadanie 11: ";
SZYFR("abcxyz");
?>


</body>
</html>