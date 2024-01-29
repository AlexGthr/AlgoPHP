<?php 

class Compte {
    private string $libelle;
    private int $solde;
    private string $devise;
    private Titulaire $titulaire;

    public function __construct(string $libelle, int $solde, string $devise, Titulaire $titulaire) {

        $this->libelle = $libelle;
        $this->solde = $solde;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
        $this->titulaire->addCompte($this);
    }

    

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of solde
     */ 
    public function getSolde()
    {
        return $this->solde;
    }
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get the value of devise
     */ 
    public function getDevise()
    {
        return $this->devise;
    }
    public function setDevise($devise)
    {
        $this->devise = $devise;

        return $this;
    }

    /**
     * Get the value of titulaire
     */ 
    public function getTitulaire()
    {
        return $this->titulaire;
    }
    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;

        return $this;
    }

    public function crediterCompte($soldeAAjouter) {
        $this->solde = $this->solde + $soldeAAjouter;
        return "<br><br>Bonjour ".$this->titulaire." ! Vous avez bien rajouter $soldeAAjouter ".$this->devise." au compte ".$this->libelle.". <br>Solde du compte : ".$this->solde." ".$this->devise; 
    }

    public function debiterCompte($soldeADebiter) {
        if($this->solde > $soldeADebiter) {

            $this->solde = $this->solde - $soldeADebiter;

            return "<br><br>Bonjour ".$this->titulaire." !
             Vous avez bien retirer $soldeADebiter ".$this->devise." au compte ".$this->libelle.".
             <br>Solde du compte : ".$this->solde." ".$this->devise;
        }
        else {
            return "<br><br>Opérations impossible. Pas assez de fond.";
        }
    }

    public function __toString() {
        return $this->libelle." ".$this->solde;
    }
}