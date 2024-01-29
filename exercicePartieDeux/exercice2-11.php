<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.
Exemple :
formaterDateFr("2018-02-23");</p>

<h2>Résultat</h2>



<?php

// fonction qui s'occupera de remplacer les dates format english en format FR
function formaterDateFr($date) {
    
    $date = new DateTime($date);
    $formattageDate = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);

    return "La date : ". $formattageDate->format($date);

}

echo formaterDateFr("");


// IntlDateFormatter

?>
