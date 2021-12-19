<?php

class Reserva{  
    public $id_reserva;
    public $nom_reserva;
    public $data_reserva;
    public $inici_reserva;
    public $data_alliberament_reserva;
    public $num_taula;
    public function __construct($id_reserva,$nom_reserva,$data_reserva, $inici_reserva, $data_alliberament_reserva,$num_taula)
    {
        $this->id_reserva=$id_reserva;
        $this->nom_reserva=$nom_reserva;
        $this->data_reserva=$data_reserva;
        $this->inici_reserva=$inici_reserva;
        $this->data_alliberament_reserva=$data_alliberament_reserva;
        $this->num_taula=$num_taula;
    }
}