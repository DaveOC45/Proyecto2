<?php
class Evento{
    public $id_usuari;
    public $nom_usuari;
    public $cognom_usuari;
    public $contra_usuari;
    public $tipus_usuari;
    
    function __construct($id_usuari,$nom_usuari,$cognom_usuari,$contra_usuari,$tipus_usuari){
        $this->id_usuari=$id_usuari;
        $this->nom_usuari=$nom_usuari;
        $this->cognom_usuari=$cognom_usuari;
        $this->contra_usuari=$contra_usuari;
        $this->tipus_usuari=$tipus_usuari;
}
}