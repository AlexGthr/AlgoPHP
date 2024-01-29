<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non.
</p>

<h2>Résultat</h2>

<?php 

// Je crée mon tableau associatif avec les clé et valeur true/false
$elements = [
    "Choix 1" => "",
    "Choix 2" => "checked",
    "Choix 3" => ""
];

// Puis je crée la fonction qui va generer le checkbox (choix à cocher)
function genererCheckbox($elements) {

    // Je crée une variable resultat qui prend en valeur le début de la checkbox
    $resultat = "<fieldset>
                    <legend>
                         Checkbox : 
                    </legend>";

    // Je crée ensuite la boucle qui va afficher les valeurs de notre tableau
    foreach($elements as $choix => $valeur) {

    
        $resultat .= "<input type='checkbox' id='$choix' name='$choix' $valeur>
        <label for='$choix'> $choix </label>";
    }   

       // Je n'oublie pas de fermer la balise </fieldset>
       $resultat .= "</fieldset>";

       // Et je renvoi le resultat
       return $resultat;
}

// Puis je l'affiche ici
echo genererCheckbox($elements);
