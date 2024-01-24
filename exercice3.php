<h1>Exercice 3</h1>

<p>A partir de la phrase de l'exercice 1, écrire l'instruction permettant de remplacer le mot "aujourd'hui" par le mot "demain". Afficher l'ancienne et la nouvelle phrase.</p>

<h2>Résultat</h2>

<?php

$contenuPhrase = "Notre formation DL commence aujourd'hui <br>"; // On crée la variable qui contient la phrase
echo $contenuPhrase;

$contenuPhrase = str_replace("aujourd'hui", "demain", $contenuPhrase); // On utilise STR_REPLACE("VALEUR A REMPLACER", "NOUVELLE VALEUR", $VARIABLE)
echo $contenuPhrase; // Puis on affiche la variable qui auras sa valeur changer

?>