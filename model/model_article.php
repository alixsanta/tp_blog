<?php
class Article{
    protected $id_art;
    protected $nom_art;
    protected $content_art;
    protected $date_art;
    protected $id_cat;

public function __construct($nom, $content, $date, $idCat) {
$this->nom_art = $nom;
$this->content_art = $content;
$this->date_art = $date;
$this->id_cat = $idCat;
}

    public function getIdCat(){
        return $this->id_cat;
    }
    public function getDateArt(){
        return $this->date_art;
    }
    public function getContentArt(){
        return $this->content_art;
    }
        public function getNomArt()
    {
        return $this->nom_art;
    }
    public function getIdArt()
    {
        return $this->id_art;
    }
    public function setIdCat($id_cat){
        $this->id_cat = $id_cat;
    }
    public function setDateArt($date_art){
        $this->date_art = $date_art;
    }
    public function setContentArt($content_art)
    {
        $this->content_art = $content_art;
    }
    public function setNomArt($nom_art)
    {
        $this->nom_art = $nom_art;
    }
    public function setIdArt($id_art)
    {
        $this->id_art = $id_art;
    }
    
    public function showAllArticle($bdd):array{
    try{
        $req = $bdd->prepare('SELECT * FROM article');
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}
}
?>