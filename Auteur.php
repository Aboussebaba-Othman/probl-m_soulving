<?php
class Auteur extends Utilisateur{
    public string $biographie;

    public function __construct(string $biographie){
        $this->biographie = $biographie;
    }
    public function getBiographie(): string
    
    {
        return $this->biographie;
    }
    public function setBiographie()
    
    {
         $this->biographie = $biographie;
    }
    public function afficherAuteuer(){
        echo "nom: {$this->nom}";
        echo "email: {$this->email}";
        echo "biographie: {$this->biographie}";
    }
    public function creeArticle($titre,$contenu){

    }
}
?>