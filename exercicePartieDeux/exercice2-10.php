<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit).</p>

<h2>Résultat</h2>

<?php

// Je déclare mes variables qui me permettrons de faire mon formulaire
$informationPersonne = ["nom", "prénom", "e-mail", "ville", "sexe"];
$choixMetier = ["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"];


// Je crée ensuite ma function qui va gerer le formulaire
function formulaire($informationPersonne, $choixMetier) {

    // Je récupère le nombre d'élément de chaque tableau
    $nbinformationPersonne = count($informationPersonne);
    $nbchoixMetier = count($choixMetier);


    // Je prépare ma variable résultat avec du HTML
    $resultat = "<fieldset>
                    <legend> Formulaire : </legend>
                 <form action='#' method='post'> <ul> ";
    
    // Je crée ensuite une première boucle pour crée toutes les input='text'
    for($i = 0; $i < $nbinformationPersonne; $i++) {

        $resultat .= "<li>
                        <label for='$informationPersonne[$i]'>
                             Votre ".$informationPersonne[$i]."
                        </label>
                        <input type='text' id='$informationPersonne[$i]' name='$informationPersonne[$i]' />";
    }

    // Comme je sais que la suite sera une liste de choix, je prépare ensuite le reste du HTML
    $resultat .= "</ul>
                    <label for='Choix du genre'>
                        Choix du metier : 
                    </label>
                    <select name='genre' id='genre-select'>
                    <option value=''> -- Choisir une option -- </option>";

    // Puis je crée la deuxieme boucle qui s'occupera d'afficher la liste à choix
    for($i = 0; $i < $nbchoixMetier; $i++) {

    $resultat .= "<option value='$choixMetier[$i]'>".$choixMetier[$i]."</option>";
    }

    // Je donne à $resultat la fin du code HTML du formulaire
    $resultat .= "</select>
                    </br></br><input type='submit' value='Envoyer le formulaire' />
                  </form>";

    // Et je return le résultat
    return $resultat;
}

echo formulaire($informationPersonne, $choixMetier);