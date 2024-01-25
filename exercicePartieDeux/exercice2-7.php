<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non.
</p>

<h2>Résultat</h2>

<?php 

// Je crée mon tableau associatif avec les clé et valeur true/false
$elements = [
    "Choix 1" => false,
    "Choix 2" => true,
    "Choix 3" => false
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

        // Pour tester si le choix est checked ou pas, j'utilise un switch en testant la $valeur
        switch($valeur) {
           case true: // Si c'est true, alors checked
               $resultat .= "<input type='checkbox' id='$choix' name='$choix' checked>
                            <label for='$choix'> $choix </label>";
               break;
           
           case false: // Si c'est faux, alors pas de checked
            $resultat .= "<input type='checkbox' id='$choix' name='$choix'>
                         <label for='$choix'> $choix </label>";
               break;
           }
       }

       // Je n'oublie pas de fermer la balise </fieldset>
       $resultat .= "</fieldset>";

       // Et je renvoi le resultat
       return $resultat;
}

// Puis je l'affiche ici
echo genererCheckbox($elements);
