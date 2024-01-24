<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de 
caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ; </p>

<h2>Résultat</h2>


<!-- Je crée le CSS en amont (vu qu'il n'y as pas de fichier CSS) -->
<style>
    .color {
        color: red;
    }
</style>

<?php 

// Je crée ma variable texte
$texte = "Mon texte en paramètre";

// Je crée la fonction qui va mettre le texte en majuscule et en rouge
 function convertirMajRouge($texte) {
    $resultat = mb_strtoupper($texte); // MB_STRTOUPPER POUR MAJUSCULE SUR TOUT
    $resultat = "<p class='color'>".$resultat."</p>"; // Ici le résultat sera l'ancienne valeur de résultat
    return $resultat; // Puis on retourne le résultat, qui sera la valeur de la variable voulu (ici $texte)
}

// Puis on affiche le resultat avec la variable voulu ($texte ici)
echo convertirMajRouge($texte);