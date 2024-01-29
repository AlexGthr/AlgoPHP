<?php 


// Class Livre
class Livre {
    private string $titre;
    private int $nbPage;
    private int $anneeParution;
    private float $prix;
    private Auteur $auteur; // J'inclus mes livres dans la classe Auteur

    public function __construct(string $titre, int $nbPage, int $anneeParution, float $prix, Auteur $auteur) {
        
        $this->titre = $titre;
        $this->nbPage = $nbPage;
        $this->anneeParution = $anneeParution;
        $this->prix = $prix;
        $this->auteur = $auteur;
        $this->auteur->addLivre($this); // J'envoi mes livres dans le tableau grace à une method

    }

    

    // GET SET Titre
    public function getTitre(): string
    {
        return $this->titre;
    }
    public function setTitre(string $titre)
    {
        $this->titre = $titre;

        return $this;
    }
    
    // GET SET NBPAGE
    public function getNbPage(): int
    {
        return $this->nbPage;
    }
    public function setNbPage(int $nbPage)
    {
        $this->nbPage = $nbPage;

        return $this;
    }
 
    // GET SET Annéeparution
    public function getAnneeParution(): int
    {
        return $this->anneeParution;
    }
    public function setAnneeParution(int $anneeParution)
    {
        $this->anneeParution = $anneeParution;

        return $this;
    }

    // GET SET PRIX
    public function getPrix(): float
    {
        return $this->prix;
    }
    public function setPrix(float $prix)
    {
        $this->prix = $prix;

        return $this;
    }


    public function getAuteur(): Auteur
    {
        return $this->auteur;
    }
    public function setAuteur(Auteur $auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function __toString() {
        return "« ".$this->titre." » <br> sortie en ".$this->anneeParution." avec ".$this->nbPage." page, est au prix de : ".$this->prix." €.";
    }
}

?>