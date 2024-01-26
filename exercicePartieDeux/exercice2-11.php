<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.
Exemple :
formaterDateFr("2018-02-23");</p>

<h2>Résultat</h2>



<?php

// fonction qui s'occupera de remplacer les dates format english en format FR
function formaterDateFr($date, $format) 
{
    // Je crée le tableau avec les jours et mois anglais et FR
    $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');

    $french_days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');

    $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

    $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');

    // Puis je fais un str_replace avec les jours/mois
    return str_replace($english_months, $french_months, str_replace($english_days, $french_days, date($format, strtotime($date) ) ) );
}

echo formaterDateFr("2018-02-23" ,"l j F Y");


?>
