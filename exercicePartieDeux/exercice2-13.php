<h1>Exercice 13</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et 
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus 
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule 
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un 
véhicule. 

v1 ➔ "Peugeot","408",5
v2 ➔ "Citroën","C4",3

Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de 
tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments 
suivants :</p>

<h2>Résultat</h2>

<?php 

class Voiture {

    // Je déclare les attributs de ma classe Voiture
    public string $marque;
    public string $modele;
    public string $nbPortes;
    public int $vitesseActuel;
    public bool $demarrer = false;

    // Fonction __construct
    public function __construct(string $marque, string $modele, string $nbPortes, int $vitesseActuel = 0) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuel = $vitesseActuel;
    }


    // ======= GET SET $marque =======
    public function getMarque()
    {
        return $this->marque;
    }
    public function setMarque($marque)
    {
        $this->marque = $marque;
        return $this;
    }

    // ======= GET SET $modele =======
    public function getModele()
    {
        return $this->modele;
    }
    public function setModele($modele)
    {
        $this->modele = $modele;
        return $this;
    }

    // ======= GET SET $nbPortes =======
    public function getNbPortes()
    {
        return $this->nbPortes;
    }
    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;
        return $this;
    }

    // ======= GET SET $vitesseActuel =======
    public function getVitesseActuel()
    {
        return $this->vitesseActuel;
    }
    public function setVitesseActuel($vitesseActuel)
    {
        $this->vitesseActuel = $vitesseActuel;
        return $this;
    }

    // ======= GET SET $demarrer =======
    public function getDemarrer()
    {
        return $this->demarrer;
    }
    public function setDemarrer($demarrer)
    {
        $this->demarrer = $demarrer;
        return $this;
    }

    // Fonction __toString pour pouvoir ecrire les attributs de ma classe
    public function __toString() {
        return $this->marque." ".$this->modele." " .$this->nbPortes." ". $this->vitesseActuel." ". $this->demarrer."<br>";
    }


    // Fonction pour démarrer le véhicule
    public function demarrerVehicule() {
        if ($this->demarrer == false) { // Si l'objet->attribut est faux alors :
            $this->demarrer = true; // Passe l'attribut en true puis echo
            echo "Le véhicule ".$this->marque." ".$this->modele." démarre.";
        }
        else {
            echo "Le véhicule ".$this->marque." ".$this->modele." est déjà démarrer.";
        }
    }
}

$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);

echo $v2;

echo $v1->demarrerVehicule();
echo $v1->demarrerVehicule();
echo $v2->demarrerVehicule();