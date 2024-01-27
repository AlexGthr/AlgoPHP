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
    private static $compteur = 0; // Compteur pour la method informationGeneral

    // Method __construct
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

    // Method __toString pour pouvoir ecrire les attributs de ma classe
    public function __toString() {
        return $this->marque." ".$this->modele." " .$this->nbPortes." ". $this->vitesseActuel." ". $this->demarrer."<br>";
    }


    // Method pour démarrer le véhicule
    public function demarrerVehicule() {
        if ($this->demarrer == false) { // Si l'objet->attribut est faux alors :
            $this->demarrer = true; // Passe l'attribut en true puis echo
            echo "<br>Le véhicule ".$this->marque." ".$this->modele." démarre.";
        }
        else {
            echo "<br>Le véhicule ".$this->marque." ".$this->modele." est déjà démarrer.";
        }
    }

    // Method pour accelerer le véhicule
    public function accelererVehicule($vitesseAAjouter) {
        if ($this->demarrer == true) {
            $this->vitesseActuel += $vitesseAAjouter;
            echo "<br>Le véhicule ".$this->marque." ".$this->modele." accélère de " .$vitesseAAjouter." km/h.";
        }
        else {
            echo "<br>Le véhicule ".$this->marque." ".$this->modele." veux accélerer de ".$vitesseAAjouter." km/h.";
            echo "<br>Pour accélerer, il faut démarrer le véhicule ".$this->marque." ".$this->modele." !";
        }
    }

    // Method pour stopper le véhicule
    public function stopperVehicule() {
        if ($this->demarrer == true &&  $this->vitesseActuel == 0) {
            $this->demarrer = false;
            echo "<br>Le véhicule ".$this->marque." ".$this->modele." est stoppé.";
        }
        else if($this->demarrer == true &&  $this->vitesseActuel > 0) {
            echo "<br>Le véhicule ".$this->marque." ".$this->modele." à une vitesse trop rapide pour se stopper !";
        }
        else {
            echo "<br>Le véhicule ".$this->marque." ".$this->modele." est déjà stoppé.";
        }
    }

    // Method pour ralentir la vitesse du véhicule
    public function ralentirVehicule($vitesseAReduire) {
        if ($this->demarrer == true && $this->vitesseActuel < $vitesseAReduire) {
            echo "<br>Le véhicule ne peux pas ralentir de ". $vitesseAReduire ." km/h alors qu'il à une vitesse de ". $this->vitesseActuel ." km/h !";
        }
        else if($this->demarrer == true) {
            $this->vitesseActuel -= $vitesseAReduire;
            echo "<br>Le véhicule ".$this->marque." ".$this->modele." ralentit de " .$vitesseAReduire." km/h.";
        }
        else {
            echo "<br>Pour ralentir, il faut démarrer le véhicule ".$this->marque." ".$this->modele." !";
        }
    }

    // Method pour récupéré la vitesse du véhicule avec une phrase pré-ecrite
    public function informationVitesse() {
        return "<br>La vitesse du véhicule ".$this->modele." ".$this->marque." est de ".$this->vitesseActuel." km/h.";
    }

    // Method pour avoir un recap complet des informations du véhicule
    public function informationGeneral() {
        self::$compteur++;

        echo "<br>Infos véhicule " . self::$compteur . " :<br>";
        echo "**************************<br>";
        echo "Nom est modèle du véhicule : ".$this->modele." ".$this->marque."<br>";
        echo "Nombre de portes : ".$this->nbPortes."<br>";
        
        if($this->demarrer == true) {
            echo "Le véhicule ".$this->marque." est démarré <br>";
        }
        else {
            echo "Le véhicule ".$this->marque." est à l'arrêt <br>";
        }

        echo "Sa vitesse actuelle est de : ".$this->vitesseActuel." km/h<br>";
    }
}

$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);

echo $v1->demarrerVehicule();
echo $v1->accelererVehicule(50);
echo $v2->demarrerVehicule();
echo $v2->stopperVehicule();
echo $v2->accelererVehicule(20);
echo $v1->informationVitesse();
echo $v2->informationVitesse();
echo "<br>";
echo $v1->informationGeneral();
echo $v2->informationGeneral();


