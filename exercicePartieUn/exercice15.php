<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
</br>$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
</br>$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");
</p>

<h2>Résultat</h2>


<?php 

 // On déclare une classe Personne() qui va contenir nos informations
class Personne {
    public string $lastname;
    public string $name;
    public DateTime $dateDeNaissance;

    // On déclare la fonction __construct
    public function  __construct(string $lastname, string $name, string $dateDeNaissance) {
        $this->lastname = $lastname;
        $this->name = $name;
        $this->dateDeNaissance = new DateTime($dateDeNaissance);
    }

     // FUNCTION GET ET SET LASTNAME 
    public function getLastName() {
        return $this->lastname;
    }
    public function setLastname(string $lastname) {
        $this->lastname = $lastname;
    }

    // FUNCTION GET ET SET NAME 
    public function getName() {
        return $this->name;
    }
    public function setName(string $name) {
        $this->name = $name;
    }

     // FUNCTION GET ET SET AGE
    public function getdateDeNaissance() {
        return $this->dateDeNaissance;
    }
    public function setdateDeNaissance(string $dateDeNaissance) {
        $this->dateDeNaissance = $dateDeNaissance;
    }

    // Fonction qui calcul l'age, DATE_DIFF(Valeur 1, Valeur 2)
    public function calculAge() {
        $age = date_diff($this->dateDeNaissance, new DateTime());
        return $age->format("%y ans.");
    }

    // Fonction qui affiche le texte quand on appelle la variable ($p1 par exemple)
    public function __toString() {
        return $this->lastname." ".$this->name." " .$this->calculAge()."<br>";

    }
}

// On ajoute nos deux variable dans la classe Personne()
$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

// Puis on affiche le texte
echo $p1;
echo $p2;






