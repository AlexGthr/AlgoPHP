<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit).</p>

<h2>Résultat</h2>

<style>
    li {
        list-style-type: none;
    }
</style>

<?php

// Je déclare mes variables qui me permettrons de faire mon formulaire
$informationPersonne = ["nom" => "text", 
                        "prénom" => "text", 
                        "e-mail" => "email", 
                        "ville" => "text"
                        ];

$nomsRadio = ["Monsieur", "Madame", "Mademoiselle", "Autre"];
$choixMetier = ["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"];
    

// Function qui crée la partie case texte à remplir
function texteFormulaire ($informationPersonne) {

    $resultat = "<li>";
  
    foreach($informationPersonne as $key => $valeur) {

        $resultat .= "<label for='$key'>
                             Votre ".$key."
                        </label>
                        <input type='$valeur' id='$key' name='$key' /><br>";
    }

    return $resultat;
}  

// Function qui va crée la liste radio
function radioFormulaire ($nomsRadio) {

    $resultat = "";

    foreach($nomsRadio as $noms) {

        $resultat .= "<input type='radio' id='$noms' name='genre' value='$noms' />
                        <label for='$noms'>". $noms . "</label>";
    }

    return $resultat;
}

// Function qui va crée la liste de choix
function listeChoixFormulaire ($choixMetier) {

    $resultat = "</ul>
                    <label for='Choix du genre'>
                        Choix du metier : 
                    </label>
                    <select name='genre' id='genre-select'>
                    <option value='' disabled='disabled'> -- Choisir une option -- </option>";

    foreach($choixMetier as $choix) {

    $resultat .= "<option value='$choix'>".$choix."</option>";
    }

    $resultat .= "</select>";

    return $resultat;
}


function formulaire($informationPersonne, $nomsRadio, $choixMetier) {
   
    $resultat = "<fieldset>
                     <legend> Formulaire : </legend>
                <form action='#' method='post'> <ul> ";
    
    $resultat .= texteFormulaire($informationPersonne);
    $resultat .= radioFormulaire($nomsRadio);
    $resultat .= listeChoixFormulaire($choixMetier);

    $resultat .= "</select>
                    </br></br><input type='submit' value='Envoyer le formulaire' />
                  </form>";

    return $resultat;

}

echo formulaire($informationPersonne, $nomsRadio, $choixMetier);