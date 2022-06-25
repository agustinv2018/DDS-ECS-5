<?php

class Cliente
{
    public $Id;
    public $NombreApellido;
    public $NumeroDocumento;

    public function MostrarDatos()
    {
        echo 'Id: ' . $this->Id . '<br>';
        echo 'Nombre y Apellido: ' . $this->NombreApellido . '<br>';
        echo 'Numero de Documento: ' . $this->NumeroDocumento . '<br>';
    }
}
