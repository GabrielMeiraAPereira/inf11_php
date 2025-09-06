<?php
    $idade = 25;

    if ($idade >= 0 && $idade <= 12) {
        echo "Mó Kid! Nem tem pelo pubiano, se tiver é 0,1% tbm.";
        echo "<br>";
    }
    elseif ($idade >= 13 && $idade <= 17) {
        echo "Menor de idade e se acha ainda, deixa chegar no próximo.";
        echo "<br>";
    }
    elseif ($idade >= 18 && $idade <= 59) {
        echo "A vida vai te capotar, ou já fez isso e se fez... vai fazer dnv, e dnv e... cê sabe.";
        echo "<br>";
    }
    else {
        echo "Parabens! Cê tem pouco tempo sob essa sua consciência de existência, daí é... Tenebras! Mas tudo que vive morre, e qualquer consciência semelhante a nossa vai passar pelo o terror de saber que tem pouco tempo e vai 'morrer' tbm.";
        echo "<br>";
    }
?>
<?php
    $idade = 25;
switch (true) {
        case ($idade >= 0 && $idade <= 12):
            echo "??1";
            echo "<br>";
        break;
        case ($idade >= 13 && $idade <= 17):
            echo "??2";
            echo "<br>";
        break;
        case ($idade >= 18 && $idade <= 59):
            echo "??3";
            echo "<br>";
        break;
        default:
            echo "??4";
            echo "<br>";
        break;
    }
?>