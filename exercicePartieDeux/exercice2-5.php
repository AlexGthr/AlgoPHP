<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.
</p>

<h2>Résultat</h2>

<?php

// Je crée ma variable tableau avec mes valeurs
$nomsInput = ["Nom", "Prénom", "Ville"];

// Je crée ensuite la fonction afficherInput()
function afficherInput($nomsInput) {

    // Je récupère le nombre d'élément dans la variable
    $nbnomsInput = count($nomsInput);

    // Je commence à crée la première partie de mon formulaire
    $formulaire = "<form action='mon formulaire' method='post'>
                        <ul>";
    
    // Puis avec une boucle je crée le reste du formulaire en concatenant la variable $formulaire
    foreach($nomsInput as $input) {

        $formulaire .= "<li>
                        <label for='$input'>".$input."</label>
                        <input type='text' id='$input' name='$input'/>
                    </li>";

    }

    // Je rajoute la fin du formulaire avec les balises fermante
    $formulaire .= "</ul></form>";

    // Puis je retourne le resultat
    return $formulaire;
}

// Et j'appelle ensuite la fonction pour l'afficher
echo afficherInput($nomsInput);