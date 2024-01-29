<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle")</p>

<h2>Résultat</h2>


<?php

// Je crée la variable qui va contenir le tableau
$nomsRadio = ["Monsieur", "Madame", "Mademoiselle", "Autre"];

// Je crée ensuite une fonction afficherRadio qui créera la liste radio
function afficherRadio($nomsRadio) {

    // Je déclare une variable $nbnomsRadio qui compte le nombre d'élément du tableau
    // pour définir le nombre de tour que fera notre boucle
    $nbnomsRadio = count($nomsRadio);

    // Je prépare l'HTML
    $listeRadio = "<fieldset>
                    <legend> Choix du genre : </legend>
                    <form method='post'>";
    
    // Puis je crée la boucle FOR qui fera chaque <label> pour chaque entrée du tableau
    foreach($nomsRadio as $noms) {

        $listeRadio .= "<input type='radio' id='$noms' name='genre' value='$noms' />
                        <label for='$noms'>". $noms . "</label>";
    }

    // Je rajoute la fin du HTML
    $listeRadio .= "</form></fieldset>";
    
    // Et je retourne mon resultat
    return $listeRadio;
}

echo afficherRadio($nomsRadio);