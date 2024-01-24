<h1>Exercice 1</h1>

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
    "Italie" => "Rome"
];

function afficherTableHTML($capitales) {

    // On trie le tableau par ordre alphabétique
    ksort($capitales);

    // On crée la base haute du tableau
    $resultat = "<table>
                    <thead>
                        <tr> 
                            <th>PAYS</th> <th>CAPITALE</th>
                        </tr>
                    </thead>
                    <tbody>";
    echo $resultat;

    // On crée ensuite le body du tableau avec la boucle foreach
    foreach($capitales as $pays => $capitale) {
        $resultat = "<tr><td>".$pays."</td><td>".$capitale."</td></tr>";
        echo $resultat;
    }

    // Puis on écrit la fin du tableau
    $resultat = "</tbody></table>";
    echo $resultat;
    return $resultat;
}

afficherTableHTML($capitales);