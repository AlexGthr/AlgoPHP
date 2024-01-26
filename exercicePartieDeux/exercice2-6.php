<h1>Exercice 6</h1>

<p>réer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau 
de valeurs.
</p>

<h2>Résultat</h2>

<?php 

$elements = ["Monsieur", "Madame", "Mademoiselle", "Autre"];

function afficherListe($elements) {

    // Je récupère le nombre d'élément dans la variable
    $nbelements = count($elements);

    // Je commence à crée la première partie de ma liste déroulante
    $listeDeroulante = "<label for='Choix du genre'>
                            Votre genre : 
                        </label>
                        <select name='genre' id='genre-select'>
                        <option value='' disabled='disabled'> -- Choisir une option -- </option>";
    
    // Puis avec une boucle je crée le reste de la liste deroulante en concatenant la
    // variable $formulaire
    for($i = 0; $i < $nbelements; $i++) {
    $listeDeroulante .= "<option value='$elements[$i]'>".$elements[$i]."</option>";
    }

    // Je rajoute la fin de la liste avec les balises fermante
    $listeDeroulante .= "</select>";

    // Puis je retourne le resultat
    return $listeDeroulante;
}

echo afficherListe($elements);