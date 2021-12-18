<?php
class Taula{
    public $num_taula;
    public $num_llocs_taula;
    public $id_sala;
    
    function __construct($num_taula,$num_llocs_taula,$id_sala,$estat_taula){
        $this->num_taula=$num_taula;
        $this->num_llocs_taula=$num_llocs_taula;
        $this->id_sala=$id_sala;
}
}