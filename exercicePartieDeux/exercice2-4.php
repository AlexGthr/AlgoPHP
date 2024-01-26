<h1>Exercice 4</h1>

<p>Soit le tableau suivant :

$capitales = array 
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");

Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée.

Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);</p>

<h2>Résultat</h2>

<style>
    table,
td {
  border: 1px solid #333;
}

thead,
tfoot {
  background-color: #333;
  color: #fff;
}
</style>

<?php 

$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome",
    "Espagne" => "Madrid"
];

function afficherTableHTML($capitales) {

    // On trie le tableau par ordre alphabétique
    asort($capitales);

    // On crée la base haute du tableau
    $resultat = "<table>
                    <thead>
                        <tr> 
                            <th>PAYS</th> <th>CAPITALE</th>
                        </tr>
                    </thead>
                    <tbody>";

    // On crée ensuite le body du tableau avec la boucle foreach
    foreach($capitales as $pays => $capitale) {
        $resultat .= "<tr>
                        <td>".strtoupper($pays)."</td>
                        <td>".$capitale."</td>
                        <td><a href='https://fr.wikipedia.org/wiki/$capitale' target'_blank'>Lien</a></td>
                     </tr>";
    }

    // Puis on écrit la fin du tableau
    $resultat .= "</tbody></table>";
    return $resultat;
}

echo afficherTableHTML($capitales);