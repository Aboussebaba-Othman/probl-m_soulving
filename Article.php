<?php
class Article {
    public string $title;
    public string $contenu;
    public date $datePublication;
    public Auteur $auteur;

    public function __construct(string $title,string $contenu,date $datePublication,Auteur $auteur){
        $this->title = $title;
        $this->contenu = $contenu;
        $this->datePublication = $datePublication;
        $this->auteur = $auteur;
    }
    public function getTitle(): string
    
    {
        return $this->title;
    }
    public function getContenu(): string
    
    {
        return $this->contenu;
    }
    
    public function getDatePublication()
    
    {
         $this->datePublication;
    }
    public function getAuteur()
    
    {
         $this->auteur;
    }
    public function setTitle()
    
    {
         $this->title = $title;
    }
    public function setTitle()
    
    {
         $this->contenu = $contenu;
    }
    public function setTitle()
    
    {
         $this->datePublication = $datePublication;
    }
    public function setTitle()
    
    {
         $this->auteur = $auteur;
    }
    public function afficherArticle(){
        echo "tile: {$this->title}";
        echo "auteur: {$this->auteur}";
        echo "datePublication: {$this->datePublication}";
        echo "contenu: {$this->contenu}";
    }
}